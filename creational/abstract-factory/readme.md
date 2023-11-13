# Padrão de Projeto: Abstract Factory

### O que é?

A fábrica abstrata, ou "Abstract Factory", é um padrão de design de software que faz parte do conjunto de padrões de criação. Ele fornece uma interface para criar famílias de objetos relacionados ou dependentes sem especificar suas classes concretas. Em outras palavras, o padrão Abstract Factory permite que um sistema cliente crie objetos sem ter que se preocupar com as classes específicas desses objetos, promovendo a independência entre as interfaces e as implementações.

### Como funciona?

Quando há um conjunto de classes concretas em comum, criam-se interfaces contendo toda a assinatura dessas classes e o cliente final tem conhecimento apenas das interfaces, deixando a implementação devidamente separada. Este padrão funciona como os métodos de fábrica (padrão Factory Method) com uma camada a mais de abstração. Com o Factory Method, há um método de fabricação de um objeto, que pode me retornar um determinado tipo de objeto conforme as características que eu passar na sua criação. O Abstract Factory se dá em cima da criação de interfaces que contém a assinatura das minhas classes e somente essas são chamadas pelo cliente final.

### Qual problema resolve?

Quando há uma hierarquia de classes em comum, faz sentido eu utilizar o Abstract Factory para separar a implementação dessas classes. A aplicação desse padrão deixará o projeto relativamente maior e mais complexo (o que enfatiza a importância de saber quando utilizá-lo), mas faz com que os princípios de “responsabilidade única” e “fechado para alteração e aberto para expansão” do SOLID sejam respeitados
