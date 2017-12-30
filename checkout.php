<?php
session_start();
$pageTitle = 'Complete Order';
include('./templates/header.php');
?>

<section id="confirmation-order">

    <h1>Order Confirmation --> Payment</h1>
    <div class="blockquote">
        <p><b class="font-medium">Thank you for submitting your project to us, but your order is not yet complete!</b></p>
        <p>To finalize this project, please click the "PAY FOR ORDER" button to be taken to Paypal's checkout.</p>
    </div>

    <div class="blockquote">
        <br><br>
        <br><br>
    </div>

    <div class="block-three">
        <div class="block">
            <h3>ORDER DATE:</h3>
            <span style='display:block;color:#ff0000;font-weight:bold;text-align:center;'><?php echo date("Y-m-d"); ?></span>
        </div>
    </div>

    <div class="block-three">
        <div class="block">
            <h3>ORDER NUMBER:</h3>
            <span style='display:block;color:#ff0000;font-weight:bold;text-align:center;'>#<?php echo $_SESSION['order_number']; ?></span>
        </div>
    </div>

    <div class="block-three">
        <div class="block">
            <h3>ORDER TOTAL:</h3>
            <span style='display:block;color:#ff0000;font-weight:bold;text-align:center;'><?php echo '$' . $_SESSION['order_total']; ?></span>
        </div>
    </div>

    <div class="clear"><br>&nbsp;</div>

    <div class="blockquote" style="border_top:0px">

        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="business" value="orders@lockgrooves.com">
            <input type="hidden" name="lc" value="US">
            <input type="hidden" name="button_subtype" value="products">
            <input type="hidden" name="no_note" value="0">
            <input type="hidden" name="add" value="1">
            <input type="hidden" name="currency_code" value="USD">
            <input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
            <input type="hidden" name="cancel_return" value="http://lockgrooves.com/order.php">
            <input type="hidden" name="return" value="http://lockgrooves.com/thanks.php">

            <input type="hidden" name="item_name" value="<?php echo $_SESSION['order_number'] . ' - ' . $_SESSION['quantity'] . ' ' . $_SESSION['type']; ?>">
            <input type="hidden" name="item_number" value="<?php echo $_SESSION['order_number']; ?>">
            <input type="hidden" name="quantity" value="<?php echo $_SESSION['quantity']; ?>">
            <input type="hidden" name="amount" value="<?php echo $_SESSION['unit_price']; ?>">
            <input type="hidden" name="shipping" value="<?php echo $_SESSION['shipping_price']; ?>">

            <input type="hidden" name="on0" value="Record Type">
            <input type="hidden" name="os0" value="<?php echo $_SESSION['type']; ?>">

            <input type="hidden" name="on1" value="Record Size">
            <input type="hidden" name="os1" value="<?php echo $_SESSION['size']; ?>">

            <input type="hidden" name="on2" value="Artist">
            <input type="hidden" name="os2" value="<?php echo $_SESSION['artist']; ?>">

            <input type="hidden" name="on3" value="Title">
            <input type="hidden" name="os3" value="<?php echo $_SESSION['title']; ?>">

            <?php if ($_SESSION['rush'] == 1) { ?>
                <input type="hidden" name="on4" value="Rush?">
                <input type="hidden" name="os4" value="Yes">
            <?php } ?>
            
            <button border="0" name="submit" value="PAY FOR ORDER" class="buttons-large" style="max-width:400px;"><i class="fa fa-paypal"></i>&nbsp;&nbsp;PAY FOR ORDER</button>
        </form>
    </div>

    <br><br>
    
    <h2>ORDER DETAILS</h2>
    <br>
    <div class="block-fifty">
        <div class="block">
            <label><i class="fa fa-fw fa-calendar"></i> ORDER DATE:</label> <?php echo date('Y-d-m'); ?><br>
            <label><i class="fa fa-fw fa-th"></i> ORDER #:</label> <?php echo $_SESSION['order_number']; ?><br>
            <label><i class="fa fa-fw fa-cube"></i> UNIT TOTAL:</label> <span style="color:#ff0000;">$<?php echo $_SESSION['unit_price']; ?></span><br>
            <label><i class="fa fa-fw fa-truck"></i> SHIPPING COST:</label> <span style="color:#ff0000;">$<?php echo $_SESSION['shipping_price']; ?></span><br>
            <label><i class="fa fa-fw fa-cubes"></i> ORDER TOTAL:</label> <span style="color:#ff0000;">$<?php echo $_SESSION['order_total']; ?></span><br>
            <br><br>
            <label><i class="fa fa-fw fa-user"></i> NAME:</label> <?php echo $_SESSION['name']; ?><br>
            <label><i class="fa fa-fw fa-envelope"></i> EMAIL:</label> <?php echo $_SESSION['email']; ?><br>
            <label><i class="fa fa-fw fa-phone-square"></i> PHONE NUMBER:</label> <?php echo $_SESSION['phone']; ?><br><br>
            <label><i class="fa fa-fw fa-home"></i> ADDRESS:</label><br>
            <span style="padding-left:20px;display:block;"><?php echo $_SESSION['address1']; ?><br>
                <?php if ($_SESSION['address2']) {
                    echo $_SESSION['address2'] . '<br>';
                }
                ?>
                <?php echo $_SESSION['city'].', '.$_SESSION['state'].' '.$_SESSION['zip']; ?><br>
                <?php echo $_SESSION['country']; ?></span>
            <br>
            <br><label><i class="fa fa-fw fa-twitter"></i> TWITTER:</label> <a href="http://www.twitter.com/<?php echo $_SESSION['twitter']; ?>" target="_blank" title="<?php echo $_SESSION['twitter']; ?>"><?php echo $_SESSION['twitter']; ?></a>
            <br><label><i class="fa fa-fw fa-instagram"></i> INSTAGRAM:</label> <a href="http://www.instagram.com/<?php echo $_SESSION['instagram']; ?>" target="_blank" title="<?php echo $_SESSION['instagram']; ?>"><?php echo $_SESSION['instagram']; ?></a>
        </div>
    </div>

    <div class="block-fifty">
        <div class="block">
            <label><i class="fa fa-fw fa-user"></i> ARTIST:</label> <?php echo $_SESSION['artist']; ?><br>
            <label><i class="fa fa-fw fa-pencil-square-o"></i> TITLE:</label> <?php echo $_SESSION['title']; ?><br>
            <label><i class="fa fa-fw fa-database"></i> GENRE:</label> <?php echo $_SESSION['genre']; ?><br>
            <label><i class="fa fa-fw fa-file-archive-o"></i> ART & AUDIO URL:</label> <a href="<?php echo $_SESSION['url']; ?>" target="_blank"><?php echo $_SESSION['url']; ?></a>
            <br><br>
            <label>QUANTITY:</label>  <?php echo $_SESSION['quantity']; ?><br><br>
            <label>RECORD TYPE:</label> <?php echo $_SESSION['type'] . ' ::: ' . $_SESSION['size']; ?><br><br>
            <label>SIDE ONE:</label> <?php echo $_SESSION['runtime_one']; ?><br>
            <label>SIDE TWO:</label> <?php echo $_SESSION['runtime_two']; ?><br><br>
            <label>LABELS:</label> <?php echo $_SESSION['labels']; ?><br>
            <label>PACKAGING:</label> <?php echo $_SESSION['packaging']; ?><br><br>
            <label>NOTES:</label> <?php echo $_SESSION['notes']; ?><br>
            <br>
            <br><label>RUSH JOB:</label>
            <?php if ($_SESSION['rush'] == 1) { ?>
                Yes
            <?php } else { ?>
                No
            <?php } ?>
        </div>
    </div>
    
    <div class="clear"><br>&nbsp;</div>

</section>

<?php
include('./templates/footer.php');
?>