<?php require_once('aHead.php'); ?>

<body>	
	<div id="container">
    	
        <div id="top-container">
        
<?php require_once('aHeader.php'); ?>  
            
            <!-- BEGIN OF CONTENT -->
            <div id="midbox-container-inner">
            	<div id="midbox-inner-bg"></div>
            	<div id="midbox-inner">
                	
                    <!-- begin of page title -->
                    <div id="page-title">
                    	<h1>Suporte</h1>
                    </div>
                    <!-- end of page title -->
                    
                    <!-- begin of award content -->
                    <div id="bread-search-column">
                    	<div id="breadcumb">                   	
                    		<span class="bread-img"><img src="images/home-icon.png" alt="" class="bread-img" /></span>
                            <span class="bread-txt">&raquo; Suporte</span>
                        </div>
                        <div id="search-box">                        	
                        </div>                   
                    </div>
                    <!-- end of award content -->
                    
                </div>
                
                <div id="content">
                	<div class="maincontent">  
                    
                        <!-- begin of top box support -->       
                        <div id="bottom-box-support">
                        	<div class="bottom-content">
                            	<div class="box-title2">
                                    <h6>Downloads</h6>
                                </div>
                                <div class="box-content-bottom">
                                	<img src="images/support1.jpg" alt="Downloads" class="imgleft cmty-icon" />
                                    <p>Preparamos uma área com links para os aplicativos mais usados. Caso não consiga instalar algum aplicativo, solicite nosso serviço de consultoria.</p>
                                    <div class="support-button"><a class="button" href="pDownloads.php"><span>Confira</span></a></div>    
                                </div>
                            </div>
                            
                            <div class="bottom-content">
                            	<div class="box-title2">
                                    <h6>Perguntas Frequentes</h6>
                                </div>
                                <div class="box-content-bottom">
                                	<img src="images/support4.jpg" alt="Perguntas Frequentes" class="imgleft cmty-icon" />
                                    <p>Antes de solicitar a visita de um técnico, confira nossa área de perguntas frequentes, a solução do seu problema pode estar bem aqui.</p>
                                    <div class="support-button"><a class="button" href="pPerguntas.php"><span>Confira</span></a></div> 
                                </div>
                            </div>
                            
                            <div class="bottom-content-last-support">
                            	<div class="box-title2">
                                    <h6>Assistência Técnica</h6>
                                </div>
                                <div class="box-content-bottom">
                                	<img src="images/support3.jpg" alt="Assistência Técnica" class="imgleft cmty-icon" />
                                    <p>Saiba quais serviços estão inclusos no seu pacote de assistência, caso ainda não tenha contratado seu pacote, entre em contato. </p>
                                    <div class="support-button"><a class="button" href="pAssistencia.php"><span>Confira</span></a></div>    
                                </div>
                            </div>
                        </div>
                        <!-- end of top box support -->
                        
                        <!-- begin of column left --> 
                        <div class="contatoSuporte">
                        	<h3>Contato com o suporte</h3>
                            <p>Caso nenhuma das opções acima tenha sanado suas necessidades, envie uma mensagem para a nossa central de suporte técnico, será um prazer atendê-lo.</p>
                            
                            <div id="contactFormArea">                                
                                <!-- Contact Form Start //-->
                                <form action="sSuporte.php" id="contato" method="POST" name="contato"> 
                                <fieldset>
                                <label>Nome</label><br />
                                <input type="text" name="nome" class="textfield" id="nome" value="" placeholder="Insira seu Nome Completo"/><br />
                                <label>Email</label><br />
                                <input type="text" name="email" class="textfield" id="email" value="" placeholder="Insira seu Email" /><br />
                                <label>Assunto</label><br />
                                <input type="text" name="assunto" class="textfield field-nomargin" id="assunto" value="" placeholder="Informe o assunto"/><br />
                                <label>Mensagem</label><br />
                                <textarea name="mensagem" id="mensagem" class="textarea" cols="2" rows="7" placeholder="Digite sua mensagem"></textarea>
                                <button type="submit" name="submit" id="buttonsend" class="input-submit">Enviar</button>
                                <span class="loading" style="display: none;">Aguarde por favor..</span> 
                                </fieldset>
                                </form>
                                <!-- Contact Form End //-->                                      
                            </div>
                            
                        </div>
                        <!-- end of column left -->
                        
                        <!-- begin of column right -->  
                        <div id="column-support-right" style="border-left: 1px solid #DADADA;">
                        	<h3>Solucionando um Problema</h3>
                            <img src="images/support4.jpg" alt="" class="imgleft" />
                            <p class="overflow-text"><strong>Identificando o problema</strong><br/>
                            O primeiro passo para solucionar um problema, é identificar realmente de onde vem o problema, nossa área de <a href="pPeguntas.php"><b>Perguntas Frequentes</b></a> pode lhe ajudar.
                            </p>
                            <ul class="checklist margin-support">
                                <li>Verifique se é um problema de hardware ou software</li>                        
                                <li>Verifique se há alguma pergunta relacionada na página de <a href="pPeguntas.php"><b>Perguntas Frequentes</b></a></li>                                                        								
                                <li>Se o problema for em algum software, verifique se a versão instalada é a mesma que consta na sessão de <a href="pDownloads.php"><b>downloads</b></a></li>                                                        
                            </ul>
                            
                            <hr/>
                            
                            <img src="images/support5.jpg" alt="" class="imgleft" />
                            <p class="overflow-text"><strong>Quando o problema é Hardware (Físico)</strong><br/>
                            Se o seu problema é físico (a maquina não liga, cheiro de queimado, sem imagem)</p>
                            <ul class="checklist margin-support">
                                <li>Verifique se há tensão na tomada utilizada</li>
                                <li>Verifique a voltagem do equipamento (110v - 220v)</li>                        
                                <li>Verifique se caiu algum liquido no equipamento</li>                                                        
                            </ul>
                            
                            <hr/>
                            
                            <img src="images/support6.jpg" alt="" class="imgleft" />
                            <p class="overflow-text"><strong>Suporte Técnico</strong><br/>
                            Caso nenhuma das orientações acima tenha solucionado seu problema, entre em contato conosco, para solicitar a visita de um técnico.</p>
                            <ul class="checklist margin-support">
                                <li>21 78245425</li>
                                <li>32*20668</li>                                
                                <li>21 3423 9700</li>                  
                            </ul>
                            
                            <hr/>
                        </div>
                        <!-- end of column right -->                         
                        
                    </div>
                </div>
                            
            </div>
            <!-- END OF CONTENT -->
            
<?php require_once('aFooter.php'); ?>

            
    	</div>
                   	       
    </div>      
<script type="text/javascript">$('#noscript').remove();</script>     
</body>
</html>