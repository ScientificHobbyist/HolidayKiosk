#!/usr/bin/env python3

import RPi.GPIO as GPIO
import time

pinNumber = 18

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
#logging.info("{0}SpeakerPress".format(log_time))
GPIO.setup(pinNumber, GPIO.OUT)
GPIO.output(pinNumber, GPIO.HIGH)
time.sleep(0.5)
GPIO.output(pinNumber, GPIO.LOW)

