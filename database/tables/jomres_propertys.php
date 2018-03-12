
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
p
r
o
p
e
r
t
y
s
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
p
r
o
p
e
r
t
y
_
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
p
r
o
p
e
r
t
y
_
s
t
r
e
e
t
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
r
o
p
e
r
t
y
_
t
o
w
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
p
r
o
p
e
r
t
y
_
r
e
g
i
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
o
u
n
t
r
y
`
 
C
H
A
R
(
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
 
'
G
B
'
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
p
o
s
t
c
o
d
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
p
r
o
p
e
r
t
y
_
t
e
l
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
r
o
p
e
r
t
y
_
f
a
x
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
r
o
p
e
r
t
y
_
e
m
a
i
l
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
r
o
p
e
r
t
y
_
f
e
a
t
u
r
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
p
r
o
p
e
r
t
y
_
m
a
p
p
i
n
g
l
i
n
k
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
0
0
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
`
 
T
E
X
T
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
c
h
e
c
k
i
n
_
t
i
m
e
s
`
 
T
E
X
T
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
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
`
T
E
X
T
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
d
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
`
 
T
E
X
T
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
a
i
r
p
o
r
t
s
`
 
T
E
X
T
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
o
t
h
e
r
t
r
a
n
s
p
o
r
t
`
 
T
E
X
T
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
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
`
T
E
X
T
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
p
u
b
l
i
s
h
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
t
a
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
s
u
p
e
r
i
o
r
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
p
t
y
p
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
a
p
i
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
l
a
t
`
 
V
A
R
C
H
A
R
(
1
2
)
,

	
`
l
o
n
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
1
2
)
,

	
`
m
e
t
a
t
i
t
l
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
1
5
0
)
,

	
`
m
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
`
 
V
A
R
C
H
A
R
(
1
5
0
)
,

	
`
m
e
t
a
k
e
y
w
o
r
d
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
 
1
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
s
i
t
e
_
i
d
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
p
e
r
m
i
t
_
n
u
m
b
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
,

	
`
c
o
m
p
l
e
t
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
a
t
_
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
p
r
o
p
e
r
t
y
s
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
t
o
w
n
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
t
o
w
n
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
r
e
g
i
o
n
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
r
e
g
i
o
n
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
c
o
u
n
t
r
y
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
c
o
u
n
t
r
y
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
u
b
l
i
s
h
e
d
`
 
(
`
p
u
b
l
i
s
h
e
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
t
y
p
e
_
i
d
`
 
(
`
p
t
y
p
e
_
i
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

