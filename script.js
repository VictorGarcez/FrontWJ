$(function(){
                var $names = $('#names');      
                var $nome = $('#nome');
                
                $.ajax({
                    url:'../Projeto-WebJump/',
                    success:function(data){
                        console.log(data);
                    $.each(data, function(i, item){
                        $names.append('<li>' + item.name + '</li>');
                        });
                    },
                    error: function(){
                        alert('Erro ao carregar nomes');
                    }
                });
                
                $('#inserir').on('click', function(){
                var namesToDB = JSON.stringify({
                    id: 0,
                    name: $nome.val(),
                });

                $.ajax({
                    type:'POST',
                    url:'../Projeto-WebJump/',
                    data: namesToDB,
                    success: function(newName){
                        $names.append('<li>' + $nome.val() + '</li>');
                    },
                    error: function(){
                        alert('erro ao adicionar nome');
                    }
                });
            });
        });