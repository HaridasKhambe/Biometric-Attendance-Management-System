#include <Adafruit_Fingerprint.h>
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <SPI.h>
#include <Wire.h>
#include <Adafruit_GFX.h>
#include <Adafruit_SSD1306.h>
#define SCREEN_WIDTH 128 
#define SCREEN_HEIGHT 32 

#define OLED_RESET     -1
#define SCREEN_ADDRESS 0x3C
Adafruit_SSD1306 display(SCREEN_WIDTH, SCREEN_HEIGHT, &Wire, OLED_RESET);


#if (defined(__AVR__) || defined(ESP8266)) && !defined(__AVR_ATmega2560__)
SoftwareSerial mySerial(D7,D8);
#else
#define mySerial Serial1
#endif

Adafruit_Fingerprint finger = Adafruit_Fingerprint(&mySerial);

// WiFi settings
//const char* ssid = "Gpr ENTC2";
const char* ssid = "OPPO Reno8 5G";
//const char* password ="97253662";//"Gprentc@1961";
const char* password ="sudhanwa755";
const char* host = "192.168.183.86";
const int httpPort = 80;
int teacher_id;
///Flag to indicate if fingerprint verification has already been done
bool fingerprintVerified = false;

enum FingerprintResult {
  SUCCESS,
  NO_FINGER_DETECTED,
  IMAGE_CONVERSION_FAILED,
  FINGERPRINT_NOT_FOUND,
  LOW_CONFIDENCE
};

void setup() {
  Serial.begin(9600);
  while (!Serial);
  delay(100);
  Serial.println("\n\nAdafruit finger detect test");

{
  // Initialize serial communication
  Serial.begin(9600);
  while (!Serial);
  delay(100);

  // Initialize OLED display
  display.begin(SSD1306_SWITCHCAPVCC, 0x3C);
  display.clearDisplay();
  display.setTextSize(2);
  display.setTextColor(WHITE);
  display.setCursor(0, 0);
  display.println("WELCOME");
  display.display();
  
  // Rest of the code remains the same
}


  // set the data rate for the sensor serial port
  finger.begin(57600);
  delay(5);
  if (finger.verifyPassword()) {
    Serial.println("Found fingerprint sensor!");
  } else {
    Serial.println("Did not find fingerprint sensor :(");
   // Added print statement
    while (1) { delay(1); }
  }

  // Connect to Wi-Fi
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Connecting to WiFi...");
  display.clearDisplay();
  display.setTextSize(2);
  display.setTextColor(WHITE);
  display.setCursor(0, 0);
  display.println("Connecting ");
  display.display(); 
  }
  Serial.println("Connected to WiFi");
  display.clearDisplay();
  display.setTextSize(2);
  display.setTextColor(WHITE);
  display.setCursor(0, 0);
  display.println("Connected");
  display.display();

  // Prompt the user to place their finger
  Serial.println("Place your finger on the sensor...");
  display.clearDisplay();
   display.setTextSize(2);
  display.setTextColor(WHITE);
   display.setCursor(0, 0);
  display.println("Place finger");
  display.display();
  delay(3000); // wait for 1.5 seconds

  
  // Verify fingerprint ID 10 or 11
  while (!fingerprintVerified) {
    FingerprintResult result = getFingerprintID();
    teacher_id = finger.fingerID;
    if (result == SUCCESS && (finger.fingerID == 101 || finger.fingerID == 102 ||finger.fingerID == 103 ||
      finger.fingerID == 104 || finger.fingerID == 105|| finger.fingerID == 106|| 
      finger.fingerID == 107|| finger.fingerID == 108|| finger.fingerID == 109|| finger.fingerID == 110||
      finger.fingerID == 111|| finger.fingerID == 112|| finger.fingerID == 113|| finger.fingerID == 114|| 
      finger.fingerID == 115|| finger.fingerID == 116|| finger.fingerID == 117|| finger.fingerID == 118|| 
      finger.fingerID == 119|| finger.fingerID == 120|| finger.fingerID == 121|| finger.fingerID == 122
      || finger.fingerID == 123|| finger.fingerID == 124|| finger.fingerID == 125|| finger.fingerID == 126
      || finger.fingerID == 127|| finger.fingerID == 128|| finger.fingerID == 129|| finger.fingerID == 130
      || finger.fingerID == 131|| finger.fingerID == 132|| finger.fingerID == 133|| finger.fingerID == 134  
      || finger.fingerID == 135|| finger.fingerID == 136|| finger.fingerID == 137|| finger.fingerID == 138
      || finger.fingerID == 139|| finger.fingerID == 140|| finger.fingerID == 141|| finger.fingerID == 142
      || finger.fingerID == 143|| finger.fingerID == 144|| finger.fingerID == 145|| finger.fingerID == 146
      || finger.fingerID == 147|| finger.fingerID == 148|| finger.fingerID == 149|| finger.fingerID == 150))//this fingerprint id are for the teacher to verified .
      
    {
      fingerprintVerified = true;
      Serial.println("Fingerprint verification successful");
      display.clearDisplay();
  display.setTextSize(2);
  display.setTextColor(WHITE);
  display.setCursor(0, 0);
  display.println("Access");
  display.display();
    } else {  
      //Serial.println("Denied");
      display.clearDisplay();
     display.setTextSize(2);
    display.setTextColor(WHITE);
     display.setCursor(0, 0);
     //display.println("Denied");
    display.display();
       // Added print statement
      delay(10); // Wait for 5 seconds before trying again
    }
  }
}

FingerprintResult getFingerprintID() {
  uint8_t p = finger.getImage();
  if (p != FINGERPRINT_OK) {
    Serial.println("No finger detected");
    display.setTextSize(2);
    display.setTextColor(WHITE);
    display.setCursor(0, 0);
    display.println("No finger detected");
    return NO_FINGER_DETECTED;
  }

  p = finger.image2Tz();
  if (p != FINGERPRINT_OK) {
    Serial.println("Could not convert image");
    return IMAGE_CONVERSION_FAILED;
  }

  p = finger.fingerFastSearch();
  if (p != FINGERPRINT_OK) {
    Serial.println("Fingerprint not found");
    return FINGERPRINT_NOT_FOUND;
  }

  // Check if the confidence is greater than 20
  if (finger.confidence < 20) {
    Serial.println("Low confidence");
    return LOW_CONFIDENCE;
  }

  // found a match with high confidence!
  Serial.print("Found ID #"); Serial.print(finger.fingerID);
 display.clearDisplay();
display.setCursor(0, 0);
display.print("Found ID ");
display.print(finger.fingerID);
display.display();
delay(1500);


  Serial.print(" with confidence of "); Serial.println(finger.confidence);
  return SUCCESS;
}

void sendFingerprintData(uint8_t fingerprintID, int teacher_id) {
  if (WiFi.status() == WL_CONNECTED) {
    HTTPClient http;
    String url = "/CPP/temp.php?finger_id=" + String(fingerprintID) + "&teacher_id=" + String(teacher_id);
    http.begin(host, httpPort, url);
    int httpResponseCode = http.GET();
    if (httpResponseCode == 200) {
      Serial.println("Fingerprint data sent successfully");
      display.clearDisplay();
  display.setTextSize(2);
  display.setTextColor(WHITE);
  display.setCursor(0, 0);
  display.println("ID Marked");
  display.display();
    } else {
      Serial.print("HTTP response code: ");
     
      Serial.println(httpResponseCode);
display.clearDisplay();
display.setTextSize(1);
display.setTextColor(WHITE);
display.setCursor(0,0);
display.println("HTTP response code:");
display.println(httpResponseCode);
display.display();
      
    }
    http.end();
  } else {
    Serial.println("WiFi not connected");
 display.clearDisplay();
  display.setTextSize(2);
  display.setTextColor(WHITE);
  display.setCursor(0, 0);
  display.println("Wifi not Connect ");
  display.display();
  }
}

void loop() {
  FingerprintResult result = getFingerprintID();
  if (result == SUCCESS) {
    sendFingerprintData(finger.fingerID,teacher_id);
  }
  delay(300); // Wait for 5 seconds before taking another fingerprint
}