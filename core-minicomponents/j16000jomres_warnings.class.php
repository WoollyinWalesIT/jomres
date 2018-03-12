
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
1
6
0
0
0
j
o
m
r
e
s
_
w
a
r
n
i
n
g
s

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
$
c
o
m
p
o
n
e
n
t
A
r
g
s
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

	
	

	
	
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
=
 
'
'
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


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
o
u
t
p
u
t
_
n
o
w
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
_
n
o
w
 
=
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
o
u
t
p
u
t
_
n
o
w
'
 
]
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
_
n
o
w
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;


	
	
/
/
 
S
h
o
w
 
a
 
w
a
r
n
i
n
g
 
i
f
 
d
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
 
m
o
d
e
 
e
n
a
b
l
e
d

	
	
$
o
u
t
p
u
t
[
 
'
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
M
O
D
E
'
 
]
 
=
 
d
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
_
m
o
d
e
_
t
e
s
t
(
)
;

	
	
	
	

 
 
 
 
 
 
 
 
/
/
m
a
x
 
i
n
p
u
t
 
v
a
r
s
 
s
e
t
 
t
o
 
1
0
0
0
 
w
a
r
n
i
n
g
 
o
n
l
y
 
i
f
 
m
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
 
i
s
 
e
n
a
b
l
e
d

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
M
A
X
_
I
N
P
U
T
_
V
A
R
S
_
C
H
E
C
K
'
 
]
 
=
 
m
a
x
_
i
n
p
u
t
_
v
a
r
s
_
t
e
s
t
(
)
;


 
 
 
 
 
 
 
 
/
/
m
a
x
 
g
e
t
 
v
a
r
s
 
s
e
t
 
t
o
 
5
1
2
 
o
r
 
l
e
s
s
 
w
a
r
n
i
n
g
 
f
o
r
 
d
a
t
a
t
a
b
l
e
s

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
S
U
H
O
S
I
N
_
G
E
T
_
M
A
X
_
V
A
R
S
_
C
H
E
C
K
'
 
]
 
=
 
s
u
h
o
s
i
n
_
g
e
t
_
m
a
x
_
v
a
r
s
_
t
e
s
t
(
)
;


 
 
 
 
 
 
 
 
/
/
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
o
t
 
e
n
t
e
r
e
d
 
w
a
r
n
i
n
g

	
	
/
*
 
$
o
u
t
p
u
t
[
 
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
 
]
 
=
 
'
'
;

	
	
$
o
u
t
p
u
t
[
 
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
 
]
 
=
 
'
'
;

	
	
$
o
u
t
p
u
t
[
 
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
D
U
C
T
_
I
N
F
O
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
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
i
f
 
(
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
u
t
p
u
t
[
 
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
 
]
 
=
 
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
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
 
]
 
=
 
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
 
f
a
l
s
e
)
;

	
	
	
$
o
u
t
p
u
t
[
 
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
D
U
C
T
_
I
N
F
O
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
'
 
]
 
=
 
'
a
l
e
r
t
 
a
l
e
r
t
-
i
n
f
o
'
;

 
 
 
 
 
 
 
 
}
 
*
/


 
 
 
 
 
 
 
 
/
/
w
o
r
d
p
r
e
s
s
 
P
a
g
e
 
w
i
t
h
 
[
j
o
m
r
e
s
:
x
x
-
X
X
]
 
n
o
t
 
c
r
e
a
t
e
d
 
y
e
t

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
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
H
I
G
H
L
I
G
H
T
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
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
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
i
f
 
(
t
h
i
s
_
c
m
s
_
i
s
_
w
o
r
d
p
r
e
s
s
(
)
 
&
&
 
(
i
n
t
)
 
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
j
o
m
r
e
s
I
t
e
m
i
d
'
)
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
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
H
I
G
H
L
I
G
H
T
'
 
]
 
=
 
(
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
 
?
 
'
a
l
e
r
t
 
a
l
e
r
t
-
e
r
r
o
r
'
 
:
 
'
u
i
-
s
t
a
t
e
-
e
r
r
o
r
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
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
 
]
 
=
 
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
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
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
 
a
p
i
 
k
e
y
 
w
a
r
n
i
n
g

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
G
M
A
P
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
]
 
=
 
g
m
a
p
s
_
a
p
i
k
e
y
_
c
h
e
c
k
(
)
;


	
	
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
 
a
p
i
 
k
e
y

 
 
 
 
 
 
 
 
/
/
$
o
u
t
p
u
t
[
'
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
]
 
=
 
i
p
i
n
f
o
d
b
_
a
p
i
k
e
y
_
c
h
e
c
k
(
)
;


	
	
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
 
a
p
i
 
k
e
y

 
 
 
 
 
 
 
 
/
/
$
o
u
t
p
u
t
[
'
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
]
 
=
 
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
k
e
y
_
c
h
e
c
k
(
)
;


 
 
 
 
 
 
 
 
/
/
 
L
o
g
f
i
l
e
 
l
o
c
a
t
i
o
n
 
w
a
r
n
i
n
g

 
 
 
 
 
 
 
 
/
/
$
o
u
t
p
u
t
[
'
L
O
G
F
I
L
E
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
]
 
=
 
l
o
g
s
_
p
a
t
h
_
c
h
e
c
k
(
)
;

	
	

	
	
/
/
r
e
v
i
e
w
 
t
e
x
t

 
 
 
 
 
 
 
 
/
*
 
i
f
 
(
t
h
i
s
_
c
m
s
_
i
s
_
w
o
r
d
p
r
e
s
s
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
R
E
V
I
E
W
_
S
I
T
E
_
U
R
L
'
]
 
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
o
r
d
p
r
e
s
s
.
o
r
g
/
s
u
p
p
o
r
t
/
v
i
e
w
/
p
l
u
g
i
n
-
r
e
v
i
e
w
s
/
j
o
m
r
e
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
R
E
V
I
E
W
_
S
I
T
E
_
T
E
X
T
'
]
 
=
 
'
W
o
r
d
p
r
e
s
s
 
P
l
u
g
i
n
s
 
s
i
t
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
o
u
t
p
u
t
[
'
R
E
V
I
E
W
_
S
I
T
E
_
U
R
L
'
]
 
=
 
'
h
t
t
p
:
/
/
e
x
t
e
n
s
i
o
n
s
.
j
o
o
m
l
a
.
o
r
g
/
e
x
t
e
n
s
i
o
n
s
/
e
x
t
e
n
s
i
o
n
/
v
e
r
t
i
c
a
l
-
m
a
r
k
e
t
s
/
b
o
o
k
i
n
g
-
a
-
r
e
s
e
r
v
a
t
i
o
n
s
/
j
o
m
r
e
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
R
E
V
I
E
W
_
S
I
T
E
_
T
E
X
T
'
]
 
=
 
'
J
o
o
m
l
a
!
 
E
x
t
e
n
s
i
o
n
s
 
D
i
r
e
c
t
o
r
y
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
C
A
P
T
E
R
R
A
_
R
E
V
I
E
W
_
S
I
T
E
_
U
R
L
'
]
 
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
c
a
p
t
e
r
r
a
.
c
o
m
/
r
e
s
e
r
v
a
t
i
o
n
s
-
s
o
f
t
w
a
r
e
/
r
e
v
i
e
w
s
/
1
3
4
4
6
9
/
J
o
m
r
e
s
/
W
o
o
l
l
y
i
n
w
a
l
e
s
%
2
0
I
T
/
n
e
w
'
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
C
A
P
T
E
R
R
A
_
R
E
V
I
E
W
_
S
I
T
E
_
T
E
X
T
'
]
 
=
 
'
C
a
p
t
e
r
r
a
'
;
 
*
/


 
 
 
 
 
 
 
 
/
/
 
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
 
c
h
e
c
k
s
 
/
/

 
 
 
 
 
 
 
 
/
/
 
W
e
 
h
a
v
e
 
a
 
s
i
t
u
a
t
i
o
n
 
w
h
e
r
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
 
t
y
p
e
 
n
e
e
d
s
 
t
o
 
b
e
 
c
r
o
s
s
-
r
e
f
e
r
e
n
c
e
d
 
w
i
t
h
 
r
o
o
m
 
t
y
p
e
s
,
 
t
h
i
s
 
c
h
e
c
k
 
w
i
l
l
 
a
s
c
e
r
t
a
i
n
 
i
f
 
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
y
 
t
y
p
e
s
 
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
 
r
o
o
m
 
t
y
p
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
y
p
e
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
_
t
y
p
e
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
y
p
e
s
-
>
g
e
t
_
a
l
l
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
t
y
p
e
s
(
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
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
T
Y
P
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
]
 
=
 
$
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
_
t
y
p
e
s
-
>
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
t
y
p
e
s
_
w
i
t
h
_
n
o
_
r
o
o
m
_
t
y
p
e
s
_
a
s
s
i
g
n
e
d
(
$
s
h
o
w
_
l
i
n
k
_
t
o
_
r
o
o
m
_
t
y
p
e
s
 
=
 
t
r
u
e
)
;

	
	

	
	
$
o
u
t
p
u
t
[
'
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
_
I
M
A
G
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
W
A
R
N
I
N
G
'
]
 
=
 
d
b
_
i
m
a
g
e
s
_
i
m
p
o
r
t
_
c
h
e
c
k
(
)
;

	
	

	
	
$
o
u
t
p
u
t
[
'
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
_
I
M
A
G
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
W
A
R
N
I
N
G
'
]
 
=
 
s
3
_
i
m
a
g
e
s
_
i
m
p
o
r
t
_
c
h
e
c
k
(
)
;


 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
 
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
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
P
A
T
H
_
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
j
o
m
r
e
s
_
w
a
r
n
i
n
g
s
.
h
t
m
l
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
o
u
t
p
u
t
_
n
o
w
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
d
i
s
p
l
a
y
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
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
r
e
t
V
a
l
s
 
=
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
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
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
;

 
 
 
 
}

}

