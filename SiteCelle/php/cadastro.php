<?php 
include_once 'cabecalho.php';
?>
<title>Cadastro</title>
<section>
    <div id="conteudo">
       <h1 class="t1">Cadastro</h1>
       <hr id="hr-top">
       <!-- <div id="area"> -->
       <span>Atenção, os campos marcados com o (*) são obrigatórios</span>
       <form method="POST" accept-charset="utf-8" class="form-group" action="validador.php" id="formulario">
        <div style="display:none">
            <input type="hidden" name="_method" value="POST">
        </div>
        <fieldset style="margin-top: 45px;">
            <legend>Dados Pessoais</legend>
            <table>
                <tr>
                    <td>
                        <label for="nome">Nome *</label>
                        <input type="text" placeholder="nome" name="nome" class="control" required maxlength="50" id="nome">
                    </td>
                    <td>
                        <label for="sexo">Sexo *</label><br>
                        <select name="sexo" required id="sexo">
                            <option value="empty">Selecione</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                    </td>
                    <td>
                       <label for="nasc_dia">Data de Nascimento:</label><br>
                       <select name="nasc_dia">
                        <option value="dia">Dia</option>
                        <option value="01">1</option>
                        <option value="02">2</option>
                        <option value="03">3</option>
                        <option value="04">4</option>
                        <option value="05">5</option>
                        <option value="06">6</option>
                        <option value="07">7</option>
                        <option value="08">8</option>
                        <option value="09">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>

                    <select name="nasc_mes">
                        <option value="mes" selected>Mês</option>
                        <option value="01" >Janeiro</option>
                        <option value="02">Fevereiro</option>
                        <option value="03">Março</option>
                        <option value="04">Abril</option>
                        <option value="05">Maio</option>
                        <option value="06">Junho</option>
                        <option value="07">Julho</option>
                        <option value="08">Agosto</option>
                        <option value="09">Setembro</option>
                        <option value="10">Outubro</option>
                        <option value="11">Novembro</option>
                        <option value="12">Dezembro</option>
                    </select>

                    <select name="nasc_ano">
                        <option value="ano" selected>Ano</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="telefone">Telefone</label>
                    <input type="text" placeholder="telefone" name="telefone" class="control" maxlength="11" size="20" id="telefone">
                </td>
                <td>
                    <label for="email">Email *</label>
                    <input type="email" placeholder="email" name="email" class="control" id="email" required maxlength="50">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="usuario">Usuário *</label>
                    <input type="usuario" placeholder="usuario" name="usuario" class="control" id="usuario" required maxlength="20">
                </td>
                <td>
                  <label for="password">Senha *</label>
                  <input type="password" placeholder="senha" name="password" class="control" required id="password">
              </td>
              <td>
                <label for="confirm_password">Confirmar Senha *</label>
                <input type="password" placeholder="confirme a senha" name="confirm_password" class="control" required id="confirm-password">
            </td>
        </tr>
    </table>
</fieldset>
<fieldset>
    <legend>Curso</legend>
    <table>
        <tr>
            <td>
                <label for="matricula">Matricula *</label>
                <input type="text" placeholder="matricula" name="matricula" class="control" required id="matricula" maxlength="14"> 
            </td>
            <td>
                <label for="curso">Curso *</label><br>
                <select name="curso" required id="curso">
                    <option value="Selecione">Selecione</option>
                    <option value="Informatica">Informática para Internet</option>
                    <option value="Logistica">Logística</option>
                </select>
            </td>
            <td>
                <div class="input text required" style="min-width: 90px; width: 15%">
                    <label for="periodo">Periodo*</label>
                    <select name="periodo" required id="Periodo">
                        <option value="1">1° Periodo</option>
                        <option value="2">2° Periodo</option>
                        <option value="3">3° Periodo</option>
                        <option value="4">4° Periodo</option>
                    </select>
                </div>
            </td>
        </tr>
    </table>
</fieldset>
<input class="submit" type="submit" name="submit" value="Enviar">
<input class="reset" type="reset" name="reset" value="Limpar">
</form>
<!-- </div> -->
</div>
</section>
<script type="text/javascript">
$('form').on('submit', function () {
    if($(this).find('input[name="password"]').val() != $(this).find('input[name="confirm_password"]').val()) {
        alert("Senhas digitadas não conferem!!");
        $('#password').focus();
        return false;
    }
});
</script>
<?php 
include_once 'rodape.php';
?>