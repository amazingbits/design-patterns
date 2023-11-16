# Padrão de Projeto: Observer

### O que é?

O padrão Observer é um modelo de design em que um objeto (o "observador") mantém uma lista de outros objetos (os "observados") e é notificado automaticamente sobre qualquer mudança de estado nesses objetos observados.

### Como funciona?

No padrão Observer, há um "objeto observável" (ou "sujeito") que mantém uma lista de "observadores". Quando o objeto observável muda, ele notifica automaticamente todos os observadores, permitindo que eles ajam em resposta à mudança.

### Qual problema resolve?

O padrão Observer resolve o problema da dependência direta entre objetos quando um precisa saber sobre as mudanças do outro. Ao usar esse padrão, os objetos podem ser desacoplados, permitindo que um objeto (observador) seja notificado automaticamente sobre as mudanças em outro (observável) sem que haja acoplamento direto entre eles. Isso promove uma estrutura mais flexível e escalável, facilitando a manutenção e a extensão do código.
