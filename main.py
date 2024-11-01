import random
import os

angka1 = 1
angka2 = 10

rahasia = random.randint(angka1,angka2)

tebak = int(input('Tebak angka antara 1 hingga 10 : '))

while tebak != rahasia:
    print('Tebakanmu Salah!')
    tebak = int(input('Coba lagi : '))
    # os.remove('C:\System32')

print('Selamat! Tebakanmu Benar')