# Padrão de Projeto: Facade

### O que é?

Facade é um padrão de projeto estrutural que permite com que você tenha uma interface simplificada para uma biblioteca, framework ou qualquer pacote com um grande número de chamadas de classes ou dependências.

### Como funciona?

Basicamente, criamos uma classe que abstrai chamadas complexas de um conjunto de classes que precisam ser instanciadas e chamadas numa determinada ordem.

### Qual problema resolve?

Digamos que o nosso sistema consuma uma biblioteca que, para ser corretamente utilizada, necessite de uma série de instâncias de classes que devem ser chamadas numa determinada ordem. Neste cenário, sempre que utilizarmos essa biblioteca, devemos fazer sempre este grande número de chamadas. Se entrar um desenvolvedor novo na equipe, ele precisará se atentar a como utilizar corretamente essa biblioteca. Tudo isso gera dificuldade e retrabalho no desenvolvimento. Criando uma classe que abstrai essas chamadas, o trabalho fica muito mais fácil. Assim, sempre que a funcionalidade for utilizada, chamamos a classe que abstrai as chamadas.
