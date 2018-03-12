
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
7
 
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


$
q
u
e
r
y
 
=
 
"

C
R
E
A
T
E
 
T
A
B
L
E
 
I
F
 
N
O
T
 
E
X
I
S
T
S
 
`
#
_
_
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
t
r
a
c
t
s
`
 
(

	
`
c
o
n
t
r
a
c
t
_
u
i
d
`
 
I
N
T
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
A
U
T
O
_
I
N
C
R
E
M
E
N
T
,

	
`
a
r
r
i
v
a
l
`
 
C
H
A
R
(
1
0
)
,

	
`
d
e
p
a
r
t
u
r
e
`
 
C
H
A
R
(
1
0
)
,

	
`
r
a
t
e
s
_
u
i
d
`
 
I
N
T
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
g
u
e
s
t
_
u
i
d
`
 
I
N
T
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
r
a
t
e
_
r
u
l
e
s
`
 
T
E
X
T
,

	
`
r
o
o
m
s
_
t
a
r
i
f
f
s
`
 
V
A
R
C
H
A
R
(
2
5
5
)
,

	
`
d
e
p
o
s
i
t
_
p
a
i
d
`
 
T
I
N
Y
I
N
T
(
1
)
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
c
o
n
t
r
a
c
t
_
t
o
t
a
l
`
 
D
O
U
B
L
E
(
1
1
,
2
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
d
e
p
o
s
i
t
_
r
e
f
`
 
V
A
R
C
H
A
R
(
2
5
5
)
,

	
`
p
a
y
m
e
n
t
_
r
e
f
`
 
V
A
R
C
H
A
R
(
2
5
5
)
,

	
`
s
p
e
c
i
a
l
_
r
e
q
s
`
 
T
E
X
T
,

	
`
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
`
 
D
O
U
B
L
E
(
1
1
,
2
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
n
e
w
s
l
e
t
t
e
r
s
`
 
T
I
N
Y
I
N
T
(
1
)
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
c
u
r
r
e
n
c
y
`
 
C
H
A
R
(
3
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
'
G
B
P
'
,

	
`
a
d
u
l
t
s
`
 
I
N
T
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
c
h
i
l
d
r
e
n
`
 
I
N
T
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
d
a
t
e
_
r
a
n
g
e
_
s
t
r
i
n
g
`
 
T
E
X
T
,

	
`
b
o
o
k
e
d
_
i
n
`
 
T
I
N
Y
I
N
T
(
1
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
b
o
o
k
e
d
_
o
u
t
`
 
T
I
N
Y
I
N
T
(
1
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
t
r
u
e
_
a
r
r
i
v
a
l
`
 
C
H
A
R
(
1
0
)
,

	
`
p
r
o
p
e
r
t
y
_
u
i
d
`
 
I
N
T
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
c
o
t
_
r
e
q
u
i
r
e
d
`
 
T
I
N
Y
I
N
T
(
1
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
`
 
D
O
U
B
L
E
(
1
1
,
2
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
m
u
l
t
i
_
r
o
o
m
_
b
o
o
k
i
n
g
`
 
T
I
N
Y
I
N
T
(
1
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
e
x
t
r
a
s
`
 
V
A
R
C
H
A
R
(
2
5
5
)
,

	
`
e
x
t
r
a
s
q
u
a
n
t
i
t
i
e
s
`
 
V
A
R
C
H
A
R
(
2
5
5
)
,

	
`
e
x
t
r
a
s
v
a
l
u
e
`
 
D
O
U
B
L
E
(
1
1
,
2
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
t
a
x
`
 
D
O
U
B
L
E
(
1
1
,
 
2
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
t
a
g
`
 
V
A
R
C
H
A
R
(
2
5
5
)
,

	
`
t
i
m
e
s
t
a
m
p
`
 
D
A
T
E
T
I
M
E
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
,

	
`
r
o
o
m
_
t
o
t
a
l
`
 
D
O
U
B
L
E
(
1
1
,
2
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
d
i
s
c
o
u
n
t
`
 
D
O
U
B
L
E
(
1
1
,
2
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
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
`
 
C
H
A
R
(
3
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
'
G
B
P
'
,

	
`
c
a
n
c
e
l
l
e
d
`
 
T
I
N
Y
I
N
T
(
1
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
c
a
n
c
e
l
l
e
d
_
t
i
m
e
s
t
a
m
p
`
 
D
A
T
E
T
I
M
E
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
,

	
`
c
a
n
c
e
l
l
e
d
_
r
e
a
s
o
n
`
 
V
A
R
C
H
A
R
(
2
5
5
)
,

	
`
d
i
s
c
o
u
n
t
_
d
e
t
a
i
l
s
`
 
T
E
X
T
,

	
`
u
s
e
r
n
a
m
e
`
 
V
A
R
C
H
A
R
(
2
5
5
)
,

	
`
c
o
u
p
o
n
_
i
d
`
 
I
N
T
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
b
o
o
k
e
d
o
u
t
`
 
T
I
N
Y
I
N
T
(
1
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
b
o
o
k
e
d
o
u
t
_
t
i
m
e
s
t
a
m
p
`
 
D
A
T
E
T
I
M
E
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
,

	
`
i
n
v
o
i
c
e
_
u
i
d
`
 
I
N
T
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
c
h
a
n
n
e
l
_
m
a
n
a
g
e
r
_
b
o
o
k
i
n
g
`
 
T
I
N
Y
I
N
T
(
1
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
a
p
p
r
o
v
e
d
`
 
T
I
N
Y
I
N
T
(
1
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
1
,

	
`
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
_
i
d
`
 
I
N
T
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
s
e
c
r
e
t
_
k
e
y
`
 
V
A
R
C
H
A
R
(
2
5
5
)
,

	
`
s
e
c
r
e
t
_
k
e
y
_
u
s
e
d
`
 
T
I
N
Y
I
N
T
(
1
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
1
,

	
`
b
o
o
k
i
n
g
_
l
a
n
g
u
a
g
e
`
 
C
H
A
R
(
5
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
'
e
n
-
G
B
'
,

	
`
l
a
s
t
_
c
h
a
n
g
e
d
`
 
T
I
M
E
S
T
A
M
P
 
O
N
 
U
P
D
A
T
E
 
C
U
R
R
E
N
T
_
T
I
M
E
S
T
A
M
P
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
C
U
R
R
E
N
T
_
T
I
M
E
S
T
A
M
P
,

	
`
r
e
f
e
r
r
e
r
`
 
V
A
R
C
H
A
R
(
2
5
5
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
'
J
o
m
r
e
s
'
,

	
P
R
I
M
A
R
Y
 
K
E
Y
(
`
c
o
n
t
r
a
c
t
_
u
i
d
`
)
,

	
I
N
D
E
X
 
`
g
u
e
s
t
_
u
i
d
`
 
(
`
g
u
e
s
t
_
u
i
d
`
)
,

	
I
N
D
E
X
 
`
p
r
o
p
e
r
t
y
_
u
i
d
`
 
(
`
p
r
o
p
e
r
t
y
_
u
i
d
`
)
,

	
I
N
D
E
X
 
`
c
a
n
c
e
l
l
e
d
`
 
(
`
c
a
n
c
e
l
l
e
d
`
)

	
)

	
E
N
G
I
N
E
 
=
 
I
n
n
o
D
B
 

	
D
E
F
A
U
L
T
 
C
H
A
R
S
E
T
 
=
 
u
t
f
8
m
b
4
 

	
C
O
L
L
A
T
E
 
=
 
u
t
f
8
m
b
4
_
u
n
i
c
o
d
e
_
c
i
;

"
;


i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
)
)
 
{

	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
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
e
 
#
_
_
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
t
r
a
c
t
s
 
t
a
b
l
e
'
,
 
'
d
a
n
g
e
r
'
)
;

}

