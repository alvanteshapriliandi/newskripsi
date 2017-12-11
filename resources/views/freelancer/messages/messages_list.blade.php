@extends('templates.freelancer.layout')
@section('content')

  <div class="">
    
    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Messages List <a href="" class="btn btn-danger btn-xs"> New </a></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <div class="chat_container">
         <div class="col-sm-3 chat_sidebar">
       <div class="row">
            <div id="custom-search-input">
               <div class="input-group col-md-12">
                <i class="fa fa-plus-square-o" aria-hidden="true"></i> All Conversation
               </div>
            </div>
            
            <div class="member_list">

               <ul class="list-unstyled col-md-12" style="padding: 0;">
                  <li class="left clearfix col-md-12" style="display: block;" onclick="getChat('');">
                  <span class="chat-img pull-left">
                     <img src="" alt="img" class="img-circle">
                     </span>
                     <div class="chat-body clearfix">
                       
                        <div class="header_sec">
                           <strong class="primary-font"></strong>
                        </div>
                        <div class="contact_sec">
                           <strong class="primary-font"></strong> <!-- <span class="badge pull-right">3</span> -->
                        </div>
                     </div>
                  </li>
            </div>
          </div>
         </div>
         <!--chat_sidebar-->
     
     
         <div class="col-sm-7 message_section">
           <div class="row">
           <div class="new_message_head">
             <div class="pull-left" id="judul"></div><div class="pull-right">
               
             </div>
             </div><!--new_message_head-->
           
           <div class="chat_area" id="doggo">
           <ul class="list-unstyled" id="loadData">
           <!-- Isi list -->
           </ul>
           </div><!--chat_area-->
                <div class="message_write">
                <form id="dataku" name="dataku" class="form form-vertical" method="POST" enctype="multipart/form-data">
             <textarea class="form-control" placeholder="type a message" id="pesanChat" name="pesanChat"></textarea>
             <input type="hidden" id="untuk" name="untuk">
             <input type="hidden" id="img" name="img">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <div class="clearfix"></div>
           <div class="chat_bottom">
           <div class="row">

             <div class="col-sm-8"> <input type="file" name="images" id="images" style="padding:0;"></div>
             
             <div class="col-sm-4"><button class="pull-right btn btn-success" type="submit">
             Send</button></div>
           </div>
          </form>
             
             </div>
             
           </div>
           </div>
         </div> 
      </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@stop