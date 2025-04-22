<?php

namespace Database\Seeders;

use App\Models\PortTech;
use App\Models\Portfolio;
use App\Models\PortfolioDetail;
use App\Models\PortfolioImage;
use Illuminate\Database\Seeder;
use DB;

class PortfolioTechSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      DB::statement('SET FOREIGN_KEY_CHECKS=0;');
      DB::table('port_teches')->truncate();
      DB::table('portfolios')->truncate();
      DB::table('portfolio_details')->truncate();
      DB::table('portfolio_images')->truncate();
      DB::statement('SET FOREIGN_KEY_CHECKS=1;');

      $port1 = PortTech::create([
         'name' => 'PHP',
      ]);

      $port2 =  PortTech::create([
         'name' => 'Laravel',
      ]);

      $port3 =    PortTech::create([
         'name' => 'ReactJs',
      ]);

      $port4 =  PortTech::create([
         'name' => 'Blockchain',
      ]);

      $port5 =   PortTech::create([
         'name' => 'Html-Css',
      ]);

      $Porfolio1 = Portfolio::create([
         'title' => 'School management',
         'port_tech_id' => $port1->id,
         'image' => 'NA'
      ]);

      $Porfolio2 = Portfolio::create([
         'title' => 'Portfolio',
         'port_tech_id' => $port2->id,
         'image' => 'NA'
      ]);


      $Porfolio3 = Portfolio::create([
         'title' => 'Datting Site',
         'port_tech_id' => $port3->id,
         'image' => 'NA'
      ]);

      $Porfolio4 = Portfolio::create([
         'title' => 'NFT',
         'port_tech_id' => $port4->id,
         'image' => 'NA'
      ]);

      $Porfolio5 = Portfolio::create([
         'title' => 'HTML and Css templates',
         'port_tech_id' => $port5->id,
         'image' => 'NA'
      ]);

      $portfolioDetail1 = PortfolioDetail::create([
         'portfolio_id' => $Porfolio1->id,
         'link_1' => 'School management',
         'details' => '<div class="project-description">
  <h2>📘 School Management System</h2>
  <p>
    This is a web-based school management system with three core modules:
    <strong>Students</strong>, <strong>Parents</strong>, and <strong>Teachers</strong>.
  </p>
  <ul>
    <li>Create and manage student records</li>
    <li>Register and manage teacher profiles</li>
    <li>Add and link parents to their children</li>
  </ul>

  <p>✅ <strong>Planned Features:</strong></p>
  <ul>
    <li>Class creation and management</li>
    <li>Student result/report generation</li>
    <li>Timetable scheduling</li>
    <li>Attendance tracking</li>
  </ul>

  <p>
    The system is built using <strong>Laravel</strong> (backend) and <strong>jQuery</strong> (frontend) for dynamic and responsive functionality. Designed to be modular, scalable, and easy to maintain.
  </p>
</div>
',
         'link_2' => 'NA',
         'duration' => 'NA'
      ]);


      $portfolioDetail2 = PortfolioDetail::create([
         'portfolio_id' => $Porfolio2->id,
         'link_1' => 'Portfolio',
         'details' => '<div class="project-description">
  <h2>📁 Dynamic Portfolio Website</h2>
  <p>
    This is a **dynamic portfolio website** built using **Laravel** for the backend and **AdminLTE** for the admin panel. The system allows users (admins) to easily manage and display their portfolio content, including projects, descriptions, images, and technologies used.
  </p>

  <h3>💡 Key Features:</h3>
  <ul>
    <li><strong>Admin Panel:</strong> A user-friendly admin interface built with <strong>AdminLTE</strong> for managing the portfolio content.</li>
    <li><strong>Project Management:</strong> Admins can add, edit, and delete portfolio projects with details like title, description, technologies used, and project images.</li>
    <li><strong>Image Upload:</strong> Admins can upload project images dynamically through the admin panel.</li>
    <li><strong>Frontend Display:</strong> The projects are displayed on the portfolio page, dynamically fetching data from the backend.</li>
    <li><strong>Responsive Design:</strong> The portfolio page is fully responsive, adapting to different screen sizes, using **Bootstrap** for styling.</li>
  </ul>

  <h3>🛠️ Tech Stack:</h3>
  <ul>
    <li><strong>Laravel</strong> for backend logic and database management.</li>
    <li><strong>AdminLTE</strong> for a clean, modern admin dashboard interface.</li>
    <li><strong>MySQL</strong> as the database for storing portfolio projects.</li>
    <li><strong>jQuery + AJAX</strong> for dynamic functionality in the admin panel.</li>
    <li><strong>Bootstrap</strong> for responsive frontend design.</li>
  </ul>

  <h3>🔜 Planned Features:</h3>
  <ul>
    <li>Filtering projects by category or technology used.</li>
    <li>Multi-image gallery for each project.</li>
    <li>Portfolio contact form and testimonial section.</li>
    <li>Ability to add custom categories for projects.</li>
  </ul>

  <p>
    This project aims to provide an easy-to-use, flexible platform for individuals to showcase their work online. The dynamic nature of the site allows for easy updates without any coding knowledge, making it accessible to a broader audience.
  </p>

  <p>
    <strong>Link:</strong> <a href="your-live-demo-link" target="_blank">View Live Demo</a>
  </p>
</div>
',
         'link_2' => 'NA',
         'duration' => 'NA'
      ]);

      $portfolioDetail3 = PortfolioDetail::create([
         'portfolio_id' => $Porfolio3->id,
         'link_1' => 'Datting Site',
         'details' => '<div class="project-description">
  <h2>💘 Dating Site</h2>
  <p>
    This is a **dating site** built using **React.js** for the frontend and **Laravel** for the backend API. The project is designed to provide users with a platform to create profiles, update personal information, and connect with other members.
  </p>

  <h3>💡 Key Features:</h3>
  <ul>
    <li><strong>Frontend (React.js):</strong> The user interface is built with React.js, providing a fast and responsive experience.</li>
    <li><strong>Profile Update:</strong> Users can update their profiles, including personal information, photos, and preferences.</li>
    <li><strong>Laravel Backend:</strong> Laravel serves as the API to handle data management, including profile updates and future features like messaging and user search.</li>
    <li><strong>Responsive Design:</strong> The frontend is fully responsive, adapting to both mobile and desktop views for a seamless user experience.</li>
  </ul>

  <h3>🛠️ Tech Stack:</h3>
  <ul>
    <li><strong>React.js</strong> for frontend development and dynamic UI updates.</li>
    <li><strong>Laravel</strong> for API backend and data management.</li>
    <li><strong>MySQL</strong> as the database for storing user profiles and preferences.</li>
    <li><strong>Bootstrap</strong> for responsive design and styling on the frontend.</li>
  </ul>

  <h3>🔜 Planned Features:</h3>
  <ul>
    <li>Messaging system for users to communicate.</li>
    <li>Search functionality to find potential matches based on preferences.</li>
    <li>User authentication and registration system.</li>
    <li>Photo upload feature for user profiles.</li>
    <li>Real-time notifications for messages and match updates.</li>
  </ul>

  <p>
    This project aims to provide a platform for individuals to connect with others in a safe and enjoyable way. It is designed with scalability in mind, with plans for additional features like messaging, photo sharing, and more.
  </p>

  <p>
    <strong>Link:</strong> <a href="your-live-demo-link" target="_blank">View Live Demo</a>
  </p>
</div>
',
         'link_2' => 'NA',
         'duration' => 'NA'
      ]);

      $portfolioDetail4 = PortfolioDetail::create([
         'portfolio_id' => $Porfolio4->id,
         'link_1' => 'NFT',
         'details' => '<div class="project-description">
  <h2>🎨 NFT Project</h2>
  <p>
    This is an **NFT project** built using **React.js** for the frontend and **Hardhat** for the backend. The project allows users to mint, view, and interact with NFTs directly from their web browser, leveraging the power of Ethereum smart contracts.
  </p>

  <h3>💡 Key Features:</h3>
  <ul>
    <li><strong>Frontend (React.js):</strong> A responsive and interactive interface built with React.js that allows users to interact with the NFT marketplace and mint NFTs.</li>
    <li><strong>Minting NFTs:</strong> Users can mint new NFTs directly from the frontend, interacting with Ethereum smart contracts deployed via Hardhat.</li>
    <li><strong>Smart Contract Backend (Hardhat):</strong> Hardhat is used to deploy and manage the Ethereum smart contracts, allowing for secure and efficient handling of NFT minting and transactions.</li>
    <li><strong>Ethereum Integration:</strong> Users can connect their wallets (like MetaMask) to mint, view, and transfer NFTs on the Ethereum blockchain.</li>
    <li><strong>Responsive Design:</strong> The frontend is fully responsive, providing a seamless experience across both mobile and desktop devices.</li>
  </ul>

  <h3>🛠️ Tech Stack:</h3>
  <ul>
    <li><strong>React.js</strong> for frontend development and dynamic interactions.</li>
    <li><strong>Hardhat</strong> for deploying and managing Ethereum smart contracts for NFT minting.</li>
    <li><strong>Ethereum</strong> for blockchain transactions and NFT management.</li>
    <li><strong>MetaMask</strong> integration for wallet management and transaction signing.</li>
    <li><strong>IPFS</strong> for storing metadata and images associated with NFTs.</li>
  </ul>

  <h3>🔜 Planned Features:</h3>
  <ul>
    <li>Marketplace integration for buying/selling NFTs.</li>
    <li>User profile pages displaying owned NFTs.</li>
    <li>Ability to list NFTs for auction or fixed-price sale.</li>
    <li>Smart contract optimizations for gas fees and security.</li>
  </ul>

  <p>
    This project aims to create a seamless NFT minting and viewing experience, leveraging the power of blockchain technology. With the current features, users can easily mint NFTs, connect their wallets, and interact with the Ethereum network.
  </p>

  <p>
    <strong>Link:</strong> <a href="your-live-demo-link" target="_blank">View Live Demo</a>
  </p>
</div>
',
         'link_2' => 'NA',
         'duration' => 'NA'
      ]);

      $portfolioDetail5 = PortfolioDetail::create([
         'portfolio_id' => $Porfolio5->id,
         'link_1' => 'HTML and Css templates',
         'details' => '<div class="project-description">
  <h2>🎨 HTML & CSS Template</h2>
  <p>
    This is a collection of custom-made **HTML & CSS templates** designed for creating beautiful, responsive websites. The templates focus on clean, modern designs that can be easily customized for various use cases such as portfolios, business websites, blogs, and more.
  </p>

  <h3>💡 Key Features:</h3>
  <ul>
    <li><strong>Responsive Design:</strong> The templates are fully responsive, adapting to different screen sizes to ensure a smooth user experience on both desktop and mobile devices.</li>
    <li><strong>Clean & Modern Layouts:</strong> The templates feature minimalistic, modern designs that emphasize usability and aesthetics.</li>
    <li><strong>Customizable Styles:</strong> The CSS is written in a modular way, allowing easy customization of colors, fonts, and layout elements.</li>
    <li><strong>Pre-built Components:</strong> The templates include various pre-built UI components like navigation bars, footers, cards, forms, and buttons.</li>
    <li><strong>SEO Optimized:</strong> The templates are designed to be SEO-friendly, helping your website rank better in search engines.</li>
  </ul>

  <h3>🛠️ Tech Stack:</h3>
  <ul>
    <li><strong>HTML</strong> for structuring the content and layout of the website.</li>
    <li><strong>CSS</strong> for styling and making the template visually appealing and responsive.</li>
    <li><strong>Flexbox/Grid</strong> for building flexible and responsive layouts.</li>
    <li><strong>Google Fonts</strong> for easy integration of custom fonts to enhance typography.</li>
    <li><strong>Font Awesome</strong> for adding scalable vector icons to improve UI elements.</li>
  </ul>

  <h3>🔜 Planned Features:</h3>
  <ul>
    <li>Dark mode toggle for users who prefer a darker interface.</li>
    <li>Additional templates for various industries such as e-commerce and portfolios.</li>
    <li>CSS animations and transitions to enhance the interactivity of the templates.</li>
    <li>Integration with JavaScript for interactive elements such as sliders and modals.</li>
  </ul>

  <p>
    These templates provide a great starting point for building fully responsive and visually appealing websites with just HTML and CSS. They are lightweight, fast, and ready to be customized to fit any project.
  </p>

  <p>
    <strong>Link:</strong> <a href="your-live-demo-link" target="_blank">View Live Demo</a>
  </p>
</div>
',
         'link_2' => 'NA',
         'duration' => 'NA'
      ]);

      $portfolioImage1 = PortfolioImage::create([
         'portfolio_id' => $Porfolio1->id,
         'image' => 'NA'
      ]);

      $portfolioImage2 = PortfolioImage::create([
         'portfolio_id' => $Porfolio2->id,
         'image' => 'NA'
      ]);

      $portfolioImage3 = PortfolioImage::create([
         'portfolio_id' => $Porfolio3->id,
         'image' => 'NA'
      ]);

      $portfolioImage4 = PortfolioImage::create([
         'portfolio_id' => $Porfolio4->id,
         'image' => 'NA'
      ]);

      $portfolioImage5 = PortfolioImage::create([
         'portfolio_id' => $Porfolio5->id,
         'image' => 'NA'
      ]);
   }
}
