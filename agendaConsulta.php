<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Consulta</title>
    <link rel="icon" href="img/serra.png">
    <link rel="stylesheet" href="css/navBar.css">
    <link rel="stylesheet" href="css/agendaConsulta.css">
</head>
<body>
    <header>
        <!-- menu -->
        <div class="nav">
            <div id="logo"><a href="pagPrincipal.php">+SUS</a></div>
            <ul class="navlist">
                <li class="nav-item">
                    <a class="nav-link active" href="pagPrincipal.php">Página Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="meusAgendamentos.php">Meus Agendamentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="perfil.php">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Sair</a>
                </li>
            </ul>





            
        </div>
    </header>
    <section>
        <h1 class="Tac">Agendamento de consulta</h1>
        <div class="conteudo">     
            
            <!-- lista de unidades -->
            <div class="unidades">
                <label class="item" for="unidade">Selecione uma unidade:</label>
    
                <select name="unidade" id="unidade">
                    <option value="feurosa">Feu Rosa</option>
                    <option value="vnc">Vila Nova de Colares</option>
                    <option value="jacar">Jacaraípe</option>
                    <option value="boavista">Boa Vista</option>
                    <option value="novoh">Novo Horizonte</option>
                    <option value="serrad">Serra Dourada</option>
                </select>
            </div>

            <!-- lista de especialidades -->

            <div class="especialidades">
                <label class="item" for="especialidade">Escolha uma especialidade:</label>
    
                <select name="especialidade" id="especialidade">
                    <option value="clinicogeral">Clínico Geral</option>
                    <option value="derma">Dermatologista</option>
                    <option value="ped">Pediatria</option>
                    <option value="gine">Ginecologista</option>
                    <option value="dentista">Dentista</option>
                </select>
            </div>
            
            <!-- lista de profissionais -->
            <div class="profissionais">
                <label class="item" for="profissional">Escolha um especialista:</label>
    
                <select name="profissional" id="profissional">
                    <option value="p1">Kátia Flávia dos Santos</option>
                    <option value="p2">Ana Paula Silva</option>
                    <option value="p3">Beatriz Vitória Matins </option>
                    <option value="p4">Maria Eduarda Rodrigues</option>
                    <option value="p5">Luiza da Conceição Oliveira</option>
                    <option value="p6">Gustavo Pereira de Almeida</option>
                    <option value="p7">Leonardo Gabriel Gonçalves</option>
                </select>
            </div>
            
            <!-- botoes para prosseguir e voltar  -->
            <div class="botoes">
                <button class="btnfinais" id="btnvoltar" onclick="history.back()">Voltar</button>
                <a href="agendaHorario.php" class="btnfinais" id="btncontinuar">Continuar</a>
            </div>
        </div>
    </section>
</body>
</html>