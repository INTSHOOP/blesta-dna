<?php
// All available TLDs
Configure::set('Domainnameapi.tlds', [‏core/index.ts

‏core/intelligence.ts

‏core/security.ts

‏core/utils.ts

‏/package-lock.json

‏/package.json

‏quick-multi-play-intnetspace

‏export class CoreIntelligence {
‏  private aiName: string;
‏  private capabilities: string[];
‏  private processingQueue: any[];
‏  private isInitialized: boolean;

‏  constructor() {
‏    this.aiName = 'مار';
‏    this.capabilities = [
      'تحليل البيانات',
      'اتخاذ القرارات',
      'إدارة الموارد',
      'التحسين التلقائي',
      'التعلم الآلي'
    ];
‏    this.processingQueue = [];
‏    this.isInitialized = false;
  }

‏  public initialize(): void {
‏    console.log(`🤖 [${this.aiName}] بدء تهيئة الذكاء الاصطناعي...`);
    
‏    // Simulate AI initialization
‏    setTimeout(() => {
‏      this.isInitialized = true;
‏      console.log(`✅ [${this.aiName}] الذكاء الاصطناعي جاهز للعمل`);
‏      console.log(`📋 القدرات المتاحة: ${this.capabilities.join(', ')}`);
    }, 2000);
  }

‏  public async processRequest(requestData: any): Promise<any> {
‏    if (!this.isInitialized) {
‏      throw new Error('الذكاء الاصطناعي غير مهيأ بعد');
    }

‏    const requestId = this.generateRequestId();
‏    console.log(`🔄 [${this.aiName}] معالجة طلب: ${requestId}`);

‏    // Add to processing queue
‏    this.processingQueue.push({
‏      id: requestId,
‏      data: requestData,
‏      timestamp: new Date().toISOString(),
‏      status: 'processing'
    });

‏    // Simulate AI processing
‏    await this.simulateProcessing();

‏    const result = {
‏      requestId,
‏      aiName: this.aiName,
‏      processedAt: new Date().toISOString(),
‏      result: this.analyzeRequest(requestData),
‏      recommendations: this.generateRecommendations(requestData),
‏      confidence: this.calculateConfidence(requestData)
    };

‏    // Update queue status
‏    const queueItem = this.processingQueue.find(item => item.id === requestId);
‏    if (queueItem) {
‏      queueItem.status = 'completed';
‏      queueItem.result = result;
    }

‏    console.log(`✅ [${this.aiName}] اكتمل معالجة الطلب: ${requestId}`);
‏    return result;
  }

‏  private analyzeRequest(data: any): any {
‏    const analysis = {
‏      type: this.detectRequestType(data),
‏      complexity: this.assessComplexity(data),
‏      priority: this.determinePriority(data),
‏      estimatedTime: this.estimateProcessingTime(data)
    };

‏    return {
‏      analysis,
‏      insights: this.generateInsights(data),
‏      patterns: this.detectPatterns(data)
    };
  }

‏  private detectRequestType(data: any): string {
‏    if (data.action) {
‏      switch (data.action) {
‏        case 'create': return 'إنشاء';
‏        case 'update': return 'تحديث';
‏        case 'delete': return 'حذف';
‏        case 'analyze': return 'تحليل';
‏        default: return 'غير محدد';
      }
    }
‏    return 'طلب عام';
  }

‏  private assessComplexity(data: any): 'منخفض' | 'متوسط' | 'عالي' {
‏    const dataSize = JSON.stringify(data).length;
    
‏    if (dataSize < 1000) return 'منخفض';
‏    if (dataSize < 5000) return 'متوسط';
‏    return 'عالي';
  }

‏  private determinePriority(data: any): 'منخفض' | 'متوسط' | 'عالي' | 'حرج' {
‏    if (data.urgent === true) return 'حرج';
‏    if (data.priority === 'high') return 'عالي';
‏    if (data.priority === 'medium') return 'متوسط';
‏    return 'منخفض';
  }

‏  private estimateProcessingTime(data: any): string {
‏    const complexity = this.assessComplexity(data);
    
‏    switch (complexity) {
‏      case 'منخفض': return '< 1 ثانية';
‏      case 'متوسط': return '1-5 ثواني';
‏      case 'عالي': return '5-30 ثانية';
‏      default: return 'غير محدد';
    }
  }

‏  private generateInsights(data: any): string[] {
‏    const insights: string[] = [];
    
‏    if (data.timestamp) {
‏      const requestTime = new Date(data.timestamp);
‏      const now = new Date();
‏      const delay = now.getTime() - requestTime.getTime();
      
‏      if (delay > 5000) {
‏        insights.push('الطلب قديم نسبياً، قد يحتاج مراجعة');
      }
    }

‏    if (data.user) {
‏      insights.push(`طلب من المستخدم: ${data.user}`);
    }

‏    if (Object.keys(data).length > 10) {
‏      insights.push('طلب معقد يحتوي على بيانات كثيرة');
    }

‏    return insights;
  }

‏  private detectPatterns(data: any): string[] {
‏    const patterns: string[] = [];
    
‏    // Pattern detection logic
‏    if (data.action && data.target) {
‏      patterns.push(`نمط العمل: ${data.action} على ${data.target}`);
    }

‏    if (data.repeated === true) {
‏      patterns.push('طلب متكرر');
    }

‏    return patterns;
  }

‏  private generateRecommendations(data: any): string[] {
‏    const recommendations: string[] = [];
    
‏    const complexity = this.assessComplexity(data);
‏    if (complexity === 'عالي') {
‏      recommendations.push('يُنصح بتقسيم الطلب إلى أجزاء أصغر');
    }

‏    if (!data.validation) {
‏      recommendations.push('إضافة آلية التحقق للبيانات');
    }

‏    if (!data.backup) {
‏      recommendations.push('إنشاء نسخة احتياطية قبل التنفيذ');
    }

‏    return recommendations;
  }

‏  private calculateConfidence(data: any): number {
‏    let confidence = 0.5; // Base confidence
    
‏    // Increase confidence based on data completeness
‏    if (data.action) confidence += 0.1;
‏    if (data.target) confidence += 0.1;
‏    if (data.user) confidence += 0.1;
‏    if (data.timestamp) confidence += 0.1;
    
‏    // Adjust based on data quality
‏    const hasValidStructure = typeof data === 'object' && data !== null;
‏    if (hasValidStructure) confidence += 0.1;
    
‏    return Math.min(confidence, 1.0);
  }

‏  private async simulateProcessing(): Promise<void> {
‏    // Simulate processing time
‏    const processingTime = Math.random() * 1000 + 500; // 0.5-1.5 seconds
‏    return new Promise(resolve => setTimeout(resolve, processingTime));
  }

‏  private generateRequestId(): string {
‏    const timestamp = Date.now().toString(36);
‏    const random = Math.random().toString(36).substring(2);
‏    return `${timestamp}-${random}`;
  }

‏  public getStatus(): any {
‏    return {
‏      aiName: this.aiName,
‏      initialized: this.isInitialized,
‏      capabilities: this.capabilities,
‏      queueSize: this.processingQueue.length,
‏      activeRequests: this.processingQueue.filter(item => item.status === 'processing').length
    };
  }

‏  public getQueue(): any[] {
‏    return this.processingQueue.map(item => ({
‏      id: item.id,
‏      timestamp: item.timestamp,
‏      status: item.status
    }));
  }
}


‏server/index.ts


‏import React, { useRef, useEffect, useCallback } from 'react';
‏import { useGameStore } from '@/lib/stores/useGameStore';
‏import { useChallengeStore } from '@/lib/stores/useChallengeStore';
‏import { GAME_CONFIG } from '@shared/gameTypes';
‏import { clampPosition, checkCollision, getDistance } from '@/lib/gameLogic';

‏interface ChallengeGameCanvasProps {
‏  width: number;
‏  height: number;
}

‏export default function ChallengeGameCanvas({ width, height }: ChallengeGameCanvasProps) {
‏  const canvasRef = useRef<HTMLCanvasElement>(null);
‏  const animationFrameRef = useRef<number>();
‏  const { players, dots, playerId, movePlayer } = useGameStore();
‏  const { 
‏    currentChallenge, 
‏    isInChallenge, 
‏    challengeStartTime, 
‏    challengeScore, 
‏    challengeData,
‏    updateChallengeScore,
‏    updateChallengeData,
‏    endChallenge
‏  } = useChallengeStore();

‏  // Handle mouse/touch input
‏  const handlePointerMove = useCallback((e: React.PointerEvent) => {
‏    if (!canvasRef.current || !isInChallenge) return;
    
‏    const rect = canvasRef.current.getBoundingClientRect();
‏    const scaleX = GAME_CONFIG.CANVAS_WIDTH / rect.width;
‏    const scaleY = GAME_CONFIG.CANVAS_HEIGHT / rect.height;
    
‏    const x = (e.clientX - rect.left) * scaleX;
‏    const y = (e.clientY - rect.top) * scaleY;
    
‏    const clamped = clampPosition(x, y, GAME_CONFIG.CANVAS_WIDTH, GAME_CONFIG.CANVAS_HEIGHT);
    
‏    // Apply challenge-specific movement restrictions
‏    if (currentChallenge?.type === 'survival') {
‏      const centerX = GAME_CONFIG.CANVAS_WIDTH / 2;
‏      const centerY = GAME_CONFIG.CANVAS_HEIGHT / 2;
‏      const currentRadius = calculateSurvivalRadius();
‏      const distanceFromCenter = getDistance(clamped.x, clamped.y, centerX, centerY);
      
‏      if (distanceFromCenter > currentRadius) {
‏        // Clamp to survival area boundary
‏        const angle = Math.atan2(clamped.y - centerY, clamped.x - centerX);
‏        clamped.x = centerX + Math.cos(angle) * currentRadius;
‏        clamped.y = centerY + Math.sin(angle) * currentRadius;
      }
    }
    
‏    movePlayer(clamped.x, clamped.y);
‏  }, [movePlayer, isInChallenge, currentChallenge]);

‏  const calculateSurvivalRadius = useCallback(() => {
‏    if (!currentChallenge || !challengeStartTime || currentChallenge.type !== 'survival') {
‏      return GAME_CONFIG.CANVAS_WIDTH / 2;
    }
    
‏    const elapsed = (Date.now() - challengeStartTime) / 1000;
‏    const config = currentChallenge.config;
‏    const startRadius = config.startRadius || 250;
‏    const shrinkRate = config.shrinkRate || 15;
    
‏    return Math.max(50, startRadius - (elapsed * shrinkRate));
‏  }, [currentChallenge, challengeStartTime]);

‏  // Check challenge-specific conditions
‏  const checkChallengeConditions = useCallback(() => {
‏    if (!currentChallenge || !isInChallenge || !challengeStartTime) return;
    
‏    const currentPlayer = players.get(playerId || '');
‏    if (!currentPlayer) return;
    
‏    const elapsed = (Date.now() - challengeStartTime) / 1000;
    
‏    switch (currentChallenge.type) {
‏      case 'speedRun': {
‏        const dotsCollected = challengeData.dotsCollected || 0;
‏        const target = currentChallenge.config.dotsToCollect || 20;
        
‏        if (dotsCollected >= target) {
‏          updateChallengeScore(Math.floor((target * 1000) / elapsed));
‏          endChallenge(true);
‏        } else if (elapsed >= (currentChallenge.config.timeLimit || 60)) {
‏          endChallenge(false);
        }
‏        break;
      }
      
‏      case 'colorMatch': {
‏        const misses = challengeData.misses || 0;
‏        const maxMisses = currentChallenge.config.maxMisses || 3;
        
‏        if (misses >= maxMisses) {
‏          endChallenge(false);
‏        } else if (challengeScore >= (currentChallenge.config.targetScore || 15)) {
‏          endChallenge(true);
        }
‏        break;
      }
      
‏      case 'avoidance': {
‏        const misses = challengeData.misses || 0;
‏        const maxMisses = currentChallenge.config.maxMisses || 1;
        
‏        if (misses >= maxMisses) {
‏          endChallenge(false);
‏        } else if (challengeScore >= (currentChallenge.config.targetScore || 25)) {
‏          endChallenge(true);
        }
‏        break;
      }
      
‏      case 'kingOfHill': {
‏        const config = currentChallenge.config;
‏        const hillCenter = config.hillCenter || { x: 400, y: 300 };
‏        const hillRadius = config.hillRadius || 80;
‏        const pointsPerSecond = config.pointsPerSecond || 2;
        
‏        const inHill = getDistance(currentPlayer.x, currentPlayer.y, hillCenter.x, hillCenter.y) <= hillRadius;
        
‏        if (inHill) {
‏          const timeInHill = (challengeData.timeInHill || 0) + 0.016; // ~60fps
‏          updateChallengeData({ timeInHill });
‏          updateChallengeScore(Math.floor(timeInHill * pointsPerSecond));
        }
        
‏        if (challengeScore >= (config.targetScore || 100)) {
‏          endChallenge(true);
‏        } else if (elapsed >= (config.timeLimit || 90)) {
‏          endChallenge(challengeScore >= (config.targetScore || 100));
        }
‏        break;
      }
      
‏      case 'survival': {
‏        const centerX = GAME_CONFIG.CANVAS_WIDTH / 2;
‏        const centerY = GAME_CONFIG.CANVAS_HEIGHT / 2;
‏        const currentRadius = calculateSurvivalRadius();
‏        const distanceFromCenter = getDistance(currentPlayer.x, currentPlayer.y, centerX, centerY);
        
‏        if (distanceFromCenter > currentRadius) {
‏          endChallenge(false);
‏        } else {
‏          updateChallengeScore(Math.floor(elapsed * 10));
          
‏          if (elapsed >= (currentChallenge.config.timeLimit || 120)) {
‏            endChallenge(true);
          }
        }
‏        break;
      }
      
‏      case 'relay': {
‏        const checkpoints = currentChallenge.config.checkpoints || [];
‏        const currentCheckpoint = challengeData.currentCheckpoint || 0;
        
‏        if (currentCheckpoint < checkpoints.length) {
‏          const checkpoint = checkpoints[currentCheckpoint];
‏          const distance = getDistance(currentPlayer.x, currentPlayer.y, checkpoint.x, checkpoint.y);
          
‏          if (distance <= 25) {
‏            const newCheckpoint = currentCheckpoint + 1;
‏            updateChallengeData({ currentCheckpoint: newCheckpoint });
            
‏            if (newCheckpoint >= checkpoints.length) {
‏              updateChallengeScore(Math.floor((checkpoints.length * 1000) / elapsed));
‏              endChallenge(true);
            }
          }
        }
        
‏        if (elapsed >= (currentChallenge.config.timeLimit || 90)) {
‏          endChallenge(false);
        }
‏        break;
      }
      
‏      case 'precision': {
‏        // Precision targets are handled via click events
‏        if (elapsed >= (currentChallenge.duration || 120)) {
‏          const targets = currentChallenge.config.targets || [];
‏          const hits = challengeData.hits || 0;
‏          endChallenge(hits >= targets.length);
        }
‏        break;
      }
    }
‏  }, [currentChallenge, isInChallenge, challengeStartTime, challengeData, challengeScore, players, playerId, updateChallengeScore, updateChallengeData, endChallenge, calculateSurvivalRadius]);

‏  // Handle dot collection for challenges
‏  const handleDotCollection = useCallback((dot: any, player: any) => {
‏    if (!currentChallenge || !isInChallenge) return false;
    
‏    let shouldCollect = true;
‏    let points = dot.points;
    
‏    switch (currentChallenge.type) {
‏      case 'speedRun': {
‏        const dotsCollected = (challengeData.dotsCollected || 0) + 1;
‏        updateChallengeData({ dotsCollected });
‏        break;
      }
      
‏      case 'colorMatch': {
‏        const allowedColors = currentChallenge.config.allowedColors || [];
‏        const forbiddenColors = currentChallenge.config.forbiddenColors || [];
        
‏        if (forbiddenColors.includes(dot.color) || (allowedColors.length > 0 && !allowedColors.includes(dot.color))) {
‏          const misses = (challengeData.misses || 0) + 1;
‏          updateChallengeData({ misses });
‏          shouldCollect = false;
‏          points = 0;
        }
‏        break;
      }
      
‏      case 'avoidance': {
‏        const forbiddenColors = currentChallenge.config.forbiddenColors || ['#ff4444'];
        
‏        if (forbiddenColors.includes(dot.color)) {
‏          const misses = (challengeData.misses || 0) + 1;
‏          updateChallengeData({ misses });
‏          shouldCollect = false;
‏          points = 0;
        }
‏        break;
      }
      
‏      case 'treasure': {
‏        if (dot.color === '#FFD700') { // Golden dot
‏          points = currentChallenge.config.treasurePoints || 10;
        }
‏        break;
      }
    }
    
‏    if (shouldCollect && points > 0) {
‏      updateChallengeScore(challengeScore + points);
    }
    
‏    return shouldCollect;
‏  }, [currentChallenge, isInChallenge, challengeData, challengeScore, updateChallengeData, updateChallengeScore]);

‏  // Custom rendering for challenge modes
‏  const renderChallengeElements = useCallback((ctx: CanvasRenderingContext2D) => {
‏    if (!currentChallenge || !isInChallenge) return;
    
‏    switch (currentChallenge.type) {
‏      case 'kingOfHill': {
‏        const config = currentChallenge.config;
‏        const hillCenter = config.hillCenter || { x: 400, y: 300 };
‏        const hillRadius = config.hillRadius || 80;
        
‏        // Draw hill area
‏        ctx.fillStyle = 'rgba(255, 215, 0, 0.2)';
‏        ctx.beginPath();
‏        ctx.arc(hillCenter.x, hillCenter.y, hillRadius, 0, Math.PI * 2);
‏        ctx.fill();
        
‏        ctx.strokeStyle = '#FFD700';
‏        ctx.lineWidth = 3;
‏        ctx.stroke();
        
‏        // Draw "KING OF HILL" text
‏        ctx.fillStyle = '#B8860B';
‏        ctx.font = 'bold 16px Arial';
‏        ctx.textAlign = 'center';
‏        ctx.fillText('KING OF HILL', hillCenter.x, hillCenter.y);
‏        break;
      }
      
‏      case 'survival': {
‏        const centerX = GAME_CONFIG.CANVAS_WIDTH / 2;
‏        const centerY = GAME_CONFIG.CANVAS_HEIGHT / 2;
‏        const currentRadius = calculateSurvivalRadius();
        
‏        // Draw safe area
‏        ctx.fillStyle = 'rgba(0, 255, 0, 0.1)';
‏        ctx.beginPath();
‏        ctx.arc(centerX, centerY, currentRadius, 0, Math.PI * 2);
‏        ctx.fill();
        
‏        // Draw danger zone
‏        ctx.fillStyle = 'rgba(255, 0, 0, 0.3)';
‏        ctx.fillRect(0, 0, GAME_CONFIG.CANVAS_WIDTH, GAME_CONFIG.CANVAS_HEIGHT);
        
‏        // Cut out safe area
‏        ctx.globalCompositeOperation = 'destination-out';
‏        ctx.beginPath();
‏        ctx.arc(centerX, centerY, currentRadius, 0, Math.PI * 2);
‏        ctx.fill();
‏        ctx.globalCompositeOperation = 'source-over';
        
‏        // Draw border
‏        ctx.strokeStyle = '#ff4444';
‏        ctx.lineWidth = 4;
‏        ctx.beginPath();
‏        ctx.arc(centerX, centerY, currentRadius, 0, Math.PI * 2);
‏        ctx.stroke();
‏        break;
      }
      
‏      case 'relay': {
‏        const checkpoints = currentChallenge.config.checkpoints || [];
‏        const currentCheckpoint = challengeData.currentCheckpoint || 0;
        
‏        checkpoints.forEach((checkpoint, index) => {
‏          const isActive = index === currentCheckpoint;
‏          const isCompleted = index < currentCheckpoint;
          
‏          ctx.fillStyle = isCompleted ? '#22c55e' : isActive ? '#3b82f6' : '#94a3b8';
‏          ctx.beginPath();
‏          ctx.arc(checkpoint.x, checkpoint.y, 20, 0, Math.PI * 2);
‏          ctx.fill();
          
‏          ctx.fillStyle = 'white';
‏          ctx.font = 'bold 14px Arial';
‏          ctx.textAlign = 'center';
‏          ctx.fillText((index + 1).toString(), checkpoint.x, checkpoint.y + 5);
        });
‏        break;
      }
      
‏      case 'precision': {
‏        const targets = currentChallenge.config.targets || [];
‏        const hits = challengeData.hits || 0;
        
‏        targets.forEach((target, index) => {
‏          const isHit = index < hits;
          
‏          ctx.strokeStyle = isHit ? '#22c55e' : '#ef4444';
‏          ctx.lineWidth = 3;
‏          ctx.beginPath();
‏          ctx.arc(target.x, target.y, target.radius, 0, Math.PI * 2);
‏          ctx.stroke();
          
‏          if (!isHit) {
‏            ctx.strokeStyle = '#ef4444';
‏            ctx.lineWidth = 2;
‏            ctx.beginPath();
‏            ctx.moveTo(target.x - 10, target.y - 10);
‏            ctx.lineTo(target.x + 10, target.y + 10);
‏            ctx.moveTo(target.x + 10, target.y - 10);
‏            ctx.lineTo(target.x - 10, target.y + 10);
‏            ctx.stroke();
‏          } else {
‏            ctx.fillStyle = '#22c55e';
‏            ctx.font = 'bold 16px Arial';
‏            ctx.textAlign = 'center';
‏            ctx.fillText('✓', target.x, target.y + 6);
          }
        });
‏        break;
      }
    }
‏  }, [currentChallenge, isInChallenge, challengeData, calculateSurvivalRadius]);

‏  // Handle precision target clicks
‏  const handleCanvasClick = useCallback((e: React.MouseEvent) => {
‏    if (!currentChallenge || currentChallenge.type !== 'precision' || !isInChallenge) return;
    
‏    const rect = canvasRef.current?.getBoundingClientRect();
‏    if (!rect) return;
    
‏    const scaleX = GAME_CONFIG.CANVAS_WIDTH / rect.width;
‏    const scaleY = GAME_CONFIG.CANVAS_HEIGHT / rect.height;
    
‏    const x = (e.clientX - rect.left) * scaleX;
‏    const y = (e.clientY - rect.top) * scaleY;
    
‏    const targets = currentChallenge.config.targets || [];
‏    const hits = challengeData.hits || 0;
    
‏    if (hits < targets.length) {
‏      const target = targets[hits];
‏      const distance = getDistance(x, y, target.x, target.y);
      
‏      if (distance <= target.radius) {
‏        const newHits = hits + 1;
‏        updateChallengeData({ hits: newHits });
‏        updateChallengeScore(challengeScore + 10);
        
‏        if (newHits >= targets.length) {
‏          endChallenge(true);
        }
‏      } else {
‏        const misses = (challengeData.misses || 0) + 1;
‏        updateChallengeData({ misses });
        
‏        const penalty = currentChallenge.config.penaltyPerMiss || 10;
‏        updateChallengeScore(Math.max(0, challengeScore - penalty));
        
‏        if (misses >= (currentChallenge.config.maxMisses || 2)) {
‏          endChallenge(false);
        }
      }
    }
‏  }, [currentChallenge, isInChallenge, challengeData, challengeScore, updateChallengeData, updateChallengeScore, endChallenge]);

‏  // Main render function
‏  const render = useCallback(() => {
‏    const canvas = canvasRef.current;
‏    if (!canvas) return;
    
‏    const ctx = canvas.getContext('2d');
‏    if (!ctx) return;

‏    // Clear canvas
‏    ctx.fillStyle = '#f0f0f0';
‏    ctx.fillRect(0, 0, GAME_CONFIG.CANVAS_WIDTH, GAME_CONFIG.CANVAS_HEIGHT);

‏    // Draw grid pattern
‏    ctx.strokeStyle = '#e0e0e0';
‏    ctx.lineWidth = 1;
‏    const gridSize = 50;
‏    for (let x = 0; x <= GAME_CONFIG.CANVAS_WIDTH; x += gridSize) {
‏      ctx.beginPath();
‏      ctx.moveTo(x, 0);
‏      ctx.lineTo(x, GAME_CONFIG.CANVAS_HEIGHT);
‏      ctx.stroke();
    }
‏    for (let y = 0; y <= GAME_CONFIG.CANVAS_HEIGHT; y += gridSize) {
‏      ctx.beginPath();
‏      ctx.moveTo(0, y);
‏      ctx.lineTo(GAME_CONFIG.CANVAS_WIDTH, y);
‏      ctx.stroke();
    }

‏    // Render challenge-specific elements
‏    renderChallengeElements(ctx);

‏    // Draw dots (with challenge-specific modifications)
‏    dots.forEach(dot => {
‏      let dotColor = dot.color;
      
‏      // Special rendering for treasure hunt
‏      if (currentChallenge?.type === 'treasure' && dot.color === '#FFD700') {
‏        // Make treasure dots sparkle
‏        const time = Date.now() / 1000;
‏        const sparkle = Math.sin(time * 4) * 0.3 + 0.7;
‏        ctx.save();
‏        ctx.globalAlpha = sparkle;
        
‏        // Draw larger golden dot
‏        ctx.fillStyle = '#FFD700';
‏        ctx.beginPath();
‏        ctx.arc(dot.x, dot.y, GAME_CONFIG.DOT_SIZE * 0.8, 0, Math.PI * 2);
‏        ctx.fill();
        
‏        // Draw sparkle effect
‏        ctx.strokeStyle = '#FFF700';
‏        ctx.lineWidth = 2;
‏        const sparkleSize = 8;
‏        ctx.beginPath();
‏        ctx.moveTo(dot.x - sparkleSize, dot.y);
‏        ctx.lineTo(dot.x + sparkleSize, dot.y);
‏        ctx.moveTo(dot.x, dot.y - sparkleSize);
‏        ctx.lineTo(dot.x, dot.y + sparkleSize);
‏        ctx.stroke();
        
‏        ctx.restore();
‏      } else {
‏        ctx.fillStyle = dotColor;
‏        ctx.beginPath();
‏        ctx.arc(dot.x, dot.y, GAME_CONFIG.DOT_SIZE / 2, 0, Math.PI * 2);
‏        ctx.fill();
      }
      
‏      // Draw points value
‏      ctx.fillStyle = '#333';
‏      ctx.font = '12px Arial';
‏      ctx.textAlign = 'center';
‏      ctx.fillText(dot.points.toString(), dot.x, dot.y - GAME_CONFIG.DOT_SIZE);
    });

‏    // Draw players
‏    const playersArray = Array.from(players.values());
‏    playersArray.forEach(player => {
‏      // Player circle
‏      ctx.fillStyle = player.color;
‏      ctx.beginPath();
‏      ctx.arc(player.x, player.y, GAME_CONFIG.PLAYER_SIZE / 2, 0, Math.PI * 2);
‏      ctx.fill();
      
‏      // Player border
‏      ctx.strokeStyle = player.id === playerId ? '#fff' : '#333';
‏      ctx.lineWidth = player.id === playerId ? 3 : 2;
‏      ctx.stroke();
      
‏      // Player name
‏      ctx.fillStyle = '#333';
‏      ctx.font = 'bold 14px Arial';
‏      ctx.textAlign = 'center';
‏      ctx.fillText(player.name, player.x, player.y - GAME_CONFIG.PLAYER_SIZE);
    });

‏    // Check challenge conditions each frame
‏    checkChallengeConditions();

‏    animationFrameRef.current = requestAnimationFrame(render);
‏  }, [players, dots, playerId, currentChallenge, isInChallenge, challengeData, renderChallengeElements, checkChallengeConditions]);

‏  useEffect(() => {
‏    if (isInChallenge) {
‏      render();
    }
    
‏    return () => {
‏      if (animationFrameRef.current) {
‏        cancelAnimationFrame(animationFrameRef.current);
      }
    };
‏  }, [render, isInChallenge]);

‏  if (!isInChallenge) {
‏    return null;
  }

‏  return (
‏    <canvas
‏      ref={canvasRef}
‏      width={GAME_CONFIG.CANVAS_WIDTH}
‏      height={GAME_CONFIG.CANVAS_HEIGHT}
‏      className="border border-gray-300 rounded-lg cursor-crosshair touch-none"
‏      style={{ 
‏        width: width,
‏        height: height,
‏        maxWidth: '100%',
‏        maxHeight: '100%'
      }}
‏      onPointerMove={handlePointerMove}
‏      onPointerEnter={handlePointerMove}
‏      onClick={handleCanvasClick}
    />
  );
}



2. شغّل كل خدمة في نافذة منفصلة (يفضل تشغيل النواة أولاً):

- **النواة المركزية (CoreAI):**
  ```
‏     cd core
‏     npm start
  ```

- **بوابة النظام (API Gateway):**
  ```
‏     cd api
‏     npm start
  ```

- **خدمة المنتجات:**
  ```
‏     cd services/products
‏     npm start
  ```

- **واجهة المستخدم (Next.js):**
  ```
‏     cd frontend/web
‏     npm run dev
  ```

3. للوصول للمنصة:
- افتح المتصفح على:
  ```
‏     http://localhost:3000/
  ```
- ستشاهد قائمة المنتجات وعنوان المنصة.


‎2. شغّل كل خدمة في نافذة منفصلة (يفضل تشغيل النواة أولاً):

‎- **النواة المركزية (CoreAI):**
  ```
‎‏     cd core
‎‏     npm start
  ```

‎- **بوابة النظام (API Gateway):**
  ```
‎‏     cd api
‎‏     npm start
  ```

‎- **خدمة المنتجات:**
  ```
‎‏     cd services/products
‎‏     npm start
  ```

‎- **واجهة المستخدم (Next.js):**
  ```
‎‏     cd frontend/web
‎‏     npm run dev
  ```

‎3. للوصول للمنصة:
‎- افتح المتصفح على:
  ```
    '.abogado',
    '.ac',
    '.academy',
    '.accountant',
    '.accountants',
    '.actor',
    '.adult',
    '.ae',
    '.aero',
    '.af',
    '.africa',
    '.ag',
    '.agency',
    '.ai',
    '.airforce',
    '.alsace',
    '.am',
    '.amsterdam',
    '.apartments',
    '.app',
    '.ar',
    '.archi',
    '.army',
    '.art',
    '.as',
    '.asia',
    '.associates',
    '.at',
    '.attorney',
    '.au',
    '.auction',
    '.audio',
    '.auto',
    '.baby',
    '.band',
    '.bar',
    '.barcelona',
    '.bargains',
    '.bayern',
    '.be',
    '.beauty',
    '.beer',
    '.berlin',
    '.best',
    '.bet',
    '.bid',
    '.bike',
    '.bingo',
    '.bio',
    '.biz',
    '.black',
    '.blackfriday',
    '.blog',
    '.blue',
    '.boston',
    '.boutique',
    '.br',
    '.brussels',
    '.build',
    '.builders',
    '.business',
    '.buzz',
    '.bz',
    '.bzh',
    '.ca',
    '.cab',
    '.cafe',
    '.camera',
    '.camp',
    '.capetown',
    '.capital',
    '.car',
    '.cards',
    '.care',
    '.careers',
    '.cars',
    '.casa',
    '.cash',
    '.casino',
    '.cat',
    '.catering',
    '.cc',
    '.cd',
    '.center',
    '.ceo',
    '.ch',
    '.charity',
    '.chat',
    '.cheap',
    '.christmas',
    '.church',
    '.city',
    '.cl',
    '.claims',
    '.cleaning',
    '.click',
    '.clinic',
    '.clothing',
    '.cloud',
    '.club',
    '.cm',
    '.cn',
    '.co',
    '.coach',
    '.codes',
    '.coffee',
    '.college',
    '.cologne',
    '.com',
    '.community',
    '.company',
    '.computer',
    '.condos',
    '.construction',
    '.consulting',
    '.contractors',
    '.cooking',
    '.cool',
    '.coop',
    '.corsica',
    '.country',
    '.coupons',
    '.courses',
    '.credit',
    '.creditcard',
    '.cricket',
    '.cruises',
    '.cx',
    '.cymru',
    '.cz',
    '.dance',
    '.date',
    '.dating',
    '.de',
    '.deals',
    '.degree',
    '.delivery',
    '.democrat',
    '.dental',
    '.dentist',
    '.desi',
    '.dev',
    '.design',
    '.diamonds',
    '.diet',
    '.digital',
    '.direct',
    '.directory',
    '.discount',
    '.dk',
    '.doctor',
    '.dog',
    '.domains',
    '.download',
    '.durban',
    '.earth',
    '.ec',
    '.education',
    '.email',
    '.energy',
    '.engineer',
    '.engineering',
    '.enterprises',
    '.equipment',
    '.es',
    '.estate',
    '.eu',
    '.events',
    '.exchange',
    '.expert',
    '.exposed',
    '.express',
    '.fail',
    '.faith',
    '.family',
    '.fan',
    '.fans',
    '.farm',
    '.fashion',
    '.feedback',
    '.fi',
    '.film',
    '.finance',
    '.financial',
    '.fish',
    '.fishing',
    '.fit',
    '.fitness',
    '.flights',
    '.florist',
    '.flowers',
    '.fm',
    '.football',
    '.forsale',
    '.foundation',
    '.fr',
    '.frl',
    '.fun',
    '.fund',
    '.furniture',
    '.futbol',
    '.fyi',
    '.gallery',
    '.game',
    '.games',
    '.garden',
    '.gay',
    '.gd',
    '.gg',
    '.gift',
    '.gifts',
    '.gives',
    '.gl',
    '.glass',
    '.global',
    '.gmbh',
    '.gold',
    '.golf',
    '.gr',
    '.graphics',
    '.gratis',
    '.green',
    '.gripe',
    '.group',
    '.gs',
    '.guide',
    '.guitars',
    '.guru',
    '.gy',
    '.hair',
    '.hamburg',
    '.haus',
    '.health',
    '.healthcare',
    '.help',
    '.hiphop',
    '.hiv',
    '.hk',
    '.hm',
    '.hn',
    '.hockey',
    '.holdings',
    '.holiday',
    '.homes*',
    '.horse',
    '.hospital',
    '.host',
    '.hosting',
    '.house',
    '.how',
    '.hr',
    '.ht',
    '.hu',
    '.il',
    '.im',
    '.immo',
    '.immobilien',
    '.in',
    '.inc',
    '.industries',
    '.info',
    '.ink',
    '.institute',
    '.insure',
    '.international',
    '.investments',
    '.io',
    '.irish',
    '.is',
    '.ist',
    '.istanbul',
    '.it',
    '.je',
    '.jetzt',
    '.jewelry',
    '.jobs',
    '.joburg',
    '.jp',
    '.juegos',
    '.kaufen',
    '.kg',
    '.ki',
    '.kim',
    '.kitchen',
    '.kiwi',
    '.koeln',
    '.kr',
    '.la',
    '.land',
    '.law',
    '.lawyer',
    '.lc',
    '.lease',
    '.legal',
    '.lgbt',
    '.li',
    '.life',
    '.lighting',
    '.limited',
    '.limo',
    '.link',
    '.live',
    '.llc',
    '.loan ',
    '.loans',
    '.lol',
    '.london',
    '.love',
    '.lt',
    '.ltd ',
    '.ltda',
    '.lu',
    '.luxury',
    '.lv',
    '.ly',
    '.ma',
    '.maison',
    '.management',
    '.makeup',
    '.market',
    '.marketing',
    '.mba',
    '.md',
    '.me',
    '.media',
    '.melbourne',
    '.memorial',
    '.men',
    '.menu',
    '.miami',
    '.mn',
    '.mobi',
    '.moda',
    '.moe',
    '.mom',
    '.money',
    '.monster',
    '.mortgage',
    '.movie',
    '.ms',
    '.mu',
    '.mx',
    '.my',
    '.nagoya',
    '.name',
    '.navy',
    '.net',
    '.network',
    '.news',
    '.ngo/.ong',
    '.ninja',
    '.nl',
    '.no',
    '.nrw',
    '.nu',
    '.nyc',
    '.nz',
    '.observer',
    '.one',
    '.online',
    '.org',
    '.organic',
    '.page*',
    '.paris',
    '.partners',
    '.parts',
    '.party',
    '.pe',
    '.pet',
    '.ph',
    '.photo',
    '.photography',
    '.photos',
    '.physio',
    '.pics',
    '.pictures',
    '.pink',
    '.pizza',
    '.pl',
    '.place',
    '.plumbing',
    '.plus',
    '.pm',
    '.poker',
    '.porn',
    '.pr',
    '.press',
    '.pro',
    '.productions',
    '.promo',
    '.properties',
    '.property',
    '.protection',
    '.pt',
    '.pub',
    '.pw',
    '.qa',
    '.quebec',
    '.quest',
    '.racing',
    '.re',
    '.realestate',
    '.realty',
    '.recipes',
    '.red',
    '.rehab',
    '.reise',
    '.reisen',
    '.rent',
    '.rentals',
    '.repair',
    '.report',
    '.republican',
    '.rest',
    '.restaurant',
    '.review',
    '.reviews',
    '.rio',
    '.rip',
    '.ro',
    '.rocks',
    '.rodeo',
    '.ru',
    '.ruhr',
    '.run',
    '.sale',
    '.salon',
    '.sarl',
    '.sb',
    '.sc',
    '.school',
    '.schule',
    '.science',
    '.scot',
    '.se',
    '.security',
    '.services',
    '.sex',
    '.sexy',
    '.sg',
    '.sh',
    '.shiksha',
    '.shoes',
    '.shop',
    '.shopping',
    '.show',
    '.si',
    '.singles',
    '.site',
    '.ski',
    '.skin',
    '.so',
    '.soccer',
    '.social',
    '.software',
    '.solar',
    '.solutions',
    '.soy',
    '.space',
    '.sport',
    '.sr',
    '.srl',
    '.st',
    '.storage',
    '.store',
    '.stream',
    '.studio',
    '.study',
    '.style',
    '.sucks',
    '.supplies',
    '.supply',
    '.support',
    '.surf',
    '.surgery',
    '.sx',
    '.sydney',
    '.systems',
    '.tattoo',
    '.tax',
    '.taxi',
    '.tc',
    '.team',
    '.technical',
    '.technicalnology',
    '.tel',
    '.tennis',
    '.tf',
    '.theater',
    '.theatre',
    '.tienda',
    '.tips',
    '.tires',
    '.tirol',
    '.tk',
    '.tl',
    '.tm',
    '.to',
    '.today',
    '.tokyo',
    '.tools',
    '.top',
    '.tours',
    '.town',
    '.trade',
    '.training',
    '.travel',
    '.tube',
    '.tv',
    '.tw',
    '.ua',
    '.uk',
    '.university',
    '.uno',
    '.us',
    '.uy',
    '.vacations',
    '.vc',
    '.ve',
    '.vegas',
    '.ventures',
    '.vet',
    '.vg',
    '.viajes',
    '.video',
    '.villas',
    '.vin',
    '.vip',
    '.vision',
    '.vlaanderen',
    '.vodka',
    '.vote',
    '.voto',
    '.voyage',
    '.wales',
    '.watch',
    '.webcam',
    '.website',
    '.wedding',
    '.wf',
    '.wien',
    '.wiki',
    '.win',
    '.wine',
    '.work',
    '.works',
    '.world',
    '.ws',
    '.wtf',
    '.xxx',
    '.xyz',
    '.yoga',
    '.yokohama',
    '.yt',
    '.za',
    '.zone'
]);

// Transfer fields
Configure::set('Domainnameapi.transfer_fields', [
    'domain' => [
        'label' => Language::_('Domainnameapi.transfer.domain', true),
        'type' => 'text'
    ],
    'auth_info' => [
        'label' => Language::_('Domainnameapi.transfer.auth_info', true),
        'type' => 'text'
    ]
]);

// Domain fields
Configure::set('Domainnameapi.domain_fields', [
    'domain' => [
        'label' => Language::_('Domainnameapi.domain.domain', true),
        'type' => 'text'
    ],
]);

// Nameserver fields
Configure::set('Domainnameapi.nameserver_fields', [
    'ns1' => [
        'label' => Language::_('Domainnameapi.nameserver.ns1', true),
        'type' => 'text'
    ],
    'ns2' => [
        'label' => Language::_('Domainnameapi.nameserver.ns2', true),
        'type' => 'text'
    ],
    'ns3' => [
        'label' => Language::_('Domainnameapi.nameserver.ns3', true),
        'type' => 'text'
    ],
    'ns4' => [
        'label' => Language::_('Domainnameapi.nameserver.ns4', true),
        'type' => 'text'
    ]
]);

// Whois fields
Configure::set('Domainnameapi.whois_sections', [
    'Administrative',
    'Technical',
    'Registrant',
    'Billing'
]);

// Whois fields
Configure::set('Domainnameapi.whois_fields', [
    'AdministrativeFirstName'        => [
        'label' => Language::_('Domainnameapi.whois.administrative.first_name', true),
        'type'  => 'text'
    ],
    'AdministrativeLastName'         => [
        'label' => Language::_('Domainnameapi.whois.administrative.last_name', true),
        'type'  => 'text'
    ],
    'AdministrativeCompany'          => [
        'label' => Language::_('Domainnameapi.whois.administrative.company_name', true),
        'type'  => 'text'
    ],
    'AdministrativeAddressLine1'     => [
        'label' => Language::_('Domainnameapi.whois.administrative.address1', true),
        'type'  => 'text'
    ],
    'AdministrativeAddressLine2'     => [
        'label' => Language::_('Domainnameapi.whois.administrative.address2', true),
        'type'  => 'text'
    ],
    'AdministrativeCity'             => [
        'label' => Language::_('Domainnameapi.whois.administrative.city', true),
        'type'  => 'text'
    ],
    'AdministrativeState'            => [
        'label' => Language::_('Domainnameapi.whois.administrative.state', true),
        'type'  => 'text'
    ],
    'AdministrativeZipCode'          => [
        'label' => Language::_('Domainnameapi.whois.administrative.postal_code', true),
        'type'  => 'text'
    ],
    'AdministrativeCountry'          => [
        'label' => Language::_('Domainnameapi.whois.administrative.country', true),
        'type'  => 'text'
    ],
    'AdministrativePhoneCountryCode' => [
        'label' => Language::_('Domainnameapi.whois.administrative.phone_country_code', true),
        'type'  => 'text'
    ],
    'AdministrativePhone'            => [
        'label' => Language::_('Domainnameapi.whois.administrative.phone', true),
        'type'  => 'text'
    ],
    'AdministrativeFaxCountryCode'   => [
        'label' => Language::_('Domainnameapi.whois.administrative.fax_country_code', true),
        'type'  => 'text'
    ],
    'AdministrativeFax'              => [
        'label' => Language::_('Domainnameapi.whois.administrative.fax', true),
        'type'  => 'text'
    ],
    'AdministrativeEMail'            => [
        'label' => Language::_('Domainnameapi.whois.administrative.email', true),
        'type'  => 'text'
    ],
    'TechnicalFirstName'             => [
        'label' => Language::_('Domainnameapi.whois.technical.first_name', true),
        'type'  => 'text'
    ],
    'TechnicalLastName'              => [
        'label' => Language::_('Domainnameapi.whois.technical.last_name', true),
        'type'  => 'text'
    ],
    'TechnicalCompany'               => [
        'label' => Language::_('Domainnameapi.whois.technical.company_name', true),
        'type'  => 'text'
    ],
    'TechnicalAddressLine1'          => [
        'label' => Language::_('Domainnameapi.whois.technical.address1', true),
        'type'  => 'text'
    ],
    'TechnicalAddressLine2'          => [
        'label' => Language::_('Domainnameapi.whois.technical.address2', true),
        'type'  => 'text'
    ],
    'TechnicalCity'                  => [
        'label' => Language::_('Domainnameapi.whois.technical.city', true),
        'type'  => 'text'
    ],
    'TechnicalState'                 => [
        'label' => Language::_('Domainnameapi.whois.technical.state', true),
        'type'  => 'text'
    ],
    'TechnicalZipCode'               => [
        'label' => Language::_('Domainnameapi.whois.technical.postal_code', true),
        'type'  => 'text'
    ],
    'TechnicalCountry'               => [
        'label' => Language::_('Domainnameapi.whois.technical.country', true),
        'type'  => 'text'
    ],
    'TechnicalPhoneCountryCode'      => [
        'label' => Language::_('Domainnameapi.whois.technical.phone_country_code', true),
        'type'  => 'text'
    ],
    'TechnicalPhone'                 => [
        'label' => Language::_('Domainnameapi.whois.technical.phone', true),
        'type'  => 'text'
    ],
    'TechnicalFaxCountryCode'        => [
        'label' => Language::_('Domainnameapi.whois.technical.fax_country_code', true),
        'type'  => 'text'
    ],
    'TechnicalFax'                   => [
        'label' => Language::_('Domainnameapi.whois.technical.fax', true),
        'type'  => 'text'
    ],
    'TechnicalEMail'                 => [
        'label' => Language::_('Domainnameapi.whois.technical.email', true),
        'type'  => 'text'
    ],
    'RegistrantFirstName'            => [
        'label' => Language::_('Domainnameapi.whois.registrant.first_name', true),
        'type'  => 'text'
    ],
    'RegistrantLastName'             => [
        'label' => Language::_('Domainnameapi.whois.registrant.last_name', true),
        'type'  => 'text'
    ],
    'RegistrantCompany'              => [
        'label' => Language::_('Domainnameapi.whois.registrant.company_name', true),
        'type'  => 'text'
    ],
    'RegistrantAddressLine1'         => [
        'label' => Language::_('Domainnameapi.whois.registrant.address1', true),
        'type'  => 'text'
    ],
    'RegistrantAddressLine2'         => [
        'label' => Language::_('Domainnameapi.whois.registrant.address2', true),
        'type'  => 'text'
    ],
    'RegistrantCity'                 => [
        'label' => Language::_('Domainnameapi.whois.registrant.city', true),
        'type'  => 'text'
    ],
    'RegistrantState'                => [
        'label' => Language::_('Domainnameapi.whois.registrant.state', true),
        'type'  => 'text'
    ],
    'RegistrantZipCode'              => [
        'label' => Language::_('Domainnameapi.whois.registrant.postal_code', true),
        'type'  => 'text'
    ],
    'RegistrantCountry'              => [
        'label' => Language::_('Domainnameapi.whois.registrant.country', true),
        'type'  => 'text'
    ],
    'RegistrantPhoneCountryCode'     => [
        'label' => Language::_('Domainnameapi.whois.registrant.phone_country_code', true),
        'type'  => 'text'
    ],
    'RegistrantPhone'                => [
        'label' => Language::_('Domainnameapi.whois.registrant.phone', true),
        'type'  => 'text'
    ],
    'RegistrantFaxCountryCode'       => [
        'label' => Language::_('Domainnameapi.whois.registrant.fax_country_code', true),
        'type'  => 'text'
    ],
    'RegistrantFax'                  => [
        'label' => Language::_('Domainnameapi.whois.registrant.fax', true),
        'type'  => 'text'
    ],
    'RegistrantEMail'                => [
        'label' => Language::_('Domainnameapi.whois.registrant.email', true),
        'type'  => 'text'
    ],
    'BillingFirstName'               => [
        'label' => Language::_('Domainnameapi.whois.billing.first_name', true),
        'type'  => 'text'
    ],
    'BillingLastName'                => [
        'label' => Language::_('Domainnameapi.whois.billing.last_name', true),
        'type'  => 'text'
    ],
    'BillingCompany'                 => [
        'label' => Language::_('Domainnameapi.whois.billing.company_name', true),
        'type'  => 'text'
    ],
    'BillingAddressLine1'            => [
        'label' => Language::_('Domainnameapi.whois.billing.address1', true),
        'type'  => 'text'
    ],
    'BillingAddressLine2'            => [
        'label' => Language::_('Domainnameapi.whois.billing.address2', true),
        'type'  => 'text'
    ],
    'BillingCity'                    => [
        'label' => Language::_('Domainnameapi.whois.billing.city', true),
        'type'  => 'text'
    ],
    'BillingState'                   => [
        'label' => Language::_('Domainnameapi.whois.billing.state', true),
        'type'  => 'text'
    ],
    'BillingZipCode'                 => [
        'label' => Language::_('Domainnameapi.whois.billing.postal_code', true),
        'type'  => 'text'
    ],
    'BillingCountry'                 => [
        'label' => Language::_('Domainnameapi.whois.billing.country', true),
        'type'  => 'text'
    ],
    'BillingPhoneCountryCode'        => [
        'label' => Language::_('Domainnameapi.whois.billing.phone_country_code', true),
        'type'  => 'text'
    ],
    'BillingPhone'                   => [
        'label' => Language::_('Domainnameapi.whois.billing.phone', true),
        'type'  => 'text'
    ],
    'BillingFaxCountryCode'          => [
        'label' => Language::_('Domainnameapi.whois.billing.fax_country_code', true),
        'type'  => 'text'
    ],
    'BillingFax'                     => [
        'label' => Language::_('Domainnameapi.whois.billing.fax', true),
        'type'  => 'text'
    ],
    'BillingEMail'                   => [
        'label' => Language::_('Domainnameapi.whois.billing.email', true),
        'type'  => 'text'
    ]
]);


// .TR
Configure::set('Domainnameapi.domain_fields.uk', [
    'registrant_extra_info[registrant_type]' => [
        'label' => Language::_('Domainnameapi.domain.registrant_type', true),
        'type' => 'select',
        'options' => [
            'IND' => Language::_('Domainnameapi.domain.registrant_type.ind', true),
            'FIND' => Language::_('Domainnameapi.domain.registrant_type.find', true),
            'LTD' => Language::_('Domainnameapi.domain.registrant_type.ltd', true),
            'PLC' => Language::_('Domainnameapi.domain.registrant_type.plc', true),
            'PTNR' => Language::_('Domainnameapi.domain.registrant_type.ptnr', true),
            'LLP' => Language::_('Domainnameapi.domain.registrant_type.llp', true),
            'IP' => Language::_('Domainnameapi.domain.registrant_type.ip', true),
            'STRA' => Language::_('Domainnameapi.domain.registrant_type.stra', true),
            'SCH' => Language::_('Domainnameapi.domain.registrant_type.sch', true),
            'RCHAR' => Language::_('Domainnameapi.domain.registrant_type.rchar', true),
            'GOV' => Language::_('Domainnameapi.domain.registrant_type.gov', true),
            'OTHER' => Language::_('Domainnameapi.domain.registrant_type.other', true),
            'CRC' => Language::_('Domainnameapi.domain.registrant_type.crc', true),
            'FCORP' => Language::_('Domainnameapi.domain.registrant_type.fcorp', true),
            'STAT' => Language::_('Domainnameapi.domain.registrant_type.stat', true),
            'FOTHER' => Language::_('Domainnameapi.domain.registrant_type.fother', true)
        ]
    ],
    'registrant_extra_info[registration_number]' => [
        'label' => Language::_('Domainnameapi.domain.registration_number', true),
        'type' => 'text'
    ],
    'registrant_extra_info[trading_name]' => [
        'label' => Language::_('Domainnameapi.domain.trading_name', true),
        'type' => 'text'
    ]
]);


// Email templates
Configure::set('Domainnameapi.email_templates', [
    'en_us' => [
        'lang' => 'en_us',
        'text' => 'Your new domain has been successfully registered!

Domain: {service.domain}

Thank you for your business!',
        'html' => '<p>Your new domain has been successfully registered!</p>
<p>Domain: {service.domain}</p>
<p>Thank you for your business!</p>'
    ]
]);
