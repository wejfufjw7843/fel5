<?php
def count_calls():
    static_counter = 0
    static_counter += 1
    return static_counter

# Вызываем функцию несколько раз
for i in range(5):
    print(count_calls())
?>