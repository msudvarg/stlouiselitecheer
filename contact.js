
        function submitcontact(form) {
            if (window.XMLHttpRequest) {
                var cxn=new XMLHttpRequest();
            }
            else {
                var cxn=new ActiveXObject("Microsoft.XMLHTTP");
            }
            var cxnurl = "contact.php";
            params = "name=" + encodeURIComponent(form["name"].value);
            params += "&email=" + encodeURIComponent(form["email"].value);
            params += "&phone=" + encodeURIComponent(form["phone"].value);
            params += "&message=" + encodeURIComponent(form["message"].value);
            cxn.open("POST",cxnurl,true);
            cxn.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            cxn.setRequestHeader("Content-length",params.length);
            cxn.setRequestHeader("connection","close");
            cxn.send(params);
            cxn.onreadystatechange=function() {
                if (cxn.readyState == 4 && cxn.status == 200) {
                    document.getElementById("contactcontent").innerHTML = cxn.responseText;
                }
            }
        }
        
        function contactform() {
            var form = document.forms["contact"].elements;
            var complete = true;
            for (i=0;i<4;i++) {
                if (form[i].value == "") { var complete = false; }
            }
            if (complete) {submitcontact(form);}
            else { alert("Please Complete All Fields of Contact Form."); }
            return false;
        }