


<div class="accounts_content">
    <input type="hidden" id="edit_b1" value="false"> 
	<div id="top">
    	<div id="top_top">
            <div id="name">
            	<h2>Shane Harder-Toews</h2>
            </div>
            <div id="company">
           	Create Convert Media Ltd | Account Type: Business | Status: <a href=""> Verified </a>
            </div>
            <div id="balance1">
           		<h3>$0 CAD</h3>
                
            </div>
            <div id="balance2">
           	$0 CAD

            </div>
            <div id="balance3">
           	$0 CAD
            </div>
        </div>
        <div id="top_mid">
            <div id="lastlogin">
            	<normal id="aemail">email@createconver</normal> on <?php echo date_format(new DateTime,'F j, Y g:i T'); ?>
            </div>
        </div>
        
    </div>
    <div id="bot">
    	<div id="saveall"></div>
    	<div id="datatable">
        	<div id="activedate"><b>My recent activity</b> - Last 7 days (<?php echo add_date() . '- '. date_format(new DateTime,'M j, Y'); ?>)</div>
            <div id="archive"></div>
            <table id="listview" align="center"  border="0" cellpadding="0" cellspacing="0">
                <thead>
                	<tr>
                    <th><input type="checkbox"/></th>
                    <th>Date</th>
                    <th><div id="flag"></div></th>
                    <th>Type</th>
                    <th>Name/Email</th>
                    <th>Payment status</th>
                    <th>Details</th>
                    <th>Order status/Actions</th>
                    <th>Gross</th>
                    </tr>
                </thead>
                <tbody>
                	
                </tbody>
            </table>
            <div id="archive2"></div>
        </div>
    </div>
</div>
<div id="addtransaction">

	<div class="space"><h3>New Account</h3></div>
	<div class="space">Full Name: <input id="fullname" type="text"/></div>
    <div class="space">Company Name:<input id="compny" type="text"/></div>
    <div class="space">Email Address:<input id="temail" type="text"/></div>
    <div class="space">Balance Amount: <input id="bamount" type="text"/></div>
    <div class="space"> <input id="addnewaccount" type="Submit" value="New Account"/></div>
    <div class="space"></div>
    
    
    <!--<div class="space"><h3>New Transaction</h3></div>
    <div class="space">Unique Transaction No: <input id="utno" type="text"/></div>
    <div class="space">Type of Transaction: <select id="type"><option>Bill to</option><option>Bill From</option><option>Payment to</option></select></div>
    <div class="space">Type of Payment Status: <select id="status"><option>Pending</option><option>Completed</option><option>Active</option><option>Paid</option></select></div>
    <div class="space"></div>
    <div class="space">Date: <input id="pdate" type="date"/></div>
	<div class="space">Name: <input id="pname" type="text"/></div>
    <div class="space">Address: <input id="paddress" type="text"/></div>
    <div class="space">Email From:<input id="femail" type="text"/></div>
    <div class="space">Email To:<input id="ptemail" type="text"/></div>
    <div class="space"></div>
    <div class="space">Total Amount: <input id="ptamount" type="text"/></div>
    <div class="space">Fee Amount: <input id="pfamount" type="text"/></div>
    <div class="space">Net Amount: <input id="pnamount" type="text"/></div>
    <div class="space"></div>
    <div class="space">Item Amount: <input id="piamount" type="text"/></div>
    <div class="space"></div>
    <div class="space">Item Title: <input id="pititle" type="text"/></div>
    <div class="space"> <input id="addtrans" type="Submit" value="New Transaction"/></div>-->
    
</div>

<div id="detailstransaction">
	<div id="topdt">
    	<div id="aaddress"></div>
        <div id="aedit" class="a"></div>
    </div>
    <div id="botdt">
    	<div id="aname" class="a"></div>
        <div id="aemailf" class="a"></div>
        <div id="aemailt" class="a"></div>
        <div id="atamount" class="a"></div>
        <div id="afamount" class="a"></div>
        <div id="anamount" class="a"></div>
        <div id="aiamount" class="a"></div>
        <div id="aitemtype" class="a"></div>
        <div id="adate" class="a"></div>
        <div id="atime" class="a"></div>
        <div id="astatus" class="a"></div>
        <div id="adesc" class="a"></div>
        <div id="autn" class="a"></div>
        <div id="aclose" class="a"></div>
    </div>
</div>

<?php
function add_date() {
      $cd = strtotime(date('Y-m-d h:i:s'));
      $newdate = date('M j, Y', mktime(date('h',$cd),
    date('i',$cd), date('s',$cd), date('m',$cd),
    date('d',$cd)-7, date('Y',$cd)));
      return $newdate;
              }
?>