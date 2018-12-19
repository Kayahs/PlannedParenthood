<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */
// Need to get the coorect hero image for this page. Currently using the front-page hero image.
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <div class="top-hero-green">
      <h1>about us</h1>
      <img src = <?php echo get_site_url() . '/wp-content/uploads/2018/12/About-hero.jpg' ?> alt="About Us hero image">
      <!-- Inside this div will be placed the green background, the text as well as the hero image -->
      </div><!-- .top-hero-green -->
      <div class="about-navigation">
        <h2>about us</h2>
        <h2>board of directors</h2>
        <h2>strategic plan & annual report</h2>
      </div>
      <div class="about-text-area">
        <div class="mission-equity-block">
          <div class="mission-vision-block">
            <h2>mission</h2>
            <p>We are a pro-choice community health centre that advances and advocates for the sexual health, health, and well being of youth.</p>
            <h2>vision</h2>
            <p>A future of sexual and reproductive choice, freedom, and possibilities.</p>
          </div> <!-- .mission-vision-block -->
          <div class="equity-vision-block">
            <h2>equity vision</h2>
            <h3>Equity Statement</h3>
            <p>Planned Parenthood Toronto is committed to being an agency that values and reflects the diverse communities of Toronto. We recognize that:</p>
            <p>  	• 	Equity is different from equality.</p>
            <p>  • 	Equity is access to inclusive, high quality, programming and services that respect your choices.</p>
            <p>  • 	Equity is ensuring that community input informs what we do and guides us to take action for social change that benefits you.</p>
          </div><!-- .equity-vision-block -->
        </div><!-- .mission-equity-block -->
        <div class="about-rest-text">
          <h2>principles and values</h2>
          <p>PPT believes that:</p>
          <p>• 	Healthy sexuality is an important part of life</p>
          <p>• 	Individuals have the right to control their lives and to make informed choices regarding their sexuality and reproduction.</p>
          <p>• 	Sexual and reproductive rights must be protected</p>
          <p>• 	A respectful, confidential, non-judgmental, and inclusive environment is important to offer effective services</p>
          <p>• 	Input from clients, staff, volunteers, and community partners informs the work we do and inspires us to innovate and take action for social change</p>
          <p>• 	Providing responsive, client-centred services means being pro-choice, youth-positive, woman-positive, sex-positive and lesbian, gay, bisexual, trans, queer-positive</p>
          <p>• 	Providing accurate and understandable information empowers individuals to make informed choices</p>
          <p>• 	Maintaining transparency and fulfilling our accountability to our many stakeholders will support their continued trust in us</p>
          <p>• 	A healthy, engaging, collaborative, and safe work environment is vital to our success and the best way to demonstrate that we value our staff, students, and volunteers</p>
          <p>• 	We can only identify how power and privilege play out when we are conscious and committed to understanding how racism, sexism, homophobia, transphobia, and other forms of oppression affect each one of us</p>
          <p>• 	It is important to respect and value our history as an organization that emerged from the women’s rights movement.</p>
          <h2>accountability</h2>
          <h3>Ontario Public Sector Salary Disclosure</h3>
          <p>
            The Public Sector Salary Disclosure Act, 1996 (the act) makes Ontario’s public sector more open and accountable to taxpayers. The act requires organizations that receive public funding from the Province of Ontario to disclose annually the names, positions, salaries, and total taxable benefits of employees paid $100,000 or more in a calendar year.</p>
            <br>
          <p>  
            The act applies to organizations such as the Government of Ontario, Crown Agencies, Municipalities, Hospitals, Boards of Public Health, School Boards, Universities, Colleges, Hydro One, Ontario Power Generation, and other public sector employers who receive a significant level of funding from the provincial government.</p>
            <h2>our history: the cadbury family legacy</h2>
            <p>
            Barbara Cadbury moved from London, England to Regina, Saskatchewan in 1940. With her, she brought not only her husband George and two daughters, but also a wealth of experience garnered from being the youngest borough councilor in the City of London. Barbara quickly integrated herself into the Canadian political arena, becoming the first woman elected to a cooperative board in Canada.</p>
            <br>
            <p>
            Barbara’s vision of bringing people together to shore up support for family planning and women’s health caused her to leave her duties in the Saskatchewan Cooperative Movement. In 1951, Barbara refocused her energies and began advocating for birth control and women’s health as the editor of the Planned Parenthood Federation of America’s magazine. In 1954, Barbara and her husband, George Cadbury, began revolutionizing the field of family planning at an international level. With the support of the International Planned Parenthood Federation (IPPF), the Cadburys succeeded in helping organize a Family Planning Association of Ceylon (now Sri Lanka) and assisted in founding the Family Planning Association of Jamaica. In recognition of the Cadburys’ boundless passion and inspirational achievements, in 1960 the IPPF appointed both Barbara and George as special representatives of the president and governing body.</p>
            <br>
            <p>
            In 1961, outraged by the arrest of Toronto Pharmacist Harold Fine (who had been arrested for providing information on contraception), the Cadburys organized the first meeting of the Planned Parenthood Association of Toronto.</p>
            <p>
              <br>
            The Cadburys led a massive media campaign to amend the criminal code and, in 1969, the dissemination of birth control became legal. Following this success, PPT became a registered charitable organization and began to create programs that provided direct sexual health services.</p>
            <br>
          <h3>and after...</h3>
          <p>
          In 1975, PPT’s partnership with the Bay Centre for Birth Control began. Today, the partnership still exists, as the satellite office of PPT’s Women’s Programming. In 1983, The House Teen Health Centre for youth ages 13 to 25 opened it doors. It became a licensed Community Health Centre in 1990. Now, as Planned Parenthood Toronto Health Services, we offer a full range of health services, including primary health, sexual and reproductive health, and mental health services for youth ages 13 to 29. In 1993, the Teen Sex InfoLine accepted its first phone call on its peer-based information support line. In 2001, the TSI expanded its services with the launch of a new website for teens, Spiderbytes.ca, providing 24-hour a day answers to frequently asked questions about sexual health for youth. In 1998, PPT adopted the Teens Educating and Confronting Homophobia (T.E.A.C.H.) program, a small, peer-led anti-homophobia project from East End Community Health Centre. The program is now very well-known in Toronto, having won a number of awards and distinctions. In the last few years, PPT has undertaken a number of consultations to further our knowledge of the state of sexual health in Toronto, and we have initiated new programs to increase our capacity to provide programming to meet the needs of the people of Toronto.
          </p>
        </div><!-- .about-rest-text -->
      </div><!-- .about-text-area -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>