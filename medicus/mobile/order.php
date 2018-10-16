<div class="pages">
  <div data-page="tables" class="page no-toolbar no-navbar">
    <div class="page-content">
    
	<div class="navbarpages">
		<div class="navbar_left">
			<div class="logo_text"><a href="index.html"><span>up</span>mobile</a></div>
		</div>			
		<a href="#" data-panel="left" class="open-panel">
			<div class="navbar_right"><img src="images/icons/green/menu.png" alt="" title="" /></div>
		</a>					
	</div>
     
     <div id="pages_maincontent">
     
              <h2 class="page_title">TABLES</h2> 
     
     <div class="page_single layout_fullwidth_padding">
              
              <h3>Your Orders</h3>
              
                <ul class="responsive_table">
                     <li class="table_row">
                        <div class="table_section_small">Nr</div>
                        <div class="table_section">Due Amount</div>
                        <div class="table_section">Invoice No</div> 
                     </li>
                     <?php
            $customer_session= $_SESSION['customer_email'];
            $get_customer = "SELECT * FROM customers WHERE customer_email='$customer_session'";
            $run_customer = mysqli_query($con, $get_customer);
            $row_customer = mysqli_fetch_array($run_customer);
            
            $customer_id = $row_customer['customer_id'];
            $get_order = "SELECT * FROM customer_orders WHERE customer_id = '$customer_id' ORDER BY order_id DESC";
            $run_orders = mysqli_query($con, $get_order);
            
            $i=0;
            while($row_orders = mysqli_fetch_array($run_orders)){
                $due_amount = $row_orders['due_amount'];
                $invoice_no = $row_orders['invoice_no'];
                $i++;
            
            ?>
                     <li class="table_row">
                        <div class="table_section_small"> <?php echo $i; ?></div>
                        <div class="table_section"><?php echo $due_amount; ?></div>
                        <div class="table_section"><?php echo $invoice_no; ?></div> 
                     </li>
                      <?php } ?>
                </ul>
                
              
              
              
              </div>
      
      </div>
      
      
    </div>
  </div>
</div>