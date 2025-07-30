<?php
/**
 * Single Quíntuple Plus Template - Complete Lottery Results (Enhanced Version)
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

/* Modern Single Lottery Page Styles */
.lottery-single-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 30px 20px;
}

.lottery-single-header {
    background: rgba(255,255,255,0.95);
    backdrop-filter: blur(10px);
    padding: 40px;
    border-radius: 20px;
    text-align: center;
    margin-bottom: 30px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
}

.lottery-game-title {
    font-size: 3rem;
    font-weight: 800;
    color: #2c3e50;
    margin: 0 0 10px 0;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
}

.lottery-game-icon {
    font-size: 3.5rem;
    filter: drop-shadow(0 4px 8px rgba(0,0,0,0.2));
}

.lottery-game-subtitle {
    font-size: 1.3rem;
    color: #7f8c8d;
    margin: 0;
}

.lottery-content-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 30px;
    margin-top: 30px;
}

.main-content {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.sidebar-content {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.info-card {
    background: white;
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    border: 2px solid #e8f4fd;
    transition: all 0.3s ease;
}

.info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.15);
    border-color: #3498db;
}

.card-title {
    font-size: 1.4rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.quintuple-results-display {
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin: 20px 0;
}

.numbers-section {
    text-align: center;
}

.section-title {
    font-size: 1.1rem;
    font-weight: bold;
    color: #2c3e50;
    margin-bottom: 15px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.numbers-row {
    display: flex;
    justify-content: center;
    gap: 12px;
    flex-wrap: wrap;
}

.number-ball {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: linear-gradient(135deg, #16a085, #138d75);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.2rem;
    box-shadow: 0 4px 12px rgba(22, 160, 133, 0.4);
    transition: all 0.3s ease;
}

.number-ball:hover {
    transform: scale(1.2) rotate(10deg);
    box-shadow: 0 6px 16px rgba(22, 160, 133, 0.6);
}

.main-ball {
    background: linear-gradient(135deg, #16a085, #138d75);
    box-shadow: 0 4px 12px rgba(22, 160, 133, 0.4);
}

.quintuple-number {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #16a085, #138d75);
    box-shadow: 0 4px 12px rgba(22, 160, 133, 0.4);
    position: relative;
    border: 3px solid #fff;
    font-size: 1.4rem;
}

.quintuple-number::before {
    content: '5️⃣';
    position: absolute;
    top: -15px;
    right: -10px;
    font-size: 1.5rem;
    background: #fff;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.plus-number {
    background: linear-gradient(135deg, #f39c12, #e67e22);
    box-shadow: 0 4px 12px rgba(243, 156, 18, 0.4);
    position: relative;
    border: 3px solid #fff;
}

.plus-number::before {
    content: '➕';
    position: absolute;
    top: -15px;
    right: -10px;
    font-size: 1.5rem;
    background: #fff;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    margin: 20px 0;
}

.stat-item {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 12px;
    text-align: center;
    border: 2px solid #e9ecef;
    transition: all 0.3s ease;
}

.stat-item:hover {
    background: #e8f4fd;
    border-color: #3498db;
    transform: translateY(-3px);
}

.stat-label {
    font-size: 0.9rem;
    color: #6c757d;
    font-weight: 600;
    margin-bottom: 8px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    display: block;
}

.stat-value {
    font-size: 1.4rem;
    font-weight: 700;
    color: #2c3e50;
    display: block;
}

.jackpot-value {
    color: #e74c3c !important;
    font-size: 1.8rem !important;
}

.prize-breakdown {
    margin-top: 20px;
}

.prize-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.prize-table th,
.prize-table td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #e9ecef;
}

.prize-table th {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.prize-table tr:hover {
    background: #f8f9fa;
}

.back-button {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #3498db, #2980b9);
    color: white;
    padding: 12px 25px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(52, 152, 219, 0.3);
    margin-bottom: 20px;
}

.back-button:hover {
    background: linear-gradient(135deg, #2980b9, #1f5f8b);
    transform: translateY(-2px);
    text-decoration: none;
    color: white;
    box-shadow: 0 6px 16px rgba(52, 152, 219, 0.4);
}

.quick-link-btn {
    background: linear-gradient(135deg, #28a745, #20c997);
    color: white;
    padding: 10px 20px;
    border-radius: 20px;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    box-shadow: 0 3px 10px rgba(40, 167, 69, 0.3);
    margin-bottom: 10px;
    width: 100%;
    justify-content: center;
}

.quick-link-btn:hover {
    background: linear-gradient(135deg, #218838, #1e7e34);
    transform: translateY(-2px);
    text-decoration: none;
    color: white;
    box-shadow: 0 5px 15px rgba(40, 167, 69, 0.4);
}

.debug-info {
    background: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 8px;
    padding: 15px;
    margin-top: 20px;
    font-family: monospace;
    font-size: 12px;
    max-height: 300px;
    overflow-y: auto;
}

.quintuple-special {
    background: linear-gradient(135deg, #16a085, #138d75);
    color: white;
    padding: 20px;
    border-radius: 15px;
    text-align: center;
    margin: 20px 0;
}

.multi-game-theme {
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 20"><text y="15" font-size="12" fill="%2316a085">5️⃣5️⃣5️⃣5️⃣5️⃣</text></svg>') repeat-x;
    padding: 10px 0;
    text-align: center;
}

.winning-combination {
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    border: 2px solid #16a085;
    padding: 20px;
    border-radius: 15px;
    margin: 20px 0;
    text-align: center;
}

.combination-display {
    font-size: 2rem;
    font-weight: bold;
    color: #16a085;
    margin: 15px 0;
    letter-spacing: 5px;
}

.games-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    margin: 20px 0;
}

.game-card {
    background: white;
    border: 2px solid #16a085;
    border-radius: 12px;
    padding: 15px;
    text-align: center;
    transition: all 0.3s ease;
}

.game-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 16px rgba(22, 160, 133, 0.2);
}

.game-title {
    font-size: 1.1rem;
    font-weight: bold;
    color: #16a085;
    margin-bottom: 10px;
}

.game-numbers {
    display: flex;
    justify-content: center;
    gap: 8px;
    flex-wrap: wrap;
}

.game-number {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    background: #16a085;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 0.9rem;
}

@media (max-width: 768px) {
    .lottery-content-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .lottery-game-title {
        font-size: 2rem;
    }
    
    .lottery-game-icon {
        font-size: 2.5rem;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
    }
    
    .numbers-row {
        justify-content: center;
    }
    
    .games-grid {
        grid-template-columns: 1fr;
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
    
    .combination-display {
        font-size: 1.5rem;
        letter-spacing: 3px;
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

<div class="lottery-single-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); 
        
        // Helper functions
        function safe_number_format($value, $decimals = 0) {
            if (empty($value) || !is_numeric($value)) return 'N/A';
            return number_format($value, $decimals);
        }
        
        function safe_currency_format($value) {
            if (empty($value) || !is_numeric($value)) return 'N/A';
            return '€' . number_format($value, 2);
        }
        
        function parse_numbers($numbers) {
            if (empty($numbers)) return [];
            
            if (is_array($numbers)) {
                return array_filter($numbers, function($n) { return !empty($n); });
            }
            
            // Try different separators
            $separators = [',', '-', '|', ';', ' ', "\n", "\r\n"];
            foreach ($separators as $sep) {
                if (strpos($numbers, $sep) !== false) {
                    $nums = explode($sep, $numbers);
                    return array_filter(array_map('trim', $nums), function($n) { return !empty($n) && is_numeric($n); });
                }
            }
            
            // If no separator found, check if it's a single number
            if (is_numeric(trim($numbers))) {
                return [trim($numbers)];
            }
            
            return [];
        }
        
        function parse_quintuple_games($games_data) {
            if (empty($games_data)) return [];
            
            if (is_array($games_data)) {
                return $games_data;
            }
            
            // Parse serialized or JSON data
            if (is_string($games_data)) {
                $decoded = json_decode($games_data, true);
                if ($decoded !== null) {
                    return $decoded;
                }
                
                // Try unserialize
                $unserialized = @unserialize($games_data);
                if ($unserialized !== false) {
                    return $unserialized;
                }
            }
            
            return [];
        }
        
        // Enhanced data retrieval with comprehensive fallbacks
        $draw_date = get_post_meta(get_the_ID(), '_draw_date', true);
        $draw_number = get_post_meta(get_the_ID(), '_draw_number', true) 
                    ?: get_post_meta(get_the_ID(), '_draw_id', true)
                    ?: get_post_meta(get_the_ID(), '_numero_sorteo', true);
        
        // Enhanced prize/jackpot detection - Quíntuple Plus specific
        $advertised_jackpot = get_post_meta(get_the_ID(), '_advertised_jackpot', true) 
                           ?: get_post_meta(get_the_ID(), '_jackpot', true)
                           ?: get_post_meta(get_the_ID(), '_prize_amount', true)
                           ?: get_post_meta(get_the_ID(), '_bote', true)
                           ?: get_post_meta(get_the_ID(), '_premio_acumulado', true);
        
        // Quíntuple Plus specific - 5 different lottery games
        $quintuple_games_raw = get_post_meta(get_the_ID(), '_quintuple_games', true) 
                            ?: get_post_meta(get_the_ID(), '_five_games', true)
                            ?: get_post_meta(get_the_ID(), '_games_results', true)
                            ?: get_post_meta(get_the_ID(), '_juegos_quintuple', true);
        
        $quintuple_games = parse_quintuple_games($quintuple_games_raw);
        
        // Individual game results
        $lotto_result = get_post_meta(get_the_ID(), '_lotto_result', true) 
                     ?: get_post_meta(get_the_ID(), '_lotto', true);
        
        $euromillions_result = get_post_meta(get_the_ID(), '_euromillions_result', true) 
                            ?: get_post_meta(get_the_ID(), '_euromillones', true);
        
        $primitiva_result = get_post_meta(get_the_ID(), '_primitiva_result', true) 
                         ?: get_post_meta(get_the_ID(), '_primitiva', true);
        
        $bonoloto_result = get_post_meta(get_the_ID(), '_bonoloto_result', true) 
                        ?: get_post_meta(get_the_ID(), '_bonoloto', true);
        
        $elgordo_result = get_post_meta(get_the_ID(), '_elgordo_result', true) 
                       ?: get_post_meta(get_the_ID(), '_gordo_primitiva', true);
        
        // Plus numbers (additional numbers)
        $plus_numbers_raw = get_post_meta(get_the_ID(), '_plus_numbers', true) 
                         ?: get_post_meta(get_the_ID(), '_numeros_plus', true)
                         ?: get_post_meta(get_the_ID(), '_additional_numbers', true);
        
        $plus_numbers = parse_numbers($plus_numbers_raw);
        
        // Financial data with fallbacks
        $total_bets = get_post_meta(get_the_ID(), '_total_bets', true) 
                   ?: get_post_meta(get_the_ID(), '_bets_received', true)
                   ?: get_post_meta(get_the_ID(), '_apuestas_totales', true);
        
        $collected = get_post_meta(get_the_ID(), '_collected', true) 
                  ?: get_post_meta(get_the_ID(), '_total_collected', true)
                  ?: get_post_meta(get_the_ID(), '_recaudacion', true);
        
        $prizes_total = get_post_meta(get_the_ID(), '_prizes_total', true) 
                     ?: get_post_meta(get_the_ID(), '_total_prizes', true)
                     ?: get_post_meta(get_the_ID(), '_total_premios', true);
        
        $total_winners = get_post_meta(get_the_ID(), '_total_winners', true)
                      ?: get_post_meta(get_the_ID(), '_ganadores_total', true);
        
        // Prize breakdown with enhanced handling
        $prize_breakdown = get_post_meta(get_the_ID(), '_prize_breakdown', true);
        if (empty($prize_breakdown)) {
            $prize_breakdown = get_post_meta(get_the_ID(), '_prizes', true);
        }
        if (empty($prize_breakdown)) {
            $prize_breakdown = get_post_meta(get_the_ID(), '_categories', true);
        }
        if (empty($prize_breakdown)) {
            $prize_breakdown = get_post_meta(get_the_ID(), '_categorias_premios', true);
        }
        
        // Technical details
        $draw_time = get_post_meta(get_the_ID(), '_draw_time', true);
        $draw_location = get_post_meta(get_the_ID(), '_draw_location', true);
        $next_draw_date = get_post_meta(get_the_ID(), '_next_draw_date', true);
        
        // Quíntuple Plus specific fields
        $game_combination = get_post_meta(get_the_ID(), '_game_combination', true) ?: '5 Different Games';
        $draw_frequency = get_post_meta(get_the_ID(), '_draw_frequency', true) ?: 'Weekly';
        
        // Get ALL meta data for debugging
        $all_meta = get_post_meta(get_the_ID());
    ?>
    
    <a href="<?php echo home_url(); ?>" class="back-button">
        ← Back to Results
    </a>
    
    <div class="lottery-single-header">
        <h1 class="lottery-game-title">
            <span class="lottery-game-icon">5️⃣</span>
            <?php the_title(); ?>
        </h1>
        <p class="lottery-game-subtitle">
            Draw Date: <?php echo esc_html($draw_date ? date('F j, Y', strtotime($draw_date)) : 'N/A'); ?>
            <?php if ($draw_number): ?>
                | Draw #<?php echo esc_html($draw_number); ?>
            <?php endif; ?>
        </p>
    </div>

    <div class="lottery-content-grid">
        <div class="main-content">
            <!-- Quíntuple Plus Results (Enhanced for Multi-Game) -->
            <div class="info-card">
                <h2 class="card-title">5️⃣ Quíntuple Plus Results</h2>
                
                <div class="quintuple-special">
                    <h3 style="margin: 0 0 15px 0;">🎰 5-in-1 Lottery Game</h3>
                    <div class="multi-game-theme"></div>
                </div>
                
                <div class="quintuple-results-display">
                    <!-- Individual Games Display -->
                    <?php if (!empty($quintuple_games) || $lotto_result || $euromillions_result || $primitiva_result || $bonoloto_result || $elgordo_result): ?>
                    <div class="numbers-section">
                        <div class="section-title">🎮 Individual Game Results</div>
                        <div class="games-grid">
                            <?php
                            // Display individual game results
                            $games = [];
                            
                            if ($lotto_result) {
                                $games['Lotto'] = parse_numbers($lotto_result);
                            }
                            if ($euromillions_result) {
                                $games['EuroMillions'] = parse_numbers($euromillions_result);
                            }
                            if ($primitiva_result) {
                                $games['La Primitiva'] = parse_numbers($primitiva_result);
                            }
                            if ($bonoloto_result) {
                                $games['Bonoloto'] = parse_numbers($bonoloto_result);
                            }
                            if ($elgordo_result) {
                                $games['El Gordo'] = parse_numbers($elgordo_result);
                            }
                            
                            // If we have structured quintuple games data, use that instead
                            if (!empty($quintuple_games) && is_array($quintuple_games)) {
                                $games = $quintuple_games;
                            }
                            
                            // Display games
                            if (!empty($games)) {
                                foreach ($games as $game_name => $numbers) {
                                    echo '<div class="game-card">';
                                    echo '<div class="game-title">' . esc_html($game_name) . '</div>';
                                    echo '<div class="game-numbers">';
                                    
                                    if (is_array($numbers)) {
                                        foreach ($numbers as $num) {
                                            echo '<div class="game-number">' . esc_html($num) . '</div>';
                                        }
                                    } else {
                                        $parsed_numbers = parse_numbers($numbers);
                                        foreach ($parsed_numbers as $num) {
                                            echo '<div class="game-number">' . esc_html($num) . '</div>';
                                        }
                                    }
                                    
                                    echo '</div>';
                                    echo '</div>';
                                }
                            } else {
                                echo '<p style="color: #666; font-style: italic; text-align: center; grid-column: 1 / -1;">Individual game results not available</p>';
                            }
                            ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Plus Numbers Section -->
                    <?php if (!empty($plus_numbers)): ?>
                    <div class="numbers-section">
                        <div class="section-title">➕ Plus Numbers</div>
                        <div class="numbers-row">
                            <?php 
                            foreach($plus_numbers as $num) {
                                echo '<div class="number-ball plus-number">' . esc_html($num) . '</div>';
                            }
                            ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Winning Combination -->
                    <div class="winning-combination">
                        <h4>🏆 Game Combination</h4>
                        <div class="combination-display">
                            <?php echo esc_html($game_combination); ?>
                        </div>
                        <p style="margin: 10px 0 0 0; color: #666;">5 different lottery games in one ticket</p>
                    </div>
                </div>
            </div>
            
            <!-- Multi-Game Information -->
            <div class="info-card">
                <h2 class="card-title">🎰 Multi-Game System</h2>
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-label">Number of Games</div>
                        <div class="stat-value">5</div>
                    </div>
                    
                    <div class="stat-item">
                        <div class="stat-label">Game Combination</div>
                        <div class="stat-value"><?php echo esc_html($game_combination); ?></div>
                    </div>
                    
                    <?php if ($draw_frequency): ?>
                    <div class="stat-item">
                        <div class="stat-label">Draw Frequency</div>
                        <div class="stat-value"><?php echo esc_html($draw_frequency); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <div class="stat-item">
                        <div class="stat-label">Game Type</div>
                        <div class="stat-value">Multi-Lottery</div>
                    </div>
                </div>
            </div>
            
            <!-- Draw Statistics -->
            <?php if ($total_bets || $collected || $advertised_jackpot || $prizes_total || $total_winners) : ?>
            <div class="info-card">
                <h2 class="card-title">📊 Draw Statistics</h2>
                <div class="stats-grid">
                    <?php if ($draw_number) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Draw Number</div>
                        <div class="stat-value"><?php echo esc_html($draw_number); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($advertised_jackpot) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Advertised Jackpot</div>
                        <div class="stat-value jackpot-value">
                            <?php echo safe_currency_format($advertised_jackpot); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($total_bets) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Total Bets</div>
                        <div class="stat-value"><?php echo safe_number_format($total_bets); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($total_winners) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Total Winners</div>
                        <div class="stat-value"><?php echo safe_number_format($total_winners); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($collected) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Total Collected</div>
                        <div class="stat-value"><?php echo safe_currency_format($collected); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($prizes_total) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Total Prizes</div>
                        <div class="stat-value"><?php echo safe_currency_format($prizes_total); ?></div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Prize Breakdown -->
            <?php if (!empty($prize_breakdown) && (is_array($prize_breakdown) || is_object($prize_breakdown))) : ?>
            <div class="info-card">
                <h2 class="card-title">🏆 Prize Breakdown</h2>
                <div class="prize-breakdown">
                    <table class="prize-table">
                        <thead>
                            <tr>
                                <th>Prize Category</th>
                                <th>Winners</th>
                                <th>Prize per Winner</th>
                                <th>Total Prize</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if (is_array($prize_breakdown)) {
                                foreach ($prize_breakdown as $category => $data) {
                                    if (is_array($data) || is_object($data)) {
                                        $data = (array) $data;
                                        $winners = $data['winners'] ?? $data['ganadores'] ?? 'N/A';
                                        $prize = $data['prize_per_winner'] ?? $data['prize'] ?? $data['premio'] ?? 0;
                                        $total = $data['total_prize'] ?? $data['total'] ?? ($winners * $prize);
                                        
                                        echo '<tr>';
                                        echo '<td><strong>' . esc_html($category) . '</strong></td>';
                                        echo '<td>' . esc_html($winners) . '</td>';
                                        echo '<td>' . safe_currency_format($prize) . '</td>';
                                        echo '<td>' . safe_currency_format($total) . '</td>';
                                        echo '</tr>';
                                    }
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Draw Details Content -->
            <div class="info-card">
                <h2 class="card-title">📝 About This Draw</h2>
                <div class="content">
                    <?php 
                    $content = get_the_content();
                    if (!empty($content)) {
                        the_content();
                    } else {
                        echo '<p>This Quíntuple Plus draw took place on <strong>' . esc_html($draw_date ? date('F j, Y', strtotime($draw_date)) : 'N/A') . '</strong>.</p>';
                        if ($advertised_jackpot) {
                            echo '<p>The advertised jackpot for this draw was <strong>' . safe_currency_format($advertised_jackpot) . '</strong>.</p>';
                        }
                        echo '<p>Quíntuple Plus is a unique multi-lottery game that combines 5 different Spanish lottery games in a single ticket.</p>';
                        echo '<p>Players can win across multiple games simultaneously, offering increased chances of winning with various prize categories.</p>';
                    }
                    ?>
                </div>
            </div>
            
            <!-- Debug Information (Remove in production) -->
            
        
        <div class="sidebar-content">
            <!-- Quick Links -->
            <div class="info-card">
                <h3 class="card-title">🔗 Quick Links</h3>
                <div style="display: flex; flex-direction: column; gap: 10px;">
                    <a href="<?php echo home_url(); ?>" class="quick-link-btn">🏠 Home</a>
                    <a href="<?php echo home_url('/results/'); ?>" class="quick-link-btn">🏆 All Results</a>
                    <a href="<?php echo home_url('/quintupleplus/'); ?>" class="quick-link-btn">5️⃣ More Quíntuple Plus</a>
                </div>
            </div>
            
            <!-- About This Draw -->
            <div class="info-card">
                <h3 class="card-title">ℹ️ About This Draw</h3>
                <p>This Quíntuple Plus draw took place on <strong><?php echo esc_html($draw_date ? date('F j, Y', strtotime($draw_date)) : 'N/A'); ?></strong>.</p>
                <?php if ($advertised_jackpot) : ?>
                <p>The advertised jackpot was <strong><?php echo safe_currency_format($advertised_jackpot); ?></strong>.</p>
                <?php endif; ?>
                <p>Quíntuple Plus combines 5 different lottery games in one ticket for multiple winning opportunities.</p>
            </div>
            
            <!-- How to Play Quíntuple Plus -->
            <div class="info-card">
                <h3 class="card-title">🎮 How to Play Quíntuple Plus</h3>
                <ul style="margin: 0; padding-left: 20px;">
                    <li><strong>5 different games:</strong> One ticket, multiple lotteries</li>
                    <li><strong>Lotto:</strong> Pick numbers for Lotto game</li>
                    <li><strong>EuroMillions:</strong> European lottery numbers</li>
                    <li><strong>La Primitiva:</strong> Spain's classic lottery</li>
                    <li><strong>Bonoloto:</strong> Daily lottery game</li>
                    <li><strong>El Gordo:</strong> Sunday lottery game</li>
                </ul>
            </div>
            
            <!-- Multi-Game Advantage -->
            <div class="info-card">
                <h3 class="card-title">🎰 Multi-Game Advantage</h3>
                <div style="background: #f8f9fa; padding: 15px; border-radius: 8px;">
                    <div style="margin: 5px 0;"><strong>5 Games:</strong> Maximum variety</div>
                    <div style="margin: 5px 0;"><strong>Multiple Chances:</strong> Win across different games</div>
                    <div style="margin: 5px 0;"><strong>Single Ticket:</strong> Convenient play</div>
                    <div style="margin: 5px 0;"><strong>Combined Prizes:</strong> Accumulate winnings</div>
                </div>
                <p style="margin-top: 10px; font-size: 0.9rem; color: #666;">Five times the fun, five times the chances!</p>
            </div>
            
            <!-- Game Components -->
            <div class="info-card">
                <h3 class="card-title">🎯 Game Components</h3>
                <div style="display: flex; flex-direction: column; gap: 10px;">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <span style="color: #16a085; font-size: 1.5rem;">🎲</span>
                        <span><strong>Lotto:</strong> 6 numbers from 1-49</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <span style="color: #16a085; font-size: 1.5rem;">💶</span>
                        <span><strong>EuroMillions:</strong> 5+2 format</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <span style="color: #16a085; font-size: 1.5rem;">🌱</span>
                        <span><strong>La Primitiva:</strong> 6+1+1 format</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <span style="color: #16a085; font-size: 1.5rem;">🍀</span>
                        <span><strong>Bonoloto:</strong> 6+1+1 format</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <span style="color: #16a085; font-size: 1.5rem;">🐷</span>
                        <span><strong>El Gordo:</strong> 5+1 format</span>
                    </div>
                </div>
            </div>
            
            <!-- Winning Strategy -->
            <div class="info-card">
                <h3 class="card-title">💡 Winning Strategy</h3>
                <p>With 5 different games, you have multiple opportunities to win in each draw.</p>
                <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; margin: 10px 0;">
                    <div style="margin: 5px 0;"><strong>Diversified play</strong> across game types</div>
                    <div style="margin: 5px 0;"><strong>Multiple prize categories</strong> available</div>
                    <div style="margin: 5px 0;"><strong>Combined strategy</strong> for all games</div>
                </div>
                <p style="font-size: 0.9rem; color: #666;">The ultimate multi-lottery experience!</p>
            </div>
            
            <!-- Prize Potential -->
            <div class="info-card">
                <h3 class="card-title">🏆 Prize Potential</h3>
                <p><strong>Win across multiple games</strong> with a single ticket purchase.</p>
                <div style="text-align: center; margin: 15px 0;">
                    <div style="background: #16a085; color: white; padding: 15px; border-radius: 15px; font-weight: bold; font-size: 1.1rem;">
                        5 Games = 5x the Opportunities
                    </div>
                </div>
                <p style="font-size: 0.9rem; color: #666;">Each game has its own prize structure and winning potential.</p>
            </div>
        </div>
    </div>
    
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
