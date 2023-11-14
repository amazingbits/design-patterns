# Padrão de Projeto: Adapter

### O que é?

Adapter é um padrão de projeto estrutural que te permite ter objetos com interfaces diferentes colaborando através de uma classe adaptadora, fazendo-os ter a mesma assinatura.

### Como funciona?

Primeiramente, você precisa ter, pelo menos, duas classes com interfaces diferentes que possuem a mesma intenção ao retornar os dados. Como essas classes possuem assinatura e retornos com estruturas diferentes, é criada uma interface que define uma assinatura padrão (cliente). Após isso, é criada uma classe adaptadora que implementa a interface cliente.

### Qual problema resolve?

Sempre que temos classes com assinatura e retorno diferentes, porém que servem para o mesmo fim, é interessante criar um adaptador para que o consumo de ambas as classes seja padrão. Um exemplo é utilizarmos duas APIs diferentes em nosso sistema. Ambas trazem dados de previsão do tempo, por exemplo. Uma retorna os dados em JSON e outra retorna em XML. Um adaptador faria com que esses dois serviços fossem consumidos da mesma forma no sistema e trouxessem um retorno padrão.
