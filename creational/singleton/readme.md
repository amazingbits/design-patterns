<h1>Padrão de Projeto: Singleton</h1>

<h3>O que é?</h3>

<p>O padrão Singleton diz que você deve garantir que a sua classe possua apenas uma instância, sendo impossível criar um novo objeto a partir dela.</p>

<h3>Como funciona?</h3>

<p>Você cria uma classe com um construtor com acesso privado (impedindo que a classe possa ser instanciada a partir da palavra-chave “new”). Esta classe deve possuir um método estático (já que esta classe não pode ser instanciada) que verifica se o atributo do qual queremos garantir uma única instância já foi iniciado. Caso ele já tenha sido iniciado, ele apenas retorna este atributo, caso ainda não tenha sido iniciado, ele dá a este atributo uma nova instância, retornando-o em seguida.</p>

<h3>Qual problema resolve?</h3>

<p>Quando eu tenho uma classe que lida com informações compartilhadas do sistema (como um acesso a banco de dados ou a um arquivo), faz sentido eu querer proteger o acesso a ela para que não haja nenhum tipo de interceptação que modifique algum atributo e quebre algum acesso ou informação. Então eu crio uma classe que pode ser acessada globalmente no sistema e ao mesmo tempo não pode ser duplicada ou ter alguma informação alterada.</p>
