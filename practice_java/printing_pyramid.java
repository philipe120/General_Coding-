public class printing_pyramid {
  public static void main(final String[] args) {
      final int row = 10;
    for (int i=1;i<=row;i++){
      for(int k=(row+1)-i;k>=1;k--) System.out.print("S");
      for(int s=1;s<=2*i;s++) System.out.print("*");
      for(int y=(row+1)-i;y>=1;y--) System.out.print("S");
      System.out.print("\n");
    } 
  }
}