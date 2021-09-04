
    <!-------Numbers----------->
    <section class="statistics">
        <h1>Statistics</h1>
        <p>Number of blood transfusions needed and the number of donors available</p>
        <div class="statisticsrow">
            <div class = "transfutions-col">
                <h2>Blood transfusions</h2>
                <p2>There are<br></p2>
                <p1>36<br></p1>
                <p2>patients who need blood transfusions</p2>
            </div>
            <div class = "transfutions-col">
                <h2>Blood Donors</h2>
                <p2>There are<br></p2>
                <p1>36<br></p1>
                <p2>Individuals willing to supply blood for those in need</p2> 
            </div>
        </div>
    </section>
    <!-------Need for blood ----------->
    <section class="blood-donations">
        <div class="row">
            <div class="blood-col">
                <h1>In need of blood</h1>
                <p>The button below will lead you to a Google form. It is required of you to fill this form to place a public request for blood.</p>
                <p>Please be mindful that you complete filling the form with accurate information. It helps to find a matching donor with similar characteristics to the patient. We will make sure to get back to you immediately in finding a donor for your requirements.</p>
                <p>On behalf of Social Giving, we thank you for taking the time to complete the form. We hope you find a suitable donor as soon as possible! </p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfVc3apzz7GyZR9adZ3u-nD1s9BRxIsO6rhuQkw4bSptEm-aQ/viewform?usp=pp_url" class="hero-btn red-btn">NEED BLOOD</a>
            </div>
            <div class="blood-col">
                <img src="https://image.freepik.com/free-vector/blood-donation-illustration-emergency-blood-transfusion-concept-patient-support-blood-collection-illustration-cartoon-flat-style_198838-17.jpg">
            </div>
        </div>
    </section>
    <!-----------Pop up------->
    <section>
        <div class="bg-modal">
            <div class="modal-content">
                <div class="close">+</div>
                <div class="row">
                    <div class="popup-col">
                        <img class="image" src="https://i.pinimg.com/564x/0b/32/b4/0b32b42c420b322fc1aa324e12964cbb.jpg">
                    </div>
                <div class="popup-col">
                    <img class="logo" src="images/finallogo.png.jpg">
                    <p>It is required of that you press the proceed button below to be able to complete the form required to be able to 
                        donate blood </p>
                    <p>You are eligible to click the below button only if you have donated before and is of weight above 50kg</p>
                    <a href="donarform.php" class="hero-btn proceed-btn">PROCEED</a>
                </div>
            </div>
        </div>
    </section>
    <!-------Donor ----------->
    <section class="blood-donations">
        <div class="row">
            <div class="blood-col">
                <img src="https://i.pinimg.com/564x/0b/32/b4/0b32b42c420b322fc1aa324e12964cbb.jpg">
            </div>
            <div class="blood-col">
                <h1>Want to be a donor</h1>
                <p>The button below will lead you to a Google form. It is required of you to fill this form to be able to donate.</p>
                <p>Please be mindful to complete the form with accurate information to find a patient who needs a blood transfusion with a similar blood type as yours.  We will make sure to notify you immediately on the occasion of finding an appropriate patient with similar specifications. We are glad that you are helping to save lives.</p>
                <P>On behalf of Social Giving, we thank you for taking the time to complete the form. We hope you continue to make blood donation your responsibility and save more lives!</P>
                <a href="#" id="donar button" class="hero-btn red-btn">BE A DONOR</a>
            </div>
        </div>
    </section>
    
    <!---Pop up-->
    <div class="bg-modal">
        <div class="modal-content">
            <div class="close">+</div>
            <div class="row">
                <div class="popup-col">
                    <img class="image" src="https://i.pinimg.com/564x/0b/32/b4/0b32b42c420b322fc1aa324e12964cbb.jpg">
                </div>
                <div class="popup-col">
                    <img class="logo" src="images/finallogo.png.jpg">
                    <p>It is required of that you press the proceed button below to be able to complete the form required to be able to 
                        donate blood </p>
                    <p>You are eligible to click the below button only if you have donated before and is of weight above 50kg</p>
                    <a href="donarform.php" class="hero-btn proceed-btn">PROCEED</a>
                </div>
            </div>
        </div>
    </div>
    <!------popup java script-->
    <script>
        document.getElementById('donar button').addEventListener('click',
        function(){
            document.querySelector('.bg-modal').style.display = 'flex';
        });
        document.querySelector('.close').addEventListener('click',
        function(){
            document.querySelector('.bg-modal').style.display = 'none'; 
        });
    </script>
</body>
</html>