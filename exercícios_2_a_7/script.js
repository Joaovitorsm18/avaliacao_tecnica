let pessoas = [];
let primeiro_nome = [];
let pessoas_id = [];
let p_maior_idade = [];
let soma = 0

function ex_2(){
    pessoas = [];
    pessoas.push(
    { nome:"Fabiana Araújo", age: 33 },
    { nome:"Gabriel Gomes", age: 25 },
    { nome:"Fernando Henrique", age: 17 },
    { nome:"Ana Luiza", age: 2 },
    { nome:"Geralda do Nascimento", age: 93 },
    { nome:"Miguel Souza", age: 70 },
    { nome:"Antonio Miguel", age: 69 })

    console.log(pessoas)
}

function ex_3()
{
    pessoas = [];
    ex_2();
    const nome = ("Gabriel Gomes");
    console.log(verificarNome(nome));

}

function verificarNome(nome)
{
    for (let index = 0; index < pessoas.length; index++) {

        if(pessoas[index].nome === nome){
            let pessoa = pessoas[index];
            return pessoa;
        }
    }
}

function ex_4(){
    ex_2();

    for (let index = 0; index < pessoas.length; index++) {
        let pessoa = pessoas[index].nome;
        let firstName = pessoa.split(" ")[0]; //Foi utilizado o split para capturar somente o  primeiro nome.
        primeiro_nome.push(firstName);
    }

    console.log(primeiro_nome);
}

function ex_5(){
    ex_2();
    for (let index = 0; index < pessoas.length; index++) {
        let pessoa = pessoas[index];
        pessoa.id = (index+1);
        pessoas_id.push(pessoa);
    }

    console.log(pessoas_id);
}
function ex_6(){
    ex_2();
    for (let index = 0; index < pessoas.length; index++) {
        let pessoa = pessoas[index];
        if(pessoa.age>= 18){
            p_maior_idade.push(pessoa);
        }
    }
    console.log(p_maior_idade);
}

function ex_7(){
    pessoas = [];
    ex_2();
    for (let index = 0; index < pessoas.length; index++) {
        let idade = pessoas[index].age;
        soma += idade;
        media = soma/pessoas.length;
    }

    console.log("A média das idades é: "+(media));

}
