############
Registration
############


.. raw:: html

  <html>
       <body>
  
         <form method="post" name="scarfregister" action="form-to-reg.php">
           <b>Name:*</b>
           <input type="text" id="name" name="name" required><br><br>
           
           <b>Business Email:*</b>
           <input type="text" id="email" name="email" required><br><br>

           <i>As part of the registration process, your e-mail address will be subscribed to our 
           SCARF-Users mailing list hosted on the JISCMail service and only used for communication 
           relating to the SCARF service. It will not be distributed to any third parties. 
           You may unsubscribe from the mailing list at any time.</i>
           <br><br>

           <b>Affiliation:</b>
           <input type="text" id="affiliation" name="affiliation"><br><br>

           <i>For example your employer or university or college you are studying at.</i> <br><br>

           <b>STFC or Diamond Collaborator:</b>
           <input type="text" id="collaborator" name="collaborator"><br><br>

           <i>Please specify the name of your STFC or Diamond collaborator (only for external users)</i>. <br><br>

           <b>SSH Public Key:</b><br>
           <textarea name="sshkey" rows="10" cols="60" placeholder="ssh-[rsa|dsa] <random character string> <optional comment>"></textarea><br><br>
           <i>Users without an STFC federal id must supply an ssh key or they will not be able to login. Please see help <a href="ssh_key.html">generating an ssh-key</a></i>.<br><br>

           <b>Access to subsections of SCARF:</b><br><br>
           <input type="checkbox" name="ibis">IBIS<br>
           <input type="checkbox" name="magnacarta">MagnaCarta<br>
           <input type="checkbox" name="derevolutionibus">DeRevolutionIbus<br>
           <input type="checkbox" name="octopus">Octopus<br>
           <input type="checkbox" name="scddev">SCD Developer<br>

           <br><i>Please select if you want to request any special access rights, some allow access to restricted sets of hardware, others allow access to higher priority partitions MagnaCarta and DeRevolutionIbus machines are restricted to CLF Plasma Physics and their collaborators only. IBIS is for members of the IBIS collaboration only. Octopus is restricted to members of the CLF LSF Octopus team. SCD Developer is for SCD staff using SCARF for HPC Development work.</i> <br><br>

           <b>Access to restricted applications:</b><br><br>
           <input type="checkbox" name="matlab">Matlab<br>
           <input type="checkbox" name="idl">IDL<br>
           <input type="checkbox" name="crystal">CRYSTAL<br>
           <input type="checkbox" name="castep">CASTEP<br>
           <input type="checkbox" name="dl_poly">DL_POLY<br>
           <input type="checkbox" name="epoch">EPOCH<br>
           <input type="checkbox" name="gaussian">GAUSSIAN<br>
           <input type="checkbox" name="atsas">ATSAS and BIOSAXS pipeline<br>
           <input type="checkbox" name="mathematica">Mathematica<br>
           <br><i>Please select if you want to request access to restricted applications. Access to MATLAB is restricted to ISIS users only. Note that we may have to verify that you are entitled to access the applications you request.</i>
           <br><br>
	   <b>Scientific case and planned usage *</b>
           <textarea name="case" rows="10" cols="60"></textarea><br><br>

           <i>Please tell us a little about what you want to use SCARF for. If you are not STFC staff, please tell us your relationship with STFC.</i><br>

           <br>
	   <input required="required" type="radio" id="privacy" name="privacy">Should your application to use SCARF be accepted we will process the information you give to us as laid out in our privacy notice. Please select this button to mark your agreement to these terms.<br>

           <input required="required" type="radio" id="helpdesk" name="helpdesk">By selecting this button, you understand and consent that the information submitted in this form will be stored electronically in the SCARF helpdesk system and will be used to process your application.<br><br>

           <input type="submit" value="Send">
           <input type="reset" value="Reset">



         </form>
  
  
  
  
       <br><br>  
  
       </body>

  </html>

By submitting this form you declare that you have read and agree to follow the `SCARF Terms and Conditions of Use <scarf_terms.html>`_ and the `STFC Acceptable Use Policy <https://stfc.ukri.org/about-us/how-we-are-governed/policies-standards/ict-acceptable-use-policy/>`_
