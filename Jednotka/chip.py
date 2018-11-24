import os
import time

while True:
        time.sleep(5)
        cip = input()
        os.system("sensible-browser http://10.10.4.114:8888/Chytra-Nemocnice/Kontroln%C3%AD%20Systém/chip.php?id=" + cip)
