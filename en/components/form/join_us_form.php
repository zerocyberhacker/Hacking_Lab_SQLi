<form method="POST">
    <div>
        <label>Position</label><br/>
       <select name="position" id="position" style="width:100%;height:50px;padding:10px;">
            <option value="junior-building">Junior Building Engineer</option>
            <option value="junior-structural">Junior Structural engineer</option>
            <option value="senior-civil">Senior Civil Engineer</option>
            <option value="intern-computer">IT Internship</option>
        </select>
    </div><br/>
    <div>
        <label>Expected Salary</label>
        <input type="text" name="salary" placeholder="HKD 18000" required/>
    </div>
    <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="Your name" required/>
    </div>
    <div>
        <label>Phone number</label>
        <input type="text" name="phone" placeholder="Your phone" required />
    </div>
    <div>
         <label>Email</label>
        <input type="email" name="email" placeholder="Your email" required />
    </div>
    <div>
        <label>HKID Card</label>
        <input type="hkid" name="hkid" placeholder="e.g. F123456(0)" required/>
    </div>
    <div>
        <label>Address</label>
        <input type="text" name="address" class="message-box" placeholder="213 Nam Cheong Street, Sham Shui Po, Kowloon"  required/>
    </div>
    <div>
        <label>Other Info (option)</label>
        <input type="text" name="info" class="message-box"   placeholder="Why are you interested in joining our team?"  />
    </div>
    <div class="d-flex">
        <button type="submit" name="submit">SEND</button>
    </div>
</form>