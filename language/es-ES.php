
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
#

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
D
E
S
C
'
,
 
'
R
e
s
e
r
v
a
s
 
r
Ã
¡
p
i
d
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
S
H
O
W
P
R
O
F
I
L
E
S
'
,
 
'
M
o
s
t
r
a
r
 
p
e
r
f
i
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
Q
U
I
C
K
_
_
_
_
_
_
D
E
S
C
'
,
 
'
D
e
j
a
d
o
 
e
n
 
b
l
a
n
c
o
 
i
n
t
e
n
c
i
o
n
a
d
a
m
e
n
t
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
G
E
N
E
R
A
L
C
O
N
F
I
G
D
E
S
C
'
,
 
'
C
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
g
e
n
e
r
a
l
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
B
A
C
K
'
,
 
'
A
t
r
Ã
¡
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
Y
E
S
'
,
 
'
S
Ã
­
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
N
O
'
,
 
'
N
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
N
E
W
T
A
R
I
F
F
'
,
 
'
N
u
e
v
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
N
E
W
P
R
O
P
E
R
T
Y
'
,
 
'
N
u
e
v
a
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
N
E
W
G
U
E
S
T
'
,
 
'
H
u
Ã
©
s
p
e
d
 
n
u
e
v
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
S
A
V
E
'
,
 
'
G
u
a
r
d
a
r
'
)
;

/
/
 
V
i
e
w
 
b
o
o
k
i
n
g
s

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
S
U
R
N
A
M
E
'
,
 
'
N
o
m
b
r
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
'
,
 
'
F
e
c
h
a
 
d
e
 
l
l
e
g
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
U
R
E
'
,
 
'
F
e
c
h
a
 
d
e
 
s
a
l
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
B
L
A
N
K
'
,
 
'
B
l
a
n
c
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
A
S
S
I
G
N
U
S
E
R
_
U
S
E
R
N
A
M
E
'
,
 
'
N
o
m
b
r
e
 
d
e
l
 
u
s
u
a
r
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
A
S
S
I
G
N
U
S
E
R
_
A
U
T
H
O
R
I
S
E
D
A
C
C
E
S
S
L
E
V
E
L
'
,
 
'
N
i
v
e
l
 
d
e
 
a
c
c
e
s
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
A
S
S
I
G
N
U
S
E
R
_
U
S
E
R
M
O
D
I
F
I
E
D
M
E
S
A
G
E
'
,
 
'
U
s
u
a
r
i
o
 
m
o
d
i
f
i
c
a
d
o
'
)
;

/
/
 
E
d
i
t
 
b
o
o
k
i
n
g
s

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
A
D
M
I
N
_
T
I
T
L
E
'
,
 
'
T
o
d
a
s
 
l
a
s
 
r
e
s
e
r
v
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
T
I
T
L
E
'
,
 
'
E
d
i
t
a
r
 
r
e
s
e
r
v
a
s
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
A
R
R
I
V
A
L
'
,
 
'
L
l
e
g
a
d
a
s
/
S
a
l
i
d
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
G
U
E
S
T
'
,
 
'
H
u
Ã
©
s
p
e
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
R
O
O
M
'
,
 
'
H
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
P
A
Y
M
E
N
T
'
,
 
'
P
a
g
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
A
R
R
I
V
A
L
F
I
R
S
T
N
A
M
E
_
E
X
P
L
'
,
 
'
N
o
m
b
r
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
A
R
R
I
V
A
L
S
U
R
N
A
M
E
_
E
X
P
L
'
,
 
'
A
p
e
l
l
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
S
P
E
C
I
A
L
R
E
Q
'
,
 
'
R
e
q
u
i
s
i
t
o
s
 
e
s
p
e
c
i
a
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
S
P
E
C
I
A
L
R
E
Q
_
D
I
S
C
L
A
I
M
E
R
'
,
 
'
O
b
s
e
r
v
e
 
p
o
r
 
f
a
v
o
r
 
q
u
e
 
a
l
g
u
n
o
s
 
r
e
q
u
i
s
i
t
o
s
 
e
s
p
e
c
i
a
l
e
s
 
p
u
e
d
e
n
 
i
n
c
u
r
r
i
r
 
e
n
 
r
e
c
a
r
g
o
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
C
A
N
C
E
L
B
O
O
K
I
N
G
'
,
 
'
C
a
n
c
e
l
e
 
l
a
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
H
O
U
S
E
_
E
X
P
L
'
,
 
'
E
l
 
n
Ã
º
m
e
r
o
 
o
 
n
o
m
b
r
e
 
d
e
 
l
a
 
c
a
s
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
S
T
R
E
E
T
_
E
X
P
L
'
,
 
'
C
a
l
l
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
T
O
W
N
_
E
X
P
L
'
,
 
'
C
i
u
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
P
O
S
T
C
O
D
E
_
E
X
P
L
'
,
 
'
C
Ã
³
d
i
g
o
 
 
p
o
s
t
a
l
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
L
A
N
D
L
I
N
E
_
E
X
P
L
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
t
e
l
Ã
©
f
o
n
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
M
O
B
I
L
E
_
E
X
P
L
'
,
 
'
N
Ã
º
m
e
r
o
 
m
Ã
³
v
i
l
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
E
M
A
I
L
_
E
X
P
L
'
,
 
'
D
i
r
e
c
c
i
Ã
³
n
 
e
l
e
c
t
r
Ã
³
n
i
c
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
C
A
N
C
E
L
L
A
T
I
O
N
_
A
L
R
E
A
D
Y
B
O
O
K
E
D
I
N
'
,
 
'
N
o
 
p
u
e
d
e
 
c
a
n
c
e
l
a
r
 
e
s
a
 
r
e
s
e
r
v
a
,
 
p
o
r
q
u
e
 
e
l
 
h
u
Ã
©
s
p
e
d
 
c
o
n
f
i
r
m
Ã
³
 
l
a
 
e
n
t
r
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
C
A
N
C
E
L
L
A
T
I
O
N
_
N
O
D
E
P
O
S
I
T
'
,
 
'
D
e
p
Ã
³
s
i
t
o
 
n
o
 
p
a
g
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
C
A
N
C
E
L
L
A
T
I
O
N
_
B
U
T
T
O
N
'
,
 
'
C
o
n
f
i
r
m
a
r
 
c
a
n
c
e
l
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
C
A
N
C
E
L
L
E
D
'
,
 
'
R
e
s
e
r
v
a
 
c
a
n
c
e
l
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
D
A
Y
S
T
O
A
R
R
I
V
A
L
'
,
 
'
D
Ã
­
a
s
 
p
a
r
a
 
l
l
e
g
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
E
X
P
L
'
,
 
'
T
i
p
o
 
d
e
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
B
L
A
C
K
'
,
 
'
N
e
g
r
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
R
E
C
E
P
T
I
O
N
'
,
 
'
R
e
c
e
p
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
I
N
T
E
R
N
E
T
'
,
 
'
I
n
t
e
r
n
e
t
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
N
A
M
E
'
,
 
'
N
o
m
b
r
e
 
d
e
 
l
a
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
N
U
M
B
E
R
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
l
a
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
F
L
O
O
R
'
,
 
'
P
i
s
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
D
I
S
A
B
L
E
D
'
,
 
'
A
c
c
e
s
o
 
d
e
n
e
g
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
M
A
X
P
E
O
P
L
E
'
,
 
'
M
Ã
¡
x
i
m
o
 
d
e
 
c
l
i
e
n
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
C
L
A
S
S
_
A
B
B
V
'
,
 
'
T
i
p
o
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
C
L
A
S
S
_
D
E
S
C
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
n
 
d
e
 
l
a
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
F
E
A
T
U
R
E
S
_
L
I
S
T
'
,
 
'
L
i
s
t
a
 
d
e
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
s
 
d
e
 
l
a
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
_
P
A
I
D
'
,
 
'
D
e
p
Ã
³
s
i
t
o
 
p
a
g
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
_
P
A
I
D
_
U
P
D
A
T
E
'
,
 
'
I
n
t
r
o
d
u
c
i
r
 
d
e
p
Ã
³
s
i
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
C
O
N
T
R
A
C
T
_
T
O
T
A
L
'
,
 
'
T
o
t
a
l
 
a
 
p
a
g
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
_
R
E
F
'
,
 
'
R
e
f
.
 
d
e
 
D
e
p
Ã
³
s
i
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
B
O
O
K
I
N
G
N
U
M
B
E
R
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
R
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
R
E
Q
U
I
R
E
D
'
,
 
'
D
e
p
Ã
³
s
i
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
S
A
V
E
M
E
S
S
A
G
E
'
,
 
'
D
e
p
Ã
³
s
i
t
o
 
s
a
l
v
a
d
o
'
)
;

/
/
 
E
d
i
t
 
L
a
n
g
u
a
g
e

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
T
I
T
L
E
'
,
 
'
H
a
b
i
t
a
c
i
o
n
e
s
 
d
i
s
p
o
n
i
b
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
P
R
O
P
E
R
T
Y
N
A
M
E
'
,
 
'
P
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
R
O
O
M
T
Y
P
E
'
,
 
'
T
i
p
o
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

/
/
 
D
i
s
p
l
a
y
 
g
u
e
s
t
 
f
o
r
m

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
E
D
I
T
D
E
T
A
I
L
S
'
,
 
'
E
d
i
t
a
r
 
d
e
t
a
l
l
e
s
 
d
e
 
h
u
Ã
©
s
p
e
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
F
I
R
S
T
N
A
M
E
'
,
 
'
N
o
m
b
r
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
S
U
R
N
A
M
E
'
,
 
'
A
p
e
l
l
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
H
O
U
S
E
'
,
 
'
C
a
s
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
S
T
R
E
E
T
'
,
 
'
C
a
l
l
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
T
O
W
N
'
,
 
'
C
i
u
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
P
O
S
T
C
O
D
E
'
,
 
'
C
Ã
³
d
i
g
o
 
P
o
s
t
a
l
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
L
A
N
D
L
I
N
E
'
,
 
'
T
e
l
Ã
©
f
o
n
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
M
O
B
I
L
E
'
,
 
'
M
Ã
³
v
i
l
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
F
A
X
'
,
 
'
F
a
x
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
T
I
T
L
E
'
,
 
'
S
e
l
e
c
c
i
o
n
e
 
u
n
a
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
S
T
A
Y
D
A
Y
S
'
,
 
'
D
Ã
­
a
s
 
d
e
 
e
s
t
a
n
c
i
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
T
O
T
A
L
I
N
V
O
I
C
E
'
,
 
'
T
o
t
a
l
'
)
;

/
/
 
R
o
o
m
s
 
t
a
b

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
I
E
W
R
O
O
M
S
P
R
O
P
E
R
T
Y
C
O
N
F
I
G
_
T
I
T
L
E
'
,
 
'
V
e
a
 
h
a
b
i
t
a
c
i
o
n
e
s
 
y
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
d
e
 
l
a
s
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
T
A
B
_
R
O
O
M
'
,
 
'
H
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
T
A
B
_
R
O
O
M
F
E
A
T
U
R
E
S
'
,
 
'
H
b
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
T
A
B
_
R
O
O
M
T
Y
P
E
S
'
,
 
'
H
b
 
t
i
p
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
T
A
B
_
P
R
O
P
E
R
T
Y
S
'
,
 
'
P
r
o
p
i
e
d
a
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
T
A
B
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
'
,
 
'
P
r
o
p
.
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
L
I
N
K
'
,
 
'
H
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
T
Y
P
E
'
,
 
'
T
i
p
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
N
A
M
E
'
,
 
'
N
o
m
b
r
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
N
U
M
B
E
R
'
,
 
'
N
Ã
º
m
e
r
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
F
L
O
O
R
'
,
 
'
P
i
s
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
M
A
X
P
E
O
P
L
E
'
,
 
'
M
a
x
.
 
d
e
 
p
e
r
s
o
n
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
F
E
A
T
U
R
E
S
'
,
 
'
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
L
I
N
K
T
E
X
T
'
,
 
'
E
d
i
t
a
r
 
e
l
 
a
r
t
Ã
­
c
u
l
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
F
E
A
T
U
R
E
S
_
H
E
A
D
E
R
_
L
I
N
K
'
,
 
'
H
b
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
F
E
A
T
U
R
E
S
_
H
E
A
D
E
R
_
I
N
P
U
T
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
n
 
d
e
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
F
E
A
T
U
R
E
S
_
S
A
V
E
_
I
N
S
E
R
T
'
,
 
'
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
l
 
s
i
t
i
o
 
a
g
r
e
g
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
F
E
A
T
U
R
E
S
_
S
A
V
E
_
U
P
D
A
T
E
'
,
 
'
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
l
 
s
i
t
i
o
 
a
c
t
u
a
l
i
z
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
T
Y
P
E
S
_
H
E
A
D
E
R
_
L
I
N
K
'
,
 
'
H
b
 
t
i
p
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
T
Y
P
E
S
_
H
E
A
D
E
R
_
A
B
B
V
'
,
 
'
T
i
p
o
 
a
b
r
e
v
i
a
t
u
r
a
 
d
e
l
 
s
i
t
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
T
Y
P
E
S
_
H
E
A
D
E
R
_
D
E
S
C
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
n
 
d
e
 
t
i
p
o
 
d
e
 
l
a
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
T
Y
P
E
S
_
S
A
V
E
_
I
N
S
E
R
T
'
,
 
'
T
i
p
o
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
 
a
g
r
e
g
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
T
Y
P
E
S
_
L
I
N
K
T
E
X
T
'
,
 
'
E
d
i
t
a
r
 
a
r
t
Ã
­
c
u
l
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
N
A
M
E
'
,
 
'
N
o
m
b
r
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
S
T
R
E
E
T
'
,
 
'
C
a
l
l
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
T
O
W
N
'
,
 
'
C
i
u
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
R
E
G
I
O
N
'
,
 
'
R
e
g
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
C
O
U
N
T
R
Y
'
,
 
'
P
a
Ã
­
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
P
O
S
T
C
O
D
E
'
,
 
'
C
o
d
i
g
o
 
P
o
s
t
a
l
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
T
E
L
E
P
H
O
N
E
'
,
 
'
T
e
l
f
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
F
A
X
'
,
 
'
F
a
x
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
E
M
A
I
L
'
,
 
'
E
m
a
i
l
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
W
E
B
S
I
T
E
'
,
 
'
W
e
b
s
i
t
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
F
E
A
T
U
R
E
S
'
,
 
'
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
S
A
V
E
_
U
P
D
A
T
E
'
,
 
'
P
r
o
p
i
e
d
a
d
 
a
c
t
u
a
l
i
z
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
_
H
E
A
D
E
R
_
L
I
N
K
'
,
 
'
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
_
A
B
B
V
'
,
 
'
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
a
b
r
e
v
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
_
H
E
A
D
E
R
_
D
E
S
C
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
n
 
c
o
m
p
l
e
t
a
 
d
e
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
_
S
A
V
E
_
U
P
D
A
T
E
'
,
 
'
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
a
c
t
u
a
l
i
z
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
T
I
T
L
E
'
,
 
'
T
a
r
i
f
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
A
T
E
T
I
T
L
E
'
,
 
'
T
Ã
­
t
u
l
o
 
d
e
 
t
a
r
i
f
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
A
T
E
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
V
A
L
I
D
F
R
O
M
'
,
 
'
V
Ã
¡
l
i
d
o
 
d
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
V
A
L
I
D
T
O
'
,
 
'
V
Ã
¡
l
i
d
o
 
h
a
s
t
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
D
A
Y
'
,
 
'
T
a
r
i
f
a
 
p
o
r
 
n
o
c
h
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
M
I
N
D
A
Y
S
'
,
 
'
D
i
a
s
 
m
Ã
­
n
i
m
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
M
A
X
D
A
Y
S
'
,
 
'
D
i
a
s
 
m
Ã
¡
x
i
m
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
M
I
N
P
E
O
P
L
E
'
,
 
'
P
e
r
s
o
n
a
s
 
m
Ã
­
n
i
m
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
M
A
X
P
E
O
P
L
E
'
,
 
'
P
e
r
s
o
n
a
s
 
m
Ã
¡
x
i
m
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
C
L
A
S
S
'
,
 
'
T
i
p
o
 
d
e
 
l
a
 
H
b
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
I
G
N
O
R
E
P
P
N
'
,
 
'
I
g
n
o
r
a
r
 
P
P
P
N
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
A
L
L
O
W
W
E
'
,
 
'
P
e
r
m
i
t
i
r
 
f
i
n
e
s
 
d
e
 
s
e
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
L
I
N
K
T
E
X
T
'
,
 
'
E
d
i
t
a
r
 
a
r
t
Ã
­
c
u
l
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
L
I
N
K
T
E
X
T
C
L
O
N
E
'
,
 
'
C
o
p
i
a
r
 
a
r
t
Ã
­
c
u
l
o
 
i
d
Ã
©
n
t
i
c
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
D
E
L
E
T
E
D
'
,
 
'
T
a
r
i
f
a
 
b
o
r
r
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
T
I
T
L
E
_
E
D
I
T
'
,
 
'
E
d
i
t
a
r
 
l
a
 
t
a
r
i
f
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
B
O
O
K
I
N
G
S
A
V
E
D
M
E
S
S
A
G
E
'
,
 
'
R
e
s
e
r
v
a
 
g
u
a
r
d
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
B
O
O
K
A
R
O
O
M
'
,
 
'
R
e
s
e
r
v
a
r
 
u
n
a
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
O
O
K
A
G
U
E
S
T
I
N
'
,
 
'
E
n
t
r
a
d
a
 
d
e
 
h
u
Ã
©
s
p
e
d
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
O
O
K
A
G
U
E
S
T
O
U
T
'
,
 
'
S
a
l
i
d
a
 
d
e
 
h
u
Ã
©
s
p
e
d
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
L
I
S
T
B
O
O
K
I
N
G
S
'
,
 
'
L
i
s
t
a
r
 
l
a
s
 
r
e
s
e
r
v
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
H
O
M
E
'
,
 
'
I
 
N
 
I
 
C
 
I
 
O
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
G
U
E
S
T
A
D
M
I
N
'
,
 
'
A
d
m
i
n
i
s
t
r
a
c
i
Ã
³
n
 
d
e
 
h
u
Ã
©
s
p
e
d
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
P
R
O
P
E
R
T
Y
A
D
M
I
N
'
,
 
'
A
d
m
i
n
i
s
t
r
a
c
i
Ã
³
n
 
d
e
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
S
U
B
M
I
T
B
U
T
T
O
N
_
C
H
E
C
K
A
V
A
I
L
A
B
I
L
I
T
Y
'
,
 
'
V
e
r
i
f
i
q
u
e
 
l
a
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
D
I
S
P
G
U
E
S
T
_
F
I
R
S
T
N
A
M
E
'
,
 
'
N
o
m
b
r
e
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
D
I
S
P
G
U
E
S
T
_
S
U
R
N
A
M
E
'
,
 
'
A
p
e
l
l
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
H
O
U
S
E
_
E
X
P
L
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
l
a
 
C
a
s
a
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
S
T
R
E
E
T
_
E
X
P
L
'
,
 
'
C
a
l
l
e
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
T
O
W
N
_
E
X
P
L
'
,
 
'
C
i
u
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
P
O
S
T
C
O
D
E
_
E
X
P
L
'
,
 
'
C
Ã
³
d
i
g
o
 
P
o
s
t
a
l
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
L
A
N
D
L
I
N
E
_
E
X
P
L
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
t
e
l
e
f
o
n
o
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
M
O
B
I
L
E
_
E
X
P
L
'
,
 
'
M
Ã
³
v
i
l
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
N
O
R
O
O
M
S
I
N
R
A
N
G
E
'
,
 
'
N
o
 
h
a
y
 
h
a
b
i
t
a
c
i
o
n
e
s
 
d
i
s
p
o
n
i
b
l
e
s
 
c
a
p
a
c
e
s
 
d
e
 
s
a
t
i
s
f
a
c
e
r
 
l
o
s
 
p
a
r
Ã
¡
m
e
t
r
o
s
 
e
s
p
e
c
i
f
i
c
a
d
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
B
O
O
K
I
N
G
M
A
D
E
'
,
 
'
<
c
e
n
t
e
r
>
G
r
a
c
i
a
s
 
p
o
r
 
h
a
c
e
r
 
s
u
 
r
e
s
e
r
v
a
 
c
o
n
 
n
o
s
o
t
r
o
s
.
 
E
s
p
e
r
a
m
o
s
 
q
u
e
 
u
s
t
e
d
 
g
o
c
e
 
d
e
 
s
u
 
p
e
r
m
a
n
e
n
c
i
a
.
<
b
r
>
<
b
r
>
 
<
b
>
P
o
r
 
f
a
v
o
r
,
 
n
o
t
e
 
q
u
e
 
e
s
t
o
 
e
s
 
s
Ã
³
l
o
 
u
n
a
 
 
r
e
s
e
r
v
a
 
p
r
e
l
i
m
i
n
a
r
,
 
y
 
n
o
 
s
e
r
Ã
¡
 
c
o
n
f
i
r
m
a
d
a
 
h
a
s
t
a
 
q
u
e
 
u
s
t
e
d
 
r
e
c
i
b
a
 
s
u
 
e
m
a
i
l
 
d
e
 
c
o
n
f
i
r
m
a
c
i
Ã
³
n
 
p
o
r
 
n
u
e
s
t
r
a
 
p
a
r
t
e
.
<
/
c
e
n
t
e
r
>
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
B
O
O
K
I
N
_
T
I
T
L
E
'
,
 
'
E
n
t
r
a
d
a
 
d
e
 
h
u
Ã
©
s
p
e
d
 
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
B
O
O
K
I
N
_
G
U
E
S
T
B
O
O
K
E
D
I
N
'
,
 
'
H
u
Ã
©
s
p
e
d
 
e
n
t
r
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
B
O
O
K
O
U
T
_
T
I
T
L
E
'
,
 
'
S
a
l
i
d
a
 
d
e
 
h
u
Ã
©
s
p
e
d
 
'
)
;

/
/
 
C
o
n
f
i
g
 
p
a
n
e
l

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
S
U
P
P
L
I
M
E
N
T
S
'
,
 
'
S
u
p
l
e
m
e
n
t
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
T
A
R
I
F
F
S
'
,
 
'
T
a
r
i
f
a
s
 
&
 
M
o
n
e
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
J
O
M
R
E
S
_
F
I
L
E
_
U
P
L
O
A
D
S
'
,
 
'
C
a
r
p
e
t
a
s
 
u
p
l
o
a
d
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
S
U
P
P
L
I
M
E
N
T
S
_
S
I
N
G
L
E
P
E
R
S
O
N
'
,
 
'
S
o
l
o
 
s
u
p
l
e
m
e
n
t
o
s
 
p
o
r
 
p
e
r
s
o
n
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
S
U
P
P
L
I
M
E
N
T
S
_
S
I
N
G
L
E
P
E
R
S
O
N
_
D
E
S
C
'
,
 
'
C
e
r
c
i
Ã
³
n
e
s
e
 
d
e
 
m
a
r
c
a
r
 
"
S
Ã
­
"
 
s
i
 
u
s
t
e
d
 
q
u
i
e
r
e
 
c
a
r
g
a
r
 
s
o
l
o
 
s
u
p
l
e
m
e
n
t
o
s
 
d
e
 
p
e
r
s
o
n
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
S
U
P
P
L
I
M
E
N
T
S
_
S
I
N
G
L
E
P
E
R
S
O
N
_
C
O
S
T
'
,
 
'
S
o
l
o
 
c
a
r
g
a
r
 
s
u
p
l
e
m
e
n
t
o
 
d
e
 
p
e
r
s
o
n
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
D
E
P
O
S
I
T
_
I
S
P
E
R
C
E
N
T
A
G
E
'
,
 
'
Â
¿
E
l
 
D
e
p
Ã
³
s
i
t
o
 
r
e
q
u
i
e
r
e
 
p
o
r
c
e
n
t
a
j
e
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
D
E
P
O
S
I
T
_
I
S
P
E
R
C
E
N
T
A
G
E
_
D
E
S
C
'
,
 
'
Â
¿
E
l
 
d
e
p
Ã
³
s
i
t
o
 
e
s
 
u
n
 
p
o
r
c
e
n
t
a
j
e
 
d
e
 
l
a
 
s
u
m
a
 
d
e
 
l
a
 
r
e
s
e
r
v
a
?
 
S
i
 
n
o
,
 
e
l
 
d
e
p
Ã
³
s
i
t
o
 
a
p
l
i
c
a
d
o
 
e
s
 
u
n
 
v
a
l
o
r
 
f
i
j
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
D
E
P
O
S
I
T
_
V
A
L
U
E
'
,
 
'
E
l
 
d
e
p
Ã
³
s
i
t
o
 
r
e
q
u
i
r
i
Ã
³
 
e
l
 
v
a
l
o
r
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
T
A
R
I
F
F
S
_
P
E
R
'
,
 
'
P
o
r
 
p
e
r
s
o
n
a
,
 
p
o
r
 
n
o
c
h
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
T
A
R
I
F
F
S
_
P
E
R
_
D
E
S
C
'
,
 
'
E
s
c
o
j
a
 
"
S
Ã
­
"
 
s
i
 
u
s
t
e
d
 
q
u
i
e
r
e
 
c
a
r
g
o
s
 
p
o
r
 
p
e
r
s
o
n
a
-
p
o
r
-
n
o
c
h
e
.
 
S
i
 
n
o
,
 
e
n
t
o
n
c
e
s
 
l
o
s
 
c
o
s
t
o
s
 
s
e
 
c
a
l
c
u
l
a
r
Ã
¡
n
 
e
n
 
b
a
s
e
 
a
 
h
a
b
i
t
a
c
i
Ã
³
n
-
p
o
r
-
n
o
c
h
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
U
P
L
O
A
D
S
_
F
I
L
E
S
I
Z
E
'
,
 
'
T
a
m
a
Ã
±
o
 
d
e
 
l
a
 
c
a
r
p
e
t
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
U
P
L
O
A
D
S
_
F
I
L
E
S
I
Z
E
_
D
E
S
C
'
,
 
'
M
a
x
.
 
T
a
m
a
Ã
±
o
 
d
e
 
c
a
r
p
e
t
a
 
e
n
 
K
i
l
o
b
y
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
B
O
O
K
E
D
'
,
 
'
R
e
s
e
r
v
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
O
N
F
I
R
M
A
T
I
O
N
_
R
E
S
E
R
V
A
T
I
O
N
_
D
E
T
A
I
L
S
'
,
 
'
D
e
t
a
l
l
e
s
 
d
e
 
l
a
 
r
e
s
e
r
v
a
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
O
N
F
I
R
M
A
T
I
O
N
_
R
E
S
E
R
V
A
T
I
O
N
_
S
M
A
L
L
P
R
I
N
T
_
B
I
N
D
I
N
G
C
O
N
T
R
A
C
T
'
,
 
'
S
e
 
l
e
 
r
e
c
u
e
r
d
a
 
a
 
q
u
e
 
u
n
a
 
r
e
s
e
r
v
a
 
e
s
 
u
n
 
c
o
n
t
r
a
t
o
 
l
e
g
a
l
m
e
n
t
e
 
o
b
l
i
g
a
t
o
r
i
o
,
 
s
i
 
p
o
r
 
a
l
g
u
n
a
 
r
a
z
Ã
³
n
 
u
s
t
e
d
 
t
i
e
n
e
 
q
u
e
 
c
a
n
c
e
l
a
r
 
o
 
a
c
o
r
t
a
r
 
s
u
 
r
e
s
e
r
v
a
 
e
n
t
o
n
c
e
s
 
s
e
r
Ã
¡
 
a
Ã
º
n
 
r
e
s
p
o
n
s
a
b
l
e
 
d
e
 
p
a
g
a
r
 
l
a
 
c
a
n
t
i
d
a
d
 
c
o
m
p
l
e
t
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
O
N
F
I
R
M
A
T
I
O
N
_
R
E
S
E
R
V
A
T
I
O
N
_
S
M
A
L
L
P
R
I
N
T
_
C
A
N
C
E
L
L
A
T
I
O
N
C
H
A
R
G
E
S
_
I
N
T
R
O
'
,
 
'
<
i
>
L
a
 
c
a
n
c
e
l
a
c
i
Ã
³
n
 
y
 
e
l
 
a
c
o
r
t
a
m
i
e
n
t
o
 
s
e
 
c
a
r
g
a
n
 
a
 
s
u
 
c
u
e
n
t
a
<
/
i
>
 
S
i
 
u
s
t
e
d
 
c
a
n
c
e
l
a
 
s
u
s
 
v
a
c
a
c
i
o
n
e
s
,
 
l
a
 
c
a
n
c
e
l
a
c
i
Ã
³
n
 
d
e
b
e
 
s
e
r
 
c
o
n
f
i
r
m
a
d
a
 
p
o
r
 
e
s
c
r
i
t
o
.
 
L
o
s
 
c
a
r
g
o
s
 
p
o
r
 
c
a
n
c
e
l
a
c
i
Ã
³
n
 
s
o
n
:
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
O
N
F
I
R
M
A
T
I
O
N
_
R
E
S
E
R
V
A
T
I
O
N
_
S
M
A
L
L
P
R
I
N
T
_
A
R
R
I
V
A
L
D
A
T
E
T
O
1
4
D
A
Y
S
'
,
 
'
L
a
 
f
e
c
h
a
 
d
e
 
l
a
 
l
l
e
g
a
d
a
 
a
 
1
4
 
d
Ã
­
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
O
N
F
I
R
M
A
T
I
O
N
_
P
R
I
N
T
'
,
 
'
I
m
p
r
i
m
a
 
l
a
 
c
a
r
t
a
 
d
e
 
c
o
n
f
i
r
m
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
I
N
V
O
I
C
E
_
T
I
T
L
E
'
,
 
'
I
m
p
r
e
s
i
Ã
³
n
 
d
e
 
l
a
 
f
a
c
t
u
r
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
I
N
V
O
I
C
E
_
S
T
A
Y
N
I
G
H
T
S
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
n
o
c
h
e
s
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
I
N
V
O
I
C
E
_
C
O
S
T
P
E
R
N
I
G
H
T
'
,
 
'
C
o
s
t
o
 
p
o
r
 
n
o
c
h
e
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
I
N
V
O
I
C
E
_
L
E
T
T
E
R
_
G
R
A
N
D
T
O
T
A
L
'
,
 
'
S
u
m
a
 
t
o
t
a
l
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
I
N
V
O
I
C
E
_
P
R
I
N
T
'
,
 
'
I
m
p
r
i
m
i
r
 
f
a
c
t
u
r
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
D
D
S
E
R
V
I
C
E
_
T
I
T
L
E
'
,
 
'
A
g
r
e
g
u
e
 
e
l
 
s
e
r
v
i
c
i
o
 
p
a
r
a
 
f
a
c
t
u
r
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
D
D
S
E
R
V
I
C
E
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
n
 
d
e
l
 
s
e
r
v
i
c
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
D
D
S
E
R
V
I
C
E
_
V
A
L
U
E
'
,
 
'
V
a
l
o
r
 
d
e
l
 
S
e
r
v
i
c
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
D
D
S
E
R
V
I
C
E
_
B
O
O
K
I
N
G
D
E
S
C
'
,
 
'
O
t
r
o
s
 
a
r
t
Ã
­
c
u
l
o
s
 
f
a
c
t
u
r
a
d
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
D
D
S
E
R
V
I
C
E
_
S
A
V
E
M
E
S
S
A
G
E
'
,
 
'
A
r
t
Ã
­
c
u
l
o
 
a
g
r
e
g
a
d
o
 
a
 
l
a
 
f
a
c
t
u
r
a
'
)
;

j
r
_
d
e
f
i
n
e
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
U
P
L
O
A
D
_
I
M
A
G
E
'
,
 
'
S
u
b
i
r
 
i
m
a
g
e
n
 
'
)
;

j
r
_
d
e
f
i
n
e
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
F
I
L
E
_
U
P
L
O
A
D
'
,
 
'
A
r
c
h
i
v
o
 
s
u
b
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
O
D
D
S
'
,
 
'
P
r
o
b
a
b
i
l
i
d
a
d
e
s
 
y
 
t
Ã
©
r
m
i
n
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
E
R
R
O
R
C
H
E
C
K
I
N
G
'
,
 
'
L
l
a
m
a
r
 
l
i
s
t
a
 
d
e
 
M
i
n
i
c
o
m
p
o
n
e
n
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
E
R
R
O
R
C
H
E
C
K
I
N
G
_
D
E
S
C
'
,
 
'
M
a
r
q
u
e
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
a
 
S
i
 
p
a
r
a
 
v
e
r
 
u
n
 
l
o
g
 
d
e
 
l
o
s
 
m
i
n
i
c
o
m
p
o
n
e
n
t
e
s
 
u
t
i
l
i
z
a
d
o
s
 
a
l
 
f
i
n
a
l
 
d
e
 
l
a
 
h
o
j
a
 
d
e
s
p
u
Ã
©
s
 
d
e
 
q
u
e
 
J
o
m
r
e
s
 
c
o
m
p
l
e
t
e
 
s
u
 
e
j
e
c
u
c
i
Ã
³
n
.
 
E
s
 
Ã
º
t
i
l
 
s
i
 
e
s
t
Ã
¡
s
 
i
n
t
e
n
t
a
n
d
o
 
i
d
e
n
t
i
f
i
c
a
r
 
q
u
e
 
M
i
n
i
c
o
m
p
o
n
e
n
t
e
s
 
e
s
t
Ã
¡
n
 
l
l
e
v
a
n
d
o
 
a
 
c
a
b
o
 
c
i
e
r
t
o
s
 
s
e
r
v
i
c
i
o
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
I
L
E
_
D
E
L
E
T
E
'
,
 
'
B
o
r
r
e
 
e
s
t
a
 
i
m
a
g
e
n
'
)
;

j
r
_
d
e
f
i
n
e
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
F
I
L
E
_
D
E
L
E
T
E
D
'
,
 
'
E
l
 
f
i
c
h
e
r
o
 
s
e
 
b
o
r
r
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
R
O
O
M
_
D
E
L
E
T
E
'
,
 
'
B
o
r
r
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
R
O
O
M
_
U
N
A
B
L
E
T
O
D
E
L
E
T
E
'
,
 
'
I
n
c
a
p
a
z
 
d
e
 
e
l
i
m
i
n
a
r
 
e
s
t
a
 
h
a
b
i
t
a
c
i
Ã
³
n
,
 
y
a
 
h
a
y
 
r
e
s
e
r
v
a
s
.
 
C
a
n
c
e
l
e
 
e
s
a
s
 
r
e
s
e
r
v
a
s
 
y
 
v
u
e
l
v
a
 
a
 
i
n
t
e
n
t
a
r
l
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
R
O
O
M
_
D
E
L
E
T
E
D
'
,
 
'
C
a
r
c
a
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
 
e
l
i
m
i
n
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
R
O
O
M
F
E
A
T
U
R
E
_
D
E
L
E
T
E
'
,
 
'
B
o
r
r
e
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
l
a
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
R
O
O
M
F
E
A
T
U
R
E
_
U
N
A
B
L
E
T
O
D
E
L
E
T
E
'
,
 
'
I
m
p
o
s
i
b
l
e
 
e
l
i
m
i
n
a
r
 
e
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
l
a
 
h
a
b
i
t
a
c
i
Ã
³
n
,
 
e
s
t
Ã
¡
 
a
s
i
g
n
a
d
a
 
u
 
o
c
u
p
a
d
a
.
 
E
l
i
m
i
n
e
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
e
s
a
s
 
h
a
b
i
t
a
c
i
Ã
³
n
e
s
 
y
 
v
u
e
l
v
a
 
a
 
i
n
t
e
n
t
a
r
l
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
R
O
O
M
F
E
A
T
U
R
E
_
D
E
L
E
T
E
D
'
,
 
'
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
l
a
 
h
a
b
i
t
a
c
i
Ã
³
n
 
b
o
r
r
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
_
D
E
L
E
T
E
'
,
 
'
B
o
r
r
a
r
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
_
U
N
A
B
L
E
T
O
D
E
L
E
T
E
'
,
 
'
I
m
p
o
s
i
b
l
e
 
e
l
i
m
i
n
a
r
 
e
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
,
 
e
s
t
Ã
¡
 
a
s
i
g
n
a
d
a
.
 
E
l
i
m
i
n
e
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
e
s
t
a
 
p
r
o
p
i
e
d
a
d
 
y
 
v
u
e
l
v
a
 
a
 
i
n
t
e
n
t
a
r
l
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
_
D
E
L
E
T
E
D
'
,
 
'
L
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
s
e
 
b
o
r
r
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
R
O
O
M
C
L
A
S
S
_
D
E
L
E
T
E
'
,
 
'
B
o
r
r
e
 
t
i
p
o
 
d
e
 
l
a
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
R
O
O
M
C
L
A
S
S
_
D
E
L
E
T
E
D
'
,
 
'
T
i
p
o
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
 
b
o
r
r
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
P
R
O
P
E
R
T
Y
_
D
E
L
E
T
E
'
,
 
'
B
o
r
r
e
 
l
a
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
P
R
O
P
E
R
T
Y
_
D
E
L
E
T
E
D
'
,
 
'
L
a
 
p
r
o
p
i
e
d
a
d
 
s
e
 
b
o
r
r
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
P
R
O
P
E
R
T
Y
_
D
E
L
E
T
E
_
N
O
R
I
G
H
T
S
'
,
 
'
U
s
t
e
d
 
n
o
 
t
i
e
n
e
 
l
o
s
 
p
e
r
m
i
s
o
s
 
p
a
r
a
 
b
o
r
r
a
r
 
e
s
t
a
 
p
r
o
p
i
e
d
a
d
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
U
P
L
O
A
D
S
_
I
M
A
G
E
S
_
W
I
D
T
H
_
L
A
R
G
E
'
,
 
'
A
n
c
h
u
r
a
 
d
e
 
i
m
a
g
e
n
 
g
r
a
n
d
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
M
A
P
P
I
N
G
L
I
N
K
'
,
 
'
H
a
g
a
 
c
l
i
c
k
 
p
a
r
a
 
v
e
r
 
e
l
 
m
a
p
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
P
R
O
P
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
n
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
C
H
E
C
K
I
N
T
I
M
E
S
'
,
 
'
h
o
r
a
r
i
o
 
d
e
 
e
n
t
r
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
A
R
E
A
A
C
T
I
V
I
T
I
E
S
'
,
 
'
A
c
t
i
v
i
d
a
d
e
s
 
d
e
l
 
Ã
¡
r
e
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
D
R
I
V
I
N
G
D
I
R
E
C
T
I
O
N
S
'
,
 
'
D
i
r
e
c
c
i
o
n
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
A
I
R
P
O
R
T
S
'
,
 
'
A
e
r
o
p
u
e
r
t
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
O
T
H
E
R
T
R
A
N
S
P
O
R
T
'
,
 
'
O
t
r
o
s
 
t
r
a
n
s
p
o
r
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
P
O
L
I
C
I
E
S
D
I
S
C
L
A
I
M
E
R
S
'
,
 
'
P
o
l
Ã
­
t
i
c
a
s
 
y
 
r
e
c
l
a
m
a
c
i
o
n
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
P
R
O
P
E
R
T
I
E
S
L
I
S
T
I
N
G
_
T
H
I
S
P
R
O
P
E
R
T
Y
A
D
D
R
E
S
S
'
,
 
'
D
i
r
e
c
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
V
I
S
I
T
O
R
S
C
A
N
B
O
O
K
O
N
L
I
N
E
'
,
 
'
V
i
s
i
t
a
n
t
e
s
 
p
u
e
d
e
n
 
r
e
s
e
r
v
a
r
 
o
n
l
i
n
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
V
I
S
I
T
O
R
S
C
A
N
B
O
O
K
O
N
L
I
N
E
_
D
E
S
C
'
,
 
'
P
o
n
g
a
 
e
s
t
o
 
a
 
"
S
I
"
 
p
a
r
a
 
a
s
e
g
u
r
a
r
 
q
u
e
 
l
o
s
 
v
i
s
i
t
a
n
t
e
s
 
p
u
e
d
a
n
 
r
e
s
e
r
v
a
r
 
u
n
a
 
h
a
b
i
t
a
c
i
Ã
³
n
 
o
n
l
i
n
e
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
B
O
O
K
I
N
G
S
'
,
 
'
R
e
s
e
r
v
a
s
 
p
a
r
a
 
u
n
a
 
p
e
r
Ã
­
o
d
o
 
f
i
j
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
B
O
O
K
I
N
G
S
_
D
E
S
C
'
,
 
'
S
i
 
p
o
n
e
 
e
s
t
o
 
e
n
 
"
S
I
"
 
l
a
s
 
r
e
s
e
r
v
a
s
 
s
e
r
Ã
¡
n
 
p
o
r
 
u
n
 
p
e
r
Ã
­
o
d
o
 
f
i
j
o
.
 
S
i
 
s
e
 
p
o
n
e
 
e
n
 
"
N
O
"
,
 
e
n
t
o
n
c
e
s
 
a
s
e
g
u
r
e
s
e
 
q
u
e
 
e
l
 
"
d
Ã
­
a
 
p
r
e
d
e
f
i
n
i
d
o
 
d
e
 
l
l
e
g
a
d
a
"
 
s
e
 
p
u
s
o
 
e
n
 
"
S
I
"
 
(
s
i
 
n
o
 
q
u
i
e
r
e
 
f
o
r
z
a
r
 
a
l
 
c
l
i
e
n
t
e
 
 
a
 
l
l
e
g
a
r
 
u
n
 
d
Ã
­
a
 
e
s
p
e
c
Ã
­
f
i
c
o
)
 
e
n
 
e
s
t
e
 
c
a
s
o
 
n
o
 
c
o
n
s
e
g
u
i
r
Ã
¡
 
m
u
c
h
a
s
 
e
n
t
r
a
d
a
s
 
a
l
 
c
a
l
e
n
d
a
r
i
o
 
d
e
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
'
,
 
'
P
e
r
Ã
­
o
d
o
 
d
e
 
R
e
s
e
r
v
a
s
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
B
O
O
K
I
N
G
'
,
 
'
R
e
s
e
r
v
a
r
 
u
n
a
 
H
b
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
_
N
U
M
B
E
R
O
F
P
E
R
I
O
D
S
'
,
 
'
M
a
x
.
 
p
e
r
Ã
­
o
d
o
s
,
 
p
.
e
.
 
3
x
7
 
p
e
r
Ã
­
o
d
o
s
 
=
 
2
1
 
d
i
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
S
I
N
G
L
E
R
O
O
M
P
R
O
P
E
R
T
Y
'
,
 
'
E
s
 
u
n
a
 
h
a
b
i
t
a
c
i
Ã
³
n
 
p
a
r
a
 
s
o
l
t
e
r
o
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
R
E
V
I
E
W
B
O
O
K
I
N
G
'
,
 
'
R
e
s
e
r
v
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
C
O
N
F
I
R
M
B
O
O
K
I
N
G
'
,
 
'
C
o
n
f
i
r
m
a
r
 
l
a
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
M
O
N
D
A
Y
'
,
 
'
L
u
n
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
T
U
E
S
D
A
Y
'
,
 
'
M
a
r
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
W
E
D
N
E
S
D
A
Y
'
,
 
'
M
i
Ã
©
r
c
o
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
T
H
U
R
S
D
A
Y
'
,
 
'
J
u
e
v
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
F
R
I
D
A
Y
'
,
 
'
V
i
e
r
n
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
A
Y
'
,
 
'
S
Ã
¡
b
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
S
U
N
D
A
Y
'
,
 
'
D
o
m
i
n
g
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
M
O
N
D
A
Y
_
A
B
B
R
'
,
 
'
L
u
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
T
U
E
S
D
A
Y
_
A
B
B
R
'
,
 
'
M
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
W
E
D
N
E
S
D
A
Y
_
A
B
B
R
'
,
 
'
M
i
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
T
H
U
R
S
D
A
Y
_
A
B
B
R
'
,
 
'
J
u
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
F
R
I
D
A
Y
_
A
B
B
R
'
,
 
'
V
i
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
A
Y
_
A
B
B
R
'
,
 
'
S
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
S
U
N
D
A
Y
_
A
B
B
R
'
,
 
'
D
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
A
V
L
C
A
L
'
,
 
'
c
a
l
e
n
d
a
r
i
o
 
d
e
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
V
L
C
A
L
_
T
O
D
A
Y
C
O
L
O
U
R
'
,
 
'
E
l
 
c
o
l
o
r
 
d
e
l
 
t
i
p
o
 
d
e
 
l
e
t
r
a
 
p
a
r
a
 
l
a
 
f
e
c
h
a
 
a
c
t
u
a
l
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
V
L
C
A
L
_
I
N
M
O
N
T
H
F
A
C
E
'
,
 
'
E
l
 
c
o
l
o
r
 
d
e
l
 
t
i
p
o
 
d
e
 
l
e
t
r
a
 
p
o
r
 
d
Ã
­
a
s
 
e
n
 
e
l
 
m
e
s
 
d
e
 
d
e
s
p
l
i
e
g
u
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
V
L
C
A
L
_
O
U
T
M
O
N
T
H
F
A
C
E
'
,
 
'
E
l
 
c
o
l
o
r
 
d
e
l
 
t
i
p
o
 
d
e
 
l
e
t
r
a
 
p
o
r
 
d
Ã
­
a
s
 
n
o
 
e
n
 
e
l
 
m
e
s
 
d
e
 
d
e
s
p
l
i
e
g
u
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
V
L
C
A
L
_
I
N
B
G
C
O
L
O
U
R
'
,
 
'
C
o
l
o
r
 
d
e
 
f
o
n
d
o
 
p
o
r
 
d
Ã
­
a
s
 
c
u
a
n
d
o
 
l
a
 
p
r
o
p
i
e
d
a
d
/
e
s
p
a
c
i
o
 
e
s
t
Ã
¡
 
d
i
s
p
o
n
i
b
l
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
V
L
C
A
L
_
O
U
T
B
G
C
O
L
O
U
R
'
,
 
'
C
o
l
o
r
 
d
e
 
f
o
n
d
o
 
p
o
r
 
d
Ã
­
a
s
 
c
u
a
n
d
o
 
n
o
 
s
e
 
m
u
e
s
t
r
a
 
m
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
V
L
C
A
L
_
O
C
C
U
P
I
E
D
C
O
L
O
U
R
'
,
 
'
C
o
l
o
r
 
d
e
 
f
o
n
d
o
 
p
o
r
 
d
Ã
­
a
s
 
o
c
u
p
a
d
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
V
L
C
A
L
_
P
R
O
V
I
S
I
O
N
A
L
C
O
L
O
U
R
'
,
 
'
C
o
l
o
r
 
d
e
 
f
o
n
d
o
 
p
a
r
a
 
r
e
s
e
r
v
a
r
 
p
r
o
v
i
s
i
o
n
a
l
m
e
n
t
e
 
l
o
s
 
e
s
p
a
c
i
o
s
 
(
r
e
s
e
r
v
a
s
 
p
a
r
a
 
u
n
 
d
e
p
Ã
³
s
i
t
o
 
q
u
e
 
n
o
 
s
e
 
h
a
 
t
o
m
a
d
o
)
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
V
L
C
A
L
_
P
A
S
T
C
O
L
O
U
R
'
,
 
'
C
o
l
o
r
 
d
e
 
f
o
n
d
o
 
p
a
r
a
 
f
e
c
h
a
s
 
a
t
r
a
s
a
d
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
V
L
C
A
L
_
O
C
C
U
P
I
E
D
C
O
L
O
U
R
_
K
E
Y
'
,
 
'
O
c
u
p
a
d
o
/
n
o
 
d
i
s
p
o
n
i
b
l
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
V
L
C
A
L
_
I
N
M
O
N
T
H
F
A
C
E
_
K
E
Y
'
,
 
'
D
i
s
p
o
n
i
b
l
e
 
p
a
r
a
 
r
e
s
e
r
v
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
V
L
C
A
L
_
P
R
O
V
I
S
I
O
N
A
L
C
O
L
O
U
R
_
K
E
Y
'
,
 
'
R
e
s
e
r
v
a
s
 
p
r
o
v
i
s
i
o
n
a
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
Y
E
S
N
O
'
,
 
'
D
Ã
­
a
 
p
r
e
d
e
f
i
n
i
d
o
 
d
e
 
l
l
e
g
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
Y
E
S
N
O
_
D
E
S
C
'
,
 
'
S
Ã
³
l
o
 
p
a
r
a
 
l
o
s
 
s
i
t
i
o
s
 
q
u
e
 
o
f
r
e
c
e
n
 
l
a
s
 
r
e
s
e
r
v
a
s
 
f
i
j
a
s
 
d
e
l
 
p
e
r
Ã
­
o
d
o
.
 
E
s
c
o
j
a
 
e
l
 
d
Ã
­
a
 
e
n
 
q
u
e
 
d
e
b
e
n
 
e
m
p
e
z
a
r
 
l
a
s
 
l
l
e
g
a
d
a
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
D
A
Y
'
,
 
'
D
Ã
­
a
 
f
i
j
o
 
d
e
 
l
l
e
g
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
F
I
X
E
D
P
R
I
O
D
1
'
,
 
'
P
e
r
Ã
­
o
d
o
 
d
e
 
l
a
 
e
s
t
a
n
c
i
a
 
(
d
Ã
­
a
s
)
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
S
H
O
W
A
V
I
L
A
B
I
L
I
T
Y
_
C
A
L
E
N
D
A
R
'
,
 
'
M
o
s
t
r
a
r
 
l
a
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
S
H
O
W
A
V
I
L
A
B
I
L
I
T
Y
_
C
A
L
E
N
D
A
R
_
D
E
S
C
'
,
 
'
P
o
n
g
a
 
e
s
t
o
 
a
 
"
S
Ã
­
"
 
p
a
r
a
 
m
o
s
t
r
a
r
 
l
o
s
 
c
a
l
e
n
d
a
r
i
o
s
 
d
e
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
A
V
A
I
L
A
B
I
L
I
T
Y
'
,
 
'
D
i
s
p
o
n
i
b
i
l
i
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
C
A
L
E
N
D
A
R
_
C
L
I
C
K
D
A
T
E
S
'
,
 
'
C
l
i
c
k
 
e
n
 
u
n
a
 
f
e
c
h
a
 
l
i
b
r
e
 
p
a
r
a
 
v
e
r
 
e
l
 
f
o
r
m
u
l
a
r
i
o
 
d
e
 
r
e
s
e
r
v
a
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
B
L
A
C
K
B
O
O
K
I
N
G
'
,
 
'
R
e
s
e
r
v
a
s
 
n
e
g
r
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
B
L
A
C
K
B
O
O
K
I
N
G
_
N
E
W
'
,
 
'
N
u
e
v
a
s
 
R
e
s
e
r
v
a
s
 
n
e
g
r
a
s
 
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
D
E
L
E
T
E
G
U
E
S
T
'
,
 
'
B
o
r
r
a
r
 
h
u
Ã
©
s
p
e
d
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
D
E
L
E
T
E
G
U
E
S
T
_
G
U
E
S
T
D
E
L
E
T
E
D
'
,
 
'
H
u
Ã
©
s
p
e
d
 
b
o
r
r
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
D
E
L
E
T
E
G
U
E
S
T
_
U
N
A
B
L
E
T
O
D
E
L
E
T
E
G
U
E
S
T
'
,
 
'
I
n
c
a
p
a
z
 
d
e
 
b
o
r
r
a
r
 
a
 
e
s
t
e
 
h
u
Ã
©
s
p
e
d
 
y
a
 
q
u
e
 
t
i
e
n
e
 
r
e
s
e
r
v
a
s
 
a
b
i
e
r
t
a
s
.
 
C
a
n
c
e
l
e
 
l
a
s
 
r
e
s
e
r
v
a
s
 
y
 
p
r
u
e
b
e
 
o
t
r
a
 
v
e
z
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
R
O
O
M
S
M
O
K
I
N
G
_
E
I
T
H
E
R
'
,
 
'
N
o
 
i
m
p
o
r
t
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
A
L
E
N
D
A
R
O
U
T
P
U
T
'
,
 
'
F
o
r
m
a
t
o
 
d
e
 
s
a
l
i
d
a
 
d
e
l
 
C
a
l
e
n
d
a
r
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
A
L
E
N
D
A
R
I
N
P
U
T
'
,
 
'
F
o
r
m
a
t
o
 
d
e
 
e
n
t
r
a
d
a
 
d
e
l
 
C
a
l
e
n
d
a
r
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
A
L
E
N
D
A
R
I
N
P
U
T
_
D
E
S
C
'
,
 
'
E
s
o
 
p
e
r
m
i
t
e
 
c
a
m
b
i
a
r
 
e
l
 
f
o
r
m
a
t
o
 
d
e
 
e
n
t
r
a
d
a
 
d
e
 
l
o
s
 
d
a
t
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
B
O
O
K
I
N
G
S
S
H
O
R
T
'
,
 
'
L
a
s
 
r
e
s
e
r
v
a
s
 
f
i
j
a
s
 
d
e
l
 
p
e
r
Ã
­
o
d
o
 
p
e
r
m
i
t
e
n
 
i
n
t
e
r
r
u
p
c
i
o
n
e
s
 
c
o
r
t
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
_
S
H
O
R
T
B
R
E
A
K
_
D
A
Y
S
'
,
 
'
L
o
n
g
i
t
u
d
 
d
e
 
i
n
t
e
r
r
u
p
c
i
Ã
³
n
 
c
o
r
t
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
U
B
L
I
S
H
E
D
'
,
 
'
P
u
b
l
i
c
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
P
A
Y
P
A
L
'
,
 
'
P
a
y
p
a
l
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
A
U
D
I
T
T
R
A
I
L
'
,
 
'
A
u
d
i
t
o
r
Ã
­
a
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
L
I
S
T
I
N
G
_
D
A
T
E
'
,
 
'
F
e
c
h
a
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
L
I
S
T
I
N
G
_
U
S
E
R
'
,
 
'
U
s
u
a
r
i
o
 
(
N
o
m
b
r
e
 
d
e
 
u
s
u
a
r
i
o
)
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
L
I
S
T
I
N
G
_
F
I
L
T
E
R
_
D
A
T
E
'
,
 
'
F
i
l
t
r
e
 
e
n
 
l
a
 
f
e
c
h
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
S
T
A
T
U
S
'
,
 
'
E
s
t
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
P
E
N
D
I
N
G
'
,
 
'
L
l
e
g
a
d
a
 
P
e
n
d
i
e
n
t
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
E
T
O
D
A
Y
'
,
 
'
L
l
e
g
a
d
a
s
 
h
o
y
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
R
E
S
I
D
E
N
T
'
,
 
'
R
e
s
i
d
e
n
t
e
 
a
c
t
u
a
l
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
T
O
D
A
Y
'
,
 
'
S
a
l
e
 
h
o
y
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
S
T
I
L
L
H
E
R
E
'
,
 
'
S
a
l
i
d
a
 
a
t
r
a
s
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
L
A
T
E
'
,
 
'
N
o
 
h
a
 
l
l
e
g
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
I
N
S
E
R
T
_
R
O
O
M
'
,
 
'
H
a
b
i
t
a
c
i
Ã
³
n
 
c
r
e
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
R
O
O
M
'
,
 
'
H
a
b
i
t
a
c
i
Ã
³
n
 
a
c
t
u
a
l
i
z
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
D
E
L
E
T
E
_
R
O
O
M
'
,
 
'
H
a
b
i
t
a
c
i
Ã
³
n
 
b
o
r
r
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
I
N
S
E
R
T
_
R
O
O
M
_
F
E
A
T
U
R
E
'
,
 
'
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
c
r
e
a
d
a
 
d
e
 
H
b
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
R
O
O
M
_
F
E
A
T
U
R
E
'
,
 
'
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
a
c
t
u
a
l
i
z
a
d
a
 
d
e
 
H
b
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
D
E
L
E
T
E
_
R
O
O
M
_
F
E
A
T
U
R
E
'
,
 
'
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
b
o
r
r
a
d
a
 
d
e
 
H
b
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
I
N
S
E
R
T
_
P
R
O
P
E
R
T
Y
'
,
 
'
P
r
o
p
i
e
d
a
d
 
c
r
e
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
P
R
O
P
E
R
T
Y
'
,
 
'
P
r
o
p
i
e
d
a
d
 
a
c
t
u
a
l
i
z
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
D
E
L
E
T
E
_
P
R
O
P
E
R
T
Y
'
,
 
'
P
r
o
p
i
e
d
a
d
 
b
o
r
r
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
E
D
I
T
_
P
R
O
P
E
R
T
Y
_
S
E
T
T
I
N
G
S
'
,
 
'
C
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
d
e
 
p
r
o
p
i
e
d
a
d
 
e
d
i
t
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
P
U
B
L
I
S
H
_
P
R
O
P
E
R
T
Y
'
,
 
'
P
r
o
p
i
e
d
a
d
e
s
 
p
u
b
l
i
c
a
d
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
I
N
S
E
R
T
_
T
A
R
I
F
F
'
,
 
'
T
a
r
i
f
a
 
c
r
e
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
T
A
R
I
F
F
'
,
 
'
T
a
r
i
f
a
 
a
c
t
u
a
l
i
z
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
A
D
D
S
E
R
V
I
C
E
'
,
 
'
A
g
r
e
g
a
r
 
c
a
r
g
o
s
 
p
o
r
 
s
e
r
v
i
c
i
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
B
O
O
K
E
D
G
U
E
S
T
I
N
'
,
 
'
H
u
Ã
©
s
p
e
d
 
E
n
t
r
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
E
N
T
E
R
E
D
D
E
P
O
S
I
T
'
,
 
'
D
e
p
Ã
³
s
i
t
o
 
i
n
g
r
e
s
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
I
N
S
E
R
T
_
G
U
E
S
T
'
,
 
'
H
u
Ã
©
s
p
e
d
 
c
r
e
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
G
U
E
S
T
'
,
 
'
H
u
Ã
©
s
p
e
d
 
a
c
t
u
a
l
i
z
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
B
O
O
K
E
D
_
R
O
O
M
'
,
 
'
H
a
b
i
t
a
c
i
Ã
³
n
 
r
e
s
e
r
v
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
I
N
S
E
R
T
_
E
X
T
R
A
'
,
 
'
E
x
t
r
a
 
c
r
e
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
E
X
T
R
A
'
,
 
'
E
x
t
r
a
 
A
c
t
u
a
l
i
z
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
D
E
L
E
T
E
_
E
X
T
R
A
'
,
 
'
E
x
t
r
a
 
B
o
r
r
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
P
U
B
L
I
S
H
_
E
X
T
R
A
'
,
 
'
E
x
t
r
a
 
E
x
t
r
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
B
L
A
C
K
B
O
O
K
I
N
G
'
,
 
'
R
e
s
e
r
v
a
 
n
e
g
r
a
 
i
n
t
r
o
d
u
c
i
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
B
L
A
C
K
B
O
O
K
I
N
G
_
D
E
L
E
T
E
'
,
 
'
R
e
s
e
r
v
a
 
n
e
g
r
a
 
b
o
r
r
a
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
X
T
R
A
_
T
I
T
L
E
'
,
 
'
E
x
t
r
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
X
T
R
A
_
D
E
S
C
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
X
T
R
A
_
N
A
M
E
'
,
 
'
N
o
m
b
r
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
X
T
R
A
_
P
R
I
C
E
'
,
 
'
P
r
e
c
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
X
T
R
A
_
S
A
V
E
_
U
P
D
A
T
E
D
'
,
 
'
E
x
t
r
a
 
a
c
t
u
a
l
i
z
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
X
T
R
A
_
L
I
N
K
T
E
X
T
'
,
 
'
E
d
i
t
a
r
 
a
r
t
Ã
­
c
u
l
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
X
T
R
A
_
D
E
L
E
T
E
D
'
,
 
'
E
x
t
r
a
 
b
o
r
r
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
E
X
T
R
A
S
'
,
 
'
A
d
m
i
n
i
s
t
r
a
c
i
Ã
³
n
 
d
e
 
e
x
t
r
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
E
X
T
R
A
S
'
,
 
'
Â
¿
M
o
s
t
r
a
r
 
l
o
s
 
e
x
t
r
a
 
e
n
 
e
l
 
m
o
m
e
n
t
o
 
d
e
 
r
e
s
e
r
v
a
r
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
E
X
T
R
A
S
_
D
E
S
C
'
,
 
'
P
o
n
g
a
 
e
s
t
o
 
a
 
"
S
Ã
­
"
 
p
a
r
a
 
m
o
s
t
r
a
r
 
c
u
a
l
q
u
i
e
r
 
e
x
t
r
a
 
q
u
e
 
u
s
t
e
d
 
d
e
s
e
e
 
o
f
r
e
c
e
r
 
a
l
 
h
u
Ã
©
s
p
e
d
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
B
O
O
K
I
N
G
_
E
X
T
R
A
S
_
H
E
L
P
'
,
 
'
E
x
t
r
a
s
 
o
p
c
i
o
n
a
l
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
L
A
C
K
B
O
O
K
I
N
G
S
_
B
B
S
T
A
R
T
S
'
,
 
'
D
i
a
 
d
e
 
c
o
m
i
e
n
z
o
 
d
e
 
R
e
s
e
r
v
a
 
n
e
g
r
a
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
L
A
C
K
B
O
O
K
I
N
G
S
_
B
B
S
E
R
V
I
C
E
R
E
S
U
M
E
S
'
,
 
'
S
e
r
v
i
c
i
o
s
 
a
c
t
u
a
l
e
s
 
r
e
s
u
m
i
d
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
L
A
C
K
B
O
O
K
I
N
G
S
'
,
 
'
A
d
m
i
n
i
s
t
r
a
c
i
Ã
³
n
 
d
e
 
R
e
s
e
r
v
a
 
n
e
g
r
a
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
L
A
C
K
B
O
O
K
I
N
G
S
_
S
T
A
G
E
2
_
E
R
R
O
R
'
,
 
'
E
r
r
o
r
 
a
l
 
r
e
s
e
r
v
a
r
 
e
s
t
a
s
 
h
a
b
i
t
a
t
i
o
n
e
s
,
 
u
n
a
 
o
 
m
Ã
¡
s
 
d
e
 
l
a
s
 
h
a
b
i
t
a
c
i
o
n
e
s
 
q
u
e
 
u
s
t
e
d
 
e
s
c
o
g
i
Ã
³
 
n
o
 
e
s
t
Ã
¡
n
 
l
i
b
r
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
L
A
C
K
B
O
O
K
I
N
G
S
_
R
O
O
M
S
S
U
B
J
E
C
T
'
,
 
'
H
a
b
i
t
a
c
i
o
n
e
s
 
i
n
c
l
u
i
d
a
s
 
e
n
 
R
e
s
e
r
v
a
 
n
e
g
r
a
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
L
A
C
K
B
O
O
K
I
N
G
S
_
N
O
B
B
O
O
K
I
N
G
S
'
,
 
'
N
o
 
h
a
y
 
R
e
s
e
r
v
a
 
n
e
g
r
a
 
e
n
 
l
a
 
l
i
s
t
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
S
T
A
R
S
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
e
s
t
r
e
l
l
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
R
E
S
E
T
'
,
 
'
R
e
p
o
n
e
r
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
P
A
Y
P
A
L
_
C
A
N
C
E
L
L
E
D
'
,
 
'
R
e
s
e
r
v
a
 
c
a
n
c
e
l
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
S
E
A
R
C
H
_
H
E
R
E
'
,
 
'
B
u
s
q
u
e
 
a
q
u
Ã
­
 
p
a
r
a
:
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
C
U
R
R
E
N
C
Y
S
Y
M
B
O
L
'
,
 
'
S
Ã
­
m
b
o
l
o
 
d
e
 
m
o
n
e
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
C
U
R
R
E
N
C
Y
C
O
D
E
'
,
 
'
C
Ã
³
d
i
g
o
 
d
e
 
m
o
n
e
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
C
L
I
C
K
F
O
R
M
O
R
E
I
N
F
O
R
M
A
T
I
O
N
'
,
 
'
H
a
g
a
 
c
l
i
c
k
 
p
a
r
a
 
m
Ã
¡
s
 
i
n
f
o
r
m
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
A
D
V
A
N
C
E
B
O
O
K
I
N
G
S
L
I
M
I
T
Y
E
S
N
O
'
,
 
'
Â
¿
L
i
m
i
t
a
r
 
l
a
s
 
r
e
s
e
r
v
a
s
 
a
n
t
i
c
i
p
a
d
a
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
A
D
V
A
N
C
E
B
O
O
K
I
N
G
S
L
I
M
I
T
Y
E
S
N
O
_
D
E
S
C
'
,
 
'
P
o
n
g
a
 
e
s
t
o
 
a
 
"
S
Ã
­
"
 
s
i
 
u
s
t
e
d
 
q
u
i
e
r
e
 
l
i
m
i
t
a
r
 
l
a
s
 
r
e
s
e
r
v
a
s
 
a
n
t
i
c
i
p
a
d
a
s
 
(
u
t
i
l
i
z
a
r
 
e
l
 
p
r
Ã
³
x
i
m
o
 
c
a
m
p
o
 
p
a
r
a
 
p
o
n
e
r
 
e
l
 
l
Ã
­
m
i
t
e
 
e
n
 
t
Ã
©
r
m
i
n
o
s
 
d
e
 
d
Ã
­
a
s
)
.
 
S
i
 
u
s
t
e
d
 
p
o
n
e
 
e
s
t
o
 
a
 
s
Ã
­
 
e
n
t
o
n
c
e
s
 
s
i
 
e
l
 
u
s
u
a
r
i
o
 
t
r
a
t
a
 
d
e
 
r
e
s
e
r
v
a
r
 
m
Ã
¡
s
 
d
e
 
n
 
d
Ã
­
a
s
 
e
n
t
o
n
c
e
s
 
s
u
 
f
e
c
h
a
 
d
e
 
l
l
e
g
a
d
a
 
s
e
r
Ã
¡
 
r
e
s
t
a
u
r
a
d
a
 
a
 
l
a
 
f
e
c
h
a
 
d
e
 
h
o
y
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
A
D
V
A
N
C
E
B
O
O
K
I
N
G
S
L
I
M
I
T
D
A
Y
S
'
,
 
'
D
Ã
­
a
s
 
d
e
 
r
e
s
e
r
v
a
s
 
a
n
t
i
c
i
p
a
d
a
s
 
e
s
t
Ã
¡
n
 
l
i
m
i
t
a
d
o
s
 
a
:
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
F
R
O
N
T
_
R
O
O
M
T
A
X
'
,
 
'
I
m
p
u
e
s
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
R
O
O
M
T
A
X
'
,
 
'
I
V
A
 
d
e
 
l
a
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
R
O
O
M
T
A
X
_
F
I
X
E
D
'
,
 
'
I
m
p
u
e
s
t
o
 
f
i
j
o
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
R
O
O
M
T
A
X
_
P
E
R
C
E
N
T
A
G
E
'
,
 
'
P
o
r
c
e
n
t
a
j
e
 
d
e
 
i
m
p
u
e
s
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
E
U
R
O
T
A
X
'
,
 
'
I
m
p
u
e
s
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
E
U
R
O
T
A
X
_
P
E
R
C
E
N
T
A
G
E
'
,
 
'
P
o
r
c
e
n
t
a
j
e
 
d
e
 
i
m
p
u
e
s
t
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
A
R
C
H
I
V
E
'
,
 
'
A
r
c
h
i
v
a
r
 
t
o
d
o
s
 
l
o
s
 
r
e
g
i
s
t
r
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
T
A
R
I
F
F
S
'
,
 
'
N
u
e
s
t
r
a
s
 
t
a
r
i
f
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
T
I
T
L
E
'
,
 
'
N
o
m
b
r
e
 
d
e
 
t
a
r
i
f
a
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
D
E
S
C
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
n
 
d
e
 
t
a
r
i
f
a
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
R
O
O
M
T
Y
P
E
'
,
 
'
T
i
p
o
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
S
T
A
R
T
S
'
,
 
'
V
Ã
¡
l
i
d
o
 
d
e
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
E
N
D
S
'
,
 
'
V
Ã
¡
l
i
d
o
 
a
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
'
,
 
'
P
o
r
 
p
e
r
s
o
n
a
 
p
o
r
 
n
o
c
h
e
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
'
,
 
'
P
o
r
 
n
o
c
h
e
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
N
O
T
W
E
E
K
E
N
D
'
,
 
'
N
o
 
i
n
c
l
u
y
e
 
f
i
n
e
s
 
d
e
 
s
e
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
D
A
Y
S
'
,
 
'
D
Ã
­
a
s
 
m
Ã
­
n
i
m
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
D
A
Y
S
'
,
 
'
D
Ã
­
a
s
 
m
Ã
¡
x
i
m
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
P
E
E
P
S
'
,
 
'
P
e
r
s
o
n
a
s
 
m
Ã
­
n
i
m
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
P
E
E
P
S
'
,
 
'
P
e
r
s
o
n
a
s
 
m
a
x
i
m
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
P
R
E
V
I
E
W
'
,
 
'
I
n
s
p
e
c
c
i
Ã
³
n
 
p
r
e
v
i
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
E
D
I
T
I
N
G
M
O
D
E
O
N
'
,
 
'
Â
¿
M
o
d
o
 
d
e
 
e
d
i
c
i
Ã
³
n
 
a
c
t
i
v
a
d
o
?
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
C
U
S
T
O
M
T
E
X
T
'
,
 
'
T
e
x
t
o
 
a
c
t
u
a
l
i
z
a
d
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
L
A
N
G
U
A
G
E
'
,
 
'
C
o
r
r
i
j
a
 
e
l
 
i
d
i
o
m
a
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
P
T
Y
P
E
'
,
 
'
T
i
p
o
 
d
e
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
P
T
Y
P
E
S
_
L
I
S
T
_
T
I
T
L
E
'
,
 
'
L
i
s
t
a
 
d
e
 
p
r
o
p
i
e
d
a
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
P
T
Y
P
E
S
_
L
I
S
T
_
T
I
T
L
E
_
E
D
I
T
'
,
 
'
E
d
i
t
a
r
 
t
i
p
o
 
d
e
 
p
r
o
p
i
e
d
a
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
P
T
Y
P
E
S
_
P
T
Y
P
E
'
,
 
'
T
i
p
o
 
d
e
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
P
T
Y
P
E
S
_
P
T
Y
P
E
_
D
E
S
C
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
n
 
d
e
 
t
i
p
o
 
d
e
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
P
T
Y
P
E
S
_
S
A
V
E
D
'
,
 
'
T
i
p
o
 
d
e
 
p
r
o
p
i
e
d
a
d
 
g
r
a
b
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
P
T
Y
P
E
S
_
D
E
L
E
T
E
D
'
,
 
'
T
i
p
o
(
s
)
 
d
e
 
p
r
o
p
i
e
d
a
d
 
b
o
r
r
a
d
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
R
E
M
A
I
N
D
E
R
T
O
P
A
Y
'
,
 
'
R
e
c
u
e
r
d
e
 
 
p
a
g
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
E
X
T
R
A
S
_
N
O
E
X
T
R
A
S
'
,
 
'
N
i
n
g
Ã
º
n
 
s
e
r
v
i
c
i
o
 
e
x
t
r
a
 
p
a
r
a
 
f
a
c
t
u
r
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
H
A
R
G
I
N
G
_
D
E
P
O
S
I
T
'
,
 
'
D
e
p
Ã
³
s
i
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
H
A
R
G
I
N
G
_
F
U
L
L
A
M
T
'
,
 
'
C
a
n
t
i
d
a
d
 
c
o
m
p
l
e
t
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
H
A
R
G
I
N
G
_
C
O
N
F
I
G
'
,
 
'
C
a
n
t
i
d
a
d
 
c
a
r
g
a
d
a
 
e
n
 
t
i
e
m
p
o
 
d
e
 
l
a
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
H
A
R
G
I
N
G
_
C
O
N
F
I
G
_
D
E
S
C
'
,
 
'
U
t
i
l
i
c
e
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
p
a
r
a
 
d
e
c
i
d
i
r
 
l
o
 
q
u
e
 
s
e
 
d
e
b
e
 
c
a
r
g
a
r
 
a
l
 
r
e
s
e
r
v
a
r
.
 
E
s
c
o
j
a
 
e
l
 
d
e
p
Ã
³
s
i
t
o
 
s
i
 
e
l
 
d
e
p
Ã
³
s
i
t
o
 
s
e
 
d
e
b
e
 
c
a
r
g
a
r
,
 
o
 
l
a
 
c
a
n
t
i
d
a
d
 
c
o
m
p
l
e
t
a
 
s
i
 
l
a
 
c
a
n
t
i
d
a
d
 
c
o
m
p
l
e
t
a
 
s
e
 
d
e
b
e
 
c
a
r
g
a
r
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
O
N
T
H
S
T
O
S
H
O
W
'
,
 
'
M
e
s
e
s
 
d
e
l
 
C
a
l
.
 
a
 
m
o
s
t
r
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
O
N
T
H
S
T
O
S
H
O
W
_
D
E
S
C
'
,
 
'
E
n
 
l
a
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
 
d
e
 
l
o
s
 
h
a
b
i
t
a
c
i
o
n
e
s
,
 
c
u
Ã
¡
n
t
o
s
 
m
e
s
e
s
 
d
e
l
 
c
a
l
e
n
d
a
r
i
o
 
s
e
 
d
e
b
e
r
i
a
n
 
m
o
s
t
r
a
r
?
'
)
;

/
/
 
V
1
.
4

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
G
A
T
E
W
A
Y
L
I
S
T
'
,
 
'
P
a
s
a
r
e
l
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
C
A
N
C
E
L
'
,
 
'
C
a
n
c
e
l
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
B
L
A
C
K
B
O
O
K
I
N
G
_
D
E
S
C
'
,
 
'
E
l
i
j
a
 
p
o
r
 
f
a
v
o
r
 
l
o
s
 
h
a
b
i
t
a
c
i
o
n
(
e
s
)
 
q
u
e
 
u
s
t
e
d
 
d
e
s
e
a
 
t
e
n
e
r
 
f
u
e
r
a
 
d
e
 
s
e
r
v
i
c
i
o
,
 
y
 
l
a
s
 
f
e
c
h
a
s
 
r
e
l
e
v
a
n
t
e
s
.
 
<
b
r
>
S
i
 
u
n
a
 
h
a
b
i
t
a
c
i
o
n
 
n
o
 
t
i
e
n
e
 
u
n
a
 
m
a
r
c
a
,
 
n
o
 
s
e
 
p
u
e
d
e
 
i
n
c
l
u
i
r
 
e
n
 
l
a
 
R
e
s
e
r
v
a
 
n
e
g
r
a
 
h
a
s
t
a
 
q
u
e
 
t
o
d
a
s
 
l
o
s
 
r
e
s
e
r
v
a
s
 
e
s
t
Ã
©
n
 
c
o
m
p
l
e
t
a
d
a
s
/
c
a
n
c
e
l
a
d
a
s
.
<
b
r
/
>
 
C
u
Ã
¡
n
d
o
 
u
s
t
e
d
 
h
a
y
a
 
e
s
c
o
g
i
d
o
 
l
a
s
 
f
e
c
h
a
s
 
a
p
r
o
p
i
a
d
a
s
,
 
h
a
c
e
r
 
c
l
i
c
k
 
e
n
 
e
l
 
b
o
t
Ã
³
n
 
a
z
u
l
 
"
a
p
l
i
c
a
"
 
p
a
r
a
 
r
e
e
x
a
m
i
n
a
r
 
l
a
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
 
d
e
 
l
a
 
h
a
b
i
t
a
c
i
Ã
³
n
.
 
'
)
;

j
r
_
d
e
f
i
n
e
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
J
R
_
N
O
T
L
O
G
G
E
D
I
N
'
,
 
'
<
c
e
n
t
e
r
>
P
o
r
 
f
a
v
o
r
 
e
n
t
r
a
r
 
o
t
r
a
 
v
e
z
.
'
)
;

j
r
_
d
e
f
i
n
e
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
J
R
_
B
L
A
C
K
B
O
O
K
I
N
G
_
R
E
A
S
O
N
'
,
 
'
R
a
z
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
G
A
T
E
W
A
Y
_
U
S
E
G
A
T
E
W
A
Y
S
'
,
 
'
Â
¿
U
t
i
l
i
z
a
r
 
p
a
s
a
r
e
l
a
s
 
d
e
 
P
a
g
o
s
 
e
n
 
L
Ã
­
n
e
a
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
G
A
T
E
W
A
Y
_
B
O
O
K
I
N
G
_
C
H
O
O
S
E
'
,
 
'
E
s
c
o
j
a
 
p
o
r
 
f
a
v
o
r
 
s
u
 
m
Ã
©
t
o
d
o
 
d
e
 
p
a
g
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
G
A
T
E
W
A
Y
_
E
N
A
B
L
E
D
'
,
 
'
Â
¿
P
a
s
a
r
e
l
a
s
 
d
e
 
P
a
g
o
s
 
e
n
 
L
Ã
­
n
e
a
 
p
e
r
m
i
t
i
d
o
?
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
P
L
U
G
I
N
S
_
U
P
D
A
T
E
'
,
 
'
P
l
u
g
i
n
 
m
o
d
i
f
i
c
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
P
L
U
G
I
N
S
_
I
N
S
E
R
T
'
,
 
'
P
l
u
g
i
n
 
i
n
s
e
r
t
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
G
A
L
L
E
R
Y
L
I
N
K
'
,
 
'
V
e
r
 
l
a
 
w
e
b
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
G
A
L
L
E
R
Y
L
I
N
K
'
,
 
'
L
i
n
k
 
E
x
t
e
r
n
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
G
A
L
L
E
R
Y
L
I
N
K
_
D
E
S
C
'
,
 
'
P
o
n
g
a
 
e
l
 
l
i
n
k
 
d
e
 
s
u
 
w
e
b
s
i
t
e
 
a
q
u
i
.
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
C
R
E
D
I
T
C
A
R
D
_
E
D
I
T
'
,
 
'
E
d
i
t
a
r
 
T
a
r
j
e
t
a
 
d
e
 
c
r
Ã
©
d
i
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
E
D
I
T
I
C
O
N
'
,
 
'
E
d
i
t
a
r
 
e
l
 
t
a
m
a
Ã
±
o
 
d
e
l
 
i
c
o
n
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
S
L
I
D
E
S
H
O
W
S
'
,
 
'
D
i
a
p
o
s
i
t
i
v
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
S
L
I
D
E
S
H
O
W
S
_
S
H
O
W
S
L
I
D
E
S
H
O
W
L
I
N
K
'
,
 
'
Â
¿
M
o
s
t
r
a
r
 
e
n
l
a
c
e
 
a
 
D
i
a
p
o
s
i
t
i
v
a
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
S
L
I
D
E
S
H
O
W
S
_
S
H
O
W
S
L
I
D
E
S
H
O
W
I
N
L
I
N
E
'
,
 
'
Â
¿
M
o
s
t
r
a
r
 
d
i
a
p
o
s
i
t
i
v
a
s
 
e
n
 
l
Ã
­
n
e
a
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
S
L
I
D
E
S
H
O
W
'
,
 
'
I
m
a
g
e
n
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
T
A
R
I
F
F
S
_
S
H
O
W
T
A
R
I
F
F
S
L
I
N
K
'
,
 
'
Â
¿
M
o
s
t
r
a
r
 
e
n
l
a
c
e
 
a
 
T
a
r
i
f
a
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
P
O
P
U
P
S
A
L
L
O
W
E
D
'
,
 
'
Â
¿
P
o
p
u
p
s
 
p
e
r
m
i
t
i
d
o
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
I
M
A
G
E
U
P
L
O
A
D
S
'
,
 
'
C
a
r
g
a
r
 
l
a
s
 
i
m
Ã
¡
g
e
n
e
s
 
e
n
 
s
e
r
i
e
'
)
;

j
r
_
d
e
f
i
n
e
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
A
_
T
A
B
S
_
M
I
S
C
'
,
 
'
M
i
s
c
e
l
Ã
¡
n
e
o
'
)
;

j
r
_
d
e
f
i
n
e
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
A
'
,
 
'
C
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
d
e
 
l
a
 
p
Ã
¡
g
i
n
a
'
)
;

j
r
_
d
e
f
i
n
e
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
A
_
G
L
O
B
A
L
P
F
E
A
T
U
R
E
S
'
,
 
'
U
t
i
l
i
c
e
 
l
a
s
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
s
 
g
l
o
b
a
l
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
A
_
G
L
O
B
A
L
P
F
E
A
T
U
R
E
S
_
I
N
F
O
'
,
 
'
P
a
r
a
 
a
s
i
g
n
a
r
 
u
n
a
 
i
m
a
g
e
n
 
a
 
e
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
,
 
p
r
i
m
e
r
o
 
t
i
e
n
e
 
q
u
e
 
s
u
b
i
r
 
s
u
s
 
i
m
Ã
¡
g
e
n
e
s
 
a
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
n
e
g
o
c
i
o
s
 
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
p
f
e
a
t
u
r
e
s
/
 
f
o
l
d
e
r
.
 
'
)
;

j
r
_
d
e
f
i
n
e
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
A
_
I
C
O
N
'
,
 
'
I
c
o
n
o
'
)
;

j
r
_
d
e
f
i
n
e
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
A
_
G
L
O
B
A
L
_
S
E
A
R
C
H
O
P
T
I
O
N
'
,
 
'
E
s
c
o
j
a
 
e
l
 
p
l
u
g
i
n
 
d
e
 
l
a
 
b
Ã
º
s
q
u
e
d
a
 
q
u
e
 
u
s
t
e
d
 
d
e
s
e
e
 
u
t
i
l
i
z
a
r
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
N
O
R
E
S
U
L
T
S
'
,
 
'
<
b
>
L
o
 
s
i
e
n
t
o
,
 
s
u
 
b
Ã
º
s
q
u
e
d
a
 
n
o
 
d
e
v
o
l
v
i
Ã
³
 
r
e
s
u
l
t
a
d
o
s
.
 
M
o
d
i
f
i
q
u
e
 
p
o
r
 
f
a
v
o
r
 
s
u
 
b
Ã
º
s
q
u
e
d
a
 
y
 
p
r
u
e
b
e
 
o
t
r
a
 
v
e
z
.
<
/
b
>
'
)
;

j
r
_
d
e
f
i
n
e
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
A
R
E
Y
O
U
S
U
R
E
'
,
 
'
Â
¿
S
e
g
u
r
o
 
q
u
e
 
u
s
t
e
d
 
d
e
s
e
a
 
h
a
c
e
r
 
e
s
t
o
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
B
O
O
K
T
H
I
S
P
R
O
P
E
R
T
Y
'
,
 
'
R
e
s
e
r
v
a
r
 
u
n
a
 
p
r
o
p
i
e
d
a
d
'
)
;

/
/
v
1
.
4
c

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
T
A
R
I
F
F
S
_
S
H
O
W
T
A
R
I
F
F
S
I
N
L
I
N
E
'
,
 
'
Â
¿
M
o
s
t
r
a
r
 
T
a
r
i
f
a
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
B
A
S
I
C
T
E
M
P
L
A
T
E
_
S
H
O
W
A
D
D
R
E
S
S
'
,
 
'
D
i
r
e
c
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
B
A
S
I
C
T
E
M
P
L
A
T
E
_
S
H
O
W
D
E
T
A
I
L
S
'
,
 
'
I
n
f
o
r
m
a
c
i
Ã
³
n
 
d
e
t
a
l
l
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
B
A
S
I
C
T
E
M
P
L
A
T
E
_
S
H
O
W
R
O
O
M
S
'
,
 
'
C
l
i
c
k
 
p
a
r
a
 
h
a
b
i
t
a
c
i
o
n
e
s
 
y
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
B
A
S
I
C
T
E
M
P
L
A
T
E
_
S
H
O
W
A
D
D
R
E
S
S
_
T
I
T
L
E
'
,
 
'
M
o
s
t
r
a
r
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
d
e
 
d
i
r
e
c
c
i
Ã
³
n
 
d
e
b
a
j
o
 
d
e
 
e
s
t
e
 
e
n
l
a
c
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
B
A
S
I
C
T
E
M
P
L
A
T
E
_
S
H
O
W
D
E
T
A
I
L
S
_
T
I
T
L
E
'
,
 
'
M
o
s
t
r
a
r
 
d
e
t
a
l
l
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
d
e
b
a
j
o
 
d
e
 
e
s
t
e
 
e
n
l
a
c
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
B
A
S
I
C
T
E
M
P
L
A
T
E
_
S
H
O
W
R
O
O
M
S
_
T
I
T
L
E
'
,
 
'
M
o
s
t
r
a
r
 
h
a
b
i
t
a
c
i
o
n
e
s
 
y
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
e
s
 
d
e
b
a
j
o
 
d
e
 
e
s
t
e
 
e
n
l
a
c
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
T
A
R
I
F
F
S
_
M
O
D
E
L
_
S
I
N
G
L
E
T
A
R
I
F
F
'
,
 
'
T
a
r
i
f
a
 
s
i
m
p
l
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
T
A
R
I
F
F
S
_
M
O
D
E
L
_
A
V
E
R
A
G
E
S
'
,
 
'
P
r
o
m
e
d
i
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
T
A
R
I
F
F
S
_
M
O
D
E
L
'
,
 
'
S
e
l
e
c
c
i
o
n
e
 
e
l
 
m
o
d
e
l
o
 
d
e
 
t
a
r
i
f
a
 
a
 
u
t
i
l
i
z
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
T
A
R
I
F
F
S
_
M
O
D
E
L
_
D
E
S
C
'
,
 
'
U
d
.
 
t
i
e
n
e
 
d
i
s
p
o
n
i
b
l
e
 
d
o
s
 
m
Ã
©
t
o
d
o
s
 
d
e
 
c
a
l
c
u
l
a
r
 
l
a
s
 
t
a
r
i
f
a
s
.
 
P
r
i
m
e
r
o
,
 
e
l
 
m
Ã
©
t
o
d
o
 
d
e
 
"
t
a
r
i
f
a
 
s
i
m
p
l
e
"
 
e
l
 
c
u
a
l
 
p
e
r
m
i
t
e
 
o
f
e
r
t
a
r
 
d
i
f
e
r
e
n
t
e
s
 
t
a
r
i
f
a
s
 
a
l
 
h
u
Ã
©
s
p
e
d
 
y
 
e
l
 
c
Ã
¡
l
c
u
l
o
 
p
o
r
 
e
s
t
a
d
Ã
­
a
 
e
s
 
e
l
 
m
i
s
m
o
 
p
a
r
a
 
t
o
d
o
 
l
a
 
e
s
t
a
n
c
i
a
 
c
o
m
p
l
e
t
a
.
 
E
s
t
o
 
e
s
 
Ã
º
t
i
l
 
c
u
a
n
d
o
 
q
u
e
r
e
m
o
s
 
o
f
r
e
c
e
r
 
d
i
f
e
r
e
n
t
e
s
 
t
a
r
i
f
a
s
 
p
a
r
a
 
u
n
a
 
m
i
s
m
a
 
f
e
c
h
a
.
 
E
l
i
j
a
 
e
l
 
o
t
r
o
 
m
Ã
©
t
o
d
o
,
 
"
t
a
r
i
f
a
 
p
r
o
m
e
d
i
o
"
 
s
i
 
d
e
s
e
a
 
a
j
u
s
t
a
r
 
l
o
s
 
p
r
e
c
i
o
s
 
d
e
p
e
n
d
i
e
n
t
e
s
 
d
e
 
l
a
 
f
e
c
h
a
.
 
E
l
 
s
i
s
t
e
m
a
 
e
n
c
o
n
t
r
a
r
Ã
¡
 
t
o
d
a
s
 
l
a
s
 
t
a
r
i
f
a
s
 
p
a
r
a
 
c
a
d
a
 
d
Ã
­
a
 
d
e
 
r
e
s
e
r
v
a
 
y
 
r
e
t
o
r
n
a
r
Ã
¡
 
e
l
 
p
r
o
m
e
d
i
o
 
d
e
 
t
o
d
o
 
e
l
 
p
e
r
Ã
­
o
d
o
 
d
e
s
e
a
d
o
'
)
;

/
/
 
v
1
.
4
e

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
S
H
O
W
D
E
P
A
R
T
U
R
E
I
N
P
U
T
'
,
 
'
M
o
s
t
r
a
r
 
f
e
c
h
a
 
d
e
 
s
a
l
i
d
a
 
e
s
c
o
g
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
S
H
O
W
D
E
P
A
R
T
U
R
E
I
N
P
U
T
_
D
E
S
C
'
,
 
'
P
o
n
e
r
 
a
 
"
S
I
"
 
s
i
 
d
e
s
e
a
 
m
o
s
t
r
a
r
 
e
l
 
c
a
m
p
o
 
f
e
c
h
a
 
d
e
 
s
a
l
i
d
a
.
 
S
o
l
o
 
u
s
e
 
s
i
 
s
a
b
e
 
q
u
e
 
h
a
c
e
r
,
 
l
a
 
f
e
c
h
a
 
d
e
 
s
a
l
i
d
a
 
s
i
e
m
p
r
e
 
s
e
 
a
c
t
i
v
a
r
Ã
¡
 
e
l
 
d
Ã
­
a
 
d
e
s
p
u
Ã
©
s
 
d
e
 
l
a
 
l
l
e
g
a
d
a
.
'
)
;

/
/
 
v
1
.
4
f

j
r
_
d
e
f
i
n
e
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
C
O
M
_
P
R
O
P
E
R
T
Y
L
I
S
T
D
E
S
C
'
,
 
'
L
Ã
­
m
i
t
e
 
d
e
 
d
e
s
c
r
i
p
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
P
R
O
P
E
R
T
Y
L
I
S
T
D
E
S
C
_
D
E
S
C
'
,
 
'
E
s
t
o
 
l
i
m
i
t
a
 
l
a
 
c
a
n
t
i
d
a
d
 
d
e
 
c
a
r
a
c
t
e
r
e
s
 
m
o
s
t
r
a
d
o
s
 
c
u
a
n
d
o
 
s
e
 
d
e
s
c
r
i
b
e
 
u
n
a
 
p
r
o
p
i
e
d
a
d
.
'
)
;

/
/
 
v
1
.
4
g

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
D
A
T
E
F
O
R
M
A
T
S
T
Y
L
E
'
,
 
'
Â
¿
F
o
r
m
a
t
o
 
d
a
t
e
(
)
 
u
s
a
d
o
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
U
B
L
I
S
H
'
,
 
'
P
u
b
l
i
c
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
U
N
P
U
B
L
I
S
H
'
,
 
'
D
e
s
p
u
b
l
i
c
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
I
N
P
U
T
E
R
R
O
R
_
B
A
C
K
G
R
O
U
N
D
'
,
 
'
E
r
r
o
r
 
e
n
 
e
n
t
r
a
d
a
 
d
e
 
c
o
l
o
r
 
d
e
 
f
o
n
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
O
N
F
I
G
C
O
U
N
T
R
I
E
S
'
,
 
'
P
a
Ã
­
s
 
p
o
r
 
d
e
f
e
c
t
o
 
e
n
 
f
o
r
m
u
l
a
r
i
o
 
d
e
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
J
A
V
A
S
C
R
I
P
T
_
'
,
 
'
C
a
m
p
o
s
 
m
a
r
c
a
d
o
s
 
c
o
n
 
*
 
r
o
j
o
 
s
o
n
 
r
e
q
u
e
r
i
d
o
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
S
E
L
F
R
E
G
I
S
T
R
A
T
I
O
N
'
,
 
'
Â
¿
L
o
s
 
u
s
u
a
r
i
o
s
 
p
u
e
d
e
n
 
r
e
g
i
s
t
r
a
r
 
s
u
s
 
p
r
o
p
i
e
d
a
d
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
S
E
L
F
R
E
G
I
S
T
R
A
T
I
O
N
_
D
E
S
C
'
,
 
'
P
o
n
e
r
 
a
 
"
S
I
"
 
s
i
 
d
e
s
e
a
 
q
u
e
 
l
o
s
 
u
s
u
a
r
i
o
s
 
e
s
t
Ã
©
n
 
h
a
b
i
l
i
t
a
d
o
s
 
p
a
r
a
 
r
e
g
i
s
t
r
a
r
 
s
u
s
 
p
r
o
p
i
e
d
a
d
e
s
 
s
i
n
 
i
n
t
e
r
v
e
n
c
i
Ã
³
n
 
d
e
l
 
a
d
m
i
n
i
s
t
r
a
d
o
r
.
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
S
T
E
P
2
_
2
'
,
 
'
C
a
m
p
o
s
 
m
a
r
c
a
d
o
s
 
c
o
n
 
*
 
r
o
j
o
 
s
o
n
 
r
e
q
u
e
r
i
d
o
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
G
I
S
T
R
A
T
I
O
N
_
A
U
D
I
T
_
C
R
E
A
T
E
P
R
O
P
E
R
T
Y
'
,
 
'
P
r
o
p
i
e
d
a
d
 
c
r
e
a
d
a
'
)
;

/
/
 
v
1
.
4
i

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
O
N
T
H
S
_
S
T
A
R
T
O
F
Y
E
A
R
'
,
 
'
M
o
s
t
r
a
r
 
c
a
l
e
n
d
a
r
i
o
 
d
e
s
d
e
 
e
l
 
i
n
i
c
i
o
 
d
e
l
 
a
Ã
±
o
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
O
N
T
H
S
_
S
T
A
R
T
O
F
Y
E
A
R
_
D
E
S
C
'
,
 
'
E
l
 
c
a
l
e
n
d
a
r
i
o
 
d
e
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
 
s
e
 
m
o
s
t
r
a
r
Ã
¡
 
d
e
s
d
e
 
e
l
 
i
n
i
c
i
o
 
d
e
l
 
a
Ã
±
o
 
a
c
t
u
a
l
.
'
)
;

j
r
_
d
e
f
i
n
e
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
N
U
M
B
E
R
O
F
R
O
O
M
S
A
V
A
I
L
A
B
L
E
'
,
 
'
H
a
b
i
t
a
c
i
o
n
e
s
 
d
i
s
p
o
n
i
b
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
B
A
C
K
T
O
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
L
I
N
K
'
,
 
'
R
e
g
r
e
s
a
r
 
a
 
d
e
t
a
l
l
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
R
O
O
M
T
Y
P
E
S
'
,
 
'
T
i
p
o
s
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
A
_
G
L
O
B
A
L
_
S
E
A
R
C
H
O
P
T
I
O
N
_
R
A
N
D
O
M
L
I
M
I
T
'
,
 
'
L
Ã
­
m
i
t
e
 
d
e
 
b
Ã
º
s
q
u
e
d
a
 
a
l
e
a
t
o
r
i
a
'
)
;

j
r
_
d
e
f
i
n
e
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
S
H
O
W
G
O
O
G
L
E
C
U
R
R
E
N
C
Y
L
I
N
K
S
'
,
 
'
Â
¿
M
o
s
t
r
a
r
 
e
n
l
a
c
e
 
a
 
G
o
o
g
l
e
 
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
n
v
e
r
s
i
o
n
 
e
n
 
e
l
 
l
i
s
t
a
d
o
 
d
e
 
t
a
r
i
f
a
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
R
R
E
N
C
Y
C
O
N
V
E
R
S
I
O
N
T
E
X
T
'
,
 
'
C
o
n
v
e
r
t
i
r
 
p
r
e
c
i
o
 
a
 
:
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
L
L
O
W
H
T
M
L
E
D
I
T
O
R
'
,
 
'
Â
¿
P
e
r
m
i
t
i
r
 
a
 
l
o
s
 
u
s
u
a
r
i
o
s
 
e
d
i
t
a
r
 
u
s
a
n
d
o
 
e
d
i
t
o
r
e
s
 
H
T
M
L
?
'
)
;

/
/
 
v
2

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
'
U
s
e
 
e
s
t
e
 
f
o
r
m
u
l
a
r
i
o
 
h
a
c
e
r
 
s
u
 
r
e
s
e
r
v
a
.
 
M
u
e
v
a
 
e
l
 
c
u
r
s
o
r
 
s
o
b
r
e
 
l
a
s
 
i
m
Ã
¡
g
e
n
e
s
 
d
e
 
"
i
"
 
p
a
r
a
 
m
Ã
¡
s
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
s
o
b
r
e
 
l
a
 
c
o
l
u
m
n
a
.
 
M
o
d
i
f
i
q
u
e
 
s
u
s
 
d
e
t
a
l
l
e
s
 
d
e
l
 
r
e
g
i
s
t
r
o
 
c
o
m
o
 
l
a
 
f
e
c
h
a
 
d
e
 
l
l
e
g
a
d
a
 
y
 
l
a
 
s
a
l
i
d
a
 
y
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
h
u
Ã
©
s
p
e
d
e
s
,
 
e
n
t
o
n
c
e
s
 
s
e
l
e
c
c
i
o
n
e
 
l
a
 
h
a
b
i
t
a
c
i
Ã
³
n
 
q
u
e
 
d
e
s
e
a
 
d
e
 
l
a
 
l
i
s
t
a
 
d
e
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
.
 
P
u
l
s
e
 
s
o
b
r
e
 
c
u
a
l
q
u
i
e
r
 
h
a
b
i
t
a
c
i
Ã
³
n
 
d
i
s
p
o
n
i
b
l
e
 
p
a
r
a
 
a
g
r
e
g
a
r
l
a
 
a
 
s
u
 
r
e
s
e
r
v
a
.
 
C
u
a
n
d
o
 
l
o
 
h
a
y
a
 
h
e
c
h
o
,
 
u
s
t
e
d
 
p
u
e
d
e
 
a
g
r
e
g
a
r
 
c
u
a
l
q
u
i
e
r
 
e
x
t
r
a
 
o
p
t
a
t
i
v
o
,
 
t
a
m
b
i
Ã
©
n
 
p
u
e
d
e
 
p
r
o
p
o
r
c
i
o
n
a
r
 
s
u
s
 
d
e
t
a
l
l
e
s
 
d
e
 
d
i
r
e
c
c
i
Ã
³
n
.
 
C
u
a
n
d
o
 
e
l
 
f
o
r
m
u
l
a
r
i
o
 
e
s
t
e
 
c
o
m
p
l
e
t
o
 
u
s
e
 
e
l
 
b
o
t
Ã
³
n
 
p
a
r
a
 
c
o
n
f
i
r
m
a
r
 
s
u
 
r
e
g
i
s
t
r
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
I
N
S
T
R
U
C
T
I
O
N
S
_
S
R
P
'
,
 
'
U
s
e
 
e
s
t
e
 
f
o
r
m
u
l
a
r
i
o
 
h
a
c
e
r
 
s
u
 
r
e
s
e
r
v
a
.
 
M
u
e
v
a
 
e
l
 
c
u
r
s
o
r
 
s
o
b
r
e
 
l
a
s
 
i
m
Ã
¡
g
e
n
e
s
 
d
e
 
"
i
"
 
p
a
r
a
 
m
Ã
¡
s
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
s
o
b
r
e
 
l
a
 
c
o
l
u
m
n
a
.
 
M
o
d
i
f
i
q
u
e
 
s
u
s
 
d
e
t
a
l
l
e
s
 
d
e
l
 
r
e
g
i
s
t
r
o
 
c
o
m
o
 
l
a
 
f
e
c
h
a
 
d
e
 
l
l
e
g
a
d
a
 
y
 
l
a
 
s
a
l
i
d
a
 
y
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
h
u
Ã
©
s
p
e
d
e
s
,
 
e
n
t
o
n
c
e
s
 
s
e
l
e
c
c
i
o
n
e
 
l
a
 
h
a
b
i
t
a
c
i
Ã
³
n
 
q
u
e
 
d
e
s
e
a
 
d
e
 
l
a
 
l
i
s
t
a
 
d
e
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
.
 
P
u
l
s
e
 
s
o
b
r
e
 
c
u
a
l
q
u
i
e
r
 
h
a
b
i
t
a
c
i
Ã
³
n
 
d
i
s
p
o
n
i
b
l
e
 
p
a
r
a
 
a
g
r
e
g
a
r
l
a
 
a
 
s
u
 
r
e
s
e
r
v
a
.
 
C
u
a
n
d
o
 
l
o
 
h
a
y
a
 
h
e
c
h
o
,
 
u
s
t
e
d
 
p
u
e
d
e
 
a
g
r
e
g
a
r
 
c
u
a
l
q
u
i
e
r
 
e
x
t
r
a
 
o
p
t
a
t
i
v
o
,
 
t
a
m
b
i
Ã
©
n
 
p
u
e
d
e
 
p
r
o
p
o
r
c
i
o
n
a
r
 
s
u
s
 
d
e
t
a
l
l
e
s
 
d
e
 
d
i
r
e
c
c
i
Ã
³
n
.
 
C
u
a
n
d
o
 
e
l
 
f
o
r
m
u
l
a
r
i
o
 
e
s
t
e
 
c
o
m
p
l
e
t
o
 
u
s
e
 
e
l
 
b
o
t
Ã
³
n
 
p
a
r
a
 
c
o
n
f
i
r
m
a
r
 
s
u
 
r
e
g
i
s
t
r
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
P
A
R
T
I
C
U
L
A
R
S
'
,
 
'
P
a
r
t
i
c
u
l
a
r
i
d
a
d
e
s
 
d
e
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
P
A
R
T
I
C
U
L
A
R
S
_
D
E
S
C
'
,
 
'
S
e
l
e
c
c
i
o
n
e
 
l
o
s
 
d
e
t
a
l
l
e
s
 
r
e
q
u
e
r
i
d
o
s
 
d
e
 
s
u
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
'
,
 
'
D
i
s
p
o
n
i
b
i
l
i
d
a
d
 
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
_
D
E
S
C
'
,
 
'
S
e
l
e
c
c
i
o
n
e
 
l
a
 
h
a
b
i
t
a
c
i
Ã
³
n
 
q
u
e
 
d
e
s
e
a
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
_
D
E
S
C
_
S
R
P
'
,
 
'
M
i
r
a
r
 
s
i
 
l
a
 
p
r
o
p
i
e
d
a
d
 
e
s
t
Ã
¡
 
d
i
s
p
o
n
i
b
l
e
 
p
a
r
a
 
e
s
t
a
 
f
e
c
h
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
'
,
 
'
E
x
t
r
a
s
 
o
p
c
i
o
n
a
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
_
D
E
S
C
'
,
 
'
S
e
l
e
c
c
i
o
n
e
 
q
u
e
 
e
x
t
r
a
 
o
p
c
i
o
n
a
l
 
d
e
s
e
a
 
i
n
c
l
u
i
r
 
e
n
 
l
a
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
P
E
R
D
A
Y
'
,
 
'
P
o
r
 
n
o
c
h
e
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
A
D
D
R
E
S
S
'
,
 
'
D
i
r
e
c
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
A
D
D
R
E
S
S
_
D
E
S
C
'
,
 
'
P
o
r
 
f
a
v
o
r
 
i
n
g
r
e
s
e
 
l
o
s
 
d
e
t
a
l
l
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
R
O
O
M
S
'
,
 
'
H
a
b
i
t
a
c
i
o
n
e
s
 
d
i
s
p
o
n
i
b
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
S
E
L
E
C
T
E
D
R
O
O
M
S
'
,
 
'
H
a
b
i
t
a
c
i
o
n
e
s
 
s
e
l
e
c
c
i
o
n
a
d
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
E
A
R
L
I
E
S
T
P
O
S
S
I
B
L
E
A
R
R
I
V
A
L
D
A
T
E
'
,
 
'
<
b
r
>
L
a
 
p
o
s
i
b
l
e
 
f
e
c
h
a
 
d
e
 
l
l
e
g
a
d
a
 
m
Ã
¡
s
 
c
e
r
c
a
n
a
 
e
s
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
R
O
O
M
'
,
 
'
P
o
r
 
n
o
c
h
e
:
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
R
O
O
M
_
T
O
T
A
L
'
,
 
'
T
o
t
a
l
:
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
E
X
T
R
A
S
'
,
 
'
E
x
t
r
a
s
:
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
A
X
'
,
 
'
i
m
p
u
e
s
t
o
s
:
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
D
I
S
C
O
U
N
T
'
,
 
'
D
e
s
c
u
e
n
t
o
s
:
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
O
T
A
L
'
,
 
'
T
o
t
a
l
 
F
i
n
a
l
:
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
O
T
A
L
I
N
P
A
R
T
Y
'
,
 
'
H
u
Ã
©
s
p
e
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
C
L
I
C
K
H
E
R
E
C
A
P
T
I
O
N
'
,
 
'
C
l
i
c
k
 
p
a
r
a
 
a
Ã
±
a
d
i
r
 
e
s
t
a
 
h
a
b
i
t
a
c
i
Ã
³
n
 
a
 
s
u
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
C
L
I
C
K
H
E
R
E
C
A
P
T
I
O
N
_
R
E
M
O
V
E
'
,
 
'
C
l
i
c
k
 
p
a
r
a
 
e
l
i
m
i
n
a
r
 
e
s
t
a
 
h
a
b
i
t
a
c
i
Ã
³
n
 
d
e
 
s
u
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
V
A
R
I
A
N
C
E
S
_
C
U
S
T
O
M
E
R
T
Y
P
E
S
'
,
 
'
T
i
p
o
s
 
d
e
 
h
u
Ã
©
s
p
e
d
'
)
;

j
r
_
d
e
f
i
n
e
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
V
A
R
I
A
N
C
E
S
_
T
Y
P
E
'
,
 
'
T
i
p
o
'
)
;

j
r
_
d
e
f
i
n
e
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
V
A
R
I
A
N
C
E
S
_
T
Y
P
E
_
T
T
'
,
 
'
T
i
p
o
 
d
e
 
h
u
Ã
©
s
p
e
d
,
 
E
j
:
 
N
i
Ã
±
o
s
 
5
-
1
0
,
 
o
 
e
s
t
u
d
i
a
n
t
e
s
 
'
)
;

j
r
_
d
e
f
i
n
e
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
V
A
R
I
A
N
C
E
S
_
N
O
T
E
S
'
,
 
'
N
o
t
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
V
A
R
I
A
N
C
E
S
_
N
O
T
E
S
_
T
T
'
,
 
'
N
o
t
a
s
 
d
e
 
l
o
 
q
u
e
 
u
s
t
e
d
 
p
u
e
d
e
 
q
u
e
r
e
r
 
h
a
c
e
r
 
c
o
n
 
r
e
s
p
e
c
t
o
 
a
 
e
s
t
e
 
t
i
p
o
 
d
e
 
h
u
Ã
©
s
p
e
d
'
)
;

j
r
_
d
e
f
i
n
e
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
V
A
R
I
A
N
C
E
S
_
M
A
X
I
M
U
M
'
,
 
'
M
Ã
¡
x
i
m
o
'
)
;

j
r
_
d
e
f
i
n
e
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
V
A
R
I
A
N
C
E
S
_
M
A
X
I
M
U
M
_
T
T
'
,
 
'
M
Ã
¡
x
i
m
o
 
n
Ã
º
m
e
r
o
 
d
e
 
e
s
t
e
 
t
i
p
o
 
d
e
 
h
u
Ã
©
s
p
e
d
 
q
u
e
 
p
u
e
d
e
 
s
e
r
 
s
e
l
e
c
c
i
o
n
a
d
o
 
e
n
 
l
a
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
V
A
R
I
A
N
C
E
S
_
I
S
P
E
R
C
E
N
T
A
G
E
'
,
 
'
E
s
 
p
o
r
c
e
n
t
a
j
e
'
)
;

j
r
_
d
e
f
i
n
e
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
V
A
R
I
A
N
C
E
S
_
I
S
P
E
R
C
E
N
T
A
G
E
_
T
T
'
,
 
'
L
a
 
f
i
g
u
r
a
 
c
a
l
c
u
l
a
d
a
 
e
s
 
u
n
 
p
o
r
c
e
n
t
a
j
e
 
d
e
 
l
a
 
f
i
g
u
r
a
 
B
A
S
E
 
c
a
l
c
u
l
a
d
a
 
p
a
r
a
 
l
a
 
h
a
b
i
t
a
c
i
Ã
³
n
.
 
S
i
 
e
s
t
o
 
s
e
 
p
o
n
e
 
a
 
"
N
O
"
 
e
n
t
o
n
c
e
s
 
l
a
 
f
i
g
u
r
a
 
q
u
e
 
u
s
t
e
d
 
e
s
p
e
c
i
f
i
c
a
 
s
i
m
p
l
e
m
e
n
t
e
 
s
e
 
a
g
r
e
g
a
 
o
 
s
u
b
s
t
r
a
e
 
d
e
l
 
v
a
l
o
r
 
B
A
S
E
 
d
e
 
l
a
 
h
a
b
i
t
a
c
i
Ã
³
n
.
'
)
;

j
r
_
d
e
f
i
n
e
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
V
A
R
I
A
N
C
E
S
_
P
O
S
N
E
G
'
,
 
'
Â
¿
A
Ã
±
a
d
i
r
 
v
a
r
i
a
n
z
a
?
'
)
;

j
r
_
d
e
f
i
n
e
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
V
A
R
I
A
N
C
E
S
_
P
O
S
N
E
G
_
T
T
'
,
 
'
L
a
 
f
i
g
u
r
a
 
c
a
l
c
u
l
a
d
a
 
s
e
 
a
g
r
e
g
a
 
o
 
e
l
i
m
i
n
a
 
d
e
 
l
a
 
f
i
g
u
r
a
 
B
A
S
E
 
c
a
l
c
u
l
a
d
a
 
p
a
r
a
 
l
a
 
h
a
b
i
t
a
c
i
Ã
³
n
.
 
P
o
n
g
a
 
e
s
t
o
 
a
 
"
N
O
"
 
s
i
 
u
s
t
e
d
 
q
u
i
e
r
e
 
e
s
t
o
 
p
a
r
a
 
u
n
 
d
e
s
c
u
e
n
t
o
 
d
e
 
l
a
 
f
i
g
u
r
a
 
B
A
S
E
.
'
)
;

j
r
_
d
e
f
i
n
e
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
V
A
R
I
A
N
C
E
S
_
V
A
R
I
A
N
C
E
'
,
 
'
V
a
r
i
a
n
z
a
'
)
;

j
r
_
d
e
f
i
n
e
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
V
A
R
I
A
N
C
E
S
_
V
A
R
I
A
N
C
E
_
T
T
'
,
 
'
C
a
n
t
i
d
a
d
 
a
 
v
a
r
i
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
R
E
O
R
D
E
R
_
C
U
S
T
O
M
E
R
T
Y
P
E
'
,
 
'
M
o
d
i
f
i
c
a
d
o
 
t
i
p
o
 
d
e
 
o
r
d
e
n
 
d
e
 
h
u
Ã
©
s
p
e
d
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
D
E
L
E
T
E
_
C
U
S
T
O
M
E
R
T
Y
P
E
'
,
 
'
E
l
i
m
i
n
a
d
o
 
t
i
p
o
 
d
e
 
h
u
Ã
©
s
p
e
d
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
I
N
S
E
R
T
_
C
U
S
T
O
M
E
R
T
Y
P
E
'
,
 
'
C
r
e
a
d
o
 
t
i
p
o
 
d
e
 
h
u
Ã
©
s
p
e
d
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
C
U
S
T
O
M
E
R
T
Y
P
E
'
,
 
'
A
c
t
u
a
l
i
z
a
d
o
 
t
i
p
o
 
d
e
 
h
u
Ã
©
s
p
e
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
C
U
S
T
O
M
E
R
T
Y
P
E
_
U
P
D
A
T
E
D
'
,
 
'
A
c
t
u
a
l
i
z
a
d
o
 
t
i
p
o
 
d
e
 
h
u
Ã
©
s
p
e
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
S
H
O
W
R
O
O
M
S
L
I
S
T
L
I
N
K
'
,
 
'
Â
¿
M
o
s
t
r
a
r
 
e
n
l
a
c
e
 
a
 
l
i
s
t
a
d
o
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
e
n
 
l
a
 
p
Ã
¡
g
i
n
a
 
d
e
 
d
e
t
a
l
l
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
S
H
O
W
O
N
L
Y
A
V
L
C
A
L
'
,
 
'
Â
¿
M
o
s
t
r
a
r
 
<
b
>
s
o
l
o
<
/
b
>
 
l
i
s
t
a
d
o
 
d
e
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
p
o
r
 
c
a
l
e
n
d
a
r
i
o
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
S
H
O
W
O
N
L
Y
A
V
L
C
A
L
_
D
E
S
C
'
,
 
'
C
a
m
b
i
e
 
e
s
t
o
 
a
 
"
S
Ã
­
"
 
p
a
r
a
 
d
e
s
a
c
t
i
v
a
r
 
d
e
s
p
l
i
e
g
u
e
 
d
e
l
 
t
Ã
­
t
u
l
o
 
d
e
 
p
r
o
p
i
e
d
a
d
 
y
 
d
e
t
a
l
l
e
s
,
 
p
a
r
a
 
q
u
e
 
s
Ã
³
l
o
 
e
l
 
c
a
l
e
n
d
a
r
i
o
 
d
e
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
s
e
a
 
v
i
s
t
o
 
e
n
 
l
a
 
s
e
c
c
i
Ã
³
n
 
d
e
 
d
e
t
a
l
l
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
.
 
P
e
n
s
a
d
o
 
p
a
r
a
 
u
s
u
a
r
i
o
s
 
q
u
e
 
a
l
q
u
i
l
a
n
 
l
a
s
 
h
a
b
i
t
a
c
i
o
n
e
s
 
d
e
 
l
a
s
 
p
r
o
p
i
e
d
a
d
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
M
I
N
I
M
U
M
I
N
T
E
R
V
A
L
'
,
 
'
I
n
t
e
r
v
a
l
o
 
m
Ã
­
n
i
m
o
 
d
e
 
L
l
e
g
a
d
a
-
S
a
l
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
M
I
N
I
M
U
M
I
N
T
E
R
V
A
L
_
D
E
S
C
'
,
 
'
E
l
 
i
n
t
e
r
v
a
l
o
 
m
Ã
­
n
i
m
o
 
e
n
 
l
a
 
r
e
s
e
r
v
a
 
e
n
t
r
e
 
l
a
s
 
f
e
c
h
a
s
 
d
e
 
l
l
e
g
a
d
a
 
y
 
s
a
l
i
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
B
O
O
K
I
N
G
F
O
R
M
_
S
H
O
W
R
O
O
M
N
O
'
,
 
'
L
i
s
t
a
d
o
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
e
n
 
l
a
 
r
e
s
e
r
v
a
 
m
u
e
s
t
r
a
 
n
Ã
º
m
e
r
o
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
B
O
O
K
I
N
G
F
O
R
M
_
S
H
O
W
R
O
O
M
N
A
M
E
'
,
 
'
L
i
s
t
a
d
o
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
e
n
 
l
a
 
r
e
s
e
r
v
a
 
m
u
e
s
t
r
a
 
n
o
m
b
r
e
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
B
O
O
K
I
N
G
F
O
R
M
_
S
H
O
W
T
A
R
I
F
F
T
I
T
L
E
'
,
 
'
L
i
s
t
a
d
o
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
e
n
 
l
a
 
r
e
s
e
r
v
a
 
m
u
e
s
t
r
a
 
l
i
s
t
a
d
o
 
d
e
 
t
a
r
i
f
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
O
R
D
E
R
'
,
 
'
O
r
d
e
n
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
Q
U
I
R
E
D
F
I
E
L
D
S
'
,
 
'
R
e
q
u
e
r
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
D
A
Y
S
B
E
F
O
R
E
F
I
R
S
T
B
O
O
K
I
N
G
'
,
 
'
D
Ã
­
a
s
 
a
n
t
e
s
 
d
e
 
l
a
 
l
l
e
g
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
D
A
Y
S
B
E
F
O
R
E
F
I
R
S
T
B
O
O
K
I
N
G
_
D
E
S
C
'
,
 
'
L
a
p
s
o
 
m
Ã
­
n
i
m
o
 
d
e
 
d
Ã
­
a
s
 
e
n
t
r
e
 
h
o
y
 
y
 
e
l
 
d
Ã
­
a
 
d
e
 
l
l
e
g
a
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
D
T
V
'
,
 
'
V
a
r
i
a
c
i
o
n
e
s
 
d
e
l
 
t
i
p
o
 
d
e
 
f
e
c
h
a
'
)
;

j
r
_
d
e
f
i
n
e
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
D
T
V
_
D
O
W
'
,
 
'
D
Ã
­
a
 
d
e
 
l
a
 
s
e
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
D
E
F
A
U
L
T
N
U
M
B
E
R
O
F
F
I
R
S
T
G
U
E
S
T
T
Y
P
E
'
,
 
'
T
i
p
o
 
d
e
 
h
u
Ã
©
s
p
e
d
 
p
o
r
 
d
e
f
e
c
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
D
E
F
A
U
L
T
N
U
M
B
E
R
O
F
F
I
R
S
T
G
U
E
S
T
T
Y
P
E
D
E
S
C
'
,
 
'
N
Ã
º
m
e
r
o
 
p
o
r
 
d
e
f
e
c
t
o
 
d
e
l
 
p
r
i
m
e
r
 
t
i
p
o
 
d
e
 
h
u
Ã
©
s
p
e
d
 
a
 
m
o
s
t
r
a
r
,
 
s
i
 
u
s
a
 
d
i
f
e
r
e
n
t
e
s
 
t
i
p
o
s
 
d
e
 
h
u
Ã
©
s
p
e
d
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
R
E
G
I
S
T
E
R
E
D
U
S
E
R
S
O
N
L
Y
B
O
O
K
'
,
 
'
Â
¿
S
o
l
o
 
l
o
s
 
u
s
u
a
r
i
o
s
 
r
e
g
i
s
t
r
a
d
o
s
 
p
u
e
d
e
n
 
r
e
s
e
r
v
a
r
 
e
n
 
l
Ã
­
n
e
a
?
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
G
I
S
T
E
R
E
D
U
S
E
R
S
O
N
L
Y
B
O
O
K
'
,
 
'
L
o
 
s
e
n
t
i
m
o
s
,
 
p
a
r
a
 
r
e
s
e
r
v
a
r
 
e
n
 
l
Ã
­
n
e
a
 
d
e
b
e
 
s
e
r
 
u
n
 
u
s
u
a
r
i
o
 
r
e
g
i
s
t
r
a
d
o
.
 
C
l
i
c
k
 
a
q
u
Ã
­
 
p
a
r
a
 
r
e
g
i
s
t
r
a
r
s
e
 
e
n
 
e
l
 
s
i
t
i
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
V
L
C
A
L
_
C
U
R
R
E
N
T
B
O
O
K
I
N
G
F
O
N
T
'
,
 
'
C
o
l
o
r
 
d
e
 
t
e
x
t
o
 
p
a
r
a
 
e
n
l
a
c
e
s
 
e
n
 
r
e
s
e
r
v
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
V
L
C
A
L
_
W
E
E
K
E
N
D
B
O
R
D
E
R
'
,
 
'
B
o
r
d
e
s
 
f
i
n
 
d
e
 
s
e
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
V
L
C
A
L
_
B
O
O
K
I
N
G
_
K
E
Y
'
,
 
'
H
a
b
i
t
a
c
i
Ã
³
n
 
r
e
s
e
r
v
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
V
L
C
A
L
_
B
L
A
C
K
_
K
E
Y
'
,
 
'
R
e
s
e
r
v
a
 
n
e
g
r
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
D
E
P
O
S
I
T
_
D
E
P
O
S
I
T
R
O
U
N
D
U
P
'
,
 
'
Â
¿
R
e
d
o
n
d
e
a
r
 
d
e
p
Ã
³
s
i
t
o
 
a
 
n
Ã
º
m
e
r
o
 
e
n
t
e
r
o
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
D
E
P
O
S
I
T
_
C
H
A
R
G
E
D
E
P
O
S
I
T
'
,
 
'
Â
¿
C
a
r
g
a
r
 
d
e
p
Ã
³
s
i
t
o
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
T
A
R
I
F
F
P
R
I
C
E
S
A
R
E
W
E
E
K
L
Y
'
,
 
'
Â
¿
C
a
r
g
o
s
 
d
e
 
t
a
r
i
f
a
s
 
a
l
m
a
c
e
n
a
d
o
s
 
c
o
m
o
 
f
i
g
u
r
a
s
 
s
e
m
a
n
a
l
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
T
A
R
I
F
F
P
R
I
C
E
S
A
R
E
W
E
E
K
L
Y
_
D
E
S
C
'
,
 
'
T
i
e
n
e
 
l
a
 
o
p
c
i
Ã
³
n
 
d
e
 
a
l
m
a
c
e
n
a
r
 
l
o
s
 
c
a
r
g
o
s
 
p
o
r
 
t
a
r
i
f
a
 
e
n
 
v
a
l
o
r
e
s
 
d
i
a
r
i
o
s
 
y
 
s
e
m
a
n
a
l
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
W
E
E
K
'
,
 
'
P
r
e
c
i
o
 
p
o
r
 
s
e
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
R
E
C
U
R
R
I
N
G
'
,
 
'
F
e
c
h
a
s
 
d
e
 
l
l
e
g
a
d
a
 
a
r
r
e
g
l
a
d
a
s
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
R
E
C
U
R
R
I
N
G
_
D
E
S
C
'
,
 
'
C
u
a
n
d
o
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
e
s
 
s
e
l
e
c
c
i
o
n
a
d
a
,
 
l
o
s
 
n
Ã
º
m
e
r
o
s
 
d
e
 
l
a
s
 
f
e
c
h
a
s
 
s
o
n
 
m
o
s
t
r
a
d
a
s
 
e
n
 
e
l
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
A
R
R
I
V
A
L
D
A
T
E
_
I
N
V
A
L
I
D
'
,
 
'
F
e
c
h
a
 
d
e
 
l
l
e
g
a
d
a
 
i
n
c
o
r
r
e
c
t
a
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
D
E
P
A
R
T
U
R
E
D
A
T
E
_
I
N
V
A
L
I
D
'
,
 
'
F
e
c
h
a
 
d
e
 
s
a
l
i
d
a
 
i
n
c
o
r
r
e
c
t
a
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
B
O
O
K
I
N
G
_
T
O
O
_
S
H
O
R
T
1
'
,
 
'
L
a
 
r
e
s
e
r
v
a
 
e
s
 
m
u
y
 
c
o
r
t
a
.
 
S
e
 
n
e
c
e
s
i
t
a
n
 
v
a
r
i
o
s
 
d
Ã
­
a
s
 
e
n
t
r
e
 
l
a
 
l
l
e
g
a
d
a
 
y
 
l
a
 
s
a
l
i
d
a
:
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
B
O
O
K
I
N
G
_
T
O
O
_
S
H
O
R
T
2
'
,
 
'
E
l
 
i
n
t
e
r
v
a
l
o
 
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
G
U
E
S
T
_
T
Y
P
E
_
I
N
C
O
R
R
E
C
T
'
,
 
'
V
a
r
i
a
n
t
e
 
t
i
p
o
 
d
e
 
h
u
Ã
©
s
p
e
d
 
i
n
c
o
r
r
e
c
t
a
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
S
E
L
E
C
T
_
G
U
E
S
T
_
N
U
M
B
E
R
S
'
,
 
'
S
e
l
e
c
c
i
o
n
e
 
e
l
 
t
i
p
o
 
d
e
 
h
u
Ã
©
s
p
e
d
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
T
O
O
_
M
A
N
Y
_
I
N
_
P
A
R
T
Y
_
F
O
R
_
T
A
R
I
F
F
S
'
,
 
'
D
e
m
a
s
i
a
d
a
s
 
o
p
c
i
o
n
e
s
 
p
a
r
a
 
l
a
 
l
i
s
t
a
 
d
e
 
t
a
r
i
f
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
M
O
R
E
_
R
O
O
M
S
_
T
H
A
N
_
G
U
E
S
T
S
'
,
 
'
H
a
 
s
e
l
e
c
c
i
o
n
a
d
o
 
m
Ã
¡
s
 
h
a
b
i
t
a
c
i
o
n
e
s
 
q
u
e
 
h
u
Ã
©
s
p
e
d
e
s
,
 
c
l
i
c
k
 
e
n
 
u
n
a
 
h
a
b
i
t
a
c
i
Ã
³
n
 
p
a
r
a
 
e
l
i
m
i
n
a
r
l
a
 
d
e
 
s
u
 
s
e
l
e
c
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
T
O
O
_
M
A
N
Y
_
G
U
E
S
T
S
_
F
O
R
_
B
E
D
S
'
,
 
'
D
e
m
a
s
i
a
d
o
s
 
h
u
Ã
©
s
p
e
d
e
s
 
p
a
r
a
 
l
a
s
 
c
a
m
a
s
 
d
i
s
p
o
n
i
b
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
C
H
O
O
S
E
_
M
O
R
E
_
R
O
O
M
S
'
,
 
'
N
e
c
e
s
i
t
a
 
m
Ã
¡
s
 
h
a
b
i
t
a
c
i
o
n
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
S
E
L
E
C
T
_
A
_
R
O
O
M
'
,
 
'
S
e
l
e
c
c
i
o
n
e
 
u
n
a
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
F
I
R
S
T
N
A
M
E
'
,
 
'
N
o
m
b
r
e
 
r
e
q
u
e
r
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
S
U
R
N
A
M
E
'
,
 
'
A
p
e
l
l
i
d
o
 
r
e
q
u
e
r
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
H
O
U
S
E
N
O
'
,
 
'
N
o
.
 
c
a
s
a
 
r
e
q
u
e
r
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
S
T
R
E
E
T
'
,
 
'
C
a
l
l
e
 
 
r
e
q
u
e
r
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
T
O
W
N
'
,
 
'
P
u
e
b
l
o
 
r
e
q
u
e
r
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
R
E
G
I
O
N
'
,
 
'
R
e
g
i
Ã
³
n
 
r
e
q
u
e
r
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
P
O
S
T
C
O
D
E
'
,
 
'
C
Ã
³
d
i
g
o
 
p
o
s
t
a
l
 
r
e
q
u
e
r
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
C
O
U
N
T
R
Y
'
,
 
'
P
a
Ã
­
s
 
r
e
q
u
e
r
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
L
A
N
D
L
I
N
E
'
,
 
'
T
e
l
Ã
©
f
o
n
o
 
r
e
q
u
e
r
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
C
E
L
L
P
H
O
N
E
'
,
 
'
M
Ã
³
v
i
l
 
r
e
q
u
e
r
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
E
M
A
I
L
'
,
 
'
E
m
a
i
l
 
r
e
q
u
e
r
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
S
R
P
_
W
E
H
A
V
E
V
A
C
A
N
C
I
E
S
'
,
 
'
T
e
n
e
m
o
s
 
V
A
C
A
N
T
E
S
!
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
N
O
R
O
O
M
S
S
E
L
E
C
T
E
D
Y
E
T
'
,
 
'
N
o
 
h
a
y
 
h
a
b
i
t
a
c
i
o
n
e
s
 
s
e
l
e
c
c
i
o
n
a
d
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
_
N
U
M
B
E
R
'
,
 
'
R
e
s
e
r
v
a
 
n
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
I
N
P
U
T
O
K
T
O
B
O
O
K
_
B
A
C
K
G
R
O
U
N
D
'
,
 
'
O
k
 
p
a
r
a
 
r
e
s
e
r
v
a
r
,
 
m
e
n
s
a
j
e
 
d
e
 
f
o
n
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
D
U
M
P
T
E
M
P
L
A
T
E
D
A
T
A
'
,
 
'
Â
¿
D
e
s
c
a
r
g
a
r
 
v
a
r
i
a
b
l
e
s
 
d
e
 
p
l
a
n
t
i
l
l
a
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
D
U
M
P
T
E
M
P
L
A
T
E
D
A
T
A
_
D
E
S
C
'
,
 
'
A
c
t
i
v
a
r
 
e
s
t
o
 
p
a
r
a
 
d
e
s
c
a
r
g
a
r
 
v
a
r
i
a
b
l
e
s
 
d
e
 
l
a
 
p
l
a
n
t
i
l
l
a
 
p
a
r
a
 
c
a
d
a
 
v
i
s
t
a
.
 
Ã
š
t
i
l
 
s
i
 
d
e
s
e
a
 
v
e
r
 
s
i
 
c
i
e
r
t
o
 
e
l
e
m
e
n
t
o
 
e
s
t
Ã
¡
 
d
i
s
p
o
n
i
b
l
e
 
p
a
r
a
 
s
e
r
 
u
s
a
d
o
 
e
n
 
u
n
a
 
p
l
a
n
t
i
l
l
a
 
d
e
t
e
r
m
i
n
a
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
S
U
P
P
L
I
M
E
N
T
S
_
S
I
N
G
L
E
P
E
R
S
O
N
_
I
S
P
E
R
C
E
N
T
A
G
E
'
,
 
'
F
i
g
u
r
a
 
e
s
 
p
o
r
c
e
n
t
a
j
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
S
U
P
P
L
I
M
E
N
T
S
_
S
I
N
G
L
E
P
E
R
S
O
N
_
I
S
P
E
R
C
E
N
T
A
G
E
_
D
E
S
C
'
,
 
'
P
o
n
g
a
 
e
s
t
o
 
a
 
"
S
Ã
­
"
 
s
i
 
l
a
 
f
i
g
u
r
a
 
d
e
 
c
Ã
¡
l
c
u
l
o
 
d
e
 
p
e
r
s
o
n
a
s
 
e
s
 
u
n
 
p
o
r
c
e
n
t
a
j
e
.
 
S
i
 
n
o
 
e
n
t
o
n
c
e
s
 
s
e
 
a
p
l
i
c
a
r
Ã
¡
 
c
o
m
o
 
u
n
a
 
c
i
f
r
a
 
f
i
j
a
.
'
)
;

/
/
v
2
r
c
2

j
r
_
d
e
f
i
n
e
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
C
O
M
_
L
I
M
I
T
R
O
O
M
S
L
I
S
T
'
,
 
'
L
Ã
­
m
i
t
e
 
e
n
 
h
a
b
i
t
a
c
i
o
n
e
s
/
t
a
r
i
f
a
s
 
d
i
s
p
o
n
i
b
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
L
I
M
I
T
R
O
O
M
S
L
I
S
T
_
D
E
S
C
'
,
 
'
U
s
e
 
e
s
t
o
 
p
a
r
a
 
l
i
m
i
t
a
r
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
c
u
a
r
t
o
s
 
d
i
s
p
o
n
i
b
l
e
s
 
y
 
a
r
a
n
c
e
l
e
s
 
q
u
e
 
s
e
 
l
i
s
t
a
n
 
e
n
 
e
l
 
f
o
r
m
u
l
a
r
i
o
 
d
e
 
r
e
s
e
r
v
a
c
i
Ã
³
n
.
 
P
Ã
³
n
g
a
l
o
 
a
 
c
e
r
o
 
s
i
 
u
s
t
e
d
 
n
o
 
q
u
i
e
r
e
 
h
a
b
i
l
i
t
a
r
 
l
i
m
i
t
a
c
i
o
n
e
s
.
 
'
)
;

j
r
_
d
e
f
i
n
e
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
S
R
P
_
W
E
H
A
V
E
N
O
V
A
C
A
N
C
I
E
S
'
,
 
'
N
O
 
h
a
y
 
V
A
C
A
N
T
E
S
!
'
)
;

/
/
 
T
r
a
n
s
l
a
t
e
 
f
r
o
m
 
h
e
r
e

/
/
 
I
n
t
r
o
d
u
c
e
d
 
i
n
 
v
2
.
5

/
/
 
v
2
.
6

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
T
N
O
W
'
,
 
'
R
e
s
e
r
v
e
 
a
h
o
r
a
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
J
R
C
O
N
F
I
G
_
G
L
O
B
A
L
E
D
I
T
I
N
G
'
,
 
'
Â
¿
M
o
d
o
 
d
e
 
e
d
i
c
i
Ã
³
n
 
G
l
o
b
a
l
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
J
R
C
O
N
F
I
G
_
G
L
O
B
A
L
E
D
I
T
I
N
G
_
D
E
S
C
'
,
 
'
T
e
n
g
a
 
c
u
i
d
a
d
o
 
c
o
n
 
e
s
t
a
 
f
u
n
c
i
Ã
³
n
.
 
S
i
 
s
e
 
e
s
t
a
b
l
e
c
e
 
e
n
 
S
Ã
­
,
 
e
l
 
m
o
d
o
 
d
e
 
e
d
i
c
i
Ã
³
n
 
a
f
e
c
t
a
r
Ã
¡
 
e
l
 
t
e
x
t
o
 
a
 
m
e
d
i
d
a
 
p
a
r
a
 
t
o
d
a
s
 
l
a
s
 
p
r
o
p
i
e
d
a
d
e
s
 
e
n
 
e
l
 
s
i
s
t
e
m
a
 
p
a
r
a
 
l
a
 
c
o
n
s
t
a
n
t
e
 
q
u
e
 
s
e
 
e
s
t
Ã
¡
 
e
d
i
t
a
n
d
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
J
R
C
O
N
F
I
G
_
G
L
O
B
A
L
C
U
R
R
E
N
C
Y
'
,
 
'
S
i
m
b
o
l
o
 
G
l
o
b
a
l
 
d
e
 
m
o
n
e
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
J
R
C
O
N
F
I
G
_
I
S
W
R
A
P
P
E
D
'
,
 
'
P
l
e
g
a
d
o
 
d
e
 
C
o
m
p
o
n
e
n
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
J
R
C
O
N
F
I
G
_
I
S
W
R
A
P
P
E
D
_
D
E
S
C
'
,
 
'
P
o
n
g
a
 
e
s
t
o
 
a
 
S
Ã
­
,
 
s
i
 
e
l
 
c
o
m
p
o
n
e
n
t
e
 
e
s
t
Ã
¡
 
p
l
e
g
a
d
o
 
d
e
 
m
a
n
e
r
a
 
q
u
e
 
l
a
s
 
Ã
¡
r
e
a
s
 
d
e
l
 
m
Ã
³
d
u
l
o
 
y
 
d
e
 
c
a
b
e
c
e
r
a
 
n
o
 
s
o
n
 
v
i
s
i
b
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
W
E
E
K
E
N
D
O
N
L
Y
'
,
 
'
S
o
l
o
 
f
i
n
e
s
 
d
e
 
S
e
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
W
E
E
K
E
N
D
D
A
Y
S
'
,
 
'
D
Ã
­
a
s
 
d
e
 
f
i
n
 
d
e
 
s
e
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
W
E
E
K
E
N
D
D
A
Y
S
_
D
E
S
C
'
,
 
'
E
s
t
a
b
l
e
z
c
a
 
s
u
s
 
d
Ã
­
a
s
 
d
e
 
f
i
n
 
d
e
 
s
e
m
a
n
a
.
 
T
a
r
i
f
a
s
 
q
u
e
 
p
e
r
m
i
t
a
n
 
o
 
n
o
 
f
i
n
e
s
 
d
e
 
s
e
m
a
n
a
 
t
e
n
d
r
Ã
¡
n
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
e
n
 
c
u
e
n
t
a
 
a
l
 
g
e
n
e
r
a
r
 
l
a
 
l
i
s
t
a
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
E
D
I
T
P
R
O
P
E
R
T
Y
_
S
E
L
E
C
T
C
O
U
N
T
R
Y
'
,
 
'
S
e
l
e
c
c
i
o
n
e
 
s
u
 
p
a
Ã
­
s
 
a
n
t
e
s
 
d
e
 
a
Ã
±
a
d
i
r
 
o
t
r
a
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
E
D
I
T
P
R
O
P
E
R
T
Y
_
S
A
V
E
B
E
F
O
R
E
U
P
L
O
A
D
'
,
 
'
G
r
a
b
e
 
s
u
s
 
c
a
m
b
i
o
s
 
a
n
t
e
s
 
s
u
b
i
r
 
i
m
Ã
¡
g
e
n
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
T
A
R
I
F
F
S
F
R
O
M
'
,
 
'
P
r
e
c
i
o
s
 
d
e
s
d
e
 
-
 
'
)
;

j
r
_
d
e
f
i
n
e
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
S
E
A
R
C
H
_
A
L
L
'
,
 
'
T
o
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
S
E
A
R
C
H
_
G
E
O
_
C
O
U
N
T
R
Y
S
E
A
R
C
H
'
,
 
'
B
Ã
º
s
q
u
e
d
a
 
p
o
r
 
p
a
Ã
­
s
'
)
;

j
r
_
d
e
f
i
n
e
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
S
E
A
R
C
H
_
G
E
O
_
R
E
G
I
O
N
S
E
A
R
C
H
'
,
 
'
B
Ã
º
s
q
u
e
d
a
 
p
o
r
 
r
e
g
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
S
E
A
R
C
H
_
G
E
O
_
T
O
W
N
S
E
A
R
C
H
'
,
 
'
B
Ã
º
s
q
u
e
d
a
 
p
o
r
 
c
i
u
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
S
E
A
R
C
H
_
F
E
A
T
U
R
E
_
I
N
F
O
'
,
 
'
F
u
n
c
i
Ã
³
n
 
d
e
 
b
Ã
º
s
q
u
e
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
S
E
A
R
C
H
_
B
U
T
T
O
N
'
,
 
'
B
u
s
c
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
S
E
A
R
C
H
_
D
E
S
C
R
I
P
T
I
O
N
_
I
N
F
O
'
,
 
'
E
s
c
r
i
b
a
 
u
n
a
 
p
a
l
a
b
r
a
 
e
n
 
e
l
 
c
u
a
d
r
o
 
y
 
p
u
l
s
e
 
e
l
 
b
o
t
Ã
³
n
.
'
)
;

j
r
_
d
e
f
i
n
e
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
S
E
A
R
C
H
_
D
E
S
C
R
I
P
T
I
O
N
_
L
A
B
E
L
'
,
 
'
P
a
l
a
b
r
a
s
 
d
e
 
b
Ã
º
s
q
u
e
d
a
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
S
E
A
R
C
H
_
A
V
L
_
I
N
F
O
'
,
 
'
P
o
r
 
f
a
v
o
r
,
 
i
n
t
r
o
d
u
z
c
a
 
s
u
 
l
l
e
g
a
d
a
 
p
r
e
v
i
s
t
a
 
y
 
l
a
 
f
e
c
h
a
 
d
e
 
s
a
l
i
d
a
 
y
 
p
u
l
s
e
 
e
l
 
b
o
t
Ã
³
n
 
p
a
r
a
 
b
u
s
c
a
r
 
h
a
b
i
t
a
c
i
o
n
e
s
 
d
i
s
p
o
n
i
b
l
e
s
 
e
n
 
l
a
s
 
f
e
c
h
a
s
 
e
l
e
g
i
d
a
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
S
E
A
R
C
H
_
P
T
Y
P
E
S
'
,
 
'
L
i
s
t
a
r
 
p
r
o
p
i
e
d
a
d
e
s
 
p
o
r
 
t
i
p
o
 
d
e
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
S
E
A
R
C
H
_
R
T
Y
P
E
S
'
,
 
'
L
i
s
t
a
r
 
p
r
o
p
i
e
d
a
d
e
s
 
p
o
r
 
t
i
p
o
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
S
O
R
T
O
R
D
E
R
_
D
E
F
A
U
L
T
'
,
 
'
P
o
r
 
d
e
f
e
c
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
S
O
R
T
O
R
D
E
R
_
P
R
O
P
E
R
T
Y
N
A
M
E
'
,
 
'
N
o
m
b
r
e
 
P
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
S
O
R
T
O
R
D
E
R
_
P
R
O
P
E
R
T
Y
R
E
G
I
O
N
'
,
 
'
R
e
g
i
Ã
³
n
 
P
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
S
O
R
T
O
R
D
E
R
_
P
R
O
P
E
R
T
Y
T
O
W
N
'
,
 
'
C
i
u
d
a
d
 
P
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
S
O
R
T
O
R
D
E
R
_
S
T
A
R
S
'
,
 
'
E
s
t
r
e
l
l
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
P
A
T
H
W
A
Y
_
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
'
,
 
'
D
e
t
a
l
l
e
s
 
P
r
o
p
i
e
d
a
d
 
-
 
'
)
;

j
r
_
d
e
f
i
n
e
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
P
A
T
H
W
A
Y
_
B
O
O
K
I
N
G
F
O
R
M
'
,
 
'
F
o
r
m
u
l
a
r
i
o
 
d
e
 
R
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
U
P
D
A
T
E
A
D
D
R
E
S
S
B
U
T
T
O
N
'
,
 
'
A
c
t
u
a
l
i
c
e
 
s
u
 
d
i
r
e
c
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
R
E
C
H
E
C
K
I
N
G
R
O
O
M
A
V
I
A
L
A
B
I
L
I
T
Y
'
,
 
'
R
e
-
c
h
e
q
u
e
a
r
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
<
b
r
/
>
(
L
a
 
s
e
l
e
c
c
i
Ã
³
n
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
 
s
e
 
r
e
s
e
t
e
a
r
Ã
¡
)
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
R
E
C
H
E
C
K
I
N
G
R
O
O
M
A
V
I
A
L
A
B
I
L
I
T
Y
_
S
R
P
'
,
 
'
R
e
-
c
h
e
q
u
e
a
r
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
C
H
A
N
G
I
N
G
E
X
T
R
A
'
,
 
'
M
o
d
i
f
i
q
u
e
 
s
u
s
 
e
x
t
r
a
s
 
o
p
c
i
o
n
a
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
C
H
A
N
G
I
N
G
R
O
O
M
S
E
L
E
C
T
I
O
N
'
,
 
'
C
a
m
b
i
e
 
s
u
 
s
e
l
e
c
c
i
Ã
³
n
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
U
P
D
A
T
I
N
G
A
D
D
R
E
S
S
'
,
 
'
A
c
t
u
a
l
i
c
e
 
s
u
 
d
i
r
e
c
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
A
D
D
R
E
S
S
I
N
P
U
T
E
R
R
O
R
'
,
 
'
L
o
 
s
e
n
t
i
m
o
s
 
u
n
o
 
o
 
m
Ã
¡
s
 
d
a
t
o
s
 
d
e
 
d
i
r
e
c
c
i
Ã
³
n
 
s
o
n
 
i
n
c
o
r
r
e
c
t
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
B
O
O
K
I
N
G
F
O
R
M
_
S
H
O
W
R
O
O
M
I
M
A
G
E
'
,
 
'
I
m
a
g
e
n
 
H
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
R
R
E
N
C
Y
F
O
R
M
A
T
'
,
 
'
F
o
r
m
a
t
o
 
d
e
 
m
o
n
e
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
S
E
A
R
C
H
O
P
T
I
O
N
S
T
A
B
'
,
 
'
O
p
c
i
o
n
e
s
 
d
e
 
b
Ã
º
s
q
u
e
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
A
V
A
I
L
A
B
L
E
L
O
G
S
'
,
 
'
L
o
g
s
 
D
i
s
p
o
n
i
b
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
M
E
S
S
A
G
E
'
,
 
'
M
e
n
s
a
j
e
'
)
;

/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
 
J
o
m
r
e
s
 
2
.
6
.
3

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
M
O
D
E
_
N
O
R
M
A
L
'
,
 
'
N
o
r
m
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
M
O
D
E
_
A
D
V
A
N
C
E
D
'
,
 
'
A
d
v
a
n
c
e
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
M
O
D
E
_
T
A
R
I
F
F
T
Y
P
E
S
'
,
 
'
M
i
c
r
o
m
a
n
a
g
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
M
O
D
E
'
,
 
'
M
o
d
o
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
t
a
r
i
f
a
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
M
O
D
E
_
D
E
S
C
'
,
 
'
<
b
>
C
u
i
d
a
d
o
:
 
C
a
m
b
i
a
r
 
e
n
t
r
e
 
d
i
f
e
r
e
n
t
e
s
 
t
i
p
o
s
 
d
e
 
t
a
r
i
f
a
s
 
p
u
e
d
e
 
o
r
i
g
i
n
a
r
 
p
Ã
©
r
d
i
d
a
 
d
e
 
d
a
t
o
s
.
 
V
e
Ã
¡
n
s
e
 
l
a
s
 
n
o
t
a
s
 
a
 
c
o
n
t
i
n
u
a
c
i
Ã
³
n
 
c
o
n
 
r
e
s
p
e
c
t
o
 
a
 
e
s
t
o
<
/
b
>
.

<
b
r
/
>
<
b
r
/
>

T
i
e
n
e
 
t
r
e
s
 
o
p
c
i
o
n
e
s
 
p
a
r
a
 
c
o
n
f
i
g
u
r
a
r
 
l
a
s
 
t
a
r
i
f
a
s
.
<
b
r
/
>

N
o
r
m
a
l
 
m
o
d
e
:
 
P
u
e
d
e
s
 
t
e
n
e
r
 
u
n
a
 
t
a
r
i
f
a
 
p
o
r
 
c
a
d
a
 
t
i
p
o
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
,
 
e
s
t
o
 
e
s
 
v
Ã
¡
l
i
d
o
 
p
a
r
a
 
l
o
s
 
s
i
g
u
i
e
n
t
e
s
 
1
0
 
a
Ã
±
o
s
.
<
b
r
/
>

M
i
c
r
o
m
a
n
a
g
e
:
 
P
u
e
d
e
s
 
c
a
m
b
i
a
r
 
e
l
 
p
r
e
c
i
o
 
p
o
r
 
c
a
d
a
 
d
Ã
­
a
 
y
 
h
a
b
i
t
a
c
i
Ã
³
n
/
p
r
o
p
i
e
d
a
d
<
b
r
/
>

A
d
v
a
n
c
e
d
:
 
E
l
 
a
n
t
i
g
u
o
 
m
Ã
©
t
o
d
o
 
J
o
m
r
e
s
 
d
e
 
g
e
n
e
r
a
r
 
t
a
r
i
f
a
s
<
b
r
/
>

<
b
r
/
>

L
o
s
 
d
i
f
e
r
e
n
t
e
s
 
m
o
d
o
s
 
d
e
 
t
a
r
i
f
a
s
 
l
e
 
p
e
r
m
i
t
e
n
 
e
l
e
g
i
r
 
e
l
 
m
Ã
©
t
o
d
o
 
d
e
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
d
e
 
l
a
s
 
t
a
r
i
f
a
s
 
q
u
e
 
m
Ã
¡
s
 
l
e
 
c
o
n
v
e
n
g
a
.
 
<
b
r
/
>

E
l
 
m
o
d
o
 
n
o
r
m
a
l
 
e
s
 
e
l
 
m
Ã
¡
s
 
s
i
m
p
l
i
s
t
a
,
 
p
e
r
o
 
e
s
 
m
Ã
¡
s
 
f
Ã
¡
c
i
l
 
d
e
 
e
n
t
e
n
d
e
r
,
 
y
a
 
q
u
e
 
c
r
u
z
a
r
Ã
¡
 
r
e
f
e
r
e
n
c
i
a
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
y
 
t
a
r
i
f
a
s
 
a
 
t
i
p
o
s
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
/
p
r
o
p
i
e
d
a
d
 
y
 
l
e
 
p
e
r
m
i
t
e
 
c
o
n
f
i
g
u
r
a
r
 
l
a
s
 
h
a
b
i
t
a
c
i
o
n
e
s
 
y
 
l
o
s
 
p
r
e
c
i
o
s
 
e
n
 
l
a
 
m
i
s
m
a
 
p
Ã
¡
g
i
n
a
.
 
<
b
r
/
>

M
i
c
r
o
 
g
e
s
t
i
Ã
³
n
 
l
e
 
p
e
r
m
i
t
e
 
v
a
r
i
a
r
 
l
o
s
 
t
i
p
o
s
 
e
n
 
e
l
 
d
Ã
­
a
 
a
 
d
Ã
­
a
 
s
i
n
 
t
e
n
e
r
 
q
u
e
 
g
e
s
t
i
o
n
a
r
 
m
o
n
t
o
n
e
s
 
d
e
 
l
a
s
 
t
a
r
i
f
a
s
,
 
q
u
e
 
s
e
 
r
e
a
l
i
z
a
 
p
o
r
 
l
o
t
e
s
 
d
e
 
r
e
f
e
r
e
n
c
i
a
s
 
c
r
u
z
a
d
a
s
 
d
e
 
t
a
r
i
f
a
s
 
d
i
f
e
r
e
n
t
e
s
 
e
n
t
r
e
 
s
Ã
­
.
 
E
s
t
o
 
d
a
 
l
u
g
a
r
 
a
 
u
n
a
 
s
e
r
i
e
 
d
e
 
t
a
r
i
f
a
s
 
q
u
e
 
s
e
 
h
a
n
 
c
r
e
a
d
o
 
p
a
r
a
 
q
u
e
 
a
b
a
r
q
u
e
n
 
u
n
 
p
e
r
Ã
­
o
d
o
 
d
e
 
t
i
e
m
p
o
,
 
p
e
r
o
 
n
o
 
s
e
 
p
u
e
d
e
 
a
p
l
i
c
a
r
 
u
n
a
 
t
a
r
i
f
a
 
s
o
b
r
e
 
o
t
r
a
.
 
<
b
r
/
>

M
o
d
o
 
a
v
a
n
z
a
d
o
 
l
e
 
p
e
r
m
i
t
e
 
c
r
e
a
r
 
u
n
a
 
h
a
b
i
t
a
c
i
o
n
 
y
 
a
s
o
c
i
a
r
l
a
 
c
o
n
 
u
n
 
t
i
p
o
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
.
 
A
 
c
o
n
t
i
n
u
a
c
i
Ã
³
n
,
 
c
r
e
a
 
u
n
a
 
t
a
r
i
f
a
 
q
u
e
 
s
e
 
a
s
o
c
i
a
 
c
o
n
 
u
n
 
t
i
p
o
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
.
 
E
l
 
u
s
o
 
d
e
 
e
s
t
e
 
m
Ã
©
t
o
d
o
 
e
s
 
p
o
s
i
b
l
e
 
a
p
l
i
c
a
r
 
u
n
a
 
t
a
r
i
f
a
 
s
o
b
r
e
 
o
t
r
a
,
 
p
o
r
 
e
j
e
m
p
l
o
,
 
u
n
 
t
i
p
o
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
 
"
D
o
b
l
e
 
c
a
m
a
"
 
p
u
e
d
e
 
t
e
n
e
r
 
u
n
a
 
t
a
r
i
f
a
 
d
e
 
a
l
o
j
a
m
i
e
n
t
o
 
y
 
d
e
s
a
y
u
n
o
,
 
y
 
o
t
r
a
 
p
a
r
a
 
l
a
 
c
a
m
a
,
 
d
e
s
a
y
u
n
o
 
y
 
c
e
n
a
.
 
E
l
 
m
Ã
©
t
o
d
o
 
a
v
a
n
z
a
d
o
 
r
e
q
u
i
e
r
e
 
u
n
 
p
o
c
o
 
m
Ã
¡
s
 
d
e
 
a
t
e
n
c
i
Ã
³
n
 
a
 
l
o
s
 
d
e
t
a
l
l
e
s
,
 
y
a
 
q
u
e
 
e
s
 
p
o
s
i
b
l
e
 
d
e
s
-
a
s
o
c
i
a
r
 
u
n
a
 
h
a
b
i
t
a
c
i
Ã
³
n
 
o
 
t
a
r
i
f
a
 
d
e
 
u
n
 
t
i
p
o
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
/
p
r
o
p
i
e
d
a
d
 
o
 
c
o
n
f
i
g
u
r
a
r
l
a
 
i
n
c
o
r
r
e
c
t
a
m
e
n
t
e
 
v
Ã
¡
l
i
d
a
 
d
e
s
d
e
 
y
 
h
a
s
t
a
 
l
a
s
 
f
e
c
h
a
s
,
 
p
e
r
o
 
t
e
 
d
a
 
o
p
c
i
o
n
e
s
 
d
e
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
q
u
e
 
l
o
s
 
o
t
r
o
s
 
m
o
d
o
s
 
n
o
 
o
f
r
e
c
e
n
.
 
<
b
r
/
>

<
b
r
/
>

D
e
b
i
d
o
 
a
 
q
u
e
 
l
o
s
 
m
o
d
o
s
 
N
o
r
m
a
l
 
y
 
m
i
c
r
o
g
e
s
t
i
Ã
³
n
 
r
e
q
u
i
e
r
e
n
 
u
n
a
 
e
s
p
e
c
Ã
­
f
i
c
a
 
p
u
e
s
t
a
 
a
 
p
u
n
t
o
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
y
 
t
a
r
i
f
a
s
 
p
a
r
a
 
e
l
 
m
o
d
o
 
d
e
 
t
r
a
b
a
j
a
r
 
e
l
 
s
i
s
t
e
m
a
 
p
u
e
d
e
 
s
e
r
 
n
e
c
e
s
a
r
i
o
 
v
o
l
v
e
r
 
a
 
s
i
t
u
a
r
 
a
l
g
u
n
o
s
 
d
a
t
o
s
 
p
a
r
a
 
h
a
c
e
r
 
l
a
s
 
c
o
n
f
i
g
u
r
a
c
i
o
n
e
s
 
d
e
 
l
a
 
a
c
t
u
a
l
 
c
o
m
p
a
t
i
b
l
e
 
c
o
n
 
e
l
 
m
o
d
o
 
d
e
 
e
d
i
c
i
Ã
³
n
 
a
c
t
u
a
l
 
t
a
r
i
f
a
.
 
<
b
r
/
>

<
b
r
/
>

N
o
r
m
a
l
 
-
>
 
A
v
a
n
z
a
d
o
.
 
S
i
n
 
c
a
m
b
i
o
s
.
 
L
a
s
 
t
a
r
i
f
a
s
 
v
i
g
e
n
t
e
s
 
s
e
 
m
a
n
t
i
e
n
e
n
.
 
<
b
r
/
>

N
o
r
m
a
l
 
-
>
 
m
i
c
r
o
g
e
s
t
i
Ã
³
n
.
 
T
o
d
a
s
 
l
a
s
 
t
a
r
i
f
a
s
 
e
x
i
s
t
e
n
t
e
s
 
s
e
 
e
l
i
m
i
n
a
n
.
 
<
b
r
/
>

A
v
a
n
z
a
d
o
 
-
>
 
N
o
r
m
a
l
.
 
T
o
d
a
s
 
l
a
s
 
t
a
r
i
f
a
s
 
e
x
i
s
t
e
n
t
e
s
 
s
e
 
e
l
i
m
i
n
a
n
.
 
<
b
r
/
>

A
v
a
n
z
a
d
o
 
-
>
 
m
i
c
r
o
g
e
s
t
i
Ã
³
n
.
 
T
o
d
a
s
 
l
a
s
 
t
a
r
i
f
a
s
 
e
x
i
s
t
e
n
t
e
s
 
s
e
 
e
l
i
m
i
n
a
n
.
 
<
b
r
/
>

M
i
c
r
o
g
e
s
t
i
Ã
³
n
 
-
>
 
A
v
a
n
z
a
d
o
.
 
T
o
d
a
s
 
l
a
s
 
r
e
f
e
r
e
n
c
i
a
s
 
c
r
u
z
a
d
a
s
 
e
x
i
s
t
e
n
t
e
s
 
e
n
t
r
e
 
l
a
s
 
t
a
r
i
f
a
s
 
s
e
 
e
l
i
m
i
n
a
n
,
 
p
e
r
o
 
l
a
s
 
t
a
r
i
f
a
s
 
s
i
g
u
e
n
 
s
e
 
m
a
n
t
i
e
n
e
n
.
 
<
b
r
/
>

M
i
c
r
o
g
e
s
t
i
Ã
³
n
 
-
>
 
N
o
r
m
a
l
.
 
T
o
d
a
s
 
l
a
s
 
r
e
f
e
r
e
n
c
i
a
s
 
c
r
u
z
a
d
a
s
 
e
x
i
s
t
e
n
t
e
s
 
y
 
l
a
s
 
t
a
r
i
f
a
s
 
s
e
 
e
l
i
m
i
n
a
n
.
<
b
r
/
>
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
L
I
S
T
R
O
O
M
S
I
N
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
'
,
 
'
Â
¿
M
o
s
t
r
a
r
 
l
a
 
l
i
s
t
a
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
e
n
 
l
a
 
h
o
j
a
 
d
e
 
d
e
t
a
l
l
e
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
T
Y
P
E
'
,
 
'
T
i
p
o
 
d
e
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
M
A
X
P
E
O
P
L
E
I
N
R
O
O
M
'
,
 
'
P
e
r
s
o
n
a
s
 
m
Ã
¡
x
i
m
a
s
 
p
o
r
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
M
A
X
P
E
O
P
L
E
I
N
B
O
O
K
I
N
G
'
,
 
'
P
e
r
s
o
n
a
s
 
m
Ã
¡
x
i
m
a
s
 
e
n
 
l
a
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
A
D
D
'
,
 
'
A
Ã
±
a
d
i
r
 
n
o
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
E
D
I
T
'
,
 
'
E
d
i
t
a
r
 
n
o
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
D
E
L
E
T
E
'
,
 
'
B
o
r
r
a
r
 
n
o
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
V
I
E
W
'
,
 
'
V
e
r
 
n
o
t
a
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
A
U
D
I
T
M
E
S
S
A
G
E
'
,
 
'
A
Ã
±
a
d
i
r
 
n
u
e
v
a
 
n
o
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
A
U
D
I
T
M
E
S
S
A
G
E
_
E
D
I
T
'
,
 
'
E
d
i
t
a
r
 
n
o
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
A
U
D
I
T
M
E
S
S
A
G
E
_
D
E
L
E
T
E
'
,
 
'
B
o
r
r
a
r
 
n
o
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
L
I
S
T
B
O
O
K
I
N
G
S
'
,
 
'
L
i
s
t
a
d
o
 
d
e
 
r
e
s
e
r
v
a
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
M
Y
B
O
O
K
I
N
G
S
'
,
 
'
M
i
s
 
r
e
s
e
r
v
a
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
B
O
O
K
I
N
G
'
,
 
'
V
e
r
 
r
e
s
e
r
v
a
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
F
A
V
O
U
R
I
T
E
S
'
,
 
'
V
e
r
 
f
a
v
o
r
i
t
o
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
F
A
V
O
U
R
I
T
E
S
_
N
O
N
E
'
,
 
'
Â
¡
N
o
 
t
i
e
n
e
 
n
i
n
g
Ã
º
n
 
f
a
v
o
r
i
t
o
 
a
Ã
±
a
d
i
d
o
 
t
o
d
a
v
i
a
!
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
P
R
O
P
E
R
T
Y
T
Y
P
E
'
,
 
'
T
i
p
o
 
d
e
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
T
I
T
L
E
'
,
 
'
W
i
s
e
 
p
r
i
c
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
A
C
T
I
V
E
'
,
 
'
A
c
t
i
v
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
T
I
T
L
E
_
D
E
S
C
'
,
 
'
E
s
t
e
 
p
l
u
g
i
n
 
p
e
r
m
i
t
e
 
a
c
t
i
v
a
r
 
y
 
c
o
n
f
i
g
u
r
a
r
 
l
o
s
 
p
r
e
c
i
o
s
 
d
e
 
s
u
s
 
h
a
b
i
t
a
c
i
o
n
e
s
 
d
i
n
Ã
¡
m
i
c
a
m
e
n
t
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
T
I
T
L
E
_
D
E
S
C
_
F
U
L
L
'
,
 
'
L
a
 
m
a
y
o
r
Ã
­
a
 
d
e
 
l
a
s
 
e
m
p
r
e
s
a
s
 
r
e
c
a
l
c
u
l
a
n
 
l
o
s
 
p
r
e
c
i
o
s
 
d
e
 
l
a
s
 
h
a
b
i
t
a
c
i
o
n
e
s
 
e
n
 
f
u
n
c
i
Ã
³
n
 
d
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
d
e
 
u
n
 
t
i
p
o
 
r
e
q
u
e
r
i
d
o
 
q
u
e
 
e
s
t
Ã
¡
n
 
d
i
s
p
o
n
i
b
l
e
s
 
e
n
 
u
n
a
 
f
e
c
h
a
 
d
e
t
e
r
m
i
n
a
d
a
.
 
E
s
t
o
 
l
e
s
 
p
e
r
m
i
t
e
 
o
f
r
e
c
e
r
 
d
e
s
c
u
e
n
t
o
s
 
e
n
 
e
l
 
t
i
p
o
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
 
q
u
e
 
n
o
 
e
s
t
Ã
¡
 
o
c
u
p
a
d
a
 
d
u
r
a
n
t
e
 
u
n
 
p
e
r
Ã
­
o
d
o
 
d
e
t
e
r
m
i
n
a
d
o
 
c
o
n
 
e
l
 
o
b
j
e
t
i
v
o
 
d
e
 
a
t
r
a
e
r
 
a
 
l
o
s
 
c
l
i
e
n
t
e
s
 
q
u
e
 
d
e
 
o
t
r
o
 
m
o
d
o
 
p
o
d
r
Ã
­
a
n
 
p
e
r
d
e
r
s
e
.
 
<
b
r
/
>
 
L
a
 
a
c
t
i
v
a
c
i
Ã
³
n
 
y
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
d
e
 
e
s
t
e
 
p
l
u
g
i
n
 
l
e
 
p
e
r
m
i
t
e
 
o
f
r
e
c
e
r
 
p
r
e
c
i
o
s
 
a
j
u
s
t
a
b
l
e
s
 
b
a
s
a
d
o
s
 
e
n
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
d
e
 
u
n
 
t
i
p
o
 
s
e
l
e
c
c
i
o
n
a
d
o
 
q
u
e
 
e
s
t
Ã
¡
n
 
d
i
s
p
o
n
i
b
l
e
s
 
e
n
 
l
a
 
p
r
o
p
i
e
d
a
d
 
e
n
 
u
n
 
d
Ã
­
a
 
d
e
t
e
r
m
i
n
a
d
o
.
 
<
b
r
/
>
 
T
h
r
e
a
s
h
o
l
d
 
d
e
f
i
n
e
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
d
Ã
­
a
s
 
q
u
e
 
d
e
s
d
e
 
l
a
 
f
e
c
h
a
 
a
c
t
u
a
l
 
h
a
s
t
a
 
l
a
 
f
e
c
h
a
 
d
e
 
l
l
e
g
a
d
a
 
p
e
r
m
i
t
e
 
a
c
t
i
v
a
r
 
e
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
,
 
n
o
s
 
p
e
r
m
i
t
e
 
l
a
 
p
o
s
i
b
i
l
i
d
a
d
 
d
e
 
a
j
u
s
t
a
r
 
e
l
 
p
o
r
c
e
n
t
a
j
e
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
q
u
e
 
p
u
e
d
e
n
 
e
s
t
a
r
 
d
i
s
p
o
n
i
b
l
e
s
 
a
n
t
e
s
 
d
e
 
q
u
e
 
u
n
 
d
e
t
e
r
m
i
n
a
d
o
 
d
e
s
c
u
e
n
t
o
 
s
e
 
a
p
l
i
q
u
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
T
H
R
E
A
S
H
O
L
D
'
,
 
'
T
h
r
e
a
s
h
o
l
d
 
(
n
Ã
º
m
e
r
o
 
d
e
 
d
Ã
­
a
s
 
e
n
t
r
e
 
l
a
 
l
l
e
g
a
d
a
 
y
 
l
a
 
f
e
c
h
a
 
a
c
t
u
a
l
)
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
P
E
R
C
E
N
T
A
G
E
1
0
'
,
 
'
P
o
r
c
e
n
t
a
j
e
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
o
c
u
p
a
d
a
s
 
 
1
0
%
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
P
E
R
C
E
N
T
A
G
E
2
5
'
,
 
'
P
o
r
c
e
n
t
a
j
e
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
o
c
u
p
a
d
a
s
 
 
2
5
%
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
P
E
R
C
E
N
T
A
G
E
5
0
'
,
 
'
P
o
r
c
e
n
t
a
j
e
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
o
c
u
p
a
d
a
s
 
 
5
0
%
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
P
E
R
C
E
N
T
A
G
E
7
5
'
,
 
'
P
o
r
c
e
n
t
a
j
e
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
o
c
u
p
a
d
a
s
 
 
7
5
%
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
D
I
S
C
O
U
N
T
'
,
 
'
D
e
s
c
u
e
n
t
o
 
%
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
H
A
S
B
E
E
N
D
I
S
C
O
U
N
T
E
D
'
,
 
'
 
h
a
 
s
i
d
o
 
d
e
s
c
o
n
t
a
d
o
 
d
e
 
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
T
O
'
,
 
'
 
a
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
N
O
T
D
I
S
C
O
U
N
T
E
D
'
,
 
'
 
P
r
e
c
i
o
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
 
n
o
 
d
e
s
c
o
n
t
a
d
o
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
M
A
P
S
K
E
Y
'
,
 
'
G
o
o
g
l
e
 
m
a
p
s
 
A
P
I
 
k
e
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
M
A
P
S
K
E
Y
_
D
E
S
C
'
,
 
'
P
u
e
d
e
s
 
o
b
t
e
n
e
r
 
g
o
o
g
l
e
 
m
a
p
s
 
A
P
I
 
k
e
y
 
d
e
s
d
e
 
<
a
 
h
r
e
f
=
"
h
t
t
p
s
:
/
/
d
e
v
e
l
o
p
e
r
s
.
g
o
o
g
l
e
.
c
o
m
/
m
a
p
s
/
d
o
c
u
m
e
n
t
a
t
i
o
n
/
j
a
v
a
s
c
r
i
p
t
/
g
e
t
-
a
p
i
-
k
e
y
#
g
e
t
-
a
n
-
a
p
i
-
k
e
y
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
G
o
o
g
l
e
 
m
a
p
s
<
/
a
>
.
 
U
n
a
 
v
e
z
 
t
e
n
g
a
 
i
n
t
r
o
d
u
c
i
d
o
 
s
u
 
m
a
p
 
k
e
y
 
a
q
u
Ã
­
,
 
J
o
m
r
e
s
 
m
o
s
t
r
a
r
Ã
¡
 
e
l
 
m
a
p
a
 
e
n
 
s
u
 
p
Ã
¡
g
i
n
a
 
d
e
 
d
e
t
a
l
l
e
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
C
P
A
N
E
L
'
,
 
'
Ã
š
l
t
i
m
o
 
m
i
n
u
t
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
A
C
T
I
V
E
'
,
 
'
Â
¿
A
c
t
i
v
o
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
A
C
T
I
V
E
_
D
E
S
C
'
,
 
'
P
o
n
e
r
 
a
 
S
i
 
s
i
 
q
u
i
e
r
e
 
o
f
r
e
c
e
r
 
o
f
e
r
t
a
s
 
d
e
 
Ã
º
l
t
i
m
o
 
m
i
n
u
t
o
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
T
H
R
E
A
S
H
O
L
D
'
,
 
'
T
h
r
e
s
h
o
l
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
T
H
R
E
A
S
H
O
L
D
_
D
E
S
C
'
,
 
'
S
i
 
s
e
 
h
a
c
e
 
l
a
 
r
e
s
e
r
v
a
 
y
 
l
a
 
f
e
c
h
a
 
d
e
 
l
l
e
g
a
d
a
 
e
s
 
s
Ã
³
l
o
 
N
 
d
Ã
­
a
s
 
d
e
s
d
e
 
l
a
 
f
e
c
h
a
 
d
e
 
r
e
s
e
r
v
a
,
 
e
l
 
d
e
s
c
u
e
n
t
o
 
p
u
e
d
e
 
s
e
r
 
a
p
l
i
c
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
D
I
S
C
O
U
N
T
'
,
 
'
D
e
s
c
u
e
n
t
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
D
I
S
C
O
U
N
T
_
D
E
S
C
'
,
 
'
E
n
 
p
o
r
c
e
n
t
a
j
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
B
O
O
K
I
N
G
C
O
N
F
I
R
M
A
T
I
O
N
1
'
,
 
'
Â
¡
U
n
 
d
e
s
c
u
e
n
t
o
 
h
a
 
s
i
d
o
 
a
p
l
i
c
a
d
o
 
a
 
e
s
t
a
 
r
e
s
e
r
v
a
!
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
B
O
O
K
I
N
G
C
O
N
F
I
R
M
A
T
I
O
N
2
'
,
 
'
E
l
 
c
o
s
t
o
 
d
e
 
l
a
 
e
s
t
a
n
c
i
a
 
a
 
s
i
d
o
 
r
e
d
u
c
i
d
o
 
e
n
 
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
R
E
'
,
 
'
E
s
t
Ã
¡
 
p
r
o
p
i
e
d
a
d
 
o
f
r
e
c
e
 
u
n
 
d
e
s
c
u
e
n
t
o
 
d
e
 
Ã
º
l
t
i
m
o
 
m
i
n
u
t
o
 
d
e
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
M
I
D
'
,
 
'
 
p
o
r
 
c
i
e
n
t
o
 
s
i
 
s
u
 
f
e
c
h
a
 
d
e
 
l
l
e
g
a
d
a
 
e
s
 
a
n
t
e
r
i
o
r
 
a
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
O
R
M
O
R
E
'
,
 
'
 
p
o
r
 
c
i
e
n
t
o
 
o
 
m
Ã
¡
s
 
s
i
 
s
u
 
f
e
c
h
a
 
d
e
 
l
l
e
g
a
d
a
 
e
s
 
a
n
t
e
s
 
d
e
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
O
S
T
'
,
 
'
.
 
Â
¡
R
e
s
e
r
v
e
 
a
h
o
r
a
 
p
a
r
a
 
d
i
s
f
r
u
t
a
r
 
d
e
 
l
a
 
m
e
j
o
r
 
o
f
e
r
t
a
!
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
V
E
R
B
O
S
E
T
A
R
I
F
F
I
N
T
O
'
,
 
'
I
n
f
o
r
m
a
c
i
Ã
³
n
 
d
e
t
a
l
l
a
d
a
 
d
e
 
t
a
r
i
f
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
V
E
R
B
O
S
E
T
A
R
I
F
F
I
N
T
O
_
D
E
S
C
'
,
 
'
P
o
n
e
r
 
a
 
S
i
 
p
a
r
a
 
v
e
r
 
l
a
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
d
e
t
a
l
l
a
d
a
 
e
n
 
l
o
s
 
d
e
t
a
l
l
e
s
 
d
e
 
p
r
o
p
i
e
d
a
d
/
t
a
r
i
f
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
M
I
N
I
M
A
L
C
O
N
F
I
G
'
,
 
'
R
e
d
u
c
i
r
 
a
l
 
m
Ã
­
n
i
m
o
 
l
a
s
 
o
p
c
i
o
n
e
s
 
d
e
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
A
M
E
N
D
'
,
 
'
M
o
d
i
f
i
c
a
r
 
r
e
s
e
r
v
a
 
-
 
S
e
l
e
c
c
i
Ã
³
n
 
d
e
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
A
M
E
N
D
_
S
E
L
E
C
T
P
R
O
P
E
R
T
Y
'
,
 
'
S
e
l
e
c
c
i
o
n
a
r
 
n
u
e
v
a
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
A
M
E
N
D
_
H
E
A
D
E
R
'
,
 
'
C
o
n
t
r
a
t
o
 
O
r
i
g
i
n
a
l
:
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
A
M
E
N
D
_
D
E
P
O
S
I
T
P
A
I
D
'
,
 
'
D
e
p
Ã
³
s
i
t
o
 
P
a
g
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
A
M
E
N
D
_
D
E
P
O
S
I
T
D
U
E
'
,
 
'
D
e
p
Ã
³
s
i
t
o
 
N
o
 
P
a
g
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
A
M
E
N
D
_
O
V
E
R
R
I
D
E
_
T
O
T
A
L
'
,
 
'
A
n
u
l
a
c
i
Ã
³
n
 
T
o
t
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
A
M
E
N
D
_
O
V
E
R
R
I
D
E
_
D
E
P
O
S
I
T
'
,
 
'
A
n
u
l
a
c
i
Ã
³
n
 
d
e
 
D
e
p
Ã
³
s
i
t
o
'
)
;

/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
 
J
o
m
r
e
s
 
2
.
7
.
5

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
A
N
C
E
L
'
,
 
'
C
a
n
c
e
l
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
P
A
N
E
L
'
,
 
'
P
a
n
e
l
 
d
e
 
C
o
n
t
r
o
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
N
F
I
G
_
D
E
F
A
U
L
T
_
C
R
A
T
E
'
,
 
'
T
i
p
o
 
d
e
 
C
o
m
i
s
i
Ã
³
n
 
p
r
e
d
e
t
e
r
m
i
n
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
N
F
I
G
_
D
E
F
A
U
L
T
_
C
R
A
T
E
_
D
E
S
C
'
,
 
'
E
l
i
j
a
 
l
a
 
c
o
m
i
s
i
Ã
³
n
 
p
r
e
d
e
t
e
r
m
i
n
a
d
a
 
q
u
e
 
s
e
r
Ã
¡
 
a
p
l
i
c
a
d
a
 
a
 
l
a
 
p
r
o
p
i
e
d
a
d
 
e
n
 
c
a
s
o
 
d
e
 
q
u
e
 
n
o
 
s
e
a
 
s
e
l
e
e
c
i
o
n
a
d
a
 
o
t
r
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
P
A
N
E
L
_
L
I
S
T
C
R
A
T
E
S
'
,
 
'
L
i
s
t
a
 
d
e
 
t
i
p
o
s
 
d
e
 
c
o
m
i
s
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
P
A
N
E
L
_
P
A
T
E
T
I
T
L
E
'
,
 
'
T
i
p
o
s
 
d
e
 
c
o
m
i
s
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
R
A
T
E
_
T
I
T
L
E
'
,
 
'
T
Ã
­
t
u
l
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
R
A
T
E
_
T
Y
P
E
'
,
 
'
T
i
p
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
R
A
T
E
_
V
A
L
U
E
'
,
 
'
T
i
p
o
 
d
e
 
c
o
m
i
s
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
R
A
T
E
_
C
U
R
R
E
N
C
Y
C
O
D
E
'
,
 
'
C
Ã
³
d
i
g
o
 
d
e
 
m
o
n
e
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
P
A
N
E
L
_
L
I
S
T
P
R
O
P
E
R
T
I
E
S
'
,
 
'
L
i
s
t
a
 
d
e
 
p
r
o
p
i
e
d
a
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
P
R
O
P
E
R
T
I
E
S
_
P
R
O
P
E
R
T
Y
N
A
M
E
'
,
 
'
N
o
m
b
r
e
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
P
R
O
P
E
R
T
I
E
S
_
P
R
O
P
E
R
T
Y
A
D
D
R
E
S
S
'
,
 
'
D
i
r
e
c
c
i
Ã
³
n
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
P
R
O
P
E
R
T
I
E
S
_
L
E
G
E
N
D
'
,
 
'
L
a
s
 
p
r
o
p
i
e
d
a
d
e
s
 
c
u
y
o
 
c
o
l
o
r
 
d
e
 
f
o
n
d
o
 
e
s
 
r
o
j
o
 
t
o
d
a
v
Ã
­
a
 
n
o
 
t
i
e
n
e
n
 
u
n
 
t
i
p
o
 
d
e
 
c
o
m
i
s
i
Ã
³
n
 
a
p
l
i
c
a
d
o
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
T
A
T
S
_
P
A
T
E
T
I
T
L
E
'
,
 
'
E
s
t
a
d
Ã
­
s
t
i
c
a
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
P
R
O
P
E
R
T
I
E
S
_
C
O
M
M
I
S
S
I
O
N
R
A
T
E
'
,
 
'
T
i
p
o
 
d
e
 
c
o
m
i
s
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
P
A
N
E
L
_
L
I
S
T
B
O
O
K
I
N
G
S
'
,
 
'
L
i
s
t
a
 
d
e
 
r
e
s
e
r
v
a
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
L
I
S
T
B
O
O
K
I
N
G
S
_
H
E
A
D
E
R
_
P
R
O
P
E
R
T
Y
_
I
D
'
,
 
'
P
r
o
p
i
e
d
a
d
 
i
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
L
I
S
T
B
O
O
K
I
N
G
S
_
H
E
A
D
E
R
_
I
N
V
O
I
C
E
_
I
D
'
,
 
'
F
a
c
t
u
r
a
 
i
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
L
I
S
T
B
O
O
K
I
N
G
S
_
H
E
A
D
E
R
_
B
O
O
K
I
N
G
T
O
T
A
L
'
,
 
'
R
e
s
e
r
v
a
s
 
t
o
t
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
L
I
S
T
B
O
O
K
I
N
G
S
_
H
E
A
D
E
R
_
D
A
T
E
A
R
C
H
I
V
E
D
'
,
 
'
F
e
c
h
a
 
a
r
c
h
i
v
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
A
D
D
_
A
D
H
O
C
_
I
T
E
M
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
P
T
Y
P
E
S
_
P
T
Y
P
E
_
D
E
S
C
_
F
U
R
T
H
E
R
'
,
 
'
P
u
e
d
e
 
t
e
n
e
r
 
a
r
c
h
i
v
o
s
 
e
s
p
e
c
Ã
­
f
i
c
o
s
 
d
e
 
i
d
i
o
m
a
 
m
e
d
i
a
n
t
e
 
e
l
 
a
j
u
s
t
e
 
d
e
l
 
n
o
m
b
r
e
 
d
e
 
l
a
 
s
u
b
c
a
r
p
e
t
a
,
 
e
j
.
 
"
y
a
c
h
t
b
r
o
k
e
r
a
g
e
"
 
y
 
c
o
p
i
a
r
 
u
n
 
a
r
c
h
i
v
o
 
d
e
 
s
u
b
l
e
n
g
u
a
j
e
 
e
n
 
l
a
 
s
u
b
c
a
r
p
e
t
a
.
 
P
u
e
d
e
 
m
o
d
i
f
i
c
a
r
 
e
s
e
 
a
r
c
h
i
v
o
 
d
e
 
l
e
n
g
u
a
j
e
s
 
p
a
r
a
 
e
s
e
 
t
i
p
o
 
d
e
 
p
r
o
p
i
e
d
a
d
 
p
a
r
a
 
c
o
n
v
e
r
t
i
r
s
e
 
e
n
 
h
a
b
i
t
a
c
i
o
n
e
s
,
 
e
j
 
D
V
D
s
,
 
e
c
t
.
'
)
;

j
r
_
d
e
f
i
n
e
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
E
D
I
T
P
R
O
P
E
R
T
Y
_
C
O
N
N
O
T
D
E
L
E
T
E
1
'
,
 
'
N
o
 
s
e
 
p
u
e
d
e
 
e
l
i
m
i
n
a
r
 
e
s
t
a
 
p
r
o
p
i
e
d
a
d
,
 
y
a
 
q
u
e
 
e
s
 
l
a
 
Ã
º
n
i
c
a
 
p
r
o
p
i
e
d
a
d
 
a
 
l
a
 
q
u
e
 
t
i
e
n
e
 
a
c
c
e
s
o
.
 
S
i
 
d
e
s
e
a
 
d
e
s
a
c
t
i
v
a
r
l
a
,
 
p
o
r
 
f
a
v
o
r
 
u
s
e
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
d
e
s
p
u
b
l
i
c
a
r
 
e
n
 
s
u
 
b
a
r
r
a
 
d
e
 
h
e
r
r
a
m
i
e
n
t
a
s
.
 
'
)
;

/
/
 
J
o
m
r
e
s
 
v
3
.
0
.
6

/
/
 
J
o
m
r
e
s
 
v
3
.
1

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
T
O
T
A
L
'
,
 
'
A
l
o
j
a
m
i
e
n
t
o
 
T
o
t
a
l
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
N
I
G
H
T
S
'
,
 
'
n
o
c
h
e
(
s
)
 
d
e
 
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
P
E
R
R
O
O
M
'
,
 
'
p
o
r
 
h
a
b
i
t
a
c
i
Ã
³
n
 
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
_
T
O
T
A
L
'
,
 
'
A
u
m
e
n
t
a
r
 
l
a
 
d
u
r
a
c
i
Ã
³
n
 
d
e
 
l
a
 
e
s
t
a
n
c
i
a
 
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
P
R
I
C
E
_
S
U
M
M
A
R
Y
'
,
 
'
R
e
s
u
m
e
n
 
d
e
 
p
r
e
c
i
o
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
R
M
A
T
I
O
N
_
A
L
E
R
T
'
,
 
'
P
o
r
 
f
a
v
o
r
 
l
e
e
r
 
y
 
a
c
e
p
t
a
r
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
R
M
A
T
I
O
N
_
H
E
A
D
E
R
'
,
 
'
U
n
 
r
e
s
u
m
e
n
 
d
e
 
s
u
 
r
e
s
e
r
v
a
 
s
e
 
m
u
e
s
t
r
a
 
a
 
c
o
n
t
i
n
u
a
c
i
Ã
³
n
.
 
<
b
r
 
/
>
 
P
a
r
a
 
h
a
c
e
r
 
c
u
a
l
q
u
i
e
r
 
c
a
m
b
i
o
,
 
p
o
r
 
f
a
v
o
r
 
h
a
g
a
 
c
l
i
c
 
e
n
 
e
l
 
b
o
t
Ã
³
n
 
M
o
d
i
f
i
c
a
r
 
r
e
s
e
r
v
a
.
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
R
M
A
T
I
O
N
_
A
M
E
N
D
T
E
X
T
'
,
 
'
S
i
 
n
e
c
e
s
i
t
a
 
c
a
m
b
i
a
r
 
c
u
a
l
q
u
i
e
r
a
 
d
e
 
l
a
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
a
n
t
e
r
i
o
r
,
 
p
o
r
 
f
a
v
o
r
 
h
a
g
a
 
c
l
i
c
 
a
q
u
Ã
­
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
R
M
A
T
I
O
N
_
A
M
E
N
D
'
,
 
'
M
o
d
i
f
i
c
a
r
 
R
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
R
M
A
T
I
O
N
_
S
P
E
C
I
A
L
S
'
,
 
'
P
o
r
 
f
a
v
o
r
,
 
i
n
t
r
o
d
u
z
c
a
 
c
u
a
l
q
u
i
e
r
 
s
o
l
i
c
i
t
u
d
 
e
s
p
e
c
i
a
l
 
e
n
 
e
l
 
c
u
a
d
r
o
 
s
i
g
u
i
e
n
t
e
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
R
M
A
T
I
O
N
_
T
E
R
M
S
_
P
R
E
T
E
X
T
'
,
 
'
C
o
n
f
i
r
m
o
 
q
u
e
 
l
a
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
a
n
t
e
r
i
o
r
 
e
s
 
c
o
r
r
e
c
t
a
 
y
 
d
e
 
a
c
u
e
r
d
o
 
c
o
n
 
l
a
 
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
P
E
R
P
E
R
S
O
N
'
,
 
'
p
o
r
 
p
e
r
s
o
n
a
 
p
o
r
 
n
o
c
h
e
 
'
)
;

/
/
 
J
o
m
r
e
s
 
3
.
1
.
1
0

/
/
 
J
o
m
r
e
s
 
3
.
1
.
1
1

/
/
 
J
o
m
r
e
s
 
3
.
1
.
1
3

i
f
 
(
!
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
P
N
_
O
F
'
)
)
 
{

 
 
 
 
j
r
_
d
e
f
i
n
e
(
'
_
P
N
_
O
F
'
,
 
'
d
e
'
)
;

}

i
f
 
(
!
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
P
N
_
S
T
A
R
T
'
)
)
 
{

 
 
 
 
j
r
_
d
e
f
i
n
e
(
'
_
P
N
_
S
T
A
R
T
'
,
 
'
C
o
m
i
e
n
z
o
'
)
;

}

i
f
 
(
!
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
P
N
_
P
R
E
V
I
O
U
S
'
)
)
 
{

 
 
 
 
j
r
_
d
e
f
i
n
e
(
'
_
P
N
_
P
R
E
V
I
O
U
S
'
,
 
'
A
n
t
e
r
i
o
r
'
)
;

}

i
f
 
(
!
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
P
N
_
N
E
X
T
'
)
)
 
{

 
 
 
 
j
r
_
d
e
f
i
n
e
(
'
_
P
N
_
N
E
X
T
'
,
 
'
S
i
g
u
i
e
n
t
e
'
)
;

}

i
f
 
(
!
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
P
N
_
E
N
D
'
)
)
 
{

 
 
 
 
j
r
_
d
e
f
i
n
e
(
'
_
P
N
_
E
N
D
'
,
 
'
F
i
n
'
)
;

}

i
f
 
(
!
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
P
N
_
R
E
S
U
L
T
S
'
)
)
 
{

 
 
 
 
j
r
_
d
e
f
i
n
e
(
'
_
P
N
_
R
E
S
U
L
T
S
'
,
 
'
R
e
s
u
l
t
a
d
o
s
'
)
;

}

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
T
I
T
L
E
'
,
 
'
T
e
n
g
a
 
e
n
 
c
u
e
n
t
a
 
q
u
e
 
e
s
t
o
 
n
o
 
e
s
 
u
n
 
f
o
r
m
u
l
a
r
i
o
 
d
e
 
r
e
s
e
r
v
a
,
 
e
n
 
s
u
 
l
u
g
a
r
 
e
s
t
Ã
¡
 
e
n
v
i
a
n
d
o
 
u
n
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
.
 
<
b
r
/
>
 
P
o
r
 
f
a
v
o
r
,
 
i
n
t
r
o
d
u
z
c
a
 
e
l
 
m
e
n
s
a
j
e
 
q
u
e
 
l
e
 
g
u
s
t
a
r
Ã
­
a
 
e
n
v
i
a
r
 
a
 
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
'
,
 
'
C
o
n
t
a
c
t
a
r
 
c
o
n
 
H
o
t
e
l
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
S
U
B
J
E
C
T
'
,
 
'
C
o
n
s
u
l
t
a
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
d
e
 
 
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
T
H
A
N
K
S
'
,
 
'
G
r
a
c
i
a
s
 
p
o
r
 
s
u
 
c
o
n
s
u
l
t
a
,
 
s
u
 
m
e
n
s
a
j
e
 
h
a
 
s
i
d
o
 
e
n
v
i
a
d
o
 
a
 
l
a
 
d
i
r
e
c
c
i
Ã
³
n
 
d
e
 
c
o
n
t
a
c
t
o
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
,
 
c
o
n
 
c
o
p
i
a
 
a
 
s
u
 
p
r
o
p
i
o
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
 
p
a
r
a
 
s
u
s
 
a
r
c
h
i
v
o
s
.
 
S
e
 
l
e
 
r
e
s
p
o
n
d
e
r
Ã
¡
 
t
a
n
 
p
r
o
n
t
o
 
c
o
m
o
 
s
e
a
 
p
o
s
i
b
l
e
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
R
E
G
A
R
D
I
N
G
'
,
 
'
 
c
o
n
 
r
e
s
p
e
c
t
o
 
a
 
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
E
N
Q
U
I
R
Y
'
,
 
'
C
o
n
s
u
l
t
a
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
L
O
O
K
R
I
G
H
T
'
,
 
'
P
o
r
 
f
a
v
o
r
 
s
e
l
e
c
c
i
o
n
e
 
e
l
 
a
l
o
j
a
m
i
e
n
t
o
 
d
e
s
e
a
d
o
 
e
n
 
l
a
 
l
i
s
t
a
 
d
e
 
l
a
 
d
e
r
e
c
h
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
M
I
N
R
O
O
M
S
'
,
 
'
H
a
b
i
t
a
c
i
o
n
e
s
 
m
Ã
­
n
i
m
a
s
 
y
a
 
s
e
l
e
c
c
i
o
n
a
d
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
M
I
N
R
O
O
M
S
_
D
E
S
C
'
,
 
'
N
Ã
º
m
e
r
o
 
m
Ã
­
n
i
m
o
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
p
r
e
v
i
a
m
e
n
t
e
 
s
e
l
e
c
c
i
o
n
a
d
a
s
 
e
n
 
l
a
 
r
e
s
e
r
v
a
 
a
n
t
e
s
 
d
e
 
m
o
s
t
r
a
r
 
e
l
 
c
o
m
b
o
 
d
e
 
t
i
p
o
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
/
t
a
r
i
f
a
 
q
u
e
 
p
u
e
d
e
n
 
s
e
r
 
o
f
r
e
c
i
d
a
s
.
 
L
e
 
p
e
r
m
i
t
e
 
t
e
n
e
r
 
l
a
s
 
t
a
r
i
f
a
s
 
d
e
 
d
e
s
c
u
e
n
t
o
,
 
c
u
a
n
d
o
 
m
Ã
¡
s
 
d
e
 
N
 
h
a
b
i
t
a
c
i
o
n
e
s
 
e
s
t
Ã
¡
n
 
y
a
 
s
e
l
e
c
c
i
o
n
a
d
a
s
.
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
M
A
X
R
O
O
M
S
'
,
 
'
N
Ã
º
m
e
r
o
 
m
Ã
¡
x
i
m
o
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
y
a
 
s
e
l
e
c
c
i
o
n
a
d
a
s
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
M
A
X
R
O
O
M
S
_
D
E
S
C
'
,
 
'
E
l
 
n
Ã
º
m
e
r
o
 
m
Ã
¡
x
i
m
o
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
y
a
 
s
e
l
e
c
c
i
o
n
a
d
a
s
 
e
n
 
l
a
 
r
e
s
e
r
v
a
 
a
n
t
e
s
 
d
e
 
q
u
e
 
e
l
 
c
o
m
b
o
 
t
a
r
i
f
a
s
/
h
a
b
i
t
a
c
i
Ã
³
n
 
y
a
 
n
o
 
s
e
 
o
f
r
e
z
c
a
.
 
L
e
 
p
e
r
m
i
t
e
 
d
e
j
a
r
 
d
e
 
o
f
r
e
c
e
r
 
e
s
t
e
 
t
i
p
o
 
d
e
 
c
o
m
b
i
n
a
c
i
Ã
³
n
 
d
e
 
t
a
r
i
f
a
s
/
h
a
b
i
t
a
c
i
Ã
³
n
 
u
n
a
 
v
e
z
 
q
u
e
 
N
 
 
h
a
b
i
t
a
c
i
o
n
e
s
 
h
a
y
a
n
 
s
i
d
o
 
s
e
l
e
c
c
i
o
n
a
d
o
s
 
e
n
 
e
l
 
f
o
r
m
u
l
a
r
i
o
 
d
e
 
r
e
s
e
r
v
a
.
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
S
P
S
_
E
D
I
T
R
O
O
M
_
D
E
S
C
'
,
 
'
T
e
n
g
a
 
e
n
 
c
u
e
n
t
a
 
q
u
e
 
S
u
p
l
e
m
e
n
t
o
 
p
o
r
 
p
e
r
s
o
n
a
 
n
o
 
s
e
r
Ã
¡
 
u
s
a
d
a
 
s
i
 
S
u
p
l
e
m
e
n
t
o
 
p
o
r
 
p
e
r
s
o
n
a
 
s
e
 
e
s
t
a
b
l
e
c
e
 
e
n
 
S
Ã
­
 
e
n
 
l
a
 
C
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
G
e
n
e
r
a
l
.
 
E
s
t
o
s
 
a
j
u
s
t
e
s
 
s
o
n
 
u
n
a
 
a
l
t
e
r
n
a
t
i
v
a
 
a
 
t
e
n
e
r
 
t
a
r
i
f
a
s
 
p
l
a
n
a
s
 
S
u
p
l
e
m
e
n
t
o
 
p
o
r
 
p
e
r
s
o
n
a
,
 
n
o
 
u
n
a
 
a
d
i
c
i
Ã
³
n
 
a
 
l
a
 
t
a
r
i
f
a
 
p
l
a
n
a
 
S
P
S
.
'
)
;

j
r
_
d
e
f
i
n
e
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
A
V
L
C
A
L
_
N
O
B
O
O
K
I
N
G
S
'
,
 
'
D
i
s
p
o
n
i
b
l
e
'
)
;

j
r
_
d
e
f
i
n
e
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
A
V
L
C
A
L
_
Q
U
A
R
T
E
R
'
,
 
'
A
l
g
u
n
a
s
 
r
e
s
e
r
v
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
A
V
L
C
A
L
_
H
A
L
F
'
,
 
'
O
c
u
p
a
c
i
Ã
³
n
 
m
e
d
i
a
'
)
;

j
r
_
d
e
f
i
n
e
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
A
V
L
C
A
L
_
T
H
R
E
E
Q
U
A
R
T
E
R
'
,
 
'
O
c
u
p
a
c
i
Ã
³
n
 
a
l
t
a
'
)
;

j
r
_
d
e
f
i
n
e
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
A
V
L
C
A
L
_
F
U
L
L
Y
B
O
O
K
E
D
'
,
 
'
C
o
m
p
l
e
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
W
E
E
K
'
,
 
'
P
o
r
 
s
e
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
D
A
Y
S
'
,
 
'
P
o
r
 
d
Ã
­
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
B
O
O
K
I
N
G
'
,
 
'
P
o
r
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
P
E
R
S
O
N
P
E
R
B
O
O
K
I
N
G
'
,
 
'
P
o
r
 
p
e
r
s
o
n
a
 
p
o
r
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
P
E
R
S
O
N
P
E
R
D
A
Y
'
,
 
'
P
o
r
 
p
e
r
s
o
n
a
 
p
o
r
 
d
Ã
­
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
P
E
R
S
O
N
P
E
R
W
E
E
K
'
,
 
'
P
o
r
 
p
e
r
s
o
n
a
 
p
o
r
 
s
e
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
D
A
Y
S
M
I
N
D
A
Y
S
'
,
 
'
P
o
r
 
d
Ã
­
a
 
(
M
Ã
­
n
i
m
o
 
d
Ã
­
a
s
)
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
D
A
Y
S
P
E
R
R
O
O
M
'
,
 
'
P
o
r
 
d
Ã
­
a
s
 
X
 
h
a
b
i
t
a
c
i
o
n
e
s
 
s
e
l
e
c
c
i
o
n
a
d
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
G
I
S
T
R
Y
R
E
B
U
I
L
D
'
,
 
'
R
e
c
o
n
s
t
r
u
i
r
 
r
e
g
i
s
t
r
o
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
G
I
S
T
R
Y
R
E
B
U
I
L
D
_
N
O
T
E
S
'
,
 
'
N
o
r
m
a
l
m
e
n
t
e
,
 
e
l
 
J
o
m
r
e
s
 
p
l
u
g
i
n
 
R
e
g
i
s
t
r
o
 
s
e
 
r
e
c
o
n
s
t
r
u
y
e
 
a
u
t
o
m
Ã
¡
t
i
c
a
m
e
n
t
e
 
c
a
d
a
 
v
e
z
 
q
u
e
 
v
e
 
q
u
e
 
e
l
 
a
d
m
i
n
i
s
t
r
a
d
o
r
 
d
e
 
p
l
u
g
i
n
s
 
a
g
r
e
g
a
 
o
 
q
u
i
t
a
 
u
n
 
p
l
u
g
i
n
,
 
s
i
n
 
e
m
b
a
r
g
o
 
e
s
 
p
o
s
i
b
l
e
 
q
u
e
 
u
s
t
e
d
 
n
o
 
p
u
e
d
a
 
u
s
a
r
 
e
s
t
a
s
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
s
,
 
p
o
r
 
a
l
g
u
n
a
 
r
a
z
Ã
³
n
,
 
p
o
r
 
l
o
 
t
a
n
t
o
 
u
s
t
e
d
 
p
u
e
d
e
 
u
t
i
l
i
z
a
r
 
e
s
t
a
 
f
u
n
c
i
Ã
³
n
 
p
a
r
a
 
r
e
c
o
n
s
t
r
u
i
r
 
e
l
 
R
e
g
i
s
t
r
o
 
m
a
n
u
a
l
m
e
n
t
e
.
 
S
i
 
u
s
t
e
d
 
t
i
e
n
e
 
a
c
c
e
s
o
 
a
 
l
a
 
f
u
n
c
i
Ã
³
n
 
d
e
l
 
a
d
m
i
n
i
s
t
r
a
d
o
r
 
d
e
 
c
o
m
p
l
e
m
e
n
t
o
s
 
y
 
a
c
t
u
a
l
i
z
a
c
i
o
n
e
s
,
 
e
n
t
o
n
c
e
s
 
e
s
 
p
o
c
o
 
p
r
o
b
a
b
l
e
 
q
u
e
 
u
s
t
e
d
 
t
e
n
g
a
 
q
u
e
 
u
t
i
l
i
z
a
r
 
e
s
t
a
 
f
u
n
c
i
Ã
³
n
.
 
T
e
n
d
r
Ã
¡
 
q
u
e
 
r
e
c
o
n
s
t
r
u
i
r
 
d
e
l
 
p
l
u
g
i
n
 
d
e
 
r
e
g
i
s
t
r
o
 
s
i
e
m
p
r
e
 
q
u
e
 
a
g
r
e
g
u
e
 
u
n
 
n
u
e
v
o
 
m
i
n
i
-
c
o
m
p
o
n
e
n
t
e
 
y
 
n
o
 
u
t
i
l
i
c
e
 
e
l
 
A
d
m
i
n
i
s
t
r
a
d
o
r
 
d
e
 
c
o
m
p
l
e
m
e
n
t
o
s
 
p
a
r
a
 
a
g
r
e
g
a
r
l
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
G
I
S
T
R
Y
R
E
B
U
I
L
D
_
S
U
C
C
E
S
S
'
,
 
'
R
e
g
i
s
t
r
o
 
r
e
c
o
n
s
t
r
u
i
d
o
 
c
o
n
 
Ã
©
x
i
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
G
I
S
T
R
Y
R
E
B
U
I
L
D
_
F
A
I
L
U
R
E
'
,
 
'
H
u
b
o
 
u
n
 
e
r
r
o
r
 
c
o
n
 
l
a
 
r
e
c
o
n
s
t
r
u
c
c
i
Ã
³
n
 
d
e
l
 
r
e
g
i
s
t
r
o
 
d
e
 
m
i
n
i
c
o
m
p
o
n
e
n
t
e
s
.
 
U
s
t
e
d
 
d
e
b
e
 
v
e
r
i
f
i
c
a
r
 
s
u
 
r
e
g
i
s
t
r
o
 
d
e
 
e
r
r
o
r
e
s
 
J
o
m
r
e
s
 
p
a
r
a
 
v
e
r
 
s
i
 
h
a
y
 
u
n
 
r
e
g
i
s
t
r
o
 
q
u
e
 
p
r
o
v
o
c
Ã
³
 
e
l
 
e
r
r
o
r
.
'
)
;

j
r
_
d
e
f
i
n
e
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
S
E
A
R
C
H
_
P
R
I
C
E
R
A
N
G
E
S
'
,
 
'
B
u
s
c
a
r
 
p
o
r
 
r
a
n
g
o
 
d
e
 
p
r
e
c
i
o
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
N
O
N
E
'
,
 
'
Â
¡
N
o
 
t
i
e
n
e
 
n
i
n
g
u
n
a
 
r
e
s
e
r
v
a
 
t
o
d
a
v
Ã
­
a
!
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
T
Y
P
E
'
,
 
'
E
d
i
t
a
r
 
s
u
 
t
i
p
o
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
T
Y
P
E
_
I
N
F
O
'
,
 
'
S
e
l
e
c
c
i
o
n
a
r
 
s
u
 
t
i
p
o
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
Y
O
U
R
_
E
N
Q
U
I
R
Y
'
,
 
'
S
u
 
c
o
n
s
u
l
t
a
.
.
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
L
I
S
T
L
I
M
I
T
'
,
 
'
L
i
m
i
t
e
 
l
i
s
t
a
 
p
r
o
p
i
e
d
a
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
L
I
S
T
L
I
M
I
T
_
D
E
S
C
'
,
 
'
E
l
 
n
Ã
º
m
e
r
o
 
d
e
 
p
r
o
p
i
e
d
a
d
e
s
 
p
a
r
a
 
m
o
s
t
r
a
r
 
e
n
 
u
n
a
 
p
Ã
¡
g
i
n
a
 
d
e
s
p
u
Ã
©
s
 
d
e
 
u
n
a
 
b
Ã
º
s
q
u
e
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
T
I
T
L
E
'
,
 
'
F
u
n
c
i
Ã
³
n
 
d
e
 
b
Ã
º
s
q
u
e
d
a
 
i
n
t
e
g
r
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
T
I
T
L
E
_
D
E
S
C
'
,
 
'
L
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
b
Ã
º
s
q
u
e
d
a
 
i
n
t
e
g
r
a
d
a
 
J
o
m
r
e
s
 
p
e
r
m
i
t
e
 
a
 
l
o
s
 
u
s
u
a
r
i
o
s
 
b
u
s
c
a
r
 
a
 
t
r
a
v
Ã
©
s
 
d
e
 
J
o
m
r
e
s
 
P
r
o
p
i
e
d
a
d
e
s
 
d
e
 
a
c
u
e
r
d
o
 
c
o
n
 
u
n
 
c
o
n
j
u
n
t
o
 
d
e
 
f
u
n
c
i
o
n
e
s
.
 
S
i
 
y
a
 
h
a
 
u
t
i
l
i
z
a
d
o
 
l
a
s
 
f
u
n
c
i
o
n
e
s
 
d
e
 
b
Ã
º
s
q
u
e
d
a
 
d
e
 
J
o
m
r
e
s
 
e
n
 
J
o
o
m
l
a
 
u
s
t
e
d
 
e
s
t
a
r
Ã
¡
 
f
a
m
i
l
i
a
r
i
z
a
d
o
 
c
o
n
 
e
s
t
o
s
 
a
j
u
s
t
e
s
.
 
<
b
r
/
>
 
E
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
n
o
s
 
p
e
r
m
i
t
e
 
o
f
r
e
c
e
r
 
e
l
 
m
a
n
e
j
o
 
d
e
 
l
a
 
b
Ã
º
s
q
u
e
d
a
 
e
n
 
J
o
m
r
e
s
 
p
a
r
a
 
a
q
u
e
l
l
o
s
 
u
s
u
a
r
i
o
s
 
q
u
e
 
n
o
 
d
e
s
e
a
n
 
u
t
i
l
i
z
a
r
 
m
Ã
³
d
u
l
o
s
 
d
e
 
b
Ã
º
s
q
u
e
d
a
 
d
e
 
J
o
o
m
l
a
,
 
o
 
p
a
r
a
 
o
t
r
o
s
 
u
s
u
a
r
i
o
s
 
d
e
 
C
M
S
 
q
u
e
 
n
o
 
t
i
e
n
e
n
 
s
u
s
 
p
r
o
p
i
o
s
 
m
Ã
³
d
u
l
o
s
 
d
e
 
b
Ã
º
s
q
u
e
d
a
 
J
o
m
r
e
s
.
 
<
b
r
/
>
 
S
Ã
³
l
o
 
r
e
c
u
e
r
d
e
 
q
u
e
 
s
i
 
d
e
c
i
d
e
 
b
u
s
c
a
r
 
a
l
g
o
 
a
 
t
r
a
v
Ã
©
s
 
d
e
 
u
n
 
e
n
l
a
c
e
 
(
e
s
 
d
e
c
i
r
,
 
n
o
 
u
n
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
)
,
 
e
n
t
o
n
c
e
s
 
l
a
s
 
o
p
c
i
o
n
e
s
 
d
e
 
b
Ã
º
s
q
u
e
d
a
 
n
o
 
s
e
 
l
l
e
v
a
r
Ã
¡
n
 
a
 
c
a
b
o
,
 
s
Ã
³
l
o
 
e
l
 
e
l
e
m
e
n
t
o
 
q
u
e
 
s
e
 
c
o
r
r
e
s
p
o
n
d
e
 
c
o
n
 
e
l
 
e
n
l
a
c
e
 
q
u
e
 
h
a
 
h
e
c
h
o
 
c
l
i
c
.
 
<
b
r
/
>
 
N
o
t
e
 
q
u
e
 
p
o
r
 
d
e
f
e
c
t
o
 
e
l
 
d
i
s
e
Ã
±
o
 
d
e
 
e
s
t
a
 
b
Ã
º
s
q
u
e
d
a
 
i
n
t
e
g
r
a
d
a
 
n
o
 
e
s
 
m
u
y
 
b
o
n
i
t
o
.
 
E
s
o
 
e
s
 
p
o
r
q
u
e
 
e
l
 
a
r
c
h
i
v
o
 
d
e
 
p
l
a
n
t
i
l
l
a
 
q
u
e
 
c
o
n
s
t
r
u
y
e
 
e
l
 
d
i
s
e
Ã
±
o
 
t
i
e
n
e
 
q
u
e
 
i
n
c
l
u
i
r
 
t
o
d
a
s
 
l
a
s
 
o
p
c
i
o
n
e
s
 
p
o
s
i
b
l
e
s
,
 
a
l
g
u
n
o
s
 
d
e
 
l
a
s
 
c
u
a
l
e
s
 
s
o
n
 
i
n
c
o
m
p
a
t
i
b
l
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
E
N
A
B
L
E
'
,
 
'
Â
¿
A
c
t
i
v
a
r
 
e
s
t
a
 
f
u
n
c
i
Ã
³
n
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
E
N
A
B
L
E
_
D
E
S
C
'
,
 
'
S
i
 
e
s
t
a
 
f
u
n
c
i
Ã
³
n
 
e
s
t
Ã
¡
 
h
a
b
i
l
i
t
a
d
a
,
 
c
u
a
l
q
u
i
e
r
 
l
l
a
m
a
d
a
 
a
 
J
o
m
r
e
s
 
q
u
e
 
m
u
e
s
t
r
e
 
l
a
 
l
i
s
t
a
 
d
e
 
p
r
o
p
i
e
d
a
d
e
s
 
m
o
s
t
r
a
r
Ã
¡
 
t
a
m
b
i
Ã
©
n
 
l
a
s
 
o
p
c
i
o
n
e
s
 
d
e
 
b
Ã
º
s
q
u
e
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
U
S
E
C
O
L
S
'
,
 
'
U
s
a
r
 
c
o
l
u
m
n
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
U
S
E
C
O
L
S
_
D
E
S
C
'
,
 
'
C
u
a
l
q
u
i
e
r
 
o
p
c
i
Ã
³
n
 
d
e
 
b
Ã
º
s
q
u
e
d
a
 
q
u
e
 
h
a
y
a
 
d
e
f
i
n
i
d
o
 
c
o
m
o
 
e
n
l
a
c
e
 
(
c
u
a
n
d
o
 
s
e
a
 
e
l
 
c
a
s
o
)
 
s
e
 
m
o
s
t
r
a
r
Ã
¡
 
c
o
m
o
 
c
o
l
u
m
n
a
s
 
(
I
E
 
p
o
n
e
 
b
r
 
a
l
 
f
i
n
a
l
 
d
e
l
 
e
n
l
a
c
e
)
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
S
E
L
E
C
T
C
O
M
B
O
'
,
 
'
B
Ã
º
s
q
u
e
d
a
 
p
o
r
 
r
e
g
i
Ã
³
n
 
s
e
l
e
c
c
i
o
n
a
n
d
o
 
c
o
m
b
o
 
d
e
s
p
l
e
g
a
b
l
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
S
E
L
E
C
T
C
O
M
B
O
_
D
E
S
C
'
,
 
'
O
f
r
e
c
e
 
u
n
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
 
d
e
 
b
Ã
º
s
q
u
e
d
a
 
p
a
r
a
 
f
i
l
t
r
a
r
 
a
 
t
r
a
v
Ã
©
s
 
d
e
 
p
a
Ã
­
s
e
s
/
r
e
g
i
o
n
e
s
/
c
i
u
d
a
d
e
s
.
 
S
i
 
v
a
 
p
a
r
a
 
u
t
i
l
i
z
a
r
 
e
s
t
a
 
f
u
n
c
i
Ã
³
n
,
 
e
n
t
o
n
c
e
s
 
e
s
 
m
e
j
o
r
 
q
u
e
 
n
o
 
u
t
i
l
i
c
e
 
l
a
 
b
Ã
º
s
q
u
e
d
a
 
p
o
r
 
r
e
g
i
Ã
³
n
 
o
 
c
i
u
d
a
d
 
q
u
e
 
s
i
g
u
e
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
P
R
O
P
E
R
T
Y
N
A
M
E
'
,
 
'
B
u
s
c
a
r
 
p
o
r
 
n
o
m
b
r
e
 
P
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
P
R
O
P
E
R
T
Y
N
A
M
E
_
D
E
S
C
'
,
 
'
M
o
s
t
r
a
r
 
l
a
 
b
Ã
º
s
q
u
e
d
a
 
p
o
r
 
e
l
 
n
o
m
b
r
e
 
d
e
 
p
r
o
p
i
e
d
a
d
 
i
n
t
r
o
d
u
c
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
P
R
O
P
E
R
T
Y
N
A
M
E
_
A
S
D
R
O
P
D
O
W
N
'
,
 
'
Â
¿
M
o
s
t
r
a
r
 
c
o
m
o
 
u
n
 
d
e
s
p
l
e
g
a
b
l
e
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
P
R
O
P
E
R
T
Y
N
A
M
E
_
A
S
D
R
O
P
D
O
W
N
_
D
E
S
C
'
,
 
'
C
a
m
b
i
e
 
e
s
t
o
 
a
 
n
o
 
p
a
r
a
 
m
o
s
t
r
a
r
 
l
a
 
l
i
s
t
a
 
d
e
 
e
n
l
a
c
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
T
O
W
N
R
E
G
I
O
N
'
,
 
'
B
u
s
c
a
r
 
p
o
r
 
c
i
u
d
a
d
/
r
e
g
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
R
E
G
I
O
N
_
D
E
S
C
'
,
 
'
M
o
s
t
r
a
r
 
l
a
 
b
Ã
º
s
q
u
e
d
a
 
p
o
r
 
l
a
 
r
e
g
i
Ã
³
n
 
i
n
t
r
o
d
u
c
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
R
E
G
I
O
N
_
A
S
D
R
O
P
D
O
W
N
'
,
 
'
Â
¿
M
o
s
t
r
a
r
 
c
o
m
o
 
u
n
 
d
e
s
p
l
e
g
a
b
l
e
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
R
E
G
I
O
N
_
A
S
D
R
O
P
D
O
W
N
_
D
E
S
C
'
,
 
'
C
a
m
b
i
e
 
e
s
t
o
 
a
 
n
o
 
p
a
r
a
 
m
o
s
t
r
a
r
 
l
a
 
l
i
s
t
a
 
d
e
 
e
n
l
a
c
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
P
R
O
P
E
R
T
Y
T
Y
P
E
'
,
 
'
B
u
s
c
a
r
 
p
o
r
 
t
i
p
o
 
d
e
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
D
E
S
C
'
,
 
'
M
o
s
t
r
a
r
 
l
a
 
b
Ã
º
s
q
u
e
d
a
 
p
o
r
 
t
i
p
o
 
d
e
 
p
r
o
p
i
e
d
a
d
 
i
n
t
r
o
d
u
c
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
A
S
D
R
O
P
D
O
W
N
'
,
 
'
Â
¿
M
o
s
t
r
a
r
 
c
o
m
o
 
u
n
 
d
e
s
p
l
e
g
a
b
l
e
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
A
S
D
R
O
P
D
O
W
N
_
D
E
S
C
'
,
 
'
C
a
m
b
i
e
 
e
s
t
o
 
a
 
n
o
 
p
a
r
a
 
m
o
s
t
r
a
r
 
l
a
 
l
i
s
t
a
 
d
e
 
e
n
l
a
c
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
R
O
O
M
T
Y
P
E
'
,
 
'
B
u
s
c
a
r
 
p
o
r
 
t
i
p
o
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
R
O
O
M
T
Y
P
E
_
D
E
S
C
'
,
 
'
M
o
s
t
r
a
r
 
l
a
 
b
Ã
º
s
q
u
e
d
a
 
p
o
r
 
e
l
 
t
i
p
o
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
 
i
n
t
r
o
d
u
c
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
R
O
O
M
T
Y
P
E
_
A
S
D
R
O
P
D
O
W
N
'
,
 
'
Â
¿
M
o
s
t
r
a
r
 
c
o
m
o
 
u
n
 
d
e
s
p
l
e
g
a
b
l
e
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
R
O
O
M
T
Y
P
E
_
A
S
D
R
O
P
D
O
W
N
_
D
E
S
C
'
,
 
'
C
a
m
b
i
e
 
e
s
t
o
 
a
 
n
o
 
p
a
r
a
 
m
o
s
t
r
a
r
 
l
a
 
l
i
s
t
a
 
d
e
 
e
n
l
a
c
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
F
E
A
T
U
R
E
S
'
,
 
'
B
u
s
c
a
r
 
p
o
r
 
c
a
r
a
c
t
e
r
i
s
t
i
c
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
F
E
A
T
U
R
E
S
_
D
E
S
C
'
,
 
'
M
o
s
t
r
a
r
 
l
a
 
b
Ã
º
s
q
u
e
d
a
 
p
o
r
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
i
n
t
r
o
d
u
c
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
F
E
A
T
U
R
E
S
_
A
S
D
R
O
P
D
O
W
N
'
,
 
'
Â
¿
M
o
s
t
r
a
r
 
c
o
m
o
 
u
n
 
d
e
s
p
l
e
g
a
b
l
e
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
F
E
A
T
U
R
E
S
_
A
S
D
R
O
P
D
O
W
N
_
D
E
S
C
'
,
 
'
C
a
m
b
i
e
 
e
s
t
o
 
a
 
n
o
 
p
a
r
a
 
m
o
s
t
r
a
r
 
l
a
 
l
i
s
t
a
 
d
e
 
e
n
l
a
c
e
s
 
c
o
m
o
 
d
e
s
c
r
i
p
c
i
Ã
³
n
 
d
e
 
i
m
Ã
¡
g
e
n
e
s
 
y
 
c
a
s
i
l
l
a
s
 
d
e
 
v
e
r
i
f
i
c
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
B
u
s
c
a
r
 
p
o
r
 
d
e
s
c
r
i
p
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
D
E
S
C
R
I
P
T
I
O
N
_
D
E
S
C
'
,
 
'
M
o
s
t
r
a
r
 
l
a
 
b
Ã
º
s
q
u
e
d
a
 
p
o
r
 
l
a
 
d
e
s
c
r
i
p
c
i
Ã
³
n
 
i
n
t
r
o
d
u
c
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
A
V
A
I
L
A
B
I
L
I
T
Y
'
,
 
'
B
u
s
c
a
r
 
p
o
r
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
A
V
A
I
L
A
B
I
L
I
T
Y
_
D
E
S
C
'
,
 
'
M
o
s
t
r
a
r
 
l
a
 
b
Ã
º
s
q
u
e
d
a
 
p
o
r
 
l
a
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
 
i
n
t
r
o
d
u
c
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
P
R
I
C
E
R
A
N
G
E
S
'
,
 
'
B
u
s
c
a
r
 
p
o
r
 
r
a
n
g
o
 
d
e
 
p
r
e
c
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
P
R
I
C
E
R
A
N
G
E
S
_
D
E
S
C
'
,
 
'
M
o
s
t
r
a
r
 
l
a
 
b
Ã
º
s
q
u
e
d
a
 
p
o
r
 
p
o
r
 
r
a
n
g
o
 
d
e
 
p
r
e
c
i
o
 
i
n
t
r
o
d
u
c
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
R
A
N
G
E
I
N
C
R
E
M
E
N
T
S
'
,
 
'
B
u
s
c
a
r
 
p
o
r
 
i
n
c
r
e
m
e
n
t
o
s
 
d
e
 
r
a
n
g
o
 
d
e
 
p
r
e
c
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
R
A
N
G
E
I
N
C
R
E
M
E
N
T
S
_
D
E
S
C
'
,
 
'
J
o
m
r
e
s
 
m
i
r
a
r
Ã
¡
 
e
n
 
t
o
d
o
s
 
l
o
s
 
v
a
l
o
r
e
s
 
d
e
 
l
a
s
 
t
a
r
i
f
a
s
 
a
 
c
o
n
t
i
n
u
a
c
i
Ã
³
n
,
 
c
a
l
c
u
l
a
r
Ã
¡
 
u
n
a
 
s
e
r
i
e
 
d
e
 
r
a
n
g
o
s
 
d
e
 
p
r
e
c
i
o
s
 
b
a
s
a
d
o
 
e
n
 
l
o
s
 
i
n
c
r
e
m
e
n
t
o
s
 
d
e
 
v
a
l
o
r
 
q
u
e
 
e
s
t
a
b
l
e
c
i
Ã
³
 
a
q
u
Ã
­
.
'
)
;

j
r
_
d
e
f
i
n
e
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
A
_
G
L
O
B
A
L
_
S
E
A
R
C
H
O
P
T
I
O
N
_
R
A
N
D
O
M
L
I
M
I
T
_
D
E
S
C
'
,
 
'
P
o
r
 
d
e
f
e
c
t
o
,
 
s
i
 
u
n
a
 
p
r
o
p
i
e
d
a
d
 
n
o
 
e
s
t
Ã
¡
 
s
e
l
e
c
c
i
o
n
a
d
a
 
e
n
 
J
o
m
r
e
s
 
s
e
 
r
e
a
l
i
z
a
 
u
n
a
 
b
Ã
º
s
q
u
e
d
a
.
 
S
i
 
e
s
t
a
 
b
Ã
º
s
q
u
e
d
a
 
n
o
 
f
u
e
 
p
r
o
v
o
c
a
d
a
 
p
o
r
 
u
n
 
m
Ã
³
d
u
l
o
 
d
e
 
b
Ã
º
s
q
u
e
d
a
,
 
e
n
t
o
n
c
e
s
 
l
a
 
b
Ã
º
s
q
u
e
d
a
 
o
r
i
g
i
n
a
r
Ã
¡
 
r
e
s
u
l
t
a
d
o
s
 
a
l
 
a
z
a
r
 
(
d
e
l
i
b
e
r
a
d
a
m
e
n
t
e
)
.
 
E
s
t
a
 
o
p
c
i
Ã
³
n
 
l
e
 
p
e
r
m
i
t
e
 
l
i
m
i
t
a
r
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
r
e
s
u
l
t
a
d
o
s
 
e
n
 
e
s
a
 
b
Ã
º
s
q
u
e
d
a
 
a
l
 
a
z
a
r
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
C
R
O
N
_
T
I
T
L
E
'
,
 
'
A
j
u
s
t
e
s
 
d
e
 
t
r
a
b
a
j
o
 
p
a
r
a
 
C
r
o
n
 
y
 
r
e
g
i
s
t
r
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
C
R
O
N
_
D
E
S
C
'
,
 
'
P
s
e
u
d
o
c
r
o
n
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
d
e
l
 
t
r
a
b
a
j
o
.
 
L
a
 
f
u
n
c
i
o
n
a
l
i
d
a
d
 
p
s
e
u
d
o
c
r
o
n
 
e
s
 
n
e
c
e
s
a
r
i
a
 
p
a
r
a
 
l
a
 
f
a
c
t
u
r
a
c
i
Ã
³
n
 
y
 
m
a
n
e
j
o
 
d
e
 
l
a
 
c
o
m
i
s
i
Ã
³
n
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
C
R
O
N
_
I
M
M
E
D
I
A
T
E
R
U
N
'
,
 
'
I
n
s
t
a
l
a
d
o
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
 
c
r
o
n
.
 
P
a
r
a
 
e
j
e
c
u
t
a
r
 
u
n
a
 
t
a
r
e
a
 
d
e
 
c
r
o
n
 
i
n
d
i
v
i
d
u
a
l
 
u
t
i
l
i
c
e
 
l
o
s
 
e
n
l
a
c
e
s
 
q
u
e
 
s
e
 
e
s
p
e
c
i
f
i
c
a
n
 
a
 
c
o
n
t
i
n
u
a
c
i
Ã
³
n
.
 
T
e
n
g
a
 
e
n
 
c
u
e
n
t
a
 
q
u
e
 
e
l
 
c
r
o
n
 
j
o
b
s
 
n
o
 
p
r
o
d
u
c
e
 
n
i
n
g
Ã
º
n
 
r
e
s
u
l
t
a
d
o
 
p
o
r
 
l
o
 
q
u
e
 
n
o
 
v
e
r
Ã
¡
 
n
i
n
g
u
n
a
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
e
n
 
l
a
 
p
Ã
¡
g
i
n
a
.
 
E
n
 
c
a
m
b
i
o
,
 
s
e
 
r
e
f
i
e
r
e
 
a
 
l
a
s
 
a
n
o
t
a
c
i
o
n
e
s
 
d
e
 
t
r
a
b
a
j
o
 
r
e
f
e
r
i
d
a
s
 
a
 
c
o
n
t
i
n
u
a
c
i
Ã
³
n
.
'
)
;

g
l
o
b
a
l
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
s
e
c
r
e
t
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
C
R
O
N
_
M
E
T
H
O
D
'
,
 
'
M
Ã
©
t
o
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
C
R
O
N
_
M
E
T
H
O
D
_
D
E
S
C
'
,
 
'
S
i
 
u
s
t
e
d
 
n
o
 
t
i
e
n
e
 
a
c
c
e
s
o
 
a
 
c
r
o
n
 
j
o
b
s
,
 
a
c
t
i
v
e
 
e
s
t
e
 
m
i
n
i
c
o
m
p
o
n
e
n
t
e
,
 
d
e
 
l
o
 
c
o
n
t
r
a
r
i
o
 
c
r
e
e
 
u
n
a
 
t
a
r
e
a
 
p
r
o
g
r
a
m
a
d
a
 
y
 
d
Ã
­
g
a
l
e
 
q
u
e
 
s
e
 
e
j
e
c
u
t
e
<
b
r
 
/
>
 
<
i
>
c
u
r
l
 
-
s
 
'
.
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
J
A
X
.
'
&
t
a
s
k
=
c
r
o
n
j
o
b
s
&
t
m
p
l
=
'
.
g
e
t
_
s
h
o
w
t
i
m
e
(
'
t
m
p
l
c
o
m
p
o
n
e
n
t
'
)
.
'
&
n
o
_
h
t
m
l
=
1
&
s
e
c
r
e
t
=
'
.
b
a
s
e
6
4
_
e
n
c
o
d
e
(
g
e
t
_
s
h
o
w
t
i
m
e
(
'
s
e
c
r
e
t
'
)
)
.
'
>
 
/
d
e
v
/
n
u
l
l
<
/
i
>
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
C
R
O
N
_
L
O
G
G
I
N
G
'
,
 
'
M
o
s
t
r
a
r
 
e
l
 
r
e
g
i
s
t
r
o
 
e
n
 
e
l
 
n
a
v
e
g
a
d
o
r
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
C
R
O
N
_
L
O
G
G
I
N
G
_
D
E
S
C
'
,
 
'
S
Ã
³
l
o
 
f
u
n
c
i
o
n
a
 
s
i
 
e
l
 
m
Ã
©
t
o
d
o
 
s
e
 
e
s
t
a
b
l
e
c
e
 
e
n
 
m
i
n
i
c
o
m
p
o
n
e
n
t
e
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
C
R
O
N
_
L
O
G
G
I
N
G
E
N
A
B
L
E
D
'
,
 
'
R
e
g
i
s
t
r
o
 
h
a
b
i
l
i
t
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
C
R
O
N
_
L
O
G
G
I
N
G
E
N
A
B
L
E
D
_
D
E
S
C
'
,
 
'
P
o
n
g
a
 
e
s
t
o
 
e
n
 
S
Ã
­
 
p
a
r
a
 
q
u
e
 
e
l
 
r
e
g
i
s
t
r
o
 
e
s
t
Ã
©
 
h
a
b
i
l
i
t
a
d
o
.
 
L
o
s
 
r
e
s
u
l
t
a
d
o
s
 
d
e
 
l
o
s
 
r
e
g
i
s
t
r
o
s
 
s
e
 
e
m
i
t
i
r
Ã
¡
n
 
a
 
c
o
n
t
i
n
u
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
C
R
O
N
_
V
E
R
B
O
S
E
L
O
G
S
'
,
 
'
R
e
g
i
s
t
r
o
 
d
e
t
a
l
l
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
C
R
O
N
_
V
E
R
B
O
S
E
L
O
G
S
_
D
E
S
C
'
,
 
'
L
o
t
e
s
 
d
e
 
r
e
g
i
s
t
r
o
 
d
e
 
s
a
l
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
T
E
M
P
L
A
T
E
E
D
I
T
I
N
G
_
T
I
T
L
E
'
,
 
'
E
d
i
c
i
Ã
³
n
 
d
e
 
p
l
a
n
t
i
l
l
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
U
S
T
O
M
F
I
E
L
D
S
_
T
I
T
L
E
'
,
 
'
C
a
m
p
o
s
 
p
e
r
s
o
n
a
l
i
z
a
d
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
U
S
T
O
M
F
I
E
L
D
S
_
D
E
S
C
'
,
 
'
A
q
u
Ã
­
 
p
u
e
d
e
 
d
e
f
i
n
i
r
 
c
a
m
p
o
s
 
s
i
m
p
l
e
s
 
p
e
r
s
o
n
a
l
i
z
a
d
o
s
 
q
u
e
 
s
e
 
m
o
s
t
r
a
r
Ã
¡
n
 
e
n
 
e
l
 
f
o
r
m
u
l
a
r
i
o
 
d
e
 
r
e
s
e
r
v
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
U
S
T
O
M
F
I
E
L
D
S
_
F
I
E
L
D
N
A
M
E
'
,
 
'
N
o
m
b
r
e
 
d
e
 
c
a
m
p
o
 
(
s
i
n
 
e
s
p
a
c
i
o
s
)
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
U
S
T
O
M
F
I
E
L
D
S
_
D
E
F
A
U
L
T
V
A
L
U
E
'
,
 
'
V
a
l
o
r
 
p
o
r
 
d
e
f
e
c
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
U
S
T
O
M
F
I
E
L
D
S
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
U
S
T
O
M
F
I
E
L
D
S
_
R
E
Q
U
I
R
E
D
'
,
 
'
R
e
q
u
e
r
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
X
T
R
A
_
Q
U
A
N
T
I
T
Y
'
,
 
'
C
a
n
t
i
d
a
d
 
m
Ã
¡
x
i
m
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
X
T
R
A
_
Q
U
A
N
T
I
T
Y
_
D
E
S
C
'
,
 
'
S
i
 
l
a
 
c
a
n
t
i
d
a
d
 
m
Ã
¡
x
i
m
a
 
s
e
 
e
s
t
a
b
l
e
c
e
 
e
n
 
m
Ã
¡
s
 
d
e
 
1
 
,
 
a
 
l
o
s
 
h
u
Ã
©
s
p
e
d
e
s
 
s
e
 
l
e
s
 
o
f
r
e
c
e
r
Ã
¡
 
u
n
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
 
p
a
r
a
 
e
l
e
g
i
r
 
l
a
 
c
a
n
t
i
d
a
d
 
d
e
 
l
o
s
 
e
x
t
r
a
s
 
q
u
e
 
n
e
c
e
s
i
t
a
n
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
T
A
X
R
A
T
E
S
_
T
I
T
L
E
'
,
 
'
I
m
p
u
e
s
t
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
T
A
X
R
A
T
E
S
_
C
O
D
E
'
,
 
'
C
Ã
³
d
i
g
o
 
I
m
p
u
e
s
t
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
T
A
X
R
A
T
E
S
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
n
 
I
m
p
u
e
s
t
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
T
A
X
R
A
T
E
S
_
C
A
N
N
O
T
D
E
L
E
T
E
'
,
 
'
N
o
 
p
u
e
d
e
 
b
o
r
r
a
r
 
e
s
t
e
 
I
m
p
u
e
s
t
o
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
T
A
X
R
A
T
E
S
_
R
A
T
E
'
,
 
'
T
a
s
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
T
I
T
L
E
'
,
 
'
F
a
c
t
u
r
a
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
U
N
P
A
I
D
'
,
 
'
N
o
 
p
a
g
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
A
I
D
'
,
 
'
P
a
g
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
C
A
N
C
E
L
L
E
D
'
,
 
'
C
a
n
c
e
l
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
E
N
D
I
N
G
'
,
 
'
P
e
n
d
i
e
n
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
U
S
E
R
'
,
 
'
U
s
u
a
r
i
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
'
,
 
'
E
s
t
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
R
A
I
S
E
D
'
,
 
'
P
l
a
n
t
e
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
D
U
E
'
,
 
'
D
e
b
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
U
B
S
C
R
I
P
T
I
O
N
'
,
 
'
S
u
s
c
r
i
p
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
I
N
I
T
T
O
T
A
L
'
,
 
'
T
o
t
a
l
 
p
e
n
d
i
e
n
t
e
 
d
e
 
p
a
g
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
R
E
C
U
R
_
F
R
E
Q
U
E
N
C
Y
'
,
 
'
F
r
e
c
u
e
n
c
i
a
 
r
e
p
e
t
i
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
R
E
C
U
R
_
D
O
M
O
N
T
H
'
,
 
'
D
Ã
­
a
 
d
e
l
 
m
e
s
 
r
e
c
u
r
r
e
n
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
U
R
R
E
N
C
Y
C
O
D
E
'
,
 
'
C
Ã
³
d
i
g
o
 
d
e
 
m
o
n
e
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
'
,
 
'
L
Ã
­
n
e
a
s
 
d
e
 
p
e
d
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
N
A
M
E
'
,
 
'
N
o
m
b
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
P
R
I
C
E
'
,
 
'
P
r
e
c
i
o
 
i
n
i
c
i
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
Q
T
Y
'
,
 
'
C
a
n
t
i
d
a
d
 
i
n
i
c
i
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
D
I
S
C
O
U
N
T
'
,
 
'
D
e
s
c
u
e
n
t
o
 
i
n
i
c
i
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
T
O
T
A
L
'
,
 
'
T
o
t
a
l
 
i
n
i
c
i
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
C
O
D
E
'
,
 
'
C
Ã
³
d
i
g
o
 
d
e
 
i
m
p
u
e
s
t
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
n
 
d
e
 
i
m
p
u
e
s
t
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
R
A
T
E
'
,
 
'
T
a
s
a
 
i
m
p
o
s
i
t
i
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
P
A
Y
P
A
L
_
S
E
T
T
I
N
G
S
_
O
V
E
R
R
I
D
E
'
,
 
'
Â
¿
R
e
e
m
p
l
a
z
a
r
 
l
o
s
 
a
j
u
s
t
e
s
 
e
s
t
Ã
¡
n
d
a
r
 
d
e
 
l
a
 
p
a
s
a
r
e
l
a
 
J
o
m
r
e
s
?
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
H
O
W
I
N
V
O
I
C
E
S
'
,
 
'
M
o
s
t
r
a
r
 
m
i
s
 
f
a
c
t
u
r
a
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
T
I
T
L
E
'
,
 
'
C
u
p
o
n
e
s
 
d
e
s
c
u
e
n
t
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
D
E
S
C
'
,
 
'
L
o
s
 
c
Ã
³
d
i
g
o
s
 
d
e
 
d
e
s
c
u
e
n
t
o
 
s
e
 
p
u
e
d
e
n
 
g
e
n
e
r
a
r
 
y
 
e
n
v
i
a
r
 
â
€
‹
â
€
‹
a
 
l
o
s
 
c
l
i
e
n
t
e
s
 
c
o
m
o
 
u
n
 
i
n
c
e
n
t
i
v
o
 
p
a
r
a
 
h
a
c
e
r
 
r
e
s
e
r
v
a
s
.
 
V
Ã
¡
l
i
d
o
 
d
e
s
d
e
 
y
 
h
a
s
t
a
 
l
a
s
 
f
e
c
h
a
s
 
s
e
 
r
e
f
i
e
r
e
 
a
 
l
a
s
 
f
e
c
h
a
s
 
e
n
 
q
u
e
 
l
a
 
r
e
s
e
r
v
a
 
s
e
 
p
u
e
d
e
 
h
a
c
e
r
 
e
n
 
a
d
e
l
a
n
t
e
,
 
n
o
 
a
 
l
a
 
f
e
c
h
a
 
d
e
 
l
a
 
p
r
o
p
i
a
 
r
e
s
e
r
v
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
C
O
D
E
'
,
 
'
C
Ã
³
d
i
g
o
 
d
e
 
c
u
p
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
V
A
L
I
D
F
R
O
M
'
,
 
'
V
Ã
¡
l
i
d
o
 
d
e
s
d
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
V
A
L
I
D
T
O
'
,
 
'
V
Ã
¡
l
i
d
o
 
h
a
s
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
A
M
O
U
N
T
'
,
 
'
I
m
p
o
r
t
e
 
d
e
 
d
e
s
c
u
e
n
t
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
I
S
P
E
R
C
E
N
T
A
G
E
'
,
 
'
E
l
 
d
e
s
c
u
e
n
t
o
 
e
s
 
u
n
 
p
o
r
c
e
n
t
a
j
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
R
O
O
M
O
N
L
Y
'
,
 
'
S
Ã
³
l
o
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
'
S
i
 
t
i
e
n
e
 
u
n
 
c
Ã
³
d
i
g
o
 
d
e
 
c
u
p
Ã
³
n
,
 
p
o
r
 
f
a
v
o
r
 
e
s
c
r
i
b
a
l
o
 
e
n
 
e
l
 
c
u
a
d
r
o
 
y
 
h
a
g
a
 
c
l
i
c
 
e
n
 
"
G
u
a
r
d
a
r
 
c
u
p
Ã
³
n
"
p
a
r
a
 
g
u
a
r
d
a
r
 
l
o
s
 
d
e
t
a
l
l
e
s
 
d
e
 
c
u
p
Ã
³
n
 
e
n
 
s
u
 
r
e
s
e
r
v
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
A
P
P
L
Y
B
U
T
T
O
N
'
,
 
'
G
u
a
r
d
a
r
 
c
u
p
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
C
O
U
P
O
N
S
A
V
E
D
'
,
 
'
C
u
p
Ã
³
n
 
g
u
a
r
d
a
d
o
 
e
n
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
C
O
U
P
O
N
N
O
T
F
O
U
N
D
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
c
u
p
Ã
³
n
 
n
o
 
e
n
c
o
n
t
r
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
D
I
S
C
O
U
N
T
V
A
L
U
E
'
,
 
'
V
a
l
o
r
 
d
e
 
c
u
p
Ã
³
n
 
d
e
 
d
e
s
c
u
e
n
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
B
O
O
K
I
N
G
N
O
T
E
'
,
 
'
D
e
s
c
u
e
n
t
o
 
d
e
 
r
e
s
e
r
v
a
.
 
C
Ã
³
d
i
g
o
 
d
e
 
D
e
s
c
u
e
n
t
o
 
v
Ã
¡
l
i
d
o
/
v
a
l
o
r
 
d
e
 
l
o
s
 
d
e
s
c
u
e
n
t
o
s
/
c
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
d
e
 
c
u
p
Ã
³
n
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
H
O
O
S
E
L
A
N
G
U
A
G
E
S
'
,
 
'
E
l
e
g
i
r
 
i
d
i
o
m
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
H
O
O
S
E
L
A
N
G
U
A
G
E
S
_
I
N
F
O
'
,
 
'
E
l
i
j
a
 
l
a
s
 
o
p
c
i
o
n
e
s
 
d
e
 
i
d
i
o
m
a
 
q
u
e
 
s
e
 
m
u
e
s
t
r
a
 
e
n
 
e
l
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
H
O
O
S
E
L
A
N
G
U
A
G
E
S
_
S
H
O
W
D
R
O
P
D
O
W
N
'
,
 
'
Â
¿
M
o
s
t
r
a
r
 
e
l
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
 
d
e
 
s
e
l
e
c
c
i
Ã
³
n
 
d
e
 
i
d
i
o
m
a
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
D
E
A
R
'
,
 
'
E
s
t
i
m
a
d
o
/
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
T
H
A
N
K
Y
O
U
'
,
 
'
G
r
a
c
i
a
s
 
p
o
r
 
r
e
g
i
s
t
r
a
r
s
e
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
U
S
E
R
N
A
M
E
'
,
 
'
S
u
 
n
o
m
b
r
e
 
d
e
 
u
s
u
a
r
i
o
 
e
s
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
P
A
S
S
W
O
R
D
'
,
 
'
S
u
 
c
o
n
t
r
a
s
e
Ã
±
a
 
e
s
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
L
O
G
_
I
N
'
,
 
'
P
o
r
 
f
a
v
o
r
 
i
n
i
c
i
e
 
s
e
s
i
Ã
³
n
 
p
a
r
a
 
v
e
r
 
s
u
 
r
e
s
e
r
v
a
s
 
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
C
O
U
P
O
N
'
,
 
'
C
u
p
Ã
³
n
 
g
u
a
r
d
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
D
E
L
E
T
E
_
C
O
U
P
O
N
'
,
 
'
C
u
p
Ã
³
n
 
b
o
r
r
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
M
S
_
C
L
I
C
K
A
T
E
L
L
_
T
I
T
L
E
'
,
 
'
J
o
m
r
e
s
 
-
>
 
C
l
i
c
k
a
t
e
l
l
 
S
M
S
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
M
S
_
C
L
I
C
K
A
T
E
L
L
_
U
S
E
R
N
A
M
E
'
,
 
'
U
s
u
a
r
i
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
M
S
_
C
L
I
C
K
A
T
E
L
L
_
P
A
S
S
W
O
R
D
'
,
 
'
C
o
n
t
r
a
s
e
Ã
±
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
M
S
_
C
L
I
C
K
A
T
E
L
L
_
A
P
I
I
D
'
,
 
'
A
P
I
 
i
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
M
S
_
C
L
I
C
K
A
T
E
L
L
_
N
O
T
I
F
I
C
A
T
I
O
N
_
M
O
B
I
L
E
N
U
M
B
E
R
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
t
e
l
Ã
©
f
o
n
o
 
n
o
t
i
f
i
c
a
c
i
o
n
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
M
S
_
C
L
I
C
K
A
T
E
L
L
_
N
O
T
I
F
I
C
A
T
I
O
N
_
M
O
B
I
L
E
N
U
M
B
E
R
_
D
E
S
C
'
,
 
"
P
o
r
 
f
a
v
o
r
 
u
t
i
l
i
c
e
 
e
l
 
f
o
r
m
a
t
o
 
'
c
Ã
³
d
i
g
o
 
d
e
l
 
p
a
Ã
­
s
,
 
n
Ã
º
m
e
r
o
 
d
e
 
m
Ã
³
v
i
l
'
.
 
P
o
r
 
e
j
e
m
p
l
o
,
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
m
Ã
³
v
i
l
 
e
n
 
e
l
 
R
e
i
n
o
 
U
n
i
d
o
 
s
e
r
Ã
­
a
 
a
l
g
o
 
a
s
Ã
­
 
c
o
m
o
 
'
4
4
7
9
7
9
1
2
3
4
5
6
'
.
 
D
e
j
e
 
e
n
 
b
l
a
n
c
o
 
s
i
 
n
o
 
d
e
s
e
a
 
q
u
e
 
n
i
n
g
u
n
a
 
n
o
t
i
f
i
c
a
c
i
Ã
³
n
 
d
e
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
 
s
e
a
 
e
n
v
i
a
d
a
 
a
 
t
u
 
t
e
l
Ã
©
f
o
n
o
 
m
Ã
³
v
i
l
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
M
S
_
C
L
I
C
K
A
T
E
L
L
_
T
A
B
T
I
T
L
E
'
,
 
'
S
M
S
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
M
S
_
C
L
I
C
K
A
T
E
L
L
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
"

<
b
>
O
b
v
i
a
m
e
n
t
e
,
 
n
o
 
s
e
 
p
u
e
d
e
 
u
t
i
l
i
z
a
r
/
p
r
o
b
a
r
 
e
s
t
a
 
p
a
s
a
r
e
l
a
 
d
e
s
d
e
 
l
o
c
a
l
h
o
s
t
,
 
t
e
n
d
r
Ã
¡
 
q
u
e
 
h
a
c
e
r
l
o
 
d
e
s
d
e
 
u
n
 
s
e
r
v
i
d
o
r
 
e
n
 
f
u
n
c
i
o
n
a
m
i
e
n
t
o
.
<
/
b
>

<
b
r
/
>

<
b
r
/
>

P
a
r
a
 
u
t
i
l
i
z
a
r
 
l
a
 
p
a
s
a
r
e
l
a
 
C
l
i
c
k
a
t
e
l
l
 
n
e
c
e
s
i
t
a
 
u
n
a
 
c
u
e
n
t
a
 
d
e
 
C
l
i
c
k
a
t
e
l
l
 
y
 
p
o
r
 
l
o
 
m
e
n
o
s
 
u
n
a
 
c
o
n
e
x
i
Ã
³
n
 
r
e
g
i
s
t
r
a
d
a
 
(
A
P
I
 
i
n
s
t
a
n
c
i
a
 
s
u
b
-
p
r
o
d
u
c
t
o
)
 
e
n
t
r
e
 
s
u
 
a
p
l
i
c
a
c
i
Ã
³
n
 
y
 
n
u
e
s
t
r
a
 
p
u
e
r
t
a
 
d
e
 
e
n
l
a
c
e
.
 
C
a
d
a
 
m
Ã
©
t
o
d
o
 
d
e
 
c
o
n
e
x
i
Ã
³
n
 
e
s
 
c
o
n
o
c
i
d
o
 
c
o
m
o
 
u
n
 
s
u
b
-
p
r
o
d
u
c
t
o
.
 
H
e
 
a
q
u
Ã
­
 
c
Ã
³
m
o
:
<
b
r
/
>

<
b
r
/
>

<
b
>
P
a
s
o
 
1
 
-
 
r
e
g
i
s
t
r
a
r
 
u
n
a
 
c
u
e
n
t
a
 
C
l
i
c
k
a
t
e
l
l
 
<
/
 
b
>
 
<
b
r
/
>

S
i
 
a
Ã
º
n
 
n
o
 
t
i
e
n
e
 
u
n
a
 
c
u
e
n
t
a
 
d
e
 
C
l
i
c
k
a
t
e
l
l
,
 
e
s
 
n
e
c
e
s
a
r
i
o
 
r
e
g
i
s
t
r
a
r
s
e
 
p
a
r
a
 
o
b
t
e
n
e
r
 
u
n
a
 
c
o
m
o
 
l
a
 
q
u
e
 
s
i
g
u
e
.
 
D
e
 
l
o
 
c
o
n
t
r
a
r
i
o
 
v
a
y
a
 
a
l
 
p
a
s
o
 
2
.
 
<
b
r
/
>

*
 
I
r
 
a
 
l
a
 
h
t
t
p
:
/
/
w
w
w
.
c
l
i
c
k
a
t
e
l
l
.
c
o
m
/
p
r
o
d
u
c
t
s
/
s
m
s
_
g
a
t
e
w
a
y
.
p
h
p
,
 
y
 
e
l
e
g
i
r
 
e
l
 
s
u
b
p
r
o
d
u
c
t
o
 
a
d
e
c
u
a
d
o
 
d
e
 
l
a
 
A
P
I
 
(
m
Ã
©
t
o
d
o
 
d
e
 
c
o
n
e
x
i
Ã
³
n
)
 
q
u
e
 
d
e
s
e
a
 
u
t
i
l
i
z
a
r
 
(
C
l
i
c
k
a
t
e
l
l
 
C
e
n
t
r
a
l
 
(
A
P
I
)
)
 
<
b
r
/
>

*
 
H
a
g
a
 
c
l
i
c
 
e
n
 
e
l
 
e
n
l
a
c
e
 
d
e
 
r
e
g
i
s
t
r
o
.
 
<
b
r
/
>

*
 
L
l
e
n
e
 
e
l
 
f
o
r
m
u
l
a
r
i
o
 
d
e
 
i
n
s
c
r
i
p
c
i
Ã
³
n
.
 
<
b
r
/
>

T
r
a
s
 
s
u
p
e
r
a
r
 
c
o
n
 
Ã
©
x
i
t
o
 
e
l
 
e
n
v
Ã
­
o
 
d
e
l
 
f
o
r
m
u
l
a
r
i
o
 
a
u
t
o
m
Ã
¡
t
i
c
a
m
e
n
t
e
 
i
n
g
r
e
s
a
r
Ã
¡
 
e
n
 
s
u
 
n
u
e
v
a
 
c
u
e
n
t
a
 
y
 
s
e
r
Ã
¡
 
l
l
e
v
a
d
o
 
a
 
u
n
a
 
p
Ã
¡
g
i
n
a
 
d
o
n
d
e
 
u
s
t
e
d
 
p
u
e
d
e
 
e
l
e
g
i
r
 
s
u
s
 
A
P
I
 
c
o
n
n
e
c
t
i
o
n
.
 
<
b
r
/
>

<
b
>
 
P
a
s
o
 
2
 
-
 
a
g
r
e
g
a
r
 
u
n
 
r
e
g
i
s
t
r
o
 
A
P
I
 
c
o
n
n
e
c
t
i
o
n
 
(
s
u
b
-
p
r
o
d
u
c
t
o
)
 
<
/
 
b
>
 
<
b
r
/
>

S
i
 
n
o
 
e
s
t
Ã
¡
 
y
a
 
c
o
n
e
c
t
a
d
o
 
a
 
s
u
 
c
u
e
n
t
a
,
 
d
e
b
e
 
h
a
c
e
r
l
o
 
e
n
 
<
b
r
/
>
 
h
t
t
p
:
/
/
w
w
w
.
c
l
i
c
k
a
t
e
l
l
.
c
o
m
/
l
o
g
i
n
.
p
h
p

*
 
S
e
l
e
c
c
i
o
n
e
\
"
A
d
m
i
n
i
s
t
r
a
r
 
m
i
s
 
p
r
o
d
u
c
t
o
s
\
"
 
e
n
 
e
l
 
m
e
n
Ã
º
 
s
u
p
e
r
i
o
r
.
 
<
b
r
/
>

*
 
S
e
l
e
c
c
i
o
n
e
 
e
l
 
t
i
p
o
 
d
e
 
c
o
n
e
x
i
Ã
³
n
 
d
e
 
l
a
 
A
P
I
 
q
u
e
 
d
e
s
e
a
 
u
t
i
l
i
z
a
r
 
(
A
P
I
 
H
T
T
P
)
 
d
e
l
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
 
(
'
A
d
d
 
C
o
n
n
e
c
t
i
o
n
'
)
.
 
<
b
r
/
>

*
 
C
o
m
p
l
e
t
a
r
 
e
l
 
f
o
r
m
u
l
a
r
i
o
.
 
A
s
e
g
Ã
º
r
e
s
e
 
d
e
 
q
u
e
 
i
n
t
r
o
d
u
z
c
e
 
l
a
 
I
P
 
b
l
o
q
u
e
a
d
a
 
(
l
a
 
I
P
 
d
e
 
e
s
t
e
 
s
e
r
v
i
d
o
r
)
,
 
a
j
u
s
t
a
r
 
C
a
l
l
b
a
c
k
 
a
 
H
T
T
P
 
P
O
S
T
.
 
T
e
n
d
r
Ã
¡
 
q
u
e
 
e
s
t
a
b
l
e
c
e
r
 
l
a
 
d
e
v
o
l
u
c
i
Ã
³
n
 
d
e
 
l
l
a
m
a
d
a
 
I
P
 
"
 
.
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
i
v
e
_
s
i
t
e
'
)
.
'
/
i
n
d
e
x
.
p
h
p
?
o
p
t
i
o
n
=
c
o
m
_
j
o
m
r
e
s
&
t
a
s
k
=
s
m
s
_
c
l
i
c
k
a
t
e
l
l
_
c
a
l
l
b
a
c
k
 
y
 
u
n
 
i
d
e
n
t
i
f
i
c
a
d
o
r
 
d
e
 
u
s
u
a
r
i
o
 
y
 
c
o
n
t
r
a
s
e
Ã
±
a
.
 
<
b
r
/
>

S
i
 
s
e
 
r
e
g
i
s
t
r
a
 
m
Ã
¡
s
 
d
e
 
u
n
a
 
c
o
n
e
x
i
Ã
³
n
 
d
e
 
l
a
 
A
P
I
,
 
e
l
 
n
o
m
b
r
e
 
d
e
 
l
a
 
d
e
s
c
r
i
p
c
i
Ã
³
n
 
q
u
e
 
h
a
 
i
n
t
r
o
d
u
c
i
d
o
 
p
a
r
a
 
c
a
d
a
 
u
n
a
 
d
e
b
e
 
s
e
r
 
Ã
º
n
i
c
o
 
-
 
n
o
 
s
e
 
p
u
e
d
e
 
t
e
n
e
r
 
m
Ã
º
l
t
i
p
l
e
s
 
A
P
I
s
 
c
o
n
 
e
l
 
m
i
s
m
o
 
n
o
m
b
r
e
 
<
b
r
/
>
.

D
e
s
p
u
Ã
©
s
 
d
e
 
e
n
v
i
a
r
 
e
l
 
f
o
r
m
u
l
a
r
i
o
,
 
s
u
s
 
d
a
t
o
s
 
d
e
 
a
u
t
e
n
t
i
c
a
c
i
Ã
³
n
 
s
e
 
m
o
s
t
r
a
r
Ã
¡
n
,
 
i
n
c
l
u
i
d
a
 
l
a
 
i
d
e
n
t
i
f
i
c
a
c
i
Ã
³
n
 
Ã
º
n
i
c
a
 
d
e
 
c
a
d
a
 
c
o
n
e
x
i
Ã
³
n
 
d
e
 
l
a
 
A
P
I
 
(
a
p
i
_
i
d
)
.
 
E
s
t
o
s
 
d
a
t
o
s
 
d
e
 
a
u
t
e
n
t
i
c
a
c
i
Ã
³
n
 
s
e
 
r
e
q
u
i
e
r
e
n
 
c
u
a
n
d
o
 
s
e
 
c
o
n
e
c
t
a
 
a
 
l
a
 
p
a
s
a
r
e
l
a
 
C
l
i
c
k
a
t
e
l
l
 
p
a
r
a
 
e
n
v
i
a
r
 
u
n
 
m
e
n
s
a
j
e
.
 
<
b
r
/
>

<
b
r
/
>

U
t
i
l
i
c
e
 
s
u
 
n
o
m
b
r
e
 
d
e
 
u
s
u
a
r
i
o
,
 
c
o
n
t
r
a
s
e
Ã
±
a
 
y
 
a
p
i
_
i
d
 
p
a
r
a
 
r
e
l
l
e
n
a
r
 
l
o
s
 
c
a
m
p
o
s
 
a
n
t
e
r
i
o
r
e
s
.

<
b
r
/
>

<
b
r
/
>

'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
J
R
C
O
N
F
I
G
_
G
L
O
B
A
L
C
U
R
R
E
N
C
Y
Y
E
S
N
O
'
,
 
'
Â
¿
U
s
a
r
 
m
o
n
e
d
a
 
g
l
o
b
a
l
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
J
R
C
O
N
F
I
G
_
G
L
O
B
A
L
C
U
R
R
E
N
C
Y
Y
E
S
N
O
_
D
E
S
C
'
,
 
'
P
o
n
g
a
 
e
s
t
o
 
e
n
 
s
Ã
­
 
p
a
r
a
 
f
o
r
z
a
r
 
t
o
d
a
s
 
l
a
s
 
p
r
o
p
i
e
d
a
d
e
s
 
q
u
e
 
u
t
i
l
i
c
e
n
 
l
a
 
m
i
s
m
a
 
m
o
n
e
d
a
 
(
e
j
.
 
&
 
#
 
8
 
3
 
6
 
4
 
;
)
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
B
O
O
K
I
N
G
F
O
R
M
_
S
H
O
W
D
I
S
A
B
L
E
D
'
,
 
'
M
o
s
t
r
a
r
 
e
l
 
f
o
r
m
u
l
a
r
i
o
 
L
i
s
t
a
 
d
e
 
r
e
s
e
r
v
a
 
d
e
 
l
a
 
h
a
b
i
t
a
c
i
Ã
³
n
 
a
c
c
e
s
i
b
l
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
B
O
O
K
I
N
G
F
O
R
M
_
S
H
O
W
M
A
X
P
E
O
P
L
E
'
,
 
'
M
o
s
t
r
a
r
 
e
l
 
f
o
r
m
u
l
a
r
i
o
 
L
i
s
t
a
 
d
e
 
r
e
s
e
r
v
a
 
M
Ã
¡
x
i
m
o
s
 
o
c
u
p
a
n
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
H
O
R
I
Z
R
O
O
M
S
L
I
S
T
_
E
S
T
I
M
A
T
E
W
A
R
N
I
N
G
'
,
 
'
T
e
n
g
a
 
e
n
 
c
u
e
n
t
a
 
q
u
e
 
l
o
s
 
p
r
e
c
i
o
s
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
 
i
n
d
i
c
a
d
o
s
 
s
o
n
 
e
s
t
i
m
a
c
i
o
n
e
s
 
y
 
e
l
 
p
r
e
c
i
o
 
t
o
t
a
l
 
d
e
 
l
a
 
r
e
s
e
r
v
a
 
n
o
 
s
e
 
c
a
l
c
u
l
a
r
Ã
¡
 
h
a
s
t
a
 
q
u
e
 
h
a
y
a
 
a
g
r
e
g
a
d
o
 
u
n
a
 
h
a
b
i
t
a
c
i
Ã
³
n
 
o
 
h
a
b
i
t
a
c
i
o
n
e
s
 
a
 
s
u
 
s
e
l
e
c
c
i
Ã
³
n
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
P
A
C
K
A
G
E
S
_
T
I
T
L
E
'
,
 
'
S
u
s
c
r
i
p
c
i
Ã
³
n
 
p
a
q
u
e
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
P
A
C
K
A
G
E
S
_
N
A
M
E
'
,
 
'
N
o
m
b
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
P
A
C
K
A
G
E
S
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
P
A
C
K
A
G
E
S
_
P
U
B
L
I
S
H
E
D
'
,
 
'
P
u
b
l
i
c
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
P
A
C
K
A
G
E
S
_
F
U
L
L
A
M
O
U
N
T
'
,
 
'
I
m
p
o
r
t
e
 
t
o
t
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
P
A
C
K
A
G
E
S
_
P
R
O
P
E
R
T
Y
L
I
M
I
T
'
,
 
'
L
Ã
­
m
i
t
e
 
p
r
o
p
i
e
d
a
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
P
A
C
K
A
G
E
S
_
S
U
B
S
C
R
I
B
E
'
,
 
'
S
u
s
c
r
i
b
i
r
s
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
U
S
E
'
,
 
'
U
t
i
l
i
c
e
 
l
a
 
f
u
n
c
i
o
n
a
l
i
d
a
d
 
d
e
 
m
a
n
e
j
o
 
d
e
 
s
u
s
c
r
i
p
c
i
Ã
³
n
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
N
E
W
U
S
E
R
'
,
 
'
C
r
e
a
r
 
n
u
e
v
o
 
u
s
u
a
r
i
o
 
e
n
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
N
E
W
U
S
E
R
_
D
E
S
C
'
,
 
'
C
r
e
a
r
 
n
u
e
v
a
 
c
u
e
n
t
a
 
d
e
 
u
s
u
a
r
i
o
 
e
n
 
u
s
u
a
r
i
o
s
 
n
o
 
r
e
g
i
s
t
r
a
d
o
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
L
I
C
K
T
O
R
E
G
I
S
T
E
R
'
,
 
'
H
a
g
a
 
c
l
i
c
 
a
q
u
Ã
­
 
p
a
r
a
 
r
e
g
i
s
t
r
a
r
 
s
u
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
S
U
B
J
E
C
T
'
,
 
'
G
r
a
c
i
a
s
 
p
o
r
 
s
u
 
r
e
s
e
r
v
a
 
-
 
s
i
g
a
 
n
u
e
v
o
s
 
d
e
t
a
l
l
e
s
 
d
e
 
u
s
u
a
r
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
L
A
T
L
O
N
G
_
D
E
S
C
'
,
 
'
U
t
i
l
i
z
a
r
 
e
l
 
r
a
t
Ã
³
n
 
p
a
r
a
 
m
o
v
e
r
s
e
 
p
o
r
 
e
l
 
m
a
p
a
 
y
 
a
r
r
a
s
t
r
e
 
e
l
 
p
u
n
t
e
r
o
 
a
 
l
a
 
u
b
i
c
a
c
i
Ã
³
n
 
d
e
 
s
u
 
p
r
o
p
i
e
d
a
d
 
p
a
r
a
 
e
s
t
a
b
l
e
c
e
r
 
l
a
 
l
a
t
i
t
u
d
 
y
 
l
o
n
g
i
t
u
d
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
T
R
O
L
P
A
N
E
L
'
,
 
'
P
a
n
e
l
 
d
e
 
c
o
n
t
r
o
l
'
)
;

/
/
 
J
o
m
r
e
s
 
v
4
.
2

j
r
_
d
e
f
i
n
e
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
M
A
N
A
G
E
R
_
S
H
O
W
I
N
V
O
I
C
E
'
,
 
'
M
o
s
t
r
a
r
 
F
a
c
t
u
r
a
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
N
A
G
E
R
_
S
H
O
W
I
N
V
O
I
C
E
S
'
,
 
'
M
o
s
t
r
a
r
 
F
a
c
t
u
r
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
U
S
E
R
_
L
I
S
T
M
Y
P
R
O
P
E
R
T
Y
'
,
 
'
A
Ã
±
a
d
i
r
 
m
i
 
p
r
o
p
i
e
d
a
d
 
a
 
e
s
t
e
 
s
i
t
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
W
A
R
N
I
N
G
S
_
D
A
N
G
E
R
W
I
L
L
R
O
B
I
N
S
O
N
'
,
 
'
C
u
i
d
a
d
o
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
S
U
B
S
C
R
I
B
I
N
G
_
E
R
R
O
R
_
N
O
P
A
C
K
A
G
E
I
D
'
,
 
'
L
o
 
s
e
n
t
i
m
o
s
,
 
p
e
r
o
 
e
s
t
e
 
I
D
 
d
e
 
p
a
q
u
e
t
e
 
n
o
 
s
e
 
r
e
c
o
n
o
c
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
S
U
B
S
C
R
I
B
I
N
G
_
E
R
R
O
R
_
A
L
R
E
A
D
Y
S
U
B
S
C
R
I
B
E
D
T
O
F
R
E
E
B
I
E
'
,
 
'
L
o
 
s
e
n
t
i
m
o
s
,
 
u
s
t
e
d
 
y
a
 
e
s
t
Ã
¡
 
s
u
s
c
r
i
t
o
 
a
 
u
n
 
p
a
q
u
e
t
e
 
g
r
a
t
u
i
t
o
,
 
u
s
t
e
d
 
n
o
 
p
u
e
d
e
 
s
u
s
c
r
i
b
i
r
 
e
l
 
p
a
q
u
e
t
e
 
d
e
 
n
u
e
v
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
Y
O
U
R
B
U
S
I
N
E
S
S
'
,
 
'
L
o
s
 
d
a
t
o
s
 
d
e
 
s
u
 
n
e
g
o
c
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
Y
O
U
R
B
U
S
I
N
E
S
S
_
N
A
M
E
'
,
 
'
N
o
m
b
r
e
 
n
e
g
o
c
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
Y
O
U
R
B
U
S
I
N
E
S
S
_
V
A
T
N
O
'
,
 
'
V
A
T
 
n
u
m
b
e
r
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
Y
O
U
R
B
U
S
I
N
E
S
S
A
D
D
R
E
S
S
'
,
 
'
E
d
i
f
i
c
i
o
 
n
Ã
º
m
e
r
o
'
)
;

j
r
_
d
e
f
i
n
e
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
V
O
I
C
E
_
N
U
M
B
E
R
'
,
 
'
F
a
c
t
u
r
a
 
N
o
.
 
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
B
L
A
C
K
B
O
O
K
I
N
G
_
D
E
S
C
_
S
R
P
'
,
 
'
S
e
l
e
c
c
i
o
n
e
 
l
a
s
 
f
e
c
h
a
s
 
e
n
 
q
u
e
 
d
e
s
e
a
 
a
p
l
i
c
a
r
 
l
a
 
r
e
s
e
r
v
a
 
n
e
g
r
a
.
 
C
u
a
n
d
o
 
h
a
y
a
 
s
e
l
e
c
c
i
o
n
a
d
o
 
l
a
s
 
f
e
c
h
a
s
 
a
p
r
o
p
i
a
d
a
s
,
 
h
a
g
a
 
c
l
i
c
 
e
n
 
e
l
 
b
o
t
Ã
³
n
 
"
A
p
l
i
c
a
r
"
 
p
a
r
a
 
r
e
c
h
e
q
u
e
a
r
 
l
a
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
.
 
<
b
r
/
>
 

<
b
r
/
>
 

S
i
 
l
a
 
p
r
o
p
i
e
d
a
d
 
t
i
e
n
e
 
u
n
a
 
o
 
m
Ã
¡
s
 
r
e
s
e
r
v
a
s
 
p
a
r
a
 
e
l
 
p
e
r
i
o
d
o
 
d
e
s
e
a
d
o
,
 
e
n
t
o
n
c
e
s
 
u
s
t
e
d
 
n
o
 
s
e
r
Ã
¡
 
c
a
p
a
z
 
h
a
c
e
r
 
l
a
 
r
e
s
e
r
v
a
 
n
e
g
r
a
 
h
a
s
t
a
 
q
u
e
 
l
a
s
 
o
t
r
a
s
 
r
e
s
e
r
v
a
s
/
r
e
s
e
r
v
a
s
 
n
e
g
r
a
s
,
 
h
a
y
a
n
 
s
i
d
o
 
c
a
n
c
e
l
a
d
a
s
/
r
e
t
i
r
a
d
a
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
B
L
A
C
K
B
O
O
K
I
N
G
_
S
R
P
_
C
A
N
N
O
T
B
L
A
C
K
B
O
O
K
'
,
 
'
L
o
 
s
e
n
t
i
m
o
s
,
 
n
o
 
p
u
e
d
e
 
h
a
c
e
r
 
r
e
s
e
r
v
a
 
n
e
g
r
a
 
e
n
 
e
s
t
a
 
p
r
o
p
i
e
d
a
d
 
e
s
a
s
 
f
e
c
h
a
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
B
L
A
C
K
B
O
O
K
I
N
G
_
S
R
P
_
C
A
N
B
L
A
C
K
B
O
O
K
'
,
 
'
P
u
e
d
e
 
h
a
c
e
r
 
r
e
s
e
r
v
a
s
 
n
e
g
r
a
s
 
p
a
r
a
 
e
s
a
s
 
f
e
c
h
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
W
A
R
N
I
N
G
S
_
P
E
R
P
E
R
S
O
N
P
E
R
N
I
G
H
T
_
N
O
G
U
E
S
T
T
Y
P
E
S
'
,
 
'
S
u
 
p
r
o
p
i
e
d
a
d
 
e
s
t
Ã
¡
 
c
o
n
f
i
g
u
r
a
d
a
 
p
a
r
a
 
c
a
r
g
a
r
 
p
o
r
 
p
e
r
s
o
n
a
 
p
o
r
 
n
o
c
h
e
,
 
p
e
r
o
 
u
s
t
e
d
 
n
o
 
t
i
e
n
e
 
n
i
n
g
Ã
º
n
 
t
i
p
o
 
d
e
 
e
v
a
l
u
a
c
i
Ã
³
n
 
c
r
e
a
d
a
 
o
 
p
u
b
l
i
c
a
d
a
,
 
p
o
r
 
f
a
v
o
r
,
 
c
r
e
a
r
 
y
 
p
u
b
l
i
c
a
r
 
u
n
o
 
o
 
m
Ã
¡
s
 
t
i
p
o
s
 
d
e
 
h
u
Ã
©
s
p
e
d
e
s
.
 
'
)
;

j
r
_
d
e
f
i
n
e
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
W
A
R
N
I
N
G
S
_
T
A
R
I
F
F
S
_
N
O
T
A
R
I
F
F
S
'
,
 
'
N
o
 
t
i
e
n
e
 
n
i
n
g
u
n
a
 
t
a
r
i
f
a
 
c
o
n
f
i
g
u
r
a
d
a
 
t
o
d
a
v
Ã
­
a
,
 
u
s
t
e
d
 
n
o
 
p
o
d
r
Ã
¡
 
r
e
a
l
i
z
a
r
 
n
i
n
g
Ã
º
n
 
t
i
p
o
 
d
e
 
r
e
s
e
r
v
a
s
 
p
a
r
a
 
s
u
 
p
r
o
p
i
e
d
a
d
.
'
)
;

j
r
_
d
e
f
i
n
e
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
E
D
I
T
I
N
G
M
O
D
E
_
O
N
'
,
 
'
M
o
d
o
 
e
d
i
c
i
o
n
 
a
c
t
i
v
o
'
)
;

j
r
_
d
e
f
i
n
e
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
E
D
I
T
I
N
G
M
O
D
E
_
O
F
F
'
,
 
'
M
o
d
o
 
e
d
i
c
i
o
n
 
d
e
s
a
c
t
i
v
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
D
E
P
O
S
I
T
_
C
H
A
R
G
E
D
E
P
O
S
I
T
_
V
A
R
I
A
B
L
E
'
,
 
'
Â
¿
C
a
r
g
a
r
 
d
e
p
Ã
³
s
i
t
o
 
v
a
r
i
a
b
l
e
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
D
E
P
O
S
I
T
_
C
H
A
R
G
E
D
E
P
O
S
I
T
_
V
A
R
I
A
B
L
E
_
D
E
S
C
'
,
 
'
D
e
p
Ã
³
s
i
t
o
s
 
v
a
r
i
a
b
l
e
s
 
p
e
r
m
i
t
e
 
d
e
f
i
n
i
r
 
s
i
 
l
e
 
g
u
s
t
a
r
Ã
­
a
 
c
o
b
r
a
r
 
l
a
 
t
o
t
a
l
i
d
a
d
 
d
e
 
l
a
 
r
e
s
e
r
v
a
 
s
i
 
l
a
 
f
e
c
h
a
 
d
e
 
l
l
e
g
a
d
a
 
e
s
t
Ã
¡
 
a
 
N
 
d
Ã
­
a
s
 
d
e
 
"
h
o
y
"
.
 
E
s
t
a
b
l
e
z
c
a
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
e
n
 
S
Ã
­
 
p
a
r
a
 
a
c
t
i
v
a
r
 
l
a
 
f
u
n
c
i
Ã
³
n
,
 
e
 
i
n
t
r
o
d
u
z
c
a
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
d
Ã
­
a
s
 
m
Ã
¡
s
 
a
d
e
l
a
n
t
e
,
 
a
s
Ã
­
 
p
o
r
 
e
j
e
m
p
l
o
 
s
i
 
e
l
 
d
Ã
­
a
 
d
e
 
l
l
e
g
a
d
a
 
e
s
 
e
n
 
e
l
 
p
l
a
z
o
 
d
e
 
6
0
 
d
Ã
­
a
s
,
 
e
n
t
o
n
c
e
s
 
c
o
m
o
 
c
a
n
t
i
d
a
d
 
d
e
l
 
d
e
p
Ã
³
s
i
t
o
 
s
e
r
Ã
¡
 
c
a
r
g
a
d
o
 
e
l
 
i
m
p
o
r
t
e
 
t
o
t
a
l
,
 
d
e
 
l
o
 
c
o
n
t
r
a
r
i
o
 
l
a
 
c
a
n
t
i
d
a
d
 
s
e
 
b
a
s
a
r
Ã
¡
 
e
n
 
e
l
 
d
e
p
Ã
³
s
i
t
o
 
d
e
 
l
a
s
 
o
p
c
i
o
n
e
s
 
c
o
n
f
i
g
u
r
a
d
a
s
 
a
n
t
e
r
i
o
r
m
e
n
t
e
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
D
E
P
O
S
I
T
_
C
H
A
R
G
E
D
E
P
O
S
I
T
_
N
U
M
B
E
R
O
F
D
A
Y
S
'
,
 
'
E
l
 
n
Ã
º
m
e
r
o
 
d
e
 
d
Ã
­
a
s
,
 
e
n
 
e
l
 
q
u
e
 
e
l
 
i
m
p
o
r
t
e
 
t
o
t
a
l
 
s
e
r
Ã
¡
 
c
o
b
r
a
d
o
 
c
o
m
o
 
d
e
p
Ã
³
s
i
t
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
R
M
A
T
I
O
N
_
E
M
A
I
L
_
S
E
N
T
'
,
 
'
E
m
a
i
l
 
d
e
 
c
o
n
f
i
r
m
a
c
i
Ã
³
n
 
h
a
 
s
i
d
o
 
e
n
v
i
a
d
o
.
 
U
s
t
e
d
 
p
u
e
d
e
 
c
e
r
r
a
r
 
e
s
t
a
 
v
e
n
t
a
n
a
 
a
h
o
r
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
_
A
G
E
N
T
'
,
 
'
C
o
n
t
a
c
t
e
 
c
o
n
 
e
l
 
a
g
e
n
t
e
'
)
;

j
r
_
d
e
f
i
n
e
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
V
O
I
C
E
_
M
A
R
K
A
S
P
A
I
D
'
,
 
'
M
a
r
c
a
r
 
f
a
c
t
u
r
a
 
c
o
m
o
 
p
a
g
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
V
O
I
C
E
_
M
A
R
K
E
D
A
S
P
A
I
D
'
,
 
'
F
a
c
t
u
r
a
 
m
a
r
c
a
d
a
 
c
o
m
o
 
p
a
g
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
A
P
I
K
E
Y
_
R
E
M
A
K
E
'
,
 
'
H
a
c
e
r
 
n
u
e
v
a
 
A
P
I
 
K
e
y
'
)
;

j
r
_
d
e
f
i
n
e
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
S
I
N
G
L
E
P
R
O
P
E
R
T
Y
I
N
S
T
A
L
L
A
T
I
O
N
_
T
I
T
L
E
'
,
 
'
Â
¿
E
s
 
u
n
a
 
i
n
s
t
a
l
a
c
i
Ã
³
n
 
d
e
 
u
n
a
 
s
o
l
a
 
p
r
o
p
i
e
d
a
d
?
'
)
;

j
r
_
d
e
f
i
n
e
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
S
I
N
G
L
E
P
R
O
P
E
R
T
Y
I
N
S
T
A
L
L
A
T
I
O
N
_
D
E
S
C
'
,
 
'
S
i
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
e
s
t
Ã
¡
 
e
s
t
a
b
l
e
c
i
d
a
 
e
n
 
S
Ã
­
,
 
l
a
 
i
n
t
e
r
f
a
z
 
J
o
m
r
e
s
 
a
 
u
s
u
a
r
i
o
s
 
n
o
 
a
u
t
o
r
i
z
a
d
o
s
 
s
e
 
s
i
m
p
l
i
f
i
c
a
 
e
n
o
r
m
e
m
e
n
t
e
.
 
P
o
r
 
d
e
f
e
c
t
o
 
l
a
s
 
l
l
a
m
a
d
a
s
 
a
 
J
o
m
r
e
s
,
 
e
n
 
v
e
z
 
d
e
 
s
e
r
 
d
a
d
a
s
 
c
o
m
o
 
u
n
a
 
l
i
s
t
a
 
d
e
 
l
a
s
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
s
,
 
s
Ã
³
l
o
 
l
l
e
v
a
r
Ã
¡
 
a
l
 
c
l
i
e
n
t
e
 
a
 
l
a
 
c
e
n
t
r
a
l
 
d
e
 
r
e
s
e
r
v
a
s
 
p
a
r
a
 
l
a
 
p
r
i
m
e
r
a
 
p
r
o
p
i
e
d
a
d
 
e
n
 
e
l
 
s
i
s
t
e
m
a
.
 
A
d
m
i
n
i
s
t
r
a
d
o
r
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
t
a
m
p
o
c
o
 
p
o
d
r
Ã
¡
n
 
v
e
r
 
e
l
 
b
o
t
Ã
³
n
 
D
e
t
a
l
l
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
d
e
 
v
i
s
t
a
 
p
r
e
v
i
a
 
o
 
e
l
 
b
o
t
Ã
³
n
 
A
g
r
e
g
a
r
 
n
u
e
v
a
 
p
r
o
p
i
e
d
a
d
.
 
I
d
e
a
l
 
s
i
 
s
Ã
³
l
o
 
q
u
i
e
r
e
 
u
n
a
 
l
i
s
t
a
 
d
e
 
b
i
e
n
e
s
 
y
 
t
e
n
e
r
 
r
e
s
e
r
v
a
s
 
p
a
r
a
 
e
l
l
a
s
.
<
b
r
/
>
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
B
A
L
A
N
C
E
_
P
A
Y
M
E
N
T
'
,
 
'
B
a
l
a
n
c
e
 
d
e
 
p
a
g
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
W
A
R
N
I
N
G
S
_
G
L
O
B
A
L
E
D
I
T
I
N
G
M
O
D
E
'
,
 
'
T
e
n
g
a
 
e
n
 
c
u
e
n
t
a
 
u
s
t
e
d
 
e
s
t
Ã
¡
 
u
t
i
l
i
z
a
n
d
o
 
e
l
 
m
o
d
o
 
d
e
 
e
d
i
c
i
Ã
³
n
 
c
o
n
 
e
l
 
m
o
d
o
 
g
l
o
b
a
l
 
d
e
 
e
d
i
c
i
Ã
³
n
 
h
a
b
i
l
i
t
a
d
o
.
 
E
s
t
o
 
e
s
t
Ã
¡
 
b
i
e
n
 
s
i
 
u
s
t
e
d
 
s
a
b
e
 
l
o
 
q
u
e
 
s
i
g
n
i
f
i
c
a
 
e
l
 
m
o
d
o
 
d
e
 
e
d
i
c
i
Ã
³
n
 
g
l
o
b
a
l
.
 
S
i
 
n
o
 
e
s
t
Ã
¡
 
s
e
g
u
r
o
 
s
i
 
d
e
b
e
 
u
t
i
l
i
z
a
r
 
J
o
m
r
e
s
 
d
e
 
e
s
t
e
 
m
o
d
o
,
 
p
o
r
 
f
a
v
o
r
,
 
c
o
n
s
u
l
t
e
 
<
a
 
h
r
e
f
=
"
h
t
t
p
:
/
/
w
w
w
.
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
/
m
a
n
u
a
l
/
d
e
v
e
l
o
p
e
r
s
-
g
u
i
d
e
/
5
3
-
c
u
s
t
o
m
i
s
i
n
g
-
j
o
m
r
e
s
/
e
d
i
t
i
n
g
-
l
a
b
e
l
s
-
l
a
n
g
u
a
g
e
s
/
2
6
8
-
e
d
i
t
i
n
g
-
m
o
d
e
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
e
l
 
m
o
d
o
 
d
e
 
e
d
i
c
i
Ã
³
n
 
d
e
 
p
Ã
¡
g
i
n
a
 
d
e
l
 
m
a
n
u
a
l
<
/
a
>
 
p
a
r
a
 
o
b
t
e
n
e
r
 
m
Ã
¡
s
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
s
o
b
r
e
 
e
s
t
e
 
t
e
m
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
S
U
P
P
O
R
T
K
E
Y
'
,
 
'
C
l
a
v
e
 
d
e
 
S
o
p
o
r
t
e
'
)
;

j
r
_
d
e
f
i
n
e
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
S
U
P
P
O
R
T
K
E
Y
_
D
E
S
C
'
,
 
'
.
S
u
 
n
Ã
º
m
e
r
o
 
c
l
a
v
e
 
d
e
 
s
o
p
o
r
t
e
 
(
t
a
m
b
i
Ã
©
n
 
c
o
n
o
c
i
d
o
 
c
o
m
o
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
l
i
c
e
n
c
i
a
)
.
 
U
s
t
e
d
 
n
e
c
e
s
i
t
a
r
Ã
¡
 
u
n
a
 
l
i
c
e
n
c
i
a
 
a
c
t
u
a
l
i
z
a
d
a
 
p
a
r
a
 
p
o
d
e
r
 
d
e
s
c
a
r
g
a
r
 
l
a
s
 
a
c
t
u
a
l
i
z
a
c
i
o
n
e
s
 
y
 
c
o
m
p
l
e
m
e
n
t
o
s
 
p
a
r
a
 
J
o
m
r
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
P
E
R
S
O
N
A
L
_
D
I
S
C
O
U
N
T
'
,
 
'
D
e
s
c
u
e
n
t
o
 
p
e
r
s
o
n
a
l
'
)
;

j
r
_
d
e
f
i
n
e
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
A
D
M
I
N
_
R
E
G
I
S
T
R
A
T
I
O
N
_
L
I
M
I
T
P
R
O
P
E
R
T
Y
_
Y
E
S
N
O
'
,
 
'
Â
¿
R
e
g
i
s
t
r
a
r
 
p
r
o
p
i
e
d
a
d
e
s
 
l
i
m
i
t
a
d
a
s
 
a
 
u
n
 
s
o
l
o
 
p
a
Ã
­
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
A
D
M
I
N
_
R
E
G
I
S
T
R
A
T
I
O
N
_
L
I
M
I
T
P
R
O
P
E
R
T
Y
_
Y
E
S
N
O
_
D
E
S
C
'
,
 
'
P
u
e
d
e
 
a
s
e
g
u
r
a
r
s
e
 
q
u
e
 
l
o
s
 
r
e
g
i
s
t
r
o
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
s
e
 
l
i
m
i
t
a
n
 
a
 
u
n
 
s
o
l
o
 
p
a
Ã
­
s
 
m
e
d
i
a
n
t
e
 
e
l
 
e
s
t
a
b
l
e
c
i
m
i
e
n
t
o
 
d
e
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
e
n
 
S
Ã
­
 
y
 
e
s
t
a
b
l
e
c
e
r
 
e
l
 
p
a
Ã
­
s
 
e
n
 
l
a
 
s
i
g
u
i
e
n
t
e
 
o
p
c
i
Ã
³
n
.
'
)
;

j
r
_
d
e
f
i
n
e
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
A
D
M
I
N
_
R
E
G
I
S
T
R
A
T
I
O
N
_
L
I
M
I
T
P
R
O
P
E
R
T
Y
_
C
O
U
N
T
R
Y
'
,
 
'
L
a
s
 
p
r
o
p
i
e
d
a
d
e
s
 
e
s
t
Ã
¡
n
 
l
o
c
a
l
i
z
a
d
a
s
 
e
n
 
e
s
t
e
 
p
a
Ã
­
s
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
J
Q
U
E
R
Y
T
H
E
M
E
'
,
 
'
T
e
m
a
 
J
q
u
e
r
y
'
)
;

j
r
_
d
e
f
i
n
e
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
J
Q
U
E
R
Y
T
H
E
M
E
_
D
E
S
C
'
,
 
'
E
l
i
g
e
 
u
n
 
t
e
m
a
 
j
Q
u
e
r
y
 
p
a
r
a
 
u
s
a
r
 
p
a
r
a
 
l
a
s
 
p
e
s
t
a
Ã
±
a
s
 
d
e
 
l
o
s
 
d
e
t
a
l
l
e
s
 
d
e
 
p
r
o
p
i
e
d
a
d
.
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
N
O
T
O
U
B
L
I
S
H
E
D
'
,
 
'
L
o
 
s
e
n
t
i
m
o
s
,
 
p
e
r
o
 
q
u
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
n
o
 
e
s
t
Ã
¡
 
d
i
s
p
o
n
i
b
l
e
 
a
c
t
u
a
l
m
e
n
t
e
.
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
'
,
 
'
C
o
m
e
n
t
a
r
i
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
T
I
T
L
E
'
,
 
'
T
Ã
­
t
u
l
o
 
c
o
m
e
n
t
a
r
i
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
D
A
T
E
'
,
 
'
P
u
b
l
i
c
a
d
o
 
e
n
 
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
N
O
R
E
V
I
E
W
S
'
,
 
'
T
o
d
a
v
Ã
­
a
 
n
o
 
h
a
y
 
c
o
m
e
n
t
a
r
i
o
s
 
p
a
r
a
 
e
s
t
a
 
p
r
o
p
i
e
d
a
d
.
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
N
O
R
E
V
I
E
W
S
_
B
E
T
H
E
F
I
R
S
T
'
,
 
'
Â
¿
L
e
 
g
u
s
t
a
r
Ã
­
a
 
s
e
r
 
e
l
 
p
r
i
m
e
r
o
 
e
n
 
h
a
c
e
r
 
u
n
 
c
o
m
e
n
t
a
r
i
o
 
s
o
b
r
e
 
e
s
t
a
 
p
r
o
p
i
e
d
a
d
?
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
I
A
G
R
E
E
'
,
 
'
E
s
t
o
y
 
d
e
 
a
c
u
e
r
d
o
 
c
o
n
 
e
s
t
e
 
c
o
m
e
n
t
a
r
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
I
D
I
S
A
G
R
E
E
'
,
 
'
N
o
 
e
s
t
o
y
 
d
e
 
a
c
u
e
r
d
o
 
c
o
n
 
e
s
t
e
 
c
o
m
e
n
t
a
r
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
V
E
R
A
G
E
_
R
A
T
I
N
G
'
,
 
'
V
a
l
o
r
a
c
i
Ã
³
n
 
m
e
d
i
a
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
T
O
T
A
L
_
V
O
T
E
S
'
,
 
'
V
o
t
o
s
 
t
o
t
a
l
e
s
:
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
D
_
R
E
V
I
E
W
'
,
 
'
A
Ã
±
a
d
i
r
 
u
n
 
n
u
e
v
o
 
c
o
m
e
n
t
a
r
i
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
D
_
R
E
V
I
E
W
_
N
O
T
L
O
G
G
E
D
I
N
'
,
 
'
N
e
c
e
s
i
t
a
 
e
s
t
a
r
 
r
e
g
i
s
t
r
a
d
o
 
p
a
r
a
 
e
n
v
i
a
r
 
u
n
 
c
o
m
e
n
t
a
r
i
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
R
E
V
I
E
W
B
O
D
Y
'
,
 
'
D
i
g
a
n
o
s
 
q
u
e
 
o
p
i
n
a
 
d
e
 
e
s
t
e
 
e
s
t
a
b
l
e
c
i
m
i
e
n
t
o
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
R
E
V
I
E
W
B
O
D
Y
_
S
A
I
D
'
,
 
'
E
s
t
e
 
c
l
i
e
n
t
e
 
n
o
s
 
d
i
j
o
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
P
R
O
S
'
,
 
'
P
r
o
s
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
C
O
N
S
'
,
 
'
C
o
n
t
r
a
s
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
S
U
B
M
I
T
T
E
D
D
A
T
E
'
,
 
'
E
n
v
i
a
d
o
 
e
l
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
L
R
E
A
D
Y
R
E
V
I
E
W
E
D
'
,
 
'
U
s
t
e
d
 
y
a
 
h
a
 
r
e
a
l
i
z
a
d
o
 
u
n
 
c
o
m
e
n
t
a
r
i
o
 
s
o
b
r
e
 
e
s
t
a
 
p
r
o
p
i
e
d
a
d
,
 
n
o
 
p
u
e
d
e
 
p
u
b
l
i
c
a
r
 
o
t
r
o
 
c
o
m
e
n
t
a
r
i
o
 
s
o
b
r
e
 
e
l
l
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
C
A
N
N
O
T
R
E
V
I
E
W
'
,
 
'
L
o
 
s
e
n
t
i
m
o
s
,
 
p
e
r
o
 
n
o
 
s
e
 
p
e
r
m
i
t
e
 
p
u
b
l
i
c
a
r
 
c
o
m
e
n
t
a
r
i
o
s
 
e
n
 
e
s
t
e
 
s
i
t
i
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
C
L
I
C
K
T
O
S
H
O
W
'
,
 
'
C
l
i
c
k
 
p
a
r
a
 
m
o
s
t
r
a
r
 
c
o
m
e
n
t
a
r
i
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
N
U
M
B
E
R
_
A
G
R
E
E
_
W
I
T
H
R
E
V
I
E
W
'
,
 
'
 
u
s
u
a
r
i
o
s
 
d
e
 
a
c
u
e
r
d
o
 
c
o
n
 
e
s
t
e
 
c
o
m
e
n
t
a
r
i
o
.
 
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
_
W
I
T
H
R
E
V
I
E
W
'
,
 
'
 
u
s
u
a
r
i
o
s
 
e
n
 
d
e
s
a
c
u
e
r
d
o
 
c
o
n
 
e
s
t
e
 
c
o
m
e
n
t
a
r
i
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
N
U
M
B
E
R
_
A
G
R
E
E
_
W
I
T
H
R
E
V
I
E
W
_
S
I
N
G
U
L
A
R
'
,
 
'
 
u
s
u
a
r
i
o
 
d
e
 
a
c
u
e
r
d
o
 
c
o
n
 
e
s
t
e
 
c
o
m
e
n
t
a
r
i
o
.
 
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
_
W
I
T
H
R
E
V
I
E
W
_
S
I
N
G
U
L
A
R
'
,
 
'
u
s
u
a
r
i
o
 
e
n
 
d
e
s
a
c
u
e
r
d
o
 
c
o
n
 
e
s
t
e
 
c
o
m
e
n
t
a
r
i
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
T
H
A
N
K
S
_
F
O
R
_
C
O
N
F
I
R
M
'
,
 
'
G
r
a
c
i
a
s
 
p
o
r
 
c
o
m
p
a
r
t
i
r
 
s
u
 
o
p
i
n
i
Ã
³
n
 
d
e
 
e
s
t
e
 
c
o
m
e
n
t
a
r
i
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
L
R
E
A
D
Y
_
C
O
N
F
I
R
M
E
D
'
,
 
'
G
r
a
c
i
a
s
,
 
p
e
r
o
 
y
a
 
h
a
 
c
o
m
p
a
r
t
i
d
o
 
l
a
 
o
p
i
n
i
Ã
³
n
 
d
e
 
e
s
t
e
 
c
o
m
e
n
t
a
r
i
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
C
O
M
P
L
E
T
E
A
L
L
F
I
E
L
D
S
'
,
 
'
P
o
r
 
f
a
v
o
r
 
a
s
e
g
Ã
º
r
e
s
e
 
d
e
 
q
u
e
 
t
o
d
o
s
 
l
o
s
 
c
a
m
p
o
s
 
e
s
t
Ã
¡
n
 
c
o
r
r
e
c
t
a
m
e
n
t
e
 
c
u
m
p
l
i
m
e
n
t
a
d
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
T
I
T
L
E
'
,
 
'
P
o
r
 
f
a
v
o
r
,
 
r
e
s
u
m
a
 
s
u
 
c
o
m
e
n
t
a
r
i
o
 
i
n
t
r
o
d
u
c
i
e
n
d
o
 
u
n
 
t
Ã
­
t
u
l
o
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
P
o
r
 
f
a
v
o
r
,
 
i
n
t
r
o
d
u
z
c
a
 
u
n
 
c
o
m
e
n
t
a
r
i
o
 
m
Ã
¡
s
 
c
o
m
p
l
e
t
o
 
e
n
 
e
l
 
c
u
a
d
r
o
 
d
e
 
d
e
s
c
r
i
p
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
P
R
O
S
'
,
 
'
P
o
r
 
f
a
v
o
r
,
 
i
n
t
r
o
d
u
z
c
a
 
l
a
s
 
e
x
p
e
r
i
e
n
c
i
a
s
 
p
o
s
i
t
i
v
a
s
 
c
o
m
o
 
c
l
i
e
n
t
e
 
d
e
 
e
s
t
e
 
e
s
t
a
b
l
e
c
i
m
i
e
n
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
C
O
N
S
'
,
 
'
P
o
r
 
f
a
v
o
r
,
 
i
n
t
r
o
d
u
z
c
a
 
c
u
a
l
q
u
i
e
r
 
e
x
p
e
r
i
e
n
c
i
a
 
n
e
g
a
t
i
v
a
 
q
u
e
 
h
a
y
a
 
e
n
c
o
n
t
r
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
R
A
T
I
N
G
_
1
'
,
 
'
P
o
r
 
f
a
v
o
r
,
 
c
a
l
i
f
i
q
u
e
 
l
a
 
a
m
a
b
i
l
i
d
a
d
 
q
u
e
 
r
e
c
i
b
i
Ã
³
 
p
o
r
 
p
a
r
t
e
 
d
e
l
 
p
e
r
s
o
n
a
l
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
R
A
T
I
N
G
_
2
'
,
 
'
P
o
r
 
f
a
v
o
r
,
 
c
u
a
l
 
e
s
 
s
u
 
v
a
l
o
r
a
c
i
Ã
³
n
 
d
e
l
 
e
s
t
a
b
l
e
c
i
m
i
e
n
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
R
A
T
I
N
G
_
3
'
,
 
'
P
o
r
 
f
a
v
o
r
,
 
c
u
a
l
 
e
s
 
s
u
 
o
p
i
n
i
Ã
³
n
 
s
o
b
r
e
 
l
a
 
l
i
m
p
i
e
z
a
 
d
e
l
 
e
s
t
a
b
l
e
c
i
m
i
e
n
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
R
A
T
I
N
G
_
4
'
,
 
'
P
o
r
 
f
a
v
o
r
,
 
c
a
l
i
f
i
q
u
e
 
e
l
 
a
l
o
j
a
m
i
e
n
t
o
.
 
E
r
a
 
c
Ã
³
m
o
d
o
 
o
 
i
n
c
Ã
³
m
o
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
R
A
T
I
N
G
_
5
'
,
 
'
P
o
r
 
f
a
v
o
r
,
 
p
r
o
p
o
r
c
i
o
n
e
 
s
u
 
o
p
i
n
i
Ã
³
n
 
s
o
b
r
e
 
l
a
 
r
e
l
a
c
i
Ã
³
n
 
C
a
l
i
d
a
d
-
P
r
e
c
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
R
A
T
I
N
G
_
6
'
,
 
'
P
o
r
 
f
a
v
o
r
,
 
v
a
l
o
r
e
 
l
o
s
 
s
e
r
v
i
c
i
o
s
 
o
f
r
e
c
i
d
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
S
U
M
M
A
R
Y
'
,
 
'
R
e
v
i
s
i
Ã
³
n
 
d
e
l
 
c
o
m
e
n
t
a
r
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
M
O
R
E
D
E
T
A
I
L
'
,
 
'
S
u
 
e
x
p
e
r
i
e
n
c
i
a
 
e
n
 
m
a
y
o
r
 
d
e
t
a
l
l
e
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
T
H
A
N
K
S
_
F
O
R
_
R
E
V
I
E
W
'
,
 
'
G
r
a
c
i
a
s
 
p
o
r
 
e
n
v
i
a
r
n
o
s
 
s
u
 
o
p
i
n
i
Ã
³
n
.
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
T
H
A
N
K
S
_
F
O
R
_
R
E
V
I
E
W
_
M
O
D
E
R
A
T
E
D
'
,
 
'
G
r
a
c
i
a
s
 
p
o
r
 
e
n
v
i
a
r
n
o
s
 
s
u
 
o
p
i
n
i
Ã
³
n
.
 
S
e
r
Ã
¡
 
p
u
b
l
i
c
a
d
a
 
e
n
 
b
r
e
v
e
 
p
o
r
 
u
n
o
 
d
e
 
n
u
e
s
t
r
o
s
 
m
o
d
e
r
a
d
o
r
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
M
I
N
_
C
O
N
T
R
O
L
'
,
 
'
Â
¿
U
t
i
l
i
z
a
r
 
l
a
 
f
u
n
c
i
Ã
³
n
 
d
e
 
c
o
m
e
n
t
a
r
i
o
s
 
d
e
 
J
o
m
r
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
M
I
N
_
A
U
T
O
P
U
B
L
I
S
H
'
,
 
'
Â
¿
P
u
b
l
i
c
a
r
 
a
u
t
o
m
Ã
¡
t
i
c
a
m
e
n
t
e
 
l
o
s
 
c
o
m
e
n
t
a
r
i
o
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
M
I
N
_
A
U
T
O
P
U
B
L
I
S
H
_
D
E
S
C
'
,
 
'
S
i
 
s
e
 
e
s
t
a
b
l
e
c
e
 
N
o
 
t
e
n
d
r
Ã
¡
 
q
u
e
 
p
u
b
l
i
c
a
r
 
m
a
n
u
a
l
m
e
n
t
e
 
l
o
s
 
c
o
m
e
n
t
a
r
i
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
M
I
N
_
T
E
S
T
M
O
D
E
'
,
 
'
Â
¿
A
j
u
s
t
a
r
 
e
l
 
m
o
d
o
 
t
e
s
t
 
e
n
 
l
o
s
 
c
o
m
e
n
t
a
r
i
o
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
M
I
N
_
T
E
S
T
M
O
D
E
_
D
E
S
C
'
,
 
'
N
o
r
m
a
l
m
e
n
t
e
 
l
o
s
 
A
d
m
i
n
i
s
t
r
a
d
o
r
e
s
 
d
e
 
P
r
o
p
i
e
d
a
d
 
n
o
 
p
u
e
d
e
n
 
h
a
c
e
r
 
c
o
m
e
n
t
a
r
i
o
s
.
 
N
a
t
u
r
a
l
m
e
n
t
e
 
e
s
t
o
 
n
o
 
e
s
 
l
o
 
i
d
e
a
l
 
e
n
 
u
n
 
s
i
t
i
o
 
e
n
 
f
u
n
c
i
o
n
a
m
i
e
n
t
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
M
I
N
_
P
R
O
P
E
R
T
Y
L
I
S
T
I
N
F
O
'
,
 
'
E
s
t
a
 
e
s
 
u
n
a
 
l
i
s
t
a
 
d
e
 
t
o
d
a
s
 
l
a
s
 
p
r
o
p
i
e
d
a
d
e
s
.
 
P
a
r
a
 
v
e
r
 
l
o
s
 
c
o
m
e
n
t
a
r
i
o
s
 
d
e
 
u
n
a
 
p
r
o
p
i
e
d
a
d
 
p
u
l
s
e
 
e
n
 
e
l
l
a
.
 
D
e
s
d
e
 
a
q
u
Ã
­
 
p
o
d
r
Ã
¡
 
p
u
b
l
i
c
a
r
 
o
 
b
o
r
r
a
r
 
c
o
m
e
n
t
a
r
i
o
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
M
I
N
_
N
U
M
B
E
R
U
N
P
U
B
L
I
S
H
E
D
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
c
o
m
e
n
t
a
r
i
o
s
 
n
o
 
p
u
b
l
i
c
a
d
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
M
I
N
_
N
U
M
B
E
R
T
O
T
A
L
'
,
 
'
T
o
t
a
l
 
c
o
m
e
n
t
a
r
i
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
M
I
N
_
P
U
B
L
I
S
H
R
E
V
I
E
W
'
,
 
'
P
u
b
l
i
c
a
r
/
D
e
s
p
u
b
l
i
c
a
r
 
c
o
m
e
n
t
a
r
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
M
I
N
_
D
E
L
E
T
E
R
E
V
E
I
E
W
'
,
 
'
B
o
r
r
a
r
 
c
o
m
e
n
t
a
r
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
R
E
P
O
R
T
_
R
E
V
I
E
W
'
,
 
'
I
n
f
o
r
m
e
 
d
e
 
c
o
m
e
n
t
a
r
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
R
E
P
O
R
T
_
R
E
V
I
E
W
_
T
I
T
L
E
'
,
 
'
R
e
v
i
s
i
Ã
³
n
 
d
e
 
l
o
s
 
c
o
m
e
n
t
a
r
i
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
R
E
P
O
R
T
_
R
E
V
I
E
W
_
E
R
R
O
R
'
,
 
'
P
o
r
 
f
a
v
o
r
,
 
i
n
t
r
o
d
u
z
c
a
 
s
u
 
i
n
f
o
r
m
e
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
R
E
P
O
R
T
_
R
E
V
I
E
W
_
M
O
R
E
D
E
T
A
I
L
'
,
 
'
Â
¿
V
e
 
a
l
g
o
 
e
n
 
e
s
t
e
 
c
o
m
e
n
t
a
r
i
o
 
q
u
e
 
s
e
a
 
c
u
e
s
t
i
o
n
a
b
l
e
 
o
 
i
n
e
x
a
c
t
o
?
 
I
n
f
o
r
m
e
n
o
s
 
y
 
v
e
r
e
m
o
s
 
q
u
e
 
p
o
d
e
m
o
s
 
h
a
c
e
r
 
p
o
r
 
u
s
t
e
d
.
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
S
U
B
M
I
T
'
,
 
'
E
n
v
i
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
R
E
P
O
R
T
_
C
R
E
A
T
E
D
_
B
Y
'
,
 
'
I
n
f
o
r
m
e
 
c
r
e
a
d
o
 
p
o
r
 
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
R
E
P
O
R
T
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
'
L
o
s
 
i
n
f
o
r
m
e
s
 
s
o
n
 
p
u
b
l
i
c
a
d
o
s
 
p
o
r
 
l
o
s
 
u
s
u
a
r
i
o
s
 
q
u
e
 
p
u
e
d
e
n
 
e
s
t
a
r
 
e
n
 
d
e
s
a
c
u
e
r
d
o
 
c
o
n
 
e
l
 
c
o
n
t
e
n
i
d
o
 
d
e
 
u
n
 
c
o
m
e
n
t
a
r
i
o
.
 
L
a
 
Ã
º
n
i
c
a
 
m
a
n
e
r
a
 
d
e
 
e
l
i
m
i
n
a
r
 
u
n
 
i
n
f
o
r
m
e
 
e
s
 
e
l
i
m
i
n
a
r
 
l
a
 
r
e
v
i
s
i
Ã
³
n
.
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
R
A
T
I
N
G
'
,
 
'
R
a
t
i
n
g
s
 
(
1
 
=
 
e
s
c
a
s
o
 
1
0
 
=
 
e
x
c
e
l
e
n
t
e
)
 
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
R
A
T
I
N
G
_
1
'
,
 
'
H
o
s
p
i
t
a
l
i
d
a
d
 
 
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
R
A
T
I
N
G
_
2
'
,
 
'
L
o
c
a
l
i
z
a
c
i
Ã
³
n
 
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
R
A
T
I
N
G
_
3
'
,
 
'
L
i
m
p
i
e
z
a
 
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
R
A
T
I
N
G
_
4
'
,
 
'
A
l
o
j
a
m
i
e
n
t
o
 
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
R
A
T
I
N
G
_
5
'
,
 
'
R
e
l
a
c
i
Ã
³
n
 
c
a
l
i
d
a
d
-
p
r
e
c
i
o
 
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
R
A
T
I
N
G
_
6
'
,
 
'
S
e
r
v
i
c
i
o
s
 
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
R
E
V
I
E
W
E
D
_
B
Y
'
,
 
'
C
o
m
e
n
t
a
d
o
 
p
o
r
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
C
L
I
C
K
T
O
H
I
D
E
'
,
 
'
O
c
u
l
t
a
r
 
c
o
m
e
n
t
a
r
i
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
S
H
O
W
B
O
O
K
I
N
G
F
O
R
M
I
N
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
'
,
 
'
Â
¿
M
o
s
t
r
a
r
 
F
o
r
m
u
l
a
r
i
o
 
d
e
 
r
e
s
e
r
v
a
 
e
n
 
l
a
 
p
Ã
¡
g
i
n
a
 
d
e
 
d
e
t
a
l
l
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
S
H
O
W
B
O
O
K
I
N
G
F
O
R
M
I
N
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
_
D
E
S
C
'
,
 
'
P
o
n
g
a
 
e
s
t
o
 
e
n
 
S
Ã
­
 
p
a
r
a
 
m
o
s
t
r
a
r
 
e
l
 
f
o
r
m
u
l
a
r
i
o
 
d
e
 
r
e
s
e
r
v
a
 
e
n
 
l
a
 
p
Ã
¡
g
i
n
a
 
d
e
 
d
e
t
a
l
l
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
.
 
S
i
 
s
e
 
e
s
t
a
b
l
e
c
e
 
e
n
 
N
o
,
 
a
p
a
r
e
c
e
r
Ã
¡
 
u
n
 
e
n
l
a
c
e
 
e
n
 
l
a
 
p
Ã
¡
g
i
n
a
 
d
e
 
d
e
t
a
l
l
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
a
p
u
n
t
a
n
d
o
 
a
l
 
f
o
r
m
u
l
a
r
i
o
 
d
e
 
r
e
s
e
r
v
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
T
A
X
I
N
C
L
U
S
I
V
E
'
,
 
'
Â
¿
L
o
s
 
p
r
e
c
i
o
s
 
i
n
c
l
u
y
e
n
 
i
m
p
u
e
s
t
o
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
T
A
X
I
N
C
L
U
S
I
V
E
_
D
E
S
C
'
,
 
'
Â
¿
L
o
s
 
p
r
e
c
i
o
s
 
s
o
n
 
i
m
p
u
e
s
t
o
s
 
i
n
c
l
u
i
d
o
s
?
 
S
i
 
s
u
s
 
p
r
e
c
i
o
s
 
i
n
c
l
u
y
e
n
 
i
m
p
u
e
s
t
o
s
 
s
e
l
e
c
c
i
o
n
e
 
S
i
.
 
S
i
 
n
o
 
e
s
t
Ã
¡
n
 
i
n
c
l
u
i
d
o
s
 
s
e
l
e
c
c
i
o
n
e
 
N
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
A
X
_
E
X
T
R
A
S
'
,
 
'
I
V
A
 
e
x
t
r
a
s
:
'
)
;

j
r
_
d
e
f
i
n
e
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
M
I
C
R
O
M
A
N
A
G
E
_
P
I
C
K
E
R
_
D
A
Y
S
O
F
W
E
E
K
'
,
 
'
E
l
 
c
a
m
p
o
 
d
e
 
d
Ã
­
a
 
d
e
 
l
a
 
s
e
m
a
n
a
 
l
e
 
p
e
r
m
i
t
e
 
e
s
t
a
b
l
e
c
e
r
 
u
n
a
 
t
a
s
a
 
p
a
r
a
 
u
n
 
d
e
t
e
r
m
i
n
a
d
o
 
d
Ã
­
a
 
d
e
 
l
a
 
s
e
m
a
n
a
,
 
u
n
a
 
v
e
z
 
q
u
e
 
h
a
g
a
 
c
l
i
c
 
e
n
 
e
l
 
b
o
t
Ã
³
n
 
d
e
 
d
Ã
­
a
 
d
e
 
l
a
 
s
e
m
a
n
a
 
t
o
d
o
s
 
l
o
s
 
d
Ã
­
a
s
 
d
e
 
l
a
 
s
e
m
a
n
a
 
s
e
 
a
j
u
s
t
a
r
Ã
¡
n
 
a
 
e
s
a
 
t
a
s
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
M
I
C
R
O
M
A
N
A
G
E
_
P
I
C
K
E
R
_
D
A
T
E
R
A
N
G
E
S
'
,
 
'
L
o
s
 
s
e
l
e
c
t
o
r
e
s
 
d
e
 
f
e
c
h
a
 
y
 
l
a
 
t
a
r
i
f
a
 
d
e
 
e
n
t
r
a
d
a
 
l
e
 
p
e
r
m
i
t
e
n
 
e
s
t
a
b
l
e
c
e
r
 
u
n
 
p
r
e
c
i
o
 
p
a
r
a
 
u
n
 
i
n
t
e
r
v
a
l
o
 
d
e
 
t
i
e
m
p
o
 
d
a
d
o
.
 
E
l
i
j
a
 
u
n
a
 
f
e
c
h
a
 
d
e
 
i
n
i
c
i
o
 
y
 
f
i
n
,
 
i
n
t
r
o
d
u
z
c
a
 
u
n
 
p
r
e
c
i
o
,
 
y
 
h
a
g
a
 
c
l
i
c
 
e
n
 
e
l
 
b
o
t
Ã
³
n
 
d
e
 
f
i
j
a
c
i
Ã
³
n
 
d
e
 
t
a
r
i
f
a
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
M
I
C
R
O
M
A
N
A
G
E
_
P
I
C
K
E
R
_
D
A
T
E
R
A
N
G
E
S
_
S
T
A
R
T
'
,
 
'
I
n
i
c
i
o
 
i
n
t
e
r
v
a
l
o
'
)
;

j
r
_
d
e
f
i
n
e
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
M
I
C
R
O
M
A
N
A
G
E
_
P
I
C
K
E
R
_
D
A
T
E
R
A
N
G
E
S
_
E
N
D
'
,
 
'
F
i
n
 
i
n
t
e
r
v
a
l
o
'
)
;

j
r
_
d
e
f
i
n
e
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
M
I
C
R
O
M
A
N
A
G
E
_
P
I
C
K
E
R
_
D
A
T
E
R
A
N
G
E
S
_
R
A
T
E
'
,
 
'
T
a
r
i
f
a
'
)
;

j
r
_
d
e
f
i
n
e
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
M
I
C
R
O
M
A
N
A
G
E
_
P
I
C
K
E
R
_
D
A
T
E
R
A
N
G
E
S
_
S
E
T
'
,
 
'
F
i
j
a
r
 
l
a
s
 
t
a
r
i
f
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
P
A
R
T
N
E
R
S
_
T
I
T
L
E
'
,
 
'
S
o
c
i
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
A
L
E
N
D
A
R
_
R
T
L
'
,
 
'
f
a
l
s
o
'
)
;

j
r
_
d
e
f
i
n
e
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
R
O
O
M
A
L
L
O
C
A
T
I
O
N
S
_
R
O
O
M
'
,
 
'
H
a
b
i
t
a
c
i
Ã
³
n
 
'
)
;

j
r
_
d
e
f
i
n
e
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
R
O
O
M
A
L
L
O
C
A
T
I
O
N
S
_
G
U
E
S
T
S
'
,
 
'
h
u
Ã
©
s
p
e
d
(
e
s
)
.
 
'
)
;

j
r
_
d
e
f
i
n
e
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
R
O
O
M
A
L
L
O
C
A
T
I
O
N
S
_
I
N
F
O
R
M
A
T
I
O
N
'
,
 
'
H
e
m
o
s
 
a
s
i
g
n
a
d
o
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
h
u
Ã
©
s
p
e
d
e
s
 
a
 
s
u
s
 
h
a
b
i
t
a
c
i
o
n
e
s
.
 
S
i
 
d
e
s
e
a
 
c
a
m
b
i
a
r
 
e
s
t
a
 
a
s
i
g
n
a
c
i
Ã
³
n
,
 
d
e
b
e
r
Ã
¡
 
c
o
n
t
a
c
t
a
r
 
c
o
n
 
e
l
 
h
o
t
e
l
 
d
e
s
p
u
Ã
©
s
 
d
e
 
h
a
c
e
r
 
l
a
 
r
e
s
e
r
v
a
.
 
S
e
 
p
u
e
d
e
n
 
a
p
l
i
c
a
r
 
c
a
r
g
o
s
 
e
x
t
r
a
 
s
i
 
c
a
m
b
i
a
 
d
e
 
l
a
s
 
a
s
i
g
n
a
c
i
o
n
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
S
A
N
I
T
Y
_
C
H
E
C
K
_
N
O
T
_
P
U
B
L
I
S
H
E
D
'
,
 
'
T
e
n
g
a
 
e
n
 
c
u
e
n
t
a
 
q
u
e
 
s
u
 
p
r
o
p
i
e
d
a
d
 
n
o
 
s
e
 
h
a
 
p
u
b
l
i
c
a
d
o
 
t
o
d
a
v
Ã
­
a
,
 
s
Ã
³
l
o
 
s
e
 
p
u
e
d
e
 
v
e
r
 
l
a
 
p
r
o
p
i
e
d
a
d
,
 
l
o
s
 
v
i
s
i
t
a
n
t
e
s
 
d
e
l
 
s
i
t
i
o
 
n
o
 
l
a
 
v
e
r
Ã
¡
n
'
)
;

/
/
 
4
.
5
.
5

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
L
I
S
T
_
F
I
L
T
E
R
S
_
D
E
F
A
U
L
T
'
,
 
'
O
r
d
e
n
 
d
e
 
r
e
s
u
l
t
a
d
o
s
 
p
r
e
d
e
t
e
r
m
i
n
a
d
o
 
p
a
r
a
 
b
Ã
º
s
q
u
e
d
a
 
p
o
r
 
d
e
f
e
c
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
L
I
S
T
_
F
I
L
T
E
R
S
_
D
E
F
A
U
L
T
_
D
E
S
C
'
,
 
'
C
a
m
b
i
a
r
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
p
a
r
a
 
c
a
m
b
i
a
r
 
l
a
 
o
r
d
e
n
 
e
n
 
q
u
e
 
l
o
s
 
r
e
s
u
l
t
a
d
o
s
 
d
e
 
l
a
 
b
Ã
º
s
q
u
e
d
a
 
s
o
n
 
p
r
e
s
e
n
t
a
d
o
s
 
d
e
 
f
o
r
m
a
 
p
r
e
d
e
t
e
r
m
i
n
a
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
L
I
S
T
_
F
I
L
T
E
R
S
_
S
H
O
W
'
,
 
'
M
o
s
t
r
a
r
 
r
e
s
u
l
t
a
d
o
 
d
e
 
l
a
 
b
Ã
º
s
q
u
e
d
a
 
p
a
r
a
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
'
)
;

j
r
_
d
e
f
i
n
e
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
R
O
O
M
M
S
L
I
S
T
_
S
T
Y
L
E
'
,
 
'
E
s
t
i
l
o
 
d
e
 
l
i
s
t
a
 
h
a
b
i
t
a
c
i
o
n
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
R
O
O
M
M
S
L
I
S
T
_
S
T
Y
L
E
_
D
E
S
C
'
,
 
'
E
n
 
e
l
 
f
o
r
m
u
l
a
r
i
o
 
d
e
 
r
e
s
e
r
v
a
,
 
u
t
i
l
i
z
a
n
d
o
 
e
l
 
e
s
t
i
l
o
 
"
C
l
Ã
¡
s
i
c
o
"
,
 
e
l
 
e
s
t
i
l
o
 
d
e
 
l
i
s
t
a
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
l
e
 
o
f
r
e
c
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
i
n
d
i
v
i
d
u
a
l
e
s
 
p
a
r
a
 
l
o
s
 
c
l
i
e
n
t
e
s
.
 
C
o
n
 
e
l
 
e
s
t
i
l
o
 
"
T
i
p
o
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
"
,
 
l
o
s
 
h
u
Ã
©
s
p
e
d
e
s
 
e
l
i
g
e
n
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
d
e
 
t
i
p
o
 
X
 
(
p
o
r
 
e
j
e
m
p
l
o
,
 
2
 
x
 
d
o
b
l
e
s
)
 
e
n
 
l
u
g
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
R
O
O
M
M
S
L
I
S
T
_
S
T
Y
L
E
_
C
L
A
S
S
I
C
'
,
 
'
C
l
Ã
¡
s
i
c
o
'
)
;

j
r
_
d
e
f
i
n
e
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
R
O
O
M
M
S
L
I
S
T
_
S
T
Y
L
E
_
R
O
O
M
T
Y
P
E
S
'
,
 
'
T
i
p
o
 
h
a
b
i
t
a
c
i
o
n
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
A
L
E
N
D
A
R
_
S
T
A
R
T
D
A
Y
'
,
 
'
C
a
l
e
n
d
a
r
i
o
 
d
e
 
l
a
 
s
e
m
a
n
a
 
c
o
m
i
e
n
z
a
 
e
l
 
d
Ã
­
a
,
 
D
o
m
i
n
g
o
 
o
 
L
u
n
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
M
I
N
_
G
U
E
S
T
S
O
N
L
Y
'
,
 
'
Â
¿
S
Ã
³
l
o
 
l
o
s
 
c
l
i
e
n
t
e
s
 
d
e
l
 
e
s
t
a
b
l
e
c
i
m
i
e
n
t
o
 
p
u
e
d
e
n
 
h
a
c
e
r
 
c
o
m
e
n
t
a
r
i
o
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
V
I
E
W
S
_
A
D
M
I
N
_
G
U
E
S
T
S
O
N
L
Y
_
D
E
S
C
'
,
 
'
E
s
t
a
b
l
e
c
e
r
 
e
n
 
S
Ã
­
 
s
i
 
d
e
s
e
a
 
r
e
s
t
r
i
n
g
i
r
 
c
o
m
e
n
t
a
r
i
o
s
 
s
Ã
³
l
o
 
a
 
a
q
u
e
l
l
o
s
 
u
s
u
a
r
i
o
s
 
q
u
e
 
h
a
y
a
n
 
s
i
d
o
 
h
u
Ã
©
s
p
e
d
e
s
 
e
n
 
e
s
t
e
 
e
s
t
a
b
l
e
c
i
m
i
e
n
t
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
R
O
O
M
P
E
R
B
O
O
K
I
N
G
'
,
 
'
P
o
r
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
X
_
G
U
E
S
T
S
_
P
E
R
_
R
O
O
M
'
,
 
'
H
u
Ã
©
s
p
e
d
e
s
 
p
o
r
 
h
a
b
i
t
a
c
i
Ã
³
n
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
X
_
G
U
E
S
T
S
_
P
E
R
_
B
O
O
K
I
N
G
'
,
 
'
H
u
Ã
©
s
p
e
d
e
s
 
p
o
r
 
r
e
s
e
r
v
a
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
N
U
M
B
E
R
_
O
F
_
R
O
O
M
S
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
0
'
,
 
'
E
n
e
r
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
1
'
,
 
'
F
e
b
r
e
r
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
2
'
,
 
'
M
a
r
z
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
3
'
,
 
'
A
b
r
i
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
4
'
,
 
'
M
a
y
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
5
'
,
 
'
J
u
n
i
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
6
'
,
 
'
J
u
l
i
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
7
'
,
 
'
A
g
o
s
t
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
8
'
,
 
'
S
e
p
t
i
e
m
b
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
9
'
,
 
'
O
c
t
u
b
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
1
0
'
,
 
'
N
o
v
i
e
m
b
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
1
1
'
,
 
'
D
i
c
i
e
m
b
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
M
I
N
I
M
A
L
C
O
N
F
I
G
_
D
E
S
C
'
,
 
'
P
o
n
g
a
 
e
s
t
o
 
e
n
 
S
Ã
­
 
p
a
r
a
 
r
e
d
u
c
i
r
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
o
p
c
i
o
n
e
s
 
d
i
s
p
o
n
i
b
l
e
s
 
p
a
r
a
 
l
o
s
 
a
d
m
i
n
i
s
t
r
a
d
o
r
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
e
n
 
l
a
 
s
e
c
c
i
Ã
³
n
 
C
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
G
e
n
e
r
a
l
.
 
E
s
t
o
 
e
s
 
Ã
º
t
i
l
 
s
i
 
n
o
 
q
u
i
e
r
e
 
q
u
e
 
l
o
s
 
a
d
m
i
n
i
s
t
r
a
d
o
r
e
s
 
d
e
 
p
r
o
p
i
e
d
a
d
e
s
 
d
i
s
p
o
n
g
a
n
 
d
e
 
m
u
c
h
o
s
 
a
j
u
s
t
e
s
,
 
e
n
 
s
u
 
l
u
g
a
r
 
p
u
e
d
e
 
e
d
i
t
a
r
 
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
.
p
h
p
 
p
a
r
a
 
d
e
f
i
n
i
r
 
l
a
s
 
o
p
c
i
o
n
e
s
 
p
o
r
 
d
e
f
e
c
t
o
 
d
e
l
 
e
s
t
a
b
l
e
c
i
m
i
e
n
t
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
_
S
E
L
E
C
T
'
,
 
'
P
o
r
 
f
a
v
o
r
,
 
s
e
l
e
c
c
i
o
n
e
 
u
n
a
 
o
p
c
i
Ã
³
n
 
p
a
r
a
 
s
u
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
L
L
O
W
H
T
M
L
E
D
I
T
O
R
_
D
E
S
C
'
,
 
"
<
p
>
I
f
 
t
h
i
s
 
o
p
t
i
o
n
 
i
s
 
s
e
t
 
t
o
 
Y
e
s
,
 
t
h
e
n
 
m
a
n
a
g
e
r
s
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
s
e
e
 
t
h
e
 
h
t
m
l
 
e
d
i
t
o
r
 
p
r
o
v
i
d
e
d
 
w
i
t
h
 
t
h
e
 
C
M
S
,
 
a
n
d
 
e
n
t
e
r
 
H
T
M
L
 
i
n
t
o
 
t
h
e
 
d
e
s
c
r
i
p
t
i
o
n
.
 
T
h
i
s
 
i
s
 
a
 
p
o
t
e
n
t
i
a
l
 
s
e
c
u
r
i
t
y
 
r
i
s
k
 
a
s
 
t
h
e
r
e
 
i
s
 
a
 
p
o
s
s
i
b
i
l
i
t
y
 
t
h
a
t
 
t
h
e
y
 
c
a
n
 
i
n
t
r
o
d
u
c
e
 
u
n
w
a
n
t
e
d
 
H
T
M
L
 
o
r
 
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
.
 
A
d
d
i
t
i
o
n
a
l
l
y
,
 
i
f
 
t
h
e
y
 
e
n
t
e
r
 
p
o
o
r
l
y
 
f
o
r
m
a
t
t
e
d
 
H
T
M
L
 
t
h
e
 
p
a
g
e
 
d
e
s
i
g
n
 
c
o
u
l
d
 
b
e
c
o
m
e
 
c
o
m
p
r
o
m
i
s
e
d
.
 
I
t
'
s
 
b
e
t
t
e
r
 
t
o
 
l
e
a
v
e
 
t
h
i
s
 
o
p
t
i
o
n
 
s
e
t
 
t
o
 
N
o
 
w
h
e
r
e
v
e
r
 
p
o
s
s
i
b
l
e
.
<
/
p
>
<
p
>
I
f
 
a
l
l
 
m
a
n
a
g
e
r
s
 
a
r
e
 
t
r
u
s
t
e
d
 
u
s
e
r
s
 
(
e
.
g
.
 
y
o
u
r
s
e
l
f
)
 
t
h
e
n
 
y
o
u
 
c
a
n
 
l
e
a
v
e
 
i
t
 
s
e
t
 
t
o
 
Y
e
s
 
a
n
d
 
y
o
u
 
m
o
d
i
f
y
 
t
h
e
 
d
i
f
f
e
r
e
n
t
 
H
T
M
L
 
t
a
g
s
 
t
h
a
t
 
t
h
e
y
 
a
r
e
 
a
l
l
o
w
e
d
 
t
o
 
e
n
t
e
r
 
i
n
 
t
h
e
 
I
n
p
u
t
 
F
i
l
t
e
r
i
n
g
 
t
a
b
 
i
n
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
.
<
/
p
>
<
p
>
I
f
,
 
o
n
 
t
h
e
 
o
t
h
e
r
 
h
a
n
d
,
 
y
o
u
'
r
e
 
u
s
i
n
g
 
J
o
m
r
e
s
 
a
s
 
a
 
p
o
r
t
a
l
 
w
h
e
r
e
 
y
o
u
 
i
n
v
i
t
e
 
u
s
e
r
s
 
t
o
 
a
d
d
 
a
n
d
 
a
d
m
i
n
i
s
t
e
r
 
t
h
e
i
r
 
o
w
n
 
p
r
o
p
e
r
t
i
e
s
 
t
h
e
n
 
t
h
i
s
 
i
s
n
'
t
 
t
h
e
 
i
d
e
a
l
 
c
o
n
f
i
g
u
r
a
t
i
o
n
.
 
I
n
s
t
e
a
d
 
y
o
u
 
s
h
o
u
l
d
 
l
e
a
v
e
 
t
h
i
s
 
o
p
t
i
o
n
 
s
e
t
 
t
o
 
N
o
.
 
W
i
t
h
 
i
t
 
s
e
t
 
t
o
 
N
o
 
m
a
n
a
g
e
r
s
 
w
i
l
l
 
i
n
s
t
e
a
d
 
s
e
e
 
a
 
m
a
r
k
d
o
w
n
 
e
d
i
t
o
r
 
t
h
a
t
 
t
h
e
y
 
c
a
n
 
u
s
e
 
t
o
 
e
n
t
e
r
 
b
a
s
i
c
 
f
o
r
m
a
t
t
i
n
g
 
w
h
i
c
h
 
s
h
o
u
l
d
 
b
e
 
s
u
f
f
i
c
i
e
n
t
 
f
o
r
 
t
h
e
 
m
a
j
o
r
i
t
y
 
o
f
 
u
s
e
r
s
.
<
/
p
>
"
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
A
N
A
G
E
M
E
N
T
V
I
E
W
_
M
A
N
A
G
M
E
N
T
'
,
 
'
V
i
s
t
a
 
d
e
 
a
d
m
i
n
i
s
t
r
a
c
i
Ã
³
n
 
D
e
 
P
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
A
N
A
G
E
M
E
N
T
V
I
E
W
_
S
I
T
E
P
R
E
V
I
E
W
'
,
 
'
V
i
s
t
a
 
p
r
e
v
i
a
 
S
i
t
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
P
A
R
T
N
E
R
_
D
I
S
C
O
U
N
T
'
,
 
'
D
e
s
c
u
e
n
t
o
 
A
s
o
c
i
a
d
o
 
'
)
;

j
r
_
d
e
f
i
n
e
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
P
A
R
T
N
E
R
_
C
H
O
O
S
E
_
S
E
A
R
C
H
T
I
T
L
E
'
,
 
'
B
u
s
c
a
r
 
u
s
u
a
r
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
P
A
R
T
N
E
R
_
C
H
O
O
S
E
_
S
E
A
R
C
H
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
'
I
n
t
r
o
d
u
z
c
a
 
a
l
g
u
n
o
s
 
c
a
r
a
c
t
e
r
e
s
 
p
a
r
a
 
b
u
s
c
a
r
 
u
n
 
u
s
u
a
r
i
o
.
<
b
r
/
>
 
C
u
a
n
d
o
 
s
e
l
e
c
c
i
o
n
e
 
u
n
 
u
s
u
a
r
i
o
 
a
u
t
o
m
Ã
¡
t
i
c
a
m
e
n
t
e
 
s
e
 
a
Ã
±
a
d
i
r
Ã
¡
 
c
o
m
o
 
A
s
o
c
i
a
d
o
 
y
 
l
e
 
l
l
e
v
a
r
Ã
¡
 
a
 
l
a
 
p
Ã
¡
g
i
n
a
 
s
i
g
u
i
e
n
t
e
 
d
o
n
d
e
 
p
u
e
d
e
 
a
s
i
g
n
a
r
 
p
r
o
p
i
e
d
a
d
e
s
 
y
 
d
e
s
c
u
e
n
t
o
s
 
p
a
r
a
 
e
l
 
u
s
u
a
r
i
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
P
A
R
T
N
E
R
_
C
H
O
O
S
E
_
E
X
I
S
T
I
N
G
T
I
T
L
E
'
,
 
'
A
s
o
c
i
a
d
o
s
 
e
x
i
s
t
e
n
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
P
A
R
T
N
E
R
_
C
H
O
O
S
E
_
E
X
I
S
T
I
N
G
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
'
E
l
i
j
a
 
u
n
 
A
s
o
c
i
a
d
o
 
p
a
r
a
 
s
e
r
 
l
l
e
v
a
d
o
 
a
 
s
u
 
p
Ã
¡
g
i
n
a
 
d
e
 
a
d
m
i
n
i
s
t
r
a
c
i
Ã
³
n
.
'
)
;

j
r
_
d
e
f
i
n
e
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
P
A
R
T
N
E
R
_
S
H
O
W
_
T
I
T
L
E
'
,
 
'
A
s
o
c
i
a
d
o
 
:
'
)
;

j
r
_
d
e
f
i
n
e
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
P
A
R
T
N
E
R
_
S
H
O
W
_
S
E
A
R
C
H
T
I
T
L
E
'
,
 
'
B
u
s
c
a
r
 
p
o
r
 
u
n
a
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
P
A
R
T
N
E
R
_
S
H
O
W
_
S
E
A
R
C
H
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
'
I
n
t
r
o
d
u
z
c
a
 
a
l
g
u
n
o
s
 
c
a
r
a
c
t
e
r
e
s
 
d
e
l
 
n
o
m
b
r
e
 
d
e
 
p
r
o
p
i
e
d
a
d
 
y
 
s
e
l
e
c
c
i
o
n
e
 
u
n
a
 
p
r
o
p
i
e
d
a
d
.
<
b
r
/
>
 
C
u
a
n
d
o
 
u
s
t
e
d
 
s
e
l
e
c
c
i
o
n
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
s
e
 
a
g
r
e
g
a
r
Ã
¡
 
a
 
l
a
 
c
a
r
t
e
r
a
 
d
e
l
 
A
s
o
c
i
a
d
o
,
 
s
i
n
 
e
m
b
a
r
g
o
,
 
a
Ã
º
n
 
n
o
 
d
i
s
f
r
u
t
a
r
Ã
¡
 
d
e
 
l
o
s
 
d
e
s
c
u
e
n
t
o
s
,
 
s
e
r
Ã
¡
 
n
e
c
e
s
a
r
i
o
 
q
u
e
 
l
o
s
 
c
o
n
f
i
g
u
r
e
 
u
s
t
e
d
 
m
i
s
m
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
P
A
R
T
N
E
R
_
S
H
O
W
_
C
U
R
R
E
N
T
P
R
O
P
E
R
T
I
E
S
'
,
 
'
P
r
o
p
i
e
d
a
d
e
s
 
a
c
t
u
a
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
P
A
R
T
N
E
R
_
S
H
O
W
_
C
U
R
R
E
N
T
P
R
O
P
E
R
T
I
E
S
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
'
H
a
g
a
 
c
l
i
c
 
e
n
 
u
n
a
 
p
r
o
p
i
e
d
a
d
 
p
a
r
a
 
m
o
d
i
f
i
c
a
r
 
l
a
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
d
e
 
d
e
s
c
u
e
n
t
o
 
d
e
l
 
A
s
o
c
i
a
d
o
 
p
a
r
a
 
e
s
a
 
p
r
o
p
i
e
d
a
d
.
'
)
;

/
/
 
4
.
6

j
r
_
d
e
f
i
n
e
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
S
U
S
P
E
N
S
I
O
N
S
_
M
A
N
A
G
E
R
_
S
U
S
P
E
N
D
E
D
'
,
 
'
E
s
t
a
 
c
u
e
n
t
a
 
h
a
 
s
i
d
o
 
s
u
s
p
e
n
d
i
d
a
,
 
n
o
 
e
s
 
p
o
s
i
b
l
e
 
a
d
m
i
n
i
s
t
r
a
r
 
s
u
 
P
r
o
p
i
e
d
a
d
(
e
s
)
 
c
o
n
 
e
s
t
a
 
c
u
e
n
t
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
S
U
S
P
E
N
S
I
O
N
S
_
S
U
S
P
E
N
D
E
D
_
E
M
A
I
L
_
T
I
T
L
E
'
,
 
'
C
u
e
n
t
a
 
d
e
 
A
d
m
i
n
i
s
t
r
a
d
o
r
 
s
u
s
p
e
n
d
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
S
U
S
P
E
N
S
I
O
N
S
_
U
N
S
U
S
P
E
N
D
E
D
_
E
M
A
I
L
_
T
I
T
L
E
'
,
 
'
C
u
e
n
t
a
 
d
e
 
A
d
m
i
n
i
s
t
r
a
d
o
r
 
r
e
h
a
b
i
l
i
t
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
S
U
S
P
E
N
S
I
O
N
S
_
M
A
N
A
G
E
R
_
S
U
S
P
E
N
D
E
D
_
E
M
A
I
L
'
,
 
'
T
e
n
g
a
 
e
n
 
c
u
e
n
t
a
 
q
u
e
 
s
u
 
c
u
e
n
t
a
 
d
e
 
A
d
m
i
n
i
s
t
r
a
d
o
r
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
h
a
 
s
i
d
o
 
s
u
s
p
e
n
d
i
d
a
.
 
U
s
t
e
d
 
n
o
 
s
e
r
Ã
¡
 
c
a
p
a
z
 
d
e
 
r
e
a
l
i
z
a
r
 
l
a
s
 
f
u
n
c
i
o
n
e
s
 
d
e
 
g
e
s
t
i
Ã
³
n
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
h
a
s
t
a
 
q
u
e
 
l
a
 
c
u
e
n
t
a
 
h
a
y
a
 
s
i
d
o
 
r
e
s
t
a
u
r
a
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
S
U
S
P
E
N
S
I
O
N
S
_
M
A
N
A
G
E
R
_
U
N
S
U
S
P
E
N
D
E
D
_
E
M
A
I
L
'
,
 
'
T
e
n
g
a
 
e
n
 
c
u
e
n
t
a
 
q
u
e
 
s
u
 
c
u
e
n
t
a
 
d
e
 
A
d
m
i
n
i
s
t
r
a
d
o
r
 
d
e
 
p
r
o
p
i
e
d
a
d
 
y
a
 
e
s
t
Ã
¡
 
a
c
t
i
v
a
.
 
U
s
t
e
d
 
p
u
e
d
e
 
s
e
g
u
i
r
 
d
e
s
e
m
p
e
Ã
±
a
n
d
o
 
l
a
s
 
f
u
n
c
i
o
n
e
s
 
d
e
 
a
d
m
i
n
i
s
t
r
a
c
i
Ã
³
n
 
d
e
 
p
r
o
p
i
e
d
a
d
e
s
.
 
P
o
r
 
f
a
v
o
r
,
 
i
n
g
r
e
s
e
 
e
n
 
c
u
e
n
t
a
 
y
 
a
s
e
g
u
r
e
s
e
 
d
e
 
q
u
e
 
l
a
 
P
r
o
p
i
e
d
a
d
(
e
s
)
 
c
o
r
r
e
c
t
a
 
h
a
n
 
s
i
d
o
 
p
u
b
l
i
c
a
d
a
s
.
 
G
r
a
c
i
a
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
R
E
M
O
V
E
'
,
 
'
E
l
i
m
i
n
a
r
 
f
a
v
o
r
i
t
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
D
A
T
A
_
A
R
C
H
I
V
E
_
T
I
T
L
E
'
,
 
'
A
r
c
h
i
v
o
 
d
e
 
d
a
t
o
s
 
d
e
 
R
e
s
e
r
v
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
D
A
T
A
_
A
R
C
H
I
V
E
_
T
I
T
L
E
_
D
E
S
C
'
,
 
'
E
l
 
a
r
c
h
i
v
o
 
d
e
 
r
e
s
e
r
v
a
 
d
e
 
d
a
t
o
s
 
e
s
 
u
n
 
v
o
l
c
a
d
o
 
d
e
 
l
a
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
d
e
 
l
a
 
r
e
s
e
r
v
a
,
 
l
a
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
e
s
 
c
a
p
t
u
r
a
d
a
 
d
e
s
p
u
Ã
©
s
 
d
e
 
c
o
n
f
i
r
m
a
r
 
l
a
 
r
e
s
e
r
v
a
 
h
a
c
i
e
n
d
o
 
c
l
i
c
.
 
P
a
s
e
 
e
l
 
r
a
t
Ã
³
n
 
s
o
b
r
e
 
u
n
a
 
d
e
 
f
e
c
h
a
 
p
a
r
a
 
v
e
r
 
e
l
 
v
o
l
c
a
d
o
 
d
e
 
l
o
s
 
d
a
t
o
s
 
e
n
 
b
r
u
t
o
.
 
L
a
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
e
s
 
a
l
m
a
c
e
n
a
d
a
 
e
n
 
l
a
 
t
a
b
l
a
 
X
X
X
_
_
j
o
m
r
e
s
_
b
o
o
k
i
n
g
_
d
a
t
a
_
a
r
c
h
i
v
e
.
'
)
;

j
r
_
d
e
f
i
n
e
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
M
Y
_
A
C
C
O
U
N
T
_
E
D
I
T
'
,
 
'
E
d
i
t
a
r
 
c
u
e
n
t
a
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
N
A
G
E
R
_
C
H
O
O
S
E
_
S
E
A
R
C
H
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
'
T
o
 
a
d
d
 
a
 
u
s
e
r
 
a
s
 
a
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
,
 
f
i
r
s
t
 
e
n
t
e
r
 
t
h
e
 
f
i
r
s
t
 
f
e
w
 
c
h
a
r
a
c
t
e
r
s
 
o
f
 
t
h
e
i
r
 
u
s
e
r
n
a
m
e
 
i
n
 
t
h
e
 
f
i
e
l
d
 
a
b
o
v
e
.
 
W
h
e
n
 
t
h
e
 
c
o
r
r
e
c
t
 
u
s
e
r
 
h
a
s
 
b
e
e
n
 
f
o
u
n
d
 
c
l
i
c
k
 
o
n
 
t
h
a
t
 
n
a
m
e
 
t
o
 
s
e
l
e
c
t
 
i
t
,
 
t
h
e
n
 
c
h
o
o
s
e
 
w
h
i
c
h
 
p
r
o
p
e
r
t
y
(
s
)
 
t
h
e
y
 
s
h
o
u
l
d
 
b
e
 
a
 
m
a
n
a
g
e
r
 
o
f
.
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
N
A
G
E
R
_
C
H
O
O
S
E
_
E
X
I
S
T
I
N
G
T
I
T
L
E
'
,
 
'
A
c
t
u
a
l
e
s
 
A
d
m
i
n
i
s
t
r
a
d
o
r
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
G
U
E
S
T
N
U
M
B
E
R
'
,
 
'
B
u
s
c
a
r
 
p
o
r
 
n
Ã
º
m
e
r
o
 
d
e
 
h
u
Ã
©
s
p
e
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
G
U
E
S
T
N
U
M
B
E
R
_
D
E
S
C
'
,
 
'
M
o
s
t
r
a
r
 
l
a
 
b
Ã
º
s
q
u
e
d
a
 
n
Ã
º
m
e
r
o
 
d
e
 
h
u
Ã
©
s
p
e
d
e
s
 
e
n
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
T
A
R
S
'
,
 
'
B
u
s
c
a
r
 
p
o
r
 
n
Ã
º
m
e
r
o
 
d
e
 
e
s
t
r
e
l
l
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
S
T
A
R
S
_
D
E
S
C
'
,
 
'
M
o
s
t
r
a
r
 
l
a
 
b
Ã
º
s
q
u
e
d
a
 
n
Ã
º
m
e
r
o
 
d
e
 
e
s
t
r
e
l
l
a
s
 
e
n
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
'
)
;

j
r
_
d
e
f
i
n
e
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
S
E
A
R
C
H
_
G
U
E
S
T
N
U
M
B
E
R
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
h
u
Ã
©
s
p
e
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
S
E
A
R
C
H
_
S
T
A
R
S
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
e
s
t
r
e
l
l
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
H
O
O
S
E
M
A
N
A
G
E
R
_
N
U
M
B
E
R
O
F
P
R
O
P
E
R
T
I
E
S
_
A
S
S
I
G
N
E
D
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
p
r
o
p
i
e
d
a
d
e
s
'
)
;

/
/
 
4
.
6
.
1

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
J
Q
U
E
R
Y
'
,
 
'
Â
¿
C
a
r
g
a
r
 
J
o
m
r
e
s
 
j
Q
u
e
r
y
 
l
i
b
r
a
r
y
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
J
Q
U
E
R
Y
_
D
E
S
C
'
,
 
'
P
u
e
d
e
 
e
s
t
a
b
l
e
c
e
r
 
e
s
t
o
 
a
 
N
O
 
s
i
 
u
s
t
e
d
 
t
i
e
n
e
 
u
n
a
 
p
l
a
n
t
i
l
l
a
 
q
u
e
 
u
t
i
l
i
z
a
 
j
Q
u
e
r
y
.
 
E
s
t
o
 
p
u
e
d
e
 
r
e
s
o
l
v
e
r
 
l
o
s
 
p
r
o
b
l
e
m
a
s
 
d
e
 
c
o
n
f
l
i
c
t
o
 
j
q
u
e
r
y
 
e
n
 
a
l
g
u
n
a
s
 
p
l
a
n
t
i
l
l
a
s
,
 
p
e
r
o
 
n
o
 
t
o
d
o
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
H
O
O
S
E
L
A
N
G
U
A
G
E
S
_
S
H
O
W
D
R
O
P
D
O
W
N
_
D
E
S
C
'
,
 
'
E
n
a
b
l
i
n
g
 
t
h
i
s
 
o
p
t
i
o
n
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
s
e
e
 
t
h
e
 
l
a
n
g
u
a
g
e
 
s
w
i
t
c
h
e
r
 
i
n
 
t
h
e
 
F
u
l
l
s
c
r
e
e
n
 
v
i
e
w
 
i
n
 
t
h
e
 
f
r
o
n
t
e
n
d
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
U
P
L
O
A
D
S
_
I
M
A
G
E
S
_
W
I
D
T
H
_
L
A
R
G
E
_
D
E
S
C
'
,
 
'
L
a
s
 
m
i
n
i
a
t
u
r
a
s
 
s
e
 
c
r
e
a
n
 
a
u
t
o
m
Ã
¡
t
i
c
a
m
e
n
t
e
 
p
a
r
a
 
l
a
s
 
i
m
Ã
¡
g
e
n
e
s
 
c
a
r
g
a
d
a
s
.
'
)
;

/
/
 
4
.
7
.
1

j
r
_
d
e
f
i
n
e
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
C
O
M
_
T
H
U
M
B
N
A
I
L
_
S
M
A
L
L
_
W
I
D
T
H
'
,
 
'
A
n
c
h
o
 
m
Ã
¡
x
i
m
o
 
d
e
 
m
i
n
i
a
t
u
r
a
s
 
p
e
q
u
e
Ã
±
a
s
 
(
p
x
)
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
T
H
U
M
B
N
A
I
L
_
S
M
A
L
L
_
W
I
D
T
H
_
D
E
S
C
'
,
 
'
L
a
s
 
m
i
n
i
a
t
u
r
a
s
 
p
e
q
u
e
Ã
±
a
s
 
s
e
 
u
t
i
l
i
z
a
n
 
e
n
 
l
a
 
l
i
s
t
a
 
d
e
 
p
r
o
p
i
e
d
a
d
e
s
,
 
m
i
e
n
t
r
a
s
 
q
u
e
 
l
a
s
 
m
i
n
i
a
t
u
r
a
s
 
d
e
 
t
a
m
a
Ã
±
o
 
m
e
d
i
a
n
o
 
s
e
 
u
t
i
l
i
z
a
n
 
e
n
 
l
a
 
c
a
b
e
c
e
r
a
 
d
e
 
p
r
o
p
i
e
d
a
d
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
T
H
U
M
B
N
A
I
L
_
S
M
A
L
L
_
H
E
I
G
H
T
'
,
 
'
A
l
t
o
 
m
Ã
¡
x
i
m
o
 
d
e
 
m
i
n
i
a
t
u
r
a
s
 
p
e
q
u
e
Ã
±
a
s
 
(
p
x
)
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
T
H
U
M
B
N
A
I
L
_
M
E
D
_
W
I
D
T
H
'
,
 
'
A
n
c
h
o
 
m
Ã
¡
x
i
m
o
 
d
e
 
m
i
n
i
a
t
u
r
a
s
 
m
e
d
i
a
n
a
s
 
(
p
x
)
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
T
H
U
M
B
N
A
I
L
_
M
E
D
_
H
E
I
G
H
T
'
,
 
'
A
l
t
o
 
m
Ã
¡
x
i
m
o
 
d
e
 
m
i
n
i
a
t
u
r
a
s
 
m
e
d
i
a
n
a
s
 
(
p
x
)
.
'
)
;

j
r
_
d
e
f
i
n
e
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
T
O
U
C
H
T
E
M
P
L
A
T
E
S
'
,
 
'
T
r
a
d
u
c
c
i
Ã
³
n
 
e
t
i
q
u
e
t
a
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
O
M
M
I
S
S
I
O
N
_
U
S
E
'
,
 
'
Â
¿
U
s
a
r
 
l
a
 
f
u
n
c
i
o
n
a
l
i
d
a
d
 
d
e
 
C
o
m
i
s
i
o
n
i
s
t
a
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
O
M
M
I
S
S
I
O
N
_
U
S
E
_
D
E
S
C
'
,
 
'
P
o
n
g
a
 
e
s
t
o
 
e
n
 
S
Ã
­
 
p
a
r
a
 
m
o
s
t
r
a
r
 
e
l
 
r
e
s
u
l
t
a
d
o
 
d
e
 
l
a
s
 
f
a
c
t
u
r
a
s
 
d
e
 
l
a
 
c
o
m
i
s
i
Ã
³
n
 
q
u
e
 
s
e
 
h
a
n
 
p
l
a
n
t
e
a
d
o
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
O
M
M
I
S
S
I
O
N
_
M
A
N
A
G
E
R
_
T
R
I
G
G
E
R
S
'
,
 
'
Â
¿
A
d
m
i
n
i
s
t
r
a
d
o
r
 
d
e
 
l
a
s
 
r
e
s
e
r
v
a
s
 
c
r
e
a
 
f
a
c
t
u
r
a
s
 
d
e
 
c
o
m
i
s
i
Ã
³
n
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
O
M
M
I
S
S
I
O
N
_
M
A
N
A
G
E
R
_
T
R
I
G
G
E
R
S
_
D
E
S
C
'
,
 
'
S
i
 
u
n
 
A
d
m
i
n
i
s
t
r
a
d
o
r
 
h
a
c
e
 
u
n
a
 
r
e
s
e
r
v
a
,
 
Â
¿
e
s
o
 
t
a
m
b
i
Ã
©
n
 
c
r
e
a
 
u
n
a
 
l
Ã
­
n
e
a
 
 
e
n
 
f
a
c
t
u
r
a
 
d
e
 
l
a
 
c
o
m
i
s
i
Ã
³
n
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
O
M
M
I
S
S
I
O
N
_
A
U
T
O
S
U
S
P
E
N
D
'
,
 
'
Â
¿
A
u
t
o
 
s
u
s
p
e
n
d
e
r
 
a
 
l
o
s
 
a
d
m
i
n
i
s
t
r
a
d
o
r
e
s
 
c
u
a
n
d
o
 
l
a
s
 
f
a
c
t
u
r
a
s
 
s
o
n
 
m
a
r
c
a
d
a
s
 
c
o
m
o
 
p
e
n
d
i
e
n
t
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
O
M
M
I
S
S
I
O
N
_
A
U
T
O
S
U
S
P
E
N
D
_
T
H
R
E
A
S
H
O
L
D
'
,
 
'
U
m
b
r
a
l
 
p
a
r
a
 
l
a
 
a
u
t
o
s
u
s
p
e
n
s
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
O
M
M
I
S
S
I
O
N
_
A
U
T
O
S
U
S
P
E
N
D
_
T
H
R
E
A
S
H
O
L
D
_
D
E
S
C
'
,
 
'
E
s
t
e
 
u
m
b
r
a
l
 
e
s
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
d
Ã
­
a
s
 
q
u
e
 
u
n
 
a
d
m
i
n
i
s
t
r
a
d
o
r
 
t
i
e
n
e
 
q
u
e
 
p
a
g
a
r
 
u
n
a
 
f
a
c
t
u
r
a
 
a
n
t
e
s
 
d
e
 
q
u
e
 
s
e
a
 
s
u
s
p
e
n
d
i
d
o
 
y
 
n
o
 
p
u
b
l
i
c
a
d
a
s
 
s
u
s
 
p
r
o
p
i
e
d
a
d
e
s
.
'
)
;

/
/
4
.
7
.
2

j
r
_
d
e
f
i
n
e
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
C
O
M
_
L
A
N
G
U
A
G
E
_
C
O
N
T
E
X
T
'
,
 
'
I
d
i
o
m
a
 
d
e
 
c
o
n
t
e
x
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
L
A
N
G
U
A
G
E
_
C
O
N
T
E
X
T
_
D
E
S
C
'
,
 
'
E
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
p
e
r
m
i
t
e
 
a
 
J
o
m
r
e
s
 
e
l
 
u
s
o
 
d
e
 
e
t
i
q
u
e
t
a
s
 
q
u
e
 
s
o
n
 
a
p
r
o
p
i
a
d
a
s
 
p
a
r
a
 
s
u
 
e
n
f
o
q
u
e
 
a
c
t
u
a
l
,
 
p
o
r
 
l
o
 
q
u
e
 
s
i
 
s
u
 
i
n
t
e
r
Ã
©
s
 
s
e
 
c
e
n
t
r
a
 
e
n
 
u
n
a
 
Y
a
c
h
t
 
B
r
o
k
e
r
a
g
e
 
(
V
e
n
t
a
 
d
e
 
y
a
t
e
s
)
,
 
c
a
m
b
i
a
r
 
e
l
 
c
o
n
t
e
x
t
o
 
p
e
r
m
i
t
i
r
Ã
¡
 
J
o
m
r
e
s
 
p
r
e
s
e
n
t
a
r
 
l
a
s
 
e
t
i
q
u
e
t
a
s
 
d
e
 
u
n
 
a
r
c
h
i
v
o
 
d
e
 
i
d
i
o
m
a
 
d
i
f
e
r
e
n
t
e
.
 
P
o
r
 
e
j
e
m
p
l
o
,
 
s
i
 
e
s
t
a
b
l
e
c
e
 
e
l
 
c
o
n
t
e
x
t
o
 
p
a
r
a
 
"
Y
a
c
h
t
 
B
r
o
k
e
r
a
g
e
"
,
 
e
n
t
o
n
c
e
s
 
J
o
m
r
e
s
 
p
r
i
m
e
r
o
 
s
e
 
e
n
c
u
e
n
t
r
a
 
e
l
 
l
e
n
g
u
a
j
e
 
a
c
t
u
a
l
,
 
a
 
c
o
n
t
i
n
u
a
c
i
Ã
³
n
,
 
b
u
s
c
a
r
Ã
¡
 
e
n
 
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
l
a
n
g
u
a
g
e
s
 
u
n
 
s
u
b
-
d
i
r
e
c
t
o
r
i
o
 
l
l
a
m
a
d
o
 
"
y
a
c
h
t
b
r
o
k
e
r
a
g
e
"
.
 
S
i
 
e
l
 
a
r
c
h
i
v
o
 
e
x
i
s
t
e
 
e
n
 
e
l
 
l
e
n
g
u
a
j
e
 
a
c
t
u
a
l
,
 
e
l
 
a
r
c
h
i
v
o
 
s
e
r
Ã
¡
 
u
t
i
l
i
z
a
d
o
.
 
S
i
 
n
o
,
 
e
n
t
o
n
c
e
s
 
J
o
m
r
e
s
 
b
u
s
c
a
r
Ã
¡
 
u
n
 
a
r
c
h
i
v
o
 
d
e
 
i
d
i
o
m
a
 
I
n
g
l
Ã
©
s
 
e
n
 
e
s
e
 
m
i
s
m
o
 
d
i
r
e
c
t
o
r
i
o
.
 
S
i
 
n
o
 
s
e
 
e
n
c
u
e
n
t
r
a
,
 
J
o
m
r
e
s
 
u
t
i
l
i
z
a
r
Ã
¡
 
e
l
 
a
r
c
h
i
v
o
 
d
e
 
i
d
i
o
m
a
 
p
a
r
a
 
e
l
 
i
d
i
o
m
a
 
s
e
l
e
c
c
i
o
n
a
d
o
 
e
n
 
e
l
 
d
i
r
e
c
t
o
r
i
o
 
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
l
a
n
g
u
a
g
e
s
.
'
)
;

/
/
 
4
.
7
.
3

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
D
V
A
N
C
E
D
_
S
I
T
E
_
C
O
N
F
I
G
'
,
 
'
C
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
a
v
a
n
z
a
d
a
 
d
e
l
 
s
i
t
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
D
V
A
N
C
E
D
_
S
I
T
E
_
C
O
N
F
I
G
_
D
E
S
C
'
,
 
'
E
s
t
a
b
l
e
z
c
a
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
a
 
S
Ã
­
 
s
i
 
d
e
s
e
a
 
u
t
i
l
i
z
a
r
 
l
a
s
 
o
p
c
i
o
n
e
s
 
a
v
a
n
z
a
d
a
s
 
d
e
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
d
e
l
 
s
i
t
i
o
.
 
S
i
 
u
s
t
e
d
 
a
c
a
b
a
 
d
e
 
e
m
p
e
z
a
r
 
c
o
n
 
J
o
m
r
e
s
,
 
e
n
t
o
n
c
e
s
 
l
e
 
r
e
c
o
m
e
n
d
a
m
o
s
,
 
q
u
e
 
p
o
r
 
a
h
o
r
a
 
d
e
j
e
 
e
s
t
o
 
e
n
 
N
o
,
 
y
a
 
q
u
e
 
l
a
 
i
n
s
t
a
l
a
c
i
Ã
³
n
 
p
o
r
 
d
e
f
e
c
t
o
 
e
s
 
s
u
f
i
c
i
e
n
t
e
 
p
a
r
a
 
e
m
p
e
z
a
r
,
 
d
e
b
e
 
a
g
r
e
g
a
r
 
J
o
m
r
e
s
 
a
l
 
m
e
n
Ã
º
 
p
r
i
n
c
i
p
a
l
 
y
 
a
c
c
e
d
e
r
 
a
 
l
a
 
i
n
t
e
r
f
a
z
 
c
o
m
o
 
"
a
d
m
i
n
"
 
y
 
c
o
m
e
n
z
a
r
 
a
 
c
o
n
f
i
g
u
r
a
r
 
s
u
 
p
r
o
p
i
e
d
a
d
(
s
)
.
 
T
e
n
g
a
 
e
n
 
c
u
e
n
t
a
 
q
u
e
 
m
u
c
h
a
s
 
d
e
 
l
a
 
o
p
c
i
o
n
e
s
 
a
v
a
n
z
a
d
a
s
 
s
Ã
³
l
o
 
s
e
r
Ã
¡
n
 
a
p
l
i
c
a
b
l
e
s
 
a
 
l
a
s
 
i
n
s
t
a
l
a
c
i
o
n
e
s
 
d
e
 
J
o
m
r
e
s
 
S
i
l
v
e
r
,
 
l
o
s
 
u
s
u
a
r
i
o
s
 
J
o
m
r
e
s
 
L
i
t
e
 
n
o
 
s
e
r
Ã
¡
n
 
c
a
p
a
c
e
s
 
d
e
 
s
a
c
a
r
 
e
l
 
m
Ã
¡
x
i
m
o
 
p
r
o
v
e
c
h
o
 
d
e
 
l
a
 
t
o
t
a
l
i
d
a
d
 
d
e
 
l
a
s
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
s
 
p
e
r
m
i
t
i
d
a
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
J
Q
U
E
R
Y
_
U
I
'
,
 
'
C
a
r
g
a
r
 
J
o
m
r
e
s
 
j
Q
u
e
r
y
 
U
I
 
l
i
b
r
a
r
y
?
'
)
;

j
r
_
d
e
f
i
n
e
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
S
O
R
T
O
R
D
E
R
_
P
R
I
C
E
_
D
E
S
C
'
,
 
'
P
r
e
c
i
o
 
(
d
e
s
c
e
n
d
e
n
t
e
)
'
)
;

j
r
_
d
e
f
i
n
e
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
S
O
R
T
O
R
D
E
R
_
P
R
I
C
E
_
A
S
C
'
,
 
'
P
r
e
c
i
o
 
(
a
s
c
e
n
d
e
n
t
e
)
'
)
;

/
/
 
4
.
7
.
6

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
'
,
 
'
Â
¿
E
l
 
r
e
s
u
m
e
n
 
d
e
 
p
r
e
c
i
o
s
 
y
 
e
s
t
i
m
a
c
i
o
n
e
s
 
d
e
b
e
 
s
e
r
 
u
n
 
p
r
e
c
i
o
 
p
o
r
 
n
o
c
h
e
/
s
e
m
a
n
a
/
m
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
D
A
I
L
Y
'
,
 
'
P
o
r
 
n
o
c
h
e
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
W
E
E
K
L
Y
'
,
 
'
P
o
r
 
s
e
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
M
O
N
T
H
L
Y
'
,
 
'
P
o
r
 
m
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
P
E
R
P
E
R
S
O
N
'
,
 
'
P
o
r
 
p
e
r
s
o
n
a
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
W
E
E
K
S
'
,
 
'
s
e
m
a
n
a
(
s
)
 
e
n
 
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
M
O
N
T
H
S
'
,
 
'
m
e
s
(
e
s
)
 
e
n
 
'
)
;

/
/
 
4
.
7
.
7

j
r
_
d
e
f
i
n
e
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
A
_
G
L
O
B
A
L
_
S
E
A
R
C
H
O
P
T
I
O
N
_
P
E
O
P
L
E
N
U
M
B
E
R
S
'
,
 
'
Â
¿
C
Ã
³
m
o
 
d
e
b
e
 
t
r
a
b
a
j
a
r
 
l
a
 
o
p
c
i
Ã
³
n
 
d
e
 
b
Ã
º
s
q
u
e
d
a
 
p
o
r
 
n
Ã
º
m
e
r
o
 
d
e
 
p
e
r
s
o
n
a
s
?
?
'
)
;

j
r
_
d
e
f
i
n
e
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
A
_
G
L
O
B
A
L
_
S
E
A
R
C
H
O
P
T
I
O
N
_
P
E
O
P
L
E
N
U
M
B
E
R
S
_
D
E
S
C
'
,
 
'
A
f
e
c
t
a
 
a
 
t
o
d
a
s
 
l
a
s
 
b
Ã
º
s
q
u
e
d
a
s
.
 
C
u
a
n
d
o
 
u
s
a
m
o
s
 
l
a
 
f
u
n
c
i
Ã
³
n
 
d
e
 
b
Ã
º
s
q
u
e
d
a
 
n
Ã
º
m
e
r
o
 
d
e
 
i
n
v
i
t
a
d
o
s
,
 
b
u
s
c
a
r
e
m
o
s
 
p
r
o
p
i
e
d
a
d
e
s
 
c
u
y
a
s
 
t
a
r
i
f
a
s
 
p
e
r
m
i
t
a
n
 
a
l
o
j
a
r
 
u
n
 
n
Ã
º
m
e
r
o
 
m
a
y
o
r
 
o
 
i
g
u
a
l
 
a
l
 
n
Ã
º
m
e
r
o
 
e
l
e
g
i
d
o
 
Â
¿
N
Ã
º
m
e
r
o
 
i
g
u
a
l
 
o
 
m
a
y
o
r
?
 
'
)
;

j
r
_
d
e
f
i
n
e
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
P
A
Y
P
A
L
_
R
E
D
I
R
E
C
T
M
E
S
S
A
G
E
'
,
 
'
P
o
r
 
f
a
v
o
r
 
e
s
p
e
r
e
,
 
s
u
 
s
o
l
i
c
i
t
u
d
 
e
s
t
Ã
¡
 
e
n
 
p
r
o
c
e
s
o
 
y
 
s
e
r
Ã
¡
 
r
e
d
i
r
i
g
i
d
o
 
a
 
l
a
 
p
Ã
¡
g
i
n
a
 
w
e
b
 
d
e
 
P
a
y
p
a
l
.
'
)
;

j
r
_
d
e
f
i
n
e
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
P
A
Y
P
A
L
_
R
E
D
I
R
E
C
T
M
E
S
S
A
G
E
_
I
F
N
O
T
R
E
D
I
R
E
C
T
E
D
'
,
 
'
S
i
 
n
o
 
e
s
 
a
u
t
o
m
Ã
¡
t
i
c
a
m
e
n
t
e
 
d
i
r
i
g
i
d
o
 
a
 
P
a
y
p
a
l
 
e
n
 
5
 
s
e
g
u
n
d
o
s
 
.
.
.
'
)
;

j
r
_
d
e
f
i
n
e
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
P
A
Y
P
A
L
_
R
E
D
I
R
E
C
T
M
E
S
S
A
G
E
_
C
L
I
C
K
H
E
R
E
'
,
 
'
C
l
i
c
k
 
a
q
u
Ã
­
'
)
;

/
/
 
4
.
7
.
8

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
B
O
O
K
I
N
G
_
V
A
L
I
D
F
R
O
M
'
,
 
'
R
e
s
e
r
v
a
 
v
Ã
¡
l
i
d
a
 
a
 
p
a
r
t
i
r
 
d
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
B
O
O
K
I
N
G
_
V
A
L
I
D
T
O
'
,
 
'
R
e
s
e
r
v
a
 
v
Ã
¡
l
i
d
a
 
h
a
s
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
G
U
E
S
T
N
A
M
E
'
,
 
'
N
o
m
b
r
e
 
H
u
Ã
©
s
p
e
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
D
E
S
C
_
4
7
8
'
,
 
'
L
o
s
 
c
Ã
³
d
i
g
o
s
 
d
e
 
d
e
s
c
u
e
n
t
o
 
p
u
e
d
e
n
 
s
e
r
 
g
e
n
e
r
a
d
o
s
 
y
 
p
a
s
a
d
o
s
 
â
€
‹
â
€
‹
a
 
l
o
s
 
c
l
i
e
n
t
e
s
 
c
o
m
o
 
u
n
 
i
n
c
e
n
t
i
v
o
 
p
a
r
a
 
h
a
c
e
r
 
l
a
s
 
r
e
s
e
r
v
a
s
.
<
b
r
/
>
F
e
c
h
a
s
 
V
Ã
¡
l
i
d
a
s
 
d
e
s
d
e
/
h
a
s
t
a
 
p
a
r
a
 
r
e
f
e
r
i
r
s
e
 
a
 
l
a
s
 
f
e
c
h
a
s
 
e
n
 
q
u
e
 
p
u
e
d
e
 
s
e
r
 
u
n
a
 
r
e
s
e
r
v
a
 
h
e
c
h
a
,
 
m
i
e
n
t
r
a
s
 
q
u
e
 
F
e
c
h
a
 
R
e
s
e
r
v
a
 
v
Ã
¡
l
i
d
a
 
d
e
s
d
e
/
h
a
s
t
a
 
s
e
 
r
e
f
i
e
r
e
 
a
 
l
a
s
 
f
e
c
h
a
s
 
e
n
 
q
u
e
 
l
a
 
r
e
s
e
r
v
a
 
q
u
e
 
d
e
b
e
 
c
u
b
r
i
r
 
e
l
 
c
u
p
Ã
³
n
 
s
e
a
 
v
Ã
¡
l
i
d
a
.
 
S
i
 
l
a
 
r
e
s
e
r
v
a
 
s
e
 
e
n
c
u
e
n
t
r
a
 
f
u
e
r
a
 
d
e
 
e
s
e
 
p
e
r
Ã
­
o
d
o
 
l
a
s
 
t
a
r
i
f
a
s
 
n
o
r
m
a
l
e
s
 
s
e
 
a
p
l
i
c
a
r
Ã
¡
n
 
a
 
l
o
s
 
d
Ã
­
a
s
 
f
u
e
r
a
 
d
e
 
e
s
e
 
p
e
r
Ã
­
o
d
o
.
<
b
r
/
>
S
i
 
d
e
s
e
a
 
q
u
e
 
l
a
 
r
e
s
e
r
v
a
 
e
s
t
Ã
©
 
d
i
s
p
o
n
i
b
l
e
 
p
a
r
a
 
u
n
o
s
 
h
u
Ã
©
s
p
e
d
e
s
 
e
s
p
e
c
Ã
­
f
i
c
o
s
,
 
e
l
i
j
a
 
e
l
 
n
o
m
b
r
e
 
d
e
 
l
o
s
 
h
u
Ã
©
s
p
e
d
e
s
 
e
n
 
e
l
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
 
p
a
r
a
 
l
i
m
i
t
a
r
 
e
l
 
c
u
p
Ã
³
n
 
s
Ã
³
l
o
 
a
 
e
s
o
s
 
h
u
Ã
©
s
p
e
d
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
B
O
O
K
I
N
G
_
D
I
S
C
O
U
N
T
_
F
E
E
D
B
A
C
K
'
,
 
'
C
o
n
 
s
u
 
c
u
p
Ã
³
n
,
 
e
s
t
a
 
r
e
s
e
r
v
a
 
h
a
 
s
i
d
o
 
r
e
b
a
j
a
d
a
 
d
e
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
B
O
O
K
I
N
G
_
D
I
S
C
O
U
N
T
_
F
E
E
D
B
A
C
K
_
T
O
'
,
 
'
 
a
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
J
Q
U
E
R
Y
_
U
I
_
D
E
S
C
'
,
 
'
P
o
n
g
a
 
e
s
t
o
 
e
n
 
N
o
 
p
a
r
a
 
d
e
s
a
c
t
i
v
a
r
 
l
a
 
c
a
r
g
a
 
t
a
n
t
o
 
d
e
 
J
q
u
e
r
y
 
U
I
 
j
a
v
a
s
c
r
i
p
t
 
c
o
m
o
 
d
e
 
a
r
c
h
i
v
o
s
 
C
S
S
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
J
Q
U
E
R
Y
_
U
I
_
C
S
S
'
,
 
'
Â
¿
C
a
r
g
a
r
 
J
o
m
r
e
s
 
j
Q
u
e
r
y
 
U
I
 
C
S
S
 
l
i
b
r
a
r
y
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
J
Q
U
E
R
Y
_
U
I
_
C
S
S
_
D
E
S
C
'
,
 
'
P
o
n
g
a
 
N
o
 
s
Ã
³
l
o
 
p
a
r
a
 
d
e
s
a
c
t
i
v
a
r
 
e
l
 
a
r
c
h
i
v
o
 
j
q
u
e
r
y
 
U
I
 
C
S
S
.
'
)
;

/
/
v
5
.
1

j
r
_
d
e
f
i
n
e
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
L
I
N
E
I
T
E
M
_
T
O
T
A
L
_
I
N
C
L
U
D
I
N
G
T
A
X
'
,
 
'
T
o
t
a
l
 
i
n
c
 
i
m
p
u
e
s
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
_
A
U
D
I
T
_
U
N
P
U
B
L
I
S
H
_
P
R
O
P
E
R
T
Y
'
,
 
'
D
e
s
p
u
b
l
i
c
a
r
 
P
r
o
p
i
e
d
a
d
'
)
;

/
/
 
v
5
.
2

j
r
_
d
e
f
i
n
e
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
C
O
N
V
E
R
S
I
O
N
_
T
I
T
L
E
'
,
 
'
U
s
a
r
 
F
u
n
c
i
o
n
a
l
i
d
a
d
 
d
e
 
C
o
n
v
e
r
s
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
V
E
R
S
I
O
N
_
T
I
T
L
E
_
D
E
S
C
'
,
 
"
U
s
a
 
l
a
 
f
u
n
c
i
o
n
a
l
i
a
d
 
d
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
 
o
n
l
i
n
e
 
d
e
 
j
o
m
r
e
s
.
.
 
E
s
t
o
 
o
f
r
e
c
e
 
u
n
 
d
e
s
p
l
e
g
a
b
l
e
 
d
e
 
c
o
n
v
e
r
s
i
Ã
³
n
 
a
 
l
o
s
 
u
s
u
a
r
i
o
s
 
d
e
 
l
a
 
p
Ã
¡
g
i
n
a
,
 
d
o
n
d
e
 
p
o
d
r
Ã
¡
n
 
e
l
e
g
i
r
 
l
a
 
m
o
n
e
d
a
 
e
n
 
l
a
 
q
u
e
 
q
u
i
e
r
e
n
 
v
e
r
 
l
o
s
 
p
r
e
c
i
o
s
 
o
f
e
r
t
a
d
o
s
.
 
L
a
 
p
r
e
s
e
n
t
a
c
i
Ã
³
n
 
d
e
l
 
p
r
e
c
i
o
 
s
e
 
a
j
u
s
t
a
 
p
a
r
a
 
m
o
n
s
t
r
a
r
 
e
l
 
p
r
e
c
i
o
 
c
o
n
v
e
r
t
i
d
o
,
 
s
e
g
i
d
o
 
p
o
r
 
e
l
 
p
r
e
c
i
o
 
'
n
a
t
i
v
o
'
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
e
n
t
r
e
 
p
a
r
Ã
©
n
t
e
s
i
s
.
.
"
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
V
E
R
S
I
O
N
_
D
I
S
C
L
A
I
M
E
R
'
,
 
'
H
e
m
o
s
 
p
u
e
s
t
o
 
n
u
e
s
t
r
o
s
 
m
e
j
o
r
e
s
 
e
s
f
u
e
r
z
o
s
 
e
n
 
o
b
t
e
n
e
r
 
e
l
 
m
a
s
 
p
r
e
c
i
s
o
 
y
 
m
Ã
¡
s
 
r
Ã
¡
p
i
d
o
 
s
i
s
t
e
m
a
 
d
e
 
c
a
m
b
i
o
 
d
e
 
d
i
v
i
s
a
 
q
u
e
 
p
o
d
e
m
o
s
.
 
N
u
e
s
t
r
o
 
s
e
r
v
i
c
i
o
 
d
e
 
c
o
n
v
e
r
s
i
Ã
³
n
 
d
e
 
d
i
v
i
s
a
s
 
o
n
l
i
n
e
 
e
s
t
a
 
d
e
s
t
i
n
a
d
o
 
a
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
y
 
n
o
 
p
r
e
t
e
n
d
e
 
r
e
f
l
e
j
a
r
 
c
a
m
b
i
o
s
 
e
x
a
c
t
o
s
.
 
D
e
 
a
c
u
e
r
d
o
 
c
o
n
 
l
o
 
e
x
p
u
e
s
t
o
 
a
n
t
e
r
i
o
r
m
e
n
t
e
,
 
n
o
 
g
a
r
a
n
t
i
z
a
m
o
s
 
l
a
 
e
x
a
c
t
i
t
u
d
 
d
e
 
l
o
s
 
c
a
m
b
i
o
s
 
d
e
 
d
i
v
i
s
a
.
 
U
s
a
n
d
o
 
e
s
t
e
 
s
e
r
v
i
c
i
o
 
a
c
e
p
t
a
s
 
q
u
e
 
e
l
 
u
s
o
 
d
e
 
l
a
 
m
i
s
m
a
 
c
o
r
r
e
 
p
o
r
 
t
u
 
c
u
e
n
t
a
 
y
 
r
i
e
s
g
o
.
'
)
;

/
/
 
5
.
2
.
1

/
/
 
5
.
3
.
1

j
r
_
d
e
f
i
n
e
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
C
U
R
R
E
N
C
Y
C
O
N
V
E
R
S
I
O
N
_
T
A
B
'
,
 
'
C
o
n
v
e
r
s
i
Ã
³
n
 
d
e
 
m
o
n
e
d
a
/
c
Ã
³
d
i
g
o
 
d
e
 
m
o
n
e
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
P
_
D
E
T
E
C
T
I
O
N
_
A
P
I
_
K
E
Y
_
T
I
T
L
E
'
,
 
'
D
e
t
e
c
c
i
Ã
³
n
 
d
e
 
I
P
,
 
c
l
a
v
e
 
A
P
I
'
)
;

j
r
_
d
e
f
i
n
e
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
P
_
D
E
T
E
C
T
I
O
N
_
A
P
I
_
K
E
Y
_
D
E
S
C
'
,
 
'
P
a
r
a
 
f
i
j
a
r
 
a
u
t
o
m
Ã
¡
t
i
c
a
m
e
n
t
e
 
e
n
 
e
l
 
d
e
s
p
l
e
g
a
b
l
e
 
d
e
 
c
a
m
b
i
o
 
d
e
 
m
o
n
e
d
a
,
 
J
o
m
r
e
s
 
u
s
a
 
u
n
 
s
e
r
v
i
c
i
o
 
g
r
a
t
u
i
t
o
 
l
l
a
m
a
d
o
 
I
p
i
n
f
o
B
B
 
p
a
r
a
 
d
e
t
e
c
t
a
r
 
e
l
 
p
a
Ã
­
s
 
d
e
l
 
v
i
s
i
t
a
n
t
e
,
 
n
o
 
o
b
s
t
a
n
t
e
 
d
e
b
e
r
a
 
o
b
t
e
n
e
r
 
p
r
i
m
e
r
o
 
u
n
a
 
c
l
a
v
e
 
A
P
I
 
e
n
:
 
<
a
 
h
r
e
f
=
"
h
t
t
p
:
/
/
i
p
i
n
f
o
d
b
.
c
o
m
/
r
e
g
i
s
t
e
r
.
p
h
p
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
I
P
i
n
f
o
D
B
<
/
a
>
.
'
)
;

j
r
_
d
e
f
i
n
e
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
D
E
B
U
G
G
I
N
G
_
T
A
B
'
,
 
'
D
e
p
u
r
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
T
O
T
A
L
_
E
X
_
T
A
X
'
,
 
'
A
l
o
j
a
m
i
e
n
t
o
 
i
v
a
 
e
x
c
l
u
i
d
o
 
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
T
O
T
A
L
_
I
N
C
_
T
A
X
'
,
 
'
A
l
o
j
a
m
i
e
n
t
o
 
i
v
a
 
i
n
c
l
u
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
A
X
_
A
C
C
O
M
'
,
 
'
I
V
A
 
A
l
o
j
a
m
i
e
n
t
o
:
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
B
U
T
T
O
N
_
O
P
E
N
_
B
O
O
K
I
N
G
F
O
R
M
'
,
 
'
A
b
r
i
r
 
e
l
 
f
o
r
m
u
l
a
r
i
o
 
d
e
 
R
e
s
e
r
v
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
B
U
T
T
O
N
_
B
A
C
K
_
T
O
_
P
R
O
P
E
R
T
Y
_
D
E
T
A
I
L
S
'
,
 
'
V
o
l
v
e
r
 
a
 
l
o
s
 
d
e
t
a
l
l
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
X
T
R
A
_
A
U
T
O
_
S
E
L
E
C
T
'
,
 
'
Â
¿
S
e
l
e
c
c
i
o
n
a
d
o
 
a
u
t
o
m
Ã
¡
t
i
c
a
m
e
n
t
e
?
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
T
O
T
A
L
_
B
A
L
A
N
C
E
'
,
 
'
B
a
l
a
n
c
e
 
(
d
e
s
p
u
Ã
©
s
 
d
e
l
 
p
a
g
o
 
d
e
l
 
d
e
p
Ã
³
s
i
t
o
)
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
F
E
A
T
U
R
E
_
F
I
L
T
E
R
'
,
 
'
F
i
l
t
r
a
r
 
r
e
c
u
r
s
o
s
 
b
a
s
a
d
o
s
 
e
n
 
s
u
s
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
D
A
T
E
P
E
R
I
O
D
_
L
A
T
E
S
T
B
O
O
K
I
N
G
'
,
 
'
U
l
t
i
m
a
s
 
R
e
s
e
r
v
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
D
A
T
E
P
E
R
I
O
D
_
S
E
C
O
N
D
'
,
 
'
S
e
g
u
n
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
D
A
T
E
P
E
R
I
O
D
_
M
I
N
U
T
E
'
,
 
'
M
i
n
u
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
D
A
T
E
P
E
R
I
O
D
_
H
O
U
R
'
,
 
'
H
o
r
a
'
)
;

j
r
_
d
e
f
i
n
e
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
D
A
T
E
P
E
R
I
O
D
_
D
A
Y
'
,
 
'
D
i
a
'
)
;

j
r
_
d
e
f
i
n
e
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
D
A
T
E
P
E
R
I
O
D
_
W
E
E
K
'
,
 
'
s
e
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
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
D
A
T
E
P
E
R
I
O
D
_
M
O
N
T
H
'
,
 
'
m
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
D
A
T
E
P
E
R
I
O
D
_
Y
E
A
R
'
,
 
'
a
Ã
±
o
'
)
;

j
r
_
d
e
f
i
n
e
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
D
A
T
E
P
E
R
I
O
D
_
D
E
C
A
D
E
'
,
 
'
d
e
c
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
D
A
T
E
P
E
R
I
O
D
_
S
'
,
 
'
s
'
)
;

j
r
_
d
e
f
i
n
e
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
D
A
T
E
P
E
R
I
O
D
_
A
G
O
'
,
 
'
h
a
c
e
'
)
;

j
r
_
d
e
f
i
n
e
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
D
A
T
E
P
E
R
I
O
D
_
F
R
O
M
N
O
W
'
,
 
'
d
e
s
d
e
 
a
h
o
r
a
'
)
;

j
r
_
d
e
f
i
n
e
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
W
H
O
L
E
D
A
Y
_
T
I
T
L
E
'
,
 
'
L
a
s
 
r
e
s
e
r
v
a
s
 
s
o
n
 
p
a
r
a
 
d
i
a
s
 
e
n
t
e
r
o
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
W
H
O
L
E
D
A
Y
_
D
E
S
C
'
,
 
'
P
o
r
 
d
e
f
e
c
t
o
 
l
o
s
 
r
e
c
u
r
s
o
s
 
d
e
 
r
e
s
e
r
v
a
s
 
d
e
 
s
i
s
t
e
m
a
 
e
s
t
a
n
 
a
p
a
g
a
d
o
s
 
p
o
r
 
l
a
 
n
o
c
h
e
 
p
o
r
 
l
o
 
q
u
e
 
u
n
a
 
r
e
s
e
r
v
a
 
d
e
l
 
p
r
i
m
e
r
o
 
d
e
 
E
n
e
r
o
'
.
d
a
t
e
(
'
Y
'
,
 
s
t
r
t
o
t
i
m
e
(
'
n
e
x
t
 
y
e
a
r
'
)
)
.
'
 
a
l
 
s
e
g
u
n
d
o
 
d
e
 
E
n
e
r
o
 
'
.
d
a
t
e
(
'
Y
'
,
 
s
t
r
t
o
t
i
m
e
(
'
n
e
x
t
 
y
e
a
r
'
)
)
.
'
 
s
o
l
o
 
c
u
b
r
e
 
u
n
a
 
n
o
c
h
e
.
 
P
e
r
o
 
s
i
 
c
a
m
b
i
a
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
a
 
S
i
,
 
e
n
t
o
n
c
e
s
 
l
a
 
r
e
s
e
r
v
a
 
c
u
b
r
i
r
Ã
¡
 
d
i
a
s
 
e
n
t
e
r
o
s
,
 
p
o
r
 
l
o
 
q
u
e
 
u
n
a
 
r
e
s
e
r
v
a
 
e
n
 
e
s
o
s
 
d
i
a
s
 
c
u
b
r
i
r
Ã
¡
 
a
m
b
o
s
 
d
Ã
­
a
s
 
y
 
a
l
 
c
l
i
e
n
t
e
 
s
e
 
l
e
 
f
a
c
t
u
r
a
r
Ã
¡
n
 
d
o
s
 
d
Ã
­
a
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
P
o
r
 
d
Ã
­
a
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
P
o
r
 
p
e
r
s
o
n
a
 
y
 
d
Ã
­
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
_
W
H
O
L
E
D
A
Y
'
,
 
'
E
n
t
r
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
U
R
E
_
W
H
O
L
E
D
A
Y
'
,
 
'
S
a
l
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
N
I
G
H
T
S
_
W
H
O
L
E
D
A
Y
'
,
 
'
d
i
a
(
s
)
 
e
n
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
D
E
P
A
R
T
U
R
E
D
A
T
E
_
I
N
V
A
L
I
D
_
W
H
O
L
E
D
A
Y
'
,
 
'
F
e
c
h
a
 
d
e
 
S
a
l
i
d
a
 
i
n
c
o
r
r
e
c
t
a
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
B
O
O
K
I
N
G
_
T
O
O
_
S
H
O
R
T
1
_
W
H
O
L
E
D
A
Y
'
,
 
'
L
a
 
r
e
s
e
r
v
a
 
e
s
 
m
u
y
 
c
o
r
t
a
.
 
t
h
e
m
e
 
h
a
b
e
r
 
a
l
 
m
e
n
o
s
 
e
s
t
o
s
 
d
Ã
­
a
s
 
e
n
t
r
e
 
l
a
 
e
n
t
r
a
d
a
 
y
 
l
a
 
s
a
l
i
d
a
:
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
M
I
N
I
M
U
M
I
N
T
E
R
V
A
L
_
W
H
O
L
E
D
A
Y
'
,
 
'
M
Ã
­
n
i
m
o
 
i
n
t
e
r
v
a
l
o
 
e
n
t
r
e
 
E
n
t
r
a
d
a
/
S
a
l
i
d
a
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
M
I
N
I
M
U
M
I
N
T
E
R
V
A
L
_
D
E
S
C
_
W
H
O
L
E
D
A
Y
'
,
 
'
E
l
 
i
n
t
e
r
v
a
l
o
 
m
Ã
­
n
i
m
o
 
e
n
 
e
l
 
f
o
r
m
u
l
a
r
i
o
 
d
e
 
r
e
s
e
r
v
a
 
e
n
t
r
e
 
l
a
s
 
f
e
c
h
a
s
 
d
e
 
e
n
t
r
a
d
a
 
y
 
s
a
l
i
d
a
.
 
U
n
 
i
n
t
e
r
v
a
l
o
 
d
e
 
1
 
s
i
g
n
i
f
i
c
a
 
q
u
e
 
l
a
s
 
f
e
c
h
a
s
 
d
e
 
e
n
t
r
a
d
a
 
y
 
s
a
l
i
d
a
 
p
u
e
d
e
n
 
e
s
t
a
b
l
e
c
e
r
s
e
 
e
n
 
e
l
 
m
i
s
m
o
 
d
Ã
­
a
,
 
s
i
n
 
e
m
b
a
r
g
o
 
e
s
t
o
 
d
e
p
e
n
d
e
 
a
Ã
º
n
 
d
e
l
 
i
n
t
e
r
v
a
l
o
 
m
Ã
­
n
i
m
o
 
q
u
e
 
e
s
 
c
a
l
c
u
l
a
d
o
 
a
u
t
o
m
Ã
¡
t
i
c
a
m
e
n
t
e
 
p
o
r
 
e
l
 
m
o
t
o
r
 
d
e
 
r
e
s
e
r
v
a
,
 
y
a
 
q
u
e
 
c
o
m
p
r
u
e
b
a
 
l
a
s
 
t
a
r
i
f
a
s
 
v
Ã
¡
l
i
d
a
s
 
p
a
r
a
 
e
l
 
p
e
r
i
o
d
o
 
d
e
 
r
e
s
e
r
v
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
W
H
O
L
E
D
A
Y
'
,
 
'
Â
¿
E
l
 
p
r
e
c
i
o
 
r
e
s
u
m
i
d
o
 
y
 
e
l
 
e
s
t
i
m
a
d
o
 
d
e
b
e
 
s
e
r
 
f
a
c
t
u
r
a
d
o
 
p
o
r
 
d
Ã
­
a
/
p
o
r
 
s
e
m
a
n
a
/
p
o
r
 
m
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
D
A
I
L
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
P
o
r
 
d
Ã
­
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
D
A
Y
S
B
E
F
O
R
E
F
I
R
S
T
B
O
O
K
I
N
G
_
W
H
O
L
E
D
A
Y
'
,
 
'
D
i
a
s
 
a
n
t
e
s
 
d
e
 
l
a
 
e
n
t
r
a
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
D
A
Y
S
B
E
F
O
R
E
F
I
R
S
T
B
O
O
K
I
N
G
_
D
E
S
C
_
W
H
O
L
E
D
A
Y
'
,
 
'
E
l
 
n
Ã
º
m
e
r
o
 
m
Ã
­
n
i
m
o
 
d
e
 
d
Ã
­
a
s
 
d
e
b
e
 
a
b
a
r
c
a
r
 
d
e
s
d
e
 
"
h
o
y
"
 
h
a
s
t
a
 
l
a
 
f
e
c
h
a
 
d
e
 
e
n
t
r
a
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
A
D
V
A
N
C
E
B
O
O
K
I
N
G
S
L
I
M
I
T
Y
E
S
N
O
_
D
E
S
C
_
W
H
O
L
E
D
A
Y
'
,
 
'
C
a
m
b
i
e
 
e
s
t
o
 
a
 
S
i
,
 
s
i
 
q
u
i
e
r
e
 
l
i
m
i
t
a
r
 
r
e
s
e
r
v
a
s
 
a
v
a
n
z
a
d
a
s
 
(
u
s
e
 
e
l
 
s
i
g
u
i
e
n
t
e
 
c
a
m
p
o
 
p
a
r
a
 
f
i
j
a
r
 
e
l
 
l
Ã
­
m
i
t
e
 
e
n
 
t
Ã
©
r
m
i
n
o
s
 
d
e
 
d
Ã
­
a
s
)
.
 
S
i
 
c
a
m
b
i
a
 
e
s
t
e
 
c
a
m
p
o
 
a
 
S
i
,
 
e
n
t
o
n
c
e
s
 
s
i
 
e
l
 
u
s
u
a
r
i
o
 
i
n
t
e
n
t
a
 
r
e
s
e
r
v
a
r
 
m
Ã
¡
s
 
d
e
 
x
 
d
Ã
­
a
s
 
p
o
r
 
a
d
e
l
a
n
t
a
d
o
,
 
e
n
t
o
n
c
e
 
s
u
 
d
Ã
­
a
 
d
e
 
e
n
t
r
a
d
a
 
s
e
 
f
i
j
a
r
Ã
¡
 
e
n
 
l
a
 
f
e
c
h
a
 
d
e
l
 
d
Ã
­
a
 
d
e
 
h
o
y
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
S
H
O
W
D
E
P
A
R
T
U
R
E
I
N
P
U
T
_
W
H
O
L
E
D
A
Y
'
,
 
'
Â
¿
M
o
s
t
r
a
r
 
c
a
m
p
o
 
d
e
 
f
e
c
h
a
 
d
e
 
s
a
l
i
d
a
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
S
H
O
W
D
E
P
A
R
T
U
R
E
I
N
P
U
T
_
D
E
S
C
_
W
H
O
L
E
D
A
Y
'
,
 
'
M
a
r
q
u
e
 
e
s
t
o
 
N
o
 
s
i
 
n
o
 
q
u
i
e
r
e
 
m
o
s
t
r
a
r
 
e
l
 
c
a
m
p
o
 
d
e
 
f
e
c
h
a
 
d
e
 
s
a
l
i
d
a
.
 
S
Ã
³
l
o
 
u
s
e
 
e
s
t
o
 
s
i
 
s
a
b
e
 
l
o
 
q
u
e
 
h
a
c
e
,
 
y
a
 
q
u
e
 
l
a
 
f
e
c
h
a
 
d
e
 
s
a
l
i
d
a
 
e
n
 
l
a
s
 
r
e
s
e
r
v
a
s
 
s
e
 
m
o
s
t
a
r
Ã
¡
 
s
i
e
m
p
r
e
 
c
o
m
o
 
e
l
 
d
Ã
­
a
 
p
o
s
t
e
r
i
o
r
 
a
 
l
a
 
e
n
t
r
a
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
B
O
O
K
I
N
G
S
_
D
E
S
C
_
W
H
O
L
E
D
A
Y
'
,
 
'
S
i
 
m
a
r
c
a
 
e
s
t
o
 
c
o
m
o
 
S
i
,
 
e
n
t
o
n
c
e
s
 
l
a
s
 
r
e
s
e
r
v
a
s
 
s
e
 
t
o
m
a
r
Ã
¡
 
p
o
r
 
u
n
 
p
e
r
Ã
­
o
d
o
 
p
r
e
f
i
j
a
d
o
.
 
S
i
 
s
e
 
m
a
r
c
a
 
c
o
m
o
 
N
o
,
 
a
s
e
g
Ã
º
r
e
s
e
 
d
e
 
q
u
e
 
e
l
 
c
a
m
p
o
 
"
d
i
a
 
d
e
 
e
n
t
r
a
d
a
 
d
e
f
i
n
i
d
o
"
 
n
o
 
e
s
t
Ã
¡
 
m
a
r
c
a
d
o
 
c
o
m
o
 
S
i
 
(
a
 
n
o
 
s
e
r
 
q
u
e
 
e
s
p
e
c
Ã
­
f
i
c
a
m
e
n
t
e
 
q
u
i
e
r
a
s
 
f
o
r
z
a
r
 
a
 
l
o
s
 
c
l
i
e
n
t
e
 
a
 
s
a
l
i
r
 
e
n
 
u
n
 
d
Ã
­
a
 
d
e
 
l
a
 
s
e
m
a
n
a
 
q
u
e
 
q
u
i
e
r
a
s
)
 
d
e
 
o
t
r
a
 
f
o
r
m
a
 
n
o
 
t
e
n
d
r
Ã
¡
 
m
u
c
h
o
s
 
l
i
n
k
s
 
e
n
 
e
l
 
c
a
l
e
n
d
a
r
i
o
 
d
e
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
Y
E
S
N
O
_
W
H
O
L
E
D
A
Y
'
,
 
'
D
Ã
­
a
 
d
e
 
e
n
t
r
a
d
a
 
p
r
e
d
e
f
i
n
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
Y
E
S
N
O
_
D
E
S
C
_
W
H
O
L
E
D
A
Y
'
,
 
'
S
Ã
³
l
o
 
p
a
r
a
 
s
i
t
i
o
s
 
q
u
e
 
o
f
r
e
c
e
n
 
p
e
r
i
o
d
o
s
 
f
i
j
o
s
 
d
e
 
r
e
s
e
r
v
a
s
.
 
E
s
c
o
j
a
 
e
l
 
d
Ã
­
a
 
d
e
 
l
a
 
s
e
m
a
n
a
 
e
n
 
e
l
 
q
u
e
 
d
e
b
e
 
s
e
r
 
r
e
a
l
i
z
a
d
a
 
l
a
 
e
n
t
r
a
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
D
Ã
­
a
 
d
e
 
e
n
t
r
a
d
a
 
p
r
e
f
i
j
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
R
E
C
U
R
R
I
N
G
_
W
H
O
L
E
D
A
Y
'
,
 
'
D
Ã
­
a
s
 
d
e
 
e
n
t
r
a
d
a
 
p
r
e
f
i
j
a
d
o
s
 
r
e
p
e
t
i
d
o
s
:
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
R
E
C
U
R
R
I
N
G
_
D
E
S
C
_
W
H
O
L
E
D
A
Y
'
,
 
'
C
u
a
n
d
o
 
l
a
s
 
f
e
c
h
a
s
 
p
r
e
f
i
j
a
d
a
s
 
d
e
 
e
n
t
r
a
d
a
 
e
s
t
Ã
¡
n
 
s
e
l
e
c
c
i
o
n
a
d
a
s
,
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
f
e
c
h
a
s
 
q
u
e
 
s
e
 
p
u
e
d
e
n
 
v
e
r
 
e
n
 
l
a
 
l
i
s
t
a
 
d
e
s
p
l
e
g
a
b
l
e
.
 
F
Ã
­
j
e
s
e
 
q
u
e
 
l
a
 
l
i
s
t
a
 
d
e
 
f
e
c
h
a
s
 
n
o
 
i
n
c
l
u
i
r
Ã
¡
 
n
i
n
g
u
n
a
 
f
e
c
h
a
 
s
i
 
l
a
 
r
e
s
e
r
v
a
 
n
o
 
e
s
 
p
o
s
i
b
l
e
 
d
e
b
i
d
o
 
a
 
r
e
s
e
r
v
a
s
 
a
n
t
e
r
i
o
r
e
s
,
 
y
 
q
u
e
 
l
a
 
l
i
s
t
a
 
s
e
r
Ã
¡
 
d
e
 
h
e
c
h
o
 
e
l
 
d
o
b
l
e
 
d
e
 
l
a
r
g
a
 
q
u
e
 
s
u
 
n
Ã
º
m
e
r
o
 
s
e
l
e
c
c
i
o
n
a
d
o
 
y
a
 
q
u
e
 
t
e
n
d
r
Ã
¡
 
u
n
 
n
Ã
º
m
e
r
o
 
s
i
m
i
l
a
r
 
d
e
 
f
e
c
h
a
s
 
h
i
s
t
Ã
³
r
i
c
a
s
 
(
d
o
n
d
e
 
s
e
a
 
p
o
s
i
b
l
e
)
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
T
A
R
I
F
F
S
_
P
E
R
_
W
H
O
L
E
D
A
Y
'
,
 
'
P
o
r
 
p
e
r
s
o
n
a
,
 
p
o
r
 
d
Ã
­
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
T
A
R
I
F
F
S
_
P
E
R
_
D
E
S
C
_
W
H
O
L
E
D
A
Y
'
,
 
'
S
e
l
e
c
c
i
o
n
e
 
S
i
 
s
i
 
q
u
i
e
r
e
 
c
a
m
b
i
a
r
 
p
o
r
-
p
e
r
s
o
n
a
 
p
o
r
-
d
Ã
­
a
.
 
S
i
 
n
o
,
 
e
n
t
o
n
c
e
s
 
l
o
s
 
c
o
s
t
e
s
 
s
e
 
c
a
l
c
u
l
a
r
a
n
 
e
n
 
b
a
s
e
 
a
 
p
o
r
-
r
e
c
u
r
s
o
-
p
o
r
-
d
Ã
­
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
D
E
P
O
S
I
T
_
C
H
A
R
G
E
D
E
P
O
S
I
T
_
V
A
R
I
A
B
L
E
_
D
E
S
C
_
W
H
O
L
E
D
A
Y
'
,
 
'
L
o
s
 
d
e
p
Ã
³
s
i
t
o
s
 
v
a
r
i
a
b
l
e
s
 
l
e
 
p
e
r
m
i
t
e
n
 
d
e
f
i
n
i
r
 
s
i
 
l
e
 
g
u
s
t
a
r
Ã
±
i
a
 
c
a
r
g
a
r
 
l
a
 
c
a
n
t
i
d
a
d
 
e
n
t
e
r
a
 
a
 
l
a
 
f
e
c
h
a
 
d
e
 
l
a
 
e
n
t
r
a
d
a
 
d
e
 
l
a
 
r
e
s
e
r
v
a
 
e
n
 
x
 
d
Ã
­
a
s
 
d
e
s
d
e
 
h
o
y
.
 
M
a
r
q
u
e
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
c
o
m
o
 
S
i
 
p
a
r
a
 
a
c
t
i
v
a
r
 
e
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
e
 
i
n
t
r
o
d
u
z
c
a
 
m
Ã
¡
s
 
a
b
a
j
o
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
d
Ã
­
a
s
,
 
a
s
Ã
­
 
p
o
r
 
e
j
e
m
p
l
o
 
s
i
 
e
l
 
d
Ã
­
a
 
d
e
 
e
n
t
r
a
d
a
 
e
s
t
a
 
d
e
t
r
o
 
d
e
 
l
o
s
 
6
0
 
d
Ã
­
a
s
,
 
e
l
 
d
e
p
Ã
³
s
i
t
o
 
s
e
 
c
a
r
g
a
r
Ã
¡
 
p
o
r
 
l
a
 
t
o
t
a
l
i
d
a
d
 
d
e
 
l
a
 
r
e
s
e
r
v
a
,
 
e
n
 
c
a
s
o
 
c
o
n
t
r
a
r
i
o
 
l
a
 
c
a
n
t
i
d
a
d
 
s
e
 
b
a
s
a
r
Ã
¡
 
e
n
 
l
a
s
 
o
p
c
i
o
n
e
s
 
d
e
 
d
e
p
Ã
³
s
i
t
o
 
c
o
n
f
i
g
u
r
a
d
a
s
 
m
Ã
¡
s
 
a
r
r
i
b
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
T
I
T
L
E
_
D
E
S
C
_
F
U
L
L
_
W
H
O
L
E
D
A
Y
'
,
 
'
L
a
 
m
a
y
o
r
Ã
­
a
 
d
e
 
l
o
s
 
n
e
g
o
c
i
o
s
 
r
e
c
a
l
c
u
l
a
r
a
n
 
l
o
s
 
p
r
e
c
i
o
s
 
d
e
l
 
r
e
c
u
r
s
o
 
b
a
s
a
d
o
 
e
n
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
r
e
c
u
r
s
o
s
 
d
e
 
u
n
 
t
i
p
o
 
r
e
q
u
e
r
i
d
o
 
q
u
e
 
e
s
t
Ã
¡
n
 
d
i
s
p
o
n
i
b
l
e
s
 
e
n
 
l
a
 
f
e
c
h
a
 
d
a
d
a
.
 
E
s
t
o
 
l
e
s
 
p
e
r
m
i
t
e
 
o
f
r
e
c
e
r
 
d
e
s
c
u
e
n
t
o
s
 
e
n
 
u
n
 
t
i
p
o
 
d
e
 
r
e
c
u
r
s
o
/
n
e
g
o
c
i
o
 
q
u
e
 
n
o
 
e
s
t
Ã
¡
 
o
c
u
p
a
d
o
 
d
u
r
a
n
t
e
 
e
l
 
p
e
r
i
o
d
o
 
d
a
d
o
,
 
c
o
n
 
l
a
 
v
e
n
t
a
j
a
 
d
e
 
a
t
r
a
e
r
 
a
 
n
e
g
o
c
i
o
s
 
q
u
e
 
d
e
 
o
t
r
a
 
f
o
r
m
a
 
s
e
 
p
o
d
r
Ã
­
a
 
p
e
r
d
e
r
.
<
b
r
/
>
 
A
c
t
i
v
a
n
d
o
 
y
 
c
o
n
f
i
g
u
r
a
n
d
o
 
e
s
t
e
 
p
l
u
g
i
n
 
p
o
d
r
Ã
¡
 
o
f
r
e
c
e
r
 
p
r
e
c
i
o
s
 
a
j
u
s
t
a
b
l
e
s
 
e
n
 
b
a
s
e
 
a
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
r
e
c
u
r
s
o
s
 
d
e
 
u
n
 
t
i
p
o
 
e
l
e
g
i
d
o
 
q
u
e
 
e
s
t
Ã
¡
n
 
d
i
s
p
o
n
i
b
l
e
s
 
e
n
 
e
l
 
n
e
g
o
c
i
o
 
e
l
 
d
Ã
­
a
 
e
s
t
i
p
u
l
a
d
o
.
<
b
r
/
>
 
E
l
 
u
m
b
r
a
l
 
d
e
 
d
Ã
­
a
s
,
 
d
e
f
i
n
e
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
d
Ã
­
a
s
 
e
n
t
r
e
 
l
o
s
 
q
u
e
 
d
e
b
e
 
e
s
t
a
r
 
l
a
 
f
e
c
h
a
 
d
e
 
e
n
t
r
a
d
a
 
a
n
t
e
s
 
d
e
 
q
u
e
 
l
o
s
 
p
r
e
c
i
o
s
 
d
e
l
 
r
e
c
u
r
s
e
 
s
e
 
a
j
u
s
t
e
n
 
a
 
e
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
,
 
e
n
t
o
n
c
e
s
 
l
a
s
 
o
p
c
i
o
n
e
s
 
d
e
 
p
o
r
c
e
t
a
n
j
e
s
 
l
e
 
p
e
r
m
i
t
i
r
Ã
¡
n
 
c
o
n
f
i
g
u
r
a
r
 
e
l
 
p
o
r
c
e
n
t
a
j
e
 
d
e
 
r
e
c
u
r
s
o
s
 
q
u
e
 
p
u
e
d
e
n
 
e
s
t
a
r
 
d
i
s
p
o
n
i
b
l
e
s
 
d
e
s
p
u
e
s
 
d
e
 
q
u
e
 
s
e
 
l
e
s
 
a
p
l
i
q
u
e
 
u
n
 
d
e
s
c
u
e
n
t
o
 
d
a
d
o
.
 
F
Ã
­
j
e
s
e
 
s
i
n
 
e
m
b
a
r
g
o
 
q
u
e
 
s
i
 
m
Ã
º
l
t
i
p
l
e
s
 
r
e
c
u
r
s
o
s
 
s
o
n
 
r
e
s
e
r
v
a
d
o
s
,
 
e
l
 
n
i
v
e
l
 
a
c
t
u
a
l
 
d
e
 
d
e
s
c
u
e
n
t
o
 
s
e
 
a
p
l
i
c
a
r
Ã
±
a
 
a
 
t
o
d
o
s
 
l
o
s
 
r
e
c
u
r
s
o
s
 
y
 
n
o
 
s
e
 
r
e
d
u
c
i
r
Ã
¡
 
a
 
m
e
d
i
d
a
 
q
u
e
 
s
e
 
s
e
l
e
c
c
i
o
n
e
s
 
m
Ã
¡
s
 
r
e
c
u
r
s
o
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
T
H
R
E
A
S
H
O
L
D
_
W
H
O
L
E
D
A
Y
'
,
 
'
U
m
b
r
a
l
 
(
n
Ã
º
m
e
r
o
 
d
e
 
d
Ã
­
a
s
 
e
n
t
r
e
 
l
a
 
f
e
c
h
a
 
d
e
 
e
n
t
r
a
d
a
 
y
 
h
o
y
.
)
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
P
E
N
D
I
N
G
_
W
H
O
L
E
D
A
Y
'
,
 
'
E
n
t
r
a
d
a
 
p
e
n
d
i
e
n
t
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
E
T
O
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
E
n
t
r
a
d
a
 
H
o
y
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
R
E
S
I
D
E
N
T
_
W
H
O
L
E
D
A
Y
'
,
 
'
E
n
t
r
a
d
a
 
r
e
a
l
i
z
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
T
O
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
S
a
l
i
d
a
s
 
H
o
y
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
S
T
I
L
L
H
E
R
E
_
W
H
O
L
E
D
A
Y
'
,
 
'
S
a
l
i
d
a
s
 
F
i
n
a
l
i
z
a
d
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
L
A
T
E
_
W
H
O
L
E
D
A
Y
'
,
 
'
N
o
 
h
a
 
e
n
t
r
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
S
T
A
Y
D
A
Y
S
_
W
H
O
L
E
D
A
Y
'
,
 
'
D
Ã
­
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
O
O
K
A
G
U
E
S
T
I
N
_
W
H
O
L
E
D
A
Y
'
,
 
'
M
a
r
c
a
r
 
u
n
a
 
r
e
s
e
r
v
a
 
c
o
m
o
 
e
n
t
r
a
d
a
 
r
e
a
l
i
z
a
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
O
O
K
A
G
U
E
S
T
O
U
T
_
W
H
O
L
E
D
A
Y
'
,
 
'
M
a
r
c
a
r
 
c
o
m
o
 
r
e
s
e
r
v
a
 
d
e
v
u
e
l
t
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
B
O
O
K
I
N
_
T
I
T
L
E
_
W
H
O
L
E
D
A
Y
'
,
 
'
M
a
r
c
a
r
 
u
n
a
 
r
e
s
e
r
v
a
 
c
o
m
o
 
e
n
t
r
a
d
a
 
r
e
s
e
r
v
a
d
a
 
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
B
O
O
K
O
U
T
_
T
I
T
L
E
_
W
H
O
L
E
D
A
Y
'
,
 
'
M
a
r
c
a
r
 
u
n
a
 
r
e
s
e
r
v
a
 
c
o
m
o
 
d
e
v
u
e
l
t
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
I
N
V
O
I
C
E
_
C
O
S
T
P
E
R
N
I
G
H
T
_
W
H
O
L
E
D
A
Y
'
,
 
'
C
o
s
t
e
 
p
o
r
 
d
Ã
­
a
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
I
N
V
O
I
C
E
_
S
T
A
Y
N
I
G
H
T
S
_
W
H
O
L
E
D
A
Y
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
d
Ã
­
a
s
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
A
M
E
N
D
_
O
V
E
R
R
I
D
E
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
T
O
T
A
L
'
,
 
'
A
n
u
l
a
c
i
Ã
³
n
 
t
o
t
a
l
 
d
e
 
A
l
o
j
a
m
i
e
n
t
o
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
A
M
E
N
D
_
O
V
E
R
R
I
D
E
_
S
A
V
E
'
,
 
'
G
u
a
r
d
a
r
 
l
a
 
A
n
u
l
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
O
R
M
_
E
M
A
I
L
_
N
E
W
U
S
E
R
_
E
M
A
I
L
_
L
O
G
I
N
_
D
E
T
A
I
L
S
'
,
 
'
Â
¿
E
n
v
i
a
r
 
a
 
l
o
s
 
n
u
e
v
o
s
 
u
s
u
a
r
i
o
s
 
s
u
s
 
d
a
t
o
s
 
d
e
 
a
c
c
e
s
o
?
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
O
R
M
_
E
M
A
I
L
_
N
E
W
U
S
E
R
_
E
M
A
I
L
_
L
O
G
I
N
_
D
E
T
A
I
L
S
_
D
E
S
C
'
,
 
'
S
i
 
l
a
 
o
p
c
i
Ã
³
n
 
d
e
 
c
r
e
a
r
 
n
u
e
v
o
 
u
s
u
a
r
i
o
 
e
s
t
a
 
m
a
r
c
a
d
a
 
c
o
m
o
 
S
i
,
 
p
u
e
d
e
 
c
a
m
b
i
a
r
 
e
s
t
a
 
o
p
c
i
Ã
³
n
a
 
 
N
o
 
p
a
r
a
 
a
s
e
g
u
r
a
r
s
e
 
d
e
 
q
u
e
 
n
o
 
s
e
 
l
e
s
 
e
n
v
i
a
 
s
u
s
 
d
e
t
a
l
l
e
s
 
d
e
 
a
c
c
e
s
o
 
u
n
a
 
v
e
z
 
q
u
e
 
s
e
 
h
a
 
c
r
e
a
d
o
 
e
l
 
u
s
u
a
r
i
o
.
 
E
s
t
o
 
p
u
e
d
e
 
s
e
r
 
Ã
º
t
i
l
 
s
i
 
e
s
t
a
 
a
Ã
±
a
d
i
e
n
d
o
 
a
u
t
o
m
Ã
¡
t
i
c
a
m
e
n
t
e
 
u
s
u
a
r
i
o
s
 
a
 
u
n
a
 
l
i
s
t
a
 
d
e
 
c
o
r
r
e
o
,
 
p
o
r
 
e
j
e
m
p
l
o
,
 
y
 
n
o
 
q
u
i
e
r
e
 
q
u
e
 
l
o
s
 
u
s
u
a
r
i
o
s
 
s
e
 
l
o
g
u
e
e
n
.
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
O
R
M
_
T
A
X
_
O
U
T
P
U
T
'
,
 
'
Â
¿
M
o
s
t
r
a
r
 
i
m
p
u
e
s
t
o
s
 
e
n
 
e
l
 
r
e
s
u
m
e
n
 
d
e
 
t
o
t
a
l
e
s
 
d
e
l
 
f
o
r
m
u
l
a
r
i
o
 
d
e
 
r
e
s
e
r
v
a
?
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
O
R
M
_
T
A
X
_
O
U
T
P
U
T
_
D
E
S
C
'
,
 
'
E
v
i
t
a
r
 
q
u
e
 
e
l
 
f
o
r
m
u
l
a
r
i
o
 
d
e
 
r
e
s
e
r
v
a
 
m
u
e
s
t
r
e
 
l
o
s
 
c
a
m
p
o
s
 
d
e
 
i
m
p
u
e
s
t
o
s
 
e
n
 
e
l
 
r
e
s
u
m
e
n
 
d
e
 
t
o
t
a
l
e
s
 
m
a
r
c
a
n
d
o
 
e
s
t
a
 
o
p
c
i
o
n
 
c
o
m
o
 
N
O
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
O
D
D
S
_
C
A
N
C
E
L
L
A
T
I
O
N
_
T
H
R
E
A
S
H
O
L
D
'
,
 
'
U
m
b
r
a
l
 
d
e
 
c
a
n
c
e
l
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
O
D
D
S
_
C
A
N
C
E
L
L
A
T
I
O
N
_
T
H
R
E
A
S
H
O
L
D
_
D
E
S
C
'
,
 
'
C
o
n
e
c
t
a
d
o
,
 
l
o
s
 
u
s
u
a
r
i
o
s
 
r
e
g
i
s
t
r
a
d
o
s
 
p
u
e
d
e
n
 
c
a
n
c
e
l
a
r
 
s
u
s
 
p
r
o
p
i
a
s
 
r
e
s
e
r
v
a
s
.
 
A
q
u
i
 
p
u
e
d
e
 
f
i
j
a
r
 
e
l
 
u
m
b
r
a
l
 
e
n
 
d
i
a
s
,
 
e
n
 
l
o
s
 
q
u
e
 
l
a
 
r
e
s
e
r
v
a
 
n
o
 
p
u
e
d
e
 
s
e
r
 
c
a
n
c
e
l
a
d
a
 
d
e
p
u
Ã
©
s
 
d
e
 
u
n
 
c
i
e
r
t
o
 
n
Ã
º
m
e
r
o
 
d
e
 
d
Ã
­
a
s
 
a
n
t
e
s
 
d
e
l
 
d
Ã
­
a
 
d
e
 
l
l
e
g
a
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
E
D
I
T
_
P
R
O
F
I
L
E
'
,
 
'
E
d
i
t
a
r
 
P
e
r
f
i
l
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
_
T
Y
P
E
_
A
S
S
I
G
N
M
E
N
T
'
,
 
'
t
i
p
o
 
d
e
 
r
e
l
a
c
i
Ã
³
n
 
c
o
n
 
l
a
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
G
E
'
,
 
'
I
m
a
g
e
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
R
A
T
E
S
_
C
L
I
C
K
I
N
I
T
I
A
L
'
,
 
'
P
u
l
s
e
 
s
o
b
r
e
 
u
n
a
 
l
e
t
r
a
 
p
a
r
a
 
m
o
s
t
r
a
r
 
t
o
d
o
s
 
l
o
s
 
n
e
g
o
c
i
o
s
 
q
u
e
 
e
m
p
i
e
z
a
n
 
p
o
r
 
e
s
a
 
l
a
t
r
e
.
 
U
n
a
 
v
e
z
 
q
u
e
 
t
i
e
n
e
 
u
n
a
 
l
i
s
t
a
 
d
e
 
p
r
o
p
i
e
d
a
d
e
s
 
p
u
e
d
e
 
a
s
i
g
n
a
r
 
t
a
s
a
s
 
d
e
 
c
o
m
i
s
i
Ã
³
n
 
a
 
d
i
c
h
a
s
 
p
r
o
p
i
e
d
a
d
e
s
 
o
 
p
u
l
s
a
r
 
s
o
b
r
e
 
s
u
s
 
i
c
o
n
o
s
 
d
e
 
e
d
i
c
i
Ã
³
n
 
p
a
r
a
 
v
e
r
 
l
a
s
 
e
s
t
a
d
Ã
­
s
t
i
c
a
s
 
d
e
 
l
o
s
 
n
e
g
o
c
i
o
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
T
A
X
_
R
A
T
E
_
E
D
I
T
'
,
 
'
E
d
i
t
a
r
 
p
o
r
c
e
n
t
a
j
e
 
d
e
 
i
m
p
u
e
s
t
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
U
S
T
O
M
F
I
E
L
D
S
_
T
I
T
L
E
_
E
D
I
T
'
,
 
'
E
d
i
t
a
r
 
c
a
m
p
o
s
 
p
e
r
s
o
n
a
l
i
z
a
d
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
L
I
C
E
N
S
E
S
E
R
V
E
R
_
P
A
S
S
W
O
R
D
'
,
 
'
C
l
a
v
e
 
d
e
 
l
i
c
e
n
c
i
a
 
d
e
l
 
s
e
r
v
i
d
o
r
'
)
;

j
r
_
d
e
f
i
n
e
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
L
I
C
E
N
S
E
S
E
R
V
E
R
_
U
S
E
R
N
A
M
E
'
,
 
'
U
s
u
a
r
i
o
 
d
e
 
l
i
c
e
n
c
i
a
 
d
e
l
 
s
e
r
v
i
d
o
r
'
)
;

j
r
_
d
e
f
i
n
e
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
L
I
C
E
N
S
E
S
E
R
V
E
R
_
U
S
E
R
N
A
M
E
_
D
E
S
C
'
,
 
'
S
i
 
u
s
t
e
d
 
t
i
e
n
e
n
 
u
n
 
n
o
m
b
r
e
 
d
e
 
u
s
u
a
r
i
o
 
y
 
c
o
n
t
r
a
s
e
Ã
±
a
 
e
n
 
e
l
 
s
e
r
v
i
d
o
r
 
d
e
 
l
i
c
e
n
c
i
a
,
 
p
o
r
 
f
a
v
o
r
 
i
n
t
r
o
d
Ã
º
z
c
a
l
o
s
.
 
E
s
t
o
 
l
e
 
a
y
u
d
a
r
Ã
¡
 
a
 
a
c
c
e
d
e
r
 
a
 
l
o
s
 
p
l
u
g
i
n
s
 
a
 
l
o
s
 
q
u
e
 
e
s
t
Ã
¡
 
s
u
s
c
r
i
t
o
.
 
S
i
 
h
a
 
i
n
g
r
e
s
a
d
o
 
u
n
a
 
c
l
a
v
e
 
v
Ã
¡
l
i
d
a
 
d
e
 
s
o
p
o
r
t
e
 
e
n
 
e
l
 
c
a
m
p
o
 
d
e
 
m
Ã
¡
s
 
a
b
a
j
o
,
 
n
o
 
e
s
 
n
e
c
e
s
a
r
i
o
 
i
n
s
e
r
t
a
r
 
e
l
 
u
s
u
a
r
i
o
 
y
 
c
o
n
t
r
a
s
e
Ã
±
a
 
a
q
u
i
.
'
)
;

j
r
_
d
e
f
i
n
e
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
V
E
R
S
I
O
N
C
H
E
C
K
_
T
H
I
S
J
O
M
R
E
S
V
E
R
S
I
O
N
'
,
 
'
V
e
r
s
i
Ã
³
n
 
A
c
t
u
a
l
 
d
e
 
J
o
m
r
e
s
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
V
E
R
S
I
O
N
C
H
E
C
K
_
L
A
T
E
S
T
J
O
M
R
E
S
V
E
R
S
I
O
N
'
,
 
'
Ã
š
l
t
i
m
a
 
v
e
r
s
i
Ã
³
n
 
d
e
 
J
o
m
r
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
V
E
R
S
I
O
N
C
H
E
C
K
_
V
E
R
S
I
O
N
W
A
R
N
I
N
G
'
,
 
'
A
l
e
r
t
a
 
:
 
H
a
y
 
u
n
a
 
n
u
e
v
a
 
v
e
r
s
i
Ã
³
n
 
d
e
 
J
o
m
r
e
s
 
d
i
s
p
o
n
i
b
l
e
,
 
s
e
 
l
e
 
r
e
c
o
m
i
e
n
d
a
 
a
c
t
u
a
l
i
z
a
r
 
c
u
a
n
d
o
 
p
u
e
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
D
U
C
T
_
I
N
F
O
R
M
A
T
I
O
N
'
,
 
'
B
i
e
n
v
e
n
i
d
o
 
a
 
J
o
m
r
e
s
,
 
e
s
p
e
r
a
m
o
s
 
q
u
e
 
d
i
s
f
r
u
t
e
 
u
s
a
n
d
o
 
e
l
 
s
i
s
t
e
m
a
 
d
e
 
r
e
s
e
r
v
a
s
 
f
a
v
o
r
i
t
o
 
d
e
 
J
o
o
m
l
a
.
 
S
i
 
d
e
s
e
a
 
c
o
m
p
r
a
r
 
l
i
c
e
n
c
i
a
s
 
d
e
 
J
o
m
r
e
s
 
P
l
a
t
a
 
u
 
O
r
o
 
,
 
<
a
 
h
r
e
f
=
"
h
t
t
p
:
/
/
w
w
w
.
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
/
p
r
i
c
e
s
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
 
P
o
r
 
f
a
v
o
r
,
 
v
i
s
i
t
e
 
n
u
e
s
t
a
r
a
 
p
Ã
¡
g
i
n
a
<
/
a
>
 
p
a
r
a
 
o
b
t
e
n
e
r
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
s
o
b
r
e
 
l
a
 
m
e
j
o
r
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
D
U
C
T
_
I
N
F
O
R
M
A
T
I
O
N
2
'
,
 
'
E
s
t
e
 
s
i
s
t
e
m
a
 
e
s
 
i
d
e
a
l
 
p
a
r
a
 
c
u
a
l
q
u
i
e
r
 
e
s
c
e
n
a
r
i
o
,
 
p
u
e
d
e
 
s
e
r
 
u
n
 
s
i
s
t
e
m
a
 
s
i
m
p
l
e
 
d
e
 
r
e
s
e
r
v
a
 
d
e
 
u
n
a
 
s
Ã
³
l
a
 
p
r
o
p
i
e
d
a
d
 
h
a
s
t
a
 
u
n
 
s
i
t
i
o
 
c
o
n
 
m
Ã
º
l
t
i
p
l
e
s
 
u
s
u
a
r
i
o
s
,
 
e
n
 
v
a
r
i
o
s
 
i
d
i
o
m
a
s
 
c
o
n
 
m
Ã
º
l
t
i
p
l
e
s
 
p
r
o
p
i
e
d
a
d
e
s
.
 
P
o
r
 
f
a
v
o
r
 
v
e
a
 
l
a
 
s
e
c
c
i
Ã
³
n
 
"
A
y
u
d
a
"
 
a
 
l
a
 
i
z
q
u
i
e
r
d
a
,
 
i
n
c
l
u
y
e
n
d
o
 
l
a
 
p
Ã
¡
g
i
n
a
 
d
e
 
"
C
Ã
³
m
o
 
e
m
p
e
z
a
r
"
 
q
u
e
 
l
e
 
p
u
e
d
e
 
a
y
u
d
a
r
 
c
o
n
 
l
o
s
 
p
r
i
m
e
r
o
s
 
p
a
s
o
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
R
O
B
B
E
D
_
P
O
R
T
A
L
U
I
_
C
U
R
R
E
N
T
_
P
R
O
P
E
R
T
Y
'
,
 
'
P
r
o
p
i
e
d
a
d
 
A
c
t
i
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
T
I
T
L
E
'
,
 
'
A
l
t
e
r
n
a
t
i
v
a
s
 
d
e
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
S
M
T
P
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
D
E
S
C
'
,
 
'
M
a
r
q
u
e
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
c
o
m
o
 
S
i
 
p
a
r
a
 
u
s
a
r
 
c
o
n
f
i
g
u
r
a
c
i
o
n
e
s
 
d
e
 
S
M
T
P
 
a
l
t
e
r
n
a
t
i
v
a
s
.
 
U
n
 
c
r
e
c
i
e
n
t
e
 
n
Ã
º
m
e
r
o
 
d
e
 
a
l
o
j
a
m
i
e
n
t
o
s
 
w
e
b
 
p
a
r
e
c
e
 
q
u
e
 
e
s
t
Ã
¡
n
 
b
l
o
q
u
e
a
n
d
o
 
l
a
 
f
u
n
c
i
o
n
a
l
i
d
a
d
 
d
e
 
P
H
P
 
m
a
i
l
,
 
p
o
r
 
l
o
 
q
u
e
 
p
u
e
d
e
 
e
l
e
g
i
r
 
a
n
u
l
a
r
 
l
a
s
 
c
o
n
f
i
g
u
r
a
c
i
o
n
e
s
 
q
u
e
 
J
o
m
r
e
s
 
a
d
o
p
t
a
 
d
e
 
s
u
 
a
l
o
j
a
m
i
e
n
t
o
 
C
M
S
 
(
j
o
o
m
l
a
)
 
y
 
u
s
a
r
 
l
a
s
 
c
o
n
f
i
g
u
r
a
c
i
o
n
e
s
 
a
 
s
u
 
g
u
s
t
o
.
 
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
H
O
S
T
'
,
 
'
A
l
o
j
a
m
i
e
n
t
o
 
A
l
t
e
r
n
a
t
i
v
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
H
O
S
T
_
D
E
S
C
'
,
 
'
C
a
m
b
i
e
 
e
s
t
o
 
a
 
s
u
 
s
e
r
v
i
d
o
r
 
d
e
 
m
a
i
l
 
S
M
T
P
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
O
R
T
'
,
 
'
P
u
e
r
t
o
 
a
l
t
e
r
n
a
t
i
v
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
O
R
T
_
D
E
S
C
'
,
 
'
c
a
m
b
i
a
r
 
e
s
t
o
 
a
 
s
u
 
p
u
e
r
t
o
 
s
m
t
p
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
R
O
T
O
C
O
L
'
,
 
'
P
r
o
t
o
c
o
l
o
 
A
l
t
e
r
n
a
t
i
v
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
R
O
T
O
C
O
L
_
D
E
S
C
'
,
 
"
D
e
p
e
n
d
i
e
n
d
o
 
d
e
 
s
u
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
d
e
 
s
u
 
s
e
r
v
i
d
o
r
 
s
m
t
p
,
 
d
e
b
e
 
d
e
j
a
r
 
e
s
t
a
 
e
n
 
b
l
a
n
c
o
,
 
o
 
i
n
t
r
o
d
u
c
i
r
 
'
s
s
l
'
 
o
 
'
t
l
s
'
.
 
P
r
e
g
u
n
t
e
 
a
 
s
u
 
p
r
o
v
e
e
d
o
r
 
s
m
t
p
 
s
i
 
l
o
 
d
e
s
c
o
n
o
c
e
.
"
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
A
U
T
H
'
,
 
'
U
s
a
r
 
a
u
t
e
n
t
i
c
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
A
U
T
H
_
D
E
S
C
'
,
 
'
s
i
 
s
u
 
s
e
r
v
i
d
o
r
 
s
m
t
p
 
r
e
q
u
i
e
r
e
 
q
u
e
 
l
o
s
 
c
l
i
e
n
t
e
s
 
s
e
 
c
o
n
e
c
t
e
n
 
m
a
r
q
u
e
 
S
i
.
 
S
e
 
u
s
a
r
Ã
¡
 
e
n
t
o
n
c
e
 
e
l
 
n
o
m
b
r
e
 
d
e
 
u
s
u
a
r
i
o
 
y
 
c
o
n
t
r
a
s
e
Ã
±
a
.
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
U
S
E
R
N
A
M
E
'
,
 
'
U
s
u
a
r
i
o
 
A
l
t
e
r
n
a
t
i
v
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
U
S
E
R
N
A
M
E
_
D
E
S
C
'
,
 
'
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
A
S
S
W
O
R
D
'
,
 
'
C
o
n
t
r
a
s
e
Ã
±
a
 
A
l
t
e
r
n
a
t
i
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
A
S
S
W
O
R
D
_
D
E
S
C
'
,
 
'
'
)
;

j
r
_
d
e
f
i
n
e
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
Q
U
I
C
K
_
I
N
F
O
'
,
 
'
I
n
f
o
r
m
a
c
i
Ã
³
n
 
R
a
p
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
N
U
_
S
H
O
W
'
,
 
'
M
o
s
t
r
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
N
U
_
H
I
D
E
'
,
 
'
O
c
u
l
t
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
D
E
F
A
U
L
T
'
,
 
'
P
o
r
 
d
e
f
e
c
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
A
N
Y
B
O
D
Y
'
,
 
'
C
u
a
l
q
u
i
e
r
a
'
)
;

j
r
_
d
e
f
i
n
e
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
R
E
G
I
S
T
E
R
E
D
'
,
 
'
R
e
g
i
s
t
r
a
d
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
M
A
N
A
G
E
R
'
,
 
'
G
e
s
t
o
r
'
)
;

j
r
_
d
e
f
i
n
e
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
S
U
P
E
R
M
A
N
A
G
E
R
'
,
 
'
S
u
p
e
r
 
G
e
s
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
N
O
B
O
D
Y
'
,
 
'
N
a
d
i
e
'
)
;

j
r
_
d
e
f
i
n
e
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
T
I
T
L
E
'
,
 
'
M
e
n
u
 
d
e
 
c
o
n
t
r
o
l
 
d
e
 
A
c
c
e
s
o
'
)
;

j
r
_
d
e
f
i
n
e
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
D
E
S
C
'
,
 
'
E
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
l
e
 
p
e
r
m
i
t
e
 
c
o
n
t
r
o
l
a
r
 
q
u
i
e
n
 
p
o
d
r
a
 
v
e
r
 
u
n
 
p
l
u
g
i
n
 
e
n
 
e
l
 
m
e
n
u
 
p
r
i
n
c
i
p
a
l
.
 
L
a
s
 
o
p
c
i
o
n
e
s
 
0
0
0
0
9
 
s
o
n
 
v
i
s
i
b
l
e
s
 
p
o
r
 
l
o
s
 
u
s
u
a
r
i
o
s
 
r
e
g
i
s
t
r
a
d
o
 
y
 
n
o
 
r
e
g
i
s
t
r
a
d
o
s
,
 
l
a
s
 
0
0
0
1
0
 
n
o
r
m
a
l
m
e
n
t
e
 
s
o
n
 
p
a
r
a
 
l
a
s
 
a
c
t
i
v
i
d
a
d
e
s
 
d
e
 
r
e
c
e
p
c
i
Ã
³
n
 
q
u
e
 
s
e
 
u
t
l
i
z
a
n
 
h
a
b
i
t
u
a
l
m
e
n
t
e
 
e
n
 
e
l
 
d
i
a
 
a
 
d
i
a
,
 
l
a
s
 
0
0
0
1
1
 
s
e
 
u
s
a
n
 
p
a
r
a
 
d
e
f
i
n
i
r
 
y
 
c
o
n
f
i
g
u
r
a
r
 
u
n
a
 
p
r
o
p
i
e
d
a
d
 
p
e
r
o
 
s
e
 
u
s
a
n
 
m
e
n
o
s
 
a
 
m
e
n
u
d
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
R
E
C
E
P
T
I
O
N
I
S
T
'
,
 
'
R
e
c
e
p
c
i
o
n
i
s
t
a
'
)
;

j
r
_
d
e
f
i
n
e
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
C
O
N
F
I
G
_
T
I
T
L
E
'
,
 
'
C
o
n
t
r
o
l
 
d
e
 
A
c
c
e
s
o
 
T
o
t
a
l
'
)
;

j
r
_
d
e
f
i
n
e
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
C
O
N
F
I
G
_
D
E
S
C
'
,
 
'
M
a
r
q
u
e
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
c
o
m
o
 
S
i
 
p
a
r
a
 
a
c
t
i
v
a
r
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
c
o
n
t
r
o
l
 
d
e
 
a
c
c
e
s
o
 
t
o
t
a
l
,
 
l
u
e
g
o
 
v
i
s
i
t
a
 
e
l
a
 
o
p
c
i
Ã
³
n
 
d
e
 
C
o
n
t
r
o
l
 
d
e
 
A
c
c
e
s
o
 
d
e
b
a
j
o
 
d
e
 
M
a
n
t
e
n
i
m
i
e
n
t
o
 
d
e
l
 
s
i
s
t
e
m
a
 
p
a
r
a
 
p
o
d
e
r
 
c
o
n
f
i
g
u
r
a
r
 
l
o
s
 
c
o
n
t
r
o
l
e
s
 
d
e
 
a
c
c
e
s
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
D
E
S
C
_
A
D
D
E
N
D
U
M
'
,
 
"
O
b
s
e
r
v
e
,
 
s
i
n
 
e
m
b
a
r
g
o
,
 
q
u
e
 
e
s
t
o
s
 
a
j
u
s
t
e
s
 
n
o
 
c
o
n
t
r
o
l
a
n
 
l
o
s
 
s
c
r
i
p
t
s
 
s
u
b
r
a
y
a
d
o
s
 
a
 
l
o
s
 
q
u
e
 
c
o
n
e
c
t
a
n
,
 
a
s
Ã
­
 
p
o
r
 
e
j
e
m
p
l
o
 
s
i
 
a
s
i
g
n
a
 
<
i
>
0
0
0
0
9
u
s
e
r
_
o
p
t
i
o
n
_
0
3
_
s
e
a
r
c
h
<
/
i
>
 
a
l
 
'
G
e
s
t
o
r
'
,
 
u
n
 
u
s
u
a
r
i
o
 
q
u
e
 
c
o
n
o
z
c
a
 
j
o
m
r
e
s
 
p
u
e
d
e
 
a
Ã
º
n
 
h
a
c
e
r
 
u
n
a
 
l
l
a
m
a
d
a
 
a
 
j
0
6
0
0
0
s
e
a
r
c
h
.
c
l
a
s
s
.
p
h
p
 
i
n
t
r
u
c
i
e
n
d
o
 
h
t
t
p
:
/
/
w
w
w
.
d
o
m
a
i
n
.
c
o
m
/
i
n
d
e
x
.
p
h
p
?
o
p
t
i
o
n
=
c
o
m
_
j
o
m
r
e
s
&
t
a
s
k
=
s
e
a
r
c
h
 
e
n
 
s
u
 
b
a
r
r
a
 
d
e
 
n
a
v
e
g
a
c
i
o
n
e
s
.
 
E
s
t
o
 
s
e
 
h
a
c
e
 
a
d
r
e
d
e
,
 
y
a
 
q
u
e
 
e
s
t
e
 
C
o
n
t
r
o
l
 
d
e
 
A
c
c
e
s
o
 
a
 
M
e
n
Ã
º
 
s
i
m
p
l
e
m
e
n
t
e
 
c
o
n
t
r
o
l
a
 
l
o
 
q
u
e
 
p
u
e
d
e
 
s
e
r
 
v
i
s
t
o
 
e
n
 
e
l
 
M
e
n
Ã
º
 
P
r
i
n
c
i
p
a
l
 
d
e
 
J
o
m
r
e
s
.
 
S
i
 
n
e
c
e
s
i
t
a
 
c
o
n
t
r
o
l
e
s
 
m
Ã
¡
s
 
a
j
u
s
t
a
d
o
s
,
 
m
a
r
q
u
e
 
S
i
 
l
a
 
o
p
c
i
Ã
³
n
 
d
e
 
C
o
n
t
r
o
l
 
d
e
 
A
c
c
e
s
o
 
T
o
t
a
l
 
e
n
 
l
a
 
C
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
d
e
l
 
S
i
t
i
o
 
y
 
v
u
e
l
v
a
 
a
 
e
n
t
r
a
r
 
e
l
 
e
l
 
M
e
n
Ã
º
 
d
e
 
C
o
n
t
r
o
l
 
d
e
 
A
c
c
e
s
o
 
.
"
)
;

j
r
_
d
e
f
i
n
e
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
T
I
T
L
E
_
F
U
L
L
'
,
 
'
C
o
n
t
r
o
l
 
T
o
t
a
l
 
d
e
 
A
c
c
e
s
o
'
)
;

j
r
_
d
e
f
i
n
e
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
D
E
S
C
_
F
U
L
L
'
,
 
'
<
s
t
r
o
n
g
>
E
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
e
s
 
p
a
r
a
 
u
s
u
a
r
i
o
s
 
a
v
a
n
z
a
d
o
s
 
s
Ã
³
l
o
.
 
S
i
 
n
o
 
s
a
b
e
 
p
a
r
a
 
q
u
e
 
s
e
 
u
t
i
l
i
z
a
,
 
y
 
n
o
 
t
i
e
n
e
 
u
n
a
 
r
a
z
Ã
³
n
 
e
s
p
e
c
Ã
­
f
i
c
a
 
p
a
r
a
 
u
t
i
l
i
z
a
r
l
o
,
 
p
o
r
 
f
a
v
o
r
 
r
e
g
r
e
s
e
 
a
 
l
a
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
d
e
l
 
s
i
t
i
o
 
y
 
m
a
r
q
u
e
 
N
o
 
e
n
 
l
a
 
c
a
s
i
l
l
a
 
d
e
 
C
o
n
t
r
o
l
 
d
e
 
A
c
c
e
s
o
 
T
o
t
a
l
.
<
/
s
t
r
o
n
g
>
<
b
r
/
>

	
E
s
t
a
 
o
p
c
i
Ã
³
n
 
l
e
 
p
e
r
m
i
t
e
 
c
o
n
t
r
o
l
a
r
 
q
u
i
e
n
 
p
u
e
d
e
 
a
c
c
e
d
e
r
 
a
 
l
o
s
 
m
i
n
i
c
o
m
p
o
n
e
n
t
e
s
 
(
l
o
s
 
c
u
a
l
e
s
 
c
o
n
 
a
l
g
u
n
a
 
e
x
c
e
p
c
i
Ã
³
n
 
e
s
t
Ã
¡
n
 
i
n
s
e
r
t
a
d
o
s
 
e
n
 
e
l
 
n
u
c
l
e
o
 
d
u
r
o
 
d
e
l
 
s
i
s
t
e
m
a
)
.
 
S
i
 
e
l
 
n
i
v
e
l
 
d
e
 
a
c
c
e
s
o
 
m
Ã
¡
s
 
p
r
Ã
³
x
i
m
o
 
a
l
 
n
o
m
b
r
e
 
d
e
 
u
n
 
s
c
r
i
p
t
 
e
s
t
a
 
f
i
j
a
d
o
 
p
o
r
 
d
e
f
e
c
t
o
,
 
e
n
t
o
n
c
e
s
 
l
a
 
o
p
c
i
o
n
 
d
e
 
C
o
n
t
r
o
l
 
d
e
 
A
c
c
e
s
o
 
T
o
t
a
l
 
e
s
t
a
r
Ã
¡
 
d
e
f
i
n
i
d
o
 
c
o
m
o
 
S
i
 
<
s
t
r
o
n
g
>
c
u
a
l
q
u
i
e
r
a
<
/
s
t
r
o
n
g
>
 
p
u
e
d
e
 
a
c
c
e
d
e
r
 
a
 
l
o
s
 
s
c
r
i
p
t
s
 
q
u
e
 
n
o
 
p
o
d
r
Ã
­
a
n
 
a
c
c
e
d
e
r
 
y
 
p
o
r
 
l
o
 
t
a
n
t
o
,
 
s
i
 
p
r
e
t
e
n
d
e
s
 
u
s
a
r
 
e
s
t
a
 
f
u
n
c
i
Ã
³
n
 
D
E
B
E
S
 
m
a
r
c
a
r
 
e
l
 
n
i
v
e
l
 
d
e
 
c
o
n
t
r
o
l
 
d
e
 
a
c
c
e
s
o
 
p
a
r
a
 
<
s
t
r
o
n
g
>
t
o
d
o
s
<
/
s
t
r
o
n
g
>
 
l
o
s
 
m
i
n
i
c
o
m
p
o
n
e
n
t
e
s
 
d
e
 
J
o
m
r
e
s
 
l
i
s
t
a
d
o
s
 
a
q
u
i
.
 
S
i
 
n
o
 
s
a
b
e
 
l
o
 
q
u
e
 
h
a
c
e
n
 
e
s
t
o
s
 
m
i
n
i
c
o
m
p
o
n
e
n
t
e
s
,
 
l
e
 
r
e
c
o
m
e
n
d
a
m
o
s
 
e
n
c
a
r
e
c
i
d
a
m
e
n
t
e
 
q
u
e
 
n
o
 
u
s
e
 
d
e
 
n
i
n
g
u
n
a
 
m
a
n
e
r
a
 
e
s
t
a
 
f
u
n
c
i
o
n
a
l
i
d
a
d
.
<
b
r
/
>

	
E
n
 
J
o
m
r
e
s
,
 
l
o
s
 
n
i
v
e
l
e
s
 
d
e
 
a
c
c
e
s
o
 
s
i
g
u
e
n
 
u
n
a
 
p
i
r
a
,
i
d
e
,
 
p
o
r
 
l
o
 
q
u
e
 
l
o
s
 
S
u
p
e
r
 
M
a
n
a
g
e
r
s
 
s
o
n
 
m
Ã
¡
s
 
g
r
a
n
d
e
s
 
q
u
e
 
l
o
s
 
M
a
n
a
g
e
r
s
.
 
E
n
 
r
e
s
u
m
e
n
 
S
i
p
e
r
 
M
a
n
a
g
e
r
>
M
a
n
a
g
e
r
>
R
e
c
e
p
c
i
o
n
i
s
t
a
>
R
e
g
i
s
t
r
a
d
o
s
>
S
i
n
 
R
e
g
i
s
t
r
o
.
 
P
o
r
 
l
o
 
q
u
e
 
s
i
 
u
n
 
u
s
u
a
r
i
o
 
r
e
g
i
s
t
r
a
d
o
 
t
i
e
n
e
 
a
c
c
e
s
o
 
a
 
u
n
 
m
i
n
i
c
o
m
p
o
n
e
n
t
e
,
 
t
a
m
b
i
Ã
©
n
 
l
o
 
t
i
e
n
e
n
 
e
l
 
r
e
c
e
p
c
i
o
n
i
s
t
a
,
 
e
l
 
m
a
n
a
g
e
r
 
y
 
e
l
 
s
u
p
e
r
 
m
a
n
a
g
e
r
.
<
b
r
/
>

	
O
b
s
e
r
v
e
 
q
u
e
 
n
o
 
p
u
e
d
e
 
c
o
n
t
r
o
l
a
r
 
e
l
 
a
r
e
a
 
d
e
 
a
d
m
i
n
i
s
t
r
a
d
o
r
 
d
e
 
l
o
s
 
m
i
n
i
c
o
m
p
o
n
e
n
t
e
s
.
 
T
o
d
o
 
e
l
 
m
u
n
d
o
 
e
l
 
e
l
 
Ã
¡
r
e
a
 
d
e
 
a
d
m
i
n
i
s
t
r
a
d
o
r
 
e
s
 
c
o
n
s
i
d
e
r
a
d
o
 
c
o
m
o
 
u
n
 
u
s
u
a
r
i
o
 
d
e
 
c
o
n
f
i
a
n
z
a
 
y
 
n
o
 
s
e
 
l
e
s
 
i
m
p
i
d
e
 
e
l
 
a
c
c
e
s
o
 
a
 
n
i
n
g
Ã
º
n
 
s
c
r
i
p
t
 
(
e
s
p
e
c
i
a
l
m
e
n
t
e
 
e
s
t
e
)
.

	
'
)
;

j
r
_
d
e
f
i
n
e
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
S
A
N
I
T
Y
C
H
E
C
K
_
W
A
R
N
I
N
G
'
,
 
'
P
r
e
c
a
u
c
i
Ã
³
n
!
 
T
i
e
n
e
 
a
c
t
i
v
a
d
o
 
e
l
 
c
o
n
t
r
o
l
 
d
e
 
a
c
c
e
s
o
 
t
o
t
a
l
,
 
s
i
n
 
e
m
b
a
r
g
o
 
h
e
m
o
s
 
t
o
m
a
d
o
 
e
n
 
c
u
e
n
t
a
 
l
a
s
 
o
p
c
i
o
n
e
s
 
d
e
l
 
c
o
n
t
r
o
l
 
d
e
 
a
c
c
e
s
o
 
y
 
l
a
s
 
h
e
m
o
s
 
c
o
m
p
a
r
a
d
o
 
c
o
n
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
m
i
n
i
c
o
m
p
o
n
e
n
t
e
s
 
q
u
e
 
d
e
b
e
n
 
s
e
r
 
c
o
n
t
r
o
l
a
d
o
,
 
y
 
l
a
s
 
d
o
s
 
n
o
 
c
o
i
n
c
i
d
e
n
,
 
p
o
r
 
l
o
 
t
a
n
t
o
 
d
e
b
e
 
t
e
n
e
r
 
s
c
r
i
p
t
s
 
q
u
e
 
n
o
 
e
s
t
Ã
¡
n
 
b
a
j
o
 
c
o
n
t
r
o
l
.
 
E
s
t
o
 
p
u
e
d
e
 
s
e
r
 
u
n
 
p
r
o
b
l
e
m
a
 
d
e
 
s
e
g
u
r
i
d
a
d
 
y
 
s
e
 
l
e
 
i
n
s
t
a
 
a
 
r
e
s
o
l
v
e
r
l
o
 
u
r
g
e
n
t
e
m
e
n
t
e
 
v
i
s
i
t
a
n
d
o
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
C
o
n
t
r
o
l
 
d
e
 
A
c
c
e
s
o
 
y
 
c
o
m
p
r
o
b
a
r
 
q
u
e
 
l
o
s
 
n
i
v
e
l
e
s
 
a
p
r
o
p
i
a
d
o
s
 
h
a
n
 
s
i
d
o
 
a
p
l
i
c
a
d
o
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
S
H
O
W
P
R
O
F
I
L
E
S
_
U
S
E
R
S
W
I
T
H
A
C
C
E
S
S
'
,
 
'
U
s
u
a
r
i
o
s
 
c
o
n
 
d
e
r
e
c
h
o
s
 
d
e
 
a
d
m
i
n
i
s
t
r
a
c
i
Ã
³
n
 
d
e
 
e
s
t
a
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
D
E
B
U
G
G
I
N
G
_
Y
O
U
R
E
M
A
I
L
'
,
 
'
s
u
 
d
i
r
e
c
c
i
Ã
³
n
 
e
-
m
a
i
l
'
)
;

j
r
_
d
e
f
i
n
e
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
E
X
T
R
A
S
_
M
O
D
E
L
S
_
M
O
D
E
L
'
,
 
'
M
o
d
e
l
o
'
)
;

j
r
_
d
e
f
i
n
e
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
E
X
T
R
A
S
_
M
O
D
E
L
S
_
P
A
R
A
M
S
'
,
 
'
P
a
r
a
m
e
t
r
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
E
X
T
R
A
S
_
M
O
D
E
L
S
_
F
O
R
C
E
'
,
 
'
F
u
e
r
z
a
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
T
A
T
I
T
L
E
'
,
 
'
M
e
t
a
 
t
i
t
u
l
o
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
T
A
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
M
e
t
a
 
d
e
s
c
r
i
p
t
i
o
n
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
G
I
S
T
R
A
T
I
O
N
_
S
T
E
P
_
2
_
O
F
_
2
'
,
 
'
A
Ã
±
a
d
a
 
s
u
 
p
r
o
p
i
e
d
a
d
 
:
 
P
a
s
o
 
2
 
d
e
 
2
'
)
;

j
r
_
d
e
f
i
n
e
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
C
A
R
T
_
T
I
T
L
E
'
,
 
'
M
i
s
 
r
e
s
e
r
v
a
s
 
p
r
o
p
u
e
s
t
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
A
R
T
_
I
N
F
O
'
,
 
'
O
b
s
e
r
v
e
,
 
e
s
t
a
s
 
r
e
s
e
r
v
a
s
 
a
Ã
º
n
 
n
o
 
h
a
 
s
i
d
o
 
g
u
a
r
d
a
d
a
s
.
 
S
i
 
s
e
 
d
d
e
s
c
o
n
e
c
t
a
 
o
 
s
u
 
s
e
s
i
Ã
³
n
 
e
x
p
i
r
a
 
s
e
 
p
e
r
d
e
r
Ã
¡
.
 
R
e
c
u
e
r
d
e
 
c
o
n
f
i
r
m
a
r
 
s
u
s
 
r
e
s
e
r
v
a
s
!
!
!
'
)
;

j
r
_
d
e
f
i
n
e
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
C
A
R
T
_
C
O
N
F
I
R
M
_
B
O
O
K
I
N
G
S
'
,
 
'
C
o
n
f
i
r
m
a
r
 
r
e
s
e
r
v
a
(
s
)
'
)
;

j
r
_
d
e
f
i
n
e
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
C
A
R
T
_
O
R
'
,
 
'
 
o
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
A
R
T
_
S
A
V
E
F
O
R
L
A
T
E
R
'
,
 
'
G
u
a
r
d
a
r
 
p
a
r
a
 
m
Ã
¡
s
 
t
a
r
d
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
A
R
T
_
N
O
B
O
O
K
I
N
G
S
_
S
A
V
E
D
'
,
 
'
N
o
 
t
i
e
n
e
 
r
e
s
e
r
v
a
s
 
g
u
a
r
d
a
d
a
s
 
a
Ã
º
n
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
A
R
T
_
V
I
E
W
C
A
R
T
'
,
 
'
V
e
r
 
c
a
r
r
i
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
S
P
E
C
I
F
I
C
_
L
A
N
G
U
A
G
E
S
U
B
D
I
R
'
,
 
'
S
u
b
d
i
r
e
c
t
o
r
i
o
 
d
e
 
a
r
c
h
i
v
o
s
 
d
e
 
i
d
i
o
m
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
D
E
F
A
U
L
T
_
L
A
T
_
S
T
A
R
T
P
O
I
N
T
'
,
 
'
P
u
n
t
o
 
d
e
 
i
n
i
c
i
o
 
d
e
 
l
a
 
L
a
t
i
t
u
d
 
p
o
r
 
d
e
f
e
c
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
D
E
F
A
U
L
T
_
L
O
N
G
_
S
T
A
R
T
P
O
I
N
T
'
,
 
'
P
u
n
t
o
 
d
e
 
i
n
i
c
i
o
 
d
e
 
l
a
 
L
o
n
g
i
t
u
d
 
p
o
r
 
d
e
f
e
c
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
D
E
F
A
U
L
T
_
L
A
T
L
O
N
G
S
T
A
R
T
P
O
I
N
T
_
D
E
S
C
'
,
 
'
Â
¿
C
u
Ã
¡
l
 
d
e
b
e
 
s
e
r
 
l
a
 
l
o
n
g
i
t
u
d
/
l
a
t
i
t
u
d
 
p
o
r
 
d
e
f
e
c
t
o
 
e
n
 
e
l
 
m
a
p
a
 
d
e
 
G
o
o
g
l
e
 
e
n
 
l
a
 
p
a
g
i
n
a
 
d
e
 
e
d
i
t
a
r
 
p
r
o
p
i
e
d
a
d
e
s
,
 
a
n
t
e
s
 
d
e
 
q
u
e
 
l
a
 
m
a
r
c
a
 
h
a
y
a
 
s
i
d
o
 
m
o
v
i
d
a
?
'
)
;

j
r
_
d
e
f
i
n
e
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
S
Y
S
T
E
M
_
E
M
A
I
L
S
'
,
 
'
Â
¿
D
e
s
d
e
 
q
u
Ã
©
 
d
i
r
e
c
c
i
Ã
³
n
 
s
e
 
e
n
v
i
a
n
 
l
o
s
 
e
-
m
a
i
l
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
S
Y
S
T
E
M
_
E
M
A
I
L
S
_
D
E
S
C
'
,
 
'
D
e
j
e
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
e
n
 
b
l
a
n
c
o
 
p
a
r
a
 
d
e
s
a
c
t
i
v
a
r
l
a
.
 
J
o
m
r
e
s
 
u
s
a
r
a
 
l
a
 
d
i
r
e
c
c
i
o
n
 
(
e
s
)
 
d
e
l
 
h
o
t
e
l
 
c
u
a
n
d
o
 
e
n
v
i
e
 
e
m
a
i
l
s
 
a
 
l
o
s
 
c
l
i
e
n
t
e
s
,
 
s
i
n
 
e
m
b
a
r
g
o
 
s
u
 
s
e
r
v
i
c
i
o
 
d
e
 
e
m
a
i
l
 
p
u
e
d
e
 
n
o
 
a
c
e
p
t
a
r
 
e
m
a
i
l
s
 
d
e
s
d
e
 
d
i
r
e
c
c
i
o
n
e
s
 
a
r
b
i
t
r
a
r
i
a
s
 
(
e
j
.
 
s
Ã
³
l
o
 
a
d
m
i
t
e
n
 
m
a
i
l
s
 
d
e
 
u
n
a
 
d
i
r
e
c
c
i
Ã
³
n
 
a
u
t
o
r
i
z
a
d
a
)
.
 
E
n
 
e
s
e
 
c
a
s
o
m
 
p
u
e
d
e
 
u
s
a
r
 
e
s
t
e
 
c
a
m
p
o
 
p
a
r
a
 
i
n
t
r
o
d
u
c
i
r
 
u
n
a
 
d
i
r
e
c
c
i
Ã
³
n
 
q
u
e
 
s
e
 
i
n
t
r
o
d
u
c
i
r
Ã
¡
 
e
n
 
e
l
 
c
a
m
p
o
 
D
E
S
D
E
 
p
a
r
a
 
t
o
d
o
s
 
l
o
s
 
e
m
a
i
l
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
L
I
S
T
_
L
A
Y
O
U
T
_
L
I
S
T
'
,
 
'
V
e
r
 
c
o
m
o
 
l
i
s
t
a
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
L
I
S
T
_
L
A
Y
O
U
T
_
T
I
L
E
'
,
 
'
V
e
r
 
c
o
m
o
 
F
o
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
P
A
R
E
'
,
 
'
C
o
m
p
a
r
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
M
O
V
E
'
,
 
'
B
o
r
r
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
T
U
R
N
_
T
O
_
R
E
S
U
L
T
S
'
,
 
'
V
o
l
v
e
r
 
a
 
l
o
s
 
r
e
s
u
l
t
a
d
o
s
 
d
e
 
b
Ã
º
s
q
u
e
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
A
D
D
T
O
S
H
O
R
T
L
I
S
T
'
,
 
'
A
Ã
±
a
d
i
r
 
a
 
L
i
s
t
a
 
r
e
s
u
m
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
M
O
V
E
F
R
O
M
S
H
O
R
T
L
I
S
T
'
,
 
'
B
o
r
r
a
r
 
d
e
 
l
i
s
t
a
 
r
e
s
u
m
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
V
I
E
W
S
H
O
R
T
L
I
S
T
'
,
 
'
V
e
a
 
s
u
 
L
i
s
t
a
 
r
e
s
u
m
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
O
K
I
E
P
O
L
I
C
Y
_
1
'
,
 
'
I
m
p
o
r
t
a
n
t
e
:
 
P
o
l
Ã
­
t
i
c
a
 
d
e
 
C
o
o
k
i
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
O
K
I
E
P
O
L
I
C
Y
_
2
'
,
 
'
U
s
a
m
o
s
 
c
o
o
k
i
e
s
 
p
a
r
a
 
a
y
u
d
a
r
 
a
 
m
a
n
t
e
n
e
r
 
n
u
e
s
t
r
o
 
s
i
t
i
o
 
r
e
l
e
v
a
n
t
e
 
y
 
f
Ã
¡
c
i
l
 
d
e
 
u
s
a
r
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
O
K
I
E
P
O
L
I
C
Y
_
3
'
,
 
'
L
e
e
r
 
m
Ã
¡
s
.
.
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
O
K
I
E
P
O
L
I
C
Y
_
4
'
,
 
'
L
a
 
l
e
g
i
s
l
a
c
i
Ã
³
n
 
E
u
r
o
p
e
a
 
r
e
q
u
i
e
r
e
 
q
u
e
 
t
o
d
a
s
 
l
a
s
 
w
e
b
s
 
e
s
p
e
c
i
f
i
q
u
e
n
 
c
l
a
r
a
m
e
n
t
e
 
s
i
 
s
e
 
u
s
a
n
 
c
o
o
k
i
e
s
 
y
 
e
l
 
p
r
o
p
Ã
³
s
i
t
o
 
d
e
 
l
a
s
 
m
i
s
m
a
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
O
K
I
E
P
O
L
I
C
Y
_
5
'
,
 
'
E
l
 
m
o
t
o
r
 
d
e
 
r
e
s
e
r
v
a
s
 
y
 
b
Ã
º
s
q
u
e
d
a
 
d
e
 
l
a
 
p
Ã
¡
g
i
n
a
 
n
e
c
e
s
i
t
a
 
s
e
r
 
c
a
p
a
z
 
d
e
 
r
e
c
o
r
d
a
r
 
l
a
s
 
o
p
c
i
o
n
e
s
 
q
u
e
 
h
a
s
 
e
l
e
g
i
d
o
 
p
a
r
a
 
p
o
d
e
r
 
t
r
a
b
a
j
a
r
 
d
e
 
l
a
 
m
e
j
o
r
 
m
a
n
e
r
a
 
p
o
s
i
b
l
e
.
 
P
a
r
a
 
e
l
l
o
,
 
n
e
c
e
s
i
t
a
 
a
l
m
a
c
e
n
a
r
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
q
u
e
 
e
s
t
Ã
¡
 
a
s
o
c
i
a
d
a
 
a
 
u
n
 
p
e
q
u
e
Ã
±
o
 
a
r
c
h
i
v
o
 
l
l
a
m
a
d
o
 
"
c
o
o
k
i
e
"
 
q
u
e
 
Ã
º
n
i
c
a
m
e
n
t
e
 
i
d
e
n
t
i
f
i
c
a
 
s
u
 
n
a
v
e
g
a
d
o
r
,
 
y
 
p
a
r
a
 
p
o
d
e
r
 
h
a
c
e
r
l
o
,
 
n
e
c
e
s
i
t
a
m
o
s
 
q
u
e
 
a
c
e
p
t
e
 
q
u
e
 
p
o
d
e
m
o
s
 
u
t
i
l
i
z
a
r
l
a
.
 
S
i
 
n
o
 
a
c
e
p
t
a
 
e
s
t
a
 
p
o
l
Ã
­
t
i
c
a
 
d
e
 
c
o
o
k
i
e
s
 
e
n
t
o
n
c
e
s
 
s
e
 
v
e
r
Ã
¡
 
s
e
v
e
r
a
m
e
n
t
e
 
l
i
m
i
t
a
d
o
 
e
n
 
l
o
 
q
u
e
 
p
u
e
d
e
 
h
a
c
e
r
 
e
n
 
l
a
 
p
Ã
¡
g
i
n
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
O
K
I
E
P
O
L
I
C
Y
_
6
'
,
 
'
S
i
,
 
a
c
e
p
t
o
 
e
l
 
u
s
o
 
d
e
 
c
o
o
k
i
e
s
 
s
e
g
Ã
º
n
 
l
o
 
e
x
p
u
e
s
t
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
D
E
P
O
S
I
T
_
F
I
R
S
T
N
I
G
H
T
C
O
S
T
'
,
 
'
Â
¿
E
l
 
d
e
p
Ã
³
s
i
t
o
 
r
e
q
u
e
r
i
d
o
 
e
s
 
e
l
 
c
o
s
t
e
 
d
e
 
l
a
 
p
r
i
m
e
r
a
 
n
o
c
h
e
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
D
E
P
O
S
I
T
_
F
I
R
S
T
N
I
G
H
T
C
O
S
T
_
D
E
S
C
'
,
 
'
L
o
s
 
p
r
e
c
i
o
s
 
s
e
 
c
a
l
c
u
l
a
 
e
n
 
b
a
s
e
 
a
 
p
o
r
 
n
o
c
h
e
.
 
Â
¿
Q
u
i
e
r
e
 
q
u
e
 
e
l
 
d
e
p
Ã
³
s
i
t
o
 
s
e
a
 
e
l
 
c
a
r
g
o
 
p
o
r
 
u
n
a
 
n
o
c
h
e
?
.
 
S
i
 
e
s
 
a
s
Ã
­
,
 
p
u
e
d
e
 
i
g
n
o
r
a
r
 
l
a
s
 
s
i
g
u
i
e
n
t
e
s
 
o
p
c
i
o
n
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
N
O
T
H
I
N
G
I
N
S
H
O
R
T
L
I
S
T
'
,
 
'
Y
N
o
 
h
a
 
a
Ã
±
a
d
i
d
o
 
n
i
n
g
Ã
º
n
 
a
r
t
Ã
­
c
u
l
o
 
a
 
s
u
 
l
i
s
t
a
 
r
e
s
u
m
i
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
S
A
F
E
M
O
D
E
'
,
 
'
Â
¿
A
c
t
i
v
a
r
 
m
o
d
o
 
s
e
g
u
r
o
?
'
)
;

j
r
_
d
e
f
i
n
e
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
S
A
F
E
M
O
D
E
_
D
E
S
C
'
,
 
'
M
a
r
q
u
e
 
S
i
 
p
a
r
a
 
c
a
m
b
i
a
r
 
a
 
m
o
d
o
 
s
e
g
u
r
o
.
 
D
e
s
a
c
t
i
v
a
r
Ã
¡
 
t
o
d
o
s
 
l
o
s
 
p
l
u
g
i
n
s
 
y
 
J
o
m
r
e
s
 
s
Ã
³
l
o
 
u
t
i
l
i
z
a
r
Ã
¡
 
l
a
s
 
f
u
n
c
i
o
n
a
l
i
d
a
d
e
s
 
d
e
l
 
n
Ã
º
c
l
e
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
I
C
E
_
O
N
_
A
P
P
L
I
C
A
T
I
O
N
'
,
 
'
P
E
A
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
N
E
X
T
'
,
 
'
S
i
g
u
i
e
n
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
C
A
N
C
E
L
'
,
 
'
C
a
n
c
e
l
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
S
U
B
M
I
T
'
,
 
'
E
n
v
i
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
S
A
V
E
'
,
 
'
G
u
a
r
d
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
D
E
L
E
T
E
'
,
 
'
B
o
r
r
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
R
E
T
U
R
N
'
,
 
'
V
o
l
v
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
C
L
O
S
E
'
,
 
'
C
e
r
r
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
B
A
C
K
'
,
 
'
A
t
r
Ã
¡
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
H
O
M
E
'
,
 
'
I
n
i
c
i
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
N
E
W
'
,
 
'
N
u
e
v
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
S
E
N
D
'
,
 
'
E
n
v
i
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
R
E
C
A
P
T
C
H
A
_
T
I
T
L
E
'
,
 
'
r
e
C
a
p
t
c
h
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
R
E
C
A
P
T
C
H
A
_
I
N
F
O
'
,
 
'
C
a
p
t
c
h
a
 
s
e
 
u
s
a
 
p
a
r
a
 
a
s
e
g
u
r
a
r
s
e
 
d
e
 
q
u
e
 
e
l
 
c
l
i
e
n
t
e
 
q
u
e
 
u
s
a
 
l
o
s
 
f
o
r
m
u
l
a
r
i
o
s
 
w
e
b
 
e
s
 
h
u
m
a
n
o
,
 
y
 
s
e
 
u
s
a
 
p
a
r
a
 
e
v
i
t
a
r
 
q
u
e
 
a
 
l
o
s
 
g
e
s
t
o
r
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
l
e
s
 
l
l
e
n
e
n
 
d
e
 
S
p
a
m
 
r
o
b
o
t
s
 
d
e
 
i
n
t
e
r
n
e
t
.
 
P
a
r
a
 
u
s
a
r
 
e
l
 
f
o
r
m
u
l
a
r
i
o
 
d
e
 
c
o
n
t
a
c
t
o
 
d
e
 
J
o
m
r
e
s
 
d
e
b
e
r
Ã
¡
s
 
r
e
g
i
s
t
r
a
r
t
e
 
e
n
 
<
a
 
h
r
e
f
=
"
h
t
t
p
:
/
/
w
w
w
.
g
o
o
g
l
e
.
c
o
m
/
r
e
c
a
p
t
c
h
a
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
t
h
e
 
G
o
o
g
l
e
 
r
e
C
a
p
t
c
h
a
<
/
a
>
 
y
 
c
o
n
f
i
g
u
r
a
r
 
t
u
 
d
o
m
i
n
i
o
 
p
a
r
a
 
r
e
c
i
b
i
r
 
l
a
 
c
l
a
v
e
 
p
Ã
º
b
l
i
c
a
 
y
 
p
r
i
v
a
d
a
.
 
C
u
a
n
d
o
 
r
e
c
i
b
a
 
e
s
t
a
s
 
c
l
a
v
e
s
,
 
p
o
r
 
f
a
v
o
r
 
i
n
t
r
o
d
u
z
c
a
l
a
s
 
m
Ã
¡
s
 
a
b
a
j
o
.
 
E
l
 
s
e
r
v
i
c
i
o
 
r
e
C
a
p
c
h
a
 
e
s
 
g
r
a
t
u
i
t
o
 
y
 
l
o
 
p
r
o
v
e
e
 
G
o
o
g
l
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
R
E
C
A
P
T
C
H
A
_
P
U
B
L
I
C
_
K
E
Y
'
,
 
'
C
l
a
v
e
 
P
Ã
º
b
l
i
c
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
R
E
C
A
P
T
C
H
A
_
P
R
I
V
A
T
E
_
K
E
Y
'
,
 
'
C
l
a
v
e
 
P
r
i
v
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
L
O
C
K
_
T
I
T
L
E
'
,
 
'
T
i
e
m
p
o
 
d
e
 
e
s
p
e
r
a
 
d
e
 
b
l
o
q
u
e
o
 
d
e
 
a
r
c
h
i
v
o
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
L
O
C
K
_
D
E
S
C
'
,
 
'
P
a
r
a
 
e
v
i
t
a
r
 
e
l
 
p
e
l
i
g
r
o
 
d
e
 
q
u
e
 
l
o
s
 
u
s
u
a
r
i
o
s
 
h
a
g
a
n
 
u
n
a
 
r
e
s
e
r
v
a
 
d
o
b
l
e
,
 
J
o
m
r
e
s
 
u
s
a
 
u
n
 
f
i
c
h
e
r
o
 
d
e
 
b
l
o
q
u
e
o
 
p
a
r
a
 
e
v
i
t
a
r
 
q
u
e
 
u
n
a
 
h
a
b
i
t
a
c
i
Ã
³
n
 
s
e
a
 
a
Ã
±
a
d
i
d
a
 
a
 
l
a
 
l
i
s
t
a
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
d
i
s
p
o
n
i
b
l
e
s
 
e
n
 
e
l
 
f
o
r
m
u
l
a
r
i
o
 
d
e
 
r
e
s
e
r
v
a
 
s
i
 
a
l
g
u
i
e
n
 
m
Ã
±
a
s
 
h
a
 
a
Ã
±
a
d
i
d
o
 
d
i
c
h
a
 
h
a
b
i
t
a
c
i
Ã
³
n
 
a
l
 
s
u
y
o
 
l
a
 
m
i
s
m
a
 
f
e
c
h
a
.
 
P
o
r
 
d
e
f
e
n
c
t
o
 
e
s
t
e
 
b
l
o
q
u
e
o
 
s
e
 
d
e
s
a
c
t
i
v
a
r
Ã
¡
 
e
n
 
3
6
0
0
 
s
e
g
u
n
d
o
s
 
o
 
u
n
a
 
h
o
r
a
.
 
P
u
e
d
e
 
c
a
m
b
i
a
r
 
e
l
 
t
i
e
m
p
o
 
d
e
 
e
s
t
e
 
f
i
c
h
e
r
o
 
d
e
 
b
l
o
q
u
e
o
 
c
a
m
b
i
a
n
d
o
 
e
s
t
a
 
c
a
s
i
l
l
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
T
S
T
R
A
P
S
W
I
T
C
H
'
,
 
"
Â
¿
'
A
c
t
i
v
a
r
 
l
a
s
 
p
l
a
n
t
i
l
l
a
s
 
b
o
o
t
s
t
r
a
p
 
d
e
 
J
o
m
r
e
s
'
 
y
 
s
u
s
 
f
u
n
c
i
o
n
a
l
i
d
a
d
e
s
?
"
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
A
C
T
I
O
N
'
,
 
'
A
c
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
V
I
E
W
'
,
 
'
V
i
s
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
B
A
C
K
T
O
T
O
P
'
,
 
'
V
o
l
v
e
r
 
a
r
r
i
b
a
'
)
;

j
r
_
d
e
f
i
n
e
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
P
U
T
F
I
L
T
E
R
I
N
G
_
L
E
V
E
L
_
W
E
A
K
'
,
 
'
D
Ã
©
b
i
l
'
)
;

j
r
_
d
e
f
i
n
e
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
P
U
T
F
I
L
T
E
R
I
N
G
_
L
E
V
E
L
_
S
T
R
O
N
G
'
,
 
'
F
u
e
r
t
e
'
)
;

j
r
_
d
e
f
i
n
e
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
P
U
T
F
I
L
T
E
R
I
N
G
'
,
 
'
F
i
l
t
r
a
d
o
 
d
e
 
E
n
t
r
a
d
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
P
U
T
F
I
L
T
E
R
I
N
G
_
L
E
V
E
L
_
T
I
T
L
E
'
,
 
'
N
i
v
e
l
 
d
e
 
f
i
l
t
r
a
d
o
 
d
e
 
E
n
t
r
a
d
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
P
U
T
F
I
L
T
E
R
I
N
G
_
L
E
V
E
L
_
D
E
S
C
'
,
 
"
L
a
 
m
a
y
o
r
Ã
­
a
 
d
e
 
l
o
s
 
d
a
t
o
s
 
i
n
t
r
o
d
u
c
i
d
o
s
 
e
n
 
e
l
 
s
i
s
t
e
m
a
 
s
e
 
l
i
m
p
i
a
 
p
r
i
m
e
r
o
 
q
u
i
t
a
n
d
o
 
l
a
s
 
e
t
i
q
u
e
t
a
s
 
h
t
m
l
,
 
l
u
e
g
o
 
u
s
a
n
d
o
 
l
a
 
f
u
n
c
i
o
n
a
l
i
d
a
d
 
d
e
 
f
i
l
t
r
a
d
o
 
d
e
 
v
a
r
i
b
l
e
s
 
P
H
P
 
p
a
r
a
 
h
a
c
e
r
 
l
o
s
 
d
a
t
o
s
 
m
Ã
¡
s
 
s
e
g
u
r
o
s
 
a
n
t
e
s
 
d
e
 
q
u
e
 
s
e
 
i
n
t
r
o
d
u
z
c
a
n
 
e
n
 
l
a
 
b
a
s
e
 
d
e
 
d
a
t
o
s
.
 
U
s
t
e
d
 
p
u
e
d
e
 
q
u
e
r
e
r
 
p
e
r
m
i
t
i
r
 
c
i
e
r
t
a
s
 
e
n
t
r
a
d
a
s
 
(
p
o
r
 
e
j
e
m
p
l
o
 
e
n
t
r
a
d
a
s
 
d
e
 
t
e
x
t
o
 
e
n
 
l
o
s
 
d
e
t
a
l
l
e
s
 
d
e
 
p
Ã
¡
g
i
n
a
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
)
 
p
a
r
a
 
i
n
c
l
u
i
r
 
H
T
M
L
.
 
H
a
y
 
d
o
s
 
n
i
v
e
l
e
s
 
d
e
 
f
i
l
t
r
a
d
a
 
q
u
e
 
p
u
e
d
e
 
u
s
a
r
 
e
n
 
e
s
t
a
 
e
n
t
r
a
d
a
,
 
b
i
e
n
 
d
Ã
©
b
i
l
 
o
 
f
u
e
r
t
e
.
 
S
Ã
³
l
o
 
d
e
b
e
r
Ã
¡
 
u
s
a
r
 
l
a
 
o
p
c
i
Ã
³
n
 
D
Ã
©
b
i
l
 
s
i
 
e
l
 
u
s
u
a
r
i
o
 
q
u
e
 
i
n
t
r
o
d
u
c
e
 
d
a
t
o
s
 
e
s
 
d
e
 
c
o
n
f
i
a
n
z
a
,
 
c
o
m
o
 
c
o
m
p
a
Ã
±
e
r
o
s
 
a
d
m
i
n
i
s
t
r
a
d
o
r
e
s
 
d
e
 
s
i
s
t
e
m
a
,
 
d
e
 
o
t
r
a
 
m
a
n
e
r
a
 
d
e
b
e
 
d
e
j
a
r
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
c
o
m
o
 
f
u
e
r
t
e
.
 
C
u
n
a
d
o
 
l
o
 
m
a
r
q
u
e
 
c
o
m
o
 
f
u
e
r
t
e
 
(
r
e
c
o
m
e
n
d
a
d
o
)
 
p
u
e
d
e
 
e
s
p
e
c
i
f
i
c
a
r
 
q
u
e
 
e
t
i
q
u
e
t
a
s
 
p
e
r
m
i
t
i
r
 
e
d
i
t
a
n
d
o
 
l
a
 
s
i
g
u
i
e
n
t
e
 
o
p
c
i
Ã
³
n
 
'
P
u
r
i
f
i
c
a
d
o
r
 
H
T
M
L
 
d
e
 
e
t
i
q
u
e
t
a
s
 
p
e
r
m
i
t
i
d
a
s
'
.
 
"
)
;

j
r
_
d
e
f
i
n
e
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
P
U
T
F
I
L
T
E
R
I
N
G
_
P
U
R
I
F
I
E
R
_
A
L
L
O
W
E
D
_
T
I
T
L
E
'
,
 
'
E
t
i
q
u
e
t
a
s
 
d
e
 
E
n
t
r
a
d
a
 
p
e
r
m
i
t
i
d
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
P
U
T
F
I
L
T
E
R
I
N
G
_
P
U
R
I
F
I
E
R
_
A
L
L
O
W
E
D
_
D
E
S
C
'
,
 
"
P
u
e
d
e
 
e
d
i
t
a
r
 
l
a
s
 
e
t
i
q
u
e
t
a
s
 
q
u
e
 
e
l
 
p
u
r
i
f
i
c
a
d
o
r
 
d
e
 
h
t
m
l
 
a
c
e
o
t
a
r
Ã
¡
 
a
 
t
r
a
v
Ã
©
s
 
d
e
 
s
u
 
s
i
s
t
e
m
a
 
d
e
 
f
i
l
t
r
a
d
o
.
 
P
o
r
 
d
e
f
e
c
t
o
 
s
o
n
'
p
,
b
,
s
t
r
o
n
g
,
a
[
h
r
e
f
]
,
i
'
 
(
p
o
r
 
e
j
e
m
p
l
o
.
 
P
a
r
r
a
f
o
,
 
N
e
g
r
i
t
a
,
 
M
a
r
c
a
d
o
,
 
E
n
l
a
c
e
s
 
y
 
C
u
r
s
i
v
a
s
)
.
 
P
a
r
a
 
m
Ã
¡
s
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
d
e
 
e
t
i
q
u
e
t
a
s
 
p
e
r
m
i
t
i
d
a
s
,
 
p
o
r
 
f
a
v
o
r
 
l
e
a
 
l
a
 
d
o
c
u
m
e
n
t
a
c
i
Ã
³
n
 
d
e
l
 
p
u
r
i
f
i
c
a
d
o
r
 
H
T
M
L
 
e
n
<
a
 
h
r
e
f
=
'
h
t
t
p
:
/
/
h
t
m
l
p
u
r
i
f
i
e
r
.
o
r
g
'
 
t
a
r
g
e
t
=
'
_
b
l
a
n
k
'
>
h
t
m
l
p
u
r
i
f
i
e
r
.
o
r
g
<
/
a
>
.
 
P
u
e
d
e
 
c
a
m
b
i
a
r
 
e
s
t
a
 
o
p
c
i
Ã
³
n
,
 
p
e
r
o
 
l
e
 
r
e
c
o
m
e
n
d
a
m
o
s
 
q
u
e
 
l
a
 
d
e
j
e
 
l
a
 
q
u
e
 
v
i
e
n
e
 
p
o
r
 
d
e
f
e
c
t
o
.
"
)
;

j
r
_
d
e
f
i
n
e
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
P
U
T
F
I
L
T
E
R
I
N
G
_
I
N
P
U
T
S
_
T
I
T
L
E
'
,
 
'
E
n
t
r
a
d
a
s
 
p
e
r
m
i
t
i
d
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
P
U
T
F
I
L
T
E
R
I
N
G
_
I
N
P
U
T
S
_
D
E
S
C
'
,
 
"
P
u
e
d
e
 
d
e
f
i
n
i
r
 
q
u
e
 
e
n
t
r
a
d
a
s
 
d
e
 
f
o
r
m
u
l
a
r
i
o
s
 
p
e
r
m
i
t
i
r
a
n
 
h
t
m
l
 
e
d
i
t
a
n
d
o
 
e
s
t
a
 
o
p
c
i
Ã
³
n
,
 
c
u
a
l
q
u
i
e
r
 
e
n
t
r
a
d
a
 
a
Ã
±
a
d
i
d
a
 
a
 
e
s
t
a
 
l
i
s
t
a
 
s
e
r
Ã
¡
 
a
n
a
l
i
z
a
d
a
 
a
 
t
r
a
v
Ã
©
s
 
d
e
l
 
p
u
r
i
f
i
c
a
d
o
r
 
H
T
M
L
 
e
n
 
l
u
g
a
r
 
d
e
 
t
e
n
e
r
 
t
o
d
o
 
e
l
 
H
t
m
l
 
s
e
p
a
r
a
d
o
.
 
P
o
r
 
d
e
f
e
c
t
o
 
e
s
:
 
'
d
e
s
c
r
i
p
c
i
o
n
_
p
r
o
p
i
e
d
a
d
 
h
o
r
a
s
_
e
n
t
r
a
d
a
_
p
r
o
p
i
e
d
a
d
 
_
a
c
t
i
v
i
d
a
d
e
s
_
a
r
e
a
_
p
r
o
p
i
e
d
a
d
 
d
i
r
e
c
c
i
o
n
_
c
o
n
d
u
c
i
e
n
d
o
_
p
r
o
p
i
e
d
a
d
 
a
u
e
r
o
p
u
e
r
t
o
s
_
p
r
o
p
i
e
d
a
d
 
o
t
r
o
s
t
r
a
n
s
p
o
r
t
e
s
_
p
r
o
p
i
e
d
a
d
 
p
o
l
i
t
i
c
a
s
r
e
c
l
a
m
a
c
i
o
n
_
p
r
o
p
i
e
d
a
d
'
.
 
A
Ã
±
a
d
a
 
m
Ã
¡
s
 
e
n
t
r
a
d
a
s
 
a
Ã
±
a
d
i
e
n
d
o
 
s
u
 
n
o
m
b
r
e
 
d
e
 
f
o
r
m
u
l
a
r
i
o
 
s
e
p
a
r
a
d
o
 
p
o
r
 
u
n
 
e
s
p
a
c
i
o
.
"
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
_
I
N
T
A
B
S
_
T
I
T
L
E
'
,
 
'
Â
¿
D
e
t
a
l
l
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
e
n
 
p
e
s
t
a
Ã
±
a
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
_
I
N
T
A
B
S
_
D
E
S
C
'
,
 
'
M
a
r
q
u
e
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
p
a
r
a
 
m
o
s
t
r
a
r
 
l
o
s
 
d
e
t
a
l
l
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
e
n
 
p
e
s
t
a
Ã
±
a
s
.
 
M
a
r
q
u
e
 
N
o
 
s
i
 
l
a
s
 
q
u
i
e
r
e
 
v
i
s
u
a
l
i
z
a
r
 
s
i
n
 
p
e
s
t
a
Ã
±
a
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
R
I
N
T
'
,
 
'
I
m
p
r
i
m
i
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
E
D
I
T
'
,
 
'
E
d
i
t
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
C
O
P
Y
'
,
 
'
C
o
p
i
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
T
S
T
R
A
P
S
W
I
T
C
H
_
I
N
F
O
'
,
 
'
J
o
o
m
l
a
 
3
 
i
i
n
c
l
u
y
e
 
e
l
 
b
o
o
t
s
t
r
a
p
 
d
e
 
t
w
i
t
t
e
r
 
p
o
r
 
d
e
f
e
c
t
o
,
y
 
J
o
m
r
e
s
 
t
i
e
n
e
 
p
l
a
n
t
i
l
l
a
s
 
y
 
f
u
n
c
i
o
n
a
l
i
d
a
d
e
s
 
q
u
e
 
u
s
a
r
Ã
¡
n
 
e
s
t
a
s
 
p
l
a
n
t
i
l
l
a
s
.
 
P
o
r
 
d
e
f
e
c
t
o
 
s
i
 
u
s
a
 
H
o
m
r
e
s
 
e
n
 
j
o
o
m
l
a
 
3
 
p
u
d
e
 
a
Ã
º
n
 
o
p
t
a
r
 
p
o
r
 
u
s
a
r
 
l
a
s
 
p
l
a
n
t
i
l
l
a
s
 
B
o
o
t
s
t
r
a
p
 
d
e
 
J
o
m
r
e
s
 
y
 
s
u
s
 
f
u
n
c
i
o
n
a
l
i
d
a
d
e
s
,
 
s
i
n
 
e
m
b
a
r
g
o
 
p
o
r
 
d
e
f
e
c
t
o
 
e
s
t
a
s
 
o
p
c
i
o
n
e
s
 
e
s
t
Ã
¡
n
 
m
a
r
c
a
d
a
s
 
c
o
m
o
 
N
O
.
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
T
S
T
R
A
P
S
W
I
T
C
H
_
F
R
O
N
T
E
N
D
'
,
 
'
J
o
m
r
e
s
 
u
t
i
l
i
z
a
r
 
p
l
a
n
t
i
l
l
a
s
 
d
e
 
a
r
c
h
i
v
o
s
 
d
e
 
i
n
i
c
i
o
 
e
n
 
l
a
 
i
n
t
e
r
f
a
z
?
'
)
;

j
r
_
d
e
f
i
n
e
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
A
L
T
E
R
N
A
T
I
V
E
_
S
E
A
R
C
H
_
R
E
S
U
L
T
S
'
,
 
'
A
q
u
i
 
e
s
t
Ã
¡
n
 
a
l
g
u
n
a
s
 
a
l
t
e
r
n
a
t
i
v
a
s
 
q
u
e
 
q
u
i
z
Ã
¡
s
 
q
u
i
e
r
a
 
c
o
n
s
i
d
e
r
a
r
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
O
N
F
I
G
C
O
U
N
T
R
I
E
S
_
A
U
T
O
D
E
T
E
C
T
'
,
 
'
Â
¿
A
u
t
o
-
d
e
t
e
c
t
a
r
 
e
l
 
p
a
Ã
­
s
 
d
e
 
l
o
s
 
c
l
i
e
n
t
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
O
N
F
I
G
C
O
U
N
T
R
I
E
S
_
A
U
T
O
D
E
T
E
C
T
_
D
E
S
C
'
,
 
'
E
l
 
s
i
s
t
e
m
a
 
i
n
t
e
n
t
a
r
Ã
¡
 
a
u
t
o
m
a
t
i
c
a
m
e
n
t
e
 
d
e
t
e
c
t
a
r
 
e
l
 
p
a
Ã
­
s
 
d
e
 
l
o
s
 
c
l
i
e
n
t
e
s
 
s
i
 
n
o
 
h
a
 
r
e
s
e
r
v
a
d
o
 
a
n
t
e
s
.
 
P
u
e
d
e
 
m
a
r
c
a
r
 
e
s
t
Ã
¡
 
o
p
c
i
Ã
³
n
 
N
o
 
y
 
d
e
f
i
n
i
r
 
q
u
e
 
p
a
Ã
­
s
 
p
r
e
f
i
e
r
e
 
q
u
e
 
a
p
a
r
e
z
c
a
 
p
o
r
 
d
e
f
e
c
t
o
 
e
n
 
e
l
 
f
o
r
m
u
l
a
r
i
o
 
d
e
 
r
e
s
e
r
v
a
 
e
n
 
l
a
 
s
i
g
u
i
e
n
t
e
 
o
p
c
i
Ã
³
n
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
S
U
P
P
O
R
T
_
A
B
O
U
T
J
O
M
R
E
S
'
,
 
'
S
o
b
r
e
 
J
o
m
r
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
M
E
N
U
C
A
T
E
G
O
R
I
E
S
_
H
E
L
P
'
,
 
'
a
y
u
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
S
U
P
P
O
R
T
_
G
E
T
T
I
N
G
S
T
A
R
T
E
D
'
,
 
'
C
Ã
³
m
o
 
e
m
p
e
z
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
A
C
C
E
S
S
C
O
N
T
R
O
L
'
,
 
'
C
o
n
t
r
o
l
 
d
e
 
A
c
c
e
s
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
M
E
N
U
C
A
T
E
G
O
R
I
E
S
_
D
E
V
E
L
O
P
E
R
S
'
,
 
'
H
e
r
r
a
m
i
e
n
t
a
s
 
p
a
r
a
 
d
e
s
a
r
r
o
l
l
a
d
o
r
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
M
E
N
U
C
A
T
E
G
O
R
I
E
S
_
L
A
N
G
U
A
G
E
S
'
,
 
'
i
d
i
o
m
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
M
E
N
U
C
A
T
E
G
O
R
I
E
S
_
I
N
C
O
M
E
_
G
E
N
E
R
A
T
I
O
N
'
,
 
'
g
e
n
e
r
a
c
i
Ã
³
n
d
e
 
i
n
g
r
e
s
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
M
E
N
U
C
A
T
E
G
O
R
I
E
S
_
S
T
R
U
C
T
U
R
E
'
,
 
'
e
s
t
r
u
c
t
u
r
a
 
d
e
l
 
s
i
t
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
M
A
N
U
A
L
'
,
 
'
M
a
n
u
a
l
 
(
o
n
l
i
n
e
)
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
M
Y
A
C
C
O
U
N
T
O
N
L
I
N
E
'
,
 
'
M
i
 
c
u
e
n
t
a
 
(
o
n
l
i
n
e
)
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
M
E
N
U
C
A
T
E
G
O
R
I
E
S
_
P
O
R
T
A
L
'
,
 
'
F
u
n
c
i
o
n
a
l
i
d
a
d
 
d
e
l
 
p
o
r
t
a
l
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
P
L
U
G
I
N
M
A
N
A
G
E
R
'
,
 
'
G
e
s
t
o
r
 
d
e
 
p
l
u
g
i
n
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
M
E
N
U
C
A
T
E
G
O
R
I
E
S
_
I
N
T
E
G
R
A
T
I
O
N
'
,
 
'
i
n
t
e
g
r
a
c
i
o
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
M
E
N
U
C
A
T
E
G
O
R
I
E
S
_
S
T
A
T
S
'
,
 
'
I
n
f
o
r
m
e
s
/
e
s
t
a
d
Ã
­
s
t
i
c
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
M
E
N
U
C
A
T
E
G
O
R
I
E
S
_
H
E
L
P
'
,
 
'
a
y
u
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
U
P
G
R
A
D
E
S
'
,
 
'
M
e
j
o
r
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
M
E
N
U
C
A
T
E
G
O
R
I
E
S
_
G
A
T
E
W
A
Y
S
'
,
 
'
m
Ã
©
t
o
d
o
s
 
d
e
 
p
a
g
o
'
)
;

j
r
_
d
e
f
i
n
e
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
T
A
R
I
F
F
T
Y
P
E
S
_
M
I
S
C
S
E
T
T
I
N
G
S
_
D
E
F
A
U
L
T
'
,
 
'
T
a
r
i
f
a
 
p
o
r
 
d
e
f
e
c
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
T
A
R
I
F
F
T
Y
P
E
S
_
M
I
S
C
S
E
T
T
I
N
G
S
_
D
E
F
A
U
L
T
_
D
E
S
C
'
,
 
'
e
s
t
o
 
s
Ã
³
l
o
 
s
e
 
a
p
l
i
c
a
 
a
 
n
u
e
v
a
s
 
t
a
r
i
f
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
T
A
R
I
F
F
T
Y
P
E
S
_
M
I
S
C
S
E
T
T
I
N
G
S
_
Y
E
A
R
S
T
O
S
H
O
W
'
,
 
'
A
Ã
±
o
s
 
a
 
m
o
s
t
r
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
T
A
R
I
F
F
T
Y
P
E
S
_
M
I
S
C
S
E
T
T
I
N
G
S
_
Y
E
A
R
S
T
O
S
H
O
W
_
D
E
S
C
'
,
 
'
D
e
f
i
n
e
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
a
Ã
±
o
s
 
a
 
m
o
s
t
r
a
r
 
c
u
a
n
d
o
 
e
d
i
t
a
 
u
n
 
t
i
p
o
 
d
e
 
t
a
r
i
f
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
A
C
C
O
U
N
T
I
N
G
'
,
 
'
r
e
c
i
b
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
M
Y
A
C
C
O
U
N
T
'
,
 
'
d
e
t
a
l
l
e
s
 
d
e
 
c
u
e
n
t
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
L
O
G
I
N
'
,
 
'
A
c
c
e
s
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
L
O
G
O
U
T
'
,
 
'
D
e
s
c
o
n
e
x
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
S
E
A
R
C
H
'
,
 
'
b
u
s
c
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
H
O
M
E
'
,
 
'
p
a
n
e
l
 
d
e
 
c
o
n
t
r
o
l
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
B
O
O
K
'
,
 
'
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
A
C
C
O
U
N
T
I
N
G
'
,
 
'
f
a
c
t
u
r
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
S
E
T
T
I
N
G
S
'
,
 
'
A
j
u
s
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
M
I
S
C
'
,
 
'
m
i
s
c
e
l
a
n
e
a
'
)
;

j
r
_
d
e
f
i
n
e
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
E
D
I
T
_
C
O
U
N
T
R
Y
_
T
I
T
L
E
'
,
 
'
E
d
i
t
a
r
 
p
a
Ã
­
s
'
)
;

j
r
_
d
e
f
i
n
e
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
E
D
I
T
_
C
O
U
N
T
R
Y
_
I
D
'
,
 
'
i
d
 
d
e
 
p
a
Ã
­
s
'
)
;

j
r
_
d
e
f
i
n
e
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
E
D
I
T
_
C
O
U
N
T
R
Y
_
C
O
U
N
T
R
Y
C
O
D
E
'
,
 
'
C
Ã
³
d
i
g
o
 
d
e
l
 
p
a
Ã
­
s
'
)
;

j
r
_
d
e
f
i
n
e
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
E
D
I
T
_
C
O
U
N
T
R
Y
_
C
O
U
N
T
R
Y
N
A
M
E
'
,
 
'
N
o
m
b
r
e
 
d
e
l
 
P
a
Ã
­
s
'
)
;

j
r
_
d
e
f
i
n
e
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
E
D
I
T
_
R
E
G
I
O
N
_
T
I
T
L
E
'
,
 
'
E
d
i
t
a
r
 
R
e
g
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
E
D
I
T
_
R
E
G
I
O
N
_
I
D
'
,
 
'
i
d
 
d
e
 
R
e
g
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
E
D
I
T
_
R
E
G
I
O
N
_
C
O
U
N
T
R
Y
C
O
D
E
'
,
 
'
C
o
d
i
g
o
 
d
e
l
 
p
a
Ã
­
s
'
)
;

j
r
_
d
e
f
i
n
e
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
E
D
I
T
_
R
E
G
I
O
N
_
R
E
G
I
O
N
N
A
M
E
'
,
 
'
N
o
m
b
r
e
 
d
e
 
l
a
 
r
e
g
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
L
I
S
T
C
O
U
N
T
R
I
E
S
'
,
 
'
L
i
s
t
a
r
 
P
a
Ã
­
s
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
L
I
S
T
R
E
G
I
O
N
S
'
,
 
'
L
i
s
t
a
r
 
r
e
g
i
o
n
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
E
X
P
O
R
T
_
D
E
F
I
N
I
T
I
O
N
S
'
,
 
'
E
x
p
o
r
t
a
r
 
d
e
f
i
n
i
c
i
o
n
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
E
X
P
O
R
T
_
D
E
F
I
N
I
T
I
O
N
S
_
I
N
F
O
'
,
 
'
E
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
l
e
 
p
e
r
m
i
t
e
 
e
x
p
o
r
t
a
r
 
l
a
s
 
t
r
a
d
u
c
c
i
o
n
e
s
 
q
u
e
 
h
a
n
 
s
i
d
o
 
c
r
e
a
d
a
s
 
u
s
a
n
d
a
o
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
T
r
a
d
u
c
c
i
Ã
³
n
 
d
e
 
I
d
i
o
m
a
.
 
C
r
e
a
r
Ã
¡
 
u
n
 
c
a
m
p
o
 
d
e
 
t
e
x
t
o
 
c
o
n
 
t
o
d
o
s
 
l
o
s
 
d
a
t
o
s
 
r
e
q
u
e
r
i
d
o
s
 
p
a
r
a
 
c
o
n
s
t
r
u
i
r
 
u
n
 
n
u
e
v
o
 
a
r
c
h
i
v
o
 
d
e
 
i
d
i
o
m
a
,
 
t
o
d
o
 
l
o
 
q
u
e
 
t
i
e
n
e
s
 
q
u
e
 
h
a
c
e
r
 
e
s
 
c
o
p
i
a
r
 
y
 
p
e
g
a
r
 
e
s
t
o
 
e
n
 
u
n
 
n
u
e
v
o
 
a
r
c
h
i
v
o
 
d
e
 
i
d
i
o
m
a
 
q
u
e
 
p
u
e
d
e
s
 
p
o
n
e
r
 
e
n
 
u
n
 
n
u
e
v
o
 
s
e
r
v
i
d
o
r
 
b
a
s
a
d
o
 
e
n
 
J
o
m
r
e
s
,
 
o
 
s
i
 
q
u
i
e
r
e
s
 
c
o
n
t
r
i
b
u
i
r
 
a
 
l
a
 
c
o
m
u
n
i
d
a
d
 
J
o
m
r
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
T
R
A
N
S
L
A
T
E
_
C
O
U
N
T
R
I
E
S
R
E
G
I
O
N
S
'
,
 
'
T
r
a
d
u
c
i
r
 
l
o
c
a
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
T
R
A
N
S
L
A
T
E
_
L
A
N
G
U
A
G
E
F
I
L
E
S
'
,
 
'
T
r
a
d
u
c
i
r
 
l
a
s
 
c
a
d
e
n
a
s
 
d
e
 
a
r
c
h
i
v
o
s
 
d
e
 
i
d
i
o
m
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
N
O
T
A
M
A
N
A
G
E
R
'
,
 
'
E
r
r
o
r
,
 
e
l
 
u
s
u
a
r
i
o
 
c
o
n
 
e
l
 
q
u
e
 
e
s
t
a
s
 
a
c
c
e
d
i
e
n
d
o
 
n
o
 
e
s
 
u
n
 
s
u
p
e
r
 
u
s
u
a
r
i
o
 
e
n
 
J
o
m
r
e
s
,
 
n
o
 
p
o
d
r
Ã
¡
s
 
u
s
a
r
 
e
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
h
a
s
t
a
 
q
u
e
 
h
a
y
a
s
 
u
s
a
d
o
 
l
a
 
f
u
n
c
i
o
n
a
l
i
d
a
d
 
d
e
 
M
o
s
t
r
a
r
 
P
e
r
f
i
l
 
p
a
r
a
 
h
a
c
e
r
t
e
 
t
a
n
t
o
 
g
e
s
t
o
r
 
y
 
s
u
p
e
r
 
g
e
s
t
o
r
.
 
E
s
t
o
 
e
s
 
u
n
a
 
f
u
n
c
i
a
l
i
d
a
d
 
d
e
 
s
e
g
u
r
i
d
a
d
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
L
A
Y
O
U
T
S
_
D
E
F
A
U
L
T
'
,
 
'
D
i
s
e
Ã
±
o
 
p
o
r
 
d
e
f
e
c
t
o
 
d
e
l
 
l
i
s
t
a
d
o
 
d
e
 
p
r
o
p
i
e
d
a
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
S
T
A
Y
F
O
R
A
M
I
N
I
M
U
M
O
F
'
,
 
'
E
s
t
a
n
c
i
a
 
p
o
r
 
u
n
 
m
Ã
­
n
i
m
o
 
d
e
'
)
;

j
r
_
d
e
f
i
n
e
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
N
I
G
H
T
S
F
O
R
'
,
 
'
 
N
o
c
h
e
s
 
p
a
r
a
 
'
)
;

j
r
_
d
e
f
i
n
e
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
A
G
E
N
T
'
,
 
'
A
g
e
n
t
e
'
)
;

j
r
_
d
e
f
i
n
e
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
A
G
E
N
T
_
D
E
T
A
I
L
S
'
,
 
'
D
e
t
a
l
l
e
s
 
d
e
l
 
A
g
e
n
t
e
'
)
;

j
r
_
d
e
f
i
n
e
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
A
G
E
N
T
_
L
I
S
T
I
N
G
S
'
,
 
'
A
n
u
n
c
i
o
s
 
d
e
l
 
A
g
e
n
t
e
'
)
;

j
r
_
d
e
f
i
n
e
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
A
P
P
R
O
V
A
L
S
_
C
O
N
F
I
G
_
T
I
T
L
E
'
,
 
'
A
p
r
o
b
a
r
 
a
u
t
o
m
Ã
¡
t
i
c
a
m
e
n
t
e
 
n
u
e
v
a
s
 
p
r
o
p
i
e
d
a
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
A
P
P
R
O
V
A
L
S
_
C
O
N
F
I
G
_
D
E
S
C
'
,
 
'
S
i
 
m
a
r
c
a
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
c
o
m
o
 
N
o
 
e
n
t
o
n
c
e
s
 
d
e
b
e
r
Ã
¡
 
a
p
r
o
b
a
r
 
m
a
n
u
a
l
m
e
n
t
e
 
l
a
s
 
n
u
e
v
a
s
 
p
r
o
p
i
e
d
a
d
e
s
.
 
H
a
s
t
a
 
q
u
e
 
u
n
a
 
p
r
o
p
i
e
d
a
d
 
n
o
 
s
e
a
 
a
p
r
o
b
a
d
a
 
n
o
 
p
o
d
r
Ã
¡
 
s
e
r
 
p
u
b
l
i
c
a
d
a
 
p
o
r
 
u
n
 
G
e
s
t
o
r
/
S
u
p
e
r
 
G
e
s
t
o
r
 
d
e
 
l
a
 
P
r
o
p
i
e
d
a
d
.
'
)
;

j
r
_
d
e
f
i
n
e
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
A
P
P
R
O
V
A
L
S
_
M
E
N
U
_
N
A
M
E
'
,
 
'
A
p
r
o
b
a
c
i
o
n
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
A
P
P
R
O
V
A
L
S
_
N
O
T
_
A
P
P
R
O
V
E
D
_
Y
E
T
'
,
 
'
E
s
t
a
 
P
r
o
p
i
e
d
a
d
 
a
Ã
º
n
 
n
o
 
h
a
 
s
i
d
o
 
a
p
r
o
b
a
d
a
.
 
U
n
a
 
v
e
z
 
q
u
e
 
l
o
 
s
e
a
 
s
e
r
Ã
¡
s
 
c
a
p
a
z
 
d
e
 
p
u
b
l
i
c
a
r
l
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
A
P
P
R
O
V
A
L
S
_
C
A
N
N
O
T
_
P
U
B
L
I
S
H
'
,
 
'
L
o
 
s
e
n
t
i
m
o
s
,
 
n
o
 
p
u
e
d
e
s
 
p
u
b
l
i
c
a
r
 
e
s
t
a
 
p
r
o
p
i
e
d
a
d
 
y
a
 
q
u
e
 
n
o
 
h
a
 
s
i
d
o
 
a
p
r
o
b
a
d
a
 
a
Ã
º
n
.
'
)
;

j
r
_
d
e
f
i
n
e
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
A
P
P
R
O
V
A
L
S
_
A
D
M
I
N
_
E
M
A
I
L
_
S
U
B
J
E
C
T
'
,
 
'
U
n
a
 
n
u
e
v
a
 
p
r
o
p
i
e
d
a
d
 
r
e
q
u
i
e
r
e
 
a
p
r
o
b
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
A
P
P
R
O
V
A
L
S
_
A
D
M
I
N
_
E
M
A
I
L
_
C
O
N
T
E
N
T
'
,
 
'
S
e
 
h
a
 
a
Ã
±
a
d
i
d
o
 
u
n
a
 
p
r
o
p
i
e
d
a
d
 
a
l
 
s
i
s
t
e
m
a
 
q
u
e
 
r
e
q
u
i
e
r
e
 
s
u
 
a
p
r
o
b
a
c
i
Ã
³
n
.
 
P
u
l
s
e
 
s
o
b
r
e
 
e
l
 
e
n
l
a
c
e
 
p
a
r
a
 
v
e
r
 
l
a
 
l
i
s
t
a
 
d
e
 
p
r
o
p
i
e
d
a
d
e
s
 
p
e
n
d
i
e
n
t
e
s
 
d
e
 
a
p
r
o
b
a
c
i
Ã
³
n
 
:
 
 
'
)
;

j
r
_
d
e
f
i
n
e
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
A
P
P
R
O
V
A
L
S
_
M
A
N
A
G
E
R
_
E
M
A
I
L
_
S
U
B
J
E
C
T
'
,
 
'
S
u
 
p
r
o
p
i
e
d
a
d
 
h
a
 
s
i
d
o
 
a
p
r
o
b
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
A
P
P
R
O
V
A
L
S
_
M
A
N
A
G
E
R
_
E
M
A
I
L
_
C
O
N
T
E
N
T
'
,
 
'
F
e
l
i
c
i
d
a
d
e
s
,
 
s
u
 
p
r
o
p
i
e
d
a
d
 
h
a
 
s
i
d
o
 
a
p
r
o
b
a
d
a
,
 
p
o
r
 
f
a
v
o
r
 
p
u
l
s
e
 
e
l
 
s
i
g
u
i
e
n
t
e
 
e
n
l
a
c
e
 
p
a
r
a
 
v
e
r
 
e
l
 
p
a
n
e
l
 
d
e
 
c
o
n
t
r
o
l
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
G
I
O
N
_
T
R
A
N
S
L
A
T
I
O
N
_
S
W
I
T
C
H
_
T
I
T
L
E
'
,
 
'
L
o
s
 
n
o
m
b
r
e
s
 
d
e
 
l
a
s
 
r
e
g
i
o
n
e
s
 
s
o
n
 
t
r
a
d
u
c
i
b
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
R
E
G
I
O
N
_
T
R
A
N
S
L
A
T
I
O
N
_
S
W
I
T
C
H
_
D
E
S
C
'
,
 
'
A
 
m
e
n
o
s
 
q
u
e
 
t
e
n
g
a
 
u
n
 
s
e
r
v
i
d
o
r
 
m
u
y
 
r
Ã
¡
p
i
d
o
 
l
e
 
a
c
o
n
s
e
j
a
m
o
s
 
d
e
j
a
r
 
m
a
r
c
a
d
o
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
c
o
m
o
 
N
O
.
 
D
e
b
i
d
o
 
a
 
e
l
 
a
m
p
l
i
o
 
n
Ã
º
m
e
r
o
 
d
e
 
n
o
m
b
r
e
s
 
d
e
 
r
e
g
i
o
n
e
s
,
 
l
a
 
t
r
a
d
u
c
c
i
Ã
³
n
 
d
e
 
d
i
c
h
o
s
 
n
o
m
b
r
e
s
 
o
c
u
p
a
 
u
n
a
 
g
r
a
n
 
c
a
n
t
i
d
a
d
 
d
e
 
m
e
m
o
r
i
o
s
 
q
u
e
 
p
u
e
d
e
 
r
a
l
e
n
t
i
z
a
r
 
s
u
s
 
r
e
s
u
l
t
a
d
o
s
 
d
e
 
b
Ã
º
s
q
u
e
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
B
O
O
K
O
U
T
_
G
U
E
S
T
B
O
O
K
E
D
O
U
T
'
,
 
'
I
n
v
i
t
a
d
o
 
r
e
s
e
r
v
a
d
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
E
M
A
I
L
_
A
L
R
E
A
D
Y
_
I
N
_
U
S
E
'
,
 
'
L
o
 
s
e
n
t
i
m
o
s
,
 
d
i
r
e
c
c
i
Ã
³
n
 
d
e
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
 
q
u
e
 
y
a
 
e
s
t
Ã
¡
 
e
n
 
u
s
o
.
 
S
i
 
e
s
t
a
 
e
s
 
t
u
 
d
i
r
e
c
c
i
Ã
³
n
 
d
e
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
,
 
p
o
r
 
f
a
v
o
r
 
a
s
e
g
Ã
º
r
e
s
e
 
d
e
 
q
u
e
 
s
e
 
h
a
y
a
 
c
o
n
e
c
t
a
d
o
 
a
n
t
e
s
 
d
e
 
i
n
t
e
n
t
a
r
 
r
e
s
e
r
v
a
r
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
T
A
P
T
O
C
A
L
L
'
,
 
'
T
o
q
u
e
 
p
a
r
a
 
l
l
a
m
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
N
E
W
R
E
V
I
E
W
_
S
U
B
J
E
C
T
'
,
 
'
U
n
 
n
u
e
v
o
 
c
o
m
e
n
t
a
r
i
o
 
s
o
b
r
e

G
o
o
g
l
e
 
T
r
a
n
s
l
a
t
e
 
f
o
r
 
B
u
s
i
n
e
s
s
:
T
r
a
n
s
l
a
t
o
r
 
T
o
o
l
k
i
t
W
e
b
s
i
t
e
 
T
r
a
n
s
l
a
t
o
r
G
l
o
b
a
l
 
M
a
r
k
e
t
 
F
i
n
d
e
r

A
l
l
 
l
a
n
g
u
a
g
e
s
Â
 
S
o
r
t
 
Â
 

Y
o
u
r
 
P
h
r
a
s
e
b
o
o
k
 
i
s
 
e
m
p
t
y
.
 
C
l
i
c
k
 
t
h
e
 
s
t
a
r
 
u
n
d
e
r
 
a
 
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
N
E
W
R
E
V
I
E
W
_
M
E
S
S
A
G
E
'
,
 
'
U
n
a
 
n
u
e
v
a
 
r
e
v
i
s
i
Ã
³
n
 
s
e
 
h
a
 
d
e
j
a
d
o
 
p
a
r
a
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
N
E
W
R
E
P
O
R
T
_
S
U
B
J
E
C
T
'
,
 
'
N
u
e
v
o
 
r
e
p
o
r
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
N
E
W
R
E
P
O
R
T
_
M
E
S
S
A
G
E
'
,
 
'
U
n
a
 
r
e
v
i
s
i
Ã
³
n
 
s
e
 
h
a
 
i
n
f
o
r
m
a
d
o
 
d
e
 
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
S
U
P
E
R
I
O
R
'
,
 
'
S
u
p
e
r
i
o
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
E
X
_
T
A
X
'
,
 
'
T
o
t
a
l
 
g
e
n
e
r
a
l
 
(
e
x
 
t
a
x
)
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
I
N
C
_
T
A
X
'
,
 
'
T
o
t
a
l
 
g
e
n
e
r
a
l
 
(
I
V
A
 
i
n
c
l
u
Ã
­
d
o
)
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
T
O
T
A
L
_
T
A
X
'
,
 
'
T
o
t
a
l
 
i
m
p
u
e
s
t
o
s
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
I
N
S
T
R
U
C
T
I
O
N
S
_
V
I
S
U
A
L
'
,
 
'
E
s
c
r
i
b
e
 
l
a
s
 
d
o
s
 
p
a
l
a
b
r
a
s
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
I
N
S
T
R
U
C
T
I
O
N
S
_
A
U
D
I
O
'
,
 
'
I
n
t
r
o
d
u
c
e
 
l
o
 
q
u
e
 
s
e
 
e
s
c
u
c
h
a
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
P
L
A
Y
_
A
G
A
I
N
'
,
 
'
R
e
p
r
o
d
u
c
i
r
 
l
a
 
p
i
s
t
a
 
d
e
 
a
u
d
i
o
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
C
A
N
T
_
H
E
A
R
_
T
H
I
S
'
,
 
'
D
e
s
c
a
r
g
a
r
 
l
a
 
c
a
n
c
i
Ã
³
n
 
e
n
 
f
o
r
m
a
t
o
 
M
P
3
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
V
I
S
U
A
L
_
C
H
A
L
L
E
N
G
E
'
,
 
'
m
o
d
o
 
v
i
s
u
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
A
U
D
I
O
_
C
H
A
L
L
E
N
G
E
'
,
 
'
m
o
d
o
 
d
e
 
a
u
d
i
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
R
E
F
R
E
S
H
_
B
T
N
'
,
 
'
R
e
f
r
e
s
c
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
H
E
L
P
_
B
T
N
'
,
 
'
A
y
u
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
I
N
C
O
R
R
E
C
T
_
T
R
Y
_
A
G
A
I
N
'
,
 
'
L
o
 
s
i
e
n
t
o
,
 
f
u
e
 
i
n
c
o
r
r
e
c
t
a
.
 
P
o
r
 
f
a
v
o
r
,
 
i
n
t
Ã
©
n
t
e
l
o
 
d
e
 
n
u
e
v
o
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
S
'
,
 
'
o
p
c
i
o
n
e
s
 
d
e
 
m
a
p
a
 
d
e
 
G
o
o
g
l
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
_
O
P
T
I
O
N
_
W
E
A
T
H
E
R
'
,
 
'
U
s
a
r
 
c
a
p
a
 
c
l
i
m
a
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
_
O
P
T
I
O
N
_
W
E
A
T
H
E
R
_
C
E
L
C
I
U
S
'
,
 
'
C
e
l
s
i
u
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
_
O
P
T
I
O
N
_
W
E
A
T
H
E
R
_
F
A
R
E
N
H
E
I
T
'
,
 
'
F
a
h
r
e
n
h
e
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
_
O
P
T
I
O
N
_
T
R
A
N
S
I
T
'
,
 
'
c
a
p
a
 
d
e
 
p
a
s
o
 
u
t
i
l
i
z
a
d
a
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
S
_
P
O
I
S
'
,
 
'
H
a
b
i
l
i
t
a
r
 
G
m
a
p
 
p
u
n
t
o
s
 
d
e
 
i
n
t
e
r
Ã
©
s
 
(
i
n
c
l
u
y
e
n
d
o
 
p
o
s
i
b
l
e
m
e
n
t
e
 
s
u
s
 
c
o
m
p
e
t
i
d
o
r
e
s
)
?
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
T
A
 
K
E
Y
W
O
R
D
S
'
,
 
'

P
a
l
a
b
r
a
s
 
c
l
a
v
e
 
M
e
t
a
'
)
;

j
r
_
d
e
f
i
n
e
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
S
C
A
N
_
F
O
R
_
D
I
R
E
C
T
I
O
N
S
'
,
 
'
E
s
c
a
n
e
a
r
 
e
s
t
e
 
c
Ã
³
d
i
g
o
 
e
n
 
s
u
 
t
e
l
Ã
©
f
o
n
o
 
p
a
r
a
 
o
b
t
e
n
e
r
 
d
i
r
e
c
c
i
o
n
e
s
 
p
a
r
a
 
n
o
s
o
t
r
o
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
V
I
E
S
_
V
A
T
C
H
E
C
K
_
I
N
C
O
R
R
E
C
T
_
S
Y
N
T
A
X
'
,
 
'
E
l
 
n
Ã
º
m
e
r
o
 
d
e
 
I
V
A
 
q
u
e
 
h
a
 
e
s
p
e
c
i
f
i
c
a
d
o
 
n
o
 
p
a
r
e
c
e
 
s
e
r
 
c
o
r
r
e
c
t
a
.
 
U
s
t
e
d
 
d
e
b
e
 
t
e
n
e
r
 
a
l
g
o
 
c
o
m
o
 
e
s
t
o
:
 
B
E
8
0
5
6
7
0
8
1
6
B
0
1
 
'
)
;

j
r
_
d
e
f
i
n
e
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
V
I
E
S
_
V
A
T
C
H
E
C
K
_
I
N
C
O
R
R
E
C
T
_
C
O
U
L
D
N
O
T
V
A
L
I
D
A
T
E
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
I
V
A
 
v
Ã
¡
l
i
d
o
.
 
P
o
r
 
f
a
v
o
r
,
 
c
o
m
p
r
u
e
b
e
 
l
a
 
v
a
l
i
d
e
z
 
d
e
 
s
u
 
I
V
A
 
n
Ã
º
m
e
r
o
 
c
o
n
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
I
V
A
 
s
e
r
v
i
c
i
o
 
d
e
 
v
a
l
i
d
a
c
i
Ã
³
n
 
w
e
b
 
E
u
r
o
p
a
 
(
V
I
E
S
)
 
'
)
;

j
r
_
d
e
f
i
n
e
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
V
I
E
S
_
V
A
T
C
H
E
C
K
_
I
N
C
O
R
R
E
C
T
_
V
A
L
I
D
A
T
E
D
'
,
 
'
F
e
l
i
c
i
t
a
c
i
o
n
e
s
.
 
H
e
m
o
s
 
s
i
d
o
 
c
a
p
a
c
e
s
 
d
e
 
v
a
l
i
d
a
r
 
s
u
 
n
Ã
º
m
e
r
o
 
d
e
 
I
V
A
.
'
)
;

j
r
_
d
e
f
i
n
e
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
T
A
X
_
R
U
L
E
S
_
L
I
S
T
'
,
 
'
n
o
r
m
a
s
 
f
i
s
c
a
l
e
s
 
l
i
s
t
a
'
)
;

j
r
_
d
e
f
i
n
e
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
T
A
X
_
R
U
L
E
'
,
 
'
n
o
r
m
a
 
f
i
s
c
a
l
'
)
;

j
r
_
d
e
f
i
n
e
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
T
A
X
_
R
U
L
E
_
I
N
F
O
'
,
 
'
L
a
s
 
n
o
r
m
a
s
 
f
i
s
c
a
l
e
s
 
s
e
 
u
t
i
l
i
z
a
n
 
p
a
r
a
 
e
s
t
a
b
l
e
c
e
r
 
n
o
r
m
a
s
 
f
i
s
c
a
l
e
s
 
d
i
s
t
i
n
t
a
s
 
p
a
r
a
 
l
a
s
 
d
i
f
e
r
e
n
t
e
s
 
r
e
g
i
o
n
e
s
.
 
E
s
t
a
s
 
n
o
r
m
a
s
 
f
i
s
c
a
l
e
s
 
a
f
e
c
t
a
n
 
a
 
l
a
 
p
e
r
s
o
n
a
 
q
u
e
 
r
e
a
l
i
z
a
 
l
a
 
r
e
s
e
r
v
a
,
 
s
i
 
e
s
t
Ã
¡
n
 
r
e
g
i
s
t
r
a
d
o
s
,
 
i
n
i
c
i
a
d
o
 
l
a
 
s
e
s
i
Ã
³
n
 
y
 
h
a
n
 
e
d
i
t
a
d
o
 
s
u
 
c
u
e
n
t
a
 
u
t
i
l
i
z
a
n
d
o
 
e
l
 
"
e
d
i
t
a
r
 
m
i
 
c
u
e
n
t
a
 
"
 
p
Ã
¡
g
i
n
a
.
 
E
l
 
p
r
o
p
Ã
³
s
i
t
o
 
d
e
 
e
s
t
a
s
 
r
e
g
l
a
s
 
e
s
 
p
a
r
a
 
d
a
r
 
c
a
b
i
d
a
 
a
 
a
g
e
n
t
e
s
 
d
e
 
r
e
s
e
r
v
a
 
e
n
 
a
q
u
e
l
l
a
s
 
Ã
¡
r
e
a
s
 
q
u
e
 
e
s
t
Ã
¡
n
 
e
x
e
n
t
a
s
 
d
e
 
I
V
A
,
 
e
s
 
p
o
s
i
b
l
e
 
q
u
e
 
u
s
t
e
d
 
n
o
 
n
e
c
e
s
i
t
a
 
c
r
e
a
r
 
m
u
c
h
a
s
 
r
e
g
l
a
s
,
 
o
 
n
i
n
g
u
n
a
 
e
n
 
a
b
s
o
l
u
t
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
T
A
X
_
R
A
T
E
S
_
I
M
P
O
R
T
'
,
 
'
l
a
s
 
t
a
s
a
s
 
d
e
 
i
m
p
u
e
s
t
o
s
 
d
e
 
i
m
p
o
r
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
T
A
X
_
R
A
T
E
S
_
I
M
P
O
R
T
_
I
N
F
O
'
,
 
'
P
o
d
e
m
o
s
 
i
m
p
o
r
t
a
r
 
l
o
s
 
t
i
p
o
s
 
i
m
p
o
s
i
t
i
v
o
s
 
d
e
 
l
a
 
U
E
 
p
a
r
a
 
q
u
e
,
 
s
i
 
l
o
 
d
e
s
e
a
.
 
T
e
n
g
a
 
e
n
 
c
u
e
n
t
a
,
 
s
i
 
s
e
 
u
t
i
l
i
z
a
 
e
s
t
a
 
f
u
n
c
i
Ã
³
n
,
 
e
n
t
o
n
c
e
s
 
t
o
d
a
s
 
s
u
s
 
t
a
s
a
s
 
d
e
 
i
m
p
u
e
s
t
o
s
 
e
x
i
s
t
e
n
t
e
s
 
s
e
r
Ã
¡
n
 
e
l
i
m
i
n
a
d
o
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
T
A
X
_
R
U
L
E
_
E
D
I
T
'
,
 
'
E
d
i
t
a
r
 
n
o
r
m
a
 
f
i
s
c
a
l
'
)
;

j
r
_
d
e
f
i
n
e
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
V
A
T
_
P
R
O
P
E
R
T
Y
_
N
U
M
B
E
R
'
,
 
'
E
l
 
n
Ã
º
m
e
r
o
 
d
e
 
I
V
A
 
p
a
r
a
 
e
s
t
a
 
p
r
o
p
i
e
d
a
d
.
'
)
;

j
r
_
d
e
f
i
n
e
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
V
A
T
_
P
R
O
P
E
R
T
Y
_
N
U
M
B
E
R
_
D
E
S
C
'
,
 
'
P
o
r
 
f
a
v
o
r
,
 
i
n
t
r
o
d
u
z
c
a
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
I
V
A
 
p
a
r
a
 
e
s
t
a
 
p
r
o
p
i
e
d
a
d
.
'
)
;

j
r
_
d
e
f
i
n
e
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
V
A
T
_
P
R
O
P
E
R
T
Y
_
V
A
T
_
N
U
M
B
E
R
_
V
A
L
I
D
A
T
E
D
'
,
 
'
v
a
l
i
d
a
c
i
Ã
³
n
 
N
Ã
º
m
e
r
o
 
d
e
 
I
V
A
.
'
)
;

j
r
_
d
e
f
i
n
e
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
V
A
T
_
P
R
O
P
E
R
T
Y
_
V
A
T
_
N
U
M
B
E
R
_
N
O
T
_
V
A
L
I
D
A
T
E
D
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
I
V
A
 
n
o
 
v
a
l
i
d
a
d
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
Y
O
U
R
B
U
S
I
N
E
S
S
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
'
D
e
t
a
l
l
e
s
 
d
e
l
 
n
e
g
o
c
i
o
 
a
q
u
Ã
­
 
i
n
t
r
o
d
u
c
i
d
o
s
 
s
e
r
Ã
¡
n
 
u
t
i
l
i
z
a
d
o
s
 
e
n
 
l
a
 
c
o
m
i
s
i
Ã
³
n
 
y
 
s
u
s
c
r
i
p
c
i
o
n
e
s
 
f
a
c
t
u
r
a
s
.
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
U
B
S
C
R
I
P
T
I
O
N
_
P
R
O
F
I
L
E
_
E
R
R
O
R
_
E
X
P
L
'
,
 
'
U
s
t
e
d
 
n
o
 
p
a
r
e
c
e
 
h
a
b
e
r
 
r
e
l
l
e
n
a
d
o
 
d
e
t
a
l
l
e
s
 
d
e
 
s
u
 
c
u
e
n
t
a
 
t
o
d
a
v
Ã
­
a
.
 
P
a
r
a
 
m
o
s
t
r
a
r
 
s
u
 
p
r
o
p
i
e
d
a
d
 
e
n
 
e
l
 
s
i
t
i
o
,
 
n
e
c
e
s
i
t
a
m
o
s
 
q
u
e
 
c
o
m
p
l
e
t
e
 
s
u
s
 
d
a
t
o
s
 
d
e
 
c
u
e
n
t
a
 
a
n
t
e
s
 
d
e
 
q
u
e
 
p
o
d
a
m
o
s
 
i
r
 
m
Ã
¡
s
 
a
l
l
Ã
¡
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
P
R
O
D
U
C
T
I
O
N
_
D
E
V
E
L
O
P
M
E
N
T
'
,
 
'
P
r
o
d
u
c
c
i
Ã
³
n
 
o
 
D
e
s
a
r
r
o
l
l
o
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
P
R
O
D
U
C
T
I
O
N
_
D
E
V
E
L
O
P
M
E
N
T
_
D
E
S
C
'
,
 
'
S
i
 
s
e
 
e
s
t
a
b
l
e
c
e
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
p
a
r
a
 
e
l
 
D
e
s
a
r
r
o
l
l
o
 
v
a
m
o
s
 
a
 
p
e
r
m
i
t
i
r
 
q
u
e
 
e
l
 
i
n
f
o
r
m
e
 
d
e
 
e
r
r
o
r
e
s
,
 
d
e
 
l
o
 
c
o
n
t
r
a
r
i
o
 
c
u
a
n
d
o
 
s
e
 
e
s
t
a
b
l
e
c
e
 
e
n
 
l
a
 
p
r
o
d
u
c
c
i
Ã
³
n
 
q
u
e
 
s
e
 
a
p
a
g
a
.
 
S
i
 
e
s
t
o
 
e
s
 
u
n
 
s
e
r
v
i
d
o
r
 
a
c
t
i
v
o
,
 
s
e
 
r
e
c
o
m
i
e
n
d
a
 
q
u
e
 
s
e
 
e
s
t
a
b
l
e
c
e
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
a
 
"
l
a
 
p
r
o
d
u
c
c
i
Ã
³
n
 
"
.
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
P
R
O
D
U
C
T
I
O
N
_
D
E
V
E
L
O
P
M
E
N
T
_
S
E
T
T
I
N
G
_
P
R
O
D
U
C
T
I
O
N
'
,
 
'
P
r
o
d
u
c
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
P
R
O
D
U
C
T
I
O
N
_
D
E
V
E
L
O
P
M
E
N
T
_
S
E
T
T
I
N
G
_
D
E
V
E
L
O
P
M
E
N
T
'
,
 
'
D
e
s
a
r
r
o
l
l
o
'
)
;

/
/
v
7
.
3
.
3

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
H
R
O
O
M
_
D
E
T
A
I
L
S
'
,
 
'
d
e
t
a
l
l
e
s
 
d
e
 
r
e
c
u
r
s
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
H
T
A
R
I
F
F
_
D
E
T
A
I
L
S
'
,
 
'
d
a
t
o
s
 
d
e
 
l
a
 
t
a
r
i
f
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
H
N
U
M
B
E
R
_
O
F
_
R
O
O
M
S
_
P
R
E
'
,
 
'
S
o
l
a
m
e
n
t
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
H
N
U
M
B
E
R
_
O
F
_
R
O
O
M
S
_
P
O
S
T
'
,
 
'
q
u
e
d
a
d
o
!
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
E
B
_
H
R
E
S
O
U
R
C
E
_
F
E
A
T
U
R
E
'
,
 
'
f
u
n
c
i
Ã
³
n
 
d
e
 
r
e
c
u
r
s
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
R
E
S
O
U
R
C
E
F
E
A
T
U
R
E
_
U
N
A
B
L
E
T
O
D
E
L
E
T
E
'
,
 
'
N
o
 
s
e
 
p
u
e
d
e
 
e
l
i
m
i
n
a
r
 
e
s
t
a
 
f
u
n
c
i
Ã
³
n
 
d
e
 
r
e
c
u
r
s
o
s
,
 
s
e
 
l
e
 
a
s
i
g
n
a
 
a
 
u
n
 
r
e
c
u
r
s
o
.
 
Q
u
i
t
a
r
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
e
s
t
e
 
r
e
c
u
r
s
o
 
y
 
v
u
e
l
v
a
 
a
 
i
n
t
e
n
t
a
r
.
 
'
)
;

/
/
 
v
7
.
4

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
T
I
T
L
E
'
,
 
'
C
e
n
t
r
o
 
d
e
 
M
e
d
i
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
A
D
D
'
,
 
'

A
d
d
 
i
m
a
g
e
s

A
Ã
±
a
d
i
r
 
i
m
Ã
¡
g
e
n
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
S
_
R
O
O
M
'
,
 
'
l
a
s
 
i
m
Ã
¡
g
e
n
e
s
 
d
e
 
l
a
s
 
h
a
b
i
t
a
c
i
o
n
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
S
_
P
R
O
P
E
R
T
Y
'
,
 
'
i
m
a
g
e
n
 
p
r
i
n
c
i
p
a
l
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
S
_
S
L
I
D
E
S
H
O
W
'
,
 
'
i
m
Ã
¡
g
e
n
e
s
 
d
e
 
p
r
e
s
e
n
t
a
c
i
Ã
³
n
 
d
e
 
d
i
a
p
o
s
i
t
i
v
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
C
L
E
A
R
'
,
 
'
L
i
m
p
i
a
r
 
l
i
s
t
a
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
D
R
A
G
N
D
R
O
P
'
,
 
'
A
r
r
a
s
t
r
a
r
 
y
 
s
o
l
t
a
r
 
a
r
c
h
i
v
o
s
 
a
q
u
Ã
­
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
S
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
'
S
e
l
e
c
c
i
o
n
e
 
e
l
 
r
e
c
u
r
s
o
 
q
u
e
 
d
e
s
e
a
 
c
a
r
g
a
r
 
i
m
Ã
¡
g
e
n
e
s
 
p
a
r
a
.
 
S
i
 
p
u
e
d
e
 
s
u
b
i
r
 
i
m
Ã
¡
g
e
n
e
s
 
p
a
r
a
 
r
e
c
u
r
s
o
s
 
i
n
d
i
v
i
d
u
a
l
e
s
 
(
p
o
r
 
e
j
e
m
p
l
o
,
 
h
a
b
i
t
a
c
i
o
n
e
s
)
 
s
e
 
l
e
 
d
a
r
Ã
¡
 
u
n
 
s
e
g
u
n
d
o
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
 
p
a
r
a
 
e
l
e
g
i
r
 
e
l
 
r
e
c
u
r
s
o
 
e
s
p
e
c
Ã
­
f
i
c
o
.
 
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
N
O
T
E
S
_
C
O
R
E
'
,
 
'
S
i
 
a
 
s
u
b
i
r
 
v
a
r
i
a
s
 
i
m
Ã
¡
g
e
n
e
s
 
c
o
m
o
 
e
l
 
"
 
i
m
a
g
e
n
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
p
r
i
n
c
i
p
a
l
 
"
Ã
©
s
t
o
s
 
s
e
r
Ã
¡
n
 
u
t
i
l
i
z
a
d
o
s
 
e
n
 
l
a
s
 
i
m
Ã
¡
g
e
n
e
s
 
L
i
s
t
a
 
d
e
 
p
r
o
p
i
e
d
a
d
e
s
.
 
P
r
e
s
e
n
t
a
c
i
Ã
³
n
 
d
e
 
d
i
a
p
o
s
i
t
i
v
a
s
 
s
e
 
m
o
s
t
r
a
r
Ã
¡
 
e
n
 
l
a
 
p
Ã
¡
g
i
n
a
 
d
e
 
d
e
t
a
l
l
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
.
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
V
I
E
W
'
,
 
'
V
e
r
 
s
u
 
i
m
a
g
e
n
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
D
E
L
E
T
E
'
,
 
'
E
l
i
m
i
n
a
r
 
I
m
a
g
e
n
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
U
P
L
O
A
D
'
,
 
'
C
a
r
g
a
r
 
i
m
a
g
e
n
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
S
_
R
O
O
M
T
Y
P
E
_
I
M
A
G
E
S
'
,
 
'
T
i
p
o
s
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
 
i
c
o
n
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
S
_
P
R
O
P
E
R
T
Y
_
F
E
A
T
U
R
E
S
'
,
 
'
l
o
s
 
i
c
o
n
o
s
 
d
e
 
f
u
n
c
i
o
n
e
s
 
d
e
 
P
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
U
P
L
O
A
D
_
A
L
L
'
,
 
'
S
u
b
i
r
 
t
o
d
o
s
 
l
o
s
 
a
r
c
h
i
v
o
s
'
)
;

/
/
8
.
0

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
R
E
V
'
,
 
'
P
r
e
v
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
M
O
R
E
'
,
 
'
M
Ã
¡
s
'
)
;

j
r
_
d
e
f
i
n
e
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
D
A
S
H
B
O
A
R
D
_
T
O
D
A
Y
'
,
 
'
H
o
y
'
)
;

j
r
_
d
e
f
i
n
e
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
D
A
S
H
B
O
A
R
D
_
Y
E
A
R
'
,
 
'
A
Ã
±
o
'
)
;

j
r
_
d
e
f
i
n
e
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
D
A
S
H
B
O
A
R
D
_
M
O
N
T
H
'
,
 
'
M
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
D
A
S
H
B
O
A
R
D
_
W
E
E
K
'
,
 
'
S
e
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
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
D
A
S
H
B
O
A
R
D
_
D
A
Y
'
,
 
'
D
Ã
­
a
'
)
;

j
r
_
d
e
f
i
n
e
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
H
L
E
G
E
N
D
'
,
 
'
L
e
y
e
n
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
H
F
I
L
T
E
R
'
,
 
'
F
i
l
t
r
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
H
F
R
O
M
'
,
 
'
D
e
'
)
;

j
r
_
d
e
f
i
n
e
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
H
T
O
'
,
 
'
A
'
)
;

j
r
_
d
e
f
i
n
e
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
H
N
E
W
_
B
O
O
K
I
N
G
'
,
 
'
N
u
e
v
a
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
H
S
T
A
T
U
S
_
D
E
P
O
S
I
T
'
,
 
'
e
s
t
a
d
o
 
f
u
e
r
t
e
'
)
;

j
r
_
d
e
f
i
n
e
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
H
S
T
A
T
U
S
_
G
U
E
S
T
'
,
 
'
c
o
n
d
i
c
i
Ã
³
n
 
d
e
 
i
n
v
i
t
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
H
S
T
A
T
U
S
_
B
O
O
K
I
N
G
'
,
 
'
E
s
t
a
d
o
 
d
e
 
l
a
 
r
e
s
e
r
v
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
H
S
T
A
T
U
S
_
P
U
B
L
I
S
H
I
N
G
'
,
 
'
e
s
t
a
d
o
 
d
e
 
p
u
b
l
i
c
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
H
S
T
A
T
U
S
_
I
N
V
O
I
C
E
'
,
 
'
e
s
t
a
d
o
 
d
e
 
l
a
 
f
a
c
t
u
r
a
'
)
;

j
r
_
d
e
f
i
n
e
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
H
S
T
A
T
U
S
_
I
N
V
O
I
C
E
_
T
Y
P
E
'
,
 
'
t
i
p
o
 
d
e
 
f
a
c
t
u
r
a
'
)
;

j
r
_
d
e
f
i
n
e
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
H
S
T
A
T
U
S
_
A
P
P
R
O
V
E
D
'
,
 
'
A
p
r
o
b
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
H
S
T
A
T
U
S
_
C
U
R
R
E
N
T
'
,
 
'
n
e
g
o
c
i
o
 
a
c
t
u
a
l
'
)
;

j
r
_
d
e
f
i
n
e
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
H
S
T
A
T
U
S
_
S
H
O
W
_
B
O
O
K
I
N
G
S
_
F
O
R
'
,
 
'
M
o
s
t
r
a
r
 
r
e
s
e
r
v
a
s
 
p
a
r
a
'
)
;

j
r
_
d
e
f
i
n
e
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
H
S
T
A
T
U
S
_
S
H
O
W
_
I
N
V
O
I
C
E
S
_
F
O
R
'
,
 
'
M
o
s
t
r
a
r
 
f
a
c
t
u
r
a
s
 
d
e
'
)
;

j
r
_
d
e
f
i
n
e
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
S
T
A
T
U
S
_
A
N
Y
'
,
 
'
A
l
g
u
n
a
'
)
;

j
r
_
d
e
f
i
n
e
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
S
T
A
T
U
S
_
P
A
I
D
'
,
 
'
P
a
g
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
S
T
A
T
U
S
_
N
O
T
P
A
I
D
'
,
 
'
N
o
 
p
a
g
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
S
T
A
T
U
S
_
C
H
E
C
K
E
D
O
U
T
'
,
 
'
C
o
n
t
r
o
l
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
S
T
A
T
U
S
_
A
C
T
I
V
E
'
,
 
'
A
c
t
i
v
o
'
)
;

j
r
_
d
e
f
i
n
e
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
S
T
A
T
U
S
_
C
A
N
C
E
L
L
E
D
'
,
 
'
C
a
n
c
e
l
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
S
T
A
T
U
S
_
P
U
B
L
I
S
H
E
D
'
,
 
'
P
u
b
l
i
c
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
S
T
A
T
U
S
_
N
O
T
_
P
U
B
L
I
S
H
E
D
'
,
 
'
N
o
 
p
u
b
l
i
c
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
S
T
A
T
U
S
_
G
U
E
S
T
_
B
O
O
K
I
N
G
S
_
A
C
T
I
V
E
'
,
 
'
L
o
s
 
h
u
Ã
©
s
p
e
d
e
s
 
c
o
n
 
r
e
s
e
r
v
a
s
 
a
c
t
i
v
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
S
T
A
T
U
S
_
G
U
E
S
T
_
B
O
O
K
I
N
G
S
_
P
A
S
T
'
,
 
'
L
o
s
 
h
u
Ã
©
s
p
e
d
e
s
 
c
o
n
 
r
e
s
e
r
v
a
s
 
a
n
t
e
r
i
o
r
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
S
T
A
T
U
S
_
B
O
O
K
I
N
G
S
'
,
 
'
r
e
s
e
r
v
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
S
T
A
T
U
S
_
S
U
B
S
C
R
I
P
T
I
O
N
S
'
,
 
'
S
u
s
c
r
i
p
c
i
o
n
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
S
T
A
T
U
S
_
C
O
M
M
I
S
S
I
O
N
S
'
,
 
'
c
o
m
i
s
i
o
n
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
S
T
A
T
U
S
_
A
L
L
_
P
R
O
P
E
R
T
I
E
S
'
,
 
'
T
o
d
o
s
 
m
i
s
 
n
e
g
o
c
i
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
A
C
T
I
O
N
_
S
E
T
_
C
U
R
R
E
N
T
'
,
 
'
E
s
t
a
b
l
e
c
e
r
 
c
o
m
o
 
a
c
t
u
a
l
'
)
;

j
r
_
d
e
f
i
n
e
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
A
C
T
I
O
N
_
C
H
E
C
K
I
N
'
,
 
'
R
e
g
i
s
t
r
a
r
s
e
'
)
;

j
r
_
d
e
f
i
n
e
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
A
C
T
I
O
N
_
C
H
E
C
K
O
U
T
'
,
 
'
R
e
v
i
s
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
B
O
O
K
I
N
G
S
'
,
 
'
r
e
s
e
r
v
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
P
R
O
P
E
R
T
I
E
S
'
,
 
'
p
r
o
p
i
e
d
a
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
G
U
E
S
T
S
'
,
 
'
l
o
s
 
h
u
Ã
©
s
p
e
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
M
A
N
A
G
E
R
_
R
E
P
O
R
T
S
'
,
 
'
i
n
f
o
r
m
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
H
L
I
S
T
_
G
U
E
S
T
S
'
,
 
'
L
o
s
 
h
u
Ã
©
s
p
e
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
H
L
I
S
T
_
G
U
E
S
T
S
_
M
E
N
U
'
,
 
'
L
i
s
t
a
 
d
e
 
l
o
s
 
h
u
Ã
©
s
p
e
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
H
L
I
S
T
_
I
N
V
O
I
C
E
S
_
M
E
N
U
'
,
 
'
L
i
s
t
a
 
d
e
 
f
a
c
t
u
r
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
H
L
I
S
T
_
P
R
O
P
E
R
T
I
E
S
'
,
 
'
e
m
p
r
e
s
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
H
Q
U
I
C
K
_
B
O
O
K
I
N
G
'
,
 
'
r
e
s
e
r
v
a
 
r
Ã
¡
p
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
H
D
A
T
E
_
O
F
_
B
O
O
K
I
N
G
'
,
 
'
F
e
c
h
a
 
d
e
 
l
a
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
H
T
W
O
_
W
E
E
K
S
'
,
 
'
D
o
s
 
s
e
m
a
n
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
_
C
A
N
C
E
L
L
A
T
I
O
N
_
W
A
R
N
I
N
G
'
,
 
'
E
s
t
a
 
r
e
s
e
r
v
a
 
s
e
r
Ã
¡
 
c
a
n
c
e
l
a
d
a
.
 
P
u
l
s
e
 
O
K
 
p
a
r
a
 
c
a
n
c
e
l
a
r
 
l
a
 
r
e
s
e
r
v
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
H
O
V
E
R
V
I
E
W
_
C
H
E
C
K
I
N
S
'
,
 
'
c
o
m
p
r
a
 
d
e
 
r
e
g
i
s
t
r
o
 
H
o
y
'
)
;

j
r
_
d
e
f
i
n
e
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
H
O
V
E
R
V
I
E
W
_
C
H
E
C
K
O
U
T
S
'
,
 
'
H
o
y
 
e
n
 
d
Ã
­
a
 
l
a
s
 
c
a
j
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
H
O
V
E
R
V
I
E
W
_
C
U
R
R
E
N
T
_
R
E
S
I
D
E
N
T
S
'
,
 
'
L
o
s
 
r
e
s
i
d
e
n
t
e
s
 
a
c
t
u
a
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
T
S
T
R
A
P
_
L
O
C
A
T
I
O
N
'
,
 
'
u
b
i
c
a
c
i
Ã
³
n
 
b
a
r
r
a
 
d
e
 
n
a
v
e
g
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
T
S
T
R
A
P
_
L
O
C
A
T
I
O
N
_
D
E
F
A
U
L
T
'
,
 
'
P
r
e
d
e
t
e
r
m
i
n
a
d
o
 
(
Ã
¡
r
e
a
 
d
e
 
c
o
n
t
e
n
i
d
o
)
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
T
S
T
R
A
P
_
L
O
C
A
T
I
O
N
_
T
O
P
'
,
 
'
F
i
j
o
 
a
l
 
p
r
i
n
c
i
p
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
T
S
T
R
A
P
_
L
O
C
A
T
I
O
N
_
B
O
T
T
O
M
'
,
 
'
F
i
j
a
 
a
 
l
a
 
p
a
r
t
e
 
i
n
f
e
r
i
o
r
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
T
S
T
R
A
P
_
L
O
C
A
T
I
O
N
_
I
N
V
E
R
S
E
'
,
 
'
n
a
v
b
a
r
 
i
n
v
e
r
t
i
d
a
 
(
c
a
m
b
i
o
 
d
e
 
c
o
l
o
r
)
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
_
N
U
M
B
E
R
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
H
S
T
A
T
U
S
_
S
H
O
W
_
G
U
E
S
T
S
_
F
O
R
'
,
 
'
M
o
s
t
r
a
r
 
h
u
Ã
©
s
p
e
d
e
s
 
p
a
r
a
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
T
S
T
R
A
P
_
V
E
R
S
I
O
N
'
,
 
'
v
e
r
s
i
Ã
³
n
 
d
e
 
a
r
r
a
n
q
u
e
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
T
S
T
R
A
P
_
V
E
R
S
I
O
N
_
D
E
S
C
'
,
 
'
E
n
 
l
a
 
a
c
t
u
a
l
i
d
a
d
 
s
Ã
³
l
o
 
s
e
 
a
p
l
i
c
a
 
a
 
l
a
 
i
n
t
e
r
f
a
z
.
 
E
s
t
a
 
o
p
c
i
Ã
³
n
 
l
e
 
p
e
r
m
i
t
e
 
e
l
e
g
i
r
 
s
i
 
d
e
s
e
a
 
o
 
n
o
 
u
t
i
l
i
z
a
r
 
l
a
s
 
p
l
a
n
t
i
l
l
a
s
 
j
o
m
r
e
s
 
q
u
e
 
s
o
n
 
c
o
m
p
a
t
i
b
l
e
s
 
c
o
n
 
B
o
o
t
s
t
r
a
p
 
2
 
o
 
B
o
o
t
s
t
r
a
p
 
3
.
 
A
 
m
e
n
o
s
 
q
u
e
 
e
s
t
Ã
©
 
s
e
g
u
r
o
 
d
e
 
q
u
e
 
s
u
 
p
l
a
n
t
i
l
l
a
 
t
r
a
b
a
j
a
 
c
o
n
 
B
o
o
t
s
t
r
a
p
 
3
 
a
 
c
o
n
t
i
n
u
a
c
i
Ã
³
n
,
 
s
e
 
r
e
c
o
m
i
e
n
d
a
 
d
e
j
a
r
 
e
s
t
e
 
c
o
n
j
u
n
t
o
 
p
a
r
a
 
a
r
r
a
n
c
a
r
 
2
.
'
)
;

j
r
_
d
e
f
i
n
e
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
H
S
T
A
T
U
S
_
S
H
O
W
_
G
U
E
S
T
S
_
F
O
R
'
,
 
'
M
o
s
t
r
a
r
 
h
u
Ã
©
s
p
e
d
e
s
 
p
a
r
a
'
)
;

j
r
_
d
e
f
i
n
e
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
H
F
I
X
E
D
_
P
E
R
I
O
D
S
'
,
 
'
p
e
r
Ã
­
o
d
o
s
 
f
i
j
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
H
D
E
P
O
S
I
T
S
'
,
 
'
d
e
p
Ã
³
s
i
t
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
H
B
O
O
K
I
N
G
_
F
O
R
M
'
,
 
'
F
o
r
m
u
l
a
r
i
o
 
d
e
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
H
R
E
Q
U
I
R
E
D
_
F
I
E
L
D
S
'
,
 
'
C
a
m
p
o
s
 
r
e
q
u
e
r
i
d
o
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
F
I
R
S
T
N
A
M
E
'
,
 
'
T
o
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
S
U
R
N
A
M
E
'
,
 
'
S
m
i
t
h
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
H
O
U
S
E
N
U
M
B
E
R
'
,
 
'
1
1
0
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
S
T
R
E
E
T
'
,
 
'
M
i
 
c
a
l
l
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
T
O
W
N
'
,
 
'
M
i
 
c
i
u
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
L
A
N
D
L
I
N
E
'
,
 
'
0
0
0
0
0
 
0
0
0
0
0
0
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
M
O
B
I
L
E
'
,
 
'
0
0
0
0
0
 
0
0
0
0
0
0
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
P
R
O
P
E
R
T
Y
N
A
M
E
'
,
 
'
M
i
 
h
o
t
e
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
P
O
S
T
C
O
D
E
'
,
 
'
X
X
N
N
 
N
N
X
X
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
E
M
A
I
L
'
,
 
'
e
x
a
m
p
l
e
@
a
d
d
r
e
s
s
.
c
o
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
E
X
T
E
N
D
E
D
_
C
O
N
F
I
G
U
R
A
T
I
O
N
'
,
 
'
C
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
e
x
t
e
n
d
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
S
I
M
P
L
E
_
C
O
N
F
I
G
U
R
A
T
I
O
N
'
,
 
'
C
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
s
e
n
c
i
l
l
a
'
)
;

j
r
_
d
e
f
i
n
e
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
H
R
E
S
O
U
R
C
E
_
F
E
A
T
U
R
E
S
'
,
 
'
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
s
 
d
e
 
r
e
c
u
r
s
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
H
R
E
S
O
U
R
C
E
_
T
Y
P
E
'
,
 
'
T
i
p
o
 
d
e
 
r
e
c
u
r
s
o
'
)
;

 
j
r
_
d
e
f
i
n
e
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
H
E
D
I
T
_
G
U
E
S
T
_
T
Y
P
E
'
,
 
'
E
d
i
t
a
r
 
t
i
p
o
 
d
e
 
i
n
v
i
t
a
d
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
H
E
D
I
T
_
C
O
U
P
O
N
'
,
 
'
E
d
i
t
a
r
 
c
u
p
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
H
E
D
I
T
_
E
X
T
R
A
'
,
 
'
e
d
i
t
a
r
 
a
d
i
c
i
o
n
a
l
'
)
;

j
r
_
d
e
f
i
n
e
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
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
T
I
T
L
E
'
,
 
'
C
r
e
a
r
 
v
a
r
i
o
s
 
r
e
c
u
r
s
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
G
E
N
E
R
A
T
E
'
,
 
'
g
e
n
e
r
a
r
 
r
e
c
u
r
s
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
H
O
W
M
A
N
Y
'
,
 
'
Â
¿
C
u
Ã
¡
n
t
o
s
 
r
e
c
u
r
s
o
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
T
Y
P
E
'
,
 
'
t
i
p
o
 
d
e
 
r
e
c
u
r
s
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
M
A
X
G
U
E
S
T
S
'
,
 
'
N
Ã
º
m
e
r
o
 
m
Ã
¡
x
i
m
o
 
d
e
 
h
u
Ã
©
s
p
e
d
e
s
 
p
o
r
 
r
e
c
u
r
s
o
'
)
;

j
r
_
d
e
f
i
n
e
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
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
D
E
L
E
T
E
'
,
 
'
E
l
i
m
i
n
a
r
 
t
o
d
o
s
 
l
o
s
 
r
e
c
u
r
s
o
s
 
e
x
i
s
t
e
n
t
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
D
V
A
N
C
E
D
_
S
I
T
E
_
C
O
N
F
I
G
_
W
A
R
N
I
N
G
'
,
 
'
T
e
n
g
a
 
e
n
 
c
u
e
n
t
a
,
 
q
u
e
 
e
s
t
Ã
¡
 
v
i
e
n
d
o
 
a
c
t
u
a
l
m
e
n
t
e
 
e
l
 
Ã
¡
r
e
a
 
d
e
l
 
a
d
m
i
n
i
s
t
r
a
d
o
r
 
d
e
l
 
s
i
t
i
o
 
c
o
n
 
A
d
v
a
n
c
e
d
 
C
o
n
f
i
g
 
e
s
t
a
b
l
e
c
i
d
o
 
e
n
 
N
o
.
 
S
i
 
u
s
t
e
d
 
q
u
i
e
r
e
 
v
e
r
 
m
Ã
¡
s
 
o
p
c
i
o
n
e
s
,
 
p
o
r
 
f
a
v
o
r
 
f
i
j
a
n
 
S
i
t
i
o
 
C
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
-
>
 
V
a
r
i
o
s
 
-
>
 
A
v
a
n
z
a
d
o
 
S
i
t
i
o
 
C
o
n
f
i
g
 
p
a
r
a
 
S
Ã
­
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
'
,
 
'
S
h
o
w
i
n
g
 
_
S
T
A
R
T
_
 
t
o
 
_
E
N
D
_
 
o
f
 
_
T
O
T
A
L
_
 
e
n
t
r
i
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
_
I
N
Q
U
I
R
Y
_
H
A
P
P
R
O
V
A
L
'
,
 
'
A
p
r
o
b
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
_
R
E
J
E
C
T
_
I
N
Q
U
I
R
Y
'
,
 
'
R
e
c
h
a
z
a
r
 
s
o
l
i
c
i
t
u
d
 
d
e
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
_
A
P
P
R
O
V
E
_
I
N
Q
U
I
R
Y
'
,
 
'
A
p
r
o
b
a
r
 
s
o
l
i
c
i
t
u
d
 
d
e
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
S
T
A
T
U
S
_
A
P
P
R
O
V
E
D
'
,
 
'
A
p
r
o
b
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
S
T
A
T
U
S
_
R
E
J
E
C
T
E
D
'
,
 
'
R
e
c
h
a
z
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
S
T
A
T
U
S
_
I
N
Q
U
I
R
Y
'
,
 
'
I
n
v
e
s
t
i
g
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
_
I
N
Q
U
I
R
Y
_
S
E
T
T
I
N
G
_
T
I
T
L
E
'
,
 
'
L
a
s
 
r
e
s
e
r
v
a
s
 
r
e
q
u
i
e
r
e
n
 
l
a
 
a
p
r
o
b
a
c
i
Ã
³
n
 
o
 
l
a
 
c
o
n
f
i
r
m
a
c
i
Ã
³
n
 
d
e
 
l
a
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
?
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
_
I
N
Q
U
I
R
Y
_
S
E
T
T
I
N
G
_
D
E
S
C
'
,
 
'
S
i
 
s
e
 
e
s
t
a
b
l
e
c
e
 
e
n
 
s
Ã
­
,
 
c
u
a
n
d
o
 
s
e
 
h
a
c
e
 
l
a
 
r
e
s
e
r
v
a
,
 
n
o
 
v
a
 
a
 
a
p
a
r
e
c
e
r
 
e
n
 
l
o
s
 
c
a
l
e
n
d
a
r
i
o
s
 
d
e
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
 
(
y
 
o
t
r
o
s
 
h
u
Ã
©
s
p
e
d
e
s
 
t
o
d
a
v
Ã
­
a
 
p
u
e
d
e
 
r
e
s
e
r
v
a
r
 
e
s
o
s
 
d
Ã
­
a
s
 
y
 
d
e
 
r
e
c
u
r
s
o
s
)
 
h
a
s
t
a
 
q
u
e
 
e
l
 
a
d
m
i
n
i
s
t
r
a
d
o
r
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
a
c
e
p
t
a
 
/
 
c
o
n
f
i
r
m
a
 
l
a
 
d
i
s
p
o
n
i
b
i
l
i
d
a
d
 
p
a
r
a
 
l
a
 
r
e
s
e
r
v
a
.
 
U
n
a
 
v
e
z
 
c
o
n
f
i
r
m
a
d
a
,
 
l
a
 
r
e
s
e
r
v
a
 
s
e
 
i
n
s
e
r
t
a
 
c
o
m
o
 
p
r
o
v
i
s
i
o
n
a
l
 
(
s
i
 
d
o
e
s
n
 
`
t
 
d
e
 
a
n
u
l
a
c
i
Ã
³
n
 
o
t
r
a
s
 
r
e
s
e
r
v
a
s
;
 
o
t
r
o
s
 
h
u
Ã
©
s
p
e
d
e
s
`
 
t
 
r
e
s
e
r
v
e
 
l
a
s
 
m
i
s
m
a
s
 
f
e
c
h
a
s
 
m
Ã
¡
s
)
 
y
 
u
n
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
 
s
e
 
e
n
v
Ã
­
a
 
a
l
 
c
l
i
e
n
t
e
 
p
a
r
a
 
r
e
a
l
i
z
a
r
 
e
l
 
p
a
g
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
E
R
R
O
R
'
,
 
'
E
r
r
o
r
'
)
;

j
r
_
d
e
f
i
n
e
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
E
R
R
O
R
_
M
E
S
S
A
G
E
'
,
 
'
Â
¡
L
o
 
s
i
e
n
t
o
!
 
S
e
 
p
r
o
d
u
j
o
 
u
n
 
e
r
r
o
r
 
a
l
 
i
n
t
e
n
t
a
r
 
p
r
o
c
e
s
a
r
 
e
s
t
a
 
f
u
n
c
i
Ã
³
n
.
 
S
e
 
h
a
 
r
e
p
o
r
t
a
d
o
 
p
a
r
a
 
u
s
t
e
d
 
y
 
v
a
m
o
s
 
a
 
v
e
r
 
e
n
 
Ã
©
l
.
'
)
;

j
r
_
d
e
f
i
n
e
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
E
R
R
O
R
_
D
E
B
U
G
G
I
N
G
_
M
E
S
S
A
G
E
'
,
 
'
M
e
n
s
a
j
e
'
)
;

j
r
_
d
e
f
i
n
e
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
E
R
R
O
R
_
D
E
B
U
G
G
I
N
G
_
F
I
L
E
'
,
 
'
A
r
c
h
i
v
o
'
)
;

j
r
_
d
e
f
i
n
e
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
E
R
R
O
R
_
D
E
B
U
G
G
I
N
G
_
L
I
N
E
'
,
 
'
L
Ã
­
n
e
a
'
)
;

j
r
_
d
e
f
i
n
e
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
E
R
R
O
R
_
D
E
B
U
G
G
I
N
G
_
T
R
A
C
E
'
,
 
'
R
a
s
t
r
o
'
)
;

j
r
_
d
e
f
i
n
e
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
E
M
A
I
L
_
T
E
M
P
L
A
T
E
S
_
T
I
T
L
E
'
,
 
'
P
l
a
n
t
i
l
l
a
s
 
d
e
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
'
)
;

j
r
_
d
e
f
i
n
e
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
E
M
A
I
L
_
T
E
M
P
L
A
T
E
S
_
E
D
I
T
'
,
 
'
E
d
i
t
a
r
 
p
l
a
n
t
i
l
l
a
 
d
e
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
'
)
;

j
r
_
d
e
f
i
n
e
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
E
M
A
I
L
_
T
E
M
P
L
A
T
E
S
_
S
U
B
J
E
C
T
'
,
 
'
A
s
u
n
t
o
 
d
e
l
 
e
m
a
i
l
'
)
;

j
r
_
d
e
f
i
n
e
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
E
M
A
I
L
_
T
E
M
P
L
A
T
E
S
_
T
E
X
T
'
,
 
'
t
e
x
t
o
 
d
e
l
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
'
)
;

j
r
_
d
e
f
i
n
e
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
E
M
A
I
L
_
T
E
M
P
L
A
T
E
S
_
T
Y
P
E
'
,
 
'
t
i
p
o
 
d
e
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
'
)
;

j
r
_
d
e
f
i
n
e
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
E
M
A
I
L
_
T
E
M
P
L
A
T
E
S
_
N
A
M
E
'
,
 
'
n
o
m
b
r
e
 
C
o
r
r
e
o
'
)
;

j
r
_
d
e
f
i
n
e
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
E
M
A
I
L
_
T
E
M
P
L
A
T
E
S
_
D
E
S
C
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
n
 
d
e
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
'
)
;

j
r
_
d
e
f
i
n
e
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
E
M
A
I
L
_
T
E
M
P
L
A
T
E
S
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
'
P
o
r
 
f
a
v
o
r
,
 
c
o
n
s
u
l
t
e
 
e
s
t
a
 
p
Ã
¡
g
i
n
a
 
p
a
r
a
 
o
b
t
e
n
e
r
 
a
y
u
d
a
 
p
e
r
s
o
n
a
l
i
z
a
c
i
Ã
³
n
 
d
e
 
l
o
s
 
m
e
n
s
a
j
e
s
 
d
e
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
 
y
 
u
n
a
 
l
i
s
t
a
 
d
e
 
l
a
 
s
a
l
i
d
a
 
d
i
s
p
o
n
i
b
l
e
s
:
 
<
a
 
h
r
e
f
=
"
h
t
t
p
:
/
/
w
w
w
.
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
/
m
a
n
u
a
l
/
p
r
o
p
e
r
t
y
-
m
a
n
a
g
e
r
s
-
g
u
i
d
e
/
4
8
-
y
o
u
r
-
t
o
o
l
b
a
r
/
s
e
t
t
i
n
g
s
/
2
5
4
-
e
m
a
i
l
-
t
e
m
p
l
a
t
e
s
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
 
P
l
a
n
t
i
l
l
a
s
 
d
e
 
C
o
r
r
e
o
 
E
l
e
c
t
r
Ã
³
n
i
c
o
 
A
y
u
d
a
 
<
 
/
 
a
>
'
)
;

j
r
_
d
e
f
i
n
e
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
A
D
M
I
N
_
N
E
W
B
O
O
K
I
N
G
_
E
M
A
I
L
N
A
M
E
'
,
 
'
A
d
m
i
n
i
s
t
r
a
d
o
r
 
d
e
l
 
s
i
t
i
o
 
N
u
e
v
a
 
r
e
s
e
r
v
a
s
 
E
-
m
a
i
l
'
)
;

j
r
_
d
e
f
i
n
e
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
A
D
M
I
N
_
N
E
W
B
O
O
K
I
N
G
_
E
M
A
I
L
D
E
S
C
'
,
 
'
C
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
 
e
n
v
i
a
d
o
 
a
l
 
a
d
m
i
n
i
s
t
r
a
d
o
r
 
d
e
l
 
s
i
t
i
o
 
c
u
a
n
d
o
 
s
e
 
h
a
c
e
 
u
n
a
 
n
u
e
v
a
 
r
e
s
e
r
v
a
,
 
s
i
 
l
a
 
p
u
e
r
t
a
 
d
e
 
e
n
l
a
c
e
 
d
e
 
P
a
y
p
a
l
 
m
u
n
d
i
a
l
 
e
s
t
Ã
¡
 
h
a
b
i
l
i
t
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
H
O
T
E
L
_
N
E
W
B
O
O
K
I
N
G
_
E
M
A
I
L
N
A
M
E
'
,
 
'
H
o
t
e
l
 
N
e
w
 
r
e
s
e
r
v
a
s
 
E
-
m
a
i
l
'
)
;

j
r
_
d
e
f
i
n
e
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
H
O
T
E
L
_
N
E
W
B
O
O
K
I
N
G
_
E
M
A
I
L
D
E
S
C
'
,
 
'
C
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
 
e
n
v
i
a
d
o
 
a
l
 
d
u
e
Ã
±
o
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
c
u
a
n
d
o
 
s
e
 
h
a
c
e
 
u
n
a
 
n
u
e
v
a
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
G
U
E
S
T
_
N
E
W
B
O
O
K
I
N
G
_
E
M
A
I
L
N
A
M
E
'
,
 
'
I
n
v
i
t
a
d
o
 
N
u
e
v
o
 
r
e
s
e
r
v
a
s
 
E
-
m
a
i
l
'
)
;

j
r
_
d
e
f
i
n
e
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
G
U
E
S
T
_
N
E
W
B
O
O
K
I
N
G
_
E
M
A
I
L
D
E
S
C
'
,
 
'
C
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
 
e
n
v
i
a
d
o
 
a
 
l
o
s
 
h
u
Ã
©
s
p
e
d
e
s
 
c
u
a
n
d
o
 
s
e
 
h
a
c
e
 
u
n
a
 
n
u
e
v
a
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
G
U
E
S
T
_
C
O
N
F
I
R
M
A
T
I
O
N
L
E
T
T
E
R
_
E
M
A
I
L
N
A
M
E
'
,
 
'
C
a
r
t
a
 
d
e
 
C
o
n
f
i
r
m
a
c
i
Ã
³
n
 
d
e
 
i
n
v
i
t
a
d
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
G
U
E
S
T
_
C
O
N
F
I
R
M
A
T
I
O
N
L
E
T
T
E
R
_
E
M
A
I
L
D
E
S
C
'
,
 
'
c
a
r
t
a
 
p
a
r
a
 
i
m
p
r
i
m
i
r
 
o
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
 
q
u
e
 
s
e
 
p
u
e
d
e
n
 
e
n
v
i
a
r
 
d
e
 
f
o
r
m
a
 
m
a
n
u
a
l
 
p
o
r
 
e
l
 
d
u
e
Ã
±
o
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
p
a
r
a
 
c
o
n
f
i
r
m
a
r
 
l
a
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
A
N
_
B
E
_
A
P
P
R
O
V
E
D
'
,
 
'
E
s
t
a
 
r
e
s
e
r
v
a
 
p
u
e
d
e
 
s
e
r
 
a
p
r
o
b
a
d
o
.
 
T
o
d
o
s
 
l
o
s
 
r
e
c
u
r
s
o
s
 
s
e
l
e
c
c
i
o
n
a
d
o
s
 
e
s
t
Ã
¡
n
 
d
i
s
p
o
n
i
b
l
e
s
 
p
a
r
a
 
l
a
s
 
f
e
c
h
a
s
 
s
e
l
e
c
c
i
o
n
a
d
a
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
A
N
T
_
B
E
_
A
P
P
R
O
V
E
D
'
,
 
'
E
s
t
a
 
r
e
s
e
r
v
a
 
p
u
e
d
e
 
`
t
 
s
e
r
 
a
p
r
o
b
a
d
o
 
d
e
b
i
d
o
 
a
 
q
u
e
 
a
l
g
u
n
o
s
 
d
e
 
l
o
s
 
r
e
c
u
r
s
o
s
 
q
u
e
 
y
a
 
e
s
t
Ã
¡
n
 
r
e
s
e
r
v
a
d
a
s
 
p
a
r
a
 
l
a
s
 
f
e
c
h
a
s
 
s
e
l
e
c
c
i
o
n
a
d
a
s
.
 
T
e
n
d
r
Ã
¡
 
q
u
e
 
m
o
d
i
f
i
c
a
r
 
l
a
 
r
e
s
e
r
v
a
 
p
r
i
m
e
r
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
S
H
O
W
_
P
O
W
E
R
E
D
B
Y
'
,
 
'
S
h
o
w
 
t
h
e
 
P
o
w
e
r
e
d
 
b
y
 
J
o
m
r
e
s
 
l
i
n
k
 
i
n
 
t
h
e
 
J
o
m
r
e
s
 
f
o
o
t
e
r
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
G
U
E
S
T
_
B
U
D
G
E
T
'
,
 
'
P
r
e
s
u
p
u
e
s
t
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
G
U
E
S
T
_
B
U
D
G
E
T
_
F
E
A
T
U
R
E
_
S
W
I
T
C
H
'
,
 
'
U
t
i
l
i
z
a
 
l
a
 
f
u
n
c
i
Ã
³
n
 
d
e
 
P
r
e
s
u
p
u
e
s
t
o
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
G
U
E
S
T
_
B
U
D
G
E
T
_
F
E
A
T
U
R
E
_
S
W
I
T
C
H
_
D
E
S
C
'
,
 
'
S
Ã
³
l
o
 
s
i
t
i
o
s
 
b
o
o
t
s
t
r
a
p
!
 
L
a
 
f
u
n
c
i
Ã
³
n
 
d
e
l
 
p
r
e
s
u
p
u
e
s
t
o
 
e
s
 
u
n
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
l
a
 
l
i
s
t
a
 
d
e
 
p
r
o
p
i
e
d
a
d
e
s
 
q
u
e
 
u
n
 
c
l
i
e
n
t
e
 
p
u
e
d
e
 
u
t
i
l
i
z
a
r
 
p
a
r
a
 
r
e
s
a
l
t
a
r
 
p
a
r
a
 
e
l
l
o
s
 
l
a
s
 
p
r
o
p
i
e
d
a
d
e
s
 
q
u
e
 
s
u
 
p
r
e
c
i
o
 
p
o
r
 
n
o
c
h
e
 
e
s
t
Ã
¡
 
b
a
j
o
 
u
n
a
 
c
i
e
r
t
a
 
f
i
g
u
r
a
.
 
L
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
t
i
e
n
e
 
a
l
g
u
n
a
s
 
l
i
m
i
t
a
c
i
o
n
e
s
 
y
a
 
q
u
e
 
p
o
d
r
Ã
­
a
 
n
o
 
s
e
r
 
a
p
r
o
p
i
a
d
a
 
p
a
r
a
 
a
l
g
u
n
o
s
 
s
i
t
i
o
s
 
q
u
e
 
u
s
a
n
 
m
u
c
h
a
s
 
d
i
v
i
s
a
s
 
d
i
f
e
r
e
n
t
e
s
.
 
T
e
n
g
a
 
e
n
 
c
u
e
n
t
a
,
 
s
i
 
u
s
t
e
d
 
e
s
t
Ã
¡
 
u
s
a
n
d
o
 
e
s
t
o
 
y
 
l
a
 
L
i
s
t
a
d
o
s
 
p
l
u
g
i
n
,
 
s
u
 
c
l
a
s
e
 
d
e
 
l
i
s
t
a
 
d
e
 
e
m
b
a
l
a
j
e
 
o
f
r
e
c
i
d
o
 
s
e
 
c
a
m
b
i
a
 
a
u
t
o
m
Ã
¡
t
i
c
a
m
e
n
t
e
 
a
 
"
P
a
n
e
l
-
p
r
i
m
a
r
i
a
"
 
c
u
a
n
d
o
 
s
e
 
m
u
e
s
t
r
a
 
l
a
 
l
i
s
t
a
 
d
e
 
p
r
o
p
i
e
d
a
d
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
R
O
N
T
_
M
R
_
E
M
A
I
L
_
T
E
X
T
_
N
A
M
E
'
,
 
'
N
o
m
b
r
e
:
 
'
)
;

j
r
_
d
e
f
i
n
e
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
F
O
R
'
,
 
'
p
a
r
a
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
I
C
I
N
G
O
U
T
P
U
T
_
N
I
G
H
T
'
,
 
'
n
o
c
h
e
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
I
C
I
N
G
O
U
T
P
U
T
_
N
I
G
H
T
S
'
,
 
'
n
o
c
h
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
L
I
V
E
_
S
C
R
O
L
L
I
N
G
'
,
 
'
U
s
o
 
v
i
v
o
 
D
e
s
p
l
a
z
a
m
i
e
n
t
o
 
/
 
D
e
s
p
l
a
z
a
m
i
e
n
t
o
 
i
n
f
i
n
i
t
o
 
e
n
 
l
a
 
l
i
s
t
a
 
d
e
 
p
r
o
p
i
e
d
a
d
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
0
'
,
 
'
J
a
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
1
'
,
 
'
F
e
b
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
2
'
,
 
'
M
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
3
'
,
 
'
A
p
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
4
'
,
 
'
M
a
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
5
'
,
 
'
J
u
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
6
'
,
 
'
J
u
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
7
'
,
 
'
A
u
g
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
8
'
,
 
'
S
e
p
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
9
'
,
 
'
O
c
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
1
0
'
,
 
'
N
o
v
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
1
1
'
,
 
'
D
e
c
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
E
M
P
T
Y
T
A
B
L
E
'
,
 
'
N
i
n
g
Ã
º
n
 
d
a
t
o
 
d
i
s
p
o
n
i
b
l
e
 
e
n
 
e
s
t
a
 
t
a
b
l
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
'
,
 
'
M
o
s
t
r
a
n
d
o
 
r
e
g
i
s
t
r
o
s
 
d
e
l
 
_
S
T
A
R
T
_
 
a
l
 
_
E
N
D
_
 
d
e
 
u
n
 
t
o
t
a
l
 
d
e
 
_
T
O
T
A
L
_
 
r
e
g
i
s
t
r
o
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
E
M
P
T
Y
'
,
 
'
M
o
s
t
r
a
n
d
o
 
r
e
g
i
s
t
r
o
s
 
d
e
l
 
0
 
a
l
 
0
 
d
e
 
u
n
 
t
o
t
a
l
 
d
e
 
0
 
r
e
g
i
s
t
r
o
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
F
I
L
T
E
R
E
D
'
,
 
'
(
f
i
l
t
r
a
d
o
 
d
e
 
u
n
 
t
o
t
a
l
 
d
e
 
_
M
A
X
_
 
r
e
g
i
s
t
r
o
s
)
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
P
O
S
T
F
I
X
'
,
 
'
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
T
H
O
U
S
A
N
D
S
'
,
 
'
,
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
L
E
N
G
T
H
M
E
N
U
'
,
 
'
M
o
s
t
r
a
r
 
_
M
E
N
U
_
 
r
e
g
i
s
t
r
o
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
L
O
A
D
I
N
G
R
E
C
O
R
D
S
'
,
 
'
C
a
r
g
a
n
d
o
.
.
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
P
R
O
C
E
S
S
I
N
G
'
,
 
'
P
r
o
c
e
s
a
n
d
o
.
.
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
S
E
A
R
C
H
'
,
 
'
B
u
s
c
a
r
:
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
Z
E
R
O
R
E
C
O
R
D
S
'
,
 
'
N
o
 
s
e
 
e
n
c
o
n
t
r
a
r
o
n
 
r
e
s
u
l
t
a
d
o
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
F
I
R
S
T
'
,
 
'
P
r
i
m
e
r
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
L
A
S
T
'
,
 
'
Ã
š
l
t
i
m
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
N
E
X
T
'
,
 
'
S
i
g
u
i
e
n
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
P
R
E
V
I
O
U
S
'
,
 
'
A
n
t
e
r
i
o
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
S
O
R
T
A
S
C
E
N
D
I
N
G
'
,
 
'
:
 
A
c
t
i
v
a
r
 
p
a
r
a
 
o
r
d
e
n
a
r
 
l
a
 
c
o
l
u
m
n
a
 
d
e
 
m
a
n
e
r
a
 
a
s
c
e
n
d
e
n
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
S
O
R
T
D
E
S
C
E
N
D
I
N
G
'
,
 
'
:
 
A
c
t
i
v
a
r
 
p
a
r
a
 
o
r
d
e
n
a
r
 
l
a
 
c
o
l
u
m
n
a
 
d
e
 
m
a
n
e
r
a
 
d
e
s
c
e
n
d
e
n
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
H
O
W
H
I
D
E
'
,
 
'
m
o
d
i
f
i
c
a
r
 
c
o
l
u
m
n
a
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
B
O
O
K
I
N
G
_
O
N
R
E
Q
U
E
S
T
'
,
 
'
R
e
s
e
r
v
a
 
b
a
j
o
 
p
e
d
i
d
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
B
O
O
K
I
N
G
_
I
N
S
T
A
N
T
'
,
 
'
r
e
s
e
r
v
a
 
a
l
 
i
n
s
t
a
n
t
e
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
F
O
N
T
A
W
E
S
O
M
E
'
,
 
'
I
n
c
l
u
i
r
 
f
u
e
n
t
e
s
 
i
c
o
n
o
 
c
o
n
j
u
n
t
o
 
i
m
p
r
e
s
i
o
n
a
n
t
e
?
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
F
O
N
T
A
W
E
S
O
M
E
_
D
E
S
C
'
,
 
'
A
j
u
s
t
e
 
e
s
t
e
 
p
a
r
Ã
¡
m
e
t
r
o
 
e
n
 
S
Ã
­
 
s
i
 
s
u
 
p
l
a
n
t
i
l
l
a
 
n
o
 
i
n
c
l
u
y
e
 
f
u
e
n
t
e
 
i
m
p
r
e
s
i
o
n
a
n
t
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
B
O
O
K
I
N
G
_
C
A
L
C
Q
U
O
T
E
'
,
 
'
s
o
l
i
c
i
t
u
d
 
d
e
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
C
O
N
F
I
R
M
A
T
I
O
N
_
D
E
A
R
'
,
 
'
q
u
e
r
i
d
o
 
'
)
;

j
r
_
d
e
f
i
n
e
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
M
U
L
T
I
S
I
T
E
S
_
S
E
L
E
C
T
_
A
_
S
I
T
E
'
,
 
'
S
e
l
e
c
c
i
o
n
a
r
 
u
n
 
s
i
t
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
M
U
L
T
I
S
I
T
E
S
_
M
U
L
T
I
S
I
T
E
S
_
L
A
B
E
L
'
,
 
'
I
d
e
n
t
i
f
i
c
a
c
i
Ã
³
n
 
d
e
l
 
s
i
t
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
S
_
E
U
_
C
O
U
N
T
R
Y
'
,
 
'
p
a
Ã
­
s
 
d
e
 
l
a
 
U
E
?
'
)
;

j
r
_
d
e
f
i
n
e
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
H
L
A
S
T
C
H
A
N
G
E
D
'
,
 
'
Ã
š
l
t
i
m
o
 
c
a
m
b
i
o
'
)
;

j
r
_
d
e
f
i
n
e
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
H
O
T
E
L
_
C
A
N
C
E
L
B
O
O
K
I
N
G
_
E
M
A
I
L
N
A
M
E
'
,
 
'
R
e
s
e
r
v
a
 
d
e
 
H
o
t
e
l
e
s
 
d
e
 
c
a
n
c
e
l
a
c
i
Ã
³
n
 
p
o
r
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
'
)
;

j
r
_
d
e
f
i
n
e
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
H
O
T
E
L
_
C
A
N
C
E
L
B
O
O
K
I
N
G
_
E
M
A
I
L
D
E
S
C
'
,
 
'
C
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
 
e
n
v
i
a
d
o
 
a
l
 
d
u
e
Ã
±
o
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
,
 
c
u
a
n
d
o
 
u
n
a
 
n
u
e
v
a
 
r
e
s
e
r
v
a
 
s
e
 
c
a
n
c
e
l
a
'
)
;

j
r
_
d
e
f
i
n
e
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
G
U
E
S
T
_
C
A
N
C
E
L
B
O
O
K
I
N
G
_
E
M
A
I
L
N
A
M
E
'
,
 
'
H
u
Ã
©
s
p
e
d
e
s
 
d
e
 
c
a
n
c
e
l
a
c
i
Ã
³
n
 
d
e
 
r
e
s
e
r
v
a
 
p
o
r
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
'
)
;

j
r
_
d
e
f
i
n
e
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
G
U
E
S
T
_
C
A
N
C
E
L
B
O
O
K
I
N
G
_
E
M
A
I
L
D
E
S
C
'
,
 
'
C
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
 
e
n
v
i
a
d
o
 
a
 
l
o
s
 
h
u
Ã
©
s
p
e
d
e
s
 
c
u
a
n
d
o
 
u
n
a
 
n
u
e
v
a
 
r
e
s
e
r
v
a
 
s
e
 
c
a
n
c
e
l
a
'
)
;

j
r
_
d
e
f
i
n
e
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
T
E
S
T
_
E
M
A
I
L
_
S
E
N
D
'
,
 
'
E
n
v
i
a
r
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
 
d
e
 
p
r
u
e
b
a
'
)
;

j
r
_
d
e
f
i
n
e
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
T
E
S
T
_
E
M
A
I
L
_
S
U
B
J
E
C
T
'
,
 
'
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
 
d
e
 
p
r
u
e
b
a
'
)
;

j
r
_
d
e
f
i
n
e
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
T
E
S
T
_
E
M
A
I
L
_
C
O
N
T
E
N
T
'
,
 
'
E
s
t
e
 
e
s
 
u
n
 
m
e
n
s
a
j
e
 
d
e
 
p
r
u
e
b
a
 
d
e
s
d
e
 
s
u
 
s
i
s
t
e
m
a
 
d
e
 
r
e
s
e
r
v
a
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
T
E
S
T
_
E
M
A
I
L
_
R
E
S
U
L
T
_
S
U
C
C
E
S
S
'
,
 
'
P
r
u
e
b
a
 
d
e
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
 
e
n
v
i
a
d
o
 
c
o
n
 
Ã
©
x
i
t
o
'
)
;

j
r
_
d
e
f
i
n
e
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
T
E
S
T
_
E
M
A
I
L
_
R
E
S
U
L
T
_
F
A
I
L
U
R
E
'
,
 
'
P
r
u
e
b
a
 
d
e
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
 
n
o
 
s
e
 
h
a
 
e
n
v
i
a
d
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
I
N
V
O
I
C
E
_
T
R
A
N
S
A
C
T
I
O
N
S
'
,
 
'
A
c
t
a
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
P
E
N
E
X
C
H
A
N
G
E
_
A
P
I
'
,
 
'
A
b
r
i
r
 
C
o
t
i
z
a
c
i
o
n
e
s
 
c
l
a
v
e
 
d
e
 
A
P
I
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
P
E
N
E
X
C
H
A
N
G
E
_
A
P
I
_
D
E
S
C
'
,
 
'
P
a
r
a
 
c
o
n
v
e
r
t
i
r
 
l
o
s
 
p
r
e
c
i
o
s
 
e
n
t
r
e
 
l
o
s
 
s
e
r
v
i
c
i
o
s
 
q
u
e
 
n
e
c
e
s
i
t
a
r
Ã
¡
 
u
n
a
 
c
l
a
v
e
 
d
e
 
A
P
I
 
a
b
i
e
r
t
a
 
T
a
s
a
 
d
e
 
c
a
m
b
i
o
.
 
U
s
t
e
d
 
d
e
b
e
 
t
e
n
e
r
 
u
n
a
 
c
l
a
v
e
 
d
e
 
A
P
I
 
p
a
r
a
 
v
i
s
u
a
l
i
z
a
r
 
l
o
s
 
p
r
e
c
i
o
s
 
c
o
r
r
e
c
t
a
m
e
n
t
e
 
e
n
 
J
o
m
r
e
s
,
 
s
i
n
 
e
m
b
a
r
g
o
,
 
p
u
e
d
e
 
r
e
g
i
s
t
r
a
r
s
e
 
p
a
r
a
 
o
b
t
e
n
e
r
 
u
n
a
 
c
l
a
v
e
 
g
r
a
t
u
i
t
a
 
e
n
 
<
a
 
h
r
e
f
=
"
h
t
t
p
s
:
/
/
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
.
o
r
g
/
s
i
g
n
u
p
/
f
r
e
e
"
 
_
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
r
e
g
i
s
t
e
r
 
f
o
r
 
a
 
f
r
e
e
 
k
e
y
<
/
a
>
 
 
(
a
c
t
u
a
l
i
z
a
c
i
o
n
e
s
 
c
a
d
a
 
h
o
r
a
,
 
1
0
0
0
 
p
e
t
i
c
i
o
n
e
s
 
/
 
m
e
s
 
-
 
s
i
n
 
H
T
T
P
S
,
 
s
o
p
o
r
t
e
 
d
e
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
 
o
 
f
u
n
c
i
o
n
e
s
 
a
v
a
n
z
a
d
a
s
 
)
.
 
t
i
p
o
s
 
d
e
 
c
a
m
b
i
o
 
j
o
m
r
e
s
 
d
e
s
c
a
r
g
a
s
 
u
n
a
 
v
e
z
 
a
l
 
d
Ã
­
a
 
p
o
r
 
l
o
 
q
u
e
 
e
l
 
t
i
e
m
p
o
 
q
u
e
 
s
e
 
u
t
i
l
i
z
a
 
l
a
 
t
e
c
l
a
 
d
e
 
s
Ã
³
l
o
 
u
n
 
p
u
Ã
±
a
d
o
 
d
e
 
s
i
t
i
o
s
,
 
q
u
e
 
s
o
n
 
p
o
c
o
 
p
r
o
b
a
b
l
e
 
q
u
e
 
s
u
p
e
r
e
 
e
s
t
o
s
 
l
Ã
­
m
i
t
e
s
.
 
A
n
t
e
r
i
o
r
 
a
 
J
o
m
r
e
s
 
8
.
3
 
s
e
 
u
t
i
l
i
z
Ã
³
 
u
n
a
,
 
i
n
d
o
c
u
m
e
n
t
a
d
o
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
m
a
y
o
r
e
s
 
Y
a
h
o
o
 
S
i
n
 
e
m
b
a
r
g
o
 
h
a
n
 
d
e
s
c
u
b
i
e
r
t
o
 
q
u
e
 
e
l
 
u
s
o
 
d
e
 
e
s
t
a
 
f
u
n
c
i
Ã
³
n
 
e
s
t
Ã
¡
 
e
n
 
c
o
n
t
r
a
d
i
c
c
i
Ã
³
n
 
c
o
n
 
Y
a
h
o
o
s
 
T
Ã
©
r
m
i
n
o
s
 
y
 
C
o
n
d
i
c
i
o
n
e
s
.
 
C
o
m
o
 
r
e
s
u
l
t
a
d
o
 
t
e
n
e
m
o
s
 
q
u
e
 
a
s
u
m
i
r
 
q
u
e
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
p
u
e
d
e
 
d
e
s
a
p
a
r
e
c
e
r
 
e
n
 
a
l
g
Ã
º
n
 
m
o
m
e
n
t
o
 
e
n
 
e
l
 
f
u
t
u
r
o
,
 
d
e
 
a
h
Ã
­
 
e
l
 
c
a
m
b
i
o
 
a
l
 
u
s
o
 
A
b
i
e
r
t
a
s
 
T
i
p
o
 
d
e
 
C
a
m
b
i
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
M
I
S
S
I
O
N
'
,
 
'
C
o
m
i
s
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
N
O
T
E
S
_
C
O
R
E
_
E
X
T
R
A
S
'
,
 
'
S
i
 
a
 
s
u
b
i
r
 
v
a
r
i
a
s
 
i
m
Ã
¡
g
e
n
e
s
 
d
e
 
l
o
s
 
a
c
c
e
s
o
r
i
o
s
 
o
p
c
i
o
n
a
l
e
s
 
i
n
d
i
v
i
d
u
a
l
e
s
,
 
s
Ã
³
l
o
 
s
e
 
u
t
i
l
i
z
a
r
Ã
¡
 
l
a
 
p
r
i
m
e
r
a
 
i
m
a
g
e
n
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
P
A
Y
N
O
W
'
,
 
'
P
a
g
u
e
 
a
h
o
r
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
P
A
Y
N
O
W
_
D
E
S
C
'
,
 
'
E
s
t
a
 
f
a
c
t
u
r
a
 
s
e
 
d
e
b
e
 
a
h
o
r
a
.
 
P
o
r
 
f
a
v
o
r
,
 
h
a
g
a
 
c
l
i
c
 
e
n
 
e
l
 
b
o
t
Ã
³
n
 
p
a
r
a
 
s
e
l
e
c
c
i
o
n
a
r
 
e
l
 
m
Ã
©
t
o
d
o
 
d
e
 
p
a
g
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
E
X
T
R
A
S
_
T
E
M
P
L
A
T
E
'
,
 
'
H
e
 
a
q
u
Ã
­
 
u
n
a
 
l
i
s
t
a
 
d
e
 
a
l
g
u
n
a
s
 
d
e
 
l
a
s
 
g
r
a
n
d
e
s
 
c
o
s
a
s
 
q
u
e
 
u
s
t
e
d
 
p
u
e
d
e
 
c
o
m
p
r
a
r
 
a
l
 
h
a
c
e
r
 
u
n
a
 
r
e
s
e
r
v
a
 
e
n
 
e
s
t
a
 
p
r
o
p
i
e
d
a
d
.
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
G
A
T
E
W
A
Y
S
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
'
E
n
 
e
s
t
a
 
p
Ã
¡
g
i
n
a
 
s
e
 
p
u
e
d
e
 
c
o
n
f
i
g
u
r
a
r
 
n
i
n
g
u
n
a
 
p
a
s
a
r
e
l
a
s
 
i
n
s
t
a
l
a
d
a
s
.
 
E
s
t
a
s
 
o
p
c
i
o
n
e
s
 
l
e
 
p
e
r
m
i
t
e
n
 
t
o
m
a
r
 
e
l
 
p
a
g
o
 
d
e
 
n
i
n
g
Ã
º
n
 
t
i
p
o
 
d
e
 
c
o
m
i
s
i
Ã
³
n
 
d
e
 
s
u
s
c
r
i
p
c
i
Ã
³
n
 
o
 
f
a
c
t
u
r
a
s
.
 
f
r
o
n
t
e
n
d
 
a
j
u
s
t
e
s
 
s
Ã
³
l
o
 
p
u
e
d
e
n
 
s
e
r
 
a
n
u
l
a
d
o
s
 
p
o
r
 
P
a
y
p
a
l
,
 
t
e
n
d
r
Ã
¡
n
 
q
u
e
 
s
e
r
 
c
o
n
f
i
g
u
r
a
d
o
 
a
 
t
r
a
v
Ã
©
s
 
d
e
 
l
a
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
t
o
d
a
s
 
l
a
s
 
d
e
m
Ã
¡
s
 
p
u
e
r
t
a
s
 
d
e
 
e
n
l
a
c
e
 
-
>
 
p
e
s
t
a
Ã
±
a
 
p
a
s
a
r
e
l
a
s
,
 
s
i
n
 
e
m
b
a
r
g
o
,
 
s
i
 
u
n
a
 
p
u
e
r
t
a
 
d
e
 
e
n
l
a
c
e
 
a
p
a
r
e
c
e
 
e
n
 
e
s
t
a
 
l
i
s
t
a
,
 
e
n
t
o
n
c
e
s
 
d
e
b
e
r
Ã
­
a
 
s
e
r
 
c
a
p
a
z
 
d
e
 
p
r
o
c
e
s
a
r
 
t
a
n
t
o
 
l
o
s
 
p
a
g
o
s
 
d
e
 
d
e
p
Ã
³
s
i
t
o
 
d
e
 
r
e
s
e
r
v
a
 
y
 
p
a
g
o
s
 
d
e
 
f
a
c
t
u
r
a
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
E
X
T
R
A
S
_
I
N
C
L
U
D
E
_
I
N
_
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
'
,
 
'
M
o
s
t
r
a
r
 
e
n
 
p
Ã
¡
g
i
n
a
 
d
e
 
d
e
t
a
l
l
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
P
R
O
P
E
R
T
Y
_
D
E
T
A
I
L
S
_
P
A
G
E
_
O
P
T
I
O
N
S
'
,
 
'
c
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
d
e
 
l
a
 
p
Ã
¡
g
i
n
a
 
D
e
t
a
l
l
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
H
L
I
S
T
_
P
R
O
P
E
R
T
I
E
S
_
W
A
R
N
I
N
G
'
,
 
'
g
e
s
t
i
Ã
³
n
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
e
n
 
J
o
m
r
e
s
 
s
e
 
h
a
c
e
 
s
Ã
³
l
o
 
d
e
s
d
e
 
e
l
 
c
p
a
n
e
l
 
s
i
t
i
o
 
f
r
o
n
t
e
n
d
.
 
E
n
 
e
s
t
a
 
p
Ã
¡
g
i
n
a
 
u
s
t
e
d
 
`
l
l
 
s
e
r
 
c
a
p
a
z
 
d
e
 
e
n
u
m
e
r
a
r
 
t
o
d
a
s
 
l
a
s
 
p
r
o
p
i
e
d
a
d
e
s
 
e
n
 
e
l
 
s
i
s
t
e
m
a
,
 
l
o
 
q
u
e
 
p
u
e
d
e
 
a
s
i
g
n
a
r
 
t
a
s
a
s
 
d
e
 
c
o
m
i
s
i
Ã
³
n
 
y
 
a
p
r
o
b
a
r
 
/
 
a
n
u
l
a
r
 
l
a
 
a
p
r
o
b
a
c
i
Ã
³
n
 
(
s
i
 
s
e
 
h
a
b
i
l
i
t
a
n
 
e
s
t
a
s
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
s
)
.
 
P
a
r
a
 
c
r
e
a
r
 
u
n
a
 
n
u
e
v
a
 
p
r
o
p
i
e
d
a
d
,
 
e
d
i
t
a
r
 
l
o
s
 
y
a
 
e
x
i
s
t
e
n
t
e
s
,
 
a
d
m
i
n
i
s
t
r
a
r
 
l
a
s
 
r
e
s
e
r
v
a
s
 
o
 
c
u
a
l
q
u
i
e
r
 
t
i
p
o
 
d
e
 
r
e
s
e
r
v
a
s
 
d
e
 
p
r
o
p
i
e
d
a
d
 
/
 
t
a
r
e
a
s
 
r
e
l
a
c
i
o
n
a
d
a
s
,
 
`
l
l
 
t
i
e
n
e
 
q
u
e
 
i
n
i
c
i
a
r
 
s
e
s
i
Ã
³
n
 
e
n
 
l
a
 
i
n
t
e
r
f
a
z
 
w
e
b
 
y
 
v
a
y
a
 
a
 
l
a
 
p
Ã
¡
g
i
n
a
 
p
o
r
 
d
e
f
e
c
t
o
 
J
o
m
r
e
s
.
 
N
o
 
l
e
 
l
l
 
v
e
r
 
l
a
 
i
n
t
e
r
f
a
z
 
d
e
 
c
P
a
n
e
l
 
J
o
m
r
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
F
E
A
T
U
R
E
S
_
I
C
O
N
S
'
,
 
'
l
o
s
 
i
c
o
n
o
s
 
d
e
 
f
u
n
c
i
o
n
e
s
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
_
H
C
A
T
E
G
O
R
I
E
S
'
,
 
'
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
s
 
d
e
 
n
e
g
o
c
i
o
 
C
a
t
e
g
o
r
Ã
­
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
_
H
C
A
T
E
G
O
R
I
E
S
_
H
E
D
I
T
'
,
 
'
E
d
i
t
a
r
 
n
e
g
o
c
i
o
s
 
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
C
a
t
e
g
o
r
Ã
­
a
'
)
;

j
r
_
d
e
f
i
n
e
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
H
C
A
T
E
G
O
R
Y
'
,
 
'
C
a
t
e
g
o
r
Ã
­
a
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
_
H
S
H
O
W
_
C
A
T
E
G
O
R
I
E
S
'
,
 
'
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
s
 
d
e
l
 
m
u
n
d
o
 
d
e
l
 
e
s
p
e
c
t
Ã
¡
c
u
l
o
 
s
e
p
a
r
a
d
o
s
 
e
n
 
c
a
t
e
g
o
r
Ã
­
a
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
_
H
S
H
O
W
_
C
A
T
E
G
O
R
I
E
S
_
D
E
S
C
'
,
 
'
E
s
t
a
b
l
e
c
e
r
 
c
o
m
o
 
S
Ã
­
 
p
a
r
a
 
s
e
p
a
r
a
r
 
l
a
s
 
f
u
n
c
i
o
n
e
s
 
d
e
 
p
r
o
p
i
e
d
a
d
 
e
n
 
c
a
t
e
g
o
r
Ã
­
a
s
.
 
E
s
t
a
 
o
p
c
i
Ã
³
n
 
s
Ã
³
l
o
 
a
f
e
c
t
a
 
a
 
l
a
s
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
q
u
e
 
s
e
 
m
u
e
s
t
r
a
n
 
e
n
 
l
a
 
p
Ã
¡
g
i
n
a
 
d
e
 
d
e
t
a
l
l
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
.
 
T
o
d
a
s
 
l
a
s
 
d
e
m
Ã
¡
s
 
p
Ã
¡
g
i
n
a
s
 
s
e
 
m
o
s
t
r
a
r
l
o
s
 
s
i
n
 
n
e
c
e
s
i
d
a
d
 
d
e
 
d
i
v
i
d
i
r
l
o
s
 
e
n
 
c
a
t
e
g
o
r
Ã
­
a
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
A
C
T
I
O
N
_
U
N
D
O
_
C
H
E
C
K
I
N
'
,
 
'
D
e
s
h
a
c
e
r
 
e
l
 
r
e
g
i
s
t
r
o
'
)
;

j
r
_
d
e
f
i
n
e
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
A
C
T
I
O
N
_
U
N
D
O
_
C
H
E
C
K
O
U
T
'
,
 
'
d
e
s
h
a
c
e
r
 
d
e
s
p
r
o
t
e
c
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
S
T
A
T
U
S
_
U
N
I
S
S
U
E
D
'
,
 
'
n
o
 
e
m
i
t
i
d
a
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
E
F
A
U
L
T
_
T
E
R
M
S
_
A
N
D
_
C
O
N
D
I
T
I
O
N
S
'
,
 
'
'
)
;

j
r
_
d
e
f
i
n
e
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
S
U
P
P
O
R
T
K
E
Y
_
D
E
S
C
_
V
A
L
I
D
'
,
 
'
E
l
 
p
r
o
c
e
s
o
 
d
e
 
d
e
s
c
a
r
g
a
 
y
 
e
l
 
a
p
o
y
o
 
c
l
a
v
e
 
e
s
 
v
Ã
¡
l
i
d
a
,
 
u
s
t
e
d
 
s
e
r
Ã
¡
 
c
a
p
a
z
 
d
e
 
d
e
s
c
a
r
g
a
r
 
p
l
u
g
i
n
s
 
a
 
t
r
a
v
Ã
©
s
 
d
e
l
 
a
d
m
i
n
i
s
t
r
a
d
o
r
 
d
e
 
p
l
u
g
i
n
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
S
U
P
P
O
R
T
K
E
Y
_
D
E
S
C
_
I
N
V
A
L
I
D
'
,
 
'
E
l
 
p
r
o
c
e
s
o
 
d
e
 
d
e
s
c
a
r
g
a
 
y
 
l
a
 
c
l
a
v
e
 
d
e
 
a
p
o
y
o
 
n
o
 
e
s
 
v
Ã
¡
l
i
d
a
,
 
n
o
 
s
e
r
Ã
¡
 
c
a
p
a
z
 
d
e
 
d
e
s
c
a
r
g
a
r
 
p
l
u
g
i
n
s
 
a
 
t
r
a
v
Ã
©
s
 
d
e
l
 
a
d
m
i
n
i
s
t
r
a
d
o
r
 
d
e
 
p
l
u
g
i
n
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
S
R
P
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
'
,
 
'
s
u
b
t
i
p
o
'
)
;

j
r
_
d
e
f
i
n
e
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
S
R
P
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
_
S
A
N
I
T
Y
_
C
H
E
C
K
'
,
 
'
A
Ã
º
n
 
n
o
 
s
e
 
h
a
 
e
s
t
a
b
l
e
c
i
d
o
 
s
u
 
p
r
o
p
i
e
d
a
d
 
s
u
b
t
i
p
o
.
 
A
q
u
Ã
­
 
e
s
 
d
o
n
d
e
 
u
s
t
e
d
 
l
o
 
d
e
f
i
n
e
 
c
o
m
o
 
a
l
g
o
 
p
a
r
e
c
i
d
o
 
a
 
u
n
a
 
v
i
l
l
a
 
d
e
 
5
 
d
o
r
m
i
t
o
r
i
o
s
 
y
 
4
 
d
o
r
m
i
t
o
r
i
o
s
 
c
a
s
a
 
y
 
q
u
e
 
l
e
 
a
y
u
d
a
 
a
 
l
o
s
 
c
l
i
e
n
t
e
s
 
q
u
e
 
e
s
t
Ã
¡
n
 
b
u
s
c
a
n
d
o
 
p
a
r
a
 
r
e
f
i
n
a
r
 
s
u
s
 
b
Ã
º
s
q
u
e
d
a
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
S
R
P
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
L
I
N
K
'
,
 
'
D
a
r
 
a
 
s
u
 
p
r
o
p
i
e
d
a
d
 
u
n
 
s
u
b
t
i
p
o
'
)
;

j
r
_
d
e
f
i
n
e
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
E
M
A
I
L
_
T
E
M
P
L
A
T
E
S
_
T
I
T
L
E
'
,
 
'
P
l
a
n
t
i
l
l
a
s
 
d
e
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
T
A
C
T
_
S
E
T
T
I
N
G
S
'
,
 
'
a
j
u
s
t
e
s
 
d
e
 
l
o
s
 
c
o
n
t
a
c
t
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
T
A
C
T
_
S
E
T
T
I
N
G
S
_
D
E
S
C
'
,
 
'
D
e
s
d
e
 
a
q
u
Ã
­
 
s
e
 
p
u
e
d
e
 
a
n
u
l
a
r
 
t
o
d
o
s
 
l
o
s
 
d
e
t
a
l
l
e
s
 
p
r
o
p
i
e
d
a
d
e
s
 
d
e
 
c
o
n
t
a
c
t
o
 
(
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
,
 
t
e
l
Ã
©
f
o
n
o
,
 
f
a
x
)
 
p
o
r
 
l
o
 
q
u
e
 
t
o
d
a
 
l
a
 
c
o
m
u
n
i
c
a
c
i
Ã
³
n
 
c
o
n
 
l
o
s
 
c
l
i
e
n
t
e
s
 
s
e
r
Ã
¡
 
e
n
v
i
a
d
o
 
a
 
u
s
t
e
d
 
y
 
n
o
 
a
 
l
o
s
 
d
u
e
Ã
±
o
s
 
d
e
 
p
r
o
p
i
e
d
a
d
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
O
V
E
R
R
I
D
E
_
P
R
O
P
E
R
T
Y
_
C
O
N
T
A
C
T
_
D
E
T
A
I
L
S
'
,
 
'
I
n
v
a
l
i
d
a
r
 
l
o
s
 
d
a
t
o
s
 
d
e
 
c
o
n
t
a
c
t
o
 
l
i
s
t
a
d
o
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
O
V
E
R
R
I
D
E
_
P
R
O
P
E
R
T
Y
_
C
O
N
T
A
C
T
_
D
E
T
A
I
L
S
_
D
E
S
C
'
,
 
'
S
i
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
s
e
 
e
s
t
a
b
l
e
c
e
 
e
n
 
S
Ã
­
 
y
 
d
i
r
e
c
c
i
o
n
e
s
 
d
e
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
 
y
 
n
Ã
º
m
e
r
o
s
 
d
e
 
t
e
l
Ã
©
f
o
n
o
 
d
e
 
p
r
o
p
i
e
d
a
d
 
s
e
r
Ã
¡
n
 
r
e
e
m
p
l
a
z
a
d
a
s
 
c
o
n
 
l
a
s
 
q
u
e
 
f
i
g
u
r
a
n
 
e
n
 
e
s
t
a
 
f
i
c
h
a
.
 
E
s
t
o
 
o
b
l
i
g
a
 
a
 
q
u
e
 
t
o
d
a
s
 
l
a
s
 
c
o
m
u
n
i
c
a
c
i
o
n
e
s
 
q
u
e
 
s
e
 
e
n
v
Ã
­
e
n
 
a
 
s
u
 
d
i
r
e
c
c
i
Ã
³
n
 
d
e
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
 
n
o
m
i
n
a
d
o
 
a
s
e
g
u
r
a
r
 
q
u
e
 
e
l
 
h
u
Ã
©
s
p
e
d
 
y
 
e
l
 
d
u
e
Ã
±
o
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
n
o
 
s
e
 
p
u
e
d
e
n
 
p
a
s
a
r
 
p
o
r
 
a
l
t
o
 
e
l
 
m
o
t
o
r
 
d
e
 
r
e
s
e
r
v
a
s
 
y
 
l
o
s
 
g
a
s
t
o
s
 
d
e
 
c
o
m
i
s
i
Ã
³
n
 
q
u
e
 
r
e
s
u
l
t
a
r
Ã
¡
n
.
 
T
a
m
b
i
Ã
©
n
 
s
i
g
n
i
f
i
c
a
 
q
u
e
 
c
a
d
a
 
v
e
z
 
q
u
e
 
s
e
 
c
a
m
b
i
a
 
u
n
a
 
d
e
s
c
r
i
p
c
i
Ã
³
n
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
d
e
l
 
i
n
m
u
e
b
l
e
 
s
e
 
a
j
u
s
t
a
r
Ã
¡
 
a
 
N
o
 
a
p
r
o
b
a
d
o
 
(
s
i
 
l
a
s
 
a
p
r
o
b
a
c
i
o
n
e
s
 
f
u
n
c
i
Ã
³
n
 
e
s
t
Ã
¡
 
h
a
b
i
l
i
t
a
d
a
)
 
y
 
t
e
n
d
r
Ã
¡
 
q
u
e
 
c
o
m
p
r
o
b
a
r
 
m
a
n
u
a
l
m
e
n
t
e
 
l
a
 
d
e
s
c
r
i
p
c
i
Ã
³
n
 
p
a
r
a
 
a
s
e
g
u
r
a
r
s
e
 
d
e
 
q
u
e
 
l
o
s
 
g
e
r
e
n
t
e
s
 
n
o
 
h
a
n
 
e
n
t
r
a
d
o
 
t
e
l
Ã
©
f
o
n
o
 
o
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
 
d
e
t
a
l
l
e
s
 
e
n
 
l
o
s
 
c
a
m
p
o
s
 
d
e
 
t
e
x
t
o
 
a
n
t
e
s
 
d
e
 
a
p
r
o
b
a
r
 
d
e
 
n
u
e
v
o

.
'
)
;

j
r
_
d
e
f
i
n
e
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
E
D
I
T
P
R
O
P
E
R
T
Y
_
A
P
P
R
O
V
A
L
_
W
A
R
N
I
N
G
'
,
 
'
L
o
s
 
c
a
m
b
i
o
s
 
r
e
a
l
i
z
a
d
o
s
 
e
n
 
d
e
t
a
l
l
e
s
 
d
e
l
 
a
n
u
n
c
i
o
 
r
e
q
u
i
e
r
e
n
 
l
a
 
v
e
r
i
f
i
c
a
c
i
Ã
³
n
 
d
e
l
 
s
i
t
i
o
 
d
e
 
a
d
m
i
n
i
s
t
r
a
c
i
Ã
³
n
.
 
S
i
 
g
u
a
r
d
a
 
l
o
s
 
n
u
e
v
o
s
 
d
e
t
a
l
l
e
s
,
 
s
u
 
p
e
r
f
i
l
 
s
e
r
Ã
¡
 
l
a
 
a
p
r
o
b
a
c
i
Ã
³
n
 
d
e
l
 
s
i
t
i
o
 
d
e
 
a
d
m
i
n
i
s
t
r
a
c
i
Ã
³
n
 
i
n
Ã
©
d
i
t
o
s
 
y
 
d
e
 
e
s
p
e
r
a
 
a
n
t
e
s
 
d
e
 
q
u
e
 
s
e
a
 
v
i
s
i
b
l
e
 
d
e
 
n
u
e
v
o
 
p
a
r
a
 
l
o
s
 
v
i
s
i
t
a
n
t
e
s
 
d
e
l
 
s
i
t
i
o
.
 
U
s
t
e
d
 
`
t
 
s
e
a
 
c
a
p
a
z
 
d
e
 
r
e
c
i
b
i
r
 
r
e
s
e
r
v
a
s
 
e
n
 
l
Ã
­
n
e
a
,
 
m
i
e
n
t
r
a
s
 
q
u
e
 
s
u
 
p
e
r
f
i
l
 
e
s
 
i
n
Ã
©
d
i
t
a
 
y
a
 
l
a
 
e
s
p
e
r
a
 
d
e
 
a
p
r
o
b
a
c
i
Ã
³
n
.
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
_
E
N
Q
U
I
R
Y
_
R
E
V
I
E
W
'
,
 
'
s
o
l
i
c
i
t
u
d
 
d
e
 
r
e
v
i
s
i
Ã
³
n
 
d
e
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
_
E
N
Q
U
I
R
Y
_
C
O
N
F
I
R
M
'
,
 
'
C
o
n
f
i
r
m
a
r
 
s
o
l
i
c
i
t
u
d
 
d
e
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
_
E
N
Q
U
I
R
Y
_
A
M
E
N
D
'
,
 
'
M
o
d
i
f
i
c
a
r
 
s
o
l
i
c
i
t
u
d
 
d
e
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
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
V
O
I
C
E
_
M
A
R
K
A
S
P
E
N
D
I
N
G
'
,
 
'
M
a
r
c
o
s
 
f
a
c
t
u
r
a
 
c
o
m
o
 
p
e
n
d
i
e
n
t
e
'
)
;

j
r
_
d
e
f
i
n
e
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
V
O
I
C
E
_
M
A
R
K
E
D
A
S
P
E
N
D
I
N
G
'
,
 
'
F
a
c
t
u
r
a
 
a
p
a
r
e
c
e
 
c
o
m
o
 
p
e
n
d
i
e
n
t
e
'
)
;

j
r
_
d
e
f
i
n
e
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
T
R
A
C
K
I
N
G
_
E
N
A
B
L
E
'
,
 
'
E
n
v
i
a
r
 
d
a
t
o
s
 
d
e
 
s
e
g
u
i
m
i
e
n
t
o
 
a
n
Ã
³
n
i
m
o
?
'
)
;

j
r
_
d
e
f
i
n
e
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
T
R
A
C
K
I
N
G
_
E
N
A
B
L
E
_
D
E
S
C
'
,
 
'
S
e
l
e
c
c
i
o
n
e
 
S
Ã
­
 
p
a
r
a
 
e
n
v
i
a
r
 
d
a
t
o
s
 
d
e
 
s
e
g
u
i
m
i
e
n
t
o
 
a
n
Ã
³
n
i
m
o
s
 
p
a
r
a
 
J
o
m
r
e
s
.
n
e
t
 
p
a
r
a
 
a
y
u
d
a
r
n
o
s
 
a
 
e
n
t
e
n
d
e
r
 
m
e
j
o
r
 
c
Ã
³
m
o
 
s
e
 
u
t
i
l
i
z
a
 
e
l
 
s
i
s
t
e
m
a
 
d
e
.
'
)
;

j
r
_
d
e
f
i
n
e
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
P
A
R
T
N
E
R
S
_
P
L
E
A
S
E
_
C
O
M
P
L
E
T
E
'
,
 
'
P
o
r
 
f
a
v
o
r
 
a
s
e
g
Ã
º
r
e
s
e
 
d
e
 
q
u
e
 
s
u
s
 
d
a
t
o
s
 
s
e
 
h
a
n
 
c
o
m
p
l
e
t
a
d
o
 
e
n
 
l
a
 
p
Ã
¡
g
i
n
a
 
E
d
i
t
a
r
 
m
i
 
c
u
e
n
t
a
 
a
n
t
e
s
 
d
e
 
i
n
t
e
n
t
a
r
 
h
a
c
e
r
 
r
e
s
e
r
v
a
s
 
e
n
 
n
o
m
b
r
e
 
d
e
 
s
u
s
 
c
l
i
e
n
t
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
P
A
R
T
N
E
R
S
_
G
U
E
S
T
_
A
D
D
R
E
S
S
'
,
 
'
l
o
s
 
d
a
t
o
s
 
d
e
 
c
o
n
t
a
c
t
o
 
d
e
 
l
o
s
 
h
u
Ã
©
s
p
e
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
L
E
A
R
_
G
U
E
S
T
_
D
E
T
A
I
L
S
'
,
 
'
 
-
-
 
n
u
e
v
a
 
h
u
Ã
©
s
p
e
d
e
s
 
-
-
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
H
A
R
T
S
'
,
 
'
G
r
Ã
¡
f
i
c
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
H
A
R
T
S
_
S
E
L
E
C
T
'
,
 
'
S
e
l
e
c
c
i
o
n
a
r
 
t
a
b
l
a
.
.
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
H
A
R
T
_
B
O
O
K
I
N
G
S
_
D
E
S
C
'
,
 
'
E
l
 
i
n
g
r
e
s
o
 
p
o
r
 
a
Ã
±
o
 
/
 
m
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
P
_
R
O
O
M
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
'
,
 
'
O
k
,
 
v
a
m
o
s
 
a
 
e
m
p
e
z
a
r
.
 
E
n
 
p
r
i
m
e
r
 
l
u
g
a
r
 
e
s
 
n
e
c
e
s
a
r
i
o
 
c
r
e
a
r
 
a
l
g
u
n
a
s
 
h
a
b
i
t
a
c
i
o
n
e
s
 
d
e
 
e
s
t
a
 
p
r
o
p
i
e
d
a
d
.
'
)
;

j
r
_
d
e
f
i
n
e
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
M
R
P
_
R
O
O
M
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
L
I
N
K
'
,
 
'
C
r
e
a
r
 
a
l
g
u
n
a
s
 
h
a
b
i
t
a
c
i
o
n
e
s
 
a
h
o
r
a
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
G
E
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
'
,
 
'
L
a
 
i
n
v
e
s
t
i
g
a
c
i
Ã
³
n
 
h
a
 
d
e
m
o
s
t
r
a
d
o
 
q
u
e
 
l
a
s
 
p
r
o
p
i
e
d
a
d
e
s
 
c
o
n
 
u
n
 
m
o
n
t
Ã
³
n
 
d
e
 
i
m
Ã
¡
g
e
n
e
s
 
d
e
 
a
l
t
a
 
c
a
l
i
d
a
d
 
g
e
n
e
r
a
n
 
m
Ã
¡
s
 
p
u
n
t
o
s
 
d
e
 
v
i
s
t
a
.
 
S
u
b
e
 
u
n
a
 
i
m
a
g
e
n
 
p
r
i
n
c
i
p
a
l
 
y
 
a
l
g
u
n
a
s
 
d
i
a
p
o
s
i
t
i
v
a
s
 
i
m
Ã
¡
g
e
n
e
s
 
p
a
r
a
 
m
e
j
o
r
a
r
 
s
u
s
 
p
o
s
i
b
i
l
i
d
a
d
e
s
 
d
e
 
c
o
n
s
e
g
u
i
r
 
r
e
s
e
r
v
a
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
G
E
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
L
I
N
K
'
,
 
'
S
u
b
i
r
 
u
n
a
 
i
m
a
g
e
n
'
)
;

j
r
_
d
e
f
i
n
e
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
T
A
R
I
F
F
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
L
I
N
K
'
,
 
'
C
r
e
a
r
 
a
l
g
u
n
a
s
 
t
a
r
i
f
a
s
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
'
,
 
'
L
o
 
q
u
e
 
s
e
 
r
e
s
e
r
v
a
 
l
o
s
 
h
u
Ã
©
s
p
e
d
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
D
E
S
C
'
,
 
'
E
s
t
a
 
p
r
o
p
i
e
d
a
d
 
s
e
 
e
s
c
r
i
b
a
 
u
n
a
 
p
r
o
p
i
e
d
a
d
 
t
i
p
o
,
 
d
o
n
d
e
 
a
l
q
u
i
l
a
r
 
h
a
b
i
t
a
c
i
o
n
e
s
 
e
n
 
l
a
 
p
r
o
p
i
e
d
a
d
,
 
o
 
u
n
 
t
i
p
o
 
c
h
a
l
e
t
,
 
d
o
n
d
e
 
u
s
t
e
d
 
a
l
q
u
i
l
a
 
t
o
d
a
 
l
a
 
p
r
o
p
i
e
d
a
d
 
e
n
 
u
n
a
 
r
e
s
e
r
v
a
?
 
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
H
O
T
E
L
'
,
 
'
L
a
s
 
h
a
b
i
t
a
c
i
o
n
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
V
I
L
L
A
'
,
 
'
T
o
d
a
 
l
a
 
p
r
o
p
i
e
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
B
O
T
H
'
,
 
'
A
m
b
o
s
'
)
;
 
/
/
 
T
h
i
s
 
i
s
 
a
n
 
i
n
t
e
r
i
m
 
s
e
t
t
i
n
g
 
t
h
a
t
 
g
i
v
e
s
 
b
a
c
k
w
a
r
d
 
c
o
m
p
a
t
a
b
i
l
i
t
y
 
f
o
r
 
e
x
i
s
t
i
n
g
 
u
s
e
r
s
 
w
h
o
 
w
o
n
'
t
 
y
e
t
 
h
a
v
e
 
u
p
d
a
t
e
d
 
t
h
e
i
r
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
.
 
I
t
 
w
o
n
'
t
 
b
e
 
s
e
l
e
c
t
a
b
l
e

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
B
O
T
H
_
C
O
L
H
E
A
D
'
,
 
'
L
o
 
q
u
e
 
s
e
 
r
e
s
e
r
v
a
 
l
o
s
 
h
u
Ã
©
s
p
e
d
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
A
D
D
R
E
S
S
_
S
A
N
I
T
Y
_
C
H
E
C
K
'
,
 
'
T
e
n
d
r
Ã
¡
 
q
u
e
 
c
o
m
p
l
e
t
a
r
 
d
e
t
a
l
l
e
s
 
d
e
 
s
u
 
d
i
r
e
c
c
i
Ã
³
n
 
p
a
r
a
 
q
u
e
 
s
u
s
 
c
l
i
e
n
t
e
s
 
p
u
e
d
e
n
 
e
n
c
o
n
t
r
a
r
 
q
u
e
 
c
u
a
n
d
o
 
v
i
e
n
e
n
 
p
a
r
a
 
q
u
e
d
a
r
s
e
.
'
)
;

j
r
_
d
e
f
i
n
e
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
A
D
D
R
E
S
S
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
L
I
N
K
'
,
 
'
A
c
t
u
a
l
i
z
a
r
 
s
u
 
d
i
r
e
c
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
F
I
E
L
D
S
_
H
I
G
H
L
I
G
H
T
E
D
_
A
R
E
_
R
E
Q
U
I
R
E
D
'
,
 
'
V
a
y
a
,
 
p
a
r
e
c
e
 
q
u
e
 
s
e
 
l
e
 
h
a
y
a
 
o
l
v
i
d
a
d
o
 
p
a
r
a
 
c
o
m
p
l
e
t
a
r
 
t
o
d
o
s
 
l
o
s
 
c
a
m
p
o
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
T
A
N
T
_
U
S
'
,
 
'
C
o
n
t
Ã
¡
c
t
e
n
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
T
I
T
L
E
'
,
 
'
B
i
e
n
v
e
n
i
d
o
 
a
 
s
u
 
n
u
e
v
a
 
l
i
s
t
a
 
e
n
 
l
Ã
­
n
e
a
 
d
e
 
'
)
;

j
r
_
d
e
f
i
n
e
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
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
1
'
,
 
'
H
o
l
a
 
y
 
b
i
e
n
v
e
n
i
d
o
 
a
 
s
u
 
n
u
e
v
a
 
p
r
o
p
i
e
d
a
d
 
e
n
'
)
;

j
r
_
d
e
f
i
n
e
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
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
2
'
,
 
'
H
a
 
a
g
r
e
g
a
d
o
 
r
e
c
i
e
n
t
e
m
e
n
t
e
 
u
n
a
 
n
u
e
v
a
 
p
r
o
p
i
e
d
a
d
 
e
n
 
n
u
e
s
t
r
o
 
s
i
t
i
o
 
w
e
b
,
 
y
 
n
o
s
 
g
u
s
t
a
r
Ã
­
a
 
d
a
r
l
e
 
l
a
 
b
i
e
n
v
e
n
i
d
a
 
a
 
l
a
 
f
a
m
i
l
i
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
3
'
,
 
'
S
e
 
p
u
e
d
e
 
v
e
r
 
e
l
 
n
u
e
v
o
 
t
a
b
l
e
r
o
 
d
e
 
i
n
s
t
r
u
m
e
n
t
o
s
 
'
)
;

j
r
_
d
e
f
i
n
e
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
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
3
_
L
I
N
K
T
E
X
T
'
,
 
'
 
a
q
u
Ã
­
 
'
)
;

j
r
_
d
e
f
i
n
e
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
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
4
'
,
 
'
U
n
a
 
v
e
z
 
q
u
e
 
h
a
y
a
 
e
s
t
a
b
l
e
c
i
d
o
 
s
u
 
p
r
o
p
i
e
d
a
d
 
s
e
 
p
u
e
d
e
 
v
e
r
 
c
Ã
³
m
o
 
s
e
 
v
e
 
a
 
l
o
s
 
v
i
s
i
t
a
n
t
e
s
 
d
e
l
 
s
i
t
i
o
 
v
i
s
i
t
a
n
d
o
'
)
;

j
r
_
d
e
f
i
n
e
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
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
4
_
L
I
N
K
T
E
X
T
'
,
 
'
 
s
u
 
p
o
r
t
a
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
5
'
,
 
'
(
N
o
 
s
e
 
p
u
b
l
i
c
a
,
 
p
o
r
 
l
o
 
q
u
e
 
l
o
s
 
v
i
s
i
t
a
n
t
e
s
 
d
e
l
 
s
i
t
i
o
 
n
o
 
p
u
e
d
e
 
v
e
r
l
o
 
a
Ã
º
n
)
.
'
)
;

j
r
_
d
e
f
i
n
e
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
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
6
'
,
 
'
E
n
 
l
a
 
p
a
r
t
e
 
s
u
p
e
r
i
o
r
 
d
e
 
l
a
 
p
Ã
¡
g
i
n
a
,
 
v
e
r
Ã
¡
 
u
n
a
 
s
e
r
i
e
 
d
e
 
m
e
n
s
a
j
e
s
.
 
L
o
s
 
b
o
t
o
n
e
s
 
j
u
n
t
o
 
a
 
e
s
t
o
s
 
m
e
n
s
a
j
e
s
 
q
u
e
 
g
u
i
a
r
Ã
¡
n
 
a
 
l
a
s
 
p
Ã
¡
g
i
n
a
s
 
q
u
e
 
n
e
c
e
s
i
t
a
 
p
a
r
a
 
v
i
s
i
t
a
r
 
a
 
e
s
t
a
b
l
e
c
e
r
 
s
u
 
p
r
o
p
i
e
d
a
d
 
e
n
 
n
u
e
s
t
r
o
 
s
i
t
i
o
.
 
U
n
a
 
v
e
z
 
q
u
e
 
h
a
y
a
 
r
e
a
l
i
z
a
d
o
 
c
a
d
a
 
u
n
a
 
d
e
 
e
s
t
a
s
 
t
a
r
e
a
s
 
q
u
e
 
v
a
 
a
 
s
e
r
 
m
u
c
h
o
 
m
Ã
¡
s
 
f
Ã
¡
c
i
l
 
p
a
r
a
 
l
o
s
 
v
i
s
i
t
a
n
t
e
s
 
e
n
 
n
u
e
s
t
r
o
 
s
i
t
i
o
 
p
a
r
a
 
e
n
c
o
n
t
r
a
r
 
s
u
 
p
r
o
p
i
e
d
a
d
 
y
 
h
a
c
e
r
 
r
e
s
e
r
v
a
s
 
e
n
 
l
Ã
­
n
e
a
.

'
)
;

j
r
_
d
e
f
i
n
e
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
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
7
'
,
 
'
S
i
 
t
i
e
n
e
 
a
l
g
u
n
a
 
p
r
e
g
u
n
t
a
,
 
p
o
r
 
f
a
v
o
r
 
'
)
;

j
r
_
d
e
f
i
n
e
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
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
7
_
L
I
N
K
T
E
X
T
'
,
 
'
C
o
n
t
Ã
¡
c
t
e
n
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
8
'
,
 
'
y
 
e
s
t
a
r
e
m
o
s
 
e
n
c
a
n
t
a
d
o
s
 
d
e
 
r
e
s
p
o
n
d
e
r
 
a
 
t
o
d
a
s
 
s
u
s
 
p
r
e
g
u
n
t
a
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
B
Y
E
B
Y
E
'
,
 
'
T
o
d
o
 
l
o
 
m
e
j
o
r
,
 
n
u
e
s
t
r
o
 
e
q
u
i
p
o
 
e
n
 
'
)
;

j
r
_
d
e
f
i
n
e
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
J
I
N
T
O
U
R
_
S
A
N
I
T
Y
_
C
H
E
C
K
'
,
 
'
U
s
t
e
d
 
n
o
 
p
a
r
e
c
e
 
t
e
n
e
r
 
n
i
n
g
u
n
a
 
e
x
c
u
r
s
i
Ã
³
n
 
p
a
r
a
 
v
e
n
d
e
r
.
 
C
r
e
a
r
 
u
n
 
p
e
r
f
i
l
 
d
e
 
r
e
c
o
r
r
i
d
o
,
 
a
 
c
o
n
t
i
n
u
a
c
i
Ã
³
n
,
 
u
t
i
l
i
c
e
 
e
l
 
b
o
t
Ã
³
n
 
G
e
n
e
r
a
r
 
p
a
r
a
 
c
r
e
a
r
 
a
l
g
u
n
a
s
 
e
x
c
u
r
s
i
o
n
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
J
I
N
T
O
U
R
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
L
I
N
K
'
,
 
'
V
a
m
o
s
 
a
 
c
r
e
a
r
 
a
l
g
u
n
a
s
 
e
x
c
u
r
s
i
o
n
e
s
!
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
T
A
R
I
F
F
S
_
S
W
A
P
'
,
 
'
D
e
 
P
e
r
m
u
t
a
 
d
e
 
u
b
i
c
a
c
i
Ã
³
n
 
s
Ã
­
m
b
o
l
o
 
d
e
 
m
o
n
e
d
a
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
T
A
R
I
F
F
S
_
S
W
A
P
_
D
E
S
C
'
,
 
'
U
t
i
l
i
c
e
 
e
s
t
a
 
o
p
c
i
Ã
³
n
 
p
a
r
a
 
m
o
v
e
r
 
e
l
 
s
Ã
­
m
b
o
l
o
 
d
e
 
m
o
n
e
d
a
 
d
e
 
d
e
t
r
Ã
¡
s
 
d
e
,
 
a
l
 
f
r
e
n
t
e
 
d
e
 
l
a
 
f
i
g
u
r
a
 
p
r
e
c
i
o
,
 
o
 
v
i
c
e
v
e
r
s
a
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
G
E
N
E
R
A
L
C
O
N
F
I
G
D
E
S
C
_
F
A
C
E
B
O
O
K
'
,
 
'
F
a
c
e
b
o
o
k
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
M
R
_
G
E
N
E
R
A
L
C
O
N
F
I
G
D
E
S
C
_
F
A
C
E
B
O
O
K
_
D
E
S
C
'
,
 
'
I
n
t
r
o
d
u
z
c
a
 
s
u
 
p
Ã
¡
g
i
n
a
 
d
e
 
f
a
c
e
b
o
o
k
 
d
e
 
l
a
 
i
d
e
n
t
i
f
i
c
a
c
i
Ã
³
n
,
 
p
o
r
 
e
j
e
m
p
l
o
 
"
j
o
m
r
e
s
"
.
 
D
e
j
a
r
 
e
n
 
b
l
a
n
c
o
 
p
a
r
a
 
m
o
s
t
r
a
r
 
n
a
d
a
.
 
N
o
 
e
n
t
r
a
r
 
e
n
 
h
t
t
p
s
:
/
/
w
w
w
.
f
a
c
e
b
o
o
k
.
c
o
m
 
o
 
c
u
a
l
q
u
i
e
r
 
o
t
r
a
 
c
o
s
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
D
O
W
N
L
O
A
D
'
,
 
'
D
e
s
c
a
r
g
a
r
'
)
;

j
r
_
d
e
f
i
n
e
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
W
A
R
N
I
N
G
S
_
T
A
R
I
F
F
S
_
N
O
T
A
R
I
F
F
S
_
S
R
P
'
,
 
'
A
 
c
o
n
t
i
n
u
a
c
i
Ã
³
n
,
 
t
e
n
d
r
Ã
¡
 
q
u
e
 
a
Ã
±
a
d
i
r
 
a
l
g
u
n
a
s
 
t
a
r
i
f
a
s
.
 
E
s
t
o
s
 
s
o
n
 
s
u
s
 
p
r
e
c
i
o
s
 
b
Ã
¡
s
i
c
o
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
T
S
T
R
A
P
_
O
F
F
_
W
A
R
N
I
N
G
_
T
I
T
L
E
'
,
 
'
B
o
o
t
s
t
r
a
p
 
n
o
 
e
s
t
Ã
¡
 
a
c
t
i
v
a
d
o
!
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
T
S
T
R
A
P
_
O
F
F
_
W
A
R
N
I
N
G
'
,
 
'
A
d
v
e
r
t
e
n
c
i
a
,
 
n
o
 
t
i
e
n
e
 
B
o
o
t
s
t
r
a
p
 
h
a
b
i
l
i
t
a
d
a
 
e
n
 
C
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
d
e
l
 
s
i
t
i
o
 
J
o
m
r
e
s
 
-
>
 
p
e
s
t
a
Ã
±
a
 
M
i
s
c
.
 
P
a
r
a
 
p
r
o
p
o
r
c
i
o
n
a
r
 
<
i
>
 
a
l
g
u
n
o
s
 
<
/
 
i
>
 
J
o
m
r
e
s
 
f
u
n
c
i
o
n
a
l
i
d
a
d
 
e
s
t
Ã
¡
 
u
t
i
l
i
z
a
n
d
o
 
s
u
s
 
p
l
a
n
t
i
l
l
a
s
 
a
n
t
i
g
u
a
s
,
 
b
a
s
a
d
a
s
 
j
Q
u
e
r
y
 
U
I
,
 
s
i
n
 
e
m
b
a
r
g
o
,
 
e
s
t
o
s
 
n
o
 
h
a
n
 
s
i
d
o
 
t
r
a
b
a
j
a
d
o
s
 
e
n
 
v
a
r
i
o
s
 
a
Ã
±
o
s
.
 
T
o
d
o
 
e
l
 
d
e
s
a
r
r
o
l
l
o
 
y
 
l
a
 
m
e
j
o
r
a
 
d
e
 
l
a
s
 
p
l
a
n
t
i
l
l
a
s
 
j
o
m
r
e
s
 
(
a
r
c
h
i
v
o
s
 
d
e
 
d
i
s
e
Ã
±
o
 
a
c
t
u
a
l
)
 
s
e
 
h
a
c
e
n
 
p
a
r
a
 
s
u
s
 
a
r
c
h
i
v
o
s
 
d
e
 
p
l
a
n
t
i
l
l
a
 
B
o
o
t
s
t
r
a
p
 
3
.
 
P
a
r
a
 
s
a
c
a
r
 
e
l
 
m
Ã
¡
x
i
m
o
 
p
a
r
t
i
d
o
 
d
e
 
J
o
m
r
e
s
 
l
e
 
r
e
c
o
m
e
n
d
a
m
o
s
 
q
u
e
 
i
n
s
t
a
l
e
 
u
n
 
t
e
m
a
 
b
a
s
a
d
o
 
B
o
o
t
s
t
r
a
p
 
3
 
p
a
r
a
 
W
o
r
d
p
r
e
s
s
 
o
 
J
o
o
m
l
a
.
 
U
n
a
 
v
e
z
 
q
u
e
 
h
a
y
a
 
h
e
c
h
o
 
q
u
e
 
p
u
e
d
e
 
h
a
b
i
l
i
t
a
r
 
l
a
s
 
p
l
a
n
t
i
l
l
a
s
 
J
o
m
r
e
s
 
B
o
o
t
s
t
r
a
p
 
e
n
 
C
o
n
f
i
g
u
r
a
c
i
Ã
³
n
 
d
e
l
 
s
i
t
i
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
S
U
P
P
O
R
T
K
E
Y
_
D
E
S
C
_
V
A
L
I
D
_
N
O
_
P
L
U
G
I
N
S
'
,
 
'
S
u
 
c
l
a
v
e
 
d
e
 
s
o
p
o
r
t
e
 
e
s
 
v
Ã
¡
l
i
d
o
.
 
T
e
n
g
a
 
e
n
 
c
u
e
n
t
a
 
q
u
e
 
e
s
t
a
 
l
i
c
e
n
c
i
a
 
n
o
 
p
e
r
m
i
t
e
 
d
e
s
c
a
r
g
a
s
 
d
e
 
p
l
u
g
i
n
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
D
A
S
H
B
O
A
R
D
_
D
R
A
G
_
T
R
A
S
H
'
,
 
'
A
r
r
a
s
t
r
e
 
r
e
s
e
r
v
a
s
 
a
 
e
s
t
a
 
Ã
¡
r
e
a
 
d
e
 
c
a
n
c
e
l
a
r
l
o
s
'
)
;

j
r
_
d
e
f
i
n
e
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
L
A
T
'
,
 
'
L
a
t
 
(
n
n
.
n
n
n
n
)
'
)
;

j
r
_
d
e
f
i
n
e
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
L
O
N
G
'
,
 
'
L
o
n
g
 
(
n
n
.
n
n
n
n
)
'
)
;

j
r
_
d
e
f
i
n
e
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
D
E
F
A
U
L
T
_
S
H
O
R
T
C
O
D
E
_
A
L
E
R
T
'
,
 
'
P
o
r
 
f
a
v
o
r
 
a
s
e
g
Ã
º
r
e
s
e
 
d
e
 
q
u
e
 
h
a
 
c
r
e
a
d
o
 
u
n
 
W
o
r
d
P
r
e
s
s
 
p
Ã
¡
g
i
n
a
 
q
u
e
 
c
o
n
t
i
e
n
e
 
e
l
 
[
j
o
m
r
e
s
:
 
X
X
-
X
X
]
 
c
Ã
³
d
i
g
o
 
c
o
r
t
o
 
(
d
o
n
d
e
 
x
x
-
X
X
 
e
s
 
e
l
 
c
Ã
³
d
i
g
o
 
d
e
 
i
d
i
o
m
a
 
d
e
l
 
s
i
t
i
o
,
 
p
o
r
 
e
j
e
m
p
l
o
 
[
j
o
m
r
e
s
:
 
e
s
]
)
 
d
e
 
l
o
 
c
o
n
t
r
a
r
i
o
 
n
o
 
s
e
r
Ã
¡
 
c
a
p
a
z
 
d
e
 
a
c
c
e
d
e
r
 
a
 
J
o
m
r
e
s
 
d
e
s
d
e
 
l
a
 
i
n
t
e
r
f
a
z
 
w
e
b
 
p
a
r
a
 
a
d
m
i
n
i
s
t
r
a
r
 
s
u
s
 
p
r
o
p
i
e
d
a
d
e
s
 
y
 
r
e
s
e
r
v
a
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
_
M
A
N
A
G
E
M
E
N
T
_
P
R
O
C
E
S
S
_
R
O
O
M
_
T
Y
P
E
S
'
,
 
'
A
n
t
e
s
 
d
e
 
c
r
e
a
r
 
u
n
 
t
i
p
o
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
,
 
l
o
 
q
u
e
 
n
e
c
e
s
i
t
a
m
o
s
 
s
a
b
e
r
 
s
i
 
s
e
 
t
r
a
t
a
 
d
e
 
u
n
a
 
p
r
o
p
i
e
d
a
d
 
t
i
p
o
,
 
o
 
u
n
 
t
i
p
o
 
b
i
e
n
 
c
h
a
l
e
t
.
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
_
T
Y
P
E
S
_
W
I
T
H
O
U
T
_
R
O
O
M
_
T
Y
P
E
S
_
L
I
N
K
_
T
E
X
T
'
,
 
'
H
a
g
a
 
c
l
i
c
 
p
a
r
a
 
a
Ã
±
a
d
i
r
 
n
u
e
v
o
s
 
t
i
p
o
s
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
_
T
Y
P
E
S
_
W
I
T
H
O
U
T
_
R
O
O
M
_
T
Y
P
E
S
'
,
 
'
A
d
v
e
r
t
e
n
c
i
a
,
 
q
u
e
 
t
i
e
n
e
 
u
n
o
 
o
 
m
Ã
¡
s
 
t
i
p
o
s
 
d
e
 
p
r
o
p
i
e
d
a
d
 
q
u
e
 
n
o
 
t
i
e
n
e
n
 
t
i
p
o
s
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
.
 
P
r
o
p
i
e
d
a
d
e
s
 
n
e
c
e
s
i
t
a
n
 
t
i
p
o
s
 
d
e
 
h
a
b
i
t
a
c
i
o
n
e
s
 
p
a
r
a
 
q
u
e
 
l
o
s
 
a
d
m
i
n
i
s
t
r
a
d
o
r
e
s
 
d
e
 
p
r
o
p
i
e
d
a
d
e
s
 
p
u
e
d
e
n
 
c
r
e
a
r
 
t
a
r
i
f
a
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
_
T
Y
P
E
S
_
W
I
T
H
O
U
T
_
R
O
O
M
_
T
Y
P
E
S
_
L
I
S
T
_
R
O
O
M
_
T
Y
P
E
S
'
,
 
'
U
t
i
l
i
c
e
 
e
l
 
b
o
t
Ã
³
n
 
N
u
e
v
o
 
a
n
t
e
r
i
o
r
e
s
 
p
a
r
a
 
c
r
e
a
r
 
n
u
e
v
o
s
 
t
i
p
o
s
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
n
.
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
T
O
U
R
S
'
,
 
'
T
o
u
r
s
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
R
E
A
L
E
S
T
A
T
E
'
,
 
'
N
o
 
s
e
 
h
a
c
e
n
 
r
e
s
e
r
v
a
s
 
/
 
i
n
m
o
b
i
l
i
a
r
i
a
 
(
s
i
m
p
l
e
 
e
n
u
m
e
r
a
c
i
Ã
³
n
)
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
L
O
G
_
L
O
C
A
T
I
O
N
'
,
 
'
I
n
g
r
e
s
e
 
l
a
 
u
b
i
c
a
c
i
Ã
³
n
 
d
e
l
 
a
r
c
h
i
v
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
L
O
G
_
L
O
C
A
T
I
O
N
_
D
E
S
C
'
,
 
'
J
o
m
r
e
s
 
r
e
g
i
s
t
r
a
 
l
a
 
a
c
t
i
v
i
d
a
d
 
d
e
l
 
s
i
s
t
e
m
a
 
p
o
r
 
d
e
f
e
c
t
o
 
p
a
r
a
 
e
l
 
'
.
J
O
M
R
E
S
_
S
Y
S
T
E
M
L
O
G
_
P
A
T
H
.
'
 
u
b
i
c
a
c
i
Ã
³
n
.
 
C
o
m
o
 
e
s
t
e
 
a
r
c
h
i
v
o
 
p
u
e
d
e
 
c
o
n
t
e
n
e
r
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
s
e
n
s
i
b
l
e
 
(
c
l
a
v
e
s
 
d
e
 
l
a
 
A
P
I
,
 
l
a
s
 
r
u
t
a
s
 
d
e
l
 
s
i
s
t
e
m
a
,
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
d
e
 
p
u
e
r
t
a
 
d
e
 
e
n
l
a
c
e
,
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
d
e
 
l
o
s
 
i
n
v
i
t
a
d
o
s
)
 
s
e
 
r
e
c
o
m
i
e
n
d
a
 
e
n
c
a
r
e
c
i
d
a
m
e
n
t
e
 
q
u
e
 
c
a
m
b
i
e
 
e
s
t
e
 
c
a
m
i
n
o
 
a
 
u
n
o
 
p
o
r
 
e
n
c
i
m
a
 
d
e
 
l
a
 
r
a
Ã
­
z
 
d
e
l
 
s
e
r
v
i
d
o
r
.
 
S
i
 
u
s
t
e
d
 
n
o
 
e
n
t
i
e
n
d
e
 
l
o
 
q
u
e
 
e
s
t
o
 
s
i
g
n
i
f
i
c
a
,
 
p
o
r
 
f
a
v
o
r
 
p
r
e
g
u
n
t
a
r
 
a
 
s
u
s
 
a
n
f
i
t
r
i
o
n
e
s
 
d
e
 
l
a
 
t
e
l
a
 
d
e
 
a
s
e
s
o
r
a
m
i
e
n
t
o
,
 
y
a
 
q
u
e
 
s
e
 
c
o
n
o
c
e
 
s
u
 
s
i
s
t
e
m
a
 
d
e
 
a
r
c
h
i
v
o
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
L
O
G
_
L
O
C
A
T
I
O
N
_
W
A
R
N
I
N
G
'
,
 
'
J
o
m
r
e
s
 
r
e
g
i
s
t
r
o
s
 
d
e
t
a
l
l
a
d
o
s
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
s
o
b
r
e
 
s
u
 
s
i
s
t
e
m
a
,
 
i
n
c
l
u
y
e
n
d
o
 
c
l
a
v
e
s
 
d
e
 
l
a
 
A
P
I
,
 
l
a
s
 
r
u
t
a
s
 
d
e
l
 
s
i
s
t
e
m
a
,
 
l
a
 
p
u
e
r
t
a
 
d
e
 
e
n
l
a
c
e
 
e
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
d
e
 
i
n
v
i
t
a
d
o
s
,
 
t
o
d
o
s
 
l
o
s
 
c
u
a
l
e
s
 
n
o
 
d
e
b
e
n
 
s
e
r
 
v
i
s
i
b
l
e
s
 
p
a
r
a
 
e
l
 
r
e
s
t
o
 
d
e
 
I
n
t
e
r
n
e
t
.
 
S
u
 
r
u
t
a
 
d
e
 
r
e
g
i
s
t
r
o
 
d
e
l
 
s
i
s
t
e
m
a
 
n
o
 
e
s
t
Ã
¡
 
c
o
n
f
i
g
u
r
a
d
o
,
 
p
o
r
 
l
o
 
q
u
e
 
l
o
s
 
r
e
g
i
s
t
r
o
s
 
d
e
l
 
s
i
s
t
e
m
a
 
a
c
t
u
a
l
m
e
n
t
e
 
s
e
 
e
s
t
Ã
¡
n
 
g
u
a
r
d
a
n
d
o
 
e
n
 
l
a
 
'
.
J
O
M
R
E
S
_
S
Y
S
T
E
M
L
O
G
_
P
A
T
H
.
'
 
d
i
r
e
c
t
o
r
i
o
,
 
q
u
e
 
n
o
 
e
s
 
i
d
e
a
l
.
 
P
o
r
 
f
a
v
o
r
,
 
v
i
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
u
r
a
c
i
Ã
³
n
 
d
e
l
 
s
i
t
i
o
 
-
>
 
D
e
p
u
r
a
c
i
Ã
³
n
 
y
 
e
s
t
a
b
l
e
c
e
r
 
u
n
a
 
r
u
t
a
 
e
n
 
e
l
 
s
i
s
t
e
m
a
 
d
e
 
a
r
c
h
i
v
o
s
 
q
u
e
 
e
s
 
O
u
t
S
i
t
e
 
d
e
 
l
a
 
r
a
Ã
­
z
 
w
e
b
.
 
E
n
 
c
a
s
o
 
d
e
 
d
u
d
a
,
 
p
Ã
³
n
g
a
s
e
 
e
n
 
c
o
n
t
a
c
t
o
 
c
o
n
 
s
u
s
 
a
n
f
i
t
r
i
o
n
e
s
 
d
e
 
l
a
 
t
e
l
a
,
 
y
a
 
q
u
e
 
s
e
r
Ã
¡
 
c
a
p
a
z
 
d
e
 
a
c
o
n
s
e
j
a
r
l
e
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
L
O
G
_
L
O
C
A
T
I
O
N
_
R
E
C
O
M
M
E
N
D
E
D
'
,
 
'
S
i
 
s
u
s
 
K
M
S
 
e
s
t
Ã
¡
 
i
n
s
t
a
l
a
d
o
 
e
n
 
e
l
 
d
i
r
e
c
t
o
r
i
o
 
r
a
Ã
­
z
 
d
e
 
s
u
 
s
i
t
i
o
 
w
e
b
,
 
a
 
c
o
n
t
i
n
u
a
c
i
Ã
³
n
,
 
u
n
a
 
u
b
i
c
a
c
i
Ã
³
n
 
a
d
e
c
u
a
d
a
 
p
o
d
r
Ã
­
a
 
s
e
r
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
G
M
A
P
_
K
E
Y
_
W
A
R
N
I
N
G
'
,
 
"
N
o
 
e
s
 
n
e
c
e
s
a
r
i
o
 
q
u
e
 
u
n
 
c
o
n
j
u
n
t
o
 
c
l
a
v
e
 
d
e
 
G
o
o
g
l
e
 
M
a
p
s
.
 
D
e
b
i
d
o
 
a
 
l
o
s
 
r
e
c
i
e
n
t
e
s
 
c
a
m
b
i
o
s
 
e
n
 
l
o
s
 
m
a
p
a
s
 
d
e
 
G
o
o
g
l
e
,
 
t
o
d
o
s
 
l
o
s
 
s
i
t
i
o
s
 
n
u
e
v
o
s
 
s
e
 
n
e
c
e
s
i
t
a
 
u
n
a
 
c
l
a
v
e
 
d
e
 
A
P
I
 
p
a
r
a
 
p
o
d
e
r
 
u
t
i
l
i
z
a
r
 
l
a
s
 
f
u
n
c
i
o
n
e
s
 
d
e
 
G
o
o
g
l
e
 
m
a
p
a
.
 
P
o
r
 
f
a
v
o
r
,
 
<
a
 
h
r
e
f
=
'
h
t
t
p
:
/
/
w
w
w
.
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
/
m
a
n
u
a
l
/
s
i
t
e
-
m
a
n
a
g
e
r
s
-
g
u
i
d
e
/
1
4
-
g
e
t
t
i
n
g
-
s
t
a
r
t
e
d
/
3
3
8
-
g
o
o
g
l
e
-
m
a
p
s
-
a
p
i
-
k
e
y
'
 
t
a
r
g
e
t
=
'
_
b
l
a
n
k
'
>
 
v
e
r
 
n
u
e
s
t
r
a
 
p
Ã
¡
g
i
n
a
 
d
e
l
 
m
a
n
u
a
l
 
s
o
b
r
e
 
c
Ã
³
m
o
 
c
r
e
a
r
 
u
n
a
 
c
l
a
v
e
 
d
e
 
A
P
I
 
<
/
a
>
 
y
 
g
u
a
r
d
a
r
 
l
a
 
l
l
a
v
e
 
e
n
 
J
o
m
r
e
s

.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
_
S
T
Y
L
E
'
,
 
'
e
s
q
u
e
m
a
 
d
e
 
c
o
l
o
r
e
s
 
G
o
o
g
l
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
T
I
T
L
E
'
,
 
'
B
i
e
n
,
 
v
a
m
o
s
 
a
 
e
m
p
e
z
a
r
 
a
 
a
Ã
±
a
d
i
r
 
s
u
 
p
r
o
p
i
e
d
a
d
 
a
 
l
a
 
p
Ã
¡
g
i
n
a
 
w
e
b
.
 
T
e
n
e
m
o
s
 
q
u
e
 
r
e
c
o
g
e
r
 
u
n
 
p
o
c
o
 
d
e
 
i
n
f
o
r
m
a
c
i
Ã
³
n
 
a
c
e
r
c
a
 
d
e
 
s
u
 
p
r
o
p
i
e
d
a
d
 
a
q
u
Ã
­
.
 
E
s
t
o
 
n
o
s
 
p
e
r
m
i
t
i
r
Ã
¡
 
c
o
n
f
i
g
u
r
a
r
 
e
l
 
e
s
q
u
e
l
e
t
o
 
d
e
 
s
u
 
p
r
o
p
i
e
d
a
d
.
 
U
n
a
 
v
e
z
 
h
e
c
h
o
 
e
s
t
o
,
 
a
 
c
o
n
t
i
n
u
a
c
i
Ã
³
n
,
 
s
e
 
l
e
 
g
u
i
a
r
Ã
¡
 
a
 
t
r
a
v
Ã
©
s
 
d
e
 
l
a
 
a
d
i
c
i
Ã
³
n
 
d
e
 
e
s
t
a
n
c
i
a
s
,
 
l
o
s
 
p
r
e
c
i
o
s
 
y
 
l
a
s
 
i
m
Ã
¡
g
e
n
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
N
O
T
E
1
'
,
 
'
E
l
 
t
i
p
o
 
d
e
 
p
r
o
p
i
e
d
a
d
 
q
u
e
 
a
y
u
d
a
 
a
 
d
e
f
i
n
i
r
 
c
Ã
³
m
o
 
s
e
 
v
a
 
a
 
r
e
s
e
r
v
a
r
 
l
a
 
p
r
o
p
i
e
d
a
d
,
 
p
o
r
 
e
j
e
m
p
l
o
,
 
c
o
n
 
l
o
s
 
h
o
t
e
l
e
s
 
q
u
e
 
v
e
n
d
e
r
 
s
Ã
³
l
o
 
u
n
a
 
o
 
d
o
s
 
h
a
b
i
t
a
c
i
o
n
e
s
 
a
 
l
a
 
v
e
z
,
 
m
i
e
n
t
r
a
s
 
q
u
e
 
c
o
n
 
v
i
l
l
a
s
 
q
u
e
 
o
f
r
e
c
e
 
t
o
d
o
 
e
l
 
e
d
i
f
i
c
i
o
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
N
O
T
E
2
'
,
 
'
T
e
n
g
a
 
e
n
 
c
u
e
n
t
a
 
q
u
e
 
l
a
 
d
i
r
e
c
c
i
Ã
³
n
 
d
e
 
c
o
r
r
e
o
 
e
l
e
c
t
r
Ã
³
n
i
c
o
 
n
o
 
t
i
e
n
e
 
p
o
r
 
q
u
Ã
©
 
s
e
r
 
e
l
 
m
i
s
m
o
 
q
u
e
 
e
l
 
q
u
e
 
s
e
 
u
t
i
l
i
z
Ã
³
 
c
u
a
n
d
o
 
s
e
 
r
e
g
i
s
t
r
Ã
³
 
s
u
 
c
u
e
n
t
a
.
 
E
s
t
o
 
l
e
 
p
e
r
m
i
t
e
 
t
e
n
e
r
 
d
i
f
e
r
e
n
t
e
s
 
d
i
r
e
c
c
i
o
n
e
s
 
p
a
r
a
 
d
i
f
e
r
e
n
t
e
s
 
p
r
o
p
i
e
d
a
d
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
M
I
N
I
M
U
M
_
D
E
P
O
S
I
T
'
,
 
'
D
e
p
Ã
³
s
i
t
o
 
m
Ã
­
n
i
m
o
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
M
I
N
I
M
U
M
_
D
E
P
O
S
I
T
_
D
E
S
C
'
,
 
'
Y
o
u
 
c
a
n
 
c
o
n
f
i
g
u
r
e
 
t
h
e
 
m
i
n
i
m
u
m
 
d
e
p
o
s
i
t
 
a
m
o
u
n
t
 
t
o
 
b
e
 
c
h
a
r
g
e
d
.
 
I
f
 
y
o
u
 
d
o
,
 
t
h
e
n
 
t
h
e
 
"
D
e
p
o
s
i
t
 
r
e
q
u
i
r
e
d
 
i
s
 
c
o
s
t
 
o
f
 
t
h
e
 
f
i
r
s
t
 
n
i
g
h
t
?
"
 
&
 
"
D
e
p
o
s
i
t
 
r
e
q
u
i
r
e
d
 
i
s
 
p
e
r
c
e
n
t
a
g
e
?
"
 
s
e
t
t
i
n
g
s
 
i
n
 
P
r
o
p
e
r
t
y
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
c
a
n
n
o
t
 
b
e
 
c
o
n
f
i
g
u
r
e
d
,
 
i
n
s
t
e
a
d
 
a
l
l
 
d
e
p
o
s
i
t
 
v
a
l
u
e
s
 
a
r
e
 
a
 
p
e
r
c
e
n
t
a
g
e
 
a
n
d
 
m
u
s
t
 
b
e
 
a
t
 
l
e
a
s
t
 
t
h
e
 
f
i
g
u
r
e
 
y
o
u
 
d
e
f
i
n
e
 
h
e
r
e
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
M
I
N
I
M
U
M
_
D
E
P
O
S
I
T
_
S
E
T
T
I
N
G
'
,
 
'
E
s
t
a
 
c
i
f
r
a
 
n
o
 
p
u
e
d
e
 
s
e
r
 
i
n
f
e
r
i
o
r
 
a
 
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
L
O
G
_
S
Y
S
L
O
G
_
H
O
S
T
'
,
 
'
S
y
s
l
o
g
 
h
o
s
t
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
L
O
G
_
S
Y
S
L
O
G
_
P
O
R
T
'
,
 
'
S
y
s
l
o
g
 
P
o
r
t
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
L
O
G
_
S
Y
S
L
O
G
_
H
O
S
T
_
D
E
S
C
'
,
 
"
I
f
 
y
o
u
 
w
a
n
t
 
t
o
 
s
e
n
d
 
s
y
s
t
e
m
 
l
o
g
g
i
n
g
 
m
e
s
s
a
g
e
s
 
t
o
 
a
 
s
y
s
l
o
g
 
s
e
r
v
e
r
,
 
y
o
u
 
c
a
n
 
s
e
t
 
t
h
e
 
H
o
s
t
n
a
m
e
 
o
r
 
I
P
 
(
 
e
.
g
.
 
1
9
2
.
1
6
8
.
0
.
2
)
 
a
n
d
 
p
o
r
t
 
(
e
.
g
.
 
5
1
4
)
 
h
e
r
e
.
 
N
o
t
e
,
 
i
f
 
t
h
e
 
s
i
t
e
 
i
s
 
s
e
t
 
t
o
 
'
D
e
v
e
l
o
p
m
e
n
t
'
 
t
h
e
n
 
D
E
B
U
G
 
m
e
s
s
a
g
e
s
 
w
i
l
l
 
b
e
 
s
e
n
t
.
 
I
f
 
s
e
t
 
t
o
 
'
P
r
o
d
u
c
t
i
o
n
'
 
t
h
e
n
 
o
n
l
y
 
I
N
F
O
 
l
e
v
e
l
 
a
n
d
 
h
i
g
h
e
r
 
m
e
s
s
a
g
e
s
 
w
i
l
l
 
b
e
 
s
e
n
t
.
 
T
o
 
d
i
s
a
b
l
e
 
l
o
g
g
i
n
g
 
t
o
 
t
h
e
 
r
e
m
o
t
e
 
s
e
r
v
e
r
,
 
e
m
p
t
y
 
t
h
e
 
h
o
s
t
 
a
n
d
 
p
o
r
t
 
f
i
e
l
d
s
.
"
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
L
O
G
_
S
Y
S
L
O
G
_
N
O
T
A
L
L
O
W
E
D
'
,
 
"
P
H
P
 
i
s
 
n
o
t
 
a
l
l
o
w
e
d
 
t
o
 
a
c
c
e
s
s
 
t
h
e
 
t
h
e
 
'
o
p
e
n
l
o
g
'
 
a
n
d
 
'
s
y
s
l
o
g
'
 
P
H
P
 
f
u
n
c
t
i
o
n
s
.
 
T
h
i
s
 
i
s
 
a
 
s
e
r
v
e
r
 
s
i
d
e
 
s
e
t
t
i
n
g
,
 
i
f
 
y
o
u
'
d
 
l
i
k
e
 
J
o
m
r
e
s
 
t
o
 
s
e
n
d
 
m
e
s
s
a
g
e
s
 
t
o
 
a
 
s
y
s
l
o
g
 
s
e
r
v
e
r
,
 
p
l
e
a
s
e
 
c
o
n
s
u
l
t
 
y
o
u
r
 
h
o
s
t
s
 
a
n
d
 
c
o
n
f
i
r
m
 
i
f
 
P
H
P
 
i
s
 
a
l
l
o
w
e
d
 
t
o
 
a
c
c
e
s
s
 
t
h
e
s
e
 
f
u
n
c
t
i
o
n
s
.
 
O
n
c
e
 
e
n
a
b
l
e
d
,
 
y
o
u
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
c
o
n
f
i
g
u
r
e
 
y
o
u
r
 
s
y
s
l
o
g
 
s
e
r
v
e
r
'
s
 
s
e
t
t
i
n
g
s
 
h
e
r
e
.
"
)
;

j
r
_
d
e
f
i
n
e
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
S
E
N
D
_
E
R
R
O
R
_
E
M
A
I
L
'
,
 
'
S
e
n
d
 
a
n
 
e
m
a
i
l
 
t
o
 
s
i
t
e
 
a
d
m
i
n
 
w
h
e
n
 
a
n
 
e
r
r
o
r
 
o
c
c
u
r
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
S
E
N
D
_
E
R
R
O
R
_
E
M
A
I
L
_
D
E
S
C
'
,
 
"
H
i
s
t
o
r
i
c
a
l
l
y
 
i
s
s
u
e
s
 
t
h
a
t
 
s
h
o
u
l
d
 
b
e
 
i
n
v
e
s
t
i
g
a
t
e
d
 
h
a
v
e
 
b
e
e
n
 
e
m
a
i
l
e
d
 
t
o
 
s
i
t
e
 
o
w
n
e
r
s
.
 
T
h
i
s
 
c
a
n
 
b
e
 
g
r
e
a
t
 
f
o
r
 
k
e
e
p
i
n
g
 
a
n
 
e
y
e
 
o
n
 
t
h
e
 
r
u
n
n
i
n
g
 
o
f
 
y
o
u
r
 
s
y
s
t
e
m
 
a
s
 
i
t
 
h
a
s
 
a
n
 
a
w
f
u
l
 
l
o
t
 
o
f
 
m
o
v
i
n
g
 
p
a
r
t
s
 
a
n
d
 
i
t
'
s
 
d
i
f
f
i
c
u
l
t
 
t
o
 
k
e
e
p
 
t
r
a
c
k
 
o
f
 
a
l
l
 
o
f
 
t
h
e
m
.
 
U
n
f
o
r
t
u
n
a
t
e
l
y
,
 
S
p
i
d
e
r
s
 
a
n
d
 
B
o
t
s
 
c
r
a
w
l
i
n
g
 
y
o
u
r
 
s
i
t
e
s
 
(
 
e
v
e
n
 
f
r
i
e
n
d
l
y
 
o
n
e
s
 
)
 
c
a
n
 
i
n
a
d
v
e
r
t
e
n
t
l
y
 
t
r
i
g
g
e
r
 
f
a
t
a
l
 
e
r
r
o
r
s
 
a
n
d
 
t
h
i
s
 
c
a
n
 
c
a
u
s
e
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
m
e
s
s
a
g
e
s
 
y
o
u
 
r
e
c
i
e
v
e
 
t
o
 
b
e
 
o
v
e
r
w
h
e
l
m
i
n
g
.
 
I
f
 
t
h
a
t
'
s
 
t
h
e
 
c
a
s
e
 
t
h
e
n
 
s
e
t
 
t
h
i
s
 
o
p
t
i
o
n
 
t
o
 
N
o
.
 
J
o
m
r
e
s
 
s
e
n
d
s
 
l
o
g
g
i
n
g
 
m
e
s
s
a
g
e
s
 
t
o
 
b
o
t
h
 
a
 
s
e
t
 
o
f
 
l
o
g
g
i
n
g
 
f
i
l
e
s
 
a
n
d
 
t
o
 
a
 
s
y
s
l
o
g
 
s
e
r
v
e
r
 
(
 
i
f
 
 
y
o
u
r
 
s
p
e
c
i
f
i
c
 
P
H
P
 
s
e
t
t
i
n
g
s
 
a
l
l
o
w
,
 
i
f
 
t
h
e
y
 
d
o
n
'
t
 
p
l
e
a
s
e
 
c
o
n
t
a
c
t
 
y
o
u
r
 
h
o
s
t
 
)
.
 
Y
o
u
 
c
a
n
 
m
a
n
u
a
l
l
y
 
a
n
a
l
y
s
e
 
t
h
e
 
f
i
l
e
s
 
i
f
 
y
o
u
 
a
r
e
 
l
o
o
k
i
n
g
 
f
o
r
 
s
o
m
e
t
h
i
n
g
 
s
p
e
c
i
f
i
c
 
(
 
f
o
r
 
e
x
a
m
p
l
e
,
 
i
f
 
y
o
u
'
r
e
 
d
e
v
e
l
o
p
i
n
g
 
a
 
g
a
t
e
w
a
y
 
a
n
d
 
w
a
n
t
 
t
o
 
u
s
e
 
t
h
e
 
g
a
t
e
w
a
y
_
l
o
g
(
)
 
f
u
n
c
t
i
o
n
 
c
a
l
l
.
)
 
b
u
t
 
t
h
a
t
'
s
 
a
 
l
o
t
 
o
f
 
i
n
f
o
r
m
a
t
i
o
n
 
t
o
 
t
r
a
w
l
 
t
h
r
o
u
g
h
 
s
o
 
i
t
'
s
 
b
e
t
t
e
r
 
t
o
 
u
s
e
 
s
o
m
e
t
h
i
n
g
 
l
i
k
e
 
a
 
s
y
s
l
o
g
 
f
i
l
e
 
a
n
a
l
y
s
e
r
.
 
I
f
 
y
o
u
'
r
e
 
d
e
v
e
l
o
p
i
n
g
 
o
n
 
l
i
n
u
x
 
t
h
e
n
 
t
h
e
r
e
 
a
r
e
 
l
o
t
s
 
o
f
 
t
o
o
l
s
 
a
v
a
i
l
a
b
l
e
 
t
o
 
y
o
u
,
 
i
f
 
o
n
 
W
i
n
d
o
w
s
 
t
h
e
n
 
a
 
s
i
m
p
l
e
 
t
o
o
l
 
y
o
u
 
c
a
n
 
u
s
e
 
i
s
 
h
t
t
p
:
/
/
m
a
x
b
e
l
k
o
v
.
g
i
t
h
u
b
.
i
o
/
v
i
s
u
a
l
s
y
s
l
o
g
/
 
O
n
 
t
h
i
s
 
p
a
g
e
 
s
e
t
 
t
h
e
 
'
S
y
s
l
o
g
 
h
o
s
t
'
 
t
o
 
'
1
2
7
.
0
.
0
.
1
'
 
a
n
d
 
t
h
e
 
'
P
o
r
t
'
 
t
o
 
5
1
4
 
t
o
 
s
e
e
 
m
e
s
s
a
g
e
s
 
l
o
g
g
e
d
 
i
n
 
t
h
a
t
 
t
o
o
l
.
 
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
'
,
 
'
F
r
e
q
u
e
n
t
l
y
 
a
s
k
e
d
 
q
u
e
s
t
i
o
n
s
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
I
N
T
R
O
D
U
C
T
I
O
N
'
,
 
'
I
n
t
r
o
d
u
c
t
i
o
n
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
N
T
R
O
D
U
C
T
I
O
N
_
W
H
A
T
I
S
J
O
M
R
E
S
'
,
 
'
W
h
a
t
 
i
s
 
J
o
m
r
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
N
T
R
O
D
U
C
T
I
O
N
_
W
H
A
T
I
S
J
O
M
R
E
S
'
,
 
"
J
o
m
r
e
s
 
i
s
 
a
 
h
o
t
e
l
 
a
n
d
 
v
i
l
l
a
 
b
o
o
k
i
n
g
 
s
y
s
t
e
m
 
t
h
a
t
 
w
o
r
k
s
 
w
i
t
h
 
t
h
e
 
J
o
o
m
l
a
 
a
n
d
 
W
o
r
d
p
r
e
s
s
 
C
o
n
t
e
n
t
 
M
a
n
a
g
e
m
e
n
t
 
S
y
s
t
e
m
s
.
 
I
t
'
s
 
a
 
f
u
l
l
 
b
o
o
k
i
n
g
 
s
y
s
t
e
m
,
 
t
h
i
n
k
 
'
b
o
o
k
i
n
g
.
c
o
m
'
 
o
r
 
'
a
i
r
b
n
b
'
 
w
i
t
h
o
u
t
 
t
h
e
 
e
x
p
e
n
s
e
.
 
I
t
'
s
 
a
 
c
o
m
p
l
e
t
e
 
t
o
o
l
k
i
t
 
t
h
a
t
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
b
u
i
l
d
 
a
 
u
n
i
q
u
e
 
o
n
l
i
n
e
 
b
o
o
k
i
n
g
 
s
e
r
v
i
c
e
 
f
o
r
 
a
s
 
m
a
n
y
 
p
r
o
p
e
r
t
i
e
s
 
a
s
 
y
o
u
 
w
a
n
t
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
N
T
R
O
D
U
C
T
I
O
N
_
U
S
E
R
S
A
D
D
'
,
 
'
C
a
n
 
u
s
e
r
s
 
r
e
g
i
s
t
e
r
 
o
n
 
m
y
 
J
o
m
r
e
s
 
s
i
t
e
 
a
n
d
 
a
d
d
 
t
h
e
i
r
 
o
w
n
 
p
r
o
p
e
r
t
i
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
N
T
R
O
D
U
C
T
I
O
N
_
U
S
E
R
S
A
D
D
'
,
 
'
Y
e
s
.
 
B
y
 
d
e
f
a
u
l
t
 
J
o
m
r
e
s
 
a
l
l
o
w
s
 
r
e
g
i
s
t
e
r
e
d
 
u
s
e
r
s
 
t
o
 
a
d
d
 
t
h
e
i
r
 
o
w
n
 
p
r
o
p
e
r
t
i
e
s
 
t
o
 
y
o
u
r
 
s
i
t
e
.
 
Y
o
u
 
c
a
n
 
d
i
s
a
b
l
e
 
t
h
i
s
 
i
n
 
t
h
e
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
>
 
M
i
s
c
 
t
a
b
 
i
f
 
y
o
u
 
n
e
e
d
 
t
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
I
E
S
'
,
 
'
P
r
o
p
e
r
t
i
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
A
D
D
P
R
O
P
E
R
T
I
E
S
'
,
 
'
H
o
w
 
d
o
 
I
 
a
d
d
 
a
 
n
e
w
 
p
r
o
p
e
r
t
y
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
A
D
D
P
R
O
P
E
R
T
I
E
S
'
,
 
"
W
h
e
n
 
J
o
m
r
e
s
 
i
s
 
i
n
s
t
a
l
l
e
d
 
t
h
e
 
a
d
m
i
n
i
s
t
r
a
t
o
r
 
u
s
e
r
 
i
s
 
c
r
e
a
t
e
d
 
a
s
 
a
 
S
u
p
e
r
 
P
r
o
p
e
r
t
y
 
M
a
n
a
g
e
r
.
 
L
o
g
 
i
n
t
o
 
t
h
e
 
f
r
o
n
t
e
n
d
 
o
f
 
y
o
u
r
 
C
M
S
 
(
t
h
e
 
p
u
b
l
i
c
 
p
a
g
e
s
)
 
a
s
 
y
o
u
r
 
a
d
m
i
n
i
s
t
r
a
t
o
r
 
u
s
e
r
 
a
n
d
 
f
r
o
m
 
t
h
e
r
e
 
y
o
u
 
c
a
n
 
a
d
d
 
n
e
w
 
p
r
o
p
e
r
t
i
e
s
.
 
<
b
r
/
>
Y
o
u
 
c
a
n
 
c
r
e
a
t
e
 
n
e
w
 
m
a
n
a
g
e
r
s
 
i
n
 
t
h
e
 
P
r
o
p
e
r
t
y
 
M
a
n
a
g
e
r
s
 
p
a
g
e
 
i
f
 
y
o
u
 
w
a
n
t
 
t
o
 
a
d
d
 
a
 
n
e
w
 
m
a
n
a
g
e
r
,
 
h
o
w
e
v
e
r
 
b
y
 
d
e
f
a
u
l
t
 
(
 
y
o
u
 
c
a
n
 
d
i
s
a
b
l
e
 
t
h
i
s
 
)
 
a
n
y
 
r
e
g
i
s
t
e
r
e
d
 
u
s
e
r
 
w
h
o
 
c
r
e
a
t
e
s
 
a
 
p
r
o
p
e
r
t
y
 
i
s
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
c
r
e
a
t
e
d
 
a
s
 
a
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
 
f
o
r
 
t
h
e
 
p
r
o
p
e
r
t
i
e
s
 
t
h
e
y
 
c
r
e
a
t
e
.
 
F
o
r
 
s
e
c
u
r
i
t
y
 
r
e
a
s
o
n
s
 
t
h
e
y
 
c
a
n
n
o
t
 
a
d
m
i
n
i
s
t
e
r
 
o
t
h
e
r
 
m
a
n
a
g
e
r
'
s
 
p
r
o
p
e
r
t
i
e
s
.
 
T
h
i
s
 
c
a
n
 
b
e
 
c
h
a
n
g
e
d
 
b
y
 
e
l
e
v
a
t
i
n
g
 
t
h
a
t
 
u
s
e
r
 
t
o
 
a
 
S
u
p
e
r
 
P
r
o
p
e
r
t
y
 
M
a
n
a
g
e
r
 
i
n
 
t
h
e
 
P
r
o
p
e
r
t
y
 
M
a
n
a
g
e
r
s
 
p
a
g
e
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
M
P
O
R
T
P
R
O
P
E
R
T
I
E
S
'
,
 
'
C
a
n
 
I
 
i
m
p
o
r
t
 
p
r
o
p
e
r
t
i
e
s
 
f
r
o
m
 
a
n
o
t
h
e
r
 
s
y
s
t
e
m
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
M
P
O
R
T
P
R
O
P
E
R
T
I
E
S
'
,
 
"
T
h
e
r
e
 
a
r
e
 
a
 
n
u
m
b
e
r
 
o
f
 
w
a
y
s
 
y
o
u
 
c
a
n
 
i
m
p
o
r
t
 
p
r
o
p
e
r
t
i
e
s
.
 
T
h
e
 
P
r
o
p
e
r
t
y
 
I
m
p
o
r
t
 
p
l
u
g
i
n
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
i
m
p
o
r
t
 
p
r
o
p
e
r
t
i
e
s
 
v
i
a
 
C
S
V
.
 
T
h
i
s
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
i
m
p
o
r
t
 
m
u
l
t
i
p
l
e
 
p
r
o
p
e
r
t
i
e
s
 
a
t
 
o
n
c
e
,
 
b
u
t
 
i
s
 
a
n
 
a
d
m
i
n
i
s
t
r
a
t
o
r
 
o
n
l
y
 
f
e
a
t
u
r
e
.
 
I
f
 
t
h
e
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
 
h
a
s
 
a
 
B
e
d
s
2
4
 
a
c
c
o
u
n
t
 
t
h
e
n
 
t
h
e
y
 
c
a
n
 
i
m
p
o
r
t
 
a
n
y
 
e
x
i
s
t
i
n
g
 
p
r
o
p
e
r
t
i
e
s
 
f
r
o
m
 
t
h
e
i
r
 
a
c
c
o
u
n
t
 
t
h
e
r
e
 
o
n
c
e
 
t
h
e
y
'
v
e
 
l
i
n
k
e
d
 
A
P
I
 
k
e
y
s
.
 
A
n
o
t
h
e
r
 
w
a
y
 
i
s
 
t
o
 
u
s
e
 
t
h
e
 
A
P
I
,
 
t
h
e
r
e
 
i
s
 
a
 
f
e
a
t
u
r
e
 
t
o
 
a
d
d
 
a
n
d
 
r
e
m
o
v
e
 
p
r
o
p
e
r
t
i
e
s
 
h
o
w
e
v
e
r
 
t
h
i
s
 
w
o
u
l
d
 
r
e
q
u
i
r
e
 
y
o
u
 
t
o
 
b
e
 
a
 
d
e
v
e
l
o
p
e
r
 
f
a
m
i
l
i
a
r
 
w
i
t
h
 
u
s
i
n
g
 
R
E
S
T
 
A
P
I
s
 
t
o
 
u
s
e
 
t
h
i
s
 
f
u
n
c
t
i
o
n
a
l
i
t
y
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
M
P
O
R
T
B
O
O
K
I
N
G
S
'
,
 
'
C
a
n
 
I
 
i
m
p
o
r
t
 
b
o
o
k
i
n
g
s
 
f
r
o
m
 
a
n
o
t
h
e
r
 
s
y
s
t
e
m
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
M
P
O
R
T
B
O
O
K
I
N
G
S
'
,
 
"
B
o
o
k
i
n
g
s
 
c
a
n
 
b
e
 
i
m
p
o
r
t
e
d
 
i
n
t
o
 
a
 
p
r
o
p
e
r
t
y
 
b
y
 
a
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
 
t
h
r
o
u
g
h
 
t
h
e
 
i
C
a
l
 
p
l
u
g
i
n
,
 
w
h
i
c
h
 
o
f
f
e
r
s
 
a
 
f
e
a
t
u
r
e
 
t
o
 
i
m
p
o
r
t
 
b
o
o
k
i
n
g
s
 
i
n
 
t
h
e
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
'
s
 
m
e
n
u
.
 
A
l
s
o
,
 
i
f
 
a
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
 
h
a
s
 
a
 
B
e
d
s
2
4
 
a
c
c
o
u
n
t
 
a
n
d
 
t
h
e
i
r
 
p
r
o
p
e
r
t
y
 
h
a
s
 
b
e
e
n
 
l
i
n
k
e
d
 
w
i
t
h
 
B
e
d
s
2
4
,
 
t
h
e
n
 
t
h
e
y
 
c
a
n
 
p
e
r
f
o
r
m
 
a
 
R
e
s
e
n
d
 
N
o
t
i
f
y
 
a
c
t
i
o
n
 
i
n
 
B
e
d
s
2
4
.
 
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
E
M
A
I
L
T
E
M
P
L
A
T
E
S
'
,
 
'
C
a
n
 
I
 
e
d
i
t
 
e
m
a
i
l
 
t
e
m
p
l
a
t
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
E
M
A
I
L
T
E
M
P
L
A
T
E
S
'
,
 
'
P
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
c
a
n
 
e
d
i
t
 
e
m
a
i
l
 
t
e
m
p
l
a
t
e
s
 
t
h
r
o
u
g
h
 
t
h
e
i
r
 
t
o
o
l
b
a
r
 
u
n
d
e
r
 
S
e
t
t
i
n
g
s
 
>
 
E
m
a
i
l
 
T
e
m
p
l
a
t
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
A
Y
M
E
N
T
S
'
,
 
'
P
a
y
m
e
n
t
s
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
A
K
E
P
A
Y
M
E
N
T
S
'
,
 
'
H
o
w
 
d
o
 
I
 
a
l
l
o
w
 
p
r
o
p
e
r
t
i
e
s
 
t
o
 
t
a
k
e
 
p
a
y
m
e
n
t
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
A
K
E
P
A
Y
M
E
N
T
S
'
,
 
'
Y
o
u
 
w
i
l
l
 
n
e
e
d
 
t
o
 
i
n
s
t
a
l
l
 
a
 
p
a
y
m
e
n
t
 
g
a
t
e
w
a
y
.
 
J
o
m
r
e
s
 
h
a
s
 
t
w
o
 
p
a
y
m
e
n
t
 
g
a
t
e
w
a
y
s
,
 
w
h
i
c
h
 
c
o
n
n
e
c
t
 
t
o
 
P
a
y
p
a
l
 
o
r
 
S
t
r
i
p
e
.
 
I
t
 
a
l
s
o
 
o
f
f
e
r
s
 
a
 
c
o
u
p
l
e
 
o
f
 
O
f
f
l
i
n
e
 
g
a
t
e
w
a
y
s
,
 
a
n
d
 
y
o
u
 
c
a
n
 
p
u
r
c
h
a
s
e
 
o
t
h
e
r
 
p
a
y
m
e
n
t
 
g
a
t
e
w
a
y
s
 
f
r
o
m
 
o
u
r
 
p
a
r
t
n
e
r
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
W
H
I
C
H
G
A
T
E
W
A
Y
'
,
 
'
W
h
i
c
h
 
g
a
t
e
w
a
y
 
s
h
o
u
l
d
 
I
 
u
s
e
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
W
H
I
C
H
G
A
T
E
W
A
Y
'
,
 
"
I
f
 
y
o
u
 
w
a
n
t
 
t
o
 
t
a
k
e
 
a
 
p
e
r
c
e
n
t
a
g
e
 
o
f
 
a
 
m
a
n
a
g
e
r
'
s
 
d
e
p
o
s
i
t
 
f
o
r
 
y
o
u
r
 
o
w
n
 
c
o
s
t
s
,
 
t
h
e
n
 
u
s
e
 
t
h
e
 
S
t
r
i
p
e
 
g
a
t
e
w
a
y
.
 
I
f
 
y
o
u
 
d
o
n
'
t
,
 
a
n
d
 
i
n
s
t
e
a
d
 
i
n
t
e
n
d
 
t
o
 
u
s
e
 
t
h
e
 
S
u
b
s
c
r
i
p
t
i
o
n
 
a
n
d
/
o
r
 
c
o
m
m
i
s
s
i
o
n
 
f
u
n
c
t
i
o
n
a
l
i
t
y
,
 
t
h
e
n
 
y
o
u
'
l
l
 
n
e
e
d
 
t
o
 
u
s
e
 
t
h
e
 
P
a
y
p
a
l
 
g
a
t
e
w
a
y
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
P
A
Y
M
E
N
T
A
C
C
O
U
N
T
S
'
,
 
'
W
h
e
n
 
a
 
g
u
e
s
t
 
m
a
k
e
s
 
a
 
p
a
y
m
e
n
t
 
f
o
r
 
a
 
b
o
o
k
i
n
g
,
 
w
h
o
 
g
e
t
s
 
t
h
e
 
m
o
n
e
y
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
P
A
Y
M
E
N
T
A
C
C
O
U
N
T
S
'
,
 
"
T
h
a
t
 
d
e
p
e
n
d
s
 
o
n
 
h
o
w
 
y
o
u
 
h
a
v
e
 
s
e
t
 
u
p
 
p
a
y
m
e
n
t
 
g
a
t
e
w
a
y
s
 
o
n
 
y
o
u
r
 
s
i
t
e
.
 
I
f
 
y
o
u
'
r
e
 
u
s
i
n
g
 
P
a
y
p
a
l
,
 
y
o
u
 
c
a
n
 
c
o
n
f
i
g
u
r
e
 
i
t
 
t
o
 
o
v
e
r
r
i
d
e
 
a
l
l
 
f
r
o
n
t
e
n
d
 
s
e
t
t
i
n
g
s
,
 
e
s
s
e
n
t
i
a
l
l
y
 
m
a
k
i
n
g
 
y
o
u
r
 
a
c
c
o
u
n
t
 
t
h
e
 
o
n
l
y
 
a
c
c
o
u
n
t
 
t
h
a
t
 
r
e
c
e
i
v
e
s
 
p
a
y
m
e
n
t
s
.
 
I
f
 
y
o
u
 
d
o
n
'
t
 
c
h
o
o
s
e
 
t
o
 
d
o
 
t
h
a
t
,
 
t
h
e
n
 
e
a
c
h
 
p
r
o
p
e
r
t
y
 
w
i
l
l
 
n
e
e
d
 
t
o
 
s
e
t
u
p
 
t
h
e
i
r
 
p
a
y
m
e
n
t
 
g
a
t
e
w
a
y
 
a
c
c
o
u
n
t
 
i
n
 
S
e
t
t
i
n
g
s
 
>
 
G
a
t
e
w
a
y
s
 
t
a
b
.
 
I
f
 
y
o
u
'
r
e
 
u
s
i
n
g
 
S
t
r
i
p
e
,
 
t
h
e
n
 
o
n
c
e
 
t
h
e
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
 
h
a
s
 
c
o
n
n
e
c
t
e
d
 
t
h
e
i
r
 
a
c
c
o
u
n
t
 
t
o
 
y
o
u
r
s
 
(
 
s
e
e
 
t
h
e
 
S
t
r
i
p
e
 
d
o
c
u
m
e
n
t
a
t
i
o
n
 
i
n
 
t
h
e
 
m
a
n
u
a
l
 
f
o
r
 
m
o
r
e
 
i
n
f
o
r
m
a
t
i
o
n
 
)
 
t
h
e
n
 
t
h
e
y
'
l
l
 
r
e
c
e
i
v
e
 
a
l
l
 
f
u
n
d
s
,
 
m
i
n
u
s
 
a
 
c
o
m
m
i
s
s
i
o
n
 
f
e
e
 
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
o
n
f
i
g
u
r
e
 
i
f
 
y
o
u
 
c
h
o
o
s
e
 
t
o
 
d
o
 
s
o
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
'
,
 
'
T
r
o
u
b
l
e
s
h
o
o
t
i
n
g
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
_
E
M
A
I
L
'
,
 
"
B
o
o
k
i
n
g
 
e
m
a
i
l
s
 
a
r
e
n
'
t
 
b
e
i
n
g
 
s
e
n
t
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
_
E
M
A
I
L
'
,
 
"
I
f
 
y
o
u
'
r
e
 
h
a
v
i
n
g
 
p
r
o
b
l
e
m
s
 
s
e
n
d
i
n
g
 
e
m
a
i
l
s
 
f
r
o
m
 
t
h
e
 
s
y
s
t
e
m
,
 
p
l
e
a
s
e
 
c
h
e
c
k
 
y
o
u
r
 
h
o
s
t
 
C
M
S
'
s
 
e
m
a
i
l
 
s
e
t
t
i
n
g
s
.
 
J
o
m
r
e
s
 
u
s
e
s
 
t
h
e
 
W
o
r
d
p
r
e
s
s
 
o
r
 
J
o
o
m
l
a
 
s
e
t
t
i
n
g
s
 
f
o
r
 
s
e
n
d
i
n
g
 
e
m
a
i
l
s
.
 
I
f
 
t
h
e
y
'
r
e
 
w
r
o
n
g
,
 
J
o
m
r
e
s
 
w
i
l
l
 
n
o
t
 
b
e
 
a
b
l
e
 
t
o
 
s
e
n
d
 
e
m
a
i
l
s
 
e
i
t
h
e
r
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
_
N
O
G
A
T
E
W
A
Y
'
,
 
"
Y
o
u
 
c
a
n
'
t
 
s
e
e
 
t
h
e
 
p
a
y
m
e
n
t
 
g
a
t
e
w
a
y
 
a
f
t
e
r
 
m
a
k
i
n
g
 
a
 
b
o
o
k
i
n
g
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
_
N
O
G
A
T
E
W
A
Y
'
,
 
"
I
f
 
y
o
u
 
a
r
e
 
l
o
g
g
e
d
 
i
n
 
a
s
 
a
 
P
r
o
p
e
r
t
y
 
M
a
n
a
g
e
r
,
 
y
o
u
 
w
i
l
l
 
n
o
t
 
s
e
e
 
t
h
e
 
p
a
y
m
e
n
t
 
g
a
t
e
w
a
y
,
 
b
e
c
a
u
s
e
 
y
o
u
 
d
o
n
'
t
 
p
a
y
 
y
o
u
r
s
e
l
f
,
 
s
i
l
l
y
.
 
O
n
l
y
 
n
o
n
-
m
a
n
a
g
e
r
 
u
s
e
r
s
 
w
i
l
l
 
s
e
e
 
t
h
e
 
g
a
t
e
w
a
y
 
w
h
e
n
 
m
a
k
i
n
g
 
b
o
o
k
i
n
g
s
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
'
,
 
'
J
o
m
r
e
s
 
L
i
c
e
n
s
e
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
F
O
R
C
E
D
T
O
S
U
B
S
C
R
I
B
E
'
,
 
'
A
f
t
e
r
 
b
u
y
i
n
g
 
X
 
l
i
c
e
n
s
e
,
 
a
m
 
I
 
f
o
r
c
e
d
 
t
o
 
p
u
r
c
h
a
s
e
 
r
e
n
e
w
a
l
s
 
o
n
c
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
 
h
a
s
 
e
x
p
i
r
e
d
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
F
O
R
C
E
D
T
O
S
U
B
S
C
R
I
B
E
'
,
 
"
N
o
,
 
i
f
 
y
o
u
'
v
e
 
p
u
r
c
h
a
s
e
d
 
a
 
S
t
a
r
t
e
r
,
 
B
u
s
i
n
e
s
s
 
o
r
 
E
n
t
e
r
p
r
i
s
e
 
l
i
c
e
n
s
e
,
 
t
h
e
n
 
y
o
u
 
c
a
n
 
c
o
n
t
i
n
u
e
 
u
s
i
n
g
 
t
h
e
 
s
o
f
t
w
a
r
e
 
i
n
d
e
f
i
n
a
t
e
l
y
,
 
i
t
 
w
i
l
l
 
n
o
t
 
b
e
 
m
a
g
i
c
a
l
l
y
 
c
r
i
p
p
e
d
.
 
T
h
e
 
e
x
c
e
p
t
i
o
n
 
t
o
 
t
h
i
s
 
r
u
l
e
 
i
s
 
i
f
 
y
o
u
 
p
u
r
c
h
a
s
e
 
a
 
s
u
b
s
c
r
i
p
t
i
o
n
.
 
O
n
c
e
 
a
 
s
u
b
s
c
r
i
p
t
i
o
n
 
h
a
s
 
b
e
e
n
 
c
a
n
c
e
l
l
e
d
 
y
o
u
 
w
i
l
l
 
n
o
 
l
o
n
g
e
r
 
b
e
 
a
b
l
e
 
t
o
 
u
s
e
 
t
h
e
 
p
l
u
g
i
n
s
 
a
n
d
 
y
o
u
 
w
i
l
l
 
n
e
e
d
 
t
o
 
u
n
i
n
s
t
a
l
l
 
t
h
e
m
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
E
X
P
I
R
E
D
'
,
 
'
M
y
 
l
i
c
e
n
s
e
 
h
a
s
 
e
x
p
i
r
e
d
,
 
c
a
n
 
I
 
u
p
g
r
a
d
e
 
J
o
m
r
e
s
 
a
n
y
w
a
y
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
E
X
P
I
R
E
D
'
,
 
"
W
h
i
l
e
 
y
o
u
 
p
h
y
s
i
c
a
l
l
y
 
c
a
n
,
 
i
t
'
s
 
n
o
t
 
r
e
c
o
m
m
e
n
d
e
d
 
t
h
a
t
 
y
o
u
 
d
o
.
 
O
n
c
e
 
a
 
l
i
c
e
n
s
e
 
h
a
s
 
e
x
p
i
r
e
d
 
y
o
u
 
w
i
l
l
 
n
o
 
l
o
n
g
e
r
 
b
e
 
a
b
l
e
 
t
o
 
b
e
n
e
f
i
t
 
f
r
o
m
 
s
u
p
p
o
r
t
 
o
r
 
d
o
w
n
l
o
a
d
 
u
p
d
a
t
e
s
 
t
o
 
p
l
u
g
i
n
s
 
f
o
r
 
y
o
u
r
 
J
o
m
r
e
s
 
i
n
s
t
a
l
l
a
t
i
o
n
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
 
s
h
o
u
l
d
 
<
i
>
n
o
t
<
/
i
>
 
u
p
g
r
a
d
e
 
y
o
u
r
 
J
o
m
r
e
s
 
i
n
s
t
a
l
l
a
t
i
o
n
 
a
f
t
e
r
 
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
 
h
a
s
 
e
x
p
i
r
e
d
.
 
T
h
i
s
 
i
s
 
b
e
c
a
u
s
e
 
p
l
u
g
i
n
s
 
r
e
g
u
l
a
r
l
y
 
n
e
e
d
 
t
o
 
b
e
 
u
p
d
a
t
e
d
 
t
o
 
w
o
r
k
 
w
i
t
h
 
c
u
r
r
e
n
t
 
v
e
r
s
i
o
n
s
 
o
f
 
t
h
e
 
s
y
s
t
e
m
,
 
s
o
 
o
f
t
e
n
 
y
o
u
r
 
o
l
d
e
r
 
p
l
u
g
i
n
s
 
w
i
l
l
 
n
o
t
 
w
o
r
k
 
o
n
 
a
 
n
e
w
e
r
 
v
e
r
s
i
o
n
 
o
f
 
t
h
e
 
s
y
s
t
e
m
.
 
I
f
 
y
o
u
 
s
t
i
l
l
 
w
a
n
t
 
t
o
 
u
p
g
r
a
d
e
 
t
o
 
t
a
k
e
 
a
d
v
a
n
t
a
g
e
 
o
f
 
n
e
w
 
f
u
n
c
t
i
o
n
a
l
i
t
y
,
 
y
o
u
 
s
h
o
u
l
d
 
p
u
r
c
h
a
s
e
 
a
 
R
e
n
e
w
a
l
 
l
i
c
e
n
s
e
,
 
w
h
i
c
h
 
i
s
 
e
f
f
e
c
t
i
v
e
l
y
 
a
 
n
o
r
m
a
l
 
l
i
c
e
n
s
e
 
w
i
t
h
 
a
 
5
0
%
 
d
i
s
c
o
u
n
t
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
S
O
F
T
W
A
R
E
L
I
C
E
N
S
E
'
,
 
'
W
h
a
t
 
s
o
f
t
w
a
r
e
 
l
i
c
e
n
s
e
 
i
s
 
J
o
m
r
e
s
 
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
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
S
O
F
T
W
A
R
E
L
I
C
E
N
S
E
'
,
 
"
J
o
m
r
e
s
 
i
s
 
l
i
c
e
n
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
 
t
h
e
 
M
I
T
 
a
n
d
 
G
P
L
 
l
i
c
e
n
s
e
s
.
 
P
l
u
g
i
n
s
 
d
o
w
n
l
o
a
d
e
d
 
b
y
 
S
t
a
r
t
e
r
,
 
B
u
s
i
n
e
s
s
 
a
n
d
 
E
n
t
e
r
p
r
i
s
e
 
l
i
c
e
n
s
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
 
t
h
e
 
s
a
m
e
 
l
i
c
e
n
s
e
,
 
a
n
d
 
a
r
e
 
c
o
m
p
l
e
t
e
l
y
 
f
r
e
e
 
a
n
d
 
o
p
e
n
 
s
o
u
r
c
e
.
 
P
l
u
g
i
n
s
 
d
o
w
n
l
o
a
d
e
d
 
f
o
r
 
t
r
i
a
l
 
a
n
d
 
s
u
b
s
c
r
i
p
t
i
o
n
 
l
i
c
e
n
s
e
s
 
a
r
e
 
n
o
t
 
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
 
t
h
e
 
G
P
L
 
o
r
 
M
I
T
 
l
i
c
e
n
s
e
s
 
a
n
d
 
a
r
e
 
I
o
n
c
u
b
e
 
e
n
c
o
d
e
d
.
 
T
h
i
s
 
a
p
p
r
o
a
c
h
 
a
l
l
o
w
s
 
u
s
 
t
o
 
o
f
f
e
r
 
y
o
u
 
a
 
v
a
r
i
e
t
y
 
o
f
 
d
i
f
f
e
r
e
n
t
 
l
i
c
e
n
s
e
s
 
t
o
 
s
u
i
t
 
e
v
e
r
y
b
o
d
y
'
s
 
p
o
c
k
e
t
s
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
Y
'
,
 
'
P
r
o
p
e
r
t
i
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
C
R
E
A
T
P
R
O
P
E
R
T
Y
'
,
 
'
H
o
w
 
d
o
 
I
 
c
r
e
a
t
e
 
a
 
p
r
o
p
e
r
t
y
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
C
R
E
A
T
P
R
O
P
E
R
T
Y
'
,
 
'
C
l
i
c
k
 
o
n
 
P
r
o
p
e
r
t
i
e
s
 
>
 
N
e
w
 
P
r
o
p
e
r
t
y
 
t
o
 
a
d
d
 
a
 
n
e
w
 
p
r
o
p
e
r
t
y
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
P
R
E
V
I
E
W
'
,
 
'
H
o
w
 
c
a
n
 
I
 
s
e
e
 
w
h
a
t
 
m
y
 
p
r
o
p
e
r
t
y
 
l
o
o
k
s
 
l
i
k
e
 
t
o
 
g
u
e
s
t
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
P
R
E
V
I
E
W
'
,
 
'
C
l
i
c
k
 
o
n
 
P
r
o
p
e
r
t
i
e
s
 
>
 
P
r
e
v
i
e
w
 
t
o
 
s
e
e
 
h
o
w
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
l
o
o
k
s
 
t
o
 
g
u
e
s
t
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
A
D
D
R
O
O
M
S
_
M
R
P
'
,
 
'
H
o
w
 
d
o
 
I
 
a
d
d
 
r
o
o
m
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
A
D
D
R
O
O
M
S
_
M
R
P
'
,
 
"
H
o
w
 
y
o
u
 
a
d
d
 
r
o
o
m
s
 
d
e
p
e
n
d
s
 
o
n
 
y
o
u
r
 
T
a
r
i
f
f
 
E
d
i
t
i
n
g
 
m
o
d
e
.
 
I
n
 
t
h
e
 
N
o
r
m
a
l
 
t
a
r
i
f
f
 
e
d
i
t
i
n
g
 
m
o
d
e
,
 
y
o
u
 
d
o
n
'
t
 
n
e
e
d
 
t
o
 
a
d
d
 
r
o
o
m
s
,
 
a
s
 
t
h
e
y
'
r
e
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
a
d
d
e
d
 
w
h
e
n
 
y
o
u
 
c
o
n
f
i
g
u
r
e
 
y
o
u
r
 
p
r
i
c
e
s
.
 
I
f
 
y
o
u
 
a
r
e
 
u
s
i
n
g
 
M
i
c
r
o
m
a
n
a
g
e
 
o
r
 
A
d
v
a
n
c
e
d
 
t
a
r
i
f
f
 
e
d
i
t
i
n
g
 
m
o
d
e
,
 
t
h
e
n
 
i
n
 
S
e
t
t
i
n
g
s
 
>
 
R
o
o
m
s
 
y
o
u
 
c
a
n
 
a
d
d
,
 
e
d
i
t
 
a
n
d
 
d
e
l
e
t
e
 
r
o
o
m
s
.
 
Y
o
u
 
w
i
l
l
 
a
l
s
o
 
b
e
 
a
b
l
e
 
t
o
 
c
r
e
a
t
e
 
r
o
o
m
 
f
e
a
t
u
r
e
s
,
 
a
n
d
 
a
s
s
i
g
n
 
t
h
e
s
e
 
f
e
a
t
u
r
e
s
 
t
o
 
t
h
o
s
e
 
r
o
o
m
s
.
 
A
d
d
i
t
i
o
n
a
l
l
y
,
 
y
o
u
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
 
i
n
d
i
v
i
d
u
a
l
 
r
o
o
m
s
 
u
s
i
n
g
 
t
h
e
 
M
e
d
i
a
 
C
e
n
t
r
e
.
 
W
h
e
n
 
 
y
o
u
 
c
r
e
a
t
e
 
r
o
o
m
s
,
 
y
o
u
 
s
h
o
u
l
d
 
t
r
y
 
t
o
 
e
n
s
u
r
e
 
t
h
a
t
 
t
h
e
y
 
r
e
f
l
e
c
t
 
y
o
u
r
 
r
e
a
l
-
w
o
r
l
d
 
r
o
o
m
s
 
i
n
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
a
s
 
t
h
a
t
 
w
i
l
l
 
m
a
k
e
 
t
h
e
m
 
e
a
s
i
e
r
 
t
o
 
m
a
n
a
g
e
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
A
D
D
P
R
I
C
E
S
'
,
 
'
H
o
w
 
d
o
 
I
 
s
e
t
 
r
o
o
m
 
p
r
i
c
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
A
D
D
P
R
I
C
E
S
'
,
 
"
T
h
i
s
 
d
e
p
e
n
d
s
 
o
n
 
y
o
u
r
 
t
a
r
i
f
f
 
e
d
i
t
i
n
g
 
m
o
d
e
.
 
I
f
 
y
o
u
 
a
r
e
 
u
s
i
n
g
 
t
h
e
 
N
o
r
m
a
l
 
T
a
r
i
f
f
 
e
d
i
t
i
n
g
 
m
o
d
e
 
(
 
P
r
o
p
e
r
t
y
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
>
 
T
a
r
i
f
f
 
E
d
i
t
i
n
g
 
M
o
d
e
s
 
t
a
b
)
 
t
h
e
n
 
y
o
u
 
c
a
n
 
c
o
n
f
i
g
u
r
e
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
r
o
o
m
s
 
y
o
u
 
h
a
v
e
,
 
t
h
e
 
p
r
i
c
e
,
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
p
e
o
p
l
e
 
e
a
c
h
 
r
o
o
m
 
c
a
n
 
a
c
c
o
m
m
o
d
a
t
e
 
a
n
d
 
t
h
e
 
t
o
t
a
l
 
n
u
m
b
e
r
 
o
f
 
p
e
o
p
l
e
 
y
o
u
 
w
a
n
t
 
i
n
 
e
a
c
h
 
b
o
o
k
i
n
g
.
 
T
h
i
s
 
m
o
d
e
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
s
e
t
 
r
o
o
m
 
p
r
i
c
e
s
 
f
o
r
 
t
h
e
 
n
e
x
t
 
1
0
 
y
e
a
r
s
.
 
<
b
r
/
>
I
f
 
y
o
u
 
a
r
e
 
u
s
i
n
g
 
t
h
e
 
A
d
v
a
n
c
e
d
 
o
r
 
M
i
c
r
o
m
a
n
a
g
e
 
t
a
r
i
f
f
 
e
d
i
t
i
n
g
 
m
o
d
e
s
,
 
t
h
e
n
 
y
o
u
 
a
r
e
 
a
b
l
e
 
t
o
 
s
e
t
 
r
o
o
m
 
p
r
i
c
e
s
 
f
o
r
 
e
v
e
r
y
 
d
a
y
 
f
o
r
 
y
e
a
r
s
 
t
o
 
c
o
m
e
.
 
Y
o
u
 
c
a
n
 
a
l
s
o
 
h
a
v
e
 
m
u
l
t
i
p
l
e
 
t
a
r
i
f
f
s
 
f
o
r
 
t
h
e
 
s
a
m
e
 
r
o
o
m
 
t
y
p
e
,
 
f
o
r
 
e
x
a
m
p
l
e
 
y
o
u
 
c
a
n
 
h
a
v
e
 
o
n
e
 
t
a
r
i
f
f
 
f
o
r
 
B
e
d
&
B
r
e
a
k
f
a
s
t
 
a
n
d
 
a
n
o
t
h
e
r
 
f
o
r
 
B
e
d
,
 
B
r
e
a
k
f
a
s
t
 
&
 
E
v
e
n
i
n
g
 
m
e
a
l
.
 
U
n
l
e
s
s
 
y
o
u
 
h
a
v
e
 
a
 
s
p
e
c
i
f
i
c
 
n
e
e
d
,
 
w
e
 
r
e
c
o
m
m
e
n
d
 
t
h
a
t
 
y
o
u
 
u
s
e
 
M
i
c
r
o
m
a
n
a
g
e
 
a
l
l
 
t
h
e
 
t
i
m
e
,
 
A
d
v
a
n
c
e
d
 
w
i
l
l
 
w
o
r
k
 
i
n
 
t
h
e
 
s
a
m
e
 
w
a
y
 
b
u
t
 
y
o
u
 
n
e
e
d
 
t
o
 
b
e
 
c
a
r
e
f
u
l
 
t
o
 
e
n
s
u
r
e
 
t
h
a
t
 
y
o
u
r
 
d
i
f
f
e
r
e
n
t
 
t
a
r
i
f
f
'
s
 
s
t
a
r
t
 
a
n
d
 
e
n
d
 
d
a
t
e
s
 
a
r
e
 
c
o
n
s
e
c
u
t
i
v
e
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
E
X
T
R
A
S
'
,
 
'
H
o
w
 
d
o
 
I
 
c
r
e
a
t
e
 
o
p
t
i
o
n
a
l
 
e
x
t
r
a
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
E
X
T
R
A
S
'
,
 
"
E
x
t
r
a
s
 
c
a
n
 
b
e
 
a
d
d
e
d
 
t
o
 
b
o
o
k
i
n
g
s
 
a
n
d
 
a
r
e
 
c
o
n
f
i
g
u
r
e
d
 
i
n
 
S
e
t
t
i
n
g
s
 
>
 
E
x
t
r
a
s
.
 
T
h
e
s
e
 
c
a
n
 
b
e
 
e
i
t
h
e
r
 
o
p
t
i
o
n
a
l
 
o
r
 
'
f
o
r
c
e
d
'
,
 
i
n
 
o
t
h
e
r
 
w
o
r
d
s
 
t
h
e
 
g
u
e
s
t
 
c
a
n
n
o
t
 
d
e
-
s
e
l
e
c
t
 
t
h
e
m
 
i
n
 
t
h
e
 
b
o
o
k
i
n
g
.
 
Y
o
u
 
c
a
n
 
o
f
f
e
r
 
d
i
f
f
e
r
e
n
t
 
m
e
t
h
o
d
s
 
o
f
 
c
h
a
r
g
i
n
g
 
f
o
r
 
o
p
t
i
o
n
a
l
 
e
x
t
r
a
s
,
 
a
n
d
 
w
h
e
t
h
e
r
 
o
r
 
n
o
t
 
t
h
e
y
'
r
e
 
s
h
o
w
n
 
i
n
 
y
o
u
r
 
P
r
o
p
e
r
t
y
 
D
e
t
a
i
l
s
 
p
a
g
e
.
 
B
e
c
a
u
s
e
 
e
x
t
r
a
s
 
c
a
n
 
b
e
 
m
a
d
e
 
t
o
 
o
n
l
y
 
s
h
o
w
 
i
f
 
a
 
b
o
o
k
i
n
g
 
i
s
 
w
i
t
h
i
n
 
c
e
r
t
a
i
n
 
d
a
t
e
s
 
(
 
f
o
r
 
e
x
a
m
p
l
e
,
 
f
o
r
 
s
e
a
s
o
n
a
l
 
f
r
u
i
t
s
 
)
,
 
y
o
u
 
s
h
o
u
l
d
 
m
a
k
e
 
s
u
r
e
 
t
h
a
t
 
y
o
u
 
h
a
v
e
 
s
e
t
 
t
h
e
 
V
a
l
i
d
 
f
r
o
m
 
a
n
d
 
T
o
 
d
a
t
e
s
.
 
O
n
c
e
 
y
o
u
 
h
a
v
e
 
c
r
e
a
t
e
d
 
o
p
t
i
o
n
a
l
 
e
x
t
a
s
,
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
 
t
h
e
m
 
t
h
r
o
u
g
h
 
t
h
e
 
M
e
d
i
a
 
M
a
n
a
g
e
r
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
P
A
Y
M
E
N
T
S
'
,
 
'
H
o
w
 
c
a
n
 
I
 
t
a
k
e
 
p
a
y
m
e
n
t
s
 
o
n
l
i
n
e
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
P
A
Y
M
E
N
T
S
'
,
 
"
T
o
 
t
a
k
e
 
p
a
y
m
e
n
t
s
 
o
n
l
i
n
e
,
 
y
o
u
 
n
e
e
d
 
t
o
 
h
a
v
e
 
a
n
 
a
c
c
o
u
n
t
 
w
i
t
h
 
a
n
 
o
n
l
i
n
e
 
p
a
y
m
e
n
t
 
p
r
o
v
i
d
e
r
,
 
c
a
l
l
e
d
 
a
 
G
a
t
e
w
a
y
.
 
T
o
 
s
e
e
 
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
 
g
a
t
e
w
a
y
s
,
 
g
o
 
t
o
 
P
r
o
p
e
r
t
y
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
>
 
G
a
t
e
w
a
y
s
 
t
a
b
.
 
C
l
i
c
k
 
o
n
 
a
 
g
a
t
e
w
a
y
'
s
 
n
a
m
e
 
t
o
 
b
e
 
t
a
k
e
n
 
t
o
 
i
t
'
s
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
p
a
g
e
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
D
I
S
C
O
U
N
T
S
'
,
 
'
C
a
n
 
I
 
g
i
v
e
 
d
i
s
c
o
u
n
t
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
D
I
S
C
O
U
N
T
S
'
,
 
"
D
i
s
c
o
u
n
t
s
 
c
a
n
 
b
e
 
g
i
v
e
n
,
 
t
h
e
r
e
 
a
r
e
 
a
 
n
u
m
b
e
r
 
o
f
 
d
i
f
f
e
r
e
n
t
 
w
a
y
s
 
t
h
i
s
 
c
a
n
 
b
e
 
d
o
n
e
.
 
I
f
 
y
o
u
 
a
r
e
 
m
a
k
i
n
g
 
a
 
b
o
o
k
i
n
g
 
o
n
 
b
e
h
a
l
f
 
o
f
 
a
 
c
u
s
t
o
m
e
r
,
 
t
h
e
n
 
y
o
u
 
c
a
n
 
s
e
t
 
y
o
u
r
 
o
w
n
 
D
e
p
o
s
i
t
 
a
n
d
 
B
o
o
k
i
n
g
 
t
o
t
a
l
s
 
i
n
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
,
 
u
s
i
n
g
 
t
h
e
 
\
"
O
v
e
r
r
i
d
e
 
A
c
c
o
m
m
o
d
a
t
i
o
n
 
T
o
t
a
l
\
"
 
a
n
d
 
\
"
O
v
e
r
r
i
d
e
 
D
e
p
o
s
i
t
\
"
 
f
i
e
l
d
s
 
(
 
g
u
e
s
t
s
 
c
a
n
'
t
 
u
s
e
 
t
h
i
s
 
f
e
a
t
u
r
e
 
)
.
 
A
n
o
t
h
e
r
 
w
a
y
 
t
o
 
g
i
v
e
 
a
 
g
u
e
s
t
 
a
 
d
i
s
c
o
u
n
t
 
i
s
 
t
o
 
c
r
e
a
t
e
 
d
i
s
c
o
u
n
t
 
c
o
u
p
o
n
s
,
 
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
f
i
g
u
r
e
d
 
s
o
 
t
h
a
t
 
t
h
e
y
 
c
a
n
 
o
n
l
y
 
b
e
 
u
s
e
d
 
b
e
t
w
e
e
n
 
c
e
r
t
a
i
n
 
d
a
t
e
s
 
(
 
V
a
l
i
d
 
f
r
o
m
/
t
o
 
)
 
o
r
 
a
p
p
l
i
e
d
 
o
n
l
y
 
w
h
e
n
 
t
h
e
 
b
o
o
k
i
n
g
 
f
a
l
l
s
 
b
e
t
w
e
e
n
 
c
e
r
t
a
i
n
 
d
a
t
e
s
 
(
 
B
o
o
k
i
n
g
 
v
a
l
i
d
 
f
r
o
m
/
t
o
 
)
.
 
T
h
i
s
 
d
i
s
c
o
u
n
t
 
c
o
u
p
o
n
s
 
c
a
n
 
b
e
 
a
s
s
i
g
n
e
d
 
t
o
 
j
u
s
t
 
o
n
e
 
g
u
e
s
t
,
 
o
r
 
i
f
 
y
o
u
 
w
a
n
t
 
y
o
u
 
c
a
n
 
p
r
i
n
t
 
o
u
t
 
t
h
e
 
c
o
u
p
o
n
s
.
 
T
h
e
 
p
r
i
n
t
o
u
t
 
i
n
c
l
u
d
e
s
 
a
 
Q
R
 
c
o
d
e
 
w
h
i
c
h
 
g
u
e
s
t
s
 
c
a
n
 
s
c
a
n
 
i
n
t
o
 
t
h
e
i
r
 
p
h
o
n
e
s
 
t
h
a
t
 
t
a
k
e
s
 
t
h
e
m
 
t
o
 
y
o
u
r
 
b
o
o
k
i
n
g
 
f
o
r
m
 
w
i
t
h
 
t
h
e
 
d
i
s
c
o
u
n
t
 
c
o
d
e
 
a
l
r
e
a
d
y
 
a
p
p
l
i
e
s
.
 
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
B
O
O
K
I
N
G
S
'
,
 
'
B
o
o
k
i
n
g
s
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
B
O
O
K
I
N
G
S
_
C
O
N
T
A
C
T
P
A
G
E
'
,
 
'
W
h
e
n
 
I
 
c
l
i
c
k
 
N
e
w
 
b
o
o
k
i
n
g
,
 
I
 
a
m
 
t
a
k
e
n
 
t
o
 
t
h
e
 
C
o
n
t
a
c
t
 
f
o
r
m
,
 
w
h
y
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
B
O
O
K
I
N
G
S
_
C
O
N
T
A
C
T
P
A
G
E
'
,
 
'
B
e
f
o
r
e
 
y
o
u
 
c
a
n
 
t
a
k
e
 
b
o
o
k
i
n
g
s
 
o
n
l
i
n
e
,
 
y
o
u
 
m
u
s
t
 
f
i
r
s
t
 
c
o
n
f
i
g
u
r
e
 
s
o
m
e
 
p
r
i
c
e
s
 
(
t
a
r
i
f
f
s
)
 
f
o
r
 
e
a
c
h
 
r
o
o
m
 
t
y
p
e
 
y
o
u
 
h
a
v
e
 
i
n
 
y
o
u
r
 
r
e
a
l
-
w
o
r
l
d
 
p
r
o
p
e
r
t
y
.
 
O
n
c
e
 
y
o
u
 
h
a
v
e
 
c
r
e
a
t
e
d
 
s
o
m
e
 
t
a
r
i
f
f
s
,
 
y
o
u
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
t
a
k
e
 
b
o
o
k
i
n
g
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
B
O
O
K
I
N
G
S
_
B
L
A
C
K
'
,
 
'
W
h
a
t
 
a
r
e
 
B
l
a
c
k
 
B
o
o
k
i
n
g
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
B
O
O
K
I
N
G
S
_
B
L
A
C
K
'
,
 
"
B
l
a
c
k
 
b
o
o
k
i
n
g
s
 
a
r
e
 
b
o
o
k
i
n
g
s
 
t
h
a
t
 
h
a
v
e
 
b
e
e
n
 
c
r
e
a
t
e
d
 
t
o
 
t
a
k
e
 
a
 
r
o
o
m
 
o
r
 
r
o
o
m
s
 
o
u
t
 
o
f
 
s
e
r
v
i
c
e
.
 
T
h
e
y
'
r
e
 
n
o
t
 
a
s
s
o
c
i
a
t
e
d
 
w
i
t
h
 
a
n
y
 
g
u
e
s
t
s
 
a
n
d
 
a
r
e
 
u
s
e
f
u
l
,
 
f
o
r
 
e
x
a
m
p
l
e
,
 
i
f
 
a
 
r
o
o
m
 
n
e
e
d
s
 
t
o
 
b
e
 
r
e
f
u
r
b
i
s
h
e
d
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
I
M
A
G
E
S
'
,
 
'
I
m
a
g
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
I
N
T
R
O
'
,
 
'
H
o
w
 
d
o
 
I
 
u
p
l
o
a
d
 
i
m
a
g
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
I
N
T
R
O
'
,
 
"
T
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
,
 
y
o
u
 
n
e
e
d
 
t
o
 
v
i
s
i
t
 
t
h
e
 
S
e
t
t
i
n
g
s
 
>
 
M
e
d
i
a
 
C
e
n
t
r
e
 
p
a
g
e
.
 
O
n
 
t
h
i
s
 
p
a
g
e
 
y
o
u
 
w
i
l
l
 
s
e
e
 
s
e
v
e
r
a
l
 
p
a
n
e
s
.
 
A
t
 
t
h
e
 
t
o
p
 
y
o
u
 
m
i
g
h
t
 
s
e
e
 
s
o
m
e
 
n
o
t
e
s
,
 
a
n
d
 
u
n
d
e
r
n
e
a
t
h
 
t
h
e
m
 
y
o
u
'
l
l
 
s
e
e
 
a
 
d
r
o
p
d
o
w
n
.
 
T
h
i
s
 
d
r
o
p
d
o
w
n
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
s
e
l
e
c
t
 
w
h
i
c
h
 
r
e
s
o
u
r
c
e
 
y
o
u
'
r
e
 
u
p
l
o
a
d
i
n
g
 
i
m
a
g
e
s
 
f
o
r
.
 
<
b
r
/
>
 
O
n
 
t
h
e
 
r
i
g
h
t
 
i
s
 
a
 
c
o
l
u
m
n
 
w
i
t
h
 
A
d
d
 
I
m
a
g
e
s
,
 
C
l
e
a
r
 
L
i
s
t
 
a
n
d
 
U
p
l
o
a
d
 
a
l
l
.
 
C
l
i
c
k
 
A
d
d
 
I
m
a
g
e
s
 
a
n
d
 
s
e
l
e
c
t
 
s
o
m
e
 
i
m
a
g
e
s
 
f
r
o
m
 
y
o
u
r
 
d
e
s
k
t
o
p
 
o
r
 
m
o
b
i
l
e
 
d
e
v
i
c
e
.
 
W
h
e
n
 
y
o
u
'
v
e
 
d
o
n
e
 
t
h
a
t
,
 
t
h
e
 
c
o
l
u
m
n
 
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
 
t
o
 
a
 
l
i
s
t
 
o
f
 
t
h
u
m
b
n
a
i
l
s
.
 
F
r
o
m
 
h
e
r
e
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
 
o
n
e
 
o
r
 
m
o
r
e
 
i
m
a
g
e
s
 
f
o
r
 
y
o
u
r
 
r
e
s
o
u
r
c
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
M
A
I
N
'
,
 
"
W
h
a
t
 
i
s
 
t
h
e
 
'
M
a
i
n
'
 
i
m
a
g
e
?
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
M
A
I
N
'
,
 
'
T
h
e
 
M
a
i
n
 
i
m
a
g
e
 
i
s
 
t
h
e
 
o
n
e
 
t
h
a
t
 
a
p
p
e
a
r
s
 
i
n
 
s
e
a
r
c
h
 
r
e
s
u
l
t
s
 
a
n
d
 
i
n
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
h
e
a
d
e
r
 
(
 
t
h
e
 
a
r
e
a
 
a
t
 
t
h
e
 
t
o
p
 
o
f
 
p
a
g
e
s
 
t
h
a
t
 
s
h
o
w
 
s
o
m
e
t
h
i
n
g
 
a
b
o
u
t
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
)
.
 
Y
o
u
 
s
h
o
u
l
d
 
c
h
o
o
s
e
 
a
n
 
i
m
a
g
e
 
t
h
a
t
 
d
i
s
p
l
a
y
s
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
i
n
 
t
h
e
 
b
e
s
t
 
p
o
s
s
i
b
l
e
 
l
i
g
h
t
.
 
T
o
 
u
p
l
o
a
d
 
a
 
m
a
i
n
 
i
m
a
g
e
,
 
m
a
k
e
 
s
u
r
e
 
P
r
o
p
e
r
t
y
 
M
a
i
n
 
I
m
a
g
e
 
i
s
 
s
e
l
e
c
t
e
d
 
i
n
 
t
h
e
 
d
r
o
p
d
o
w
n
 
l
i
s
t
 
a
t
 
t
h
e
 
t
o
p
 
l
e
f
t
,
 
t
h
e
n
 
u
p
l
o
a
d
 
o
n
e
 
o
r
 
m
o
r
e
 
i
m
a
g
e
s
.
 
I
f
 
y
o
u
 
u
p
l
o
a
d
 
m
o
r
e
 
t
h
a
n
 
o
n
e
 
i
m
a
g
e
,
 
t
h
e
n
 
a
l
l
 
i
m
a
g
e
s
 
w
i
l
l
 
b
e
 
u
s
e
d
 
i
n
 
t
h
e
 
s
e
a
r
c
h
 
r
e
s
u
l
t
s
 
p
a
g
e
 
d
i
s
p
l
a
y
i
n
g
 
a
s
 
a
 
s
m
a
l
l
 
s
l
i
d
e
s
h
o
w
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
F
E
A
T
U
R
E
S
'
,
 
'
W
h
a
t
 
a
r
e
 
r
o
o
m
 
f
e
a
t
u
r
e
 
i
c
o
n
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
F
E
A
T
U
R
E
S
'
,
 
"
R
o
o
m
 
f
e
a
t
u
r
e
s
 
c
a
n
 
b
e
 
c
r
e
a
t
e
d
 
b
y
 
u
s
e
r
s
 
o
f
 
M
i
c
r
o
m
a
n
a
g
e
 
o
r
 
A
d
v
a
n
c
e
d
 
t
a
r
i
f
f
 
e
d
i
t
i
n
g
 
m
o
d
e
s
.
 
T
h
e
s
e
 
c
a
n
 
b
e
 
l
i
n
k
e
d
 
t
o
 
o
n
e
 
o
r
 
m
o
r
e
 
r
o
o
m
s
,
 
a
n
d
 
a
r
e
 
d
i
s
p
l
a
y
e
d
 
i
n
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
.
 
O
n
c
e
 
y
o
u
 
h
a
v
e
 
c
r
e
a
t
e
d
 
a
 
r
o
o
m
 
f
e
a
t
u
r
e
,
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
 
a
n
 
i
m
a
g
e
 
f
o
r
 
t
h
a
t
 
f
e
a
t
u
r
e
 
b
y
 
f
i
r
s
t
 
s
e
l
e
c
t
i
n
g
 
R
o
o
m
 
F
e
a
t
u
r
e
s
 
I
c
o
n
s
 
i
n
 
t
h
e
 
d
r
o
p
d
o
w
n
 
i
n
 
t
h
e
 
M
e
d
i
a
 
C
e
n
t
r
e
,
 
t
h
e
n
 
s
e
l
e
c
t
i
n
g
 
t
h
e
 
r
o
o
m
 
f
e
a
t
u
r
e
'
s
 
n
a
m
e
 
f
r
o
m
 
t
h
e
 
d
r
o
p
d
o
w
n
 
t
h
a
t
 
w
i
l
l
 
a
p
p
e
a
r
 
u
n
d
e
r
n
e
a
t
h
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
R
O
O
M
S
'
,
 
'
H
o
w
 
d
o
 
I
 
u
p
l
o
a
d
 
r
o
o
m
 
i
m
a
g
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
F
E
A
T
U
R
E
S
'
,
 
'
R
o
o
m
s
 
c
a
n
 
b
e
 
c
r
e
a
t
e
d
 
b
y
 
u
s
e
r
s
 
o
f
 
M
i
c
r
o
m
a
n
a
g
e
 
o
r
 
A
d
v
a
n
c
e
d
 
t
a
r
i
f
f
 
e
d
i
t
i
n
g
 
m
o
d
e
s
.
 
O
n
c
e
 
o
n
e
 
o
r
 
m
o
r
e
 
r
o
o
m
s
 
h
a
v
e
 
b
e
e
n
 
c
r
e
a
t
e
d
,
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
 
m
u
l
t
i
p
l
e
 
i
m
a
g
e
s
 
f
o
r
 
e
a
c
h
 
r
o
o
m
 
t
h
r
o
u
g
h
 
t
h
e
 
M
e
d
i
a
 
C
e
n
t
r
e
 
(
s
e
l
e
c
t
 
t
h
e
 
r
o
o
m
 
n
a
m
e
/
n
u
m
b
e
r
 
a
f
t
e
r
 
s
e
l
e
c
t
i
n
g
 
R
o
o
m
 
I
m
a
g
e
s
 
i
n
 
t
h
e
 
d
r
o
p
d
o
w
n
)
.
 
T
h
e
s
e
 
i
m
a
g
e
s
 
c
a
n
 
b
e
 
s
e
e
n
 
i
n
 
a
 
s
l
i
d
e
s
h
o
w
 
b
y
 
v
i
e
w
i
n
g
 
t
h
e
 
P
r
e
v
i
e
w
 
p
a
g
e
 
a
n
d
 
s
e
l
e
c
t
i
n
g
 
t
h
e
 
O
u
r
 
R
o
o
m
s
 
t
a
b
 
t
h
e
n
 
c
l
i
c
k
i
n
g
 
o
n
 
t
h
e
 
A
v
a
i
l
a
b
i
l
i
t
y
 
l
i
n
k
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
S
L
I
D
E
S
H
O
W
'
,
 
'
H
o
w
 
d
o
 
I
 
u
p
l
o
a
d
 
s
l
i
d
e
s
h
o
w
 
i
m
a
g
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
S
L
I
D
E
S
H
O
W
'
,
 
'
S
l
i
d
e
s
h
o
w
 
i
m
a
g
e
s
 
a
r
e
 
s
e
e
n
 
i
n
 
t
h
e
 
P
r
o
p
e
r
t
y
 
D
e
t
a
i
l
s
 
(
 
P
r
e
v
i
e
w
 
)
 
p
a
g
e
,
 
n
e
x
t
 
t
o
 
t
h
e
 
B
o
o
k
 
N
o
w
 
b
u
t
t
o
n
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
E
X
T
R
A
S
'
,
 
'
H
o
w
 
d
o
 
I
 
u
p
l
o
a
d
 
E
x
t
r
a
s
 
I
m
a
g
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
E
X
T
R
A
S
'
,
 
"
S
i
m
i
l
a
r
 
t
o
 
t
h
e
 
r
o
o
m
s
 
a
n
d
 
r
o
o
m
 
f
e
a
t
u
r
e
s
,
 
y
o
u
 
n
e
e
d
 
t
o
 
c
r
e
a
t
e
 
a
n
 
E
x
t
r
a
 
f
i
r
s
t
.
 
O
n
c
e
 
t
h
a
t
'
s
 
d
o
n
e
,
 
y
o
u
 
c
a
n
 
s
e
l
e
c
t
 
E
x
t
r
a
s
 
i
n
 
t
h
e
 
t
o
p
 
d
r
o
p
d
o
w
n
.
 
W
h
e
n
 
y
o
u
'
v
e
 
d
o
n
e
 
t
h
a
t
,
 
y
o
u
 
n
e
e
d
 
t
o
 
s
e
l
e
c
t
 
t
h
e
 
n
a
m
e
 
o
f
 
t
h
e
 
E
x
t
r
a
 
f
r
o
m
 
t
h
e
 
d
r
o
p
d
o
w
n
 
l
i
s
t
 
b
e
l
o
w
.
 
W
h
e
n
 
t
h
e
 
n
a
m
e
 
i
s
 
s
e
l
e
c
t
e
d
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
 
o
n
e
 
o
r
 
m
o
r
e
 
i
m
a
g
e
s
 
f
o
r
 
t
h
a
t
 
E
x
t
r
a
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
C
U
R
R
E
N
C
I
E
S
_
S
E
T
U
P
'
,
 
'
H
o
w
 
d
o
 
I
 
s
e
t
u
p
 
c
u
r
r
e
n
c
y
 
s
y
m
b
o
l
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
C
U
R
R
E
N
C
I
E
S
_
S
E
T
U
P
'
,
 
"
Y
o
u
 
d
o
n
'
t
.
 
A
l
l
 
c
u
r
r
e
n
c
y
 
s
y
m
b
o
l
s
 
a
r
e
 
a
l
r
e
a
d
y
 
s
t
o
r
e
d
 
i
n
 
t
h
e
 
s
y
s
t
e
m
,
 
a
n
d
 
i
t
'
s
 
u
p
 
t
o
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
t
o
 
s
e
l
e
c
t
 
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
 
t
h
a
t
'
s
 
r
i
g
h
t
 
f
o
r
 
t
h
e
m
 
i
n
 
t
h
e
 
P
r
o
p
e
r
t
y
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
p
a
g
e
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
C
U
R
R
E
N
C
I
E
S
'
,
 
'
H
o
w
 
d
o
 
I
 
e
n
a
b
l
e
 
m
u
l
t
i
p
l
e
 
c
u
r
r
e
n
c
i
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
C
U
R
R
E
N
C
I
E
S
'
,
 
"
J
o
m
r
e
s
 
h
a
s
 
f
u
n
c
t
i
o
n
a
l
i
t
y
 
t
o
 
c
o
n
v
e
r
t
 
p
r
i
c
e
s
 
f
r
o
m
 
o
n
e
 
c
u
r
r
e
n
c
y
 
t
o
 
a
n
o
t
h
e
r
 
a
u
t
o
m
a
t
i
c
a
l
l
y
.
 
F
i
r
s
t
 
y
o
u
 
n
e
e
d
 
t
o
 
v
i
s
i
t
 
t
h
e
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
>
 
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
n
v
e
r
s
i
o
n
 
t
a
b
.
 
I
n
 
t
h
e
r
e
 
y
o
u
 
w
i
l
l
 
f
i
n
d
 
l
i
n
k
s
 
t
o
 
t
w
o
 
o
n
l
i
n
e
 
s
e
r
v
i
c
e
s
.
 
T
h
e
 
f
i
r
s
t
 
s
e
r
v
i
c
e
,
 
o
n
c
e
 
t
h
e
 
A
P
I
 
h
a
s
 
b
e
e
n
 
s
a
v
e
d
,
 
a
l
l
o
w
s
 
J
o
m
r
e
s
 
t
o
 
d
o
w
n
l
o
a
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
n
v
e
r
s
i
o
n
 
d
a
t
a
 
o
n
c
e
 
a
 
d
a
y
.
 
T
h
e
 
s
e
c
o
n
d
 
e
n
a
b
l
e
s
 
I
P
 
b
a
s
e
d
 
g
e
o
l
o
c
a
t
i
o
n
 
f
o
r
 
u
s
e
r
s
.
 
R
e
q
u
e
s
t
 
a
 
f
r
e
e
 
A
P
I
 
k
e
y
 
f
r
o
m
 
e
a
c
h
 
s
e
r
v
i
c
e
.
 
W
i
t
h
 
t
h
e
s
e
 
t
w
o
 
s
e
r
v
i
c
e
s
 
c
o
m
b
i
n
e
d
,
 
J
o
m
r
e
s
 
c
a
n
 
d
e
t
e
c
t
 
t
h
e
 
u
s
e
r
'
s
 
l
o
c
a
l
 
c
u
r
r
e
n
c
y
,
 
a
n
d
 
d
i
s
p
l
a
y
 
p
r
i
c
e
s
 
o
f
 
p
r
o
p
e
r
t
i
e
s
 
i
n
 
b
o
t
h
 
t
h
e
 
g
u
e
s
t
'
s
 
l
o
c
a
l
 
c
u
r
r
e
n
c
y
,
 
p
l
u
s
 
t
h
e
 
h
o
t
e
l
'
s
 
o
w
n
 
c
u
r
r
e
n
c
y
.
 
I
f
 
y
o
u
 
d
o
n
'
t
 
s
e
t
u
p
 
t
h
e
s
e
 
A
P
I
 
k
e
y
s
 
t
h
e
n
 
J
o
m
r
e
s
 
w
i
l
l
 
d
e
f
a
u
l
t
 
t
o
 
t
h
e
 
E
u
r
o
 
c
u
r
r
e
n
c
y
 
s
y
m
b
o
l
.
 
I
f
 
y
o
u
 
w
a
n
t
 
y
o
u
 
c
a
n
 
s
e
t
 
a
 
g
l
o
b
a
l
 
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
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
w
i
l
l
 
n
o
t
 
b
e
 
a
b
l
e
 
t
o
 
s
e
l
e
c
t
 
a
n
y
 
o
t
h
e
r
 
c
u
r
r
e
n
c
i
e
s
,
 
h
o
w
e
v
e
r
 
p
o
t
e
n
t
i
a
l
 
g
u
e
s
t
s
 
w
i
l
l
 
s
t
i
l
l
 
s
e
e
 
p
r
i
c
e
s
 
i
n
 
t
h
i
e
r
 
o
w
n
 
l
o
c
a
l
 
c
u
r
r
e
n
c
y
 
u
n
l
e
s
s
 
t
h
e
y
'
v
e
 
u
s
e
d
 
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
 
s
w
i
t
c
h
e
r
 
f
e
a
t
u
r
e
 
t
o
 
c
h
a
n
g
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
 
t
h
a
t
 
p
r
i
c
e
s
 
a
r
e
 
d
i
s
p
l
a
y
e
d
 
i
n
.
 
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
L
A
N
G
U
A
G
E
S
'
,
 
'
H
o
w
 
d
o
 
I
 
s
a
v
e
 
d
e
s
c
r
i
p
t
i
o
n
s
 
i
n
 
m
u
l
t
i
p
l
e
 
l
a
n
g
u
a
g
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
L
A
N
G
U
A
G
E
S
'
,
 
"
T
o
 
s
a
v
e
 
d
e
s
c
r
i
p
t
i
o
n
s
 
i
n
 
m
u
l
t
i
p
l
e
 
l
a
n
g
u
a
g
e
s
,
 
f
i
r
s
t
 
v
i
s
i
t
 
t
h
e
 
S
e
t
t
i
n
g
s
 
>
 
P
r
o
p
e
r
t
y
 
D
e
t
a
i
l
s
 
p
a
g
e
.
 
S
a
v
e
 
t
h
e
 
d
e
s
c
r
i
p
t
i
o
n
 
f
o
r
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
t
h
e
r
e
.
 
N
e
x
t
,
 
c
h
a
n
g
e
 
t
h
e
 
l
a
n
g
u
a
g
e
 
t
h
a
t
 
y
o
u
'
r
e
 
v
i
e
w
i
n
g
 
t
h
e
 
s
i
t
e
 
i
n
.
 
N
o
w
 
g
o
 
t
o
 
t
h
e
 
S
e
t
t
i
n
g
s
 
P
r
o
p
e
r
t
y
 
D
e
t
a
i
l
s
 
p
a
g
e
 
a
g
a
i
n
,
 
a
n
d
 
s
a
v
e
 
t
h
e
 
d
e
t
a
i
l
s
 
a
g
a
i
n
.
 
S
o
,
 
i
f
 
t
h
e
 
s
i
t
e
 
i
s
 
c
a
p
a
b
l
e
 
o
f
 
s
h
o
w
i
n
g
 
b
o
t
h
 
E
n
g
l
i
s
h
 
a
n
d
 
S
p
a
n
i
s
h
 
(
o
r
 
a
n
y
 
o
t
h
e
r
)
 
l
a
n
g
u
a
g
e
s
,
 
y
o
u
 
w
o
u
l
d
 
s
e
l
e
c
t
 
E
n
g
l
i
s
h
,
 
e
n
t
e
r
 
t
h
e
 
d
e
s
c
r
i
p
t
i
o
n
 
i
n
 
E
n
g
l
i
s
h
 
t
h
e
n
 
c
l
i
c
k
 
S
a
v
e
.
 
N
e
x
t
,
 
c
h
a
n
g
e
 
y
o
u
r
 
c
u
r
r
e
n
t
 
l
a
n
g
u
a
g
e
 
t
o
 
S
p
a
n
i
s
h
,
 
t
h
e
n
 
s
a
v
e
 
t
h
e
 
n
e
w
 
S
p
a
n
i
s
h
 
d
e
s
c
r
i
p
t
i
o
n
.
 
T
h
i
s
 
w
o
r
k
s
 
f
o
r
 
a
l
l
 
i
n
p
u
t
s
 
o
n
 
t
h
a
t
 
p
a
g
e
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
P
R
O
P
E
R
T
I
E
S
_
N
U
M
B
E
R
'
,
 
'
H
o
w
 
m
a
n
y
 
p
r
o
p
e
r
t
i
e
s
 
c
a
n
 
I
 
l
i
s
t
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
P
R
O
P
E
R
T
I
E
S
_
N
U
M
B
E
R
'
,
 
"
T
h
e
r
e
'
s
 
n
o
 
c
o
d
e
d
 
l
i
m
i
t
 
t
o
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
p
r
o
p
e
r
t
i
e
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
 
l
i
s
t
,
 
t
h
e
 
o
n
l
y
 
l
i
m
i
t
a
t
i
o
n
 
i
s
 
i
n
 
t
h
e
 
p
h
y
s
i
c
a
l
 
l
i
m
i
t
a
t
i
o
n
 
o
f
 
t
h
e
 
s
e
r
v
e
r
 
i
t
s
e
l
f
.
 
I
f
 
i
t
'
s
 
a
 
s
e
r
v
e
r
 
w
i
t
h
 
m
a
n
y
 
o
t
h
e
r
 
a
c
c
o
u
n
t
s
 
o
n
 
t
h
e
n
 
r
e
s
o
u
r
c
e
s
 
w
i
l
l
 
b
e
 
l
i
m
i
t
e
d
,
 
i
f
,
 
o
n
 
t
h
e
 
o
t
h
e
r
 
h
a
n
d
 
i
t
'
s
 
a
 
d
e
d
i
c
a
t
e
d
 
o
r
 
v
i
r
t
u
a
l
 
d
e
d
i
c
a
t
e
d
 
s
e
r
v
e
r
,
 
t
h
e
n
 
y
o
u
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
l
i
s
t
 
m
a
n
y
 
m
o
r
e
 
p
r
o
p
e
r
t
i
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
O
T
H
E
R
P
R
O
P
E
R
T
I
E
S
'
,
 
'
C
a
n
 
I
 
m
o
d
i
f
y
 
o
t
h
e
r
 
p
r
o
p
e
r
t
i
e
s
 
o
n
 
t
h
i
s
 
s
i
t
e
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
O
T
H
E
R
P
R
O
P
E
R
T
I
E
S
'
,
 
'
N
o
,
 
y
o
u
 
c
a
n
n
o
t
.
 
Y
o
u
 
c
a
n
 
o
n
l
y
 
a
d
m
i
n
i
s
t
e
r
 
p
r
o
p
e
r
t
i
e
s
 
y
o
u
 
h
a
v
e
 
c
r
e
a
t
e
d
 
o
r
 
b
e
e
n
 
a
s
s
i
g
n
e
d
 
t
o
 
a
s
 
a
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
O
T
H
E
R
P
R
O
P
E
R
T
I
E
S
_
S
U
P
E
R
'
,
 
'
C
a
n
 
I
 
m
o
d
i
f
y
 
o
t
h
e
r
 
p
r
o
p
e
r
t
i
e
s
 
o
n
 
t
h
i
s
 
s
i
t
e
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
O
T
H
E
R
P
R
O
P
E
R
T
I
E
S
_
S
U
P
E
R
'
,
 
"
Y
e
s
 
y
o
u
 
c
a
n
,
 
y
o
u
'
r
e
 
a
 
S
u
p
e
r
 
P
r
o
p
e
r
t
y
 
M
a
n
a
g
e
r
 
a
n
d
 
c
a
n
 
m
o
d
i
f
y
 
a
n
y
 
p
r
o
p
e
r
t
i
e
s
 
s
h
o
w
n
 
i
n
 
t
h
e
 
L
i
s
t
 
P
r
o
p
e
r
t
i
e
s
 
p
a
g
e
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
G
U
E
S
T
T
Y
P
E
S
'
,
 
'
W
h
a
t
 
a
r
e
 
G
u
e
s
t
 
T
y
p
e
s
/
H
o
w
 
d
o
 
I
 
c
h
a
n
g
e
 
p
e
r
 
p
e
r
s
o
n
 
p
e
r
 
n
i
g
h
t
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
G
U
E
S
T
T
Y
P
E
S
'
,
 
"
I
n
 
S
e
t
t
i
n
g
s
 
>
 
P
r
o
p
e
r
t
y
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
>
 
T
a
r
i
f
f
s
 
a
n
d
 
C
u
r
r
e
n
c
i
e
s
 
t
a
b
,
 
y
o
u
 
c
a
n
 
d
e
c
i
d
e
d
 
w
h
e
t
h
e
r
 
y
o
u
 
w
a
n
t
 
t
o
 
c
h
a
r
g
e
 
p
e
r
 
p
e
r
s
o
n
 
p
e
r
 
n
i
g
h
t
.
 
I
f
 
y
o
u
 
c
h
a
r
g
e
 
p
e
r
 
p
e
r
s
o
n
 
p
e
r
 
n
i
g
h
t
,
 
y
o
u
 
w
i
l
l
 
n
e
e
d
 
t
o
 
c
r
e
a
t
e
 
o
n
e
 
o
r
 
m
o
r
e
 
g
u
e
s
t
 
t
y
p
e
s
.
 
Y
o
u
 
c
a
n
 
c
r
e
a
t
e
 
a
 
s
i
m
p
l
e
 
g
u
e
s
t
 
t
y
p
e
,
 
w
h
e
r
e
 
y
o
u
 
j
u
s
t
 
g
i
v
e
 
t
h
e
m
 
a
 
d
e
s
c
r
i
p
t
i
o
n
 
(
 
e
.
g
.
 
'
P
e
r
s
o
n
s
'
 
)
,
 
o
r
 
y
o
u
 
c
a
n
 
c
r
e
a
t
e
 
s
e
v
e
r
a
l
 
d
i
f
f
e
r
e
n
t
 
g
u
e
s
t
 
t
y
p
e
s
,
 
f
o
r
 
e
x
a
m
p
l
e
 
'
A
d
u
l
t
s
'
 
a
n
d
 
'
C
h
i
l
d
r
e
n
 
u
n
d
e
r
 
1
0
'
.
 
F
o
r
 
t
h
e
 
c
h
i
l
d
r
e
n
,
 
i
f
 
y
o
u
 
w
a
n
t
 
t
o
 
o
f
f
e
r
 
a
 
d
i
s
c
o
u
n
t
 
o
f
 
5
0
%
 
t
h
e
n
 
y
o
u
'
d
 
s
e
t
 
'
I
s
 
p
e
r
c
e
n
t
a
g
e
'
 
t
o
 
Y
e
s
,
 
a
n
d
 
t
h
e
 
V
a
r
i
a
n
c
e
 
v
a
l
u
e
 
t
o
 
5
0
.
 
R
o
o
m
s
 
h
a
v
e
 
b
a
s
e
 
r
a
t
e
s
,
 
t
h
i
s
 
s
e
t
t
i
n
g
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
a
d
j
u
s
t
 
t
h
e
 
p
r
i
c
e
 
o
f
 
t
h
e
 
r
o
o
m
 
b
a
s
e
d
 
o
n
 
t
h
e
 
g
u
e
s
t
 
t
y
p
e
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
R
O
O
M
F
E
A
T
U
R
E
S
'
,
 
'
W
h
a
t
 
a
r
e
 
R
o
o
m
 
F
e
a
t
u
r
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
R
O
O
M
F
E
A
T
U
R
E
S
'
,
 
"
R
o
o
m
 
f
e
a
t
u
r
e
s
 
a
r
e
 
t
h
i
n
g
s
 
t
h
a
t
 
m
a
k
e
 
t
h
e
 
r
o
o
m
 
s
t
a
n
d
 
o
u
t
.
 
T
h
e
y
 
c
a
n
 
b
e
 
s
o
m
e
t
h
i
n
g
 
s
i
m
p
l
e
 
l
i
k
e
 
T
e
a
 
a
n
d
 
C
o
f
f
e
e
 
m
a
k
i
n
g
 
f
a
c
i
l
i
t
i
e
s
,
 
o
r
 
t
h
e
y
 
c
a
n
 
b
e
 
t
h
i
n
g
s
 
t
h
a
t
 
r
e
a
l
l
y
 
m
a
k
e
 
t
h
e
 
r
o
o
m
 
r
i
s
e
 
a
b
o
v
e
 
t
h
e
 
o
t
h
e
r
s
,
 
l
i
k
e
 
'
V
i
e
w
s
 
o
v
e
r
 
t
h
e
 
b
a
y
'
.
 
O
n
c
e
 
y
o
u
 
h
a
v
e
 
c
r
e
a
t
e
d
 
a
 
R
o
o
m
 
F
e
a
t
u
r
e
,
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
 
t
h
a
t
 
f
e
a
t
u
r
e
 
i
n
 
t
h
e
 
M
e
d
i
a
 
C
e
n
t
r
e
.
 
T
h
e
s
e
 
r
o
o
m
 
f
e
a
t
u
r
e
s
 
c
a
n
 
b
e
 
v
i
e
w
e
d
 
o
n
 
t
h
e
 
r
o
o
m
 
a
v
a
i
l
a
b
i
l
i
t
y
 
p
a
g
e
,
 
a
n
d
 
i
f
 
y
o
u
'
v
e
 
c
o
n
f
i
g
u
r
e
d
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
t
o
 
s
h
o
w
 
t
h
e
 
C
l
a
s
s
i
c
 
R
o
o
m
s
 
l
i
s
t
 
s
t
y
l
e
 
(
 
w
h
e
r
e
 
g
u
e
s
t
s
 
c
a
n
 
s
e
l
e
c
t
e
d
 
e
x
a
c
t
l
y
 
w
h
i
c
h
 
r
o
o
m
 
t
h
e
y
 
w
a
n
t
 
t
o
 
b
o
o
k
 
)
 
t
h
e
n
 
t
h
e
y
 
c
a
n
 
u
s
e
 
t
h
e
 
r
o
o
m
 
f
e
a
t
u
r
e
s
 
t
o
 
f
i
l
t
e
r
 
o
o
m
s
 
s
h
o
w
n
 
i
n
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
N
T
R
O
D
U
C
T
I
O
N
_
P
R
O
F
I
L
E
S
'
,
 
'
C
a
n
 
I
 
m
a
k
e
 
a
 
u
s
e
r
 
a
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
N
T
R
O
D
U
C
T
I
O
N
_
P
R
O
F
I
L
E
S
'
,
 
"
Y
e
s
 
y
o
u
 
c
a
n
,
 
t
h
r
o
u
g
h
 
t
h
e
 
P
r
o
p
e
r
t
y
 
M
a
n
a
g
e
r
s
 
p
a
g
e
 
u
n
d
e
r
 
U
s
e
r
 
M
a
n
a
g
e
m
e
n
t
.
 
I
f
 
t
h
e
 
u
s
e
r
 
i
s
 
a
l
r
e
a
d
y
 
r
e
g
i
s
t
e
r
e
d
,
 
i
n
 
t
h
e
 
i
n
p
u
t
 
a
t
 
t
h
e
 
t
o
p
 
o
f
 
t
h
e
 
P
r
o
p
e
r
t
y
 
M
a
n
a
g
e
r
s
 
p
a
g
e
 
t
y
p
e
 
t
h
e
 
f
i
r
s
t
 
f
e
w
 
c
h
a
r
a
c
t
e
r
s
 
o
f
 
t
h
e
i
r
 
u
s
e
r
n
a
m
e
 
a
n
d
 
t
h
e
i
r
 
u
s
e
r
n
a
m
e
 
w
i
l
l
 
a
p
p
e
a
r
 
u
n
d
e
r
n
e
a
t
h
.
 
C
l
i
c
k
 
o
n
 
t
h
e
i
r
 
u
s
e
r
n
a
m
e
 
a
n
d
 
y
o
u
 
w
i
l
l
 
b
e
 
t
a
k
e
n
 
t
o
 
a
 
p
a
g
e
 
w
h
e
r
e
 
y
o
u
 
c
a
n
 
c
o
n
f
i
g
u
r
e
 
w
h
i
c
h
 
p
r
o
p
e
r
t
i
e
s
 
t
h
e
y
 
h
a
v
e
 
a
c
c
e
s
s
 
t
o
.
 
I
f
 
t
h
e
y
'
r
e
 
n
o
t
 
a
l
r
e
a
d
y
 
r
e
g
i
s
t
e
r
e
d
,
 
y
o
u
'
l
l
 
f
i
r
s
t
 
n
e
e
d
 
t
o
 
u
s
e
 
y
o
u
r
 
h
o
s
t
 
C
M
S
'
s
 
u
s
e
r
 
m
a
n
a
g
e
m
e
n
t
 
p
a
g
e
s
 
t
o
 
a
d
d
 
t
h
e
m
 
a
s
 
a
 
u
s
e
r
 
t
o
 
t
h
e
 
C
M
S
.
<
b
r
/
>
<
b
r
/
>
 
A
 
w
o
r
d
 
o
f
 
a
d
v
i
c
e
 
:
 
I
f
 
y
o
u
 
i
n
t
e
n
d
 
t
o
 
c
h
a
r
g
e
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
f
o
r
 
l
i
s
t
i
n
g
 
t
h
e
i
r
 
p
r
o
p
e
r
t
i
e
s
 
o
n
 
y
o
u
r
 
s
i
t
e
,
 
e
i
t
h
e
r
 
t
h
r
o
u
g
h
 
t
a
k
i
n
g
 
c
o
m
m
i
s
s
i
o
n
 
v
i
a
 
t
h
e
 
S
t
r
i
p
e
 
g
a
t
e
w
a
y
 
o
r
 
s
u
b
s
c
r
i
p
t
i
o
n
s
/
c
o
m
m
i
s
s
i
o
n
 
f
u
n
c
t
i
o
n
a
l
i
t
y
,
 
w
e
 
d
o
n
'
t
 
r
e
c
o
m
m
e
n
d
 
t
h
a
t
 
y
o
u
 
a
d
d
 
u
s
e
r
s
 
i
n
 
t
h
i
s
 
w
a
y
.
 
I
n
 
t
h
i
s
 
i
n
s
t
a
n
c
e
,
 
o
n
l
y
 
s
u
p
e
r
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
s
h
o
u
l
d
 
b
e
 
a
d
d
e
d
 
u
s
i
n
g
 
t
h
i
s
 
p
r
o
c
e
s
s
,
 
a
n
d
 
w
h
e
n
 
t
h
e
y
 
a
r
e
 
a
d
d
e
d
 
y
o
u
 
s
h
o
u
l
d
n
'
t
 
s
e
l
e
c
t
 
a
n
y
 
p
r
o
p
e
r
t
i
e
s
 
i
n
 
t
h
e
 
l
i
s
t
 
u
n
d
e
r
n
e
a
t
h
.
 
A
l
l
 
o
t
h
e
r
 
u
s
e
r
s
 
s
h
o
u
l
d
 
b
e
 
e
n
c
o
u
r
a
g
e
d
 
t
o
 
c
r
e
a
t
e
 
p
r
o
p
e
r
t
i
e
s
 
t
h
e
m
s
e
l
v
e
s
 
i
n
 
t
h
e
 
f
r
o
n
t
e
n
d
.
 
T
h
i
s
 
w
i
l
l
 
a
d
d
 
t
h
e
m
 
a
s
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
a
n
d
 
e
n
s
u
r
e
s
 
t
h
a
t
 
t
h
e
 
c
o
r
r
e
c
t
 
u
s
e
r
 
i
s
 
b
i
l
l
e
d
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
L
U
G
I
N
S
'
,
 
'
P
l
u
g
i
n
s
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
'
,
 
'
W
h
a
t
 
i
s
 
t
h
e
 
P
l
u
g
i
n
 
M
a
n
a
g
e
r
 
f
o
r
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
'
,
 
'
T
h
e
 
P
l
u
g
i
n
 
M
a
n
a
g
e
r
 
i
s
 
a
 
k
e
y
 
t
o
o
l
 
i
n
 
J
o
m
r
e
s
.
 
I
t
 
a
l
l
o
w
s
 
u
s
 
t
o
 
d
i
s
t
r
i
b
u
t
e
 
t
h
e
 
m
o
s
t
 
u
p
-
t
o
-
d
a
t
e
 
v
e
r
s
i
o
n
 
o
f
 
J
o
m
r
e
s
 
p
l
u
g
i
n
s
 
t
o
 
y
o
u
 
t
h
r
o
u
g
h
 
a
n
 
a
u
t
o
m
a
t
i
c
 
d
o
w
n
l
o
a
d
 
a
n
d
 
i
n
s
t
a
l
l
a
t
i
o
n
 
f
e
a
t
u
r
e
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
_
I
O
N
C
U
B
E
'
,
 
'
W
h
y
 
d
o
 
I
 
s
e
e
 
a
 
w
a
r
n
i
n
g
 
a
b
o
u
t
 
I
o
n
c
u
b
e
 
L
o
a
d
e
r
s
 
w
h
e
n
 
I
 
c
l
i
c
k
 
o
n
 
t
h
e
 
P
l
u
g
i
n
 
M
a
n
a
g
e
r
 
p
a
g
e
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
_
I
O
N
C
U
B
E
'
,
 
"
Y
o
u
 
h
a
v
e
 
s
a
v
e
d
 
a
 
T
r
i
a
l
 
l
i
c
e
n
s
e
 
k
e
y
 
i
n
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
,
 
b
u
t
 
y
o
u
r
 
w
e
b
 
s
e
r
v
e
r
 
d
o
e
s
n
'
t
 
o
f
f
e
r
 
t
h
e
 
l
a
t
e
s
t
 
I
o
n
c
u
b
e
 
L
o
a
d
e
r
s
.
 
P
l
e
a
s
e
 
a
s
k
 
y
o
u
r
 
h
o
s
t
s
 
t
o
 
i
n
s
t
a
l
l
 
t
h
e
 
l
o
a
d
e
r
s
,
 
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
 
f
o
u
n
d
 
 
<
a
 
h
r
e
f
=
'
h
t
t
p
:
/
/
w
w
w
.
i
o
n
c
u
b
e
.
c
o
m
/
l
o
a
d
e
r
s
.
p
h
p
'
 
t
a
r
g
e
t
=
'
_
b
l
a
n
k
'
>
o
n
 
t
h
i
s
 
p
a
g
e
.
<
/
a
>
 
I
f
 
y
o
u
 
h
a
v
e
 
p
u
r
c
h
a
s
e
d
 
a
 
f
u
l
l
,
 
n
o
n
-
s
u
b
s
c
r
i
p
t
i
o
n
 
l
i
c
e
n
s
e
 
a
n
d
 
y
o
u
 
t
h
i
n
k
 
y
o
u
'
r
e
 
s
e
e
i
n
g
 
t
h
i
s
 
i
n
 
e
r
r
o
r
,
 
y
o
u
 
m
a
y
 
h
a
v
e
 
f
o
r
g
o
t
t
e
n
 
t
o
 
e
n
t
e
r
 
y
o
u
r
 
f
u
l
l
 
l
i
c
e
n
s
e
 
k
e
y
 
i
n
 
t
h
e
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
p
a
g
e
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
_
I
N
S
T
A
L
L
A
T
I
O
N
'
,
 
'
H
o
w
 
d
o
 
I
 
i
n
s
t
a
l
l
 
a
 
p
l
u
g
i
n
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
_
I
N
S
T
A
L
L
A
T
I
O
N
'
,
 
"
A
s
s
u
m
i
n
g
 
t
h
a
t
 
y
o
u
 
h
a
v
e
 
a
 
v
a
l
i
d
 
l
i
c
e
n
s
e
 
k
e
y
 
n
u
m
b
e
r
 
s
a
v
e
d
 
i
n
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
,
 
a
l
l
 
y
o
u
 
n
e
e
d
 
t
o
 
d
o
 
i
s
 
c
l
i
c
k
 
t
h
e
 
I
n
s
t
a
l
l
 
b
u
t
t
o
n
 
n
e
x
t
 
t
o
 
t
h
e
 
p
l
u
g
i
n
 
n
a
m
e
 
i
n
 
t
h
e
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
.
 
J
o
m
r
e
s
 
w
i
l
l
 
i
n
s
t
a
l
l
 
t
h
e
 
p
l
u
g
i
n
 
f
o
r
 
y
o
u
 
a
n
d
 
b
r
i
n
g
 
y
o
u
 
b
a
c
k
 
t
o
 
t
h
e
 
p
l
u
g
i
n
s
 
p
a
g
e
 
a
f
t
e
r
w
a
r
d
s
.
 
O
c
c
a
s
i
o
n
a
l
l
y
,
 
i
n
s
t
e
a
d
,
 
y
o
u
 
m
i
g
h
t
 
b
e
 
t
a
k
e
n
 
t
o
 
a
 
D
i
s
c
o
v
e
r
y
 
p
a
g
e
 
i
f
 
y
o
u
'
r
e
 
r
u
n
n
i
n
g
 
J
o
m
r
e
s
 
i
n
 
J
o
o
m
l
a
.
 
J
u
s
t
 
c
l
i
c
k
 
t
h
e
 
D
i
s
c
o
v
e
r
 
b
u
t
t
o
n
 
t
o
 
i
n
s
t
a
l
l
 
t
h
e
 
p
l
u
g
i
n
.
<
b
r
/
>
<
b
r
/
>
N
O
T
E
 
D
o
n
'
t
 
i
n
s
t
a
l
l
 
a
l
l
 
o
f
 
t
h
e
 
p
l
u
g
i
n
s
,
 
t
h
e
y
 
d
o
n
'
t
 
a
l
l
 
w
o
r
k
 
t
o
g
e
t
h
e
r
 
(
 
b
y
 
d
e
s
i
g
n
 
)
.
 
Y
o
u
 
c
o
u
l
d
 
e
n
d
 
u
p
 
w
i
t
h
 
b
l
a
n
k
 
p
a
g
e
s
 
i
n
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
.
 
I
n
s
t
e
a
d
,
 
i
d
e
n
t
i
f
y
 
t
h
e
 
p
l
u
g
i
n
s
 
y
o
u
 
n
e
e
d
 
a
n
d
 
e
x
p
e
r
i
m
e
n
t
 
w
i
t
h
 
e
a
c
h
 
o
n
e
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
S
I
T
E
S
T
R
U
C
T
U
R
E
'
,
 
'
S
i
t
e
 
S
t
r
u
c
t
u
r
e
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
I
N
T
R
O
'
,
 
'
W
h
a
t
 
d
o
e
s
 
S
i
t
e
 
S
t
r
u
c
t
u
r
e
 
m
e
a
n
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
I
N
T
R
O
'
,
 
"
S
i
t
e
 
S
t
r
u
c
t
u
r
e
 
i
n
 
J
o
m
r
e
s
 
r
e
f
e
r
s
 
t
o
 
t
h
e
 
v
a
r
i
o
u
s
 
e
l
e
m
e
n
t
s
 
o
f
 
y
o
u
r
 
s
i
t
e
 
t
h
a
t
 
m
a
k
e
 
i
t
 
u
n
i
q
u
e
.
 
I
t
 
d
e
f
i
n
e
s
 
t
h
e
 
P
r
o
p
e
r
t
y
 
t
y
p
e
s
 
y
o
u
 
l
i
s
t
 
f
o
r
 
(
 
e
.
g
.
 
v
i
l
l
a
s
 
o
r
 
h
o
t
e
l
s
 
)
 
a
n
d
 
t
h
e
 
r
o
o
m
/
s
u
b
 
t
y
p
e
s
 
f
o
r
 
t
h
o
s
e
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
.
 
S
o
,
 
i
f
 
y
o
u
'
r
e
 
s
e
l
l
i
n
g
 
s
e
l
f
-
c
a
t
e
r
i
n
g
 
h
o
l
i
d
a
y
s
,
 
t
h
e
n
 
y
o
u
 
w
o
u
l
d
 
b
e
 
s
e
l
l
i
n
g
 
r
e
n
t
a
l
s
 
o
f
 
s
o
m
e
t
h
i
n
g
 
l
i
k
e
 
a
 
c
h
a
l
e
t
 
o
r
 
v
i
l
l
a
.
 
D
i
f
f
e
r
e
n
t
 
c
h
a
l
e
t
s
 
c
o
u
l
d
 
h
a
v
e
 
d
i
f
f
e
r
e
n
t
 
n
u
m
b
e
r
s
 
o
f
 
r
o
o
m
s
,
 
b
a
l
c
o
n
i
e
s
 
e
t
c
.
 
I
n
 
t
h
e
 
c
a
s
e
 
o
f
 
H
o
t
e
l
s
 
o
r
 
B
&
B
s
,
 
y
o
u
'
r
e
 
s
e
l
l
i
n
g
 
r
o
o
m
s
 
<
e
m
>
i
n
<
/
e
m
>
 
t
h
e
 
p
r
o
p
e
r
t
y
,
 
a
n
d
 
t
h
e
y
'
d
 
b
e
 
d
o
u
b
l
e
 
b
e
d
r
o
o
m
s
,
 
s
i
n
g
l
e
s
 
e
t
c
.
 
T
o
 
h
e
l
p
 
c
l
a
r
i
f
y
 
t
h
i
s
,
 
a
 
d
e
f
a
u
l
t
 
i
n
s
t
a
l
l
a
t
i
o
n
 
a
l
r
e
a
d
y
 
h
a
s
 
s
e
v
e
r
a
l
 
r
o
o
m
s
 
a
n
d
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
 
c
r
e
a
t
e
d
 
f
o
r
 
y
o
u
 
t
o
 
h
e
l
p
 
y
o
u
 
u
n
d
e
r
s
t
a
n
d
.
 
I
f
 
y
o
u
 
w
a
n
t
 
t
o
 
s
e
l
l
 
T
o
u
r
s
,
 
d
o
 
n
o
t
 
t
r
y
 
t
o
 
c
r
e
a
t
e
 
a
 
n
e
w
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
w
i
t
h
o
u
t
 
r
e
a
d
i
n
g
 
t
h
e
 
s
e
c
t
i
o
n
 
o
n
 
T
o
u
r
s
 
f
i
r
s
t
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
P
R
O
P
E
R
T
Y
T
Y
P
E
S
'
,
 
'
W
h
a
t
 
a
r
e
 
P
r
o
p
e
r
t
y
 
T
y
p
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
P
R
O
P
E
R
T
Y
T
Y
P
E
S
'
,
 
'
I
n
 
t
h
i
s
 
s
y
s
t
e
m
,
 
a
 
P
r
o
p
e
r
t
y
 
t
y
p
e
 
r
e
f
e
r
s
 
t
o
,
 
l
i
t
e
r
a
l
l
y
,
 
t
h
e
 
t
y
p
e
 
o
f
 
p
r
o
p
e
r
t
y
.
 
T
h
i
s
 
c
a
n
 
b
e
 
a
 
h
o
t
e
l
,
 
a
 
v
i
l
l
a
,
 
a
n
 
a
p
a
r
t
m
e
n
t
.
 
P
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
c
a
n
n
o
t
 
c
r
e
a
t
e
 
P
r
o
p
e
r
t
y
 
t
y
p
e
s
 
b
e
c
a
u
s
e
 
P
r
o
p
e
r
t
y
 
t
y
p
e
s
 
a
r
e
 
a
n
 
i
t
e
m
 
t
h
a
t
 
c
a
n
 
b
e
 
s
e
a
r
c
h
e
d
 
b
y
 
g
u
e
s
t
s
.
 
T
o
 
e
n
s
u
r
e
 
t
h
a
t
 
y
o
u
r
 
s
e
a
r
c
h
 
f
u
n
c
t
i
o
n
a
l
i
t
y
 
s
t
a
y
s
 
n
i
c
e
 
a
n
d
 
n
e
a
t
 
a
n
d
 
t
i
d
y
,
 
o
n
l
y
 
S
i
t
e
 
a
d
m
i
n
i
s
t
r
a
t
o
r
s
 
c
a
n
 
c
r
e
a
t
e
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
'
,
 
'
W
h
a
t
 
a
r
e
 
P
r
o
p
e
r
t
y
 
F
e
a
t
u
r
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
'
,
 
"
P
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
s
 
a
r
e
 
t
h
i
n
g
s
 
t
h
a
t
 
m
a
k
e
 
a
 
p
r
o
p
e
r
t
y
 
u
n
i
q
u
e
.
 
F
o
r
 
e
x
a
m
p
l
e
,
 
o
n
e
 
P
r
o
p
e
r
t
y
 
F
e
a
t
u
r
e
 
c
o
u
l
d
 
b
e
 
t
h
a
t
 
i
t
'
s
 
'
C
l
o
s
e
 
t
o
 
t
h
e
 
b
e
a
c
h
'
 
w
h
i
l
s
t
 
a
n
o
t
h
e
r
 
h
o
t
e
l
 
c
o
u
l
d
 
h
a
v
e
 
t
h
e
 
f
e
a
t
u
r
e
 
t
h
a
t
 
i
t
'
s
 
i
n
s
i
d
e
 
a
 
n
a
t
i
o
n
a
l
 
p
a
r
k
,
 
o
f
f
e
r
s
 
b
r
i
d
l
e
w
a
y
s
,
 
s
o
m
e
t
h
i
n
g
 
l
i
k
e
 
t
h
a
t
.
 
L
i
k
e
 
P
r
o
p
e
r
t
y
 
T
y
p
e
s
,
 
m
a
n
a
g
e
r
s
 
c
a
n
n
o
t
 
c
r
e
a
t
e
 
n
e
w
 
f
e
a
t
u
r
e
s
,
 
t
h
e
y
 
c
a
n
 
o
n
l
y
 
s
e
l
e
c
t
 
f
r
o
m
 
t
h
e
 
o
n
e
s
 
y
o
u
 
c
r
e
a
t
e
.
 
P
r
o
p
e
r
t
y
 
F
e
a
t
u
r
e
s
 
c
a
n
 
h
a
v
e
 
i
m
a
g
e
s
 
a
s
s
i
g
n
e
d
 
t
o
 
t
h
e
m
.
 
F
i
r
s
t
 
y
o
u
 
n
e
e
d
 
t
o
 
u
p
l
o
a
d
 
f
e
a
t
u
r
e
 
i
m
a
g
e
s
 
t
h
r
o
u
g
h
 
t
h
e
 
S
i
t
e
 
S
t
r
u
c
u
t
r
e
 
>
 
M
e
d
i
a
 
C
e
n
t
r
e
 
>
 
P
r
o
p
e
r
t
y
 
F
e
a
t
u
r
e
 
I
c
o
n
s
 
d
r
o
p
d
o
w
n
.
 
U
p
l
o
a
d
 
a
s
 
m
a
n
y
 
f
e
a
t
u
r
e
 
i
c
o
n
s
 
a
s
 
y
o
u
 
w
a
n
t
,
 
t
h
e
n
 
w
h
e
n
 
y
o
u
 
c
r
e
a
t
e
 
a
 
P
r
o
p
e
r
t
y
 
F
e
a
t
u
r
e
 
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
 
i
t
'
s
 
i
m
a
g
e
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
C
A
T
E
G
O
R
I
E
S
'
,
 
'
W
h
a
t
 
a
r
e
 
P
r
o
p
e
r
t
y
 
F
e
a
t
u
r
e
 
C
a
t
e
g
o
r
i
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
C
A
T
E
G
O
R
I
E
S
'
,
 
"
P
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
s
 
a
r
e
 
d
i
s
p
l
a
y
e
d
 
i
n
 
t
h
e
 
P
r
o
p
e
r
t
y
 
D
e
t
a
i
l
s
 
p
a
g
e
,
 
a
m
o
n
g
 
o
t
h
e
r
s
.
 
O
n
 
t
h
e
 
P
r
o
p
e
r
t
y
 
D
e
t
a
i
l
s
 
p
a
g
e
,
 
f
e
a
t
u
r
e
s
 
c
a
n
 
b
e
 
d
i
s
p
l
a
y
e
d
 
g
r
o
u
p
e
d
 
b
y
 
c
a
t
e
g
o
r
i
e
s
,
 
f
o
r
 
e
x
a
m
p
l
e
 
'
L
i
v
i
n
g
 
A
r
e
a
'
,
 
'
A
c
c
e
s
s
i
b
i
l
i
t
y
'
 
e
t
c
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
R
O
O
M
F
E
A
T
U
R
E
S
'
,
 
'
W
h
a
t
 
a
r
e
 
R
o
o
m
 
f
e
a
t
u
r
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
R
O
O
M
F
E
A
T
U
R
E
S
'
,
 
"
P
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
t
h
a
t
 
u
s
e
 
M
i
c
r
o
m
a
n
a
g
e
 
o
r
 
A
d
v
a
n
c
e
d
 
t
a
r
i
f
f
 
e
d
i
t
i
n
g
 
m
o
d
e
 
a
r
e
 
a
b
l
e
 
t
o
 
e
d
i
t
 
t
h
e
i
r
 
r
o
o
m
s
 
d
i
r
e
c
t
l
y
.
 
T
h
e
y
'
r
e
 
a
l
s
o
 
a
b
l
e
 
t
o
 
c
r
e
a
t
e
 
t
h
i
n
g
s
 
c
a
l
l
e
d
 
R
o
o
m
 
F
e
a
t
u
r
e
s
 
w
h
i
c
h
 
a
r
e
 
d
i
s
p
l
a
y
e
d
 
i
n
 
t
h
e
 
R
o
o
m
 
a
v
a
i
l
a
b
i
l
i
t
y
 
p
a
g
e
 
f
o
r
 
e
a
c
h
 
p
r
o
p
e
r
t
y
.
 
I
f
 
t
h
e
y
 
u
s
e
 
t
h
e
 
C
l
a
s
s
i
c
 
r
o
o
m
s
 
l
i
s
t
 
d
i
s
p
l
a
y
 
i
n
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
,
 
t
h
e
n
 
g
u
e
s
t
s
 
a
r
e
 
a
b
l
e
 
t
o
 
u
s
e
 
R
o
o
m
 
f
e
a
t
u
r
e
s
 
t
o
 
f
i
l
t
e
r
 
o
u
t
 
r
o
o
m
s
 
b
e
f
o
r
e
 
s
e
l
e
c
t
i
n
g
 
o
n
e
 
o
r
 
m
o
r
e
.
 
O
n
 
t
h
e
 
S
i
t
e
 
S
t
r
u
c
t
u
r
e
 
>
 
R
o
o
m
 
f
e
a
t
u
r
e
s
 
p
a
g
e
 
S
i
t
e
 
M
a
n
a
g
e
r
s
 
a
r
e
 
a
l
s
o
 
a
b
l
e
 
t
o
 
c
r
e
a
t
e
 
r
o
o
m
 
f
e
a
t
u
r
e
s
,
 
a
n
d
 
t
h
e
s
e
 
f
e
a
t
u
r
e
s
 
c
a
n
 
b
e
 
s
e
e
n
 
i
n
 
a
l
l
 
p
r
o
p
e
r
t
y
 
b
o
o
k
i
n
g
 
f
o
r
m
s
 
w
h
e
r
e
 
t
h
e
 
p
r
o
p
e
r
t
y
 
u
s
e
s
 
t
h
e
 
C
l
a
s
s
i
c
 
R
o
o
m
s
 
l
i
s
t
.
 
B
a
s
i
c
a
l
l
y
,
 
i
t
'
s
 
a
 
G
l
o
b
a
l
 
R
o
o
m
 
f
e
a
t
u
r
e
.
 
T
h
e
s
e
 
R
o
o
m
 
F
e
a
t
u
r
e
s
 
c
a
n
 
b
e
 
c
o
n
f
i
g
u
r
e
d
 
t
o
 
o
n
l
y
 
b
e
 
s
h
o
w
n
 
t
o
 
c
e
r
t
a
i
n
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
,
 
a
n
d
 
i
m
a
g
e
s
 
f
o
r
 
t
h
e
s
e
 
r
o
o
m
 
f
e
a
t
u
r
e
s
 
c
a
n
 
b
e
 
u
p
l
o
a
d
e
d
 
t
h
r
o
u
g
h
 
t
h
e
 
S
i
t
e
 
S
t
r
u
c
t
u
r
e
 
>
 
M
e
d
i
a
 
C
e
n
t
r
e
 
p
a
g
e
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
C
O
U
N
T
R
I
E
S
'
,
 
'
W
h
y
 
i
s
 
t
h
e
r
e
 
a
 
p
a
g
e
 
t
o
 
e
d
i
t
 
c
o
u
n
t
r
i
e
s
/
r
e
g
i
o
n
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
C
O
U
N
T
R
I
E
S
'
,
 
"
Y
o
u
'
d
 
t
h
i
n
k
 
t
h
a
t
 
a
 
l
i
s
t
 
o
f
 
c
o
u
n
t
r
i
e
s
 
w
a
s
 
f
a
i
r
l
y
 
i
m
m
u
t
a
b
l
e
,
 
b
u
t
 
y
o
u
'
d
 
b
e
 
w
r
o
n
g
.
 
O
v
e
r
 
t
h
e
 
y
e
a
r
s
,
 
w
h
e
n
 
m
a
i
n
t
a
i
n
i
n
g
 
a
 
l
i
s
t
 
o
f
 
c
o
u
n
t
r
i
e
s
,
 
w
e
'
v
e
 
s
e
e
 
m
a
n
y
 
c
h
a
n
g
e
s
.
 
A
s
 
a
 
r
e
s
u
l
t
,
 
w
e
 
l
e
a
r
n
e
d
 
t
h
a
t
 
i
t
 
w
a
s
 
e
a
s
i
e
s
t
 
t
o
 
a
l
l
o
w
 
S
i
t
e
 
M
a
n
a
g
e
r
s
 
t
o
 
d
e
f
i
n
e
 
t
h
e
 
c
o
u
n
t
r
i
e
s
 
t
h
e
y
'
d
 
l
i
k
e
 
t
o
 
s
h
o
w
 
o
n
 
t
h
e
 
s
i
t
e
.
 
T
h
i
s
 
a
l
l
o
w
s
 
t
h
e
 
d
i
e
-
h
a
r
d
 
C
a
t
a
l
a
n
 
t
o
 
d
i
s
p
l
a
y
 
t
h
e
i
r
 
p
r
o
v
i
n
c
e
 
a
s
 
a
 
u
n
i
q
u
e
 
c
o
u
n
t
r
y
,
 
i
f
 
t
h
a
t
'
s
 
t
h
e
 
s
t
a
t
e
m
e
n
t
 
t
h
e
y
'
d
 
l
i
k
e
 
t
o
 
m
a
k
e
.
 
T
h
e
 
s
a
m
e
 
g
o
e
s
 
f
o
r
 
o
t
h
e
r
 
r
e
g
i
o
n
s
 
o
f
 
t
h
e
 
w
o
r
l
d
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
L
O
C
A
L
I
S
A
T
I
O
N
'
,
 
'
L
o
c
a
l
i
s
a
t
i
o
n
/
T
r
a
n
s
l
a
t
i
o
n
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
L
O
C
A
L
I
S
A
T
I
O
N
_
I
N
T
R
O
'
,
 
'
H
o
w
 
d
o
 
I
 
t
r
a
n
s
l
a
t
e
 
t
h
i
n
g
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
L
O
C
A
L
I
S
A
T
I
O
N
_
I
N
T
R
O
'
,
 
"
T
r
a
n
s
l
a
t
i
o
n
 
o
f
 
l
a
b
e
l
s
/
s
t
r
i
n
g
s
 
i
s
 
d
o
n
e
 
t
h
r
o
u
g
h
 
t
h
e
 
L
a
n
g
u
a
g
e
s
 
m
e
n
u
 
o
p
t
i
o
n
s
,
 
m
a
i
n
l
y
 
t
h
e
 
T
r
a
n
s
l
a
t
e
 
L
a
n
g
u
a
g
e
 
F
i
l
e
/
T
r
a
n
s
l
a
t
e
 
L
o
c
a
l
e
s
 
p
a
g
e
s
.
 
B
e
c
a
u
s
e
 
t
h
e
 
l
a
n
g
u
a
g
e
 
f
i
l
e
s
 
a
r
e
 
v
e
r
y
 
l
a
r
g
e
,
 
w
h
e
n
 
y
o
u
 
c
l
i
c
k
 
o
n
 
t
h
i
s
 
p
a
g
e
 
t
h
e
y
 
c
a
n
 
t
a
k
e
 
a
 
w
h
i
l
e
 
t
o
 
l
o
a
d
.
 
<
b
r
/
>
<
b
r
/
>
L
e
t
'
s
 
l
o
o
k
 
a
t
 
a
n
 
e
x
a
m
p
l
e
.
 
L
e
t
'
s
 
s
a
y
 
t
h
a
t
 
y
o
u
 
w
a
n
t
 
t
o
 
t
r
a
n
s
l
a
t
e
 
G
e
r
m
a
n
y
 
t
o
 
D
e
u
t
s
c
h
l
a
n
d
.
 
F
i
r
s
t
 
c
l
i
c
k
 
o
n
 
T
r
a
n
s
l
a
t
e
 
L
o
c
a
l
e
s
.
 
N
e
x
t
 
c
h
e
c
k
 
t
h
e
 
l
a
n
g
u
a
g
e
 
d
r
o
p
d
o
w
n
 
i
n
 
t
h
e
 
t
o
p
 
r
i
g
h
t
 
f
r
o
m
 
E
n
g
l
i
s
h
 
t
o
 
G
e
r
m
a
n
.
 
N
e
x
t
,
 
s
c
r
o
l
l
 
d
o
w
n
 
t
h
e
 
p
a
g
e
 
u
n
t
i
l
 
y
o
u
 
g
e
t
 
t
o
 
G
e
r
m
a
n
y
.
 
Y
o
u
 
c
a
n
 
s
e
e
 
i
t
 
h
a
s
 
a
 
d
o
t
t
e
d
 
u
n
d
e
r
l
i
n
e
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
 
y
o
u
 
c
a
n
 
t
r
a
n
s
l
a
t
e
 
i
t
.
 
C
l
i
c
k
 
o
n
 
t
h
e
 
w
o
r
d
,
 
y
o
u
 
w
i
l
l
 
s
e
e
 
a
 
p
o
p
u
p
 
c
o
n
t
a
i
n
i
n
g
 
t
h
e
 
w
o
r
d
 
'
G
e
r
m
a
n
y
'
.
 
C
h
a
n
g
e
 
t
h
i
s
 
t
o
 
'
D
e
u
t
s
c
h
l
a
n
d
'
 
a
n
d
 
c
l
i
c
k
 
t
h
e
 
g
r
e
e
n
 
t
i
c
k
.
 
I
f
 
y
o
u
r
 
h
o
s
t
 
C
M
S
 
i
s
 
c
o
n
f
i
g
u
r
e
d
 
t
o
 
o
f
f
e
r
 
G
e
r
m
a
n
 
l
a
n
g
u
a
g
e
 
p
a
g
e
s
 
t
o
 
s
i
t
e
 
v
i
s
i
t
o
r
s
,
 
t
h
e
n
 
t
h
e
 
w
o
r
d
 
'
G
e
r
m
a
n
y
'
 
w
i
l
l
 
n
o
w
 
b
e
 
s
h
o
w
n
 
a
s
 
'
D
e
u
t
s
c
h
l
a
n
d
'
.
 
T
h
i
s
 
c
o
n
c
e
p
t
 
a
p
p
l
i
e
s
 
t
h
r
o
u
g
h
-
o
u
t
 
J
o
m
r
e
s
.
 
<
b
r
/
>
<
b
r
/
>
O
n
 
t
h
e
 
P
r
o
p
e
r
t
y
 
M
a
n
a
g
e
r
 
p
a
g
e
s
,
 
P
r
o
p
e
r
t
y
 
M
a
n
a
g
e
r
s
 
m
i
g
h
t
 
a
l
s
o
 
s
e
e
 
a
 
L
a
b
e
l
 
E
d
i
t
i
n
g
 
M
o
d
e
 
d
r
o
p
d
o
w
n
 
a
t
 
t
h
e
 
t
o
p
 
o
f
 
t
h
e
i
r
 
p
a
g
e
s
.
 
W
h
e
n
 
t
h
i
s
 
i
s
 
s
e
t
 
t
o
 
O
n
,
 
t
h
e
n
 
t
h
e
y
 
w
i
l
l
 
a
l
s
o
 
b
e
 
a
b
l
e
 
t
o
 
m
a
k
e
 
c
h
a
n
g
e
s
 
i
n
 
t
h
e
 
f
r
o
n
t
e
n
d
,
 
h
o
w
e
v
e
r
 
t
h
o
s
e
 
c
h
a
n
g
e
s
 
w
i
l
l
 
o
n
l
y
 
a
f
f
e
c
t
 
t
h
e
i
r
 
c
u
r
r
e
n
t
l
y
 
A
c
t
i
v
e
 
p
r
o
p
e
r
t
y
,
 
s
o
 
f
o
r
 
e
x
a
m
p
l
e
 
t
h
e
y
 
c
a
n
 
e
a
s
i
l
y
 
c
h
a
n
g
e
 
t
h
e
 
w
o
r
d
 
T
a
r
i
f
f
s
 
t
o
 
P
r
i
c
e
s
 
f
o
r
 
j
u
s
t
 
o
n
e
 
p
r
o
p
e
r
t
y
 
i
f
 
t
h
a
t
'
s
 
w
h
a
t
'
s
 
r
e
q
u
i
r
e
d
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
T
O
U
R
S
'
,
 
'
T
o
u
r
s
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
I
N
T
R
O
'
,
 
'
W
h
a
t
 
a
r
e
 
t
o
u
r
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
I
N
T
R
O
'
,
 
"
T
h
i
s
 
m
a
y
 
s
o
u
n
d
 
l
i
k
e
 
a
 
s
i
l
l
y
 
q
u
e
s
t
i
o
n
,
 
b
u
t
 
i
n
 
f
a
c
t
 
i
t
'
s
 
n
o
t
.
 
O
v
e
r
 
t
h
e
 
y
e
a
r
s
 
w
e
'
v
e
 
l
e
a
r
n
e
d
 
t
h
a
t
 
d
i
f
f
e
r
e
n
t
 
c
u
l
t
u
r
e
s
 
h
a
v
e
 
d
i
f
f
e
r
e
n
t
 
p
e
r
c
e
p
t
i
o
n
s
 
o
f
 
w
h
a
t
 
a
 
'
t
o
u
r
'
 
i
s
.
 
A
s
 
a
 
r
e
s
u
l
t
,
 
e
x
p
e
c
t
a
t
i
o
n
s
 
o
f
 
s
e
l
l
i
n
g
 
t
o
u
r
s
 
v
a
r
y
 
w
i
l
d
l
y
,
 
s
o
 
b
e
f
o
r
e
 
w
e
 
d
i
s
c
u
s
s
 
t
o
u
r
s
,
 
f
i
r
s
t
 
w
e
 
w
i
l
l
 
d
e
f
i
n
e
 
w
h
a
t
 
w
e
 
t
h
i
n
k
 
o
f
 
t
o
u
r
s
 
a
s
.
 
<
b
r
/
>
 
A
 
t
o
u
r
 
i
s
 
a
 
s
i
m
p
l
e
 
j
o
u
r
n
e
y
 
o
r
 
v
i
s
i
t
 
t
o
 
v
i
e
w
 
a
n
 
a
t
t
r
a
c
t
i
o
n
 
o
r
 
m
o
n
u
m
e
n
t
.
 
A
 
s
t
a
y
 
i
n
 
a
 
h
o
t
e
l
 
i
s
 
n
o
t
 
a
 
t
o
u
r
,
 
h
o
w
e
v
e
r
 
t
o
u
r
s
 
c
a
n
 
b
e
 
p
a
r
t
i
c
i
p
a
t
e
d
 
i
n
 
w
h
i
l
e
 
s
t
a
y
i
n
g
 
a
t
 
a
 
h
o
t
e
l
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
H
O
W
T
O
S
E
L
L
'
,
 
'
H
o
w
 
d
o
 
I
 
u
s
e
 
J
o
m
r
e
s
 
t
o
 
s
e
l
l
 
t
o
u
r
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
H
O
W
T
O
S
E
L
L
'
,
 
'
T
o
 
a
d
d
r
e
s
s
 
t
h
e
 
q
u
e
s
t
i
o
n
 
o
f
 
s
e
l
l
i
n
g
 
t
o
u
r
s
 
i
n
 
J
o
m
r
e
s
,
 
y
o
u
 
w
i
l
l
 
f
i
r
s
t
 
n
e
e
d
 
t
o
 
i
n
s
t
a
l
l
 
t
h
e
 
J
i
n
t
o
u
r
 
p
l
u
g
i
n
.
 
T
h
i
s
 
p
l
u
g
i
n
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
c
r
e
a
t
e
 
t
o
u
r
s
 
t
h
a
t
 
a
r
e
 
s
o
l
d
 
a
s
 
p
a
r
t
 
o
f
 
v
a
c
a
t
i
o
n
 
r
e
n
t
a
l
s
.
 
I
t
 
a
l
s
o
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
c
r
e
a
t
e
 
p
r
o
p
e
r
t
i
e
s
 
t
h
a
t
 
a
r
e
 
e
x
c
l
u
s
i
v
e
l
y
 
f
o
r
 
s
e
l
l
i
n
g
 
t
o
u
r
s
.
 
O
n
c
e
 
t
h
i
s
 
p
l
u
g
i
n
 
h
a
s
 
b
e
e
n
 
i
n
s
t
a
l
l
e
d
,
 
t
h
e
n
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
c
r
e
a
t
e
 
T
o
u
r
s
 
a
n
d
 
T
o
u
r
 
p
r
o
p
e
r
t
i
e
s
 
i
n
 
t
h
e
 
f
r
o
n
t
e
n
d
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
W
H
A
T
I
S
J
I
N
T
O
U
R
'
,
 
'
W
h
a
t
 
i
s
 
t
h
e
 
J
i
n
t
o
u
r
 
p
l
u
g
i
n
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
W
H
A
T
I
S
J
I
N
T
O
U
R
'
,
 
'
J
i
n
t
o
u
r
 
s
t
a
n
d
s
 
f
o
r
 
J
o
m
r
e
s
 
I
N
t
e
g
r
a
t
e
d
 
T
O
U
R
s
.
 
I
t
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
c
r
e
a
t
e
 
s
i
m
p
l
e
,
 
l
i
m
i
t
e
d
 
r
e
s
o
u
r
c
e
s
 
t
h
a
t
 
c
a
n
 
b
e
 
b
o
o
k
e
d
 
o
u
t
,
 
t
h
a
t
 
a
r
e
 
n
o
t
 
r
o
o
m
s
 
i
n
 
a
 
p
r
o
p
e
r
t
y
.
 
W
h
i
l
s
t
 
t
h
e
 
p
l
u
g
i
n
 
i
s
 
d
e
s
i
g
n
e
d
 
t
o
 
a
l
l
o
w
 
b
o
o
k
i
n
g
s
 
o
f
 
t
o
u
r
s
 
p
r
i
m
a
r
i
l
y
,
 
t
h
e
y
 
c
a
n
 
b
e
 
u
s
e
d
 
f
o
r
 
m
a
n
y
 
t
h
i
n
g
s
,
 
n
o
t
 
j
u
s
t
 
t
o
u
r
s
.
 
T
h
e
y
 
c
a
n
 
b
e
 
u
s
e
d
,
 
f
o
r
 
e
x
a
m
p
l
e
,
 
b
y
 
a
 
s
k
i
 
l
o
d
g
e
 
t
h
a
t
 
w
a
n
t
s
 
t
o
 
r
e
n
t
 
o
u
t
 
s
k
i
s
 
a
n
d
 
g
e
a
r
.
 
A
s
 
t
h
i
s
 
e
q
u
i
p
m
e
n
t
 
w
i
l
l
 
h
a
v
e
 
l
i
m
i
t
e
d
 
a
v
a
i
l
a
b
i
l
i
t
y
,
 
y
o
u
 
c
a
n
 
u
s
e
 
t
h
e
 
J
i
n
t
o
u
r
 
p
l
u
g
i
n
 
t
o
 
a
l
l
o
w
 
g
u
e
s
t
s
 
t
o
 
r
e
s
e
r
v
e
 
a
n
d
 
p
a
y
 
f
o
r
 
t
h
i
s
 
g
e
a
r
 
a
t
 
b
o
o
k
i
n
g
 
t
i
m
e
.
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
S
A
M
E
B
O
O
K
I
N
G
'
,
 
'
H
o
w
 
d
o
 
I
 
s
e
l
l
 
t
o
u
r
s
 
a
n
d
 
v
a
c
a
t
i
o
n
 
r
e
n
t
a
l
s
 
i
n
 
t
h
e
 
s
a
m
e
 
b
o
o
k
i
n
g
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
S
A
M
E
B
O
O
K
I
N
G
'
,
 
"
I
n
 
t
h
i
s
 
s
c
e
n
a
r
i
o
,
 
y
o
u
'
v
e
 
g
o
t
 
a
 
h
o
t
e
l
,
 
a
n
d
 
y
o
u
 
w
a
n
t
 
t
o
 
s
e
l
l
 
t
o
u
r
s
 
t
o
 
a
 
l
o
c
a
l
 
a
t
t
r
a
c
t
i
o
n
.
 
L
o
g
 
i
n
t
o
 
t
h
e
 
f
r
o
n
t
e
n
d
 
a
n
d
 
g
o
 
t
o
 
t
h
e
 
h
o
t
e
l
 
y
o
u
'
v
e
 
c
r
e
a
t
e
d
.
 
N
e
x
t
,
 
c
l
i
c
k
 
o
n
 
S
e
t
t
i
n
g
s
 
>
 
T
o
u
r
/
A
c
t
i
v
i
t
y
 
m
a
n
a
g
e
m
e
n
t
.
 
O
n
 
t
h
i
s
 
p
a
g
e
,
 
f
o
l
l
o
w
 
t
h
e
 
o
n
s
c
r
e
e
n
 
i
n
s
t
r
u
c
t
i
o
n
s
 
t
o
 
f
i
r
s
t
 
c
r
e
a
t
e
 
a
 
t
o
u
r
 
p
r
o
f
i
l
e
,
 
t
h
e
n
 
g
e
n
e
r
a
t
e
 
t
o
u
r
s
.
 
O
n
c
e
 
t
h
a
t
'
s
 
d
o
n
e
,
 
y
o
u
'
l
l
 
b
e
 
a
b
l
e
 
t
o
 
s
e
l
l
 
b
o
t
h
 
t
o
u
r
s
 
a
n
d
 
r
o
o
m
 
b
o
o
k
i
n
g
s
 
a
n
d
 
o
p
t
i
o
n
a
l
 
e
x
t
r
a
s
 
a
l
o
n
g
s
i
d
e
 
e
a
c
h
 
o
t
h
e
r
 
i
n
 
t
h
e
 
s
a
m
e
 
b
o
o
k
i
n
g
 
f
o
r
m
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
S
T
A
N
D
A
L
O
N
E
T
O
U
R
S
'
,
 
'
W
h
a
t
 
a
b
o
u
t
 
i
f
 
I
 
o
n
l
y
 
w
a
n
t
 
t
o
 
s
e
l
l
 
t
o
u
r
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
S
T
A
N
D
A
L
O
N
E
T
O
U
R
S
'
,
 
"
F
i
r
s
t
 
y
o
u
 
w
i
l
l
 
n
e
e
d
 
t
o
 
c
r
e
a
t
e
 
a
 
n
e
w
 
p
r
o
p
e
r
t
y
 
i
n
 
t
h
e
 
f
r
o
n
t
e
n
d
.
 
W
h
e
n
 
y
o
u
 
d
o
,
 
e
n
s
u
r
e
 
t
h
a
t
 
y
o
u
 
s
e
t
 
t
h
e
 
'
P
r
o
p
e
r
t
y
 
t
y
p
e
'
 
t
o
 
T
o
u
r
.
 
W
h
e
n
 
y
o
u
'
v
e
 
c
r
e
a
t
e
d
 
t
h
i
s
 
n
e
w
 
p
r
o
p
e
r
t
y
,
 
t
h
e
n
 
y
o
u
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
c
r
e
a
t
e
 
t
o
u
r
s
 
a
g
a
i
n
 
t
h
r
o
u
g
h
 
t
h
e
 
S
e
t
t
i
n
g
s
 
>
 
T
o
u
r
/
A
c
t
i
v
i
t
y
 
m
a
n
a
g
e
m
e
n
t
 
p
a
g
e
.
 
Y
o
u
 
w
i
l
l
 
a
l
s
o
 
b
e
 
a
b
l
e
 
t
o
 
o
f
f
e
r
 
o
p
t
i
o
n
a
l
 
e
x
t
r
a
s
 
a
s
 
i
n
 
n
o
r
m
a
l
 
p
r
o
p
e
r
t
i
e
s
,
 
t
h
e
 
o
n
l
y
 
t
h
i
n
g
 
y
o
u
 
w
o
n
'
t
 
b
e
 
a
b
l
e
 
t
o
 
d
o
 
i
s
 
c
o
n
f
i
g
u
r
e
 
r
o
o
m
s
,
 
r
o
o
m
 
f
e
a
t
u
r
e
s
 
o
r
 
t
a
r
i
f
f
s
 
a
s
 
y
o
u
'
r
e
 
n
o
t
 
s
e
l
l
i
n
g
 
r
o
o
m
s
 
i
n
 
t
h
i
s
 
p
r
o
p
e
r
t
y
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
G
L
O
B
A
L
T
O
U
R
S
'
,
 
'
H
o
w
 
c
a
n
 
I
 
c
r
e
a
t
e
 
a
 
T
o
u
r
/
b
o
o
k
a
b
l
e
 
r
e
s
o
u
r
c
e
 
t
h
a
t
 
c
a
n
 
b
e
 
s
e
e
n
 
i
n
 
a
l
l
 
p
r
o
p
e
r
t
i
e
s
 
b
o
o
k
i
n
g
 
f
o
r
m
s
?
'
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
G
L
O
B
A
L
T
O
U
R
S
'
,
 
"
I
n
 
t
h
e
 
a
d
m
i
n
i
s
t
r
a
t
o
r
 
a
r
e
a
 
o
f
 
y
o
u
r
 
s
i
t
e
,
 
v
i
s
i
t
 
t
h
e
 
P
o
r
t
a
l
 
>
 
F
u
n
c
t
i
o
n
a
l
i
t
y
 
T
o
u
r
/
A
c
t
i
v
i
t
y
 
M
a
n
a
g
e
n
e
n
t
 
p
a
g
e
.
 
T
h
e
 
t
o
u
r
 
p
r
o
f
i
l
e
/
g
e
n
e
r
a
t
i
o
n
 
p
r
o
c
e
s
s
 
i
s
 
t
h
e
 
s
a
m
e
 
a
s
 
u
s
e
d
 
i
n
 
t
h
e
 
f
r
o
n
t
e
n
d
,
 
h
o
w
e
v
e
r
 
a
n
y
 
t
o
u
r
s
 
g
e
n
e
r
a
t
e
d
 
h
e
r
e
 
a
r
e
 
s
e
e
n
 
i
n
 
t
h
e
 
f
r
o
n
t
e
n
d
.
 
O
n
e
 
t
y
p
i
c
a
l
 
s
c
e
n
a
r
i
o
 
w
h
e
r
e
 
t
h
i
s
 
m
a
y
 
b
e
 
u
s
e
d
 
i
s
 
i
f
 
t
h
e
 
s
i
t
e
 
a
d
m
i
n
i
s
t
r
a
t
o
r
 
i
s
 
o
r
g
a
n
i
s
i
n
g
 
e
v
e
n
t
s
 
a
r
o
u
n
d
 
t
h
e
 
c
o
u
n
t
r
y
,
 
a
n
d
 
t
h
e
y
 
w
a
n
t
 
t
o
 
s
e
l
l
 
h
o
t
e
l
 
b
o
o
k
i
n
g
s
.
 
T
h
e
y
 
w
o
u
l
d
 
c
r
e
a
t
e
 
t
h
e
 
p
a
r
t
i
c
i
p
a
t
i
n
g
 
h
o
t
e
l
s
 
i
n
 
t
h
e
 
f
r
o
n
t
e
n
d
 
a
s
 
n
o
r
m
a
l
,
 
s
e
t
t
i
n
g
 
r
o
o
m
 
p
r
i
c
e
s
 
e
t
c
,
 
t
h
e
n
 
t
h
e
 
'
t
o
u
r
s
'
 
i
n
 
t
h
i
s
 
c
a
s
e
 
w
o
u
l
d
 
a
c
t
u
a
l
l
y
 
b
e
 
t
h
e
 
a
t
t
e
n
d
a
n
c
e
 
f
e
e
 
f
o
r
 
t
h
e
 
e
v
e
n
t
 
i
t
s
e
l
f
.
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
N
T
R
O
D
U
C
T
I
O
N
_
F
I
R
S
T
T
H
I
N
G
S
F
I
R
S
T
'
,
 
"
O
k
,
 
I
'
v
e
 
i
n
s
t
a
l
l
e
d
 
J
o
m
r
e
s
,
 
w
h
a
t
 
n
e
x
t
?
"
)
;

j
r
_
d
e
f
i
n
e
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
N
T
R
O
D
U
C
T
I
O
N
_
F
I
R
S
T
T
H
I
N
G
S
F
I
R
S
T
'
,
 
"
T
h
e
 
v
e
r
y
,
 
v
e
r
y
 
f
i
r
s
t
 
t
h
i
n
g
 
y
o
u
 
s
h
o
u
l
d
 
d
o
,
 
n
o
w
 
t
h
a
t
 
y
o
u
'
v
e
 
i
n
s
t
a
l
l
e
d
 
J
o
m
r
e
s
 
i
s
 
c
l
i
c
k
 
H
e
l
p
 
o
n
 
t
h
e
 
m
e
n
u
 
t
o
 
t
h
e
 
l
e
f
t
,
 
t
h
e
n
 
c
l
i
c
k
 
G
e
t
t
i
n
g
 
S
t
a
r
t
e
d
.
 
S
e
r
i
o
u
s
l
y
,
 
g
o
 
a
w
a
y
 
a
n
d
 
d
o
 
t
h
a
t
 
n
o
w
.
"
)
;

j
r
_
d
e
f
i
n
e
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
M
A
N
A
G
E
_
P
R
O
P
E
R
T
I
E
S
'
,
 
'
M
a
n
a
g
e
 
P
r
o
p
e
r
t
i
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
I
P
I
N
F
O
D
B
_
K
E
Y
_
W
A
R
N
I
N
G
'
,
 
"
Y
o
u
 
d
o
 
n
o
t
 
h
a
v
e
 
a
 
I
P
 
D
e
t
e
c
t
i
o
n
 
A
P
I
 
K
e
y
 
s
e
t
.
 
T
h
i
s
 
i
s
 
r
e
q
u
i
r
e
d
 
t
o
 
a
l
l
o
w
 
t
h
e
 
s
y
s
t
e
m
 
t
o
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
d
e
t
e
c
t
 
t
h
e
 
u
s
e
r
'
s
 
l
o
c
a
t
i
o
n
 
a
n
d
 
s
e
t
 
t
h
e
i
r
 
c
u
r
r
e
n
c
y
 
a
n
d
 
c
o
u
n
t
r
y
 
a
u
t
o
m
a
t
i
c
a
l
l
y
.
 
P
l
e
a
s
e
 
<
a
 
h
r
e
f
=
'
h
t
t
p
:
/
/
w
w
w
.
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
/
m
a
n
u
a
l
/
s
i
t
e
-
m
a
n
a
g
e
r
s
-
g
u
i
d
e
/
3
5
-
c
o
n
t
r
o
l
-
p
a
n
e
l
/
m
a
i
n
/
s
i
t
e
-
c
o
n
f
i
g
u
r
a
t
i
o
n
/
1
2
8
-
s
i
t
e
-
c
o
n
f
i
g
u
r
a
t
i
o
n
-
c
u
r
r
e
n
c
y
-
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
c
u
r
r
e
n
c
y
-
c
o
d
e
s
-
t
a
b
'
 
t
a
r
g
e
t
=
'
_
b
l
a
n
k
'
>
s
e
e
 
o
u
r
 
m
a
n
u
a
l
 
p
a
g
e
 
o
n
 
h
o
w
 
t
o
 
c
r
e
a
t
e
 
a
n
 
I
P
 
d
e
t
e
c
t
i
o
n
 
A
P
I
 
k
e
y
<
/
a
>
 
a
n
d
 
s
a
v
e
 
t
h
e
 
k
e
y
 
i
n
 
J
o
m
r
e
s
 
>
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
>
 
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
n
v
e
r
s
i
o
n
s
 
/
 
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
s
.
"
)
;

j
r
_
d
e
f
i
n
e
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
C
O
N
F
I
G
_
O
P
E
N
E
X
C
H
A
N
G
E
R
A
T
E
S
_
K
E
Y
_
W
A
R
N
I
N
G
'
,
 
"
Y
o
u
 
d
o
 
n
o
t
 
h
a
v
e
 
a
n
 
O
p
e
n
 
E
x
c
h
a
n
g
e
 
R
a
t
e
s
 
A
P
I
 
K
e
y
 
s
e
t
.
 
T
h
i
s
 
i
s
 
r
e
q
u
i
r
e
d
 
t
o
 
a
l
l
o
w
 
t
h
e
 
s
y
s
t
e
m
 
t
o
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
d
o
w
n
l
o
a
d
 
a
n
d
 
u
s
e
 
c
u
r
r
e
n
c
y
 
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
.
 
P
l
e
a
s
e
 
<
a
 
h
r
e
f
=
'
h
t
t
p
:
/
/
w
w
w
.
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
/
m
a
n
u
a
l
/
s
i
t
e
-
m
a
n
a
g
e
r
s
-
g
u
i
d
e
/
3
5
-
c
o
n
t
r
o
l
-
p
a
n
e
l
/
m
a
i
n
/
s
i
t
e
-
c
o
n
f
i
g
u
r
a
t
i
o
n
/
1
2
8
-
s
i
t
e
-
c
o
n
f
i
g
u
r
a
t
i
o
n
-
c
u
r
r
e
n
c
y
-
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
c
u
r
r
e
n
c
y
-
c
o
d
e
s
-
t
a
b
'
 
t
a
r
g
e
t
=
'
_
b
l
a
n
k
'
>
s
e
e
 
o
u
r
 
m
a
n
u
a
l
 
p
a
g
e
 
o
n
 
h
o
w
 
t
o
 
c
r
e
a
t
e
 
a
n
 
I
P
 
d
e
t
e
c
t
i
o
n
 
A
P
I
 
k
e
y
<
/
a
>
 
a
n
d
 
s
a
v
e
 
t
h
e
 
k
e
y
 
i
n
 
J
o
m
r
e
s
 
>
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
>
 
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
n
v
e
r
s
i
o
n
s
 
/
 
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
s
.
"
)
;

j
r
_
d
e
f
i
n
e
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
P
E
R
M
I
T
_
N
U
M
B
E
R
_
T
I
T
L
E
'
,
 
'
P
e
r
m
i
t
 
n
u
m
b
e
r
'
)
;

j
r
_
d
e
f
i
n
e
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
P
E
R
M
I
T
_
N
U
M
B
E
R
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
S
o
m
e
 
c
o
u
n
t
r
i
e
s
 
l
e
g
i
s
l
a
t
e
 
t
h
a
t
 
y
o
u
 
m
u
s
t
 
d
i
s
p
l
a
y
 
a
 
p
e
r
m
i
t
 
n
u
m
b
e
r
 
f
o
r
 
y
o
u
r
 
p
r
o
p
e
r
t
y
.
 
I
f
 
y
o
u
 
h
a
v
e
 
s
u
c
h
 
a
 
n
u
m
b
e
r
,
 
e
n
t
e
r
 
i
t
 
h
e
r
e
 
a
n
d
 
i
t
 
w
i
l
l
 
b
e
 
a
d
d
e
d
 
t
o
 
t
h
e
 
p
r
o
p
e
r
t
y
 
h
e
a
d
e
r
 
s
e
c
t
i
o
n
.
'
)
;

j
r
_
d
e
f
i
n
e
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
S
H
O
R
T
C
O
D
E
S
'
,
 
'
S
h
o
r
t
c
o
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
S
H
O
R
T
C
O
D
E
S
_
I
N
F
O
_
J
O
O
M
L
A
'
,
 
"
T
h
e
 
<
s
t
r
o
n
g
>
p
l
g
_
c
o
n
t
e
n
t
_
j
o
m
r
e
s
_
a
s
a
m
o
d
u
l
e
_
m
a
m
b
o
t
<
/
s
t
r
o
n
g
>
 
p
l
u
g
i
n
 
M
U
S
T
 
b
e
 
i
n
s
t
a
l
l
e
d
 
a
n
d
 
e
n
a
b
l
e
d
 
f
o
r
 
t
h
e
s
e
 
s
h
o
r
t
c
o
d
e
s
 
t
o
 
w
o
r
k
.
 
T
h
i
s
 
c
a
n
 
b
e
 
f
o
u
n
d
 
i
n
 
t
h
e
 
J
o
m
r
e
s
 
P
l
u
g
i
n
 
M
a
n
a
g
e
r
.
 
I
f
 
t
h
i
s
 
s
i
t
e
 
w
a
s
 
b
u
i
l
t
 
u
s
i
n
g
 
o
n
e
 
o
f
 
t
h
e
 
Q
u
i
c
k
s
t
a
r
t
s
 
t
h
e
n
 
i
t
'
s
 
p
r
o
b
a
b
l
y
 
a
l
r
e
a
d
y
 
i
n
s
t
a
l
l
e
d
.
"
)
;

j
r
_
d
e
f
i
n
e
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
S
H
O
R
T
C
O
D
E
S
_
I
N
F
O
_
W
O
R
D
P
R
E
S
S
'
,
 
"
Y
o
u
 
m
u
s
t
 
e
n
s
u
r
e
 
t
h
a
t
 
t
h
e
 
<
s
t
r
o
n
g
>
'
J
o
m
r
e
s
 
S
h
o
r
t
c
o
d
e
s
'
<
/
s
t
r
o
n
g
>
 
p
l
u
g
i
n
 
i
s
 
e
n
a
b
l
e
d
.
 
T
h
i
s
 
c
a
n
 
b
e
 
f
o
u
n
d
 
i
n
 
t
h
e
 
J
o
m
r
e
s
 
P
l
u
g
i
n
 
M
a
n
a
g
e
r
.
 
I
f
 
t
h
i
s
 
s
i
t
e
 
w
a
s
 
b
u
i
l
t
 
u
s
i
n
g
 
o
n
e
 
o
f
 
t
h
e
 
Q
u
i
c
k
s
t
a
r
t
s
 
t
h
e
n
 
i
t
'
s
 
p
r
o
b
a
b
l
y
 
a
l
r
e
a
d
y
 
i
n
s
t
a
l
l
e
d
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
S
H
O
R
T
C
O
D
E
_
T
A
S
K
'
,
 
'
T
a
s
k
'
)
;

j
r
_
d
e
f
i
n
e
(
'
S
H
O
R
T
C
O
D
E
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
D
e
s
c
r
i
p
t
i
o
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
S
H
O
R
T
C
O
D
E
_
A
R
G
U
M
E
N
T
S
'
,
 
'
A
r
g
u
m
e
n
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
S
H
O
R
T
C
O
D
E
_
E
X
A
M
P
L
E
'
,
 
'
E
x
a
m
p
l
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
'
,
 
'
F
i
l
e
s
y
s
t
e
m
 
I
n
t
e
g
r
i
t
y
 
C
h
e
c
k
'
)
;

j
r
_
d
e
f
i
n
e
(
'
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
D
E
S
C
'
,
 
'
T
h
i
s
 
f
e
a
t
u
r
e
 
a
l
l
o
w
s
 
y
o
u
 
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
 
t
h
e
 
f
i
l
e
s
y
s
t
e
m
 
m
a
t
c
h
e
s
 
t
h
a
t
 
s
u
p
p
l
i
e
d
 
i
n
 
t
h
e
 
c
u
r
r
e
n
t
 
v
e
r
s
i
o
n
 
o
f
 
J
o
m
r
e
s
.
 
T
h
i
s
 
i
s
 
u
s
e
f
u
l
 
i
n
 
e
n
s
u
r
i
n
g
 
t
h
a
t
 
a
l
l
 
f
i
l
e
s
 
w
e
r
e
 
u
p
d
a
t
e
d
 
c
o
r
r
e
c
t
l
y
 
a
f
t
e
r
 
i
n
s
t
a
l
l
a
t
i
o
n
/
u
p
g
r
a
d
e
.
 
F
i
l
e
s
 
i
n
 
R
e
d
 
a
r
e
 
m
i
s
s
i
n
g
,
 
f
i
l
e
s
 
i
n
 
O
r
a
n
g
e
 
e
x
i
s
t
 
b
u
t
 
a
r
e
 
d
i
f
f
e
r
e
n
t
 
f
r
o
m
 
t
h
o
s
e
 
s
u
p
p
l
i
e
d
 
i
n
 
t
h
e
 
c
u
r
r
e
n
t
 
b
u
i
l
d
.
 
O
n
l
y
 
f
i
i
l
e
s
 
t
h
a
t
 
a
r
e
 
p
o
t
e
n
t
i
a
l
 
p
r
o
b
l
e
m
s
 
w
i
l
l
 
b
e
 
l
i
s
t
e
d
 
h
e
r
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
F
I
L
E
N
A
M
E
'
,
 
'
F
i
l
e
s
y
s
t
e
m
 
I
n
t
e
g
r
i
t
y
 
C
h
e
c
k
'
)
;

j
r
_
d
e
f
i
n
e
(
'
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
L
O
C
A
L
H
A
S
H
'
,
 
'
L
o
c
a
l
 
h
a
s
h
'
)
;

j
r
_
d
e
f
i
n
e
(
'
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
B
U
I
L
D
H
A
S
H
'
,
 
'
V
e
r
s
i
o
n
 
h
a
s
h
'
)
;

j
r
_
d
e
f
i
n
e
(
'
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
N
O
P
R
O
B
L
E
M
S
'
,
 
'
A
w
e
s
o
m
e
!
 
N
o
 
p
r
o
b
l
e
m
s
 
w
e
r
e
 
f
o
u
n
d
.
'
)
;

j
r
_
d
e
f
i
n
e
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
P
R
O
P
E
R
T
Y
T
Y
P
E
_
M
A
R
K
E
R
'
,
 
'
G
o
o
g
l
e
 
m
a
p
s
 
m
a
r
k
e
r
'
)
;

j
r
_
d
e
f
i
n
e
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
J
A
V
A
S
C
R
I
P
T
_
R
E
A
D
M
O
R
E
'
,
 
'
R
e
a
d
 
m
o
r
e
'
)
;

j
r
_
d
e
f
i
n
e
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
J
A
V
A
S
C
R
I
P
T
_
R
E
A
D
L
E
S
S
'
,
 
'
R
e
a
d
 
l
e
s
s
'
)
;

j
r
_
d
e
f
i
n
e
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
T
O
U
R
I
S
T
_
T
A
X
_
T
I
T
L
E
'
,
 
'
T
o
u
r
i
s
t
 
t
a
x
'
)
;

j
r
_
d
e
f
i
n
e
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
T
O
U
R
I
S
T
_
T
A
X
_
T
A
X
R
A
T
E
'
,
 
'
T
o
u
r
i
s
t
 
t
a
x
 
r
a
t
e
'
)
;

j
r
_
d
e
f
i
n
e
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
T
O
U
R
I
S
T
_
T
A
X
_
T
A
X
R
A
T
E
_
D
E
S
C
'
,
 
'
S
e
t
 
t
h
e
 
t
o
u
r
i
s
t
 
t
a
x
 
r
a
t
e
.
 
T
h
e
 
t
o
u
r
i
s
t
 
t
a
x
 
i
s
 
o
n
l
y
 
c
a
l
c
u
l
a
t
e
d
 
a
f
t
e
r
 
t
h
e
 
i
n
i
t
i
a
l
 
b
o
o
k
i
n
g
 
i
s
 
g
e
n
e
r
a
t
e
d
,
 
a
n
d
 
i
s
 
a
d
d
e
d
 
t
o
 
t
h
e
 
b
o
o
k
i
n
g
 
c
o
n
f
i
r
m
a
t
i
o
n
 
p
a
g
e
,
 
i
n
 
t
h
e
 
e
x
t
r
a
 
s
e
r
v
i
c
e
s
 
b
o
x
.
'
)
;

j
r
_
d
e
f
i
n
e
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
T
O
U
R
I
S
T
_
T
A
X
_
P
E
R
C
E
N
T
A
G
E
_
Y
E
S
N
O
'
,
 
'
I
s
 
p
e
r
c
e
n
t
a
g
e
?
'
)
;

j
r
_
d
e
f
i
n
e
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
T
O
U
R
I
S
T
_
T
A
X
_
P
E
R
C
E
N
T
A
G
E
_
Y
E
S
N
O
_
D
E
S
C
'
,
 
"
S
e
t
 
t
h
i
s
 
t
o
 
Y
e
s
 
i
f
 
t
h
e
 
t
a
x
 
i
s
 
a
 
p
e
r
c
e
n
t
a
g
e
 
o
r
 
N
o
 
i
f
 
i
t
'
s
 
a
 
f
l
a
t
 
f
e
e
.
"
)
;

j
r
_
d
e
f
i
n
e
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
T
O
U
R
I
S
T
_
T
A
X
_
W
H
O
L
E
B
O
O
K
I
N
G
_
Y
E
S
N
O
'
,
 
'
A
f
f
e
c
t
s
 
t
h
e
 
e
n
t
i
r
e
 
b
o
o
k
i
n
g
 
v
a
l
u
e
?
'
)
;

j
r
_
d
e
f
i
n
e
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
T
O
U
R
I
S
T
_
T
A
X
_
W
H
O
L
E
B
O
O
K
I
N
G
_
Y
E
S
N
O
_
D
E
S
C
'
,
 
"
S
e
t
 
t
h
i
s
 
t
o
 
Y
e
s
 
i
f
 
t
h
e
 
t
a
x
 
i
s
 
t
o
 
c
o
v
e
r
 
t
h
e
 
e
n
t
i
r
e
 
v
a
l
u
e
 
o
f
 
t
h
e
 
b
o
o
k
i
n
g
,
 
s
o
 
i
t
 
i
s
 
a
 
p
e
r
c
e
n
t
a
g
e
 
o
f
 
b
o
t
h
 
t
h
e
 
a
c
c
o
m
m
o
d
a
t
i
o
n
 
p
l
u
s
 
a
n
y
 
e
x
t
r
a
s
,
 
o
r
 
N
o
 
i
f
 
i
t
 
i
s
 
o
n
l
y
 
c
a
l
c
u
l
a
t
e
d
 
b
a
s
e
d
 
o
n
l
y
 
o
n
 
t
h
e
 
v
a
l
u
e
 
o
f
 
t
h
e
 
a
c
c
o
m
m
o
d
a
t
i
o
n
 
t
o
t
a
l
.
 
I
f
 
t
h
e
 
o
p
t
i
o
n
 
'
I
s
 
P
e
r
c
e
n
t
a
g
e
'
 
a
b
o
v
e
 
i
s
 
s
e
t
 
t
o
 
N
o
,
 
t
h
e
n
 
t
h
i
s
 
o
p
t
i
o
n
 
i
s
 
i
g
n
o
r
e
d
.
"
)
;

j
r
_
d
e
f
i
n
e
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
T
O
U
R
I
S
T
_
T
A
X
_
N
O
T
E
'
,
 
'
P
l
e
a
s
e
 
b
e
 
a
w
a
r
e
 
t
h
a
t
 
a
 
t
o
u
r
i
s
t
 
t
a
x
 
w
i
l
l
 
b
e
 
a
d
d
e
d
 
t
o
 
t
h
i
s
 
b
o
o
k
i
n
g
.
 
Y
o
u
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
s
e
e
 
t
h
e
 
t
a
x
 
o
n
 
t
h
e
 
r
e
v
i
e
w
 
b
o
o
k
i
n
g
 
p
a
g
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
N
O
_
L
I
C
E
N
S
E
_
M
E
S
S
A
G
E
'
,
 
"
Y
o
u
 
h
a
v
e
 
n
o
t
 
s
a
v
e
d
 
a
 
l
i
c
e
n
s
e
 
n
u
m
b
e
r
 
i
n
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
,
 
t
h
e
r
e
f
o
r
e
 
y
o
u
 
w
i
l
l
 
n
o
t
 
b
e
 
a
b
l
e
 
t
o
 
d
o
w
n
l
o
a
d
 
p
l
u
g
i
n
s
.
 
O
n
c
e
 
y
o
u
 
h
a
v
e
 
a
 
v
a
l
i
d
 
l
i
c
e
n
s
e
 
k
e
y
 
s
a
v
e
d
 
t
h
e
n
 
y
o
u
'
l
l
 
b
e
 
a
b
l
e
 
t
o
 
i
n
s
t
a
l
l
 
a
n
y
 
p
l
u
g
i
n
s
 
t
h
a
t
 
a
r
e
 
l
i
s
t
e
d
 
a
s
 
C
o
r
e
 
p
l
u
g
i
n
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
I
N
V
A
L
I
D
_
L
I
C
E
N
S
E
_
M
E
S
S
A
G
E
'
,
 
"
Y
o
u
 
s
e
e
m
 
t
o
 
b
e
 
u
s
i
n
g
 
a
 
l
i
c
e
n
s
e
 
n
u
m
b
e
r
 
t
h
a
t
'
s
 
i
n
v
a
l
i
d
 
o
r
 
h
a
s
 
e
x
p
i
r
e
d
.
 
O
n
c
e
 
y
o
u
 
h
a
v
e
 
a
 
v
a
l
i
d
 
l
i
c
e
n
s
e
 
k
e
y
 
s
a
v
e
d
 
t
h
e
n
 
y
o
u
'
l
l
 
b
e
 
a
b
l
e
 
t
o
 
i
n
s
t
a
l
l
 
a
n
y
 
p
l
u
g
i
n
s
 
t
h
a
t
 
a
r
e
 
l
i
s
t
e
d
 
a
s
 
C
o
r
e
 
p
l
u
g
i
n
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
V
A
L
I
D
_
L
I
C
E
N
S
E
_
M
E
S
S
A
G
E
'
,
 
"
C
o
n
g
r
a
t
u
l
a
t
i
o
n
s
,
 
y
o
u
'
r
e
 
u
s
i
n
g
 
a
 
v
a
l
i
d
 
l
i
c
e
n
s
e
 
n
u
m
b
e
r
 
a
n
d
 
c
a
n
 
i
n
s
t
a
l
l
 
C
o
r
e
 
p
l
u
g
i
n
s
 
t
h
r
o
u
g
h
 
t
h
e
 
J
o
m
r
e
s
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
.
"
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
M
R
P
'
,
 
'
T
h
i
s
 
p
a
g
e
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
a
n
d
 
t
h
e
 
t
h
i
n
g
s
 
y
o
u
 
o
f
f
e
r
.
 
I
t
 
h
a
s
 
o
n
e
 
m
a
i
n
 
b
u
t
t
o
n
,
 
a
n
d
 
a
 
s
e
c
o
n
d
 
b
u
t
t
o
n
 
t
h
a
t
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
s
e
l
e
c
t
 
s
p
e
c
i
f
i
c
 
r
e
s
o
u
r
c
e
s
 
t
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
.
 
S
o
,
 
t
h
e
 
M
a
i
n
 
p
r
o
p
e
r
t
y
 
i
m
a
g
e
 
a
n
d
 
t
h
e
 
S
l
i
d
e
s
h
o
w
 
w
i
l
l
 
o
n
l
y
 
s
h
o
w
 
o
n
e
 
b
u
t
t
o
n
 
b
u
t
 
i
f
 
y
o
u
 
h
a
v
e
 
c
r
e
a
t
e
d
 
a
n
y
 
e
.
g
.
 
O
p
t
i
o
n
a
l
 
E
x
t
r
a
s
 
o
r
 
R
o
o
m
s
,
 
t
h
e
n
 
y
o
u
 
w
i
l
l
 
s
e
e
 
a
 
s
e
c
o
n
d
 
b
u
t
t
o
n
 
w
h
e
r
e
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
 
t
h
o
s
e
 
s
p
e
c
i
f
i
c
 
r
e
s
o
u
r
c
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
S
R
P
'
,
 
'
T
h
i
s
 
p
a
g
e
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
a
n
d
 
t
h
e
 
t
h
i
n
g
s
 
y
o
u
 
o
f
f
e
r
.
 
I
t
 
h
a
s
 
o
n
e
 
m
a
i
n
 
b
u
t
t
o
n
,
 
a
n
d
 
a
 
s
e
c
o
n
d
 
b
u
t
t
o
n
 
t
h
a
t
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
s
e
l
e
c
t
 
s
p
e
c
i
f
i
c
 
r
e
s
o
u
r
c
e
s
 
t
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
.
 
S
o
,
 
t
h
e
 
M
a
i
n
 
p
r
o
p
e
r
t
y
 
i
m
a
g
e
 
a
n
d
 
t
h
e
 
S
l
i
d
e
s
h
o
w
 
w
i
l
l
 
o
n
l
y
 
s
h
o
w
 
o
n
e
 
b
u
t
t
o
n
 
b
u
t
 
i
f
 
y
o
u
 
h
a
v
e
 
c
r
e
a
t
e
d
 
a
n
y
 
O
p
t
i
o
n
a
l
 
E
x
t
r
a
s
 
t
h
e
n
 
y
o
u
 
w
i
l
l
 
s
e
e
 
a
 
s
e
c
o
n
d
 
b
u
t
t
o
n
 
w
h
e
r
e
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
 
t
h
o
s
e
 
s
p
e
c
i
f
i
c
 
r
e
s
o
u
r
c
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
G
E
N
E
R
I
C
'
,
 
"
<
o
l
>

 
 
<
l
i
>
F
i
r
s
t
 
c
h
o
o
s
e
 
t
h
e
 
i
m
a
g
e
(
s
)
 
y
o
u
'
d
 
l
i
k
e
 
t
o
 
u
p
l
o
a
d
 
b
y
 
c
l
i
c
k
i
n
g
 
A
d
d
 
I
m
a
g
e
 
o
r
 
u
s
i
n
g
 
D
r
a
g
 
a
n
d
 
D
r
o
p
.
 
T
h
e
s
e
 
w
i
l
l
 
a
p
p
e
a
r
 
i
n
 
t
h
e
 
c
o
l
u
m
n
 
o
n
 
t
h
e
 
r
i
g
h
t
 
h
a
n
d
 
s
i
d
e
.
<
/
l
i
>

 
 
<
l
i
>
A
b
o
v
e
 
t
h
i
s
 
a
r
e
a
,
 
u
s
e
 
t
h
e
 
\
"
C
h
o
o
s
e
 
t
h
e
 
r
e
s
o
u
r
c
e
\
"
 
b
u
t
t
o
n
 
t
o
 
c
h
o
o
s
e
 
w
h
i
c
h
 
r
e
s
o
u
r
c
e
 
y
o
u
 
w
a
n
t
 
t
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
.
 
Y
o
u
 
m
a
y
 
b
e
 
o
f
f
e
r
e
d
 
t
h
e
 
o
p
t
i
o
n
 
t
o
 
c
h
o
o
s
e
 
a
 
s
p
e
c
i
f
i
c
 
r
e
s
o
u
r
c
e
 
u
n
d
e
r
n
e
a
t
h
.
 
<
/
l
i
>

 
 
<
l
i
>
 
O
n
c
e
 
y
o
u
'
v
e
 
c
h
o
s
e
n
 
a
 
r
e
s
o
u
r
c
e
 
y
o
u
 
c
a
n
 
t
h
e
n
 
c
l
i
c
k
 
t
h
e
 
U
p
l
o
a
d
 
I
m
a
g
e
 
b
u
t
t
o
n
 
u
n
d
e
r
 
a
n
 
i
m
a
g
e
 
t
o
 
a
s
s
o
c
i
a
t
e
 
i
t
 
w
i
t
h
 
t
h
a
t
 
r
e
s
o
u
r
c
e
.
 
O
n
c
e
 
a
n
 
i
m
a
g
e
 
h
a
s
 
b
e
e
n
 
u
p
l
o
a
d
e
d
,
 
i
t
 
w
i
l
l
 
d
i
s
a
p
p
e
a
r
 
f
r
o
m
 
t
h
e
 
c
o
l
u
m
n
 
o
n
 
t
h
e
 
r
i
g
h
t
 
h
a
n
d
 
s
i
t
e
,
 
a
n
d
 
a
p
p
e
a
r
 
i
n
 
t
h
e
 
l
e
f
t
.
<
/
l
i
>

 
 
<
l
i
>
U
s
e
 
t
h
e
 
T
r
a
s
h
 
b
u
t
t
o
n
 
n
e
x
t
 
t
o
 
e
x
i
s
t
i
n
g
 
i
m
a
g
e
s
 
t
o
 
r
e
m
o
v
e
 
i
m
a
g
e
s
 
y
o
u
 
n
o
 
l
o
n
g
e
r
 
w
a
n
t
 
t
o
 
b
e
 
s
h
o
w
n
.
<
/
l
i
>

 
 
<
l
i
>
Y
o
u
 
c
a
n
 
c
h
a
n
g
e
 
t
h
e
 
o
r
d
e
r
 
t
h
a
t
 
f
i
l
e
s
 
a
r
e
 
s
h
o
w
n
 
i
n
 
t
h
e
 
s
l
i
d
e
s
h
o
w
 
b
y
 
r
e
n
a
m
i
n
g
 
t
h
e
m
 
b
e
f
o
r
e
 
u
p
l
o
a
d
i
n
g
 
t
h
e
m
,
 
a
s
 
t
h
e
y
 
a
r
e
 
d
i
s
p
l
a
y
e
d
 
i
n
 
p
a
g
e
s
 
i
n
 
a
l
p
h
a
b
e
t
i
c
a
l
 
o
r
d
e
r
.
<
/
l
i
>

<
/
o
l
>

 
"
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
P
R
E
V
I
E
W
'
,
 
"
N
e
x
t
 
t
o
 
t
h
e
 
R
e
s
o
u
r
c
e
 
b
u
t
t
o
n
,
 
y
o
u
 
m
a
y
 
s
e
e
 
a
 
P
r
e
v
i
e
w
 
b
u
t
t
o
n
.
 
I
f
 
y
o
u
 
c
l
i
c
k
 
o
n
 
t
h
i
s
 
y
o
u
 
w
i
l
l
 
s
e
e
 
a
 
p
o
p
u
p
 
t
h
a
t
 
s
h
o
w
s
 
y
o
u
 
h
o
w
 
t
h
e
 
c
u
r
r
e
n
t
l
y
 
u
p
l
o
a
d
e
d
 
i
m
a
g
e
s
 
w
i
l
l
 
l
o
o
k
 
i
n
 
a
 
p
a
g
e
.
 
T
h
i
s
 
h
e
l
p
s
 
t
o
 
g
i
v
e
 
y
o
u
 
a
n
 
i
d
e
a
 
o
f
 
h
o
w
 
t
h
e
 
i
m
a
g
e
s
 
w
i
l
l
 
l
o
o
k
 
t
o
 
y
o
u
r
 
c
u
s
t
o
m
e
r
s
.
"
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
L
I
M
I
T
A
T
I
O
N
S
'
,
 
"
T
h
e
r
e
 
i
s
 
n
o
 
l
i
m
i
t
 
t
o
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
i
m
a
g
e
s
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
.
 
I
m
a
g
e
s
 
a
r
e
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
r
e
s
i
z
e
d
 
w
h
e
n
 
t
h
e
y
 
a
r
e
 
u
p
l
o
a
d
e
d
.
 
Y
o
u
 
c
a
n
 
o
n
l
y
 
u
p
l
o
a
d
 
J
P
G
 
a
n
d
 
P
N
G
 
f
i
l
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
I
M
A
G
E
_
R
E
S
O
L
U
T
I
O
N
_
P
R
E
'
,
 
"
I
d
e
a
l
l
y
 
a
n
y
 
i
m
a
g
e
s
 
y
o
u
 
u
p
l
o
a
d
 
w
o
u
l
d
 
b
e
 
a
t
 
l
e
a
s
t
 
"
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
I
M
A
G
E
_
R
E
S
O
L
U
T
I
O
N
_
P
O
S
T
'
,
 
"
 
p
i
x
e
l
s
 
w
i
d
e
,
 
o
t
h
e
r
w
i
s
e
 
t
h
e
y
 
m
a
y
 
l
o
o
k
 
f
u
z
z
y
 
a
f
t
e
r
 
t
h
e
y
'
v
e
 
b
e
e
n
 
u
p
l
o
a
d
e
d
.
"
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
F
I
L
E
S
I
Z
E
_
P
R
E
'
,
 
"
A
n
y
 
i
m
a
g
e
s
 
y
o
u
 
u
p
l
o
a
d
 
c
a
n
n
o
t
 
b
e
 
m
o
r
e
 
t
h
a
n
 
"
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
F
I
L
E
S
I
Z
E
_
P
O
S
T
'
,
 
"
 
i
n
 
s
i
z
e
.
"
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
'
,
 
"
C
h
o
o
s
e
 
t
h
e
 
r
e
s
o
u
r
c
e
 
y
o
u
 
w
a
n
t
 
t
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
"
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
S
P
E
C
I
F
I
C
'
,
 
"
S
p
e
c
i
f
i
c
 
r
e
s
o
u
r
c
e
"
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
A
L
R
E
A
D
Y
_
U
P
L
O
A
D
E
D
'
,
 
"
I
m
a
g
e
s
 
a
l
r
e
a
d
y
 
u
p
l
o
a
d
e
d
 
f
o
r
 
t
h
i
s
 
r
e
s
o
u
r
c
e
"
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
T
I
T
L
E
'
,
 
'
T
e
x
t
 
f
o
r
m
a
t
t
i
n
g
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
D
E
S
C
'
,
 
'
Y
o
u
 
c
a
n
 
e
n
t
e
r
 
t
e
x
t
 
h
e
r
e
 
u
s
i
n
g
 
s
i
m
p
l
e
 
M
a
r
k
d
o
w
n
 
f
o
r
m
a
t
t
i
n
g
.
 
Y
o
u
 
d
o
n
\
'
t
 
n
e
e
d
 
t
o
 
k
n
o
w
 
a
n
y
 
H
T
M
L
,
 
j
u
s
t
 
u
s
e
 
t
h
e
 
b
u
t
t
o
n
s
 
t
o
 
m
a
k
e
 
t
h
e
 
i
n
f
o
r
m
a
t
i
o
n
 
l
o
o
k
 
l
i
k
e
 
y
o
u
 
w
a
n
t
,
 
o
r
 
f
o
r
m
a
t
 
t
e
x
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
 
t
o
 
t
h
e
s
e
 
e
x
a
m
p
l
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
E
M
P
H
A
S
I
S
'
,
 
'
E
m
p
h
a
s
i
s
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
B
O
L
D
'
,
 
'
b
o
l
d
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
I
T
A
L
I
C
S
'
,
 
'
i
t
a
l
i
c
s
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
S
T
R
I
K
E
T
H
R
O
U
G
H
'
,
 
'
s
t
r
i
k
e
t
h
r
o
u
g
h
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
H
E
A
D
E
R
S
'
,
 
"
H
e
a
d
e
r
s
"
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
B
I
G
H
E
A
D
E
R
'
,
 
'
B
i
g
 
h
e
a
d
e
r
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
M
E
D
I
U
M
H
E
A
D
E
R
'
,
 
"
M
e
d
i
u
m
 
h
e
a
d
e
r
"
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
S
M
A
L
L
H
E
A
D
E
R
'
,
 
'
S
m
a
l
l
 
h
e
a
d
e
r
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
T
I
N
Y
H
E
A
D
E
R
'
,
 
'
T
i
n
y
 
h
e
a
d
e
r
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
L
I
S
T
S
'
,
 
"
L
i
s
t
s
"
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
G
E
N
E
R
I
C
L
I
S
T
I
T
E
M
'
,
 
'
G
e
n
e
r
i
c
 
l
i
s
t
 
i
t
e
m
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
N
U
M
B
E
R
E
D
L
I
S
T
I
T
E
M
'
,
 
'
N
u
m
b
e
r
e
d
 
l
i
s
t
 
i
t
e
m
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
L
I
N
K
S
'
,
 
'
L
i
n
k
s
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
L
I
N
K
S
T
E
X
T
'
,
 
'
T
e
x
t
 
t
o
 
d
i
s
p
l
a
y
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
Q
U
O
T
E
S
'
,
 
'
Q
u
o
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
T
H
I
S
I
S
A
Q
U
O
T
E
'
,
 
'
T
h
i
s
 
i
s
 
a
 
q
u
o
t
e
.
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
Q
U
O
T
E
M
U
L
T
I
P
L
E
'
,
 
'
I
t
 
c
a
n
 
s
p
a
n
 
m
u
l
t
i
p
l
e
 
l
i
n
e
s
!
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
I
M
A
G
E
S
'
,
 
'
I
m
a
g
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
T
A
B
L
E
'
,
 
'
T
a
b
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
R
K
D
O
W
N
_
C
O
L
U
M
N
'
,
 
'
C
o
l
u
m
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
P
R
O
P
E
R
T
Y
L
I
S
T
_
I
M
A
G
E
S
_
A
S
_
S
L
I
D
E
S
H
O
W
'
,
 
'
S
h
o
w
 
p
r
o
p
e
r
t
y
 
i
m
a
g
e
s
 
a
s
 
s
l
i
d
e
s
h
o
w
 
i
n
 
p
r
o
p
e
r
t
y
 
l
i
s
t
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
P
R
O
P
E
R
T
Y
L
I
S
T
_
I
M
A
G
E
S
_
A
S
_
S
L
I
D
E
S
H
O
W
_
D
E
S
C
'
,
 
'
I
f
 
s
e
t
 
t
o
 
y
e
s
,
 
a
 
s
l
i
d
e
s
h
o
w
 
o
f
 
p
r
o
p
e
r
t
y
 
m
a
i
n
 
i
m
a
g
e
s
 
w
i
l
l
 
b
e
 
d
i
s
p
l
a
y
e
d
.
 
I
f
 
s
e
t
 
t
o
 
n
o
,
 
t
h
e
n
 
t
h
e
 
f
i
r
s
t
 
p
r
o
p
e
r
t
y
 
m
a
i
n
 
i
m
a
g
e
 
w
i
l
l
 
b
e
 
d
i
s
p
l
a
y
e
d
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
E
D
I
T
_
C
M
S
_
U
S
E
R
'
,
 
'
E
d
i
t
 
C
M
S
 
u
s
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
B
O
O
K
I
N
G
_
M
A
D
E
_
B
Y
'
,
 
'
B
o
o
k
i
n
g
 
m
a
d
e
 
b
y
'
)
;

j
r
_
d
e
f
i
n
e
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
R
O
U
T
E
R
_
F
E
A
T
U
R
E
S
'
,
 
'
A
m
e
n
i
t
i
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
R
O
U
T
E
R
_
R
O
O
M
T
Y
P
E
S
'
,
 
'
R
o
o
m
 
T
y
p
e
s
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
_
F
O
R
M
_
E
X
T
E
R
N
A
L
_
U
R
L
'
,
 
'
E
x
t
e
r
n
a
l
 
b
o
o
k
i
n
g
 
f
o
r
m
 
U
R
L
'
)
;

j
r
_
d
e
f
i
n
e
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
B
O
O
K
I
N
G
_
F
O
R
M
_
E
X
T
E
R
N
A
L
_
U
R
L
_
D
E
S
C
'
,
 
'
H
e
r
e
 
y
o
u
 
c
a
n
 
s
e
t
 
a
n
 
e
x
t
e
r
n
a
l
 
U
R
L
 
i
f
 
y
o
u
 
w
a
n
t
 
t
o
 
u
s
e
 
a
 
3
r
d
 
p
a
r
t
y
 
w
e
b
s
i
t
e
 
f
o
r
 
m
a
k
i
n
g
 
b
o
o
k
i
n
g
s
.
 
A
l
l
 
j
o
m
r
e
s
 
b
o
o
k
i
n
g
 
b
u
t
t
o
n
s
 
w
i
l
l
 
p
o
i
n
t
 
t
o
 
t
h
i
s
 
U
R
L
.
 
L
e
a
v
e
 
t
h
i
s
 
f
i
e
l
d
 
b
l
a
n
k
 
i
f
 
y
o
u
 
w
a
n
t
 
t
o
 
u
s
e
 
t
h
e
 
J
o
m
r
e
s
 
b
o
o
k
i
n
g
 
f
o
r
m
.
'
)
;

j
r
_
d
e
f
i
n
e
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
R
O
O
M
_
T
A
G
L
I
N
E
'
,
 
'
T
a
g
l
i
n
e
 
(
s
h
o
r
t
 
r
o
o
m
 
d
e
s
c
r
i
p
t
i
o
n
/
s
u
b
t
i
t
l
e
)
'
)
;

j
r
_
d
e
f
i
n
e
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
R
O
O
M
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
R
o
o
m
 
D
e
s
c
r
i
p
t
i
o
n
'
)
;

j
r
_
d
e
f
i
n
e
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
G
U
E
S
T
_
B
L
A
C
K
L
I
S
T
E
D
'
,
 
'
G
u
e
s
t
 
b
l
a
c
k
l
i
s
t
e
d
'
)
;

j
r
_
d
e
f
i
n
e
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
G
U
E
S
T
_
B
L
A
C
K
L
I
S
T
E
D
_
D
E
S
C
'
,
 
'
I
f
 
t
h
i
s
 
g
u
e
s
t
 
i
s
 
b
l
a
c
k
 
l
i
s
t
e
d
 
t
h
e
n
 
t
h
e
y
 
w
i
l
l
 
n
o
 
l
o
n
g
e
r
 
b
e
 
a
b
l
e
 
t
o
 
m
a
k
e
 
b
o
o
k
i
n
g
s
 
i
n
 
t
h
i
s
 
p
r
o
p
e
r
t
y
.
'
)
;

j
r
_
d
e
f
i
n
e
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
S
E
S
S
I
O
N
_
H
A
N
D
L
E
R
'
,
 
'
S
e
s
s
i
o
n
 
h
a
n
d
l
e
r
'
)
;

j
r
_
d
e
f
i
n
e
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
S
E
S
S
I
O
N
_
H
A
N
D
L
E
R
_
D
E
S
C
'
,
 
'
S
a
v
e
 
j
o
m
r
e
s
 
s
e
s
s
i
o
n
 
f
i
l
e
s
 
t
o
 
d
i
s
k
 
o
r
 
t
o
 
d
a
t
a
b
a
s
e
.
 
R
e
c
o
m
m
e
n
d
e
d
:
 
d
a
t
a
b
a
s
e
'
)
;

j
r
_
d
e
f
i
n
e
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
M
A
P
_
H
E
I
G
H
T
'
,
"
M
a
p
 
h
e
i
g
h
t
 
(
p
x
)
 
"
)
;

j
r
_
d
e
f
i
n
e
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
M
A
P
_
Z
O
O
M
L
E
V
E
L
'
,
"
M
a
p
 
z
o
o
m
 
l
e
v
e
l
 
"
)
;

j
r
_
d
e
f
i
n
e
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
M
A
P
_
M
A
P
T
Y
P
E
'
,
"
M
a
p
 
t
y
p
e
 
"
)
;


j
r
_
d
e
f
i
n
e
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
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
S
'
,
"
T
e
m
p
l
a
t
e
 
O
v
e
r
r
i
d
e
 
M
a
n
a
g
e
r
"
)
;

j
r
_
d
e
f
i
n
e
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
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
S
_
L
E
A
D
'
,
"
T
e
m
p
l
a
t
e
 
p
a
c
k
a
g
e
s
 
a
r
e
 
p
l
u
g
i
n
s
 
t
h
a
t
 
c
a
n
 
p
r
o
v
i
d
e
 
o
v
e
r
r
i
d
e
 
t
e
m
p
l
a
t
e
s
 
f
o
r
 
v
a
r
i
o
u
s
 
c
o
r
e
 
J
o
m
r
e
s
 
t
e
m
p
l
a
t
e
 
f
i
l
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
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
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
S
_
I
N
F
O
'
,
"
T
h
i
s
 
p
a
g
e
 
l
i
s
t
s
 
a
n
y
 
t
e
m
p
l
a
t
e
 
f
i
l
e
s
 
t
h
a
t
 
c
a
n
 
b
e
 
o
v
e
r
r
i
d
d
e
n
 
b
y
 
a
 
t
e
m
p
l
a
t
e
 
p
a
c
k
a
g
e
'
s
 
t
e
m
p
l
a
t
e
 
f
i
l
e
s
.
 
I
f
 
y
o
u
 
w
a
n
t
 
t
o
 
o
v
e
r
r
i
d
e
 
a
 
c
e
r
t
a
i
n
 
t
e
m
p
l
a
t
e
 
f
i
l
e
,
 
c
l
i
c
k
 
o
n
 
t
h
e
 
e
d
i
t
 
b
u
t
t
o
n
 
f
o
r
 
t
h
a
t
 
f
i
l
e
,
 
o
n
 
t
h
e
 
n
e
x
t
 
p
a
g
e
 
y
o
u
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
c
h
o
o
s
e
 
w
h
i
c
h
 
v
e
r
s
i
o
n
 
y
o
u
 
w
a
n
t
 
t
o
 
o
v
e
r
r
i
d
e
 
w
i
t
h
.
 
N
o
t
e
,
 
t
h
e
s
e
 
o
v
e
r
r
i
d
e
s
 
t
a
k
e
 
p
r
i
o
r
i
t
y
 
o
v
e
r
 
b
o
t
h
 
J
o
m
r
e
s
 
C
o
r
e
 
a
n
d
 
a
n
y
 
W
o
r
d
p
r
e
s
s
 
o
r
 
J
o
o
m
l
a
 
t
h
e
m
e
/
t
e
m
p
l
a
t
e
 
o
v
e
r
r
i
d
e
s
.
 
Y
o
u
 
c
a
n
 
d
i
s
a
b
l
e
 
a
n
 
o
v
e
r
r
i
d
e
 
b
y
 
d
e
l
e
t
i
n
g
 
i
t
 
i
n
 
t
h
e
 
L
i
s
t
 
T
e
m
p
l
a
t
e
 
O
v
e
r
r
i
d
e
s
 
p
a
g
e
.
"
)
;

j
r
_
d
e
f
i
n
e
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
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
_
N
A
M
E
'
,
"
T
e
m
p
l
a
t
e
 
n
a
m
e
"
)
;

j
r
_
d
e
f
i
n
e
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
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
_
P
A
T
H
'
,
"
C
u
r
r
e
n
t
 
p
a
t
h
"
)
;

j
r
_
d
e
f
i
n
e
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
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
_
N
O
T
_
O
V
E
R
R
I
D
D
E
N
'
,
"
N
o
t
 
o
v
e
r
r
i
d
d
e
n
"
)
;

j
r
_
d
e
f
i
n
e
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
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
S
_
E
D
I
T
_
I
N
F
O
'
,
"
Y
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
 
w
h
i
c
h
 
t
e
m
p
l
a
t
e
 
f
i
l
e
 
t
o
 
o
v
e
r
r
i
d
e
 
t
h
e
 
C
o
r
e
 
t
e
m
p
l
a
t
e
 
f
i
l
e
s
 
b
y
 
c
h
a
n
g
i
n
g
 
t
h
e
 
d
r
o
p
d
o
w
n
"
)
;



j
r
_
d
e
f
i
n
e
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
O
V
E
R
A
L
L
_
R
O
O
M
S
_
B
O
O
K
E
D
'
,
"
P
e
r
c
e
n
t
a
g
e
 
R
o
o
m
s
 
B
o
o
k
e
d
"
)
;



j
r
_
d
e
f
i
n
e
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
O
V
E
R
A
L
L
_
R
O
O
M
S
_
B
O
O
K
E
D
'
,
"
P
e
r
c
e
n
t
a
g
e
 
R
o
o
m
s
 
B
o
o
k
e
d
"
)
;

j
r
_
d
e
f
i
n
e
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
S
E
L
E
C
T
_
W
I
D
G
E
T
S
'
,
"
S
e
l
e
c
t
 
w
i
d
g
e
t
s
"
)
;

j
r
_
d
e
f
i
n
e
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
T
E
R
V
A
L
'
,
"
I
n
t
e
r
v
a
l
"
)
;

j
r
_
d
e
f
i
n
e
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
T
I
M
E
L
I
N
E
'
,
"
T
i
m
e
l
i
n
e
"
)
;

j
r
_
d
e
f
i
n
e
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
C
P
A
N
E
L
_
G
R
I
D
'
,
"
C
o
n
t
r
o
l
 
p
a
n
e
l
 
h
o
m
e
 
l
a
y
o
u
t
"
)
;

j
r
_
d
e
f
i
n
e
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
C
P
A
N
E
L
_
G
R
I
D
_
D
E
S
C
'
,
"
S
e
l
e
c
t
 
t
h
e
 
g
r
i
d
 
l
a
y
o
u
t
 
o
f
 
y
o
u
r
 
f
r
o
n
t
e
n
d
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
m
e
n
t
 
c
o
n
t
r
o
l
 
p
a
n
e
l
 
h
o
m
e
 
p
a
g
e
.
"
)
;


j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
U
P
L
O
A
D
_
C
O
N
T
E
X
T
_
M
A
R
K
E
R
_
I
M
A
G
E
S
'
,
"
G
o
o
g
l
e
 
M
a
p
 
M
a
r
k
e
r
s
"
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
U
P
L
O
A
D
_
C
O
N
T
E
X
T
_
T
O
W
N
_
I
M
A
G
E
S
'
,
"
T
o
w
n
 
i
m
a
g
e
s
"
)
;

j
r
_
d
e
f
i
n
e
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
P
T
Y
P
E
_
C
H
A
N
G
E
_
W
A
R
N
I
N
G
'
,
"
C
h
a
n
g
i
n
g
 
t
h
e
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
w
i
l
l
 
d
e
l
e
t
e
 
a
l
l
 
r
o
o
m
s
,
 
t
a
r
i
f
f
s
,
 
p
r
o
p
e
r
t
y
 
s
e
t
t
i
n
g
s
 
a
n
d
 
r
e
s
e
t
 
a
v
a
i
l
a
b
i
l
i
t
y
.
"
)
;

j
r
_
d
e
f
i
n
e
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
V
E
R
S
I
O
N
C
H
E
C
K
_
V
E
R
S
I
O
N
W
A
R
N
I
N
G
_
U
P
D
A
T
E
I
N
F
O
'
,
 
'
P
l
e
a
s
e
 
n
o
t
e
,
 
a
f
t
e
r
 
u
p
d
a
t
i
n
g
 
y
o
u
 
m
u
s
t
 
u
p
d
a
t
e
 
a
n
y
 
J
o
m
r
e
s
 
P
l
u
g
i
n
s
 
t
h
a
t
 
a
r
e
 
a
l
r
e
a
d
y
 
i
n
s
t
a
l
l
e
d
,
 
t
h
r
o
u
g
h
 
t
h
e
 
J
o
m
r
e
s
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
.
 
I
f
 
y
o
u
 
h
a
v
e
 
C
o
r
e
 
p
l
u
g
i
n
s
 
i
n
s
t
a
l
l
e
d
,
 
b
u
t
 
d
o
 
n
o
t
 
h
a
v
e
 
a
 
v
a
l
i
d
 
J
o
m
r
e
s
 
l
i
c
e
n
s
e
 
t
h
e
n
 
w
e
 
<
e
m
>
d
o
 
n
o
t
<
/
e
m
>
 
r
e
c
o
m
m
e
n
d
 
t
h
a
t
 
y
o
u
 
u
p
d
a
t
e
 
J
o
m
r
e
s
 
a
s
 
o
l
d
e
r
 
p
l
u
g
i
n
s
 
o
f
t
e
n
 
m
a
y
 
n
o
t
 
w
o
r
k
 
w
i
t
h
 
n
e
w
e
r
 
v
e
r
s
i
o
n
s
 
o
f
 
J
o
m
r
e
s
.
 
'
)
;

j
r
_
d
e
f
i
n
e
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
V
E
R
S
I
O
N
C
H
E
C
K
_
V
E
R
S
I
O
N
W
A
R
N
I
N
G
_
U
P
D
A
T
E
I
N
F
O
_
K
E
Y
V
A
L
I
D
'
,
 
'
P
l
e
a
s
e
 
n
o
t
e
,
 
a
f
t
e
r
 
u
p
d
a
t
i
n
g
 
y
o
u
 
m
u
s
t
 
u
p
d
a
t
e
 
a
n
y
 
J
o
m
r
e
s
 
P
l
u
g
i
n
s
 
t
h
a
t
 
a
r
e
 
a
l
r
e
a
d
y
 
i
n
s
t
a
l
l
e
d
,
 
t
h
r
o
u
g
h
 
t
h
e
 
J
o
m
r
e
s
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
.
'
)
;

j
r
_
d
e
f
i
n
e
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
V
E
R
S
I
O
N
C
H
E
C
K
_
V
E
R
S
I
O
N
W
A
R
N
I
N
G
_
R
E
N
E
W
A
L
S
'
,
 
"
I
f
 
y
o
u
 
w
o
u
l
d
 
l
i
k
e
 
t
o
 
u
p
d
a
t
e
 
J
o
m
r
e
s
 
a
n
d
 
i
t
'
s
 
p
l
u
g
i
n
s
 
y
o
u
 
w
i
l
l
 
n
e
e
d
 
a
 
r
e
n
e
w
a
l
 
l
i
c
e
n
s
e
.
 
P
l
e
a
s
e
 
v
i
s
i
t
 
<
a
 
h
r
e
f
=
'
h
t
t
p
s
:
/
/
w
w
w
.
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
/
p
r
i
c
i
n
g
'
 
t
a
r
g
e
t
=
'
_
b
l
a
n
k
'
>
o
u
r
 
s
i
t
e
<
/
a
>
 
f
o
r
 
m
o
r
e
 
i
n
f
o
r
m
a
t
i
o
n
.
 
I
n
 
m
o
s
t
 
c
a
s
e
s
 
t
h
e
s
e
 
l
i
c
e
n
s
e
s
 
a
r
e
 
5
0
%
 
o
f
 
t
h
e
 
p
r
i
c
e
 
o
f
 
a
 
f
u
l
l
 
l
i
c
e
n
s
e
.
 
P
l
e
a
s
e
 
e
n
s
u
r
e
 
t
h
a
t
 
y
o
u
 
h
a
v
e
 
l
o
g
g
e
d
 
i
n
t
o
 
o
u
r
 
s
h
o
p
 
b
e
f
o
r
e
 
a
t
t
e
m
p
t
i
n
g
 
t
o
 
p
u
r
c
h
a
s
e
 
a
 
r
e
n
e
w
a
l
.
"
)
;

j
r
_
d
e
f
i
n
e
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
P
A
Y
M
E
N
T
_
M
E
T
H
O
D
_
U
S
E
D
'
,
"
P
a
y
m
e
n
t
 
m
e
t
h
o
d
 
:
 
"
)
;


j
r
_
d
e
f
i
n
e
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
P
R
I
C
E
S
'
,
"
B
u
y
 
J
o
m
r
e
s
"
)
;



j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
T
I
T
L
E
'
,
"
A
p
p
 
k
e
y
 
m
a
n
a
g
e
m
e
n
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
A
P
P
S
'
,
"
R
E
S
T
 
A
P
I
 
c
l
i
e
n
t
 
d
e
t
a
i
l
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
I
D
E
N
T
I
F
I
E
R
'
,
"
I
d
e
n
t
i
f
i
e
r
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
A
P
I
K
E
Y
'
,
"
C
l
i
e
n
t
 
I
D
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
S
E
C
R
E
T
'
,
"
S
e
c
r
e
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
C
R
E
A
T
E
D
'
,
"
C
r
e
a
t
e
d
/
U
p
d
a
t
e
d
 
A
p
p
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
C
L
I
E
N
T
_
I
D
_
I
N
F
O
'
,
"
T
h
e
 
C
l
i
e
n
t
 
I
D
 
a
n
d
 
S
e
c
r
e
t
 
a
r
e
 
c
r
e
a
t
e
d
 
f
o
r
 
y
o
u
.
 
T
h
e
 
I
d
e
n
t
i
f
i
e
r
 
i
s
 
s
o
 
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
 
e
a
s
i
l
y
 
i
d
e
n
t
i
f
y
 
t
h
i
s
 
k
e
y
 
p
a
i
r
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
,
"
P
e
r
m
i
s
s
i
o
n
s
 
(
 
w
h
a
t
 
t
h
e
 
c
l
i
e
n
t
 
c
a
n
 
d
o
 
)
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
S
C
O
P
E
_
C
A
T
E
G
O
R
Y
_
U
S
E
R
'
 
,
 
"
U
s
e
r
 
p
e
r
m
i
s
s
i
o
n
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
S
C
O
P
E
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
I
E
S
'
 
,
 
"
P
r
o
p
e
r
t
y
 
p
e
r
m
i
s
s
i
o
n
s
"
)
;


j
r
_
d
e
f
i
n
e
(
'
A
P
I
_
D
O
C
U
M
E
N
T
A
T
I
O
N
_
T
I
T
L
E
'
,
"
A
p
p
 
R
E
S
T
 
A
P
I
 
d
o
c
u
m
e
n
t
a
t
i
o
n
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
C
O
N
F
I
G
'
,
"
A
P
I
 
C
o
r
e
 
c
o
n
f
i
g
u
r
a
t
i
o
n
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
C
O
N
F
I
G
_
S
H
O
W
'
,
"
S
h
o
w
 
A
P
I
 
c
l
i
e
n
t
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
o
p
t
i
o
n
s
 
i
n
 
J
o
m
r
e
s
 
m
a
i
n
 
m
e
n
u
?
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
C
O
N
F
I
G
_
S
H
O
W
_
D
E
S
C
'
,
"
Y
o
u
 
m
a
y
 
c
h
o
o
s
e
 
t
o
 
n
o
t
 
s
h
o
w
 
t
h
e
 
A
P
I
 
c
l
i
e
n
t
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
o
p
t
i
o
n
s
 
i
n
 
t
h
e
 
'
M
y
 
A
c
c
o
u
n
t
'
 
s
e
c
t
i
o
n
 
o
f
 
t
h
e
 
J
o
m
r
e
s
 
m
a
i
n
m
e
n
u
.
 
Y
o
u
 
c
o
u
l
d
 
i
n
s
t
e
a
d
 
d
e
c
i
d
e
 
t
h
a
t
 
y
o
u
 
w
a
n
t
e
d
 
t
o
 
s
h
o
w
 
t
h
e
m
 
o
n
 
o
t
h
e
r
 
p
a
g
e
s
 
u
s
i
n
g
 
J
o
m
r
e
s
 
S
h
o
r
t
c
o
d
e
s
.
"
)
;


j
r
_
d
e
f
i
n
e
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
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
A
P
I
_
C
O
R
E
_
D
O
C
S
'
,
 
"
D
i
s
p
l
a
y
s
 
t
h
e
 
A
P
I
 
c
o
r
e
 
d
o
c
u
m
e
n
t
a
t
i
o
n
 
p
a
g
e
.
 
T
h
e
 
A
P
I
 
C
o
r
e
 
a
l
l
o
w
s
 
u
s
e
r
s
 
t
o
 
c
r
e
a
t
e
 
A
P
I
 
c
l
i
e
n
t
s
,
 
w
h
i
c
h
 
a
r
e
 
t
h
e
n
 
u
s
e
d
 
t
o
 
a
c
c
e
s
s
 
t
h
e
 
A
P
I
 
f
u
n
c
t
i
o
n
a
l
i
t
y
 
w
h
i
c
h
 
i
s
 
o
u
t
l
i
n
e
d
 
i
n
 
t
h
e
 
A
P
I
 
C
o
r
e
 
d
o
c
u
m
e
n
t
a
t
i
o
n
.
"
 
)
;


j
r
_
d
e
f
i
n
e
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
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
5
A
P
I
_
C
O
R
E
_
C
L
I
E
N
T
_
A
D
M
I
N
'
,
 
"
D
i
s
p
l
a
y
s
 
t
h
e
 
A
P
I
 
c
o
r
e
 
a
d
m
i
n
i
s
t
r
a
t
i
o
n
 
p
a
g
e
,
 
w
h
e
r
e
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
c
a
n
 
c
o
n
f
i
g
u
r
e
 
A
P
I
 
c
l
i
e
n
t
s
.
 
N
o
t
e
 
t
h
a
t
 
t
h
i
s
 
i
s
 
a
 
r
e
g
i
s
t
e
r
e
d
 
u
s
e
r
 
o
n
l
y
 
f
e
a
t
u
r
e
,
 
s
o
 
u
s
e
r
s
 
m
u
s
t
 
b
e
 
r
e
g
i
s
t
e
r
e
d
 
a
n
d
 
l
o
g
g
e
d
 
i
n
 
b
e
f
o
r
e
 
t
h
e
y
 
c
a
n
 
s
e
e
 
t
h
i
s
 
p
a
g
e
.
"
 
)
;


j
r
_
d
e
f
i
n
e
(
'
A
P
I
_
M
E
T
H
O
D
S
_
T
I
T
L
E
'
,
"
A
P
I
 
M
e
t
h
o
d
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
A
P
I
_
M
E
T
H
O
D
S
_
D
E
S
C
R
I
P
T
I
O
N
'
,
"
T
h
i
s
 
l
i
s
t
 
o
f
 
m
e
t
h
o
d
s
 
i
s
 
b
a
s
e
d
 
o
n
 
y
o
u
r
 
i
n
s
t
a
l
l
e
d
 
A
P
I
 
f
e
a
t
u
r
e
 
p
l
u
g
i
n
s
 
a
n
d
 
i
s
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
g
e
n
e
r
a
t
e
d
.
 
I
f
 
y
o
u
 
i
n
s
t
a
l
l
 
o
r
 
d
e
l
e
t
e
 
a
n
 
A
P
I
 
f
e
a
t
u
r
e
 
p
l
u
g
i
n
 
y
o
u
 
m
u
s
t
 
v
i
s
i
t
 
t
h
i
s
 
p
a
g
e
 
t
o
 
r
e
b
u
i
l
d
 
t
h
i
s
 
l
i
s
t
 
o
f
 
A
P
I
 
m
e
t
h
o
d
s
 
a
v
a
i
l
a
b
l
e
 
o
n
 
y
o
u
r
 
s
i
t
e
.
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
R
E
D
I
R
E
C
T
_
U
R
I
'
,
"
R
e
d
i
r
e
c
t
 
U
R
I
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
I
D
E
N
T
I
F
I
E
R
_
P
L
A
C
E
H
O
L
D
E
R
'
,
"
G
i
v
e
 
m
e
 
a
 
n
a
m
e
 
t
h
a
t
'
s
 
m
e
a
n
i
n
g
f
u
l
 
t
o
 
y
o
u
,
 
s
u
c
h
 
a
s
 
M
y
 
P
h
o
n
e
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
G
R
A
N
T
_
T
Y
P
E
S
'
,
"
T
h
i
s
 
s
y
s
t
e
m
 
s
u
p
p
o
r
t
s
 
t
w
o
 
g
r
a
n
t
 
t
y
p
e
s
 
,
 
C
l
i
e
n
t
 
C
r
e
d
e
n
t
i
a
l
s
 
a
n
d
 
I
m
p
l
i
c
i
t
.
 
I
f
 
y
o
u
 
a
r
e
 
u
s
i
n
g
 
t
h
e
 
<
e
m
>
c
l
i
e
n
t
_
c
r
e
d
e
n
t
i
a
l
s
<
/
e
m
>
 
f
l
o
w
 
t
h
e
n
 
y
o
u
 
w
i
l
l
 
n
e
e
d
 
b
o
t
h
 
t
h
e
 
c
l
i
e
n
t
 
i
d
 
a
n
d
 
t
h
e
 
c
l
i
e
n
t
 
s
e
c
r
e
t
.
 
I
f
 
u
s
i
n
g
 
<
e
m
>
i
m
p
l
i
c
i
t
<
/
e
m
>
 
t
h
e
n
 
y
o
u
r
 
a
p
p
 
w
o
u
l
d
 
s
e
n
d
 
j
u
s
t
 
t
h
e
 
c
l
i
e
n
t
 
i
d
 
a
n
d
 
y
o
u
 
w
o
u
l
d
 
l
o
g
 
i
n
t
o
 
t
h
e
 
s
y
s
t
e
m
 
t
o
 
e
x
p
l
i
c
i
t
l
y
 
a
u
t
h
o
r
i
s
e
 
t
h
a
t
 
a
p
p
.
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
I
M
P
L
I
C
I
T
_
N
O
T
E
S
'
,
"
T
o
 
u
s
e
 
t
h
e
 
<
e
m
>
i
m
p
l
i
c
i
t
<
/
e
m
>
 
g
r
a
n
t
 
t
y
p
e
 
f
l
o
w
,
 
y
o
u
 
w
i
l
l
 
n
e
e
d
 
t
o
 
u
s
e
 
t
h
i
s
 
u
r
l
 
t
o
 
a
u
t
h
o
r
i
s
e
 
y
o
u
r
 
a
p
p
s
.
 
W
h
e
n
 
t
h
i
s
 
u
r
l
 
i
s
 
c
a
l
l
e
d
,
 
a
n
d
 
y
o
u
 
h
a
v
e
 
a
u
t
h
o
r
i
s
e
d
 
t
h
e
 
a
p
p
 
t
h
e
 
s
y
s
t
e
m
 
w
i
l
l
 
i
s
s
u
e
 
a
 
t
o
k
e
n
 
t
h
a
t
 
y
o
u
 
a
p
p
s
 
w
i
l
l
 
t
h
e
n
 
u
s
e
 
t
o
 
c
a
l
l
 
t
h
i
s
 
s
y
s
t
e
m
'
s
 
A
P
I
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
A
U
T
H
O
R
I
S
A
T
I
O
N
_
U
R
L
'
,
"
A
u
t
h
o
r
i
s
a
t
i
o
n
 
U
R
L
"
)
;


j
r
_
d
e
f
i
n
e
(
 
'
W
E
B
H
O
O
K
S
_
C
O
R
E
'
,
 
'
W
e
b
h
o
o
k
s
'
 
)
;


j
r
_
d
e
f
i
n
e
(
'
_
W
E
B
H
O
O
K
S
_
C
O
N
F
I
G
_
S
H
O
W
'
,
"
S
h
o
w
 
W
e
b
h
o
o
k
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
o
p
t
i
o
n
s
 
i
n
 
J
o
m
r
e
s
 
m
a
i
n
 
m
e
n
u
?
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
W
E
B
H
O
O
K
S
_
C
O
N
F
I
G
_
S
H
O
W
_
D
E
S
C
'
,
"
Y
o
u
 
m
a
y
 
c
h
o
o
s
e
 
t
o
 
n
o
t
 
s
h
o
w
 
t
h
e
 
W
e
b
h
o
o
k
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
o
p
t
i
o
n
s
 
i
n
 
t
h
e
 
'
M
y
 
A
c
c
o
u
n
t
'
 
s
e
c
t
i
o
n
 
o
f
 
t
h
e
 
J
o
m
r
e
s
 
m
a
i
n
m
e
n
u
.
 
Y
o
u
 
c
o
u
l
d
 
i
n
s
t
e
a
d
 
d
e
c
i
d
e
 
t
h
a
t
 
y
o
u
 
w
a
n
t
e
d
 
t
o
 
s
h
o
w
 
t
h
e
m
 
o
n
 
o
t
h
e
r
 
p
a
g
e
s
 
u
s
i
n
g
 
J
o
m
r
e
s
 
S
h
o
r
t
c
o
d
e
s
.
"
)
;


j
r
_
d
e
f
i
n
e
(
'
W
E
B
H
O
O
K
S
_
D
O
C
U
M
E
N
T
A
T
I
O
N
_
T
I
T
L
E
'
,
"
W
e
b
h
o
o
k
s
 
d
o
c
u
m
e
n
t
a
t
i
o
n
"
)
;


j
r
_
d
e
f
i
n
e
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
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
W
E
B
H
O
O
K
S
_
D
O
C
S
'
,
 
"
D
i
s
p
l
a
y
s
 
t
h
e
 
A
P
I
 
c
o
r
e
 
d
o
c
u
m
e
n
t
a
t
i
o
n
 
p
a
g
e
.
 
T
h
e
 
A
P
I
 
C
o
r
e
 
a
l
l
o
w
s
 
u
s
e
r
s
 
t
o
 
c
r
e
a
t
e
 
A
P
I
 
c
l
i
e
n
t
s
,
 
w
h
i
c
h
 
a
r
e
 
t
h
e
n
 
u
s
e
d
 
t
o
 
a
c
c
e
s
s
 
t
h
e
 
A
P
I
 
f
u
n
c
t
i
o
n
a
l
i
t
y
 
w
h
i
c
h
 
i
s
 
o
u
t
l
i
n
e
d
 
i
n
 
t
h
e
 
A
P
I
 
C
o
r
e
 
d
o
c
u
m
e
n
t
a
t
i
o
n
.
"
 
)
;


j
r
_
d
e
f
i
n
e
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
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
5
W
E
B
H
O
O
K
S
_
C
L
I
E
N
T
_
A
D
M
I
N
'
,
 
"
D
i
s
p
l
a
y
s
 
t
h
e
 
A
P
I
 
c
o
r
e
 
a
d
m
i
n
i
s
t
r
a
t
i
o
n
 
p
a
g
e
,
 
w
h
e
r
e
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
c
a
n
 
c
o
n
f
i
g
u
r
e
 
A
P
I
 
c
l
i
e
n
t
s
.
 
N
o
t
e
 
t
h
a
t
 
t
h
i
s
 
i
s
 
a
 
r
e
g
i
s
t
e
r
e
d
 
u
s
e
r
 
o
n
l
y
 
f
e
a
t
u
r
e
,
 
s
o
 
u
s
e
r
s
 
m
u
s
t
 
b
e
 
r
e
g
i
s
t
e
r
e
d
 
a
n
d
 
l
o
g
g
e
d
 
i
n
 
b
e
f
o
r
e
 
t
h
e
y
 
c
a
n
 
s
e
e
 
t
h
i
s
 
p
a
g
e
.
"
 
)
;


j
r
_
d
e
f
i
n
e
(
 
'
W
E
B
H
O
O
K
S
_
I
N
T
E
G
R
A
T
I
O
N
_
E
D
I
T
'
,
 
'
E
d
i
t
 
I
n
t
e
g
r
a
t
i
o
n
'
 
)
;

j
r
_
d
e
f
i
n
e
(
 
'
W
E
B
H
O
O
K
S
_
I
N
T
E
G
R
A
T
I
O
N
_
I
D
'
,
 
'
I
n
t
e
g
r
a
t
i
o
n
 
I
D
'
 
)
;

j
r
_
d
e
f
i
n
e
(
 
'
W
E
B
H
O
O
K
S
_
I
N
T
E
G
R
A
T
I
O
N
_
U
R
L
'
,
 
'
U
R
L
 
o
r
 
N
a
m
e
'
 
)
;

j
r
_
d
e
f
i
n
e
(
 
'
W
E
B
H
O
O
K
S
_
E
N
A
B
L
E
D
'
,
 
'
E
n
a
b
l
e
d
'
 
)
;


j
r
_
d
e
f
i
n
e
(
 
'
W
E
B
H
O
O
K
S
_
A
U
T
H
_
M
E
T
H
O
D
_
S
E
L
E
C
T
'
,
 
'
A
u
t
h
e
n
t
i
c
a
t
i
o
n
 
m
e
t
h
o
d
/
I
n
t
e
g
r
a
t
i
o
n
'
 
)
;


j
r
_
d
e
f
i
n
e
(
 
'
W
E
B
H
O
O
K
S
_
M
A
N
A
G
E
R
_
P
R
O
P
E
R
T
I
E
S
_
N
O
N
E
'
,
 
'
A
n
y
 
w
e
b
h
o
o
k
s
 
y
o
u
 
c
r
e
a
t
e
 
w
i
l
l
 
n
o
t
 
b
e
 
t
r
i
g
g
e
r
e
d
 
a
s
 
y
o
u
 
a
r
e
 
n
o
t
 
a
s
s
i
g
n
e
d
 
t
o
 
a
n
y
 
p
r
o
p
e
r
t
i
e
s
.
 
S
u
p
e
r
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
a
r
e
 
n
o
t
 
t
y
p
i
c
a
l
l
y
 
a
s
s
i
g
n
e
d
 
i
n
d
i
v
i
d
u
a
l
 
p
r
o
p
e
r
t
i
e
s
,
 
s
o
 
y
o
u
 
m
a
y
 
n
e
e
d
 
a
 
n
e
w
 
u
s
e
r
 
f
o
r
 
w
e
b
h
o
o
k
 
c
r
e
a
t
i
o
n
.
'
 
)
;

j
r
_
d
e
f
i
n
e
(
 
'
W
E
B
H
O
O
K
S
_
M
A
N
A
G
E
R
_
P
R
O
P
E
R
T
I
E
S
_
A
S
S
I
G
N
E
D
_
D
E
S
C
'
,
 
'
A
n
y
 
w
e
b
h
o
o
k
s
 
y
o
u
 
c
r
e
a
t
e
 
w
i
l
l
 
b
e
 
t
r
i
g
g
e
r
e
d
 
a
g
a
i
n
s
t
 
t
h
e
 
f
o
l
l
o
w
i
n
g
 
p
r
o
p
e
r
t
i
e
s
 
:
 
'
 
)
;



j
r
_
d
e
f
i
n
e
(
 
'
P
O
R
T
A
L
_
R
E
V
I
E
W
S
_
L
I
M
I
T
'
,
 
'
R
e
v
i
e
w
s
 
l
i
m
i
t
'
 
)
;

j
r
_
d
e
f
i
n
e
(
 
'
P
O
R
T
A
L
_
R
E
V
I
E
W
S
_
L
I
M
I
T
_
D
E
S
C
'
,
 
'
U
s
e
 
t
h
i
s
 
s
e
t
t
i
n
g
 
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
 
n
u
m
b
e
r
 
o
f
 
r
e
v
i
e
w
s
 
s
h
o
w
n
 
i
n
 
t
h
e
 
p
r
o
p
e
r
t
y
 
d
e
t
a
i
l
s
 
p
a
g
e
.
'
 
)
;

j
r
_
d
e
f
i
n
e
(
 
'
P
O
R
T
A
L
_
R
E
V
I
E
W
S
_
S
H
O
W
_
A
L
L
_
R
E
V
I
E
W
S
'
,
 
'
S
h
o
w
 
a
l
l
 
r
e
v
i
e
w
s
'
 
)
;


j
r
_
d
e
f
i
n
e
(
 
'
V
I
D
E
O
_
T
U
T
O
R
I
A
L
S
'
,
 
'
V
i
d
e
o
 
T
u
t
o
r
i
a
l
s
'
 
)
;


j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
M
I
N
I
M
U
M
_
D
E
P
O
S
I
T
_
V
A
L
U
E
'
,
 
'
M
i
n
i
m
u
m
 
d
e
p
o
s
i
t
 
v
a
l
u
e
'
 
)
;

j
r
_
d
e
f
i
n
e
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
C
O
M
_
A
_
M
I
N
I
M
U
M
_
D
E
P
O
S
I
T
_
V
A
L
U
E
_
D
E
S
C
'
,
 
"
I
f
 
t
h
e
 
c
a
l
c
u
l
a
t
e
d
 
d
e
p
o
s
i
t
 
i
s
 
l
e
s
s
 
t
h
a
n
 
t
h
i
s
 
f
i
g
u
r
e
,
 
t
h
e
n
 
s
e
t
 
d
e
p
o
s
i
t
 
t
o
 
t
h
i
s
 
v
a
l
u
e
 
i
n
s
t
e
a
d
.
 
T
h
i
s
 
f
i
g
u
r
e
 
m
i
g
h
t
 
i
t
s
e
l
f
 
b
e
 
o
v
e
r
-
r
i
d
d
e
n
 
i
f
 
i
t
 
d
o
e
s
 
n
o
t
 
s
a
t
i
s
f
y
 
t
h
e
 
s
i
t
e
'
s
 
m
i
n
i
m
u
m
 
d
e
p
o
s
i
t
 
s
e
t
t
i
n
g
.
 
L
e
a
v
e
 
i
t
 
s
e
t
 
t
o
 
0
 
t
o
 
n
o
t
 
u
s
e
 
t
h
e
 
s
e
t
t
i
n
g
.
"
 
)
;


j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
D
B
I
M
P
O
R
T
_
W
A
R
N
I
N
G
'
,
 
'
T
o
 
i
n
c
r
e
a
s
e
 
y
o
u
r
 
s
i
t
e
 
s
p
e
e
d
,
 
w
e
 
r
e
c
o
m
m
e
n
d
 
i
m
p
o
r
t
i
n
g
 
d
e
t
a
i
l
s
 
o
f
 
t
h
e
 
e
x
i
s
t
i
n
g
 
s
i
t
e
 
a
n
d
 
p
r
o
p
e
r
t
i
e
s
 
i
m
a
g
e
s
 
t
o
 
d
a
t
a
b
a
s
e
.
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
D
B
I
M
P
O
R
T
_
A
C
T
I
O
N
'
,
 
'
I
m
p
o
r
t
 
e
x
i
s
t
i
n
g
 
i
m
a
g
e
s
 
d
e
t
a
i
l
s
 
t
o
 
d
a
t
a
b
a
s
e
'
)
;


j
r
_
d
e
f
i
n
e
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
S
3
_
A
C
T
I
V
E
_
D
E
S
C
'
,
 
'
E
x
p
e
r
i
m
e
n
t
a
l
 
f
e
a
t
u
r
e
.
 
I
f
 
e
n
a
b
l
e
d
,
 
i
m
a
g
e
s
 
u
p
l
o
a
d
e
d
 
u
s
i
n
g
 
t
h
e
 
m
e
d
i
a
 
c
e
n
t
r
e
 
f
e
a
t
u
r
e
 
w
i
l
l
 
a
l
s
o
 
b
e
 
c
o
p
i
e
d
 
t
o
 
y
o
u
r
 
A
m
a
z
o
n
 
S
3
 
b
u
c
k
e
t
 
a
n
d
 
s
e
r
v
e
d
 
f
r
o
m
 
y
o
u
r
 
A
m
a
z
o
n
 
S
3
 
b
u
c
k
e
t
 
u
r
l
.
 
W
h
e
n
 
e
n
a
b
l
i
n
g
 
t
h
i
s
 
t
h
e
 
f
i
r
s
t
 
t
i
m
e
,
 
y
o
u
`
l
l
 
a
l
s
o
 
b
e
 
p
r
o
m
t
e
d
 
t
o
 
i
m
p
o
r
t
 
e
x
i
s
t
i
n
g
 
i
m
a
g
e
s
 
t
o
 
y
o
u
r
 
S
3
 
b
u
c
k
e
t
.
'
)
;

j
r
_
d
e
f
i
n
e
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
C
L
O
U
D
F
R
O
N
T
_
D
M
A
I
N
'
,
 
'
C
l
o
u
d
F
r
o
n
t
 
d
o
m
a
i
n
'
)
;

j
r
_
d
e
f
i
n
e
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
C
L
O
U
D
F
R
O
N
T
_
D
M
A
I
N
_
D
E
S
C
'
,
 
'
R
e
p
l
a
c
e
 
y
o
u
r
 
d
e
f
a
u
l
t
 
A
m
a
z
o
n
 
S
3
 
d
o
m
a
i
n
 
w
i
t
h
 
y
o
u
r
 
C
l
o
u
d
F
r
o
n
t
 
d
o
m
a
i
n
'
)
;

j
r
_
d
e
f
i
n
e
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
S
3
_
S
S
L
T
L
S
_
D
E
S
C
'
,
 
'
R
e
c
o
m
m
e
n
d
e
d
 
t
o
 
b
e
 
e
n
a
b
l
e
d
.
 
F
o
r
 
W
i
n
d
o
w
s
 
a
n
d
 
M
a
c
 
O
S
X
 
o
n
l
y
,
 
i
f
 
l
i
b
c
u
r
l
 
w
a
s
n
`
t
 
b
u
i
l
t
 
w
i
t
h
 
S
c
h
a
n
n
e
l
 
o
r
 
S
e
c
u
r
e
 
T
r
a
n
s
p
o
r
t
 
s
u
p
p
o
r
t
 
(
t
h
e
 
n
a
t
i
v
e
 
S
S
L
 
l
i
b
r
a
r
i
e
s
 
i
n
c
l
u
d
e
d
 
i
n
 
W
i
n
d
o
w
s
 
a
n
d
 
M
a
c
 
O
S
 
X
)
,
 
y
o
u
 
s
h
o
u
l
d
 
s
e
t
 
t
h
i
s
 
t
o
 
N
o
.
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
S
3
I
M
P
O
R
T
_
W
A
R
N
I
N
G
'
,
 
'
Y
o
u
`
v
e
 
e
n
a
b
l
e
d
 
t
h
e
 
A
m
a
z
o
n
 
S
3
 
i
n
t
e
g
r
a
t
i
o
n
,
 
s
o
 
y
o
u
`
l
l
 
h
a
v
e
 
t
o
 
c
o
p
y
 
a
l
l
 
e
x
i
s
t
i
n
g
 
i
m
a
g
e
s
 
t
o
 
y
o
u
r
 
S
3
 
b
u
c
k
e
t
.
 
I
m
a
g
e
s
 
a
r
e
 
n
o
w
 
s
e
r
v
e
d
 
t
o
 
y
o
u
r
 
s
i
t
e
 
v
i
s
i
t
o
r
s
 
f
r
o
m
 
y
o
u
r
 
A
m
a
z
o
n
 
S
3
 
u
r
l
,
 
s
o
 
y
o
u
`
l
l
 
n
e
e
d
 
t
o
 
c
o
p
y
 
t
h
e
m
 
f
i
r
s
t
 
t
o
 
y
o
u
r
 
S
3
 
b
u
c
k
e
t
,
 
o
t
h
e
r
w
i
s
e
 
t
h
e
y
 
w
o
n
`
t
 
b
e
 
v
i
s
i
b
l
e
 
t
o
 
y
o
u
r
 
s
i
t
e
 
v
i
s
i
t
o
r
s
.
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
S
3
I
M
P
O
R
T
_
W
A
R
N
I
N
G
2
'
,
 
'
O
n
c
e
 
y
o
u
 
c
l
i
c
k
 
t
h
i
s
 
b
u
t
t
o
n
,
 
p
l
e
a
s
e
 
d
o
 
n
o
t
 
i
n
t
e
r
r
u
p
t
 
t
h
e
 
p
r
o
c
e
s
s
 
a
n
d
 
w
a
i
t
 
f
o
r
 
a
 
s
u
c
c
e
s
s
 
o
r
 
e
r
r
o
r
 
m
e
s
s
a
g
e
.
 
D
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
 
s
e
r
v
e
r
 
s
p
e
e
d
,
 
t
h
i
s
 
m
a
y
 
t
a
k
e
 
a
 
w
h
i
l
e
 
t
o
 
c
o
m
p
l
e
t
e
.
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
S
3
I
M
P
O
R
T
_
A
C
T
I
O
N
'
,
 
'
C
o
p
y
 
e
x
i
s
t
i
n
g
 
i
m
a
g
e
s
 
t
o
 
A
m
a
z
o
n
 
S
3
 
b
u
c
k
e
t
'
)
;



j
r
_
d
e
f
i
n
e
(
 
'
J
O
M
R
E
S
_
I
N
C
O
M
P
L
E
T
E
'
,
 
'
I
n
c
o
m
p
l
e
t
e
'
 
)
;

j
r
_
d
e
f
i
n
e
(
 
'
J
O
M
R
E
S
_
W
A
T
I
N
G
_
A
P
P
R
O
V
A
L
'
,
 
'
P
e
n
d
i
n
g
 
a
p
p
r
o
v
a
l
'
 
)
;

j
r
_
d
e
f
i
n
e
(
 
'
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
S
_
P
D
E
T
A
I
L
S
'
,
 
'
P
r
o
p
e
r
t
y
 
d
e
t
a
i
l
s
 
m
a
p
'
 
)
;


j
r
_
d
e
f
i
n
e
(
 
'
H
A
S
_
S
T
A
R
S
_
T
I
T
L
E
'
,
 
'
A
l
l
o
w
s
 
s
t
a
r
s
 
c
l
a
s
s
i
f
i
c
a
t
i
o
n
?
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
D
B
I
M
P
O
R
T
_
F
O
R
C
E
'
,
 
'
F
o
r
c
e
 
r
e
i
m
p
o
r
t
 
i
m
a
g
e
 
d
e
t
a
i
l
s
 
t
o
 
d
a
t
a
b
a
s
e
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
S
3
I
M
P
O
R
T
_
F
O
R
C
E
'
,
 
'
F
o
r
c
e
 
r
e
u
p
l
o
a
d
 
i
m
a
g
e
s
 
t
o
 
S
3
 
b
u
c
k
e
t
'
)
;

j
r
_
d
e
f
i
n
e
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
U
N
I
N
S
T
A
L
L
_
T
A
B
L
E
S
'
,
 
'
D
e
l
e
t
e
 
a
l
l
 
J
o
m
r
e
s
 
d
a
t
a
 
w
h
e
n
 
u
n
i
n
s
t
a
l
l
i
n
g
?
'
)
;

j
r
_
d
e
f
i
n
e
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
U
N
I
N
S
T
A
L
L
_
T
A
B
L
E
S
_
D
E
S
C
'
,
 
'
I
f
 
s
e
t
 
t
o
 
y
e
s
,
 
J
o
m
r
e
s
 
w
i
l
l
 
d
e
l
e
t
e
 
a
l
l
 
i
t
`
s
 
d
a
t
a
b
a
s
e
 
t
a
b
l
e
s
 
w
h
e
n
 
u
n
i
n
s
t
a
l
l
e
d
.
 
T
h
i
s
 
w
i
l
l
 
d
e
l
e
t
e
 
a
l
l
 
J
o
m
r
e
s
 
d
a
t
a
 
f
r
o
m
 
d
b
 
a
n
d
 
c
a
n
`
t
 
b
e
 
u
n
d
o
n
e
.
'
)
;


j
r
_
d
e
f
i
n
e
(
 
'
T
R
A
N
S
A
C
T
I
O
N
_
I
D
S
'
,
 
'
T
r
a
n
s
a
c
t
i
o
n
 
i
d
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
P
A
Y
M
E
N
T
_
M
E
T
H
O
D
'
,
 
'
P
a
y
m
e
n
t
 
m
e
t
h
o
d
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
P
O
A
_
D
I
S
P
L
A
Y
_
P
R
I
C
E
'
,
 
'
P
O
A
 
P
r
i
c
e
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
P
O
A
_
D
I
S
P
L
A
Y
_
P
R
I
C
E
_
D
E
S
C
'
,
 
'
W
h
e
n
 
p
r
o
p
e
r
t
i
e
s
 
a
r
e
 
s
h
o
w
n
 
i
n
 
a
 
l
i
s
t
,
 
t
h
e
 
s
y
s
t
e
m
 
w
i
l
l
 
a
t
t
e
m
p
t
 
t
o
 
f
i
n
d
 
a
 
v
a
l
i
d
 
p
r
i
c
e
 
f
r
o
m
 
c
o
n
f
i
g
u
r
e
d
 
t
a
r
i
f
f
s
 
b
a
s
e
d
 
o
n
 
e
i
t
h
e
r
 
t
o
d
a
y
\
'
s
 
d
a
t
e
,
 
o
r
 
i
f
 
d
a
t
e
s
 
w
e
r
e
 
u
s
e
d
 
i
n
 
a
 
s
e
a
r
c
h
,
 
t
h
e
n
 
b
a
s
e
d
 
o
n
 
t
h
o
s
e
 
d
a
t
e
s
.
 
I
f
 
i
t
 
c
a
n
n
o
t
,
 
t
h
e
n
 
i
t
 
w
i
l
l
 
s
h
o
w
 
P
O
A
 
(
P
r
i
c
e
 
o
n
 
a
p
p
l
i
c
a
t
i
o
n
)
,
 
m
e
a
n
i
n
g
 
t
h
a
t
 
t
h
e
 
g
u
e
s
t
 
s
h
o
u
l
d
 
c
o
n
t
a
c
t
 
y
o
u
 
t
o
 
g
e
t
 
a
 
p
r
i
c
e
.
 
I
f
 
y
o
u
 
w
a
n
t
,
 
y
o
u
 
c
a
n
 
c
o
n
f
i
g
u
r
e
 
a
 
p
r
i
c
e
 
h
e
r
e
 
t
h
a
t
 
w
i
l
l
 
b
e
 
s
h
o
w
n
 
i
n
s
t
e
a
d
 
o
f
 
t
h
e
 
P
O
A
 
t
e
x
t
.
 
T
h
i
s
 
f
i
g
u
r
e
 
w
o
u
l
d
 
b
e
 
a
 
"
f
a
l
l
b
a
c
k
"
 
p
r
i
c
e
 
t
o
 
d
i
s
p
l
a
y
 
i
f
 
n
o
 
o
t
h
e
r
 
p
r
i
c
e
 
c
a
n
 
b
e
 
d
e
t
e
r
m
i
n
e
d
.
'
)
;


j
r
_
d
e
f
i
n
e
(
 
'
P
L
U
G
I
N
M
A
N
A
G
E
R
_
I
N
S
T
A
L
L
'
,
 
'
Y
o
u
 
n
e
e
d
 
t
o
 
i
n
s
t
a
l
l
 
t
h
e
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
 
b
e
f
o
r
e
 
y
o
u
 
c
a
n
 
i
n
s
t
a
l
l
 
J
o
m
r
e
s
 
p
l
u
g
i
n
s
,
 
w
o
u
l
d
 
y
o
u
 
l
i
k
e
 
t
o
 
d
o
 
t
h
a
t
 
n
o
w
?
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
P
L
U
G
I
N
M
A
N
A
G
E
R
_
R
E
I
N
S
T
A
L
L
'
,
 
'
Y
o
u
 
n
e
e
d
 
t
o
 
u
p
d
a
t
e
 
t
h
e
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
 
b
e
f
o
r
e
 
y
o
u
 
c
a
n
 
u
p
d
a
t
e
 
a
n
y
 
i
n
s
t
a
l
l
e
d
 
p
l
u
g
i
n
s
,
 
w
o
u
l
d
 
y
o
u
 
l
i
k
e
 
t
o
 
d
o
 
t
h
a
t
 
n
o
w
?
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
P
L
U
G
I
N
M
A
N
A
G
E
R
_
I
N
S
T
A
L
L
_
B
U
T
T
O
N
'
,
 
"
L
e
t
'
s
 
d
o
 
t
h
i
s
!
"
)
;


j
r
_
d
e
f
i
n
e
(
 
'
I
N
C
L
U
D
E
I
N
F
I
L
T
E
R
S
'
,
 
'
I
n
c
l
u
d
e
 
i
n
 
f
i
l
t
e
r
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
I
N
C
L
U
D
E
I
N
F
I
L
T
E
R
S
_
D
E
S
C
'
,
 
'
P
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
f
i
l
t
e
r
s
 
i
n
 
A
j
a
x
 
C
o
m
p
o
s
i
t
e
 
S
e
a
r
c
h
 
c
a
n
 
b
e
c
o
m
e
 
v
e
r
y
 
l
o
n
g
,
 
s
o
 
y
o
u
 
c
a
n
 
s
e
t
 
t
h
i
s
 
o
p
t
i
o
n
 
t
o
 
N
o
 
t
o
 
p
r
e
v
e
n
t
 
t
h
i
s
 
f
e
a
t
u
r
e
 
f
r
o
m
 
s
h
o
w
i
n
g
 
i
n
 
t
h
e
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
l
i
s
t
.
'
)
;


j
r
_
d
e
f
i
n
e
(
 
'
R
E
V
I
E
W
_
R
E
M
I
N
D
E
R
_
P
T
1
'
,
 
"
Y
o
u
 
h
a
v
e
 
"
)
;

j
r
_
d
e
f
i
n
e
(
 
'
R
E
V
I
E
W
_
R
E
M
I
N
D
E
R
_
P
T
2
'
,
 
"
 
b
o
o
k
i
n
g
(
s
)
 
t
h
a
t
 
y
o
u
 
h
a
v
e
 
n
o
t
 
l
e
f
t
 
a
 
r
e
v
i
e
w
 
f
o
r
 
y
e
t
.
 
P
l
e
a
s
e
 
l
e
a
v
e
 
a
 
r
e
v
i
e
w
.
"
)
;

j
r
_
d
e
f
i
n
e
(
 
'
B
O
O
K
I
N
G
S
_
A
W
A
I
T
I
N
G
_
R
E
V
I
E
W
S
'
,
 
"
B
o
o
k
i
n
g
s
 
w
a
i
t
i
n
g
 
f
o
r
 
r
e
v
i
e
w
s
"
)
;

j
r
_
d
e
f
i
n
e
(
 
'
R
E
V
I
E
W
_
N
A
G
'
,
 
"
N
a
g
 
g
u
e
s
t
s
 
f
o
r
 
r
e
v
i
e
w
s
?
"
)
;

j
r
_
d
e
f
i
n
e
(
 
'
R
E
V
I
E
W
_
N
A
G
_
D
E
S
C
'
,
 
"
O
n
c
e
 
a
 
g
u
e
s
t
 
h
a
s
 
b
e
e
n
 
b
o
o
k
e
d
 
o
u
t
 
f
r
o
m
 
a
 
b
o
o
k
i
n
g
,
 
t
h
e
 
s
y
s
t
e
m
 
w
i
l
l
 
r
e
m
i
n
d
 
t
h
e
m
 
t
o
 
p
o
s
t
 
a
 
r
e
v
i
e
w
 
f
o
r
 
t
h
e
i
r
 
b
o
o
k
i
n
g
.
 
S
e
t
 
t
h
i
s
 
o
p
t
i
o
n
 
t
o
 
N
o
 
t
o
 
d
i
s
a
b
l
e
 
t
h
i
s
 
r
e
m
i
n
d
e
r
.
"
)
;


j
r
_
d
e
f
i
n
e
(
 
'
S
E
N
D
_
E
M
A
I
L
_
C
O
P
I
E
S
_
T
O
_
S
I
T
E
_
A
D
M
I
N
S
_
T
I
T
L
E
'
,
 
"
S
e
n
d
 
c
o
p
i
e
s
 
o
f
 
t
h
e
 
b
o
o
k
i
n
g
 
e
m
a
i
l
s
 
t
o
 
s
i
t
e
 
a
d
m
i
n
s
?
"
)
;

j
r
_
d
e
f
i
n
e
(
 
'
S
E
N
D
_
E
M
A
I
L
_
C
O
P
I
E
S
_
T
O
_
S
I
T
E
_
A
D
M
I
N
S
_
D
E
S
C
'
,
 
"
W
h
e
n
 
e
n
a
b
l
e
d
,
 
c
o
p
i
e
s
 
o
f
 
t
h
e
 
b
o
o
k
i
n
g
 
e
m
a
i
l
s
 
s
e
n
t
 
t
o
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
w
i
l
l
 
b
e
 
s
e
n
t
 
t
o
 
a
l
l
 
s
i
t
e
 
a
d
m
i
n
s
 
t
o
o
.
"
)
;


j
r
_
d
e
f
i
n
e
(
 
'
H
I
D
D
E
N
_
A
D
D
R
E
S
S
_
S
E
T
T
I
N
G
'
,
 
"
H
i
d
e
 
a
d
d
r
e
s
s
?
"
)
;

j
r
_
d
e
f
i
n
e
(
 
'
H
I
D
D
E
N
_
A
D
D
R
E
S
S
_
S
E
T
T
I
N
G
_
D
E
S
C
'
,
 
"
I
f
 
y
o
u
 
s
e
t
 
t
h
i
s
 
o
p
t
i
o
n
 
t
o
 
Y
e
s
,
 
t
h
e
n
 
o
n
l
y
 
g
u
e
s
t
s
 
w
h
o
 
h
a
v
e
 
a
l
r
e
a
d
y
 
p
l
a
c
e
d
 
a
 
b
o
o
k
i
n
g
 
o
n
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
s
e
e
 
t
h
e
 
p
r
o
p
e
r
t
y
 
s
t
r
e
e
t
 
a
d
d
r
e
s
s
.
 
Y
o
u
 
m
i
g
h
t
 
w
a
n
t
 
t
o
 
u
s
e
 
t
h
i
s
 
s
e
t
t
i
n
g
 
t
o
 
h
i
d
e
 
t
h
e
 
p
r
o
p
e
r
t
y
'
s
 
e
x
a
c
t
 
l
o
c
a
t
i
o
n
 
i
f
,
 
f
o
r
 
e
x
a
m
p
l
e
,
 
i
t
 
i
s
 
r
o
u
t
i
n
e
l
y
 
l
e
f
t
 
u
n
a
t
t
e
n
d
e
d
.
"
)
;

j
r
_
d
e
f
i
n
e
(
 
'
H
I
D
D
E
N
_
A
D
D
R
E
S
S
_
P
L
A
C
E
H
O
L
D
E
R
'
,
 
"
H
I
D
D
E
N
"
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
O
P
T
I
M
I
Z
E
_
I
M
A
G
E
S
'
,
 
'
O
p
t
i
m
i
z
e
 
i
m
a
g
e
s
 
o
n
 
u
p
l
o
a
d
?
'
)
;

j
r
_
d
e
f
i
n
e
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
M
E
D
I
A
_
C
E
N
T
R
E
_
O
P
T
I
M
I
Z
E
_
I
M
A
G
E
S
_
D
E
S
C
'
,
 
'
W
h
e
n
 
e
n
a
b
l
e
d
,
 
i
m
a
g
e
s
 
w
i
l
l
 
b
e
 
o
p
t
i
m
i
z
e
d
 
f
o
r
 
w
e
b
 
(
f
i
l
e
 
s
i
z
e
 
c
a
n
 
b
e
 
u
p
 
t
o
 
7
5
%
 
s
m
a
l
l
e
r
)
.
 
D
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
 
u
p
l
o
a
d
e
d
 
i
m
a
g
e
 
t
y
p
e
,
 
y
o
u
r
 
s
e
r
v
e
r
 
n
e
e
d
s
 
t
o
 
h
a
v
e
 
o
n
e
 
o
r
 
m
o
r
e
 
o
f
 
t
h
e
s
e
 
l
i
b
r
a
r
i
e
s
 
i
n
s
t
a
l
l
e
d
 
b
y
 
t
h
e
 
h
o
s
t
i
n
g
 
p
r
o
v
i
d
e
r
:
 
o
p
t
i
p
n
g
,
 
p
n
g
q
u
a
n
t
,
 
p
n
g
c
r
u
s
h
,
 
p
n
g
o
u
t
,
 
a
d
v
p
n
g
,
 
j
p
e
g
t
r
a
n
,
 
j
p
e
g
o
p
t
i
m
,
 
g
i
f
s
i
c
l
e
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
D
A
T
A
B
A
S
E
_
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
'
,
 
'
D
a
t
a
b
a
s
e
 
I
n
t
e
g
r
i
t
y
 
C
h
e
c
k
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
O
B
S
O
L
E
T
E
_
F
I
L
E
S
_
C
H
E
C
K
'
,
 
'
O
b
s
o
l
e
t
e
 
F
i
l
e
s
 
C
h
e
c
k
'
)
;

