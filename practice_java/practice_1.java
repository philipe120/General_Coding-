/*
import java.util.Scanner;
class Main {
  public static void main(String[] args) {
    Scanner angles = new Scanner(System.in);
    int a1 = angles.nextInt();
    int a2 = angles.nextInt();
    int a3 = angles.nextInt();

    if (a1==60 && a2==60 && a3==60) System.out.println("Equilateral");
    else if (a1+a2+a3 == 180){
    if ((a1==a2 || a1==a3 || a2==a3) && (a1==a2 || a1==a3 || a2==a3)){
    System.out.println("Isosceles");
    }
    else if (a1!=a2 && a1!=a3 && a2!=a3){
    System.out.println("Scalene");
    }
    }
    else System.out.println("Error");
  }
}
*/
/*
import java.util.Scanner;
class Main {
  public static void main(String[] args) {
     Scanner votes = new Scanner(System.in);
     int counter = votes.nextInt();
     Scanner votestring = new Scanner(System.in);
     String vt = votestring.nextLine(); 
     int counterA = 0;
     int counterB = 0;
     for (int i = 0; i < counter; i++){
       char current = vt.charAt(i);
       if (current == 'A'){
         counterA++; 
       } else {
       counterB++; 
       }
     }
     if (counterA == counterB){
       System.out.println("Tie");
     } else if (counterB > counterA){
       System.out.println("B");
     } else System.out.println("A");
  }
} 
*/ 


import java.util.Scanner;
class practice_1 {
  public static void main(String[] args) {
    int a1 = 100;
    int b1 = 100; 
    
    int result1 = 1;
    int result2 = 1;
    
    Scanner turns = new Scanner(System.in);
    int counter = turns.nextInt();
    for(int i = 0; i<counter; i++){
      System.out.println("sksksksk");
      Scanner dice = new Scanner(System.in); 
      String current = dice.nextLine(); 
      for (int k=0; k<3;k++){
        if (k==0){
          char i1 = current.charAt(k);
          result1 = Character.getNumericValue(i1);
        } else if (k==2){
          char i2 = current.charAt(k);
          result2 = Character.getNumericValue(i2);
        System.out.println("yoyoyo");
        }
      }
      if (result1>result2){
        b1 = b1-result1;
      } else if (result2>result1){
        a1 = a1-result2; 
      }
    }
    System.out.println(a1);
    System.out.println(b1);

  }
}

