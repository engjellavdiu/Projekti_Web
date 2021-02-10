        <?php include '../components/header.php' ?>
        <!-- main -->
        <main id="main">
            <div class="mbajtsi-box">
                <div id="box-left">
                    <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2938.863726265519!2d21.132520015697306!3d42.558186430558536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf9155209d4ad0657!2sInnovation%20Campus%20-%20UBT!5e0!3m2!1sen!2sus!4v1607982467463!5m2!1sen!2sus"
                            width="600px" height="400px" frameborder="0" style="border:0;" allowfullscreen=""
                    ></iframe>           
                </div>

                <form id="box-right" method="POST" action="../businessLogic/send-message.php">
                    <h2>Na kontaktoni</h2>
                    <hr class="divider">
                    <label for="name">Emri</label>
                    <input id="emriPlote" type="text" name="name">
                    <label for="name">Mbiemri</label>
                    <input id="emriPlote" type="text" name="lastname">
                    <label for="email">Email</label>
                    <input id="emaili1" type="email" name="email">
                    <label for="mesazhi">Mesazhi</label>
                    <textarea id="mesazhi" type="text" name="msg"></textarea>
                    <input id="dergo" type="submit" class="button" name="send-msg" value="Dergo">
                </form>
            </div>
        </main>
        
        <!--Footer-->
        <?php include '../components/footer.php'?>