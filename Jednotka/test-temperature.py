import requests
import time
from sense_hat import SenseHat
sense = SenseHat()

url = 'http://10.10.4.99/Chytra-Nemocnice/Kontroln%C3%AD%20Syst%C3%A9m/test.php'

while True:
	time.sleep(10)
	t = sense.get_temperature()

	t = round(t, 1)

	r = requests.post(url, data = {'temp': int(t)})

	print(r.text)