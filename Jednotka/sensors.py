import random
import request
import time

from sense_hat import SenseHat
sense = SenseHat()


while True:

        #po jaké době se má kód opakovat
	time.sleep(10)

        #sensor nám pošle aktuální vlhkost
	h = sense.get_humidity()
	h = round(h, 1)

	#sensor nám pošle aktuální teplotu
	t = sense.get_temperature()
	t = round(t, 1)

	#sensor nám pošle aktuální tep 
	e = random.randint(55,90)

        #odešle hodnot ze sensorů do webové aplikace 
	r = requests.post('http://10.10.4.99/Chytra-Nemocnice/Kontroln%C3%AD%20Syst%C3%A9m/raspberry/data.php', data = {'temp': int(t), 'hum': int(h), 'ekg': int(e)})
	print(r.text)
