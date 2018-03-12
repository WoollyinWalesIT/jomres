
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
2
9
9
0
s
h
o
w
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
 
t
r
u
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
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
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
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
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

	
	

	
	
$
p
a
y
p
a
l
_
s
e
t
t
i
n
g
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
r
p
o
r
t
a
l
_
p
a
y
p
a
l
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
)
;

 
 
 
 
 
 
 
 
$
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
-
>
g
e
t
_
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
(
)
;


 
 
 
 
 
 
 
 
$
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
p
a
y
m
e
n
t
 
=
 
f
a
l
s
e
;

	
	

	
	
$
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
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
s
k
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
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
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
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
c
o
n
t
r
a
c
t
_
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
c
o
n
t
r
a
c
t
_
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
 
=
 
n
e
w
 
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
_
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
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
o
n
t
r
a
c
t
_
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
-
>
v
a
l
i
d
a
t
e
_
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
(
$
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
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
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
_
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
-
>
c
h
e
c
k
_
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
(
$
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
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
=
 
$
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
_
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
-
>
g
e
t
_
c
o
n
t
r
a
c
t
_
i
d
_
f
o
r
_
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
(
$
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
d
a
t
a
 
F
R
O
M
 
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
 
W
H
E
R
E
 
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
 
=
 
'
.
$
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
a
 
=
 
u
n
s
e
r
i
a
l
i
z
e
(
d
o
S
e
l
e
c
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
,
 
1
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
 
=
 
$
d
a
t
a
[
'
t
m
p
b
o
o
k
i
n
g
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
 
=
 
$
d
a
t
a
[
'
t
m
p
g
u
e
s
t
'
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
p
a
y
m
e
n
t
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
a
p
p
r
o
v
a
l
_
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
'
]
 
=
 
$
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
j
o
m
r
e
s
U
R
L
(
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
)
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
C
o
u
l
d
 
n
o
t
 
v
a
l
i
d
a
t
e
 
s
e
c
r
e
t
 
k
e
y
 
'
.
$
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
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
p
a
y
m
e
n
t
'
]
 
=
 
$
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
p
a
y
m
e
n
t
;


 
 
 
 
 
 
 
 
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
'
)
;


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
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
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
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
S
e
e
n
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
a
d
d
N
e
w
B
o
o
k
i
n
g
F
i
e
l
d
(
'
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
S
e
e
n
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
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
S
e
e
n
'
,
 
t
r
u
e
)
;


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
D
e
e
t
s
 
=
 
g
e
t
t
e
m
p
B
o
o
k
i
n
g
d
a
t
a
(
)
;

	
	


 
 
 
 
 
 
 
 
$
g
u
e
s
t
L
i
s
t
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
G
u
e
s
t
D
a
t
a
(
)
;


 
 
 
 
 
 
 
 
/
/
 
T
r
i
g
g
e
r
 
p
o
i
n
t

 
 
 
 
 
 
 
 
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
3
0
0
0
'
)
;


 
 
 
 
 
 
 
 
$
t
a
g
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
t
a
g
'
 
]
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
 
(
i
n
t
)
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
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
'
 
]
;


 
 
 
 
 
 
 
 
i
f
 
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
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
j
o
m
r
e
s
U
R
L
(
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
.
'
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
'
)
,
 
'
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
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
b
a
s
i
c
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
'
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
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
-
>
g
a
t
h
e
r
_
d
a
t
a
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


 
 
 
 
 
 
 
 
i
f
 
(
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
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
 
F
R
O
M
 
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
 
W
H
E
R
E
 
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
 
=
 
'
.
(
i
n
t
)
 
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
.
'
 
A
N
D
 
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
 
'
.
(
i
n
t
)
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
S
'
 
]
 
=
 
d
o
S
e
l
e
c
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
,
 
1
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
p
r
o
p
e
r
t
y
_
h
e
a
d
e
r
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


 
 
 
 
 
 
 
 
i
f
 
(
!
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
o
k
_
t
o
_
b
o
o
k
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
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
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
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
'
 
]
)
,
 
'
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
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
_
t
a
x
_
r
a
t
e
 
=
 
0
.
0
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
_
t
a
x
_
c
o
d
e
'
 
]
)
 
&
&
 
(
i
n
t
)
 
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
_
t
a
x
_
c
o
d
e
'
 
]
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
 
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
p
o
r
t
a
l
_
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

 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
x
r
a
t
e
_
i
d
 
=
 
(
i
n
t
)
 
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
_
t
a
x
_
c
o
d
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
g
a
t
h
e
r
_
d
a
t
a
(
$
t
a
x
r
a
t
e
_
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
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
_
t
a
x
_
r
a
t
e
 
=
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
r
a
t
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
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
_
t
a
x
_
o
u
t
p
u
t
 
=
 
'
'
;

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
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
_
t
a
x
_
r
a
t
e
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
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
_
t
a
x
_
o
u
t
p
u
t
 
=
 
'
 
(
'
.
$
t
h
i
s
-
>
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
_
t
a
x
_
r
a
t
e
.
'
%
)
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
p
t
y
p
e
_
i
d
 
=
 
$
c
u
r
r
e
n
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
-
>
p
t
y
p
e
_
i
d
;


 
 
 
 
 
 
 
 
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
s
t
o
m
_
f
i
e
l
d
_
h
a
n
d
l
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
o
m
r
e
s
_
c
u
s
t
o
m
_
f
i
e
l
d
_
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

 
 
 
 
 
 
 
 
$
a
l
l
C
u
s
t
o
m
F
i
e
l
d
s
 
=
 
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
s
t
o
m
_
f
i
e
l
d
_
h
a
n
d
l
e
r
-
>
g
e
t
A
l
l
C
u
s
t
o
m
F
i
e
l
d
s
B
y
P
t
y
p
e
I
d
(
$
p
t
y
p
e
_
i
d
)
;


 
 
 
 
 
 
 
 
$
c
u
s
t
o
m
F
i
e
l
d
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

 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
a
l
l
C
u
s
t
o
m
F
i
e
l
d
s
)
 
&
&
 
!
$
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
p
a
y
m
e
n
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
a
l
l
C
u
s
t
o
m
F
i
e
l
d
s
 
a
s
 
$
f
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
q
u
i
r
e
d
 
=
 
$
f
[
 
'
r
e
q
u
i
r
e
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
e
l
d
n
a
m
e
 
=
 
$
f
[
 
'
f
i
e
l
d
n
a
m
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
o
r
m
f
i
e
l
d
n
a
m
e
 
=
 
$
f
[
 
'
f
i
e
l
d
n
a
m
e
'
 
]
.
'
_
'
.
$
f
[
 
'
u
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
s
a
v
e
C
u
s
t
o
m
F
i
e
l
d
s
(
$
a
l
l
C
u
s
t
o
m
F
i
e
l
d
s
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
e
l
d
d
a
t
a
 
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
f
i
e
l
d
d
a
t
a
[
 
'
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
'
.
$
f
[
 
'
u
i
d
'
 
]
,
 
$
f
[
 
'
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
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
e
l
d
d
a
t
a
[
 
'
V
A
L
U
E
'
 
]
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
P
O
S
T
,
 
$
f
o
r
m
f
i
e
l
d
n
a
m
e
,
 
'
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
q
u
i
r
e
d
 
=
=
 
'
1
'
 
&
&
 
s
t
r
l
e
n
(
$
_
P
O
S
T
[
 
$
f
o
r
m
f
i
e
l
d
n
a
m
e
 
]
)
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
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
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
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
'
 
]
)
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
s
t
o
m
F
i
e
l
d
s
[
 
]
 
=
 
$
f
i
e
l
d
d
a
t
a
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
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
N
A
M
E
'
 
]
 
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
N
a
m
e
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
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
'
 
]
)
;


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
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
'
 
]
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
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
'
 
]
;


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
T
O
T
A
L
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
_
J
O
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
R
O
O
M
S
B
O
O
K
E
D
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
)
;


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
T
O
T
A
L
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
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
'
 
]
)
;


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
D
E
P
O
S
I
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
_
J
O
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
D
E
P
O
S
I
T
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
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
'
 
]
)
;


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
_
J
O
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
A
R
R
I
V
A
L
'
 
]
 
=
 
o
u
t
p
u
t
D
a
t
e
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
a
r
r
i
v
a
l
D
a
t
e
'
 
]
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
s
h
o
w
d
e
p
a
r
t
u
r
e
i
n
p
u
t
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
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
 
]
 
=
 
o
u
t
p
u
t
D
a
t
e
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
 
]
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
D
A
Y
S
S
T
A
Y
I
N
G
'
 
]
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
s
t
a
y
D
a
y
s
'
 
]
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
r
o
o
m
T
a
x
Y
e
s
N
o
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
e
u
r
o
T
a
x
Y
e
s
N
o
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
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
T
A
X
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
t
a
x
'
 
]
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
T
A
X
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
(
f
l
o
a
t
)
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
'
 
]
 
>
 
0
.
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
_
V
A
L
U
E
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
'
 
]
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
D
I
S
C
O
U
N
T
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
B
G
C
O
L
O
U
R
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
i
f
 
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
b
o
o
k
i
n
g
_
d
i
s
c
o
u
n
t
e
d
'
 
]
 
=
=
 
t
r
u
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
 
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
D
I
S
C
O
U
N
T
'
 
]
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
l
a
s
t
m
i
n
u
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
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
B
G
C
O
L
O
U
R
'
 
]
 
=
 
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
n
p
u
t
B
o
x
E
r
r
o
r
B
a
c
k
g
r
o
u
n
d
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
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
D
I
S
C
O
U
N
T
'
 
]
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
w
i
s
e
p
r
i
c
e
d
i
s
c
o
u
n
t
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
B
G
C
O
L
O
U
R
'
 
]
 
=
 
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
n
p
u
t
B
o
x
E
r
r
o
r
B
a
c
k
g
r
o
u
n
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
r
e
q
u
e
s
t
e
d
r
o
o
m
s
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
r
e
q
u
e
s
t
e
d
R
o
o
m
'
 
]
;

 
 
 
 
 
 
 
 
$
r
o
o
m
s
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
r
e
q
u
e
s
t
e
d
r
o
o
m
s
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
N
U
M
R
O
O
M
S
'
 
]
 
=
 
c
o
u
n
t
(
$
r
o
o
m
s
)
;

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
i
f
 
(
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
N
U
M
R
O
O
M
S
'
 
]
 
=
=
 
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
i
n
c
l
u
d
e
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
_
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
'
)
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
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
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
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
'
 
]
)
,
 
'
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
r
o
o
m
s
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
m
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
m
[
 
0
 
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
m
i
d
s
[
 
]
 
=
 
$
r
m
[
 
0
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
 
]
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
p
_
r
o
o
m
_
d
e
t
a
i
l
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

 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
p
_
r
o
o
m
_
d
e
t
a
i
l
s
[
0
]
[
 
'
H
R
O
O
M
S
B
O
O
K
E
D
'
 
]
 
=
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
R
O
O
M
S
B
O
O
K
E
D
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
p
_
r
o
o
m
_
d
e
t
a
i
l
s
[
0
]
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
N
A
M
E
'
 
]
 
=
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
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
N
A
M
E
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
p
_
r
o
o
m
_
d
e
t
a
i
l
s
[
0
]
[
 
'
N
U
M
R
O
O
M
S
'
 
]
 
=
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
N
U
M
R
O
O
M
S
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
r
m
i
d
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
r
o
o
m
_
n
u
m
b
e
r
,
r
o
o
m
_
n
a
m
e
,
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
 
F
R
O
M
 
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
r
o
o
m
s
 
W
H
E
R
E
 
r
o
o
m
_
u
i
d
 
I
N
 
(
'
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
r
m
i
d
s
)
.
'
)
 
O
R
D
E
R
 
B
Y
 
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
L
i
s
t
 
=
 
d
o
S
e
l
e
c
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
N
u
m
b
e
r
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
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
p
r
e
v
r
o
o
m
c
l
a
s
s
 
=
 
0
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
i
n
f
o
 
=
 
a
r
r
a
y
(
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
r
o
o
m
L
i
s
t
 
a
s
 
$
r
o
o
m
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
t
y
p
e
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
o
o
m
N
u
m
b
e
r
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
N
u
m
b
e
r
 
=
 
$
r
o
o
m
-
>
r
o
o
m
_
n
u
m
b
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
N
u
m
b
e
r
 
.
=
 
'
,
 
'
.
$
r
o
o
m
-
>
r
o
o
m
_
n
u
m
b
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
n
a
m
e
 
=
 
$
r
o
o
m
-
>
r
o
o
m
_
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
 
=
 
$
r
o
o
m
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
i
n
f
o
[
 
]
 
=
 
a
r
r
a
y
(
'
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
 
=
>
 
$
r
o
o
m
_
n
a
m
e
,
 
'
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
 
=
>
 
$
r
o
o
m
-
>
r
o
o
m
_
n
u
m
b
e
r
,
 
'
H
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
 
=
>
 
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
_
J
O
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
 
f
a
l
s
e
)
,
 
'
H
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
 
=
>
 
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
_
J
O
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
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
 
!
=
 
$
p
r
e
v
r
o
o
m
c
l
a
s
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
r
e
v
r
o
o
m
c
l
a
s
s
 
!
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
o
u
t
p
u
t
 
p
r
e
v
i
o
u
s
 
r
o
o
m

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
t
y
p
e
[
 
'
F
U
L
L
D
E
S
C
'
 
]
 
=
 
$
r
o
o
m
a
d
d
.
'
 
x
 
'
.
$
f
u
l
l
d
e
s
c
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
o
o
m
s
[
 
]
 
=
 
$
r
o
o
m
t
y
p
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
e
v
r
o
o
m
c
l
a
s
s
 
=
 
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
e
v
r
o
o
m
c
l
a
s
s
 
=
 
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
a
d
d
 
=
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
r
o
o
m
_
c
l
a
s
s
_
f
u
l
l
_
d
e
s
c
 
F
R
O
M
 
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
r
o
o
m
_
c
l
a
s
s
e
s
 
W
H
E
R
E
 
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
 
'
"
.
(
i
n
t
)
 
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
.
"
'
 
a
n
d
 
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
 
=
 
'
"
.
(
i
n
t
)
 
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
.
"
'
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
c
l
a
s
s
 
=
 
d
o
S
e
l
e
c
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
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
r
o
o
m
c
l
a
s
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
r
o
o
m
c
l
a
s
s
 
a
s
 
$
c
l
a
s
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
u
l
l
d
e
s
c
 
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
D
E
S
C
'
.
(
i
n
t
)
 
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
c
l
a
s
s
-
>
r
o
o
m
_
c
l
a
s
s
_
f
u
l
l
_
d
e
s
c
)
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
 
F
R
O
M
 
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
r
o
o
m
_
c
l
a
s
s
e
s
 
W
H
E
R
E
 
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
 
0
 
a
n
d
 
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
 
=
 
'
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
c
l
a
s
s
 
=
 
d
o
S
e
l
e
c
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
r
o
o
m
c
l
a
s
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
r
o
o
m
c
l
a
s
s
 
a
s
 
$
c
l
a
s
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
u
l
l
d
e
s
c
 
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
A
B
B
V
'
.
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
c
l
a
s
s
-
>
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
)
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
+
+
$
r
o
o
m
a
d
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
t
y
p
e
[
 
'
F
U
L
L
D
E
S
C
'
 
]
 
=
 
$
r
o
o
m
a
d
d
.
'
 
x
 
'
.
$
f
u
l
l
d
e
s
c
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
o
o
m
s
[
 
]
 
=
 
$
r
o
o
m
t
y
p
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
'
 
]
 
=
 
'
'
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
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
 
]
 
!
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
b
o
o
k
i
n
g
_
n
o
t
e
s
'
 
]
[
 
'
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
_
n
o
t
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
b
o
o
k
i
n
g
_
n
o
t
e
s
'
 
]
[
 
'
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
_
n
o
t
e
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
'
 
]
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
b
o
o
k
i
n
g
_
n
o
t
e
s
'
 
]
[
 
'
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
_
n
o
t
e
'
 
]
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
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
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
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
'
 
]
;


 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
 
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
p
o
r
t
a
l
_
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
_
t
a
x
_
c
o
d
e
'
 
]
)
 
&
&
 
(
i
n
t
)
 
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
_
t
a
x
_
c
o
d
e
'
 
]
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
f
g
c
o
d
e
 
=
 
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
_
t
a
x
_
c
o
d
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
e
 
=
 
(
f
l
o
a
t
)
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
t
a
x
r
a
t
e
s
[
 
$
c
f
g
c
o
d
e
 
]
[
 
'
r
a
t
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
T
o
A
d
d
 
=
 
$
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
 
*
 
(
$
r
a
t
e
 
/
 
1
0
0
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
=
 
$
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
 
+
 
$
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
T
o
A
d
d
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
R
O
O
M
T
O
T
A
L
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
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
)
;


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
e
x
t
r
a
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
s
h
o
w
E
x
t
r
a
s
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
e
x
t
r
a
s
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
e
x
t
r
a
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
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
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
s
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
e
x
t
r
a
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
e
x
t
r
a
s
A
r
r
a
y
 
a
s
 
$
e
x
t
r
a
A
l
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
e
x
t
r
a
A
l
l
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
 
=
 
$
e
x
t
r
a
A
l
l
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
p
r
i
c
e
,
 
n
a
m
e
,
t
a
x
_
r
a
t
e
 
F
R
O
M
 
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
e
x
t
r
a
s
 
W
H
E
R
E
 
u
i
d
 
=
 
'
$
e
x
t
r
a
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
P
r
i
c
e
 
=
 
d
o
S
e
l
e
c
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
,
 
2
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
`
m
o
d
e
l
`
,
`
p
a
r
a
m
s
`
 
F
R
O
M
 
#
_
_
j
o
m
c
o
m
p
_
e
x
t
r
a
s
m
o
d
e
l
s
_
m
o
d
e
l
s
 
W
H
E
R
E
 
e
x
t
r
a
_
i
d
 
=
 
'
$
e
x
t
r
a
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
 
=
 
d
o
S
e
l
e
c
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
,
 
2
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
m
o
d
e
l
[
 
'
m
o
d
e
l
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
1
'
:
 
/
/
 
P
e
r
 
w
e
e
k

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
u
m
b
e
r
O
f
W
e
e
k
s
 
=
 
c
e
i
l
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
s
t
a
y
D
a
y
s
'
 
]
 
/
 
7
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
l
c
 
=
 
$
n
u
m
b
e
r
O
f
W
e
e
k
s
 
*
 
$
t
h
i
s
P
r
i
c
e
[
 
'
p
r
i
c
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
_
t
e
x
t
 
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
2
'
:
 
/
/
 
p
e
r
 
d
a
y
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
l
c
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
s
t
a
y
D
a
y
s
'
 
]
 
*
 
$
t
h
i
s
P
r
i
c
e
[
 
'
p
r
i
c
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
_
t
e
x
t
 
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
3
'
:
 
/
/
 
p
e
r
 
b
o
o
k
i
n
g

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
l
c
 
=
 
$
t
h
i
s
P
r
i
c
e
[
 
'
p
r
i
c
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
_
t
e
x
t
 
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
4
'
:
 
/
/
 
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
 
b
o
o
k
i
n
g

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
l
c
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
t
o
t
a
l
_
i
n
_
p
a
r
t
y
'
 
]
 
*
 
$
t
h
i
s
P
r
i
c
e
[
 
'
p
r
i
c
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
_
t
e
x
t
 
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
5
'
:
 
/
/
 
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
 
d
a
y

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
l
c
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
t
o
t
a
l
_
i
n
_
p
a
r
t
y
'
 
]
 
*
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
s
t
a
y
D
a
y
s
'
 
]
 
*
 
$
t
h
i
s
P
r
i
c
e
[
 
'
p
r
i
c
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
_
t
e
x
t
 
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
6
'
:
 
/
/
 
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
 
w
e
e
k

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
u
m
b
e
r
O
f
W
e
e
k
s
 
=
 
c
e
i
l
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
s
t
a
y
D
a
y
s
'
 
]
 
/
 
7
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
l
c
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
t
o
t
a
l
_
i
n
_
p
a
r
t
y
'
 
]
 
*
 
$
n
u
m
b
e
r
O
f
W
e
e
k
s
 
*
 
$
t
h
i
s
P
r
i
c
e
[
 
'
p
r
i
c
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
_
t
e
x
t
 
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
7
'
:
 
/
/
 
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
 
d
a
y
s
 
m
i
n
 
d
a
y
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
i
n
d
a
y
s
 
=
 
$
m
o
d
e
l
[
 
'
p
a
r
a
m
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
t
o
t
a
l
_
i
n
_
p
a
r
t
y
'
 
]
 
<
 
$
m
i
n
d
a
y
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
y
s
 
=
 
$
m
i
n
d
a
y
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
y
s
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
s
t
a
y
D
a
y
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
l
c
 
=
 
$
d
a
y
s
 
*
 
$
t
h
i
s
P
r
i
c
e
[
 
'
p
r
i
c
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
_
t
e
x
t
 
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
8
'
:
 
/
/
 
p
e
r
 
d
a
y
s
 
p
e
r
 
r
o
o
m

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
l
c
 
=
 
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
s
t
a
y
D
a
y
s
'
 
]
 
*
 
$
t
h
i
s
P
r
i
c
e
[
 
'
p
r
i
c
e
'
 
]
)
 
*
 
(
i
n
t
)
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
N
U
M
R
O
O
M
S
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
_
t
e
x
t
 
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
9
'
:
 
/
/
 
p
e
r
 
r
o
o
m

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
l
c
 
=
 
$
t
h
i
s
P
r
i
c
e
[
 
'
p
r
i
c
e
'
 
]
 
*
 
(
i
n
t
)
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
N
U
M
R
O
O
M
S
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
_
t
e
x
t
 
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
1
0
0
'
:
 
/
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
l
c
 
=
 
(
$
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
 
/
 
1
0
0
)
 
*
 
$
t
h
i
s
P
r
i
c
e
[
 
'
p
r
i
c
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
_
t
e
x
t
 
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
_
J
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
 
=
 
$
c
a
l
c
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
x
_
r
a
t
e
_
i
d
 
=
 
(
i
n
t
)
 
$
t
h
i
s
P
r
i
c
e
[
 
'
t
a
x
_
r
a
t
e
'
 
]
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
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
t
a
x
r
a
t
e
s
[
 
$
t
a
x
_
r
a
t
e
_
i
d
 
]
[
 
'
r
a
t
e
'
 
]
)
)
 
{

	
	
	
	
	
	
$
r
a
t
e
 
=
 
(
f
l
o
a
t
)
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
t
a
x
r
a
t
e
s
[
 
$
t
a
x
_
r
a
t
e
_
i
d
 
]
[
 
'
r
a
t
e
'
 
]
;

	
	
	
	
	
}
 
e
l
s
e
 
{
 
/
/
 
A
n
 
o
l
d
e
r
 
t
a
x
 
r
a
t
e
 
m
a
y
 
h
a
v
e
 
b
e
e
n
 
d
e
l
e
t
e
d

	
	
	
	
	
	
$
r
a
t
e
 
=
 
0
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
p
r
i
c
e
s
_
i
n
c
l
u
s
i
v
e
'
 
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
v
i
s
o
r
 
=
 
(
$
r
a
t
e
 
/
 
1
0
0
)
 
+
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
t
t
_
p
r
i
c
e
 
=
 
$
p
r
i
c
e
 
/
 
$
d
i
v
i
s
o
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
 
=
 
$
n
e
t
t
_
p
r
i
c
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
x
 
=
 
(
$
p
r
i
c
e
 
/
 
1
0
0
)
 
*
 
$
r
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
c
_
p
r
i
c
e
 
=
 
$
p
r
i
c
e
 
+
 
$
t
a
x
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
t
a
x
_
o
u
t
p
u
t
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
a
t
e
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
t
a
x
_
o
u
t
p
u
t
 
=
 
'
 
(
'
.
$
r
a
t
e
.
'
%
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
n
a
m
e
 
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
N
A
M
E
'
.
$
e
x
t
r
a
,
 
h
t
m
l
s
p
e
c
i
a
l
c
h
a
r
s
(
t
r
i
m
(
s
t
r
i
p
s
l
a
s
h
e
s
(
$
t
h
i
s
P
r
i
c
e
[
 
'
n
a
m
e
'
 
]
)
)
,
 
E
N
T
_
Q
U
O
T
E
S
)
)
.
'
 
(
 
'
.
$
m
o
d
e
l
_
t
e
x
t
.
'
 
)
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
p
a
r
t
s
[
 
'
N
A
M
E
'
 
]
 
=
 
$
e
x
t
r
a
_
n
a
m
e
.
'
 
X
 
'
.
$
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
[
 
$
e
x
t
r
a
 
]
.
$
e
x
t
r
a
_
t
a
x
_
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
p
a
r
t
s
[
 
'
P
R
I
C
E
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
i
n
c
_
p
r
i
c
e
 
*
 
$
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
[
 
$
e
x
t
r
a
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
e
x
t
r
a
s
[
 
]
 
=
 
$
e
x
t
r
a
_
p
a
r
t
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


	
	
i
f
 
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
s
s
i
o
n
_
h
a
n
d
l
e
r
'
]
 
=
=
 
'
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
 
{

	
	
	
$
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
'
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
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
 
=
 
u
n
s
e
r
i
a
l
i
z
e
(
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
'
)
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
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
 
!
=
=
 
f
a
l
s
e
 
&
&
 
!
e
m
p
t
y
(
$
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
 
a
s
 
$
p
l
u
g
i
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
p
l
u
g
i
n
 
a
s
 
$
t
p
e
x
t
r
a
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
p
a
r
t
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
T
o
t
a
l
 
=
 
(
f
l
o
a
t
)
 
$
t
p
e
x
t
r
a
[
 
'
u
n
t
a
x
e
d
_
g
r
a
n
d
_
t
o
t
a
l
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
*
 
i
f
 
(
 
(
i
n
t
)
 
$
t
p
e
x
t
r
a
[
 
'
t
a
x
_
c
o
d
e
_
i
d
'
 
]
 
>
 
0
 
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
x
_
r
a
t
e
_
i
d
 
=
 
$
t
p
e
x
t
r
a
[
 
'
t
a
x
_
c
o
d
e
_
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
e
 
 
 
 
 
 
 
 
=
 
(
f
l
o
a
t
)
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
t
a
x
r
a
t
e
s
[
 
$
t
a
x
_
r
a
t
e
_
i
d
 
]
[
 
'
r
a
t
e
'
 
]
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
p
r
i
c
e
s
_
i
n
c
l
u
s
i
v
e
'
]
 
=
=
 
0
 
&
&
 
$
r
a
t
e
 
>
 
0
 
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
T
a
x
 
 
 
 
 
=
 
(
 
$
t
m
p
T
o
t
a
l
 
/
 
1
0
0
 
)
 
*
 
$
r
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
T
o
t
a
l
 
 
 
 
=
 
$
t
m
p
T
o
t
a
l
 
+
 
$
t
h
i
s
T
a
x
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
*
/

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
p
a
r
t
s
[
 
'
N
A
M
E
'
 
]
 
=
 
$
t
p
e
x
t
r
a
[
 
'
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
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
p
a
r
t
s
[
 
'
P
R
I
C
E
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
t
m
p
T
o
t
a
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
e
x
t
r
a
s
[
 
]
 
=
 
$
e
x
t
r
a
_
p
a
r
t
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
s
h
o
w
E
x
t
r
a
s
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
t
e
x
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
e
x
t
r
a
_
t
e
x
t
[
 
'
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
t
e
x
t
[
 
'
E
X
T
R
A
S
T
O
T
A
L
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
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
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
t
e
x
t
[
 
'
H
E
X
T
R
A
S
T
O
T
A
L
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
s
t
e
x
t
[
 
]
 
=
 
$
e
x
t
r
a
_
t
e
x
t
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
E
A
D
E
R
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
_
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
T
O
T
A
L
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
_
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
r
e
q
u
i
r
e
A
p
p
r
o
v
a
l
'
 
]
 
=
=
 
'
1
'
 
&
&
 
!
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
u
s
e
r
I
s
M
a
n
a
g
e
r
 
&
&
 
!
$
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
p
a
y
m
e
n
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
A
M
E
N
D
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
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
A
M
E
N
D
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
_
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
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
S
P
E
C
I
A
L
S
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
_
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
)
.
$
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
_
t
a
x
_
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
)
;

 
 
 
 
 
 
 
 
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
i
n
c
l
u
d
e
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
_
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
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
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
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
 
]
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
t
o
t
a
l
_
i
n
_
p
a
r
t
y
'
 
]
;


 
 
 
 
 
 
 
 
i
f
 
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
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
'
 
]
 
!
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
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
_
J
O
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
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
'
 
]
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
L
I
V
E
S
I
T
E
'
 
]
 
=
 
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
_
P
O
S
T
[
 
'
s
p
e
c
i
a
l
R
e
q
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
S
P
E
C
I
A
L
_
R
E
Q
U
I
R
E
M
E
N
T
S
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
_
J
O
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
S
P
E
C
I
A
L
_
R
E
Q
U
I
R
E
M
E
N
T
S
'
 
]
 
=
 
g
e
t
E
s
c
a
p
e
d
(
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
P
O
S
T
,
 
'
s
p
e
c
i
a
l
R
e
q
s
'
,
 
'
'
)
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
 
]
 
=
 
$
g
u
e
s
t
L
i
s
t
[
 
'
f
i
r
s
t
n
a
m
e
'
 
]
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
S
U
R
N
A
M
E
'
 
]
 
=
 
$
g
u
e
s
t
L
i
s
t
[
 
'
s
u
r
n
a
m
e
'
 
]
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
O
U
S
E
N
O
'
 
]
 
=
 
$
g
u
e
s
t
L
i
s
t
[
 
'
h
o
u
s
e
'
 
]
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
S
T
R
E
E
T
'
 
]
 
=
 
$
g
u
e
s
t
L
i
s
t
[
 
'
s
t
r
e
e
t
'
 
]
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
T
O
W
N
'
 
]
 
=
 
$
g
u
e
s
t
L
i
s
t
[
 
'
t
o
w
n
'
 
]
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
C
O
U
N
T
Y
'
 
]
 
=
 
f
i
n
d
_
r
e
g
i
o
n
_
n
a
m
e
(
$
g
u
e
s
t
L
i
s
t
[
 
'
r
e
g
i
o
n
'
 
]
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
C
O
U
N
T
R
Y
'
 
]
 
=
 
g
e
t
S
i
m
p
l
e
C
o
u
n
t
r
y
(
$
g
u
e
s
t
L
i
s
t
[
 
'
c
o
u
n
t
r
y
'
 
]
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
P
O
S
T
C
O
D
E
'
 
]
 
=
 
$
g
u
e
s
t
L
i
s
t
[
 
'
p
o
s
t
c
o
d
e
'
 
]
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
L
A
N
D
L
I
N
E
'
 
]
 
=
 
$
g
u
e
s
t
L
i
s
t
[
 
'
t
e
l
_
l
a
n
d
l
i
n
e
'
 
]
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
M
O
B
I
L
E
'
 
]
 
=
 
$
g
u
e
s
t
L
i
s
t
[
 
'
t
e
l
_
m
o
b
i
l
e
'
 
]
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
E
M
A
I
L
'
 
]
 
=
 
$
g
u
e
s
t
L
i
s
t
[
 
'
e
m
a
i
l
'
 
]
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
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
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
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
A
R
R
I
V
A
L
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
_
J
O
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
s
h
o
w
d
e
p
a
r
t
u
r
e
i
n
p
u
t
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
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
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
_
J
O
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
A
R
R
I
V
A
L
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
_
J
O
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
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
_
J
O
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
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
D
A
Y
S
S
T
A
Y
I
N
G
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
_
J
O
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
_
J
O
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
_
J
O
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
r
e
q
u
i
r
e
A
p
p
r
o
v
a
l
'
 
]
 
=
=
 
'
1
'
 
&
&
 
!
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
u
s
e
r
I
s
M
a
n
a
g
e
r
 
&
&
 
!
$
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
p
a
y
m
e
n
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
T
H
E
B
U
T
T
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
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
T
H
E
B
U
T
T
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
_
J
O
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
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
S
U
R
N
A
M
E
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
H
O
U
S
E
N
O
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
S
T
R
E
E
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
T
O
W
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
P
O
S
T
C
O
D
E
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
R
E
G
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
_
J
O
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
C
O
U
N
T
R
Y
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
_
J
O
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
T
E
L
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
M
O
B
I
L
E
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
E
M
A
I
L
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
_
J
O
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
r
o
o
m
T
a
x
Y
e
s
N
o
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
e
u
r
o
T
a
x
Y
e
s
N
o
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
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
T
A
X
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
_
J
O
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
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
T
A
X
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
T
E
R
M
S
'
 
]
 
=
 
m
a
k
e
P
o
p
u
p
L
i
n
k
(
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
.
'
&
t
a
s
k
=
t
e
r
m
s
&
p
o
p
u
p
=
1
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
"
&
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
"
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
_
J
O
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
)
,
 
t
r
u
e
,
 
7
5
0
,
 
5
0
0
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
T
E
R
M
S
_
N
O
_
P
O
P
U
P
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
_
J
O
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
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
T
E
R
M
S
P
R
E
T
E
X
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
_
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
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
T
E
R
M
S
T
E
X
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
_
J
O
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
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
_
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
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
D
e
e
t
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

	
	
$
g
a
t
e
w
a
y
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

	
	

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
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
r
e
q
u
i
r
e
A
p
p
r
o
v
a
l
'
]
 
=
=
 
0
 
|
|
 
$
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
p
a
y
m
e
n
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
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
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
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
g
w
o
 
=
 
a
r
r
a
y
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
"
g
a
t
e
w
a
y
_
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s
"
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s
 
=
 
n
e
w
 
g
a
t
e
w
a
y
_
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s
-
>
g
e
t
_
s
e
t
t
i
n
g
s
_
f
o
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
_
u
i
d
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s
-
>
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
)
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
n
t
e
r
 
=
 
1
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
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s
-
>
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
 
a
s
 
$
g
a
t
e
w
a
y
_
n
a
m
e
 
=
>
 
$
g
a
t
e
w
a
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
g
a
t
e
w
a
y
[
'
a
c
t
i
v
e
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
[
'
a
c
t
i
v
e
'
]
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
g
a
t
e
w
a
y
[
'
a
c
t
i
v
e
'
]
 
=
=
 
1
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
w
 
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
c
h
e
c
k
e
d
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
u
n
t
e
r
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
h
e
c
k
e
d
 
=
 
'
c
h
e
c
k
e
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
3
1
0
8
'
,
 
$
g
a
t
e
w
a
y
_
n
a
m
e
,
 
n
u
l
l
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
c
o
u
n
t
(
$
r
e
s
u
l
t
)
 
>
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
w
[
 
'
G
W
N
A
M
E
'
 
]
 
=
 
$
r
e
s
u
l
t
[
 
'
g
a
t
e
w
a
y
n
a
m
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
g
a
t
e
w
a
y
d
i
r
 
=
 
$
r
e
s
u
l
t
[
 
'
f
i
l
e
p
a
t
h
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
g
w
[
 
'
G
W
N
A
M
E
'
 
]
 
=
 
$
g
a
t
e
w
a
y
_
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
g
a
t
e
w
a
y
d
i
r
 
=
 
$
r
e
s
u
l
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
w
[
 
'
G
W
N
A
M
E
_
I
N
T
E
R
N
A
L
'
 
]
 
=
 
$
g
a
t
e
w
a
y
_
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
w
[
 
'
G
W
I
N
P
U
T
'
 
]
 
=
 
'
<
i
n
p
u
t
 
t
y
p
e
=
"
r
a
d
i
o
"
 
i
d
=
"
'
.
$
g
a
t
e
w
a
y
_
n
a
m
e
.
'
"
 
n
a
m
e
=
"
p
l
u
g
i
n
"
 
v
a
l
u
e
=
"
'
.
$
g
a
t
e
w
a
y
_
n
a
m
e
.
'
"
 
'
.
$
c
h
e
c
k
e
d
.
'
 
/
>
 
'
.
$
g
w
[
 
'
G
W
N
A
M
E
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
d
i
r
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
,
 
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
'
,
 
$
t
m
p
g
a
t
e
w
a
y
d
i
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
d
i
r
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
\
\
'
,
 
'
/
'
,
 
$
g
a
t
e
w
a
y
d
i
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
w
[
 
'
G
W
I
M
A
G
E
'
 
]
 
=
 
'
<
i
m
g
 
s
r
c
=
"
'
.
$
g
a
t
e
w
a
y
d
i
r
.
'
j
0
0
5
1
0
'
.
$
g
a
t
e
w
a
y
_
n
a
m
e
.
'
.
g
i
f
"
 
b
o
r
d
e
r
=
"
0
"
>
'
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
C
l
a
s
s
e
s
[
'
0
0
5
0
9
'
]
[
$
g
a
t
e
w
a
y
_
n
a
m
e
]
)
)
 
{
 
/
/
 
L
e
t
'
s
 
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
 
s
i
t
e
 
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
n
'
t
 
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
 
I
f
 
c
o
u
n
t
 
=
=
 
0
,
 
t
h
e
n
 
t
h
e
y
 
h
a
v
e
,
 
w
e
 
d
o
n
'
t
 
w
a
n
t
 
t
o
 
a
t
t
e
m
p
t
 
t
o
 
s
h
o
w
 
t
h
i
s
 
g
a
t
e
w
a
y

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
s
[
 
]
 
=
 
$
g
w
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
+
+
$
c
o
u
n
t
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
g
a
t
e
w
a
y
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
w
o
[
 
'
G
A
T
E
W
A
Y
C
H
O
I
C
E
I
N
T
R
O
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
_
J
O
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
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
g
w
o
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
P
R
O
C
E
S
S
U
R
L
'
 
]
 
=
 
'
p
r
o
c
e
s
s
p
a
y
m
e
n
t
'
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
P
R
O
C
E
S
S
U
R
L
_
S
A
V
E
T
O
C
A
R
T
'
 
]
 
=
 
'
s
a
v
e
_
b
o
o
k
i
n
g
_
t
o
_
c
a
r
t
'
;


 
 
 
 
 
 
 
 
i
f
 
(
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
U
R
L
'
 
]
 
=
 
j
o
m
r
e
s
U
R
L
(
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
N
O
S
E
F
.
'
&
t
a
s
k
=
a
m
e
n
d
B
o
o
k
i
n
g
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
c
o
n
t
r
a
c
t
U
i
d
=
'
.
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
U
R
L
'
 
]
 
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
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
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
'
 
]
,
'
n
o
s
e
f
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
c
a
r
t
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
C
l
a
s
s
e
s
[
 
'
0
6
0
0
0
'
]
[
'
s
h
o
w
_
c
a
r
t
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
i
t
e
_
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
 
=
 
g
e
t
_
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s
(
'
p
a
y
p
a
l
'
,
 
0
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
 
(
i
s
s
e
t
(
$
s
i
t
e
_
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
[
'
o
v
e
r
r
i
d
e
'
]
)
 
&
&
 
$
s
i
t
e
_
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
[
'
o
v
e
r
r
i
d
e
'
]
 
=
=
 
'
1
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
'
 
]
 
=
=
 
'
1
'
)
 
|
|
 
e
m
p
t
y
(
$
g
a
t
e
w
a
y
D
e
e
t
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
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
 
]
 
=
 
'
<
i
n
p
u
t
 
c
l
a
s
s
=
"
f
g
-
b
u
t
t
o
n
 
u
i
-
s
t
a
t
e
-
d
e
f
a
u
l
t
 
u
i
-
c
o
r
n
e
r
-
a
l
l
"
 
t
y
p
e
=
"
s
u
b
m
i
t
"
 
i
d
=
"
s
e
n
d
"
 
n
a
m
e
=
"
s
e
n
d
"
 
v
a
l
u
e
=
"
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
 
f
a
l
s
e
,
 
f
a
l
s
e
)
.
'
"
 
c
l
a
s
s
=
"
b
u
t
t
o
n
"
 
o
n
c
l
i
c
k
=
"
r
e
t
u
r
n
 
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
_
v
a
l
i
d
a
t
e
(
t
r
u
e
)
;
"
 
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
r
t
o
u
t
p
u
t
[
 
]
 
=
 
a
r
r
a
y
(
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
 
=
>
 
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
 
f
a
l
s
e
,
 
f
a
l
s
e
)
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
A
R
T
_
O
R
'
 
=
>
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
 
v
 
4
.
5
.
7
 
s
t
r
i
p
p
i
n
g
 
o
u
t
 
t
h
e
 
r
o
o
m
 
s
p
e
c
i
f
i
c
 
s
t
u
f
f
 
i
n
t
o
 
a
 
n
e
w
 
a
r
r
a
y
.


 
 
 
 
 
 
 
 
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
i
n
c
l
u
d
e
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
_
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
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
F
U
L
L
D
E
S
C
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
F
U
L
L
D
E
S
C
'
 
]
 
=
 
'
'
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
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
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
 
]
 
=
 
'
'
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
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
 
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
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
_
i
n
f
o
 
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
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
[
 
'
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
 
]
 
=
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
[
 
'
H
A
R
R
I
V
A
L
'
 
]
 
=
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
A
R
R
I
V
A
L
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
[
 
'
A
R
R
I
V
A
L
'
 
]
 
=
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
A
R
R
I
V
A
L
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
[
 
'
H
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
 
]
 
=
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
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
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
[
 
'
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
 
]
 
=
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
[
 
'
H
D
A
Y
S
S
T
A
Y
I
N
G
'
 
]
 
=
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
D
A
Y
S
S
T
A
Y
I
N
G
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
[
 
'
D
A
Y
S
S
T
A
Y
I
N
G
'
 
]
 
=
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
D
A
Y
S
S
T
A
Y
I
N
G
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
[
 
'
H
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
 
]
 
=
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
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
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
[
 
'
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
 
]
 
=
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
[
 
'
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
T
O
T
A
L
'
 
]
 
=
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
T
O
T
A
L
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
[
 
'
F
U
L
L
D
E
S
C
'
 
]
 
=
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
F
U
L
L
D
E
S
C
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
[
 
'
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
'
 
]
 
=
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
[
 
'
D
I
S
C
O
U
N
T
'
 
]
 
=
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
D
I
S
C
O
U
N
T
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
[
 
'
H
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
 
]
 
=
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
H
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
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
[
 
'
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
 
]
 
=
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
[
 
'
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
 
]
 
=
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
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
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
[
 
'
R
O
O
M
T
O
T
A
L
'
 
]
 
=
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
 
'
R
O
O
M
T
O
T
A
L
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
_
i
n
f
o
[
 
]
 
=
 
$
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
[
'
T
E
R
M
S
_
M
O
D
A
L
_
C
O
N
T
E
N
T
S
'
]
 
=
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
6
0
0
0
'
,
 
'
t
e
r
m
s
'
,
 
a
r
r
a
y
(
'
r
e
t
u
r
n
_
t
e
m
p
l
a
t
e
'
 
=
>
 
t
r
u
e
)
)
;


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
p
a
r
t
i
c
u
l
a
r
s
[
 
]
 
=
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
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
i
n
c
l
u
d
e
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
_
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
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
 
]
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
m
r
p
_
r
o
o
m
_
d
e
t
a
i
l
s
'
,
 
$
m
r
p
_
r
o
o
m
_
d
e
t
a
i
l
s
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
r
o
o
m
_
i
n
f
o
'
,
 
$
r
o
o
m
_
i
n
f
o
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
b
o
o
k
i
n
g
_
r
o
o
m
s
'
,
 
$
b
o
o
k
i
n
g
_
r
o
o
m
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
_
i
n
f
o
'
,
 
$
b
o
o
k
i
n
g
_
r
o
o
m
_
s
p
e
c
i
f
i
c
_
i
n
f
o
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
c
u
s
t
o
m
f
i
e
l
d
s
'
,
 
$
c
u
s
t
o
m
F
i
e
l
d
s
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
b
o
o
k
i
n
g
_
p
a
r
t
i
c
u
l
a
r
s
'
,
 
$
b
o
o
k
i
n
g
_
p
a
r
t
i
c
u
l
a
r
s
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
b
o
o
k
i
n
g
_
e
x
t
r
a
s
'
,
 
$
b
o
o
k
i
n
g
_
e
x
t
r
a
s
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
b
o
o
k
i
n
g
_
e
x
t
r
a
t
e
x
t
'
,
 
$
e
x
t
r
a
s
t
e
x
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
a
d
d
R
o
w
s
(
'
c
a
r
t
o
u
t
p
u
t
'
,
 
$
c
a
r
t
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
g
a
t
e
w
a
y
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
g
a
t
e
w
a
y
_
o
u
t
p
u
t
'
,
 
$
g
a
t
e
w
a
y
_
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
a
d
d
R
o
w
s
(
'
g
a
t
e
w
a
y
s
'
,
 
$
g
a
t
e
w
a
y
s
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
 
=
 
a
r
r
a
y
(
'
t
m
p
l
'
 
=
>
 
$
t
m
p
l
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
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
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
e
v
e
n
t
F
i
l
e
E
x
i
s
t
s
C
h
e
c
k
(
'
0
0
2
0
4
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
0
2
0
4
'
,
 
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
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
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
e
v
e
n
t
F
i
l
e
E
x
i
s
t
s
C
h
e
c
k
(
'
0
0
2
0
6
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
0
2
0
6
'
,
 
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
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
F
R
O
N
T
E
N
D
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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
i
n
c
l
u
d
e
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
_
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
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
b
o
o
k
i
n
g
s
_
s
h
o
w
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
.
h
t
m
l
'
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
b
o
o
k
i
n
g
s
_
s
h
o
w
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
_
n
o
r
o
o
m
s
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
 
=
 
a
r
r
a
y
(
'
b
o
o
k
i
n
g
_
p
a
r
t
s
'
 
=
>
 
$
b
o
o
k
i
n
g
_
p
a
r
t
s
)
;

 
 
 
 
 
 
 
 
/
/
 
T
r
i
g
g
e
r
 
p
o
i
n
t
.
 
N
o
t
 
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
s
e
d
,
 
b
u
t
 
a
v
a
i
l
a
b
l
e
 
i
f
 
s
o
m
e
b
o
d
y
 
w
a
n
t
s
 
a
 
t
r
i
g
g
e
r
 
p
o
i
n
t
 
a
f
t
e
r
 
t
h
e
 
c
o
n
f
i
r
m
 
b
o
o
k
i
n
g
 
p
h
a
s
e

 
 
 
 
 
 
 
 
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
3
0
1
0
'
,
 
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
 
t
o
u
c
h
_
t
e
m
p
l
a
t
e
_
l
a
n
g
u
a
g
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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
o
u
t
p
u
t
[
 
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
_
J
O
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
_
J
O
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
_
J
O
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
_
J
O
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
_
J
O
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
_
J
O
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
_
J
O
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
_
J
O
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
_
J
O
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
_
J
O
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
_
J
O
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
_
J
O
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
_
J
O
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
_
J
O
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
_
J
O
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
_
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
_
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
_
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
_
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
_
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
_
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
o
u
t
p
u
t
 
a
s
 
$
o
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
o
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
b
r
/
>
'
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

