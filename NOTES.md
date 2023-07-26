#Variáveis e constantes em PHP 

variável $valor = "";
constantes const "valor" = "";

E para usar é bem fácil 

Oi $valor, tudo bem .valor;

$sobrenome = String sequência de letras,números e outros que serão representados em aspas como exemplo "Pão"

$idade = In ou integer um valor numérico inteiro como exemplo 50 sem o decimal 

$peso = Float e double é usado para números decimais, reais como exemplo 55.5

$casado = bool ou boolean um valor lógico no caso (true e false)

Dá uma olhada no curso de base numéricas 

O . significa concatenação em php po exemplo "Oi"."mundo" assim juntando as duas strings 

Quando o conteúdo está em '' ele não interpreta os conteúdos e não pega coisas como emotes e variáveis 

Nem sempre o compilador ira mostrar os erros do meu código, mas me dará um resultado errado

\n nova linha
\t Tabulação horizontal
\\ barra invertida 
\$ sinal de cifrão 
\u{} codepoint          

abs() é um valor absoluto em PHP ele retira o sinal do numero;

base_convert() troca as bases decimal,hexadecimal e etc, não entendi como funciona;

ceil() Arredonda pra cima , floor() para baixo, round() normal;

hypot() acha a hipotenusa;

intdiv() faz uma divisão inteira ele aproxima os números em uma divisão ; 

min() e max() Mostra o numero máximo e mínimo entre valores;

pi() mostra o valor de Pi = 3,14...;

A super global $_REQUEST ela puxa dados da $_POST e $_GET ela funciona para as duas

Usar o método post nem sempre é seguro

<?="Bom dia"?> isso também pode representar um echo em PHP

<?php echo $_SERVER['PHP_SELF']?> esse código manda os dados para o próprio arquivo 