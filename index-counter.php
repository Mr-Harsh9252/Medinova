<style>
  .counter {
  font-size: 2rem;
  font-weight: bold;
}

.plus-icon{
  font-size: 30px;
  
  padding: 2px;
}
</style>

<section class="bsb-fact-5 py-3 py-md-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="container-fluid bg-light border shadow">
            <div class="row">
              <div class="col-12 col-md-4 p-0">
                <div class="card border-0 bg-transparent">
                  <div class="card-body text-center p-4 p-xxl-5">
                    <h3 class="display-4 fw-bold mb-2">
                    <i class="fa-regular fa-face-smile fs-3"></i>
                      <span class="counter" data-target="900">0</span><span class="plus-icon">+</span>
                    </h3>
                    <p class="fs-5 mb-0 text-secondary">Happy Patient</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 p-0 border-top border-bottom border-start border-end">
                <div class="card border-0 bg-transparent">
                  <div class="card-body text-center p-4 p-xxl-5">
                    <h3 class="display-4 fw-bold mb-2">
                    <i class="fa-solid fa-bed fs-3  "></i>
                      <span class="counter" data-target="1800">0</span><span class="plus-icon">+</span>
                    </h3>
                    <p class="fs-5 mb-0 text-secondary">Total Beds</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 p-0">
                <div class="card border-0 bg-transparent">
                  <div class="card-body text-center p-4 p-xxl-5">
                    <h3 class="display-4 fw-bold mb-2">
                    <i class="fa-solid fa-circle-h fs-3"></i>
                      <span class="counter" data-target="1000">0</span><span class="plus-icon">+</span>
                    </h3>
                    <p class="fs-5 mb-0 text-secondary">Total Cases</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const counters = document.querySelectorAll('.counter');
      const options = {
        threshold: 0.1 // Trigger when 10% of the element is visible
      };

      const updateCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;

        const increment = target / 200; // Adjust the increment for speed control

        if (count < target) {
          counter.innerText = Math.ceil(count + increment);
          setTimeout(() => updateCounter(counter), 10); // Adjust the speed of counting
        } else {
          counter.innerText = target;
        }
      };

      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const counter = entry.target;
            updateCounter(counter);
            observer.unobserve(counter); // Stop observing once the animation has started
          }
        });
      }, options);

      counters.forEach(counter => {
        counter.innerText = '0';
        observer.observe(counter);
      });
    });
  </script>
