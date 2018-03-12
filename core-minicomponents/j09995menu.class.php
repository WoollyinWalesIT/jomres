
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
 
j
0
9
9
9
5
m
e
n
u

{

 
 
 
 
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

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
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
.
 
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
s
 
w
i
t
h
 
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
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
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
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}

	
	

	
	
i
f
 
(
A
J
A
X
C
A
L
L
)
 
{

	
	
	
r
e
t
u
r
n
;

	
	
}

	
	

	
	
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
 
=
 
g
e
t
D
e
f
a
u
l
t
P
r
o
p
e
r
t
y
(
)
;

 
 
 
 
 
 
 
 

	
	
$
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
(
$
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
)
;

	
	

	
	
$
t
h
i
s
J
R
U
s
e
r
 
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
r
_
u
s
e
r
'
)
;

	
	

	
	
$
j
o
m
r
e
s
_
m
e
n
u
 
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
m
e
n
u
'
)
;


	
	
$
v
i
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
_
u
r
l
 
=
 
g
e
t
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
d
e
t
a
i
l
s
_
u
r
l
(
$
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
)
;

	
	
$
d
o
b
o
o
k
i
n
g
_
u
r
l
 
=
 
g
e
t
_
b
o
o
k
i
n
g
_
u
r
l
(
$
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
)
;

 
 
 
 
 
 
 
 

	
	
/
/
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
r
e
 
s
e
c
t
i
o
n
s

	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
s
e
c
t
i
o
n
(
1
,
 
j
r
_
g
e
t
t
e
x
t
(
'
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
 
f
a
l
s
e
)
)
;

	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
s
e
c
t
i
o
n
(
1
0
,
 
j
r
_
g
e
t
t
e
x
t
(
'
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
 
f
a
l
s
e
)
)
;

	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
s
e
c
t
i
o
n
(
2
0
,
 
j
r
_
g
e
t
t
e
x
t
(
'
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
 
f
a
l
s
e
)
)
;

	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
s
e
c
t
i
o
n
(
3
0
,
 
j
r
_
g
e
t
t
e
x
t
(
'
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
 
f
a
l
s
e
)
)
;

	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
s
e
c
t
i
o
n
(
4
0
,
 
j
r
_
g
e
t
t
e
x
t
(
'
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
 
f
a
l
s
e
)
)
;

	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
s
e
c
t
i
o
n
(
5
0
,
 
j
r
_
g
e
t
t
e
x
t
(
'
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
 
f
a
l
s
e
)
)
;

	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
s
e
c
t
i
o
n
(
6
0
,
 
j
r
_
g
e
t
t
e
x
t
(
'
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
 
f
a
l
s
e
)
)
;

	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
s
e
c
t
i
o
n
(
7
0
,
 
j
r
_
g
e
t
t
e
x
t
(
'
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
 
f
a
l
s
e
)
)
;

	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
s
e
c
t
i
o
n
(
8
0
,
 
j
r
_
g
e
t
t
e
x
t
(
'
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
 
f
a
l
s
e
)
)
;

	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
s
e
c
t
i
o
n
(
9
0
,
 
j
r
_
g
e
t
t
e
x
t
(
'
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
 
f
a
l
s
e
)
)
;

	
	

	
	
/
/
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
r
e
 
 
m
e
n
u
 
i
t
e
m
s

	
	
/
/
d
a
s
h
b
o
a
r
d
 
s
e
c
t
i
o
n
 
m
e
n
u
s

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
=
 
5
0
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
1
,
 
j
r
_
g
e
t
t
e
x
t
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
 
f
a
l
s
e
)
,
 
'
c
p
a
n
e
l
'
,
 
'
f
a
-
d
a
s
h
b
o
a
r
d
'
)
;

	
	
	

	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
!
=
 
'
1
'
)
 
{

	
	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
1
,
 
j
r
_
g
e
t
t
e
x
t
(
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
 
f
a
l
s
e
)
,
 
'
d
a
s
h
b
o
a
r
d
'
,
 
'
f
a
-
c
a
l
e
n
d
a
r
'
)
;

	
	
	
}

	
	
}

	
	

	
	
/
/
m
y
 
a
c
c
o
u
n
t
 
s
e
c
t
i
o
n
 
m
e
n
u
s

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
=
 
1
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
1
0
,
 
j
r
_
g
e
t
t
e
x
t
(
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
 
f
a
l
s
e
)
,
 
'
e
d
i
t
_
m
y
_
a
c
c
o
u
n
t
'
,
 
'
f
a
-
u
s
e
r
'
)
;

	
	
}

	
	

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
=
=
 
1
 
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
i
s
_
s
i
n
g
l
e
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
s
e
l
f
R
e
g
i
s
t
r
a
t
i
o
n
A
l
l
o
w
e
d
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
1
0
,
 
j
r
_
g
e
t
t
e
x
t
(
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
 
f
a
l
s
e
)
,
 
'
n
e
w
_
p
r
o
p
e
r
t
y
'
,
 
'
f
a
-
p
l
u
s
'
)
;

	
	
}

	
	

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
=
=
 
1
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
1
0
,
 
j
r
_
g
e
t
t
e
x
t
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
 
f
a
l
s
e
)
,
 
'
m
u
l
i
s
t
b
o
o
k
i
n
g
s
'
,
 
'
f
a
-
l
i
s
t
'
)
;

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
1
0
,
 
j
r
_
g
e
t
t
e
x
t
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
 
f
a
l
s
e
)
,
 
'
l
i
s
t
_
i
n
v
o
i
c
e
s
'
,
 
'
f
a
-
l
i
s
t
'
)
;

	
	
}

	
	

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
=
 
1
 
&
&
 
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
n
u
m
b
e
r
O
f
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
I
n
S
y
s
t
e
m
'
)
 
>
 
1
 
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
1
0
,
 
j
r
_
g
e
t
t
e
x
t
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
 
f
a
l
s
e
)
,
 
'
m
u
v
i
e
w
f
a
v
o
u
r
i
t
e
s
'
,
 
'
f
a
-
h
e
a
r
t
'
)
;

	
	
}

	
	

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
=
=
 
0
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
1
0
,
 
'
R
e
g
i
s
t
e
r
'
,
 
'
c
m
s
_
u
s
e
r
_
r
e
g
i
s
t
e
r
'
,
 
'
f
a
-
u
s
e
r
-
p
l
u
s
'
)
;

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
1
0
,
 
j
r
_
g
e
t
t
e
x
t
(
'
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
 
f
a
l
s
e
)
,
 
'
c
m
s
_
u
s
e
r
_
l
o
g
i
n
'
,
 
'
f
a
-
s
i
g
n
-
i
n
'
)
;

	
	
}

	
	

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
=
 
1
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
1
0
,
 
j
r
_
g
e
t
t
e
x
t
(
'
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
 
f
a
l
s
e
)
,
 
'
l
o
g
o
u
t
'
,
 
'
f
a
-
s
i
g
n
-
o
u
t
'
)
;

	
	
}

	
	

	
	
i
f
 
(
!
i
s
s
e
t
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
a
p
i
_
c
o
r
e
_
s
h
o
w
'
 
]
)
)

	
	
	
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
a
p
i
_
c
o
r
e
_
s
h
o
w
'
 
]
 
=
1
;

	
	

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
=
 
1
 
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
a
p
i
_
c
o
r
e
_
s
h
o
w
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
1
0
,
 
j
r
_
g
e
t
t
e
x
t
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
 
f
a
l
s
e
)
,
 
'
o
a
u
t
h
'
,
 
'
f
a
-
k
e
y
'
)
;

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
1
0
,
 
j
r
_
g
e
t
t
e
x
t
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
 
f
a
l
s
e
)
,
 
'
a
p
i
_
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
'
,
 
'
f
a
-
b
o
o
k
'
)
;

	
	
}

	
	

	
	
i
f
 
(
!
i
s
s
e
t
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
w
e
b
h
o
o
k
s
_
c
o
r
e
_
s
h
o
w
'
 
]
)
)

	
	
	
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
w
e
b
h
o
o
k
s
_
c
o
r
e
_
s
h
o
w
'
 
]
 
=
1
;

	
	

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
=
 
1
 
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
a
p
i
_
c
o
r
e
_
s
h
o
w
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
1
0
,
 
j
r
_
g
e
t
t
e
x
t
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
 
f
a
l
s
e
)
,
 
'
w
e
b
h
o
o
k
s
_
c
o
r
e
'
,
 
'
f
a
-
k
e
y
'
)
;

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
1
0
,
 
j
r
_
g
e
t
t
e
x
t
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
 
f
a
l
s
e
)
,
 
'
w
e
b
h
o
o
k
s
_
c
o
r
e
_
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
'
,
 
'
f
a
-
b
o
o
k
'
)
;

	
	
}

	
	

	
	
/
/
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
e
c
t
i
o
n
 
m
e
n
u
s

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
=
 
5
0
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
2
0
,
 
j
r
_
g
e
t
t
e
x
t
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
 
f
a
l
s
e
)
,
 
'
l
i
s
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
i
e
s
'
,
 
'
f
a
-
l
i
s
t
'
)
;

	
	
}


	
	
$
p
r
o
p
e
r
t
y
_
l
i
m
i
t
_
r
e
a
c
h
e
d
 
=
 
f
a
l
s
e
;

	
	
i
f
 
(
f
u
n
c
t
i
o
n
_
e
x
i
s
t
s
(
"
g
e
t
_
n
u
m
b
e
r
_
o
f
_
a
l
l
o
w
e
d
_
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
"
)
 
)
 
{

	
	
	
i
f
 
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
n
u
m
b
e
r
O
f
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
I
n
S
y
s
t
e
m
'
)
 
>
=
 
g
e
t
_
n
u
m
b
e
r
_
o
f
_
a
l
l
o
w
e
d
_
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
(
)
 
)
 
{

	
	
	
	
$
p
r
o
p
e
r
t
y
_
l
i
m
i
t
_
r
e
a
c
h
e
d
 
=
 
t
r
u
e
;

	
	
	
}

	
	
}

	
	

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
 
5
0
 
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
i
s
_
s
i
n
g
l
e
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
'
]
 
=
=
 
'
0
'
 
&
&
 
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
s
e
l
f
R
e
g
i
s
t
r
a
t
i
o
n
A
l
l
o
w
e
d
'
 
]
 
=
=
 
'
1
'
 
|
|
 
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
=
 
9
0
)
 
&
&
 
!
$
p
r
o
p
e
r
t
y
_
l
i
m
i
t
_
r
e
a
c
h
e
d
 
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
2
0
,
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
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
_
J
O
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
 
f
a
l
s
e
)
,
 
'
n
e
w
_
p
r
o
p
e
r
t
y
'
,
 
'
f
a
-
p
l
u
s
'
)
;

	
	
}


	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
=
 
5
0
)
 
{

	
	
	
i
f
 
(
$
v
i
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
_
u
r
l
)
 
{

	
	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
2
0
,
 
j
r
_
g
e
t
t
e
x
t
(
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
 
f
a
l
s
e
)
,
 
$
v
i
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
_
u
r
l
,
 
'
f
a
-
e
y
e
'
,
 
t
r
u
e
)
;

	
	
	
}

	
	
}

	
	

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
 
5
0
 
&
&
 
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
n
u
m
b
e
r
O
f
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
I
n
S
y
s
t
e
m
'
)
 
>
 
1
 
&
&
 
i
s
s
e
t
(
$
t
h
i
s
J
R
U
s
e
r
-
>
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
[
1
]
)
 
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
2
0
,
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
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
_
J
O
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
 
f
a
l
s
e
)
,
 
'
d
e
l
e
t
e
_
p
r
o
p
e
r
t
y
'
,
 
'
f
a
-
t
r
a
s
h
-
o
'
)
;

	
	
}

	
	

	
	
/
/
b
o
o
k
i
n
g
 
s
e
c
t
i
o
n
 
m
e
n
u
s

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
=
 
5
0
 
&
&
 
$
m
r
C
o
n
f
i
g
[
 
'
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
!
=
 
'
1
'
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
3
0
,
 
j
r
_
g
e
t
t
e
x
t
(
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
 
f
a
l
s
e
)
,
 
'
l
i
s
t
_
b
o
o
k
i
n
g
s
'
,
 
'
f
a
-
l
i
s
t
'
)
;

	
	
	

	
	
	
i
f
 
(
$
d
o
b
o
o
k
i
n
g
_
u
r
l
)
 
{

	
	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
3
0
,
 
j
r
_
g
e
t
t
e
x
t
(
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
 
f
a
l
s
e
)
,
 
$
d
o
b
o
o
k
i
n
g
_
u
r
l
,
 
'
f
a
-
p
l
u
s
'
,
 
t
r
u
e
)
;

	
	
	
}

	
	
}

	
	

	
	
/
/
g
u
e
s
t
s
 
s
e
c
t
i
o
n
 
m
e
n
u
s

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
=
 
5
0
 
&
&
 
$
m
r
C
o
n
f
i
g
[
 
'
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
!
=
 
'
1
'
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
4
0
,
 
j
r
_
g
e
t
t
e
x
t
(
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
 
f
a
l
s
e
)
,
 
'
l
i
s
t
_
g
u
e
s
t
s
'
,
 
'
f
a
-
l
i
s
t
'
)
;

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
4
0
,
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
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
_
J
O
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
 
f
a
l
s
e
)
,
 
'
e
d
i
t
_
g
u
e
s
t
'
,
 
'
f
a
-
p
l
u
s
'
)
;

	
	
}

	
	

	
	
/
/
i
n
v
o
i
c
e
s
 
s
e
c
t
i
o
n
 
m
e
n
u
s

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
=
 
5
0
 
&
&
 
$
m
r
C
o
n
f
i
g
[
 
'
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
!
=
 
'
1
'
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
5
0
,
 
j
r
_
g
e
t
t
e
x
t
(
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
 
f
a
l
s
e
)
,
 
'
l
i
s
t
_
i
n
v
o
i
c
e
s
'
,
 
'
f
a
-
l
i
s
t
'
)
;

	
	
}


	
	
/
/
r
e
p
o
r
t
s
 
s
e
c
t
i
o
n
 
m
e
n
u
s

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
 
5
0
 
&
&
 
$
m
r
C
o
n
f
i
g
[
 
'
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
!
=
 
'
1
'
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
6
0
,
 
j
r
_
g
e
t
t
e
x
t
(
'
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
 
f
a
l
s
e
)
,
 
'
c
h
a
r
t
s
'
,
 
'
f
a
-
l
i
n
e
-
c
h
a
r
t
'
)
;

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
6
0
,
 
j
r
_
g
e
t
t
e
x
t
(
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
 
f
a
l
s
e
)
,
 
'
w
e
e
k
l
y
_
o
c
c
u
p
a
n
c
y
_
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
s
'
,
 
'
f
a
-
p
e
r
c
e
n
t
'
)
;

	
	
}


	
	
/
/
m
i
s
c
 
s
e
c
t
i
o
n
 
m
e
n
u
s

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
=
 
5
0
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
7
0
,
 
j
r
_
g
e
t
t
e
x
t
(
'
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
 
f
a
l
s
e
)
,
 
'
s
e
a
r
c
h
'
,
 
'
f
a
-
s
e
a
r
c
h
'
)
;

	
	
}


	
	
/
/
s
e
t
t
i
n
g
s
 
s
e
c
t
i
o
n
 
m
e
n
u
s

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
 
5
0
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
8
0
,
 
j
r
_
g
e
t
t
e
x
t
(
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
 
f
a
l
s
e
)
,
 
'
e
d
i
t
_
p
r
o
p
e
r
t
y
'
,
 
'
f
a
-
p
e
n
c
i
l
-
s
q
u
a
r
e
-
o
'
)
;

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
8
0
,
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
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
_
J
O
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
 
f
a
l
s
e
)
,
 
'
b
u
s
i
n
e
s
s
_
s
e
t
t
i
n
g
s
'
,
 
'
f
a
-
c
o
g
s
'
)
;


	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
!
=
 
'
1
'
 
&
&
 
$
m
r
C
o
n
f
i
g
[
'
t
a
r
i
f
f
m
o
d
e
'
]
 
!
=
 
'
0
'
 
&
&
 
!
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
i
s
_
j
i
n
t
o
u
r
_
p
r
o
p
e
r
t
y
'
)
)
 
{

	
	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
8
0
,
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
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
_
J
O
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
 
f
a
l
s
e
)
,
 
'
l
i
s
t
_
r
e
s
o
u
r
c
e
s
'
,
 
'
f
a
-
b
e
d
'
)
;

	
	
	
}

	
	
	

	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
!
=
 
'
1
'
 
&
&
 
$
m
r
C
o
n
f
i
g
[
'
t
a
r
i
f
f
m
o
d
e
'
]
 
=
=
 
'
0
'
 
&
&
 
!
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
i
s
_
j
i
n
t
o
u
r
_
p
r
o
p
e
r
t
y
'
)
)
 
{

	
	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
8
0
,
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
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
_
J
O
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
 
f
a
l
s
e
)
.
'
 
&
a
m
p
;
 
'
.
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
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
_
J
O
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
 
f
a
l
s
e
)
,
 
'
e
d
i
t
_
t
a
r
i
f
f
s
_
n
o
r
m
a
l
'
,
 
'
f
a
-
u
s
d
'
)
;

	
	
	
}


	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
8
0
,
 
j
r
_
g
e
t
t
e
x
t
(
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
 
f
a
l
s
e
)
,
 
'
m
e
d
i
a
_
c
e
n
t
r
e
'
,
 
'
f
a
-
p
i
c
t
u
r
e
-
o
'
)
;


	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
!
=
 
'
1
'
)
 
{

	
	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
8
0
,
 
j
r
_
g
e
t
t
e
x
t
(
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
 
f
a
l
s
e
)
,
 
'
l
i
s
t
_
e
m
a
i
l
s
'
,
 
'
f
a
-
e
n
v
e
l
o
p
e
-
o
'
)
;

	
	
	
}

	
	
}

	
	

	
	
/
/
h
e
l
p
 
s
e
c
t
i
o
n
 
m
e
n
u
s

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
=
 
5
0
)
 
{
 
/
/
F
A
Q
 
w
o
r
k
s
 
f
o
r
 
g
u
e
s
t
s
 
t
o
o
,
 
b
u
t
 
s
i
n
c
e
 
i
t
 
d
o
e
s
n
`
t
 
h
a
v
e
 
a
n
y
 
c
o
n
t
e
n
t
 
b
y
 
d
e
f
a
u
l
t
,
 
w
e
`
l
l
 
j
u
s
t
 
h
i
d
e
 
t
h
e
 
m
e
n
u
 
f
o
r
 
g
u
e
s
t
s

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
9
0
,
 
j
r
_
g
e
t
t
e
x
t
(
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
 
f
a
l
s
e
)
,
 
'
f
a
q
'
,
 
'
f
a
-
q
u
e
s
t
i
o
n
'
)
;

	
	
	
$
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
d
_
i
t
e
m
(
9
0
,
 
j
r
_
g
e
t
t
e
x
t
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
 
f
a
l
s
e
)
,
 
'
v
i
d
e
o
s
'
,
 
'
f
a
-
y
o
u
t
u
b
e
-
p
l
a
y
'
)
;

	
	
}

 
 
 
 
}


 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
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
 
e
v
e
r
y
 
E
v
e
n
t
/
M
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
R
e
t
V
a
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
}

}

