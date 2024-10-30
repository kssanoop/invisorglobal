<div class="container-fluid hero">
  <div class="skew-wrapper">
    <div class="skew-column">
      <div class="skew-image-wrap">
        <div class="about-image left-side"></div>
      </div>
      <div class="paragraph-container max-width">
        <div class="paragraph-wrap">
          <p class="paragraph">Fusce volutpat lectus et nisl consectetur finibus. In vitae scelerisque augue, in varius eros. Nunc sapien diam, euismod et pretium id, volutpat et tortor.</p>
        </div>
      </div>
    </div>
    <div class="skew-column">
      <div class="paragraph-container max-width">
        <div class="paragraph-wrap">
          <p class="paragraph">Fusce volutpat lectus et nisl consectetur finibus. In vitae scelerisque augue, in varius eros. Nunc sapien diam, euismod et pretium id, volutpat et tortor.</p>
        </div>
      </div>
      <div class="skew-image-wrap">
        <div class="about-image right-side"></div>
      </div>
    </div>
  </div>
</div>

<style>
     .max-width {
    max-width: 600px;
    margin: 0 auto;
  }

  /* Ensure responsive scaling */
  @media (max-width: 768px) {
    .max-width {
      width: 100%;
    }
  }
  /* Basic styling for the hero section */
  .hero {
    padding: 40px 0;
    text-align: center;
  }


  .title-wrap {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
  }


  /* Flexbox layout for skewed sections */
  .skew-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 30px;
    margin-top: 40px;
  }

  .skew-column {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 50%;
    position: relative;
  }

  /* Image wrapper with skewed images */
  .skew-image-wrap {
    width: 100%;
    height: 300px;
    overflow: hidden;
    position: relative;
  }

  .about-image {
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
  }

  /* Specific alignment for left-side images */
  .left-side {
    background-image: url('assets/img/about/about-left.png');
    clip-path: polygon(0 0, 100% 0, 85% 100%, 0 100%);
    position: relative;
    left: -15px; /* Pull left image to align with container edge */
  }

  .right-side {
    background-image: url('assets/img/about/about-right.png');
    clip-path: polygon(15% 0, 100% 0, 100% 100%, 0 100%);
  }

  /* Paragraph styling */
  .paragraph-container {
    width: 100%;
    padding: 0 15px;
  }

  .paragraph-wrap {
    margin-top: 20px;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 100%;
  }

  .paragraph {
    color: #666;
    line-height: 1.6;
    font-size: 16px;
    text-align: justify;
  }

  /* Centered rectangle */
  .skew-centered-rectangle {
    width: 100px;
    height: 300px;
    background-color: #f5f5f5;
    transform: skew(-10deg);
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .skew-wrapper {
      flex-direction: column;
      gap: 20px;
    }

    .skew-column {
      width: 100%;
    }

    .skew-centered-rectangle {
      width: 60px;
      height: 200px;
    }

    /* Adjust left-side image for mobile */
    .left-side {
      left: 0;
    }
  }
</style>
