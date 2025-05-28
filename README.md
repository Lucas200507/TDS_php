## Algumas funções em php:
- <font color="red">explode('string delimiter', $string)</font> -> formata a string como array. O primeiro elemento será até o delimiter.
  . EX: $string = 'Joao Robson'; / $stringFormat =  explode(' ', $string); / $stringFormat[0] = 'Joao'

- number_format($float, qnt_casasDecimais) -> formata o número flutuante em relação a quantidade de casas decimais inseridas
  . EX: $num = 548.26458s; / $numFormat = number_format($num, 2) -> 548.26;

- rand(min, max) -> gera um número aleatório entre o número mínimo e máximo.
  . EX: rand(1, 5) -> gera um número igual e entre 1 e 5;

 Este é um exemplo com <font color="blue">letras azuis</font> e <font color="green">letras verdes</font>.
