                    <form action="" method="POST">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-6">
                              <div class="field-box d-flex flex-column">
                                <label class="para-main mb-2" for="name-field">Your Name <span class="text-danger fs-5">*</span></label>
                                <input class="input rounded-3" id="name-field" type="text" name="name" required>
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                              <div class="field-box d-flex flex-column">
                                <label class="para-main mb-2" for="email-field">Your Email <span class="text-danger fs-5">*</span></label>
                                <input class="input rounded-3" id="email-field" type="email" name="email" required>
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                              <div class="field-box d-flex flex-column">
                                <label class="para-main mb-2" for="phone-field">Phone Number <span class="text-danger fs-5">*</span></label>
                                <input class="input rounded-3" id="phone-field" type="number" name="phone" required>
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                              <div class="field-box d-flex flex-column">
                                <label class="para-main mb-2" for="subject-field">Services <span class="text-danger fs-5">*</span></label>
                               <select id="subject-field" class="input rounded-3" name="subject" required>
                                <option class="para-main text-white theme-bg" value="Item-1">Website Development</option>
                                <option class="para-main text-white theme-bg" value="Item-2">Logo Design</option>
                                <option class="para-main text-white theme-bg" value="Item-3">Ecommerce Solutions</option>
                                <option class="para-main text-white theme-bg" value="Item-3">Illustration</option>
                                <option class="para-main text-white theme-bg" value="Item-3">Marketing Collateral</option>
                                <option class="para-main text-white theme-bg" value="Item-3">Mobile Apps</option>
                                <option class="para-main text-white theme-bg" value="Item-3">SEO Services</option>
                                <option class="para-main text-white theme-bg" value="Item-3">Digital Marketing</option>
                                <option class="para-main text-white theme-bg" value="Item-3">Creative Copywriting</option>
                               </select>
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                              <div class="field-box d-flex flex-column">
                                <label class="para-main mb-2" for="message-field">Subject</label>
                               <textarea name="message" id="message-field" class="input rounded-3" rows="5"></textarea>
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                              <button class="theme-btn w-100 rounded-3" type="submit">Submit <span
                                class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                              </button>
                            </div>
                        </div>
                    </form>