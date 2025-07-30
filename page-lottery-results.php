<?php
/**
 * Template Name: Lottery Results Page
 * 
 * Custom page template for displaying lottery results
 */

get_header(); ?>

<style>
/* Force override all theme styles */
body {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
    min-height: 100vh;
}

.site-container, .content-area, .entry-content {
    background: transparent !important;
    max-width: none !important;
    padding: 0 !important;
    margin: 0 !important;
}

.site-header { display: none !important; }
.site-footer { display: none !important; }

/* Custom Header Navigation */
.custom-lottery-header {
    background: #003366;
    color: #fff;
    position: sticky;
    top: 0;
    z-index: 1000;
    width: 100%;
    padding: 0 24px;
    height: 64px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}

.header-logo {
    font-size: 1.35rem;
    color: #fff;
    font-weight: bold;
    text-decoration: none;
    letter-spacing: 1px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.header-logo:hover {
    color: #fff;
    text-decoration: none;
}

.main-nav {
    display: flex;
    align-items: center;
    gap: 22px;
}

.main-nav > a {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    padding: 8px 14px;
    border-radius: 5px;
    transition: background 0.2s;
    display: flex;
    align-items: center;
    gap: 6px;
}

.main-nav > a:hover {
    background: #002244;
    color: #fff;
    text-decoration: none;
}

.dropdown {
    position: relative;
}

.dropdown-toggle {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    padding: 8px 14px;
    border-radius: 5px;
    transition: background 0.2s;
    display: flex;
    align-items: center;
    gap: 6px;
    cursor: pointer;
}

.dropdown-toggle:hover {
    background: #002244;
    color: #fff;
    text-decoration: none;
}

.dropdown-menu {
    display: none;
    position: absolute;
    left: 0;
    top: 110%;
    background: #fff;
    color: #003366;
    min-width: 180px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.10);
    border-radius: 8px;
    padding: 10px 0;
    z-index: 200;
}

.dropdown:hover .dropdown-menu {
    display: block;
}

.dropdown-menu a {
    display: flex;
    align-items: center;
    gap: 6px;
    color: #003366;
    padding: 10px 22px;
    text-decoration: none;
    font-weight: 500;
    transition: background 0.18s, color 0.18s;
}

.dropdown-menu a:hover {
    background: #f1f6fc;
    color: #002244;
    text-decoration: none;
}

/* Modern Results Page Styles */
.lottery-results-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 30px 20px;
}

.lottery-results-header {
    background: rgba(255,255,255,0.95);
    backdrop-filter: blur(10px);
    padding: 40px;
    border-radius: 20px;
    text-align: center;
    margin-bottom: 30px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
}

.lottery-results-title {
    font-size: 3rem;
    font-weight: 800;
    color: #2c3e50;
    margin: 0 0 10px 0;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
}

.lottery-results-icon {
    font-size: 3.5rem;
    filter: drop-shadow(0 4px 8px rgba(0,0,0,0.2));
}

.lottery-results-subtitle {
    font-size: 1.3rem;
    color: #7f8c8d;
    margin: 0;
}

/* Results Grid */
.lottery-results-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin-bottom: 40px;
}

.lottery-result-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    border: 2px solid #e8f4fd;
    transition: all 0.3s ease;
    position: relative;
}

.lottery-result-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.15);
    border-color: #3498db;
}

.card-header {
    padding: 20px;
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #3498db, #2980b9);
    color: white;
}

.card-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: 0.1;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="none" stroke="white" stroke-width="2"/></svg>') repeat;
}

.card-title {
    font-size: 1.4rem;
    font-weight: 700;
    margin: 0 0 10px 0;
    display: flex;
    align-items: center;
    gap: 10px;
    position: relative;
    z-index: 1;
}

.card-subtitle {
    font-size: 0.9rem;
    opacity: 0.9;
    margin: 0;
    position: relative;
    z-index: 1;
}

.card-body {
    padding: 25px;
}

.winning-numbers-display {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
    margin: 20px 0;
}

.number-ball {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background: linear-gradient(135deg, #3498db, #2980b9);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.1rem;
    box-shadow: 0 4px 12px rgba(52, 152, 219, 0.4);
    transition: all 0.3s ease;
}

.number-ball:hover {
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 6px 16px rgba(52, 152, 219, 0.6);
}

.star-number {
    background: linear-gradient(135deg, #f39c12, #e67e22);
    box-shadow: 0 4px 12px rgba(243, 156, 18, 0.4);
}

.card-info {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
    margin: 20px 0;
}

.info-item {
    text-align: center;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 8px;
    border: 2px solid #e9ecef;
    transition: all 0.3s ease;
}

.info-item:hover {
    background: #e8f4fd;
    border-color: #3498db;
    transform: translateY(-2px);
}

.info-label {
    font-size: 0.8rem;
    color: #6c757d;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 5px;
}

.info-value {
    font-size: 1.1rem;
    font-weight: 700;
    color: #2c3e50;
}

.jackpot-value {
    color: #e74c3c !important;
    font-size: 1.3rem !important;
}

.view-details-btn {
    background: linear-gradient(135deg, #3498db, #2980b9);
    color: white;
    padding: 12px 25px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(52, 152, 219, 0.3);
    width: 100%;
    justify-content: center;
    margin-top: 15px;
}

.view-details-btn:hover {
    background: linear-gradient(135deg, #2980b9, #1f5f8b);
    transform: translateY(-2px);
    text-decoration: none;
    color: white;
    box-shadow: 0 6px 16px rgba(52, 152, 219, 0.4);
}

/* Info Section */
.lottery-info-section {
    background: rgba(255,255,255,0.95);
    backdrop-filter: blur(10px);
    padding: 50px;
    border-radius: 20px;
    margin: 40px 0;
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
}

.lottery-info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.lottery-info-card {
    background: white;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    border: 2px solid #e8f4fd;
    text-align: center;
    transition: all 0.3s ease;
}

.lottery-info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.15);
    border-color: #3498db;
}

.lottery-info-card h3 {
    font-size: 1.4rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 15px;
}

.lottery-info-card p {
    color: #7f8c8d;
    line-height: 1.6;
    margin-bottom: 20px;
}

.lottery-btn {
    background: linear-gradient(135deg, #28a745, #20c997);
    color: white;
    padding: 12px 25px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
}

.lottery-btn:hover {
    background: linear-gradient(135deg, #218838, #1e7e34);
    transform: translateY(-2px);
    text-decoration: none;
    color: white;
    box-shadow: 0 6px 16px rgba(40, 167, 69, 0.4);
}

/* No Results State */
.no-results {
    text-align: center;
    padding: 60px 20px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    border: 2px solid #e8f4fd;
}

.no-results-icon {
    font-size: 4rem;
    margin-bottom: 20px;
    opacity: 0.5;
}

.no-results h3 {
    font-size: 1.5rem;
    color: #2c3e50;
    margin-bottom: 10px;
}

.no-results p {
    color: #7f8c8d;
    font-size: 1.1rem;
}

@media (max-width: 768px) {
    .lottery-results-title {
        font-size: 2rem;
    }
    
    .lottery-results-icon {
        font-size: 2.5rem;
    }
    
    .lottery-results-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .card-info {
        grid-template-columns: 1fr;
        gap: 10px;
    }
    
    .main-nav {
        gap: 10px;
    }
    
    .main-nav > a, .dropdown-toggle {
        padding: 6px 10px;
        font-size: 0.9rem;
    }
    
    .header-logo {
        font-size: 1.1rem;
    }
    
    .lottery-info-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
}
</style>

<!-- Custom Header Navigation -->
<header class="custom-lottery-header">
    <div class="header-container">
        <a href="<?php echo home_url(); ?>" class="header-logo">
            <span class="icon">🎲</span> Lottery Home
        </a>
        <nav class="main-nav">
            <a href="<?php echo home_url(); ?>"><span class="icon">🏠</span> Home</a>
            <a href="<?php echo home_url('/results/'); ?>"><span class="icon">🏆</span> Results</a>
            <div class="dropdown">
                <a href="#" class="dropdown-toggle"><span class="icon">🔢</span> Lottery Games <span class="icon">▾</span></a>
                <div class="dropdown-menu">
                    <a href="<?php echo home_url('/euromillions/'); ?>"><span class="icon">💶</span> EuroMillions</a>
                    <a href="<?php echo home_url('/bonoloto/'); ?>"><span class="icon">🍀</span> Bonoloto</a>
                    <a href="<?php echo home_url('/primitiva/'); ?>"><span class="icon">🌱</span> La Primitiva</a>
                    <a href="<?php echo home_url('/elgordo/'); ?>"><span class="icon">🐷</span> El Gordo</a>
                    <a href="<?php echo home_url('/eurodreams/'); ?>"><span class="icon">💭</span> EuroDreams</a>
                    <a href="<?php echo home_url('/lototurf/'); ?>"><span class="icon">🏇</span> Lototurf</a>
                    <a href="<?php echo home_url('/quintupleplus/'); ?>"><span class="icon">5️⃣</span> Quíntuple Plus</a>
                    <a href="<?php echo home_url('/quiniela/'); ?>"><span class="icon">📝</span> La Quiniela</a>
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="lottery-results-container">
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <div class="lottery-results-header">
        <h1 class="lottery-results-title">
            <span class="lottery-results-icon">🏆</span>
            <?php the_title(); ?>
        </h1>
        <p class="lottery-results-subtitle">Check the latest results for all Spanish lottery games</p>
    </div>
    
    <?php endwhile; endif; ?>
    
    <!-- Results Grid -->
    <div class="lottery-results-grid">
        <?php
        // Simple lottery results display - back to basics
        $lottery_games = ['euromillions', 'bonoloto', 'primitiva', 'elgordo', 'eurodreams', 'lototurf', 'quintupleplus', 'quiniela'];
        $lottery_icons = [
            'euromillions' => '💶',
            'bonoloto' => '🍀',
            'primitiva' => '🌱',
            'elgordo' => '🐷',
            'eurodreams' => '💭',
            'lototurf' => '🏇',
            'quintupleplus' => '5️⃣',
            'quiniela' => '📝'
        ];
        
        // Query recent results - simple approach
        $recent_results = new WP_Query([
            'post_type' => $lottery_games,
            'posts_per_page' => 20,
            'meta_key' => '_draw_date',
            'orderby' => 'meta_value',
            'order' => 'DESC'
        ]);
        
        if ($recent_results->have_posts()) {
            while ($recent_results->have_posts()) {
                $recent_results->the_post();
                
                $post_type = get_post_type();
                $icon = $lottery_icons[$post_type] ?? '🎱';
                $draw_date = get_post_meta(get_the_ID(), '_draw_date', true);
                $jackpot = get_post_meta(get_the_ID(), '_advertised_jackpot', true)
                        ?: get_post_meta(get_the_ID(), '_jackpot', true)
                        ?: get_post_meta(get_the_ID(), '_prize_amount', true);
                
                $winning_numbers = get_post_meta(get_the_ID(), '_winning_numbers', true);
                $star_numbers = get_post_meta(get_the_ID(), '_star_numbers', true);
                
                echo '<div class="lottery-result-card">';
                echo '<div class="card-header">';
                echo '<h3 class="card-title">' . $icon . ' ' . get_the_title() . '</h3>';
                echo '<p class="card-subtitle">' . ($draw_date ? date('F j, Y', strtotime($draw_date)) : 'Date not available') . '</p>';
                echo '</div>';
                
                echo '<div class="card-body">';
                
                // Winning numbers - simple display
                echo '<div class="winning-numbers-display">';
                if (is_array($winning_numbers) && !empty($winning_numbers)) {
                    foreach (array_slice($winning_numbers, 0, 8) as $num) {
                        echo '<div class="number-ball">' . esc_html($num) . '</div>';
                    }
                } elseif (!empty($winning_numbers)) {
                    $nums = explode(',', $winning_numbers);
                    foreach (array_slice($nums, 0, 8) as $num) {
                        $clean_num = trim($num);
                        if (!empty($clean_num)) {
                            echo '<div class="number-ball">' . esc_html($clean_num) . '</div>';
                        }
                    }
                }
                
                // Star numbers
                if (is_array($star_numbers) && !empty($star_numbers)) {
                    foreach (array_slice($star_numbers, 0, 3) as $star) {
                        echo '<div class="number-ball star-number">' . esc_html($star) . '</div>';
                    }
                } elseif (!empty($star_numbers)) {
                    $stars = explode(',', $star_numbers);
                    foreach (array_slice($stars, 0, 3) as $star) {
                        $clean_star = trim($star);
                        if (!empty($clean_star)) {
                            echo '<div class="number-ball star-number">' . esc_html($clean_star) . '</div>';
                        }
                    }
                }
                echo '</div>';
                
                // Card info
                echo '<div class="card-info">';
                if ($jackpot) {
                    echo '<div class="info-item">';
                    echo '<div class="info-label">Jackpot</div>';
                    echo '<div class="info-value jackpot-value">€' . number_format($jackpot, 0) . '</div>';
                    echo '</div>';
                }
                
                echo '<div class="info-item">';
                echo '<div class="info-label">Draw Date</div>';
                echo '<div class="info-value">' . ($draw_date ? date('M j', strtotime($draw_date)) : 'N/A') . '</div>';
                echo '</div>';
                echo '</div>';
                
                echo '<a href="' . get_permalink() . '" class="view-details-btn">👁️ View Details</a>';
                
                echo '</div>';
                echo '</div>';
            }
            wp_reset_postdata();
        } else {
            echo '<div class="no-results">';
            echo '<div class="no-results-icon">🔍</div>';
            echo '<h3>No Results Found</h3>';
            echo '<p>No lottery results are currently available.</p>';
            echo '</div>';
        }
        ?>
    </div>
    
    <!-- Information Section -->
    <div class="lottery-info-section">
        <div class="lottery-info-grid">
            <div class="lottery-info-card">
                <h3>🔍 CHECKING</h3>
                <p>Verify your lottery tickets and check if you're a winner. Enter your ticket numbers to see if you've won any prizes.</p>
                <a href="#" class="lottery-btn">Check Tickets</a>
            </div>
            
            <div class="lottery-info-card">
                <h3>🏆 PRIZES</h3>
                <p>View all prize categories and amounts for each lottery game. Find out how much you could win!</p>
                <a href="#" class="lottery-btn">View Prizes</a>
            </div>
            
            <div class="lottery-info-card">
                <h3>📺 LIVE LOTTERY DRAWS</h3>
                <p>Watch live lottery draws and see the winning numbers as they're drawn. Never miss a draw!</p>
                <a href="#" class="lottery-btn">Watch Live</a>
            </div>
        </div>
    </div>
    
</div>

<?php get_footer(); ?>
