<?php
  include 'araskargo.php';

  $araskargo = new ArasKargo();
  $araskargo->set_username("neodyum");
  $araskargo->set_password("nd2580");
  $araskargo->orders->check();
  //$araskargo->orders->orders[0]->set_ReceiverName("adf");
  //$araskargo->orders->add_new_order();
  //$araskargo->orders->orders[1]->set_ReceiverName("sdfg");
  //$araskargo->Set_Order();
  //$result_message_one = $araskargo->orders->orders[1]->get_ResultMessage();
?>
