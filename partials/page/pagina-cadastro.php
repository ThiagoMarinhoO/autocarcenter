<?php 
get_header();
?>

<!-- <section class="cadastroFormulário">
    <div class="cadastroRequirements">
        <div class="storeInfos">
            <h2 class="cadastroRequirementsTitle">Informações da loja</h2>
            <form action="" method="POST">
                <input class="formFields" type="text" placeholder="CPF responsável / CNPJ" id="cpf-id" name="cpf" />
                <input class="formFields" type="email" placeholder="Email" id="email-id" name="email" />
                <input class="formFields" type="password" placeholder="Senha" id="senha-id" name="senha"/>
            </form>
        </div>
        <div class="storeInfos">
            <h2 class="cadastroRequirementsTitle">Contato e localização</h2>
            <form action="" method="POST">
            <input class="formFields" type="number" placeholder="Telefone" id="tel-id" name="tel"/>
            <input class="formFields" type="text" placeholder="Cidade" id="cidade-id" name="cidade" />
            <select id="estado-id" name="estado" class="formFields">
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
                <option value="EX">Estrangeiro</option>
            </select>
            <input class="formFields" type="text" placeholder="Rua" id="rua-id" name="rua" />
            <input class="formFields" type="number" placeholder="Complemento" id="complemento-id" name="complemento" />
            </form>
        </div>
    </div>
    <div class="cadastroActions">
        <a href="#" class="cadastroButton">Cadastrar</a>
        <a href="#" class="backTo">Voltar</a>
    </div>
</section> -->
<?php echo do_shortcode('[cadastro]'); ?>

<?php
get_footer();
?>