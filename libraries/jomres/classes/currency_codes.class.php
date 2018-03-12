
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


c
l
a
s
s
 
c
u
r
r
e
n
c
y
_
c
o
d
e
s

{

	
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;

	

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
d
e
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
i
n
p
u
t
_
n
a
m
e
 
=
 
'
'
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
d
e
s
 
=
 
a
r
r
a
y
(

	
	
	
'
A
F
A
'
 
=
>
 
'
A
f
g
h
a
n
i
s
t
a
n
 
A
f
g
h
a
n
i
 
A
F
A
 
'
,
 

	
	
	
'
A
L
L
'
 
=
>
 
'
A
l
b
a
n
i
a
n
 
L
e
k
 
A
L
L
 
'
,
 

	
	
	
'
D
Z
D
'
 
=
>
 
'
A
l
g
e
r
i
a
n
 
D
i
n
a
r
 
D
Z
D
 
'
,
 

	
	
	
'
A
O
N
'
 
=
>
 
'
A
n
g
o
l
a
n
 
N
e
w
 
K
w
a
n
z
a
 
A
O
N
 
'
,
 

	
	
	
'
A
M
D
'
 
=
>
 
'
A
r
m
e
n
i
a
n
 
D
r
a
m
 
'
,
 

	
	
	
'
A
N
G
'
 
=
>
 
'
A
n
t
i
l
l
i
a
n
 
G
u
i
l
d
e
r
 
(
N
e
t
h
e
r
l
a
n
d
s
)
 
A
N
G
 
'
,
 

	
	
	
'
A
E
D
'
 
=
>
 
'
A
r
a
b
 
E
m
i
r
a
t
e
s
 
D
i
r
h
a
m
 
(
U
n
i
t
e
d
)
 
 
A
E
D
 
'
,
 

	
	
	
'
A
R
S
'
 
=
>
 
'
A
r
g
e
n
t
i
n
e
 
P
e
s
o
 
A
R
S
 
'
,
 

	
	
	
'
A
W
G
'
 
=
>
 
'
A
r
u
b
a
n
 
F
l
o
r
i
n
 
(
o
l
d
 
g
u
i
l
d
e
r
)
 
A
W
G
 
'
,
 

	
	
	
'
A
U
D
'
 
=
>
 
'
A
u
s
t
r
a
l
i
a
n
 
D
o
l
l
a
r
 
A
U
D
 
'
,
 

	
	
	
'
A
Z
N
'
 
=
>
 
'
A
z
e
r
b
a
i
j
a
n
 
N
e
w
 
M
a
n
a
t
 
A
Z
N
 
'
,
 

	
	
	
'
B
S
D
'
 
=
>
 
'
B
a
h
a
m
i
a
n
 
D
o
l
l
a
r
 
B
S
D
 
'
,
 

	
	
	
'
B
H
D
'
 
=
>
 
'
B
a
h
r
a
i
n
i
 
D
i
n
a
r
 
B
H
D
 
'
,
 

	
	
	
'
B
D
T
'
 
=
>
 
'
B
a
n
g
l
a
d
e
s
h
i
 
T
a
k
a
 
B
D
T
 
'
,
 

	
	
	
'
B
B
D
'
 
=
>
 
'
B
a
r
b
a
d
o
s
 
D
o
l
l
a
r
 
B
B
D
 
'
,
 

	
	
	
'
B
Z
D
'
 
=
>
 
'
B
e
l
i
z
e
 
D
o
l
l
a
r
 
B
Z
D
 
'
,
 

	
	
	
'
X
O
F
'
 
=
>
 
'
B
e
n
i
n
:
 
C
F
A
 
F
r
a
n
c
 
B
C
E
A
O
 
X
O
F
 
'
,
 

	
	
	
'
B
M
D
'
 
=
>
 
'
B
e
r
m
u
d
i
a
n
 
D
o
l
l
a
r
 
B
M
D
 
'
,
 

	
	
	
'
B
T
N
'
 
=
>
 
'
B
h
u
t
a
n
 
N
g
u
l
t
r
u
m
 
B
T
N
 
'
,
 

	
	
	
'
B
O
B
'
 
=
>
 
'
B
o
l
i
v
i
a
n
 
B
o
l
i
v
i
a
n
o
 
B
O
B
 
'
,
 

	
	
	
'
B
W
P
'
 
=
>
 
'
B
o
t
s
w
a
n
a
 
P
u
l
a
 
B
W
P
 
'
,
 

	
	
	
'
B
R
L
'
 
=
>
 
'
B
r
a
z
i
l
i
a
n
 
R
e
a
l
 
B
R
L
 
'
,
 

	
	
	
'
B
N
D
'
 
=
>
 
'
B
r
u
n
e
i
 
D
o
l
l
a
r
 
B
N
D
 
'
,
 

	
	
	
'
B
G
N
'
 
=
>
 
'
B
u
l
g
a
r
i
a
n
 
L
e
v
 
B
G
N
'
,
 

	
	
	
'
B
I
F
'
 
=
>
 
'
B
u
r
u
n
d
i
 
F
r
a
n
c
 
B
I
F
 
'
,
 

	
	
	
'
B
T
C
'
 
=
>
 
'
B
i
t
c
o
i
n
'
,
 
'
K
H
R
'
 
=
>
 

	
	
	
'
C
a
m
b
o
d
i
a
n
 
R
i
e
l
 
K
H
R
 
'
,
 

	
	
	
'
C
A
D
'
 
=
>
 
'
C
a
n
a
d
i
a
n
 
D
o
l
l
a
r
 
C
A
D
 
'
,
 

	
	
	
'
C
V
E
'
 
=
>
 
'
C
a
p
e
 
V
e
r
d
e
 
E
s
c
u
d
o
 
C
V
E
 
'
,
 

	
	
	
'
K
Y
D
'
 
=
>
 
'
C
a
y
m
a
n
 
I
s
l
a
n
d
s
 
D
o
l
l
a
r
 
K
Y
D
 
'
,
 

	
	
	
'
X
O
F
'
 
=
>
 
'
C
F
A
 
F
r
a
n
c
 
B
C
E
A
O
 
X
O
F
 
'
,
 

	
	
	
'
X
A
F
'
 
=
>
 
'
C
F
A
 
F
r
a
n
c
 
B
E
A
C
 
X
A
F
 
'
,
 

	
	
	
'
C
L
P
'
 
=
>
 
'
C
h
i
l
e
a
n
 
P
e
s
o
 
C
L
P
 
'
,
 

	
	
	
'
C
N
Y
'
 
=
>
 
'
C
h
i
n
e
s
e
 
Y
u
a
n
 
R
e
n
m
i
n
b
i
 
C
N
Y
 
'
,
 

	
	
	
'
C
O
P
'
 
=
>
 
'
C
o
l
o
m
b
i
a
n
 
P
e
s
o
 
C
O
P
 
'
,
 

	
	
	
'
K
M
F
'
 
=
>
 
'
C
o
m
o
r
o
s
 
F
r
a
n
c
 
K
M
F
 
'
,
 

	
	
	
'
X
A
F
'
 
=
>
 
'
C
o
n
g
o
:
 
C
F
A
 
F
r
a
n
c
 
B
E
A
C
 
X
A
F
 
'
,
 

	
	
	
'
C
R
C
'
 
=
>
 
'
C
o
s
t
a
 
R
i
c
a
n
 
C
o
l
o
n
 
C
R
C
 
'
,
 

	
	
	
'
H
R
K
'
 
=
>
 
'
C
r
o
a
t
i
a
n
 
K
u
n
a
 
H
R
K
 
'
,
 

	
	
	
'
C
U
P
'
 
=
>
 
'
C
u
b
a
n
 
P
e
s
o
 
C
U
P
 
'
,
 

	
	
	
'
C
Z
K
'
 
=
>
 
'
C
z
e
c
h
 
k
o
r
u
n
a
 
C
Z
K
 
'
,
 

	
	
	
'
D
K
K
'
 
=
>
 
'
D
a
n
i
s
h
 
K
r
o
n
e
 
D
K
K
 
'
,
 

	
	
	
'
D
J
F
'
 
=
>
 
'
D
j
i
b
o
u
t
i
 
F
r
a
n
c
 
D
J
F
 
'
,
 

	
	
	
'
D
O
P
'
 
=
>
 
'
D
o
m
i
n
i
c
a
n
 
P
e
s
o
 
D
O
P
 
'
,
 

	
	
	
'
E
G
P
'
 
=
>
 
'
E
g
y
p
t
i
o
n
 
P
o
u
n
d
 
E
G
P
 
'
,
 

	
	
	
'
S
V
C
'
 
=
>
 
'
E
l
 
S
a
l
v
a
d
o
r
 
C
o
l
o
n
 
S
V
C
 
'
,
 

	
	
	
'
E
E
K
'
 
=
>
 
'
E
s
t
o
n
i
a
n
 
K
r
o
o
n
 
E
E
K
 
'
,
 

	
	
	
'
E
T
B
'
 
=
>
 
'
E
t
h
i
o
p
i
a
n
 
B
i
r
r
 
E
T
B
 
'
,
 

	
	
	
'
E
U
R
'
 
=
>
 
'
E
u
r
o
 
E
U
R
 
'
,
 

	
	
	
'
F
K
P
'
 
=
>
 
'
F
a
l
k
l
a
n
d
 
I
s
l
a
n
d
s
 
P
o
u
n
d
 
F
K
P
 
'
,
 

	
	
	
'
F
J
D
'
 
=
>
 
'
F
i
j
i
 
D
o
l
l
a
r
 
F
J
D
 
'
,
 

	
	
	
'
X
P
F
'
 
=
>
 
'
F
r
a
n
c
 
P
a
c
i
f
i
q
u
e
 
X
P
F
 
'
,
 

	
	
	
'
G
B
P
'
 
=
>
 
'
G
r
e
a
t
 
B
r
i
t
i
s
h
 
P
o
u
n
d
 
G
B
P
 
'
,
 

	
	
	
'
G
M
D
'
 
=
>
 
'
G
a
m
b
i
a
n
 
D
a
l
a
s
i
 
G
M
D
 
'
,
 

	
	
	
'
G
H
C
'
 
=
>
 
'
G
h
a
n
a
i
a
n
 
C
e
d
i
 
G
H
C
 
'
,
 

	
	
	
'
G
I
P
'
 
=
>
 
'
G
i
b
r
a
l
t
a
r
 
P
o
u
n
d
 
G
I
P
 
'
,
 

	
	
	
'
G
T
Q
'
 
=
>
 
'
G
u
a
t
e
m
a
l
a
n
 
Q
u
e
t
z
a
l
 
G
T
Q
 
'
,
 

	
	
	
'
G
N
F
'
 
=
>
 
'
G
u
i
n
i
e
a
 
F
r
a
n
c
 
G
N
F
 
'
,
 

	
	
	
'
G
Y
D
'
 
=
>
 
'
G
u
y
a
n
a
n
 
D
o
l
l
a
r
 
G
Y
D
 
'
,
 

	
	
	
'
H
T
G
'
 
=
>
 
'
H
a
i
t
i
a
n
 
G
o
u
r
d
e
 
H
T
G
 
'
,
 

	
	
	
'
H
N
L
'
 
=
>
 
'
H
o
n
d
u
r
a
n
 
L
e
m
p
i
r
a
 
H
N
L
 
'
,
 

	
	
	
'
H
K
D
'
 
=
>
 
'
H
o
n
g
 
K
o
n
g
 
D
o
l
l
a
r
 
H
K
D
 
'
,
 

	
	
	
'
H
U
F
'
 
=
>
 
'
H
u
n
g
a
r
i
a
n
 
F
o
r
i
n
t
 
H
U
F
 
'
,
 

	
	
	
'
I
S
K
'
 
=
>
 
'
I
c
e
l
a
n
d
 
K
r
o
n
a
 
I
S
K
 
'
,
 

	
	
	
'
I
N
R
'
 
=
>
 
'
I
n
d
i
a
n
 
R
u
p
e
e
 
I
N
R
 
'
,
 

	
	
	
'
I
D
R
'
 
=
>
 
'
I
n
d
o
n
e
s
i
a
n
 
R
u
p
i
a
h
 
I
D
R
 
'
,
 

	
	
	
'
I
R
R
'
 
=
>
 
'
I
r
a
n
i
a
n
 
R
i
a
l
 
I
R
R
 
'
,
 

	
	
	
'
I
Q
D
'
 
=
>
 
'
I
r
a
q
i
 
D
i
n
a
r
 
I
Q
D
 
'
,
 

	
	
	
'
I
L
S
'
 
=
>
 
'
I
s
r
a
e
i
l
i
 
N
e
w
 
S
h
e
k
e
l
 
I
L
S
 
'
,
 

	
	
	
'
J
M
D
'
 
=
>
 
'
J
a
m
a
i
c
a
n
 
D
o
l
l
a
r
 
J
M
D
 
'
,
 

	
	
	
'
J
P
Y
'
 
=
>
 
'
J
a
p
a
n
e
s
e
 
Y
e
n
 
J
P
Y
 
'
,
 

	
	
	
'
J
O
D
'
 
=
>
 
'
J
o
r
d
a
n
i
a
n
 
D
i
n
a
r
 
J
O
D
 
'
,
 

	
	
	
'
K
Z
T
'
 
=
>
 
'
K
a
z
a
k
h
s
t
a
n
 
T
e
n
g
e
 
K
Z
T
 
'
,
 

	
	
	
'
K
E
S
'
 
=
>
 
'
K
e
n
y
a
n
 
S
h
i
l
l
i
n
g
 
K
E
S
 
'
,
 

	
	
	
'
K
R
W
'
 
=
>
 
'
K
o
r
e
a
n
 
W
o
n
 
K
R
W
 
'
,
 

	
	
	
'
K
W
D
'
 
=
>
 
'
K
u
w
a
i
t
i
 
D
i
n
a
r
 
K
W
D
 
'
,
 

	
	
	
'
L
A
K
'
 
=
>
 
'
L
a
o
 
K
i
p
 
L
A
K
 
'
,
 

	
	
	
'
L
B
P
'
 
=
>
 
'
L
e
b
a
n
e
s
e
 
P
o
u
n
d
 
L
B
P
 
'
,
 

	
	
	
'
L
R
D
'
 
=
>
 
'
L
i
b
e
r
i
a
n
 
D
o
l
l
a
r
 
L
R
D
 
'
,
 

	
	
	
'
L
S
L
'
 
=
>
 
'
L
e
s
o
t
h
o
 
L
o
t
i
 
L
S
L
 
 
'
,
 

	
	
	
'
L
T
L
'
 
=
>
 
'
L
i
t
h
u
a
n
i
a
n
 
L
i
t
a
s
 
L
T
L
 
'
,
 

	
	
	
'
L
Y
D
'
 
=
>
 
'
L
i
b
y
a
n
 
D
i
n
a
r
 
L
Y
D
 
 
'
,
 

	
	
	
'
L
V
L
'
 
=
>
 
'
L
a
t
v
i
a
n
 
L
a
t
s
 
L
V
L
 
'
,
 

	
	
	
'
M
O
P
'
 
=
>
 
'
M
a
c
a
u
 
P
a
t
a
c
a
 
M
O
P
 
'
,
 

	
	
	
'
M
G
A
'
 
=
>
 
'
M
a
l
a
g
a
s
y
 
F
r
a
n
c
 
M
G
A
 
'
,
 

	
	
	
'
M
W
K
'
 
=
>
 
'
M
a
l
a
w
i
 
K
w
a
c
h
a
 
M
W
K
 
'
,
 

	
	
	
'
M
Y
R
'
 
=
>
 
'
M
a
l
a
y
s
i
a
n
 
R
i
n
g
g
i
t
 
M
Y
R
 
'
,
 

	
	
	
'
M
V
R
'
 
=
>
 
'
M
a
l
d
i
v
e
 
R
u
f
i
y
a
a
 
M
V
R
 
'
,
 

	
	
	
'
M
R
O
'
 
=
>
 
'
M
a
u
r
i
t
a
n
i
a
n
 
O
u
g
u
i
y
a
 
M
R
O
 
'
,
 

	
	
	
'
M
U
R
'
 
=
>
 
'
M
a
u
r
i
t
i
u
s
 
R
u
p
e
e
 
M
U
R
 
'
,
 

	
	
	
'
M
X
N
'
 
=
>
 
'
M
e
x
i
c
a
n
 
P
e
s
o
 
M
X
N
 
'
,
 

	
	
	
'
M
D
L
'
 
=
>
 
'
M
o
l
d
o
v
a
n
 
l
e
u
 
M
D
L
 
'
,
 

	
	
	
'
M
N
T
'
 
=
>
 
'
M
o
n
g
o
l
i
a
n
 
T
u
g
r
i
k
 
M
N
T
 
'
,
 

	
	
	
'
M
A
D
'
 
=
>
 
'
M
o
r
o
c
c
a
n
 
D
i
r
h
a
m
 
M
A
D
 
'
,
 

	
	
	
'
M
Z
M
'
 
=
>
 
'
M
o
z
a
m
b
i
q
u
e
 
M
e
t
i
c
a
l
 
M
Z
M
 
'
,
 

	
	
	
'
M
M
K
'
 
=
>
 
'
M
y
a
n
m
a
r
 
K
y
a
t
 
M
M
K
 
'
,
 

	
	
	
'
N
A
D
'
 
=
>
 
'
N
a
m
i
b
i
a
n
 
D
o
l
l
a
r
 
N
A
D
 
'
,
 

	
	
	
'
N
P
R
'
 
=
>
 
'
N
e
p
a
l
e
s
e
 
R
u
p
e
e
 
N
P
R
 
'
,
 

	
	
	
'
A
N
G
'
 
=
>
 
'
N
e
t
h
e
r
l
a
n
d
s
 
A
n
t
i
l
l
i
a
n
 
G
u
i
l
d
e
r
 
A
N
G
 
'
,
 

	
	
	
'
N
Z
D
'
 
=
>
 
'
N
e
w
 
Z
e
a
l
a
n
d
 
D
o
l
l
a
r
 
N
Z
D
 
'
,
 

	
	
	
'
N
I
O
'
 
=
>
 
'
N
i
c
a
r
a
g
u
a
n
 
C
o
r
d
o
b
a
 
O
r
o
 
N
I
O
 
'
,
 

	
	
	
'
N
G
N
'
 
=
>
 
'
N
i
g
e
r
i
a
n
 
N
a
i
r
a
 
N
G
N
 
'
,
 

	
	
	
'
K
P
W
'
 
=
>
 
'
N
o
r
t
h
 
K
o
r
e
a
n
 
W
o
n
 
K
P
W
 
'
,
 

	
	
	
'
N
O
K
'
 
=
>
 
'
N
o
r
w
e
g
i
a
n
 
K
r
o
n
e
r
 
N
O
K
 
'
,
 

	
	
	
'
O
M
R
'
 
=
>
 
'
O
m
a
n
i
 
R
i
a
l
 
O
M
R
 
'
,
 

	
	
	
'
P
K
R
'
 
=
>
 
'
P
a
k
i
s
t
a
n
 
R
u
p
e
e
 
P
K
R
 
'
,
 

	
	
	
'
P
A
B
'
 
=
>
 
'
P
a
n
a
m
a
n
i
a
n
 
B
a
l
b
o
a
 
P
A
B
 
'
,
 

	
	
	
'
P
G
K
'
 
=
>
 
'
P
a
p
u
a
 
N
e
w
 
G
u
i
n
e
a
 
K
i
n
a
 
P
G
K
 
'
,
 

	
	
	
'
P
Y
G
'
 
=
>
 
'
P
a
r
a
g
u
a
y
 
G
u
a
r
a
n
i
 
P
Y
G
 
'
,
 

	
	
	
'
P
E
N
'
 
=
>
 
'
P
e
r
u
v
i
a
n
 
N
e
u
e
v
o
 
S
o
l
 
P
E
N
 
'
,
 

	
	
	
'
P
H
P
'
 
=
>
 
'
P
h
i
l
i
p
p
i
n
e
 
P
e
s
o
 
P
H
P
 
'
,
 

	
	
	
'
P
L
N
'
 
=
>
 
'
P
o
l
i
s
h
 
Z
l
o
t
y
 
P
L
N
 
'
,
 

	
	
	
'
Q
A
R
'
 
=
>
 
'
Q
a
t
a
r
i
 
R
i
a
l
 
Q
A
R
 
'
,
 

	
	
	
'
R
O
N
'
 
=
>
 
'
R
o
m
a
n
i
a
n
 
N
e
w
 
L
e
u
 
R
O
N
 
'
,
 

	
	
	
'
R
U
B
'
 
=
>
 
'
R
u
s
s
i
a
n
 
R
o
u
b
l
e
 
R
U
B
 
'
,
 

	
	
	
'
W
S
T
'
 
=
>
 
'
S
a
m
o
a
n
 
T
a
l
a
 
W
S
T
 
'
,
 

	
	
	
'
S
T
D
'
 
=
>
 
'
S
a
o
 
T
o
m
e
 
a
n
d
 
P
r
i
n
c
i
p
e
 
D
o
b
r
a
 
S
T
D
 
'
,
 

	
	
	
'
S
A
R
'
 
=
>
 
'
S
a
u
d
i
 
R
i
y
a
l
 
S
A
R
 
'
,
 

	
	
	
'
S
C
R
'
 
=
>
 
'
S
e
y
c
h
e
l
l
e
s
 
R
u
p
e
e
 
S
C
R
 
'
,
 

	
	
	
'
S
L
L
'
 
=
>
 
'
S
i
e
r
r
a
 
L
e
o
n
e
 
L
e
o
n
e
 
S
L
L
 
'
,
 

	
	
	
'
S
G
D
'
 
=
>
 
'
S
i
n
g
a
p
o
r
e
 
D
o
l
l
a
r
 
S
G
D
 
'
,
 

	
	
	
'
L
K
R
'
 
=
>
 
'
S
r
i
 
L
a
n
k
a
 
R
u
p
e
e
 
L
K
R
 
'
,
 

	
	
	
'
S
B
D
'
 
=
>
 
'
S
o
l
o
m
o
n
 
I
s
l
a
n
d
s
 
D
o
l
l
a
r
 
S
B
D
 
'
,
 

	
	
	
'
S
O
S
'
 
=
>
 
'
S
o
m
a
l
i
 
S
c
h
i
l
l
i
n
g
 
S
O
S
 
'
,
 

	
	
	
'
Z
A
R
'
 
=
>
 
'
S
o
u
t
h
 
A
f
r
i
c
a
n
 
R
a
n
d
 
Z
A
R
 
'
,
 

	
	
	
'
S
H
P
'
 
=
>
 
'
S
t
.
 
H
e
l
e
n
a
 
P
o
u
n
d
 
S
H
P
 
'
,
 

	
	
	
'
S
D
P
'
 
=
>
 
'
S
u
d
a
n
e
s
e
 
P
o
u
n
d
 
S
D
P
 
'
,
 

	
	
	
'
S
Z
L
'
 
=
>
 
'
S
w
a
z
i
l
a
n
d
 
L
i
l
a
n
g
e
n
i
 
S
Z
L
 
'
,
 

	
	
	
'
S
E
K
'
 
=
>
 
'
S
w
e
d
i
s
h
 
K
r
o
n
a
 
S
E
K
 
'
,
 

	
	
	
'
C
H
F
'
 
=
>
 
'
S
w
i
s
s
 
F
r
a
n
c
 
C
H
F
 
'
,
 

	
	
	
'
S
Y
P
'
 
=
>
 
'
S
y
r
i
a
n
 
P
o
u
n
d
 
S
Y
P
 
'
,
 

	
	
	
'
T
W
D
'
 
=
>
 
'
T
a
i
w
a
n
 
D
o
l
l
a
r
 
T
W
D
 
'
,
 

	
	
	
'
T
H
B
'
 
=
>
 
'
T
h
a
i
 
B
a
h
t
 
T
H
B
 
'
,
 

	
	
	
'
T
J
S
'
 
=
>
 
'
T
a
j
i
k
i
s
t
a
n
 
S
o
m
o
n
i
 
T
J
S
 
'
,
 

	
	
	
'
T
O
P
'
 
=
>
 
'
T
o
n
g
a
n
 
P
a
\
'
a
n
g
a
 
T
O
P
 
'
,
 

	
	
	
'
T
T
D
'
 
=
>
 
'
T
r
i
n
i
d
a
d
 
a
n
d
 
T
o
b
a
g
o
 
D
o
l
l
a
r
 
T
T
D
 
'
,
 

	
	
	
'
T
N
D
'
 
=
>
 
'
T
u
n
i
s
i
a
n
 
D
i
n
a
r
 
T
N
D
 
'
,
 

	
	
	
'
T
R
Y
'
 
=
>
 
'
T
u
r
k
i
s
h
 
L
i
r
a
 
T
R
Y
 
'
,
 

	
	
	
'
T
Z
S
'
 
=
>
 
'
T
a
n
z
a
n
i
a
n
 
S
h
i
l
l
i
n
g
 
T
Z
S
 
'
,
 

	
	
	
'
U
S
D
'
 
=
>
 
'
U
S
 
D
o
l
l
a
r
 
U
S
D
 
'
,
 

	
	
	
'
U
G
X
'
 
=
>
 
'
U
g
a
n
d
a
 
S
c
h
i
l
l
i
n
g
 
U
G
X
 
'
,
 

	
	
	
'
U
A
H
'
 
=
>
 
'
U
k
r
a
i
n
e
 
H
r
y
v
n
 
U
A
H
 
i
a
 
'
,
 

	
	
	
'
U
Y
P
'
 
=
>
 
'
U
r
u
g
u
a
y
a
n
 
P
e
s
o
 
U
Y
P
 
'
,
 

	
	
	
'
V
U
V
'
 
=
>
 
'
V
a
n
u
a
t
u
 
V
a
t
u
 
V
U
V
 
'
,
 

	
	
	
'
V
E
F
'
 
=
>
 
'
V
e
n
e
z
u
e
l
a
n
 
B
o
l
i
v
a
r
 
V
E
F
 
'
,
 

	
	
	
'
V
N
D
'
 
=
>
 
'
V
i
e
t
n
a
m
e
s
e
 
D
o
n
 
V
N
D
 
g
'
,
 

	
	
	
'
Z
M
K
'
 
=
>
 
'
Z
a
m
b
i
a
n
 
K
w
a
c
h
a
 
Z
M
K
 
'
,
 

	
	
	
'
Z
W
D
'
 
=
>
 
'
Z
i
m
b
a
b
w
e
 
D
o
l
l
a
r
 
Z
W
D
 
'

	
	
	
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
u
n
t
r
y
_
c
o
d
e
s
_
t
o
_
c
u
r
r
e
n
c
y
_
c
o
d
e
s
 
=
 
a
r
r
a
y
(

	
	
	
'
A
F
'
 
=
>
 
'
A
F
A
'
,
 

	
	
	
'
A
L
'
 
=
>
 
'
A
L
L
'
,
 

	
	
	
'
A
Z
'
 
=
>
 
'
A
Z
N
'
,
 

	
	
	
'
A
O
'
 
=
>
 
'
A
O
N
'
,
 

	
	
	
'
A
M
'
 
=
>
 
'
A
M
D
'
,
 

	
	
	
/
/
'
A
N
G
'
=
>
'
A
N
G
 
(
N
e
t
h
e
r
l
a
n
d
s
)
 
A
n
t
i
l
l
i
a
n
 
G
u
i
l
d
e
r
'
,
 
/
/
 
N
o
 
i
n
f
o

	
	
	
'
A
E
'
 
=
>
 
'
A
E
D
'
,
 

	
	
	
'
A
R
'
 
=
>
 
'
A
R
S
'
,
 

	
	
	
'
A
W
'
 
=
>
 
'
A
W
G
'
,
 

	
	
	
'
A
U
'
 
=
>
 
'
A
U
D
'
,
 

	
	
	
'
B
S
'
 
=
>
 
'
B
S
D
'
,
 

	
	
	
'
B
H
'
 
=
>
 
'
B
H
D
'
,
 

	
	
	
'
B
D
'
 
=
>
 
'
B
D
T
'
,
 

	
	
	
'
B
B
'
 
=
>
 
'
B
B
D
'
,
 

	
	
	
'
B
Z
'
 
=
>
 
'
B
Z
D
'
,
 

	
	
	
'
B
M
'
 
=
>
 
'
B
M
D
'
,
 

	
	
	
'
B
T
'
 
=
>
 
'
B
T
N
'
,
 

	
	
	
'
B
O
'
 
=
>
 
'
B
O
B
'
,
 

	
	
	
'
B
W
'
 
=
>
 
'
B
W
P
'
,
 

	
	
	
'
B
R
'
 
=
>
 
'
B
R
L
'
,
 

	
	
	
'
B
N
'
 
=
>
 
'
B
N
D
'
,
 

	
	
	
'
B
G
'
 
=
>
 
'
B
G
N
'
,
 

	
	
	
'
B
I
'
 
=
>
 
'
B
I
F
'
,
 

	
	
	
'
X
B
T
'
 
=
>
 
'
B
T
C
'
,
 

	
	
	
'
K
H
'
 
=
>
 
'
K
H
R
'
,
 

	
	
	
'
C
A
'
 
=
>
 
'
C
A
D
'
,
 

	
	
	
'
C
V
'
 
=
>
 
'
C
V
E
'
,
 

	
	
	
'
K
Y
'
 
=
>
 
'
K
Y
D
'
,
 

	
	
	
'
C
H
'
 
=
>
 
'
C
H
F
'
,
 

	
	
	
'
C
L
'
 
=
>
 
'
C
L
P
'
,
 

	
	
	
'
C
N
'
 
=
>
 
'
C
N
Y
'
,
 

	
	
	
'
C
O
'
 
=
>
 
'
C
O
P
'
,
 

	
	
	
'
C
Z
'
 
=
>
 
'
C
Z
K
'
,
 

	
	
	
'
K
M
'
 
=
>
 
'
K
M
F
'
,
 

	
	
	
'
C
G
'
 
=
>
 
'
X
A
F
'
,
 

	
	
	
'
C
D
'
 
=
>
 
'
X
A
F
'
,
 

	
	
	
'
C
R
'
 
=
>
 
'
C
R
C
'
,
 

	
	
	
'
H
R
'
 
=
>
 
'
H
R
K
'
,
 

	
	
	
'
C
U
'
 
=
>
 
'
C
U
P
'
,
 

	
	
	
'
D
K
'
 
=
>
 
'
D
K
K
'
,
 

	
	
	
'
D
J
'
 
=
>
 
'
D
J
F
'
,
 

	
	
	
'
D
O
'
 
=
>
 
'
D
O
P
'
,
 

	
	
	
'
D
Z
'
 
=
>
 
'
D
Z
D
'
,
 

	
	
	
'
E
G
'
 
=
>
 
'
E
G
P
'
,
 

	
	
	
'
S
V
'
 
=
>
 
'
S
V
C
'
,
 

	
	
	
'
E
T
'
 
=
>
 
'
E
T
B
'
,
 

	
	
	
'
F
K
'
 
=
>
 
'
F
K
P
'
,
 

	
	
	
'
F
J
'
 
=
>
 
'
F
J
D
'
,
 

	
	
	
'
G
B
'
 
=
>
 
'
G
B
P
'
,
 

	
	
	
'
U
K
'
 
=
>
 
'
G
B
P
'
,
 

	
	
	
'
G
M
'
 
=
>
 
'
G
M
D
'
,
 

	
	
	
'
G
H
'
 
=
>
 
'
G
H
C
'
,
 

	
	
	
'
G
I
'
 
=
>
 
'
G
I
P
'
,
 

	
	
	
'
G
T
'
 
=
>
 
'
G
T
Q
'
,
 

	
	
	
'
G
N
'
 
=
>
 
'
G
N
F
'
,
 

	
	
	
'
G
Y
'
 
=
>
 
'
G
Y
D
'
,
 

	
	
	
'
H
T
'
 
=
>
 
'
H
T
G
'
,
 

	
	
	
'
H
N
'
 
=
>
 
'
H
N
L
'
,
 

	
	
	
'
H
K
'
 
=
>
 
'
H
K
D
'
,
 

	
	
	
'
H
U
'
 
=
>
 
'
H
U
F
'
,
 

	
	
	
'
I
S
'
 
=
>
 
'
I
S
K
'
,
 

	
	
	
'
I
N
'
 
=
>
 
'
I
N
R
'
,
 

	
	
	
'
I
D
'
 
=
>
 
'
I
D
R
'
,
 

	
	
	
'
I
R
'
 
=
>
 
'
I
R
R
'
,
 

	
	
	
'
I
Q
'
 
=
>
 
'
I
Q
D
'
,
 

	
	
	
'
I
L
'
 
=
>
 
'
I
L
S
'
,
 

	
	
	
'
J
M
'
 
=
>
 
'
J
M
D
'
,
 

	
	
	
'
J
P
'
 
=
>
 
'
J
P
Y
'
,
 

	
	
	
'
J
O
'
 
=
>
 
'
J
O
D
'
,
 

	
	
	
'
K
Z
'
 
=
>
 
'
K
Z
T
'
,
 

	
	
	
'
K
E
'
 
=
>
 
'
K
E
S
'
,
 

	
	
	
'
K
R
'
 
=
>
 
'
K
R
W
'
,
 

	
	
	
'
K
W
'
 
=
>
 
'
K
W
D
'
,
 

	
	
	
'
L
A
'
 
=
>
 
'
L
A
K
'
,
 

	
	
	
'
L
B
'
 
=
>
 
'
L
B
P
'
,
 

	
	
	
'
L
K
'
 
=
>
 
'
L
K
R
'
,
 

	
	
	
'
L
R
'
 
=
>
 
'
L
R
D
'
,
 

	
	
	
'
L
S
'
 
=
>
 
'
L
S
L
'
,
 

	
	
	
'
L
T
'
 
=
>
 
'
L
T
L
'
,
 

	
	
	
'
L
Y
'
 
=
>
 
'
L
Y
D
'
,
 

	
	
	
'
L
V
'
 
=
>
 
'
L
V
L
'
,
 

	
	
	
'
M
D
'
 
=
>
 
'
M
D
L
'
,
 

	
	
	
'
M
O
'
 
=
>
 
'
M
O
P
'
,
 

	
	
	
'
M
G
'
 
=
>
 
'
M
G
A
'
,
 

	
	
	
'
M
W
'
 
=
>
 
'
M
W
K
'
,
 

	
	
	
'
M
Y
'
 
=
>
 
'
M
Y
R
'
,
 

	
	
	
'
M
V
'
 
=
>
 
'
M
V
R
'
,
 

	
	
	
'
M
R
'
 
=
>
 
'
M
R
O
'
,
 

	
	
	
'
M
U
'
 
=
>
 
'
M
U
R
'
,
 

	
	
	
'
M
X
'
 
=
>
 
'
M
X
N
'
,
 

	
	
	
'
M
N
'
 
=
>
 
'
M
N
T
'
,
 

	
	
	
'
M
A
'
 
=
>
 
'
M
A
D
'
,
 

	
	
	
'
M
Z
'
 
=
>
 
'
M
Z
M
'
,
 

	
	
	
'
M
M
'
 
=
>
 
'
M
M
K
'
,
 

	
	
	
/
/
 
'
A
N
G
'
=
>
'
A
N
G
 
N
e
t
h
e
r
l
a
n
d
s
 
A
n
t
i
l
l
i
a
n
 
G
u
i
l
d
e
r
'
,
 
/
/
 
N
o
 
i
n
f
o

	
	
	
'
N
A
'
 
=
>
 
'
N
A
D
'
,
 

	
	
	
'
N
P
'
 
=
>
 
'
N
P
R
'
,
 

	
	
	
'
N
Z
'
 
=
>
 
'
N
Z
D
'
,
 

	
	
	
'
N
I
'
 
=
>
 
'
N
I
O
'
,
 

	
	
	
'
N
G
'
 
=
>
 
'
N
G
N
'
,
 

	
	
	
'
K
P
'
 
=
>
 
'
K
P
W
'
,
 

	
	
	
'
N
O
'
 
=
>
 
'
N
O
K
'
,
 

	
	
	
'
O
M
'
 
=
>
 
'
O
M
R
'
,
 

	
	
	
'
P
K
'
 
=
>
 
'
P
K
R
'
,
 

	
	
	
'
P
A
'
 
=
>
 
'
P
A
B
'
,
 

	
	
	
'
P
G
'
 
=
>
 
'
P
G
K
'
,
 

	
	
	
'
P
Y
'
 
=
>
 
'
P
Y
G
'
,
 

	
	
	
'
P
E
'
 
=
>
 
'
P
E
N
'
,
 

	
	
	
'
P
H
'
 
=
>
 
'
P
H
P
'
,
 

	
	
	
'
P
L
'
 
=
>
 
'
P
L
N
'
,
 

	
	
	
'
Q
A
'
 
=
>
 
'
Q
A
R
'
,
 

	
	
	
'
R
O
'
 
=
>
 
'
R
O
N
'
,
 

	
	
	
'
R
U
'
 
=
>
 
'
R
U
B
'
,
 

	
	
	
'
S
T
'
 
=
>
 
'
S
T
D
'
,
 

	
	
	
'
S
A
'
 
=
>
 
'
S
A
R
'
,
 

	
	
	
'
S
C
'
 
=
>
 
'
S
C
R
'
,
 

	
	
	
'
S
L
'
 
=
>
 
'
S
L
L
'
,
 

	
	
	
'
S
G
'
 
=
>
 
'
S
G
D
'
,
 

	
	
	
'
S
B
'
 
=
>
 
'
S
B
D
'
,
 

	
	
	
'
S
O
'
 
=
>
 
'
S
O
S
'
,
 

	
	
	
'
Z
A
'
 
=
>
 
'
Z
A
R
'
,
 

	
	
	
'
S
H
'
 
=
>
 
'
S
H
P
'
,
 

	
	
	
'
S
D
'
 
=
>
 
'
S
D
P
'
,
 

	
	
	
'
S
Z
'
 
=
>
 
'
S
Z
L
'
,
 

	
	
	
'
S
E
'
 
=
>
 
'
S
E
K
'
,
 

	
	
	
'
S
Y
'
 
=
>
 
'
S
Y
P
'
,
 

	
	
	
'
T
W
'
 
=
>
 
'
T
W
D
'
,
 

	
	
	
'
T
H
'
 
=
>
 
'
T
H
B
'
,
 

	
	
	
'
T
J
'
 
=
>
 
'
T
J
S
'
,
 

	
	
	
'
T
O
'
 
=
>
 
'
T
O
P
'
,
 

	
	
	
'
T
T
'
 
=
>
 
'
T
T
D
'
,
 

	
	
	
'
T
N
'
 
=
>
 
'
T
N
D
'
,
 

	
	
	
'
T
R
'
 
=
>
 
'
T
R
Y
'
,
 

	
	
	
'
T
Z
'
 
=
>
 
'
T
Z
S
'
,
 

	
	
	
'
U
S
'
 
=
>
 
'
U
S
D
'
,
 

	
	
	
'
U
G
'
 
=
>
 
'
U
G
X
'
,
 

	
	
	
'
U
A
'
 
=
>
 
'
U
A
H
'
,
 

	
	
	
'
U
Y
'
 
=
>
 
'
U
Y
P
'
,
 

	
	
	
'
V
U
'
 
=
>
 
'
V
U
V
'
,
 

	
	
	
'
V
E
'
 
=
>
 
'
V
E
F
'
,
 

	
	
	
'
V
N
'
 
=
>
 
'
V
N
D
'
,
 

	
	
	
'
W
S
'
 
=
>
 
'
W
S
T
'
,
 

	
	
	
/
/
 
'
X
O
F
'
=
>
'
X
O
F
 
B
e
n
i
n
:
 
C
F
A
 
F
r
a
n
c
 
B
C
E
A
O
'
,

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
'
X
O
F
'
=
>
'
X
O
F
 
C
F
A
 
F
r
a
n
c
 
B
C
E
A
O
'
,

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
'
X
A
F
'
=
>
'
X
A
F
 
C
F
A
 
F
r
a
n
c
 
B
E
A
C
'
,

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
'
X
A
F
'
=
>
'
X
A
F
 
C
F
A
 
F
r
a
n
c
 
B
E
A
C
'
,

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
'
X
P
F
'
=
>
'
X
P
F
 
F
r
a
n
c
 
P
a
c
i
f
i
q
u
e
'
,

	
	
	
'
Z
M
'
 
=
>
 
'
Z
M
K
'
,
 

	
	
	
'
Z
W
'
 
=
>
 
'
Z
W
D
'
,
 

	
	
	
'
A
T
'
 
=
>
 
'
E
U
R
'
,
 

	
	
	
'
B
E
'
 
=
>
 
'
E
U
R
'
,
 

	
	
	
'
C
Y
'
 
=
>
 
'
E
U
R
'
,
 

	
	
	
'
E
E
'
 
=
>
 
'
E
U
R
'
,
 

	
	
	
'
F
I
'
 
=
>
 
'
E
U
R
'
,
 

	
	
	
'
F
R
'
 
=
>
 
'
E
U
R
'
,
 

	
	
	
'
D
E
'
 
=
>
 
'
E
U
R
'
,
 

	
	
	
'
G
R
'
 
=
>
 
'
E
U
R
'
,

	
	
	
'
I
E
'
 
=
>
 
'
E
U
R
'
,
 

	
	
	
'
I
T
'
 
=
>
 
'
E
U
R
'
,
 

	
	
	
'
L
U
'
 
=
>
 
'
E
U
R
'
,
 

	
	
	
'
M
T
'
 
=
>
 
'
E
U
R
'
,
 

	
	
	
'
N
L
'
 
=
>
 
'
E
U
R
'
,
 

	
	
	
'
P
T
'
 
=
>
 
'
E
U
R
'
,
 

	
	
	
'
S
K
'
 
=
>
 
'
E
U
R
'
,
 

	
	
	
'
S
I
'
 
=
>
 
'
E
U
R
'
,
 

	
	
	
'
E
S
'
 
=
>
 
'
E
U
R
'

	
	
	
)
;


 
 
 
 
 
 
 
 
/
/
 
S
o
m
e
 
o
f
 
t
h
e
s
e
 
s
y
m
b
o
l
s
 
o
r
 
t
h
e
i
r
 
p
r
e
/
p
o
s
t
 
a
s
s
i
g
n
m
e
n
t
s
 
m
a
y
 
b
e
 
w
r
o
n
g
,
 
i
f
 
s
o
,
 
p
l
e
a
s
e
 
e
m
a
i
l
 
s
u
p
p
o
r
t
@
j
o
m
r
e
s
.
n
e
t
 
a
n
d
 
I
'
l
l
 
p
u
t
 
t
h
e
m
 
r
i
g
h
t

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
y
m
b
o
l
s
 
=
 
a
r
r
a
y
(

	
	
	
'
A
F
A
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Ø
‹
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
A
L
L
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
L
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
A
Z
N
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
'
,
 
'
p
o
s
t
'
 
=
>
 
'
&
n
b
s
p
;
A
Z
N
'
)
,
 

	
	
	
'
D
Z
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Ø
¯
Ø
¬
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
A
O
N
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
K
z
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
A
M
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Ö

'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
A
N
G
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
N
A
Æ
’
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
A
E
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Ø
¯
.
Ø
¥
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
A
R
S
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
A
W
G
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
A
f
l
.
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
A
U
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
B
S
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
B
H
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
.
Ø
¯
.
Ø
¨
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
B
D
T
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
à
§
³
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
B
B
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
B
Z
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
B
Z
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
X
O
F
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
C
F
A
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
B
M
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
B
T
N
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
N
u
.
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
B
O
B
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
B
s
.
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
B
W
P
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
P
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
B
R
L
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
R
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
G
B
P
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Â
£
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
B
N
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
B
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
B
G
N
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Ð
»
Ð
²
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
B
I
F
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
F
B
u
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
B
T
C
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
à
¸
¿
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
X
A
F
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
F
C
F
A
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
K
H
R
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
r
i
e
l
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
C
A
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
C
V
E
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
K
Y
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
C
L
P
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
C
N
Y
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Â
¥
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
C
O
P
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
C
Z
K
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
'
,
 
'
p
o
s
t
'
 
=
>
 
'
 
K
Ä

'
)
,
 

	
	
	
'
K
M
F
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
C
F
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
C
R
C
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
â
‚
¡
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
H
R
K
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
k
n
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
C
U
P
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
M
N
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
D
K
K
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
'
,
 
'
p
o
s
t
'
 
=
>
 
'
k
r
'
)
,
 

	
	
	
'
D
J
F
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
F
d
j
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
D
O
P
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
R
D
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
E
U
R
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
'
,
 
'
p
o
s
t
'
 
=
>
 
'
â
‚
¬
'
)
,
 

	
	
	
'
E
G
P
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Â
£
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
S
V
C
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
E
E
K
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
'
,
 
'
p
o
s
t
'
 
=
>
 
'
k
r
'
)
,
 

	
	
	
'
E
T
B
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
B
r
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
F
K
P
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Â
£
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
F
J
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
G
M
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
D
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
G
H
C
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Â
¢
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
G
I
P
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Â
£
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
G
T
Q
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Q
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
G
N
F
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
F
G
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
G
Y
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
H
T
G
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
G
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
H
N
L
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
L
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
H
K
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
H
K
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
H
U
F
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
F
t
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
I
S
K
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
'
,
 
'
p
o
s
t
'
 
=
>
 
'
k
r
'
)
,
 

	
	
	
'
I
N
R
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
R
s
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
I
D
R
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
R
p
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
I
R
R
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
ï
·
¼
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
I
Q
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Ø
¹
.
Ø
¯
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
I
L
S
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
â
‚
ª
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
J
M
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
J
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
J
P
Y
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Â
¥
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
J
O
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
J
D
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
K
Z
T
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Ð
»
Ð
²
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
K
E
S
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
K
S
h
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
K
R
W
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
â
‚
©
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
K
W
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Ø
¯
.
Ù
ƒ
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
L
A
K
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
â
‚
­
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
L
V
L
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
L
s
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
L
B
P
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Â
£
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
L
S
L
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
M
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
L
R
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
L
Y
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Ù
„
.
Ø
¯
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
L
T
L
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
L
t
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
M
O
P
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
M
O
P
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
M
G
A
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
A
r
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
M
W
K
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
M
K
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
M
Y
R
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
R
M
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
M
V
R
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
.
Þ
ƒ
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
M
R
O
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
U
M
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
M
U
R
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
R
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
M
X
N
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
M
N
T
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
â
‚
®
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
M
A
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Ø
¯
.
Ù
…
.
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
M
Z
M
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
M
T
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
M
M
K
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
K
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
A
N
G
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
N
A
Æ
’
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
N
A
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
N
P
R
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
à
¤
°
à
¥
‚
.
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
N
Z
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
N
I
O
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
C
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
N
G
N
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
â
‚
¦
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
K
P
W
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
â
‚
©
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
N
O
K
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
'
,
 
'
p
o
s
t
'
 
=
>
 
'
k
r
'
)
,
 

	
	
	
'
O
M
R
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
ï
·
¼
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
P
K
R
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
R
s
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
P
A
B
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
B
/
.
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
P
G
K
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
K
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
P
Y
G
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
G
s
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
P
E
N
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
S
/
.
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
P
H
P
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
P
h
p
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
P
L
N
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
'
,
 
'
p
o
s
t
'
 
=
>
 
'
z
Å
‚
'
)
,
 

	
	
	
'
Q
A
R
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Ø
±
.
Ù
‚
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
R
O
N
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
'
,
 
'
p
o
s
t
'
 
=
>
 
'
l
e
i
'
)
,
 

	
	
	
'
R
U
B
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Ñ
€
Ñ
ƒ
Ð
±
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
W
S
T
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
W
S
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
S
T
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
D
b
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
S
A
R
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
ï
·
¼
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
S
C
R
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
S
R
e
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
S
L
L
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
L
e
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
S
G
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
S
B
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
S
I
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
S
O
S
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
S
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
Z
A
R
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
R
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
L
K
R
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
R
s
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
S
H
P
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Â
£
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
S
D
P
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Ø
¬
Ù
†
Ù
Š
Ù
‡
 
Ø
³
Ù
ˆ
Ø
¯
Ø
§
Ù
†
Ù
Š
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
S
Z
L
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
E
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
S
E
K
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
'
,
 
'
p
o
s
t
'
 
=
>
 
'
k
r
'
)
,
 

	
	
	
'
C
H
F
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
C
H
F
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
S
Y
P
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Â
£
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
T
W
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
N
T
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
T
H
B
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
'
,
 
'
p
o
s
t
'
 
=
>
 
'
à
¸
¿
'
)
,
 

	
	
	
'
T
J
S
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
'
,
 
'
p
o
s
t
'
 
=
>
 
'
T
J
S
'
)
,
 

	
	
	
'
T
O
P
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
T
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
T
T
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
T
N
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Ø
¯
.
Ø
ª
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
T
R
Y
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
T
L
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
T
Z
S
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
S
h
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
U
S
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
U
G
X
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
U
S
h
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
U
A
H
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
â
‚
´
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
U
Y
P
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
A
E
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Ø
¯
.
Ø
¥
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
V
U
V
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
V
t
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
V
E
F
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
B
s
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
V
N
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
â
‚
«
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
Z
M
K
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
Z
K
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
Z
W
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
$
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
Z
W
D
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
L
e
i
'
,
 
'
p
o
s
t
'
 
=
>
 
'
'
)
,
 

	
	
	
'
X
P
F
'
 
=
>
 
a
r
r
a
y
(
'
p
r
e
'
 
=
>
 
'
'
,
 
'
p
o
s
t
'
 
=
>
 
'
F
'
)

	
	
	
)
;

 
 
 
 
}

	

	
p
u
b
l
i
c
 
s
t
a
t
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
I
n
s
t
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
a
k
e
C
o
d
e
s
D
r
o
p
d
o
w
n
(
$
c
o
d
e
 
=
 
'
'
,
 
$
g
l
o
b
a
l
 
=
 
f
a
l
s
e
,
 
$
i
n
p
u
t
_
n
a
m
e
 
=
 
'
'
)

 
 
 
 
{

	
	
/
/
s
e
l
e
c
t
e
d
 
c
u
r
r
e
n
c
y
 
c
o
d
e

	
	
i
f
 
(
$
c
o
d
e
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
d
e
 
=
 
s
t
r
t
o
u
p
p
e
r
(
t
r
i
m
(
$
c
o
d
e
)
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
/
/
i
n
p
u
t
 
n
a
m
e

	
	
i
f
 
(
!
$
g
l
o
b
a
l
)
 
{

	
	
	
i
f
 
(
$
i
n
p
u
t
_
n
a
m
e
 
=
=
 
'
'
)
 
{

	
	
	
	
$
t
h
i
s
-
>
i
n
p
u
t
_
n
a
m
e
 
=
 
'
c
f
g
_
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e
'
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
t
h
i
s
-
>
i
n
p
u
t
_
n
a
m
e
 
=
 
$
i
n
p
u
t
_
n
a
m
e
;

	
	
	
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
p
u
t
_
n
a
m
e
 
=
 
'
c
f
g
_
g
l
o
b
a
l
C
u
r
r
e
n
c
y
C
o
d
e
'
;

 
 
 
 
 
 
 
 
}

	
	

 
 
 
 
 
 
 
 
/
/
 
W
e
 
n
e
e
d
 
t
o
 
l
i
m
i
t
 
t
h
e
 
a
v
a
i
l
a
b
l
e
 
c
u
r
r
e
n
c
y
 
c
o
d
e
s
 
t
o
 
t
h
o
s
e
 
w
h
i
c
h
 
c
a
n
 
b
e
 
c
o
n
v
e
r
t
e
d
.
 
I
f
 
w
e
 
d
o
n
'
t
 
t
h
e
n
 
t
h
e
 
s
h
o
p
p
i
n
g
 
c
a
r
t
 
c
a
l
c
u
l
a
t
i
o
n
s
 
w
i
l
l
 
a
l
l
 
b
e
 
w
r
o
n
g
,
 
s
o
 
w
e
'
l
l
 
u
s
e
 
t
h
e
 
c
o
n
v
e
r
s
i
o
n
 
c
o
d
e
 
c
a
n
 
b
e
 
c
o
n
v
e
r
t
e
d
 
m
e
t
h
o
d
 
t
o
 
c
h
e
c
k
 
t
h
a
t
 
w
e
 
c
a
n
 
u
s
e
 
t
h
e
 
c
u
r
r
e
n
c
y
 
c
o
d
e
.

 
 
 
 
 
 
 
 
/
/
 
W
e
'
l
l
 
l
e
a
v
e
 
t
h
i
s
 
a
s
 
a
 
p
r
o
g
r
a
m
a
t
t
i
c
 
t
h
i
n
g
,
 
a
s
 
t
h
e
 
c
o
d
e
s
 
w
i
l
l
 
c
h
a
n
g
e
 
d
e
p
e
n
d
i
n
g
 
o
n
 
t
h
e
 
c
o
d
e
s
 
t
h
a
t
 
y
a
h
o
o
 
g
i
v
e
 
t
o
 
J
o
m
r
e
s

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
c
u
r
r
e
n
c
y
_
c
o
n
v
e
r
s
i
o
n
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
c
u
r
r
e
n
c
y
_
c
o
n
v
e
r
s
i
o
n
'
)
;


 
 
 
 
 
 
 
 
$
s
i
t
e
C
o
n
f
i
g
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
c
o
n
f
i
g
_
s
i
t
e
_
s
i
n
g
l
e
t
o
n
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;


 
 
 
 
 
 
 
 
$
o
p
t
i
o
n
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
k
s
o
r
t
(
$
t
h
i
s
-
>
c
o
d
e
s
)
;

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
c
o
d
e
s
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
j
o
m
r
e
s
_
c
u
r
r
e
n
c
y
_
c
o
n
v
e
r
s
i
o
n
-
>
t
h
i
s
_
c
o
d
e
_
c
a
n
_
b
e
_
c
o
n
v
e
r
t
e
d
(
$
k
)
 
|
|
 
(
$
j
r
C
o
n
f
i
g
[
 
'
u
s
e
G
l
o
b
a
l
C
u
r
r
e
n
c
y
'
 
]
 
=
=
 
'
0
'
 
&
&
 
$
j
r
C
o
n
f
i
g
[
 
'
u
s
e
_
c
o
n
v
e
r
s
i
o
n
_
f
e
a
t
u
r
e
'
 
]
 
=
=
 
'
0
'
)
 
|
|
 
t
r
i
m
(
$
j
r
C
o
n
f
i
g
[
 
'
o
p
e
n
e
x
c
h
a
n
g
e
r
a
t
e
s
_
a
p
i
_
k
e
y
'
 
]
)
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
k
,
 
$
v
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
o
p
t
i
o
n
s
,
 
$
t
h
i
s
-
>
i
n
p
u
t
_
n
a
m
e
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
t
h
i
s
-
>
c
o
d
e
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
C
o
d
e
(
$
c
o
d
e
 
=
 
'
'
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
d
e
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
d
e
 
=
 
$
t
h
i
s
-
>
c
o
d
e
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

	
	
	
$
c
o
d
e
 
=
 
s
t
r
t
o
u
p
p
e
r
(
t
r
i
m
(
$
c
o
d
e
)
)
;

	
	
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
c
o
d
e
s
[
 
$
c
o
d
e
 
]
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
S
y
m
b
o
l
(
$
c
o
d
e
 
=
 
'
'
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
d
e
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
d
e
 
=
 
$
t
h
i
s
-
>
c
o
d
e
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

	
	
	
$
c
o
d
e
 
=
 
s
t
r
t
o
u
p
p
e
r
(
t
r
i
m
(
$
c
o
d
e
)
)
;

	
	
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
s
y
m
b
o
l
s
[
 
$
c
o
d
e
 
]
;

 
 
 
 
}

}

