## Algumas funções em php:
- explode('string delimiter', $string) -> formata a string como array. O primeiro elemento será até o delimiter.
  . EX: $string = 'Joao Robson'; / $stringFormat =  explode(' ', $string); / $stringFormat[0] = 'Joao'

- number_format($float, qnt_casasDecimais) -> formata o número flutuante em relação a quantidade de casas decimais inseridas
  . EX: $num = 548.26458s; / $numFormat = number_format($num, 2) -> 548.26;

- rand(min, max) -> gera um número aleatório entre o número mínimo e máximo.
  . EX: rand(1, 5) -> gera um número igual e entre 1 e 5;

## PARA ACESSAR O API_PHP
- baixe o arquivo e cole-o em C:/xampp/htdocs
- altere os dados em server.php
- crie os bancos necessários em seu mysql
