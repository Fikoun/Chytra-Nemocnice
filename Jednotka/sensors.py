import random
import request
import time

from sense_hat import SenseHat
sense = SenseHat()


while True:
	time.sleep(10)
	h = sense.get_humidity()
	h = round(h, 1)
	
	t = sense.get_temperature()
	t = round(t, 1)
	
	e = random.randint(55,90)


	r = requests.post('http://10.10.4.99/Chytra-Nemocnice/Kontroln%C3%AD%20Syst%C3%A9m/raspberry/data.php', data = {'temp': int(t), 'hum': int(h), 'ekg': int(e)})
	print(r.text)
