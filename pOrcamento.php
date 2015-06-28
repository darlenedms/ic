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
                    	<h1>Contato</h1>
                    </div>
                    <!-- end of page title -->
                    
                    <!-- begin of award content -->
                    <div id="bread-search-column">
                    	<div id="breadcumb">                   	
                    		<span class="bread-img"><img src="images/home-icon.png" alt="" class="bread-img" /></span>
                            <span class="bread-txt">&raquo; Orçamento Online</span>
                        </div>
                        <div id="search-box">                        	
                                 
                        </div>                   
                    </div>
                    <!-- end of award content -->
                    
                </div>
                
                <div id="content">
                	<div class="maincontent">
     <!-- begin of column left --> 
                        <div id="content-left" style="margin-left:60px; width:570px;">
                        	<h3>Solicite Orçamento</h3>
                            <p>Preencha todos os dados corretamente para que possamos atender a sua solicitação.</p>
                            
                            <div id="contactFormArea">                                
                                <!-- Contact Form Start //-->
                                <form action="sOrcamento.php" id="contactform" method="POST"> 
                                <fieldset>
                                <label>Nome</label><br />
                                <input type="text" name="nome" class="textfield" id="nome"  /><br />
                                <label>Email</label><br />
                                <input type="text" name="email" class="textfield" id="email" /><br />
                                <label>Empresa</label><br />
                                <input type="text" name="assunto" class="textfield field-nomargin" id="assunto"  /><br />
                                <label>Serviço</label><br />
                                <textarea name="mensagem" id="mensagem" class="textarea" cols="2" rows="7"></textarea>
                                <button type="submit" name="submit" id="buttonsend" class="input-submit">Enviar</button>
                                <span class="loading" style="display: none;">Aguarde por favor..</span> 
                                </fieldset>
                                </form>
                                <!-- Contact Form End //-->                                      
                            </div>
                            
                        </div>
                        <!-- begin of sidebar --> 
                        <div id="sidebar-boxtop"></div>
                        <div id="sidebar-boxmid">
                        	
								<?php include_once('aSidebar.php');?>


                        </div>                        
                        <!-- end of sidebar -->                
                        
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