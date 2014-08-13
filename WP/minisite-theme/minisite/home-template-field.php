<?php

global $imagePath;
while (have_posts()) : the_post();

    //Template 1
    $template1Array = explode("[template-1]", get_the_content());
    $template1 = $template1Array[1];

    if ($template1 == null || $template1 == "")
    {
        $template1 = '
                    
	<tr>
		<td><img src="' . $imagePath . 'headline1.jpg" alt=""></td>
	</tr>
	<TR>
	  <td background="' . $imagePath . 'x_06.jpg">
		


<div style="padding:0px 119px; padding-top:0px; ">



<div class=head3>Here Is the Subheadline To Grab Even More Attention Here Is the Subheadline To Grab Even More Attention Here Is the Subheadline To Grab Even More Attention</div>

<div class=author>
<img src="http://c4.ac-images.myspacecdn.com/images01/114/s_18e645e591cf3cb702c771961cce617f.jpg" align=left height=100 class=author-img>New York, June 23rd 2010<BR>	
<B>RE:</b> Short description, big benefit<BR>
<B>From:</b> Lucas Adamski<BR>
<img src="http://minisiteshark.com/images/sign.png">
</div>

<BR>
<P><B>Dear Friend,<p>
<P><span class=bigletter>N</span>am est arcu, ultricies nec porttitor et, pharetra et sapien. Nullam varius turpis at enim ornare molestie sit amet eget turpis.</b></p>

<P>In ac est magna. Ut sed nisl mi. Maecenas a imperdiet metus. Aenean vitae nibh non magna egestas sodales ut ut urna. Curabitur condimentum ultricies aliquam. Nullam mollis malesuada auctor. Duis tincidunt, libero sit amet fringilla rutrum, arcu lacus gravida mi, ut faucibus arcu enim pretium elit. Fusce neque risus, accumsan a aliquam sit amet, vestibulum at turpis. Aliquam ligula lorem, lacinia in condimentum id, tempus at leo. Fusce magna dolor, laoreet vitae faucibus eget, dapibus sed dolor. </p>


    
<P>Vestibulum in lorem non risus lobortis volutpat. Maecenas varius facilisis egestas. Maecenas lectus mi, congue ut vulputate nec, posuere eu erat. Nam est arcu, ultricies nec porttitor et, pharetra et sapien. Nullam varius turpis at enim ornare molestie sit amet eget turpis. Integer adipiscing eleifend tempus. Aliquam at odio justo. Donec fermentum consectetur quam in gravida. Suspendisse potenti. Nunc sem diam, viverra sed condimentum at, pharetra nec nulla. </p>

<div class=head4>Here Is the Subheadline To Grab Even More Attention Here Is the Subheadline To Grab Even More Attention</div>


<ul>
    <LI>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    <LI>Nulla at neque purus, sit amet tincidunt massa.
    <LI>Curabitur feugiat rutrum dolor, at blandit tellus vehicula id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    <LI>Fusce dignissim lacinia ipsum, in tristique est aliquet et.
    <LI>Sed imperdiet posuere lorem, eu vulputate justo feugiat et.
    <LI>Etiam eget risus ligula, volutpat ullamcorper ipsum.

</ul>

<P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor arcu mollis nisi laoreet venenatis. Ut varius metus leo. Nam eleifend felis in sapien venenatis viverra. Mauris ut vehicula nibh. Duis eu ornare purus. Nunc sit amet lectus sed nibh molestie pulvinar. Duis facilisis est sed metus laoreet nec fringilla arcu tristique. Suspendisse potenti. In pulvinar rutrum elit, sed placerat magna dapibus eu. Mauris sem felis, aliquam nec euismod lobortis, porta in diam. </p>

<P>Proin cursus feugiat quam ut ultrices. Quisque a eros orci. Suspendisse ligula ante, mollis tempus placerat laoreet, vestibulum adipiscing odio. Donec nec libero augue. Donec blandit elementum mauris, vitae pretium lectus pretium in. Aliquam erat volutpat. Donec cursus libero ac orci adipiscing sit amet fringilla diam imperdiet. Nam vel diam eu tortor ultrices faucibus. Ut imperdiet nisi a sapien mattis volutpat. Pellentesque scelerisque leo et nulla molestie vitae tempus ante bibendum. </p>


  
  
<div class=head4>Here Is the Subheadline To Grab Even More Attention</div>  
  
<P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor arcu mollis nisi laoreet venenatis. Ut varius metus leo. Nam eleifend felis in sapien venenatis viverra. Mauris ut vehicula nibh. Duis eu ornare purus. Nunc sit amet lectus sed nibh molestie pulvinar. Duis facilisis est sed metus laoreet nec fringilla arcu tristique. Suspendisse potenti. In pulvinar rutrum elit, sed placerat magna dapibus eu. Mauris sem felis, aliquam nec euismod lobortis, porta in diam. </p>





<P>Proin cursus feugiat quam ut ultrices. Quisque a eros orci. Suspendisse ligula ante, mollis tempus placerat laoreet, vestibulum adipiscing odio. Donec nec libero augue. Donec blandit elementum mauris, vitae pretium lectus pretium in. Aliquam erat volutpat. Donec cursus libero ac orci adipiscing sit amet fringilla diam imperdiet. Nam vel diam eu tortor ultrices faucibus. Ut imperdiet nisi a sapien mattis volutpat. Pellentesque scelerisque leo et nulla molestie vitae tempus ante bibendum. </p>

<div class=head4>Here Is the Subheadline To Grab Even More Attention</div>  
  
<P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor arcu mollis nisi laoreet venenatis. Ut varius metus leo. Nam eleifend felis in sapien venenatis viverra. Mauris ut vehicula nibh. Duis eu ornare purus. Nunc sit amet lectus sed nibh molestie pulvinar. Duis facilisis est sed metus laoreet nec fringilla arcu tristique. Suspendisse potenti. In pulvinar rutrum elit, sed placerat magna dapibus eu. Mauris sem felis, aliquam nec euismod lobortis, porta in diam. </p>



<P>Proin cursus feugiat quam ut ultrices. Quisque a eros orci. Suspendisse ligula ante, mollis tempus placerat laoreet, vestibulum adipiscing odio. Donec nec libero augue. Donec blandit elementum mauris, vitae pretium lectus pretium in. Aliquam erat volutpat. Donec cursus libero ac orci adipiscing sit amet fringilla diam imperdiet. Nam vel diam eu tortor ultrices faucibus. Ut imperdiet nisi a sapien mattis volutpat. Pellentesque scelerisque leo et nulla molestie vitae tempus ante bibendum. </p>





  
<P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor arcu mollis nisi laoreet venenatis. Ut varius metus leo. Nam eleifend felis in sapien venenatis viverra. Mauris ut vehicula nibh. Duis eu ornare purus. Nunc sit amet lectus sed nibh molestie pulvinar. Duis facilisis est sed metus laoreet nec fringilla arcu tristique. Suspendisse potenti. In pulvinar rutrum elit, sed placerat magna dapibus eu. Mauris sem felis, aliquam nec euismod lobortis, porta in diam. </p>

<div class=head4>Here Is the Subheadline To Grab Even More Attention</div>  

<P>Proin cursus feugiat quam ut ultrices. Quisque a eros orci. Suspendisse ligula ante, mollis tempus placerat laoreet, vestibulum adipiscing odio. Donec nec libero augue. Donec blandit elementum mauris, vitae pretium lectus pretium in. Aliquam erat volutpat. Donec cursus libero ac orci adipiscing sit amet fringilla diam imperdiet. Nam vel diam eu tortor ultrices faucibus. Ut imperdiet nisi a sapien mattis volutpat. Pellentesque scelerisque leo et nulla molestie vitae tempus ante bibendum. </p>
  
  
<center><table cellspacing=0 cellpadding=0 border=0 width=500 class=guarantee-table>
<TR><TD><div class=guarantee-head>100% No-Questions Asked, 60 Day Money Back Guarantee</div>
<div class=guarantee-text><img src="' . $imagePath . 'seal05.png" align=left style="margin-right:10px;margin-bottom:10px;">Donec ultricies convallis tellus, malesuada placerat metus varius sit amet. Sed et ante leo. Fusce arcu lectus, posuere at ornare ac, fringilla ac elit. Etiam ut quam odio, id consequat ipsum. In erat turpis, consequat in pulvinar a, pharetra ac turpis. Praesent at velit urna, sodales molestie nulla. Donec ultricies convallis tellus, malesuada placerat metus varius sit amet. Sed et ante leo. Fusce arcu lectus, posuere at ornare ac, fringilla ac elit. Etiam ut quam odio, id consequat ipsum. In erat turpis, consequat in pulvinar a, pharetra ac turpis. Praesent at velit urna, sodales molestie nulla.</div></td></tr>
</table></center>

</div>
 
 <BR><center><img src="' . $imagePath . 'ecover-pbk3-done.png"></center>

<div style="padding:0px 119px; padding-top:0px; ">

 <div align="center">
   <p>
   
	   <center><a href="#"><img src="' . $imagePath . 'x_09.jpg"></a></center><BR>
    
     </p>




<div class=signature>I Wish You Success,<BR>
Lucas Adamski</div>
   
<div class=ps><B>P.S.</b> Quisque a eros orci. Suspendisse ligula ante, <a href="">mollis tempus</a> placerat laoreet, vestibulum adipiscing odio.</div>

<div class=ps><B>P.P.S.</b> Quisque a eros orci. Suspendisse ligula ante, mollis tempus placerat laoreet, vestibulum adipiscing odio.</div>   
   
<BR><BR><BR><BR><BR><BR>

<div class=disclaimer>DISCLAIMER: THE PERFORMANCE EXPERIENCED BY THE USER COMMENTS AND TESTIMONIALS ON THIS PAGE AND/OR OUR WEBSITE IS NOT WHAT YOU SHOULD EXPECT TO EXPERIENCE. COMPANY HAS NOT INVESTIGATED OR SUBSTANTIATED ANY OF THE USER COMMENTS OR CLAIMS. SOME OF THE USERS MAY, IN SOME CASES, BEEN INCENTIVIZED TO SUBMIT THEIR COMMENTS, AND COMPANY HAS NOT VERIFIED THE FIGURES QUOTED IN THEM. CLICKBANK IS A REGISTERED TRADEMARK OF KEYNETICS INC., A DELAWARE CORPORATION. CBWEALTHFORUMA.COM IS NOT AFFILIATED WITH KEYNETICS INC. IN ANY WAY, NOR DOES KEYNETICS INC. SPONSOR OR APPROVE ANY CBWEALTHFORMULA.COM PRODUCT. KEYNETICS INC. EXPRESSES NO OPINION AS TO THE CORRECTNESS OF ANY OF THE STATEMENTS MADE BY CBWEALTHFORMULA.COM IN THE MATERIALS ON THIS WEB PAGE.</div>

    
  </div>



 </div>


</div>
</td>
	</tr>';
    }
endwhile;

