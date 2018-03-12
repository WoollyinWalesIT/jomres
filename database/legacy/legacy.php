
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


/
/
 
H
a
v
e
 
t
o
 
d
o
 
t
h
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
 
o
t
h
e
r
w
i
s
e
 
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
e
v
e
r
 
r
u
n
 
w
h
e
n
 
u
p
g
r
a
d
i
n
g
 
f
r
o
m
 
v
2
.
5
 
t
o
 
v
3
.
x
 
o
f
 
j
o
o
m
l
a

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
j
o
o
m
l
a
(
)
)
 
{

 
 
 
 
$
r
e
s
u
l
t
 
=
 
t
r
u
e
;

 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
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
.
J
R
D
S
.
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
I
S
T
R
A
T
O
R
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
J
R
D
S
.
'
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
'
.
J
R
D
S
.
'
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
'
.
J
R
D
S
.
'
a
d
m
i
n
.
j
o
m
r
e
s
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
u
n
l
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
.
J
R
D
S
.
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
I
S
T
R
A
T
O
R
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
J
R
D
S
.
'
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
'
.
J
R
D
S
.
'
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
'
.
J
R
D
S
.
'
a
d
m
i
n
.
j
o
m
r
e
s
.
p
h
p
'
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
 
t
r
i
e
d
 
t
o
 
d
e
l
e
t
e
 
'
.
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
.
J
R
D
S
.
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
I
S
T
R
A
T
O
R
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
J
R
D
S
.
'
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
'
.
J
R
D
S
.
'
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
'
.
J
R
D
S
.
'
a
d
m
i
n
.
j
o
m
r
e
s
.
p
h
p
'
.
'
.
 
H
o
w
e
v
e
r
,
 
f
i
l
e
 
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
r
o
m
 
h
a
p
p
e
n
i
n
g
,
 
s
o
 
y
o
u
 
M
U
S
T
 
d
e
l
e
t
e
 
t
h
i
s
 
f
i
l
e
 
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
 
c
o
n
t
i
n
u
e
 
w
i
t
h
 
t
h
e
 
u
p
g
r
a
d
e
.
 
T
h
i
s
 
f
i
l
e
 
i
s
 
n
o
t
 
u
s
e
d
 
b
y
 
J
o
o
m
l
a
 
3
.
x
+
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

 
 
 
 
}

}


t
r
y
 
{

	
/
/
d
o
 
t
a
b
l
e
 
u
p
d
a
t
e
s
,
 
t
h
e
 
l
e
g
a
c
y
 
w
a
y

	
d
o
T
a
b
l
e
U
p
d
a
t
e
s
(
)
;


	
/
/
r
e
m
o
v
e
 
o
b
s
o
l
e
t
e
 
c
r
o
n
 
j
o
b
s

	
r
e
m
o
v
e
C
r
o
n
J
o
b
(
'
i
n
v
o
i
c
e
'
)
;

	
r
e
m
o
v
e
C
r
o
n
J
o
b
(
'
o
p
t
i
m
i
s
e
'
)
;

	
r
e
m
o
v
e
C
r
o
n
J
o
b
(
'
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
'
)
;


	
/
/
f
o
r
 
u
p
d
a
t
e
s
 
f
r
o
m
 
J
o
m
r
e
s
 
v
6
.
6
.
5
.

	
u
p
d
a
t
e
I
m
a
g
e
s
(
)
;


	
/
/
i
m
p
o
r
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
 
a
n
d
 
r
e
g
i
o
n
s

	
i
m
p
o
r
t
_
c
o
u
n
t
r
i
e
s
(
)
;

	
i
m
p
o
r
t
_
r
e
g
i
o
n
s
(
)
;


	
/
/
f
o
r
 
u
p
d
a
t
e
s
 
f
r
o
m
 
J
o
m
r
e
s
 
v
7
 
m
a
y
b
e
?

	
i
m
p
o
r
t
_
i
m
a
g
e
s
_
t
o
_
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
_
d
i
r
e
c
t
o
r
i
e
s
(
)
;


	
/
/
a
d
d
 
a
p
i
 
a
n
d
 
w
e
b
h
o
o
k
s
 
t
a
b
l
e
s

	
a
d
d
A
p
i
A
n
d
W
e
b
h
o
o
k
s
T
a
b
l
e
s
(
)
;


	
/
/
f
i
n
i
s
h
i
n
g
 
t
o
u
c
h
e
s

	
u
p
d
a
t
e
M
r
C
o
n
f
i
g
(
)
;

	
u
p
d
a
t
e
P
l
u
g
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
(
)
;

	
i
n
s
t
a
l
l
C
r
o
n
j
o
b
s
(
)
;

	
c
r
e
a
t
e
E
x
t
r
a
I
n
d
e
x
s
(
)
;

}
 

c
a
t
c
h
 
(
E
x
c
e
p
t
i
o
n
 
$
e
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
 
s
o
m
e
t
h
i
n
g
 
w
e
n
t
 
w
r
o
n
g
 
w
h
e
n
 
r
u
n
n
i
n
g
 
t
h
e
 
l
e
g
a
c
y
 
i
n
s
t
a
l
l
e
r
,
 
J
o
m
r
e
s
 
m
a
y
 
n
o
t
 
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
 
p
r
o
p
e
r
l
y
.
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
$
e
-
>
g
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
)
)
;

}


/
*
*

 
*

 
*
 
L
e
g
a
c
y
 
u
p
d
a
t
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

 
*

 
*
*
/


/
/
 
F
o
r
 
J
o
m
r
e
s
 
6
.
6
.
5
,
 
s
e
e
 
i
f
 
w
e
 
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
 
l
a
r
g
e
,
m
e
d
i
u
m
 
a
n
d
 
t
h
u
m
b
 
i
m
a
g
e
s
 
t
o
 
a
 
j
o
o
m
l
a
 
s
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
y
.
 
A
l
l
o
w
s
 
t
h
e
 
u
s
e
 
o
f
 
J
o
o
m
l
a
 
g
a
l
l
e
r
y
 
p
l
u
g
i
n
s
.

f
u
n
c
t
i
o
n
 
u
p
d
a
t
e
I
m
a
g
e
s
(
)

{

 
 
 
 
i
f
 
(
!
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
j
o
o
m
l
a
(
)
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
$
d
o
c
s
 
=
 
s
c
a
n
d
i
r
_
g
e
t
d
i
r
e
c
t
o
r
i
e
s
(
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
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
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
d
o
c
s
 
a
s
 
$
d
i
r
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
d
i
r
(
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
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
$
d
i
r
.
J
R
D
S
.
'
j
o
o
m
l
a
'
)
)
 
{
 
/
/
 
T
h
e
 
d
i
r
e
c
t
o
r
y
 
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
 
a
 
"
j
o
o
m
l
a
"
 
s
u
b
d
i
r
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
 
w
e
 
w
i
l
l
 
b
e
l
i
e
v
e
 
t
h
a
t
 
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
 
h
a
s
 
a
l
r
e
a
d
y
 
b
e
e
n
 
u
p
d
a
t
e
d
 
s
o
 
w
e
'
l
l
 
j
u
s
t
 
d
r
o
p
 
o
u
t
.

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
d
o
c
s
 
a
s
 
$
d
i
r
)
 
{

 
 
 
 
 
 
 
 
$
l
a
r
g
e
_
i
m
a
g
e
s
_
a
r
r
a
y
 
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
e
d
i
u
m
_
i
m
a
g
e
s
_
a
r
r
a
y
 
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
s
m
a
l
l
_
i
m
a
g
e
s
_
a
r
r
a
y
 
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
_
n
u
m
e
r
i
c
(
$
d
i
r
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
F
i
r
s
t
 
w
e
'
l
l
 
s
o
r
t
 
f
i
l
e
s
 
i
n
t
o
 
a
n
 
a
p
p
r
o
p
r
i
a
t
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
i
n
g
 
a
r
r
a
y
.

 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
r
e
c
t
o
r
y
_
f
i
l
e
s
 
=
 
s
c
a
n
d
i
r
_
g
e
t
f
i
l
e
s
(
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
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
$
d
i
r
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
d
i
r
e
c
t
o
r
y
_
f
i
l
e
s
 
a
s
 
$
f
i
l
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
f
i
l
e
,
 
'
t
h
u
m
b
n
a
i
l
.
j
p
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
m
a
l
l
_
i
m
a
g
e
s
_
a
r
r
a
y
[
 
]
 
=
 
$
f
i
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
s
t
r
s
t
r
(
$
f
i
l
e
,
 
'
t
h
u
m
b
n
a
i
l
_
m
e
d
.
j
p
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
d
i
u
m
_
i
m
a
g
e
s
_
a
r
r
a
y
[
 
]
 
=
 
$
f
i
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
r
g
e
_
i
m
a
g
e
s
_
a
r
r
a
y
[
 
]
 
=
 
$
f
i
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
N
e
x
t
,
 
w
e
'
r
e
 
g
o
i
n
g
 
t
o
 
l
o
o
k
 
f
o
r
 
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
 
t
h
a
t
 
d
o
n
'
t
 
h
a
v
e
 
a
 
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
i
n
g
 
l
a
r
g
e
r
 
i
m
a
g
e
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
r
e
v
i
o
u
s
 
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
 
d
i
d
n
'
t
 
c
l
e
a
n
 
u
p
 
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
 
p
r
o
p
e
r
l
y
 
w
h
e
n
 
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
e
r
e
 
d
e
l
e
t
e
d

 
 
 
 
 
 
 
 
 
 
 
 
/
/
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
 
"
C
l
e
a
n
i
n
g
 
u
p
 
"
 
.
 
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
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
 
.
 
$
d
i
r
 
.
 
"
,
 
d
e
l
e
t
i
n
g
 
a
n
y
 
i
m
a
g
e
s
 
t
h
a
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
i
n
g
 
m
a
i
n
 
i
m
a
g
e
 
f
i
l
e
.
"
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
s
m
a
l
l
_
i
m
a
g
e
s
_
a
r
r
a
y
 
a
s
 
$
k
e
y
 
=
>
 
$
s
m
a
l
l
_
i
m
a
g
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
n
_
f
i
l
e
n
a
m
e
 
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
_
t
h
u
m
b
n
a
i
l
.
j
p
g
'
,
 
'
.
j
p
g
'
,
 
$
s
m
a
l
l
_
i
m
a
g
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
f
i
l
e
_
e
x
i
s
t
s
(
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
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
$
d
i
r
.
J
R
D
S
.
$
m
a
i
n
_
f
i
l
e
n
a
m
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
l
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
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
$
d
i
r
.
J
R
D
S
.
$
s
m
a
l
l
_
i
m
a
g
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
s
m
a
l
l
_
i
m
a
g
e
s
_
a
r
r
a
y
[
 
$
k
e
y
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
m
e
d
i
u
m
_
i
m
a
g
e
s
_
a
r
r
a
y
 
a
s
 
$
k
e
y
 
=
>
 
$
m
e
d
i
u
m
_
i
m
a
g
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
i
n
_
f
i
l
e
n
a
m
e
 
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
_
t
h
u
m
b
n
a
i
l
_
m
e
d
.
j
p
g
'
,
 
'
.
j
p
g
'
,
 
$
m
e
d
i
u
m
_
i
m
a
g
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
f
i
l
e
_
e
x
i
s
t
s
(
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
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
$
d
i
r
.
J
R
D
S
.
$
m
a
i
n
_
f
i
l
e
n
a
m
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
l
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
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
$
d
i
r
.
J
R
D
S
.
$
m
e
d
i
u
m
_
i
m
a
g
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
m
e
d
i
u
m
_
i
m
a
g
e
s
_
a
r
r
a
y
[
 
$
k
e
y
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
a
d
d
A
p
i
A
n
d
W
e
b
h
o
o
k
s
T
a
b
l
e
s
(
)
 

{

	
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
o
a
u
t
h
_
c
l
i
e
n
t
s
 
(

	
	
`
c
l
i
e
n
t
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
8
0
)
 
N
O
T
 
N
U
L
L
,
 

	
	
`
c
l
i
e
n
t
_
s
e
c
r
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
8
0
)
,
 

	
	
`
r
e
d
i
r
e
c
t
_
u
r
i
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
 
N
O
T
 
N
U
L
L
,
 

	
	
`
g
r
a
n
t
_
t
y
p
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
8
0
)
,
 

	
	
`
s
c
o
p
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
0
0
0
)
,
 

	
	
`
u
s
e
r
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
8
0
)
,
 

	
	
`
i
d
e
n
t
i
f
i
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

	
	
C
O
N
S
T
R
A
I
N
T
 
c
l
i
e
n
t
s
_
c
l
i
e
n
t
_
i
d
_
p
k
 

	
	
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
c
l
i
e
n
t
_
i
d
)

	
	
)
"
;

	
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
,
"
"
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
o
a
u
t
h
_
a
c
c
e
s
s
_
t
o
k
e
n
s
 
(
a
c
c
e
s
s
_
t
o
k
e
n
 
V
A
R
C
H
A
R
(
4
0
)
 
N
O
T
 
N
U
L
L
,
 
c
l
i
e
n
t
_
i
d
 
V
A
R
C
H
A
R
(
8
0
)
 
N
O
T
 
N
U
L
L
,
 
u
s
e
r
_
i
d
 
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
 
e
x
p
i
r
e
s
 
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
,
 
s
c
o
p
e
 
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
 
C
O
N
S
T
R
A
I
N
T
 
a
c
c
e
s
s
_
t
o
k
e
n
_
p
k
 
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
a
c
c
e
s
s
_
t
o
k
e
n
)
)
"
;

	
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
,
"
"
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
o
a
u
t
h
_
a
u
t
h
o
r
i
z
a
t
i
o
n
_
c
o
d
e
s
 
(
a
u
t
h
o
r
i
z
a
t
i
o
n
_
c
o
d
e
 
V
A
R
C
H
A
R
(
4
0
)
 
N
O
T
 
N
U
L
L
,
 
c
l
i
e
n
t
_
i
d
 
V
A
R
C
H
A
R
(
8
0
)
 
N
O
T
 
N
U
L
L
,
 
u
s
e
r
_
i
d
 
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
 
r
e
d
i
r
e
c
t
_
u
r
i
 
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
 
e
x
p
i
r
e
s
 
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
,
 
s
c
o
p
e
 
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
 
C
O
N
S
T
R
A
I
N
T
 
a
u
t
h
_
c
o
d
e
_
p
k
 
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
a
u
t
h
o
r
i
z
a
t
i
o
n
_
c
o
d
e
)
)
"
;

	
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
,
"
"
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
o
a
u
t
h
_
r
e
f
r
e
s
h
_
t
o
k
e
n
s
 
(
r
e
f
r
e
s
h
_
t
o
k
e
n
 
V
A
R
C
H
A
R
(
4
0
)
 
N
O
T
 
N
U
L
L
,
 
c
l
i
e
n
t
_
i
d
 
V
A
R
C
H
A
R
(
8
0
)
 
N
O
T
 
N
U
L
L
,
 
u
s
e
r
_
i
d
 
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
 
e
x
p
i
r
e
s
 
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
,
 
s
c
o
p
e
 
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
 
C
O
N
S
T
R
A
I
N
T
 
r
e
f
r
e
s
h
_
t
o
k
e
n
_
p
k
 
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
r
e
f
r
e
s
h
_
t
o
k
e
n
)
)
"
;

	
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
,
"
"
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
o
a
u
t
h
_
s
c
o
p
e
s
 
(
s
c
o
p
e
 
T
E
X
T
,
 
i
s
_
d
e
f
a
u
l
t
 
B
O
O
L
E
A
N
)
"
;

	
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
,
"
"
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
 
{

	
	
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
i
n
s
e
r
t
_
n
e
w
_
s
e
t
t
i
n
g
(
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
,
 
'
0
'
)
;

	
}


	
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
C
O
L
U
M
N
S
 
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
o
a
u
t
h
_
c
l
i
e
n
t
s
 
L
I
K
E
 
'
i
d
e
n
t
i
f
i
e
r
'
"
;

	
$
c
o
l
E
x
i
s
t
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
c
o
u
n
t
(
$
c
o
l
E
x
i
s
t
s
)
 
<
 
1
)

	
	
{

	
	
$
q
u
e
r
y
 
=
 
"
A
L
T
E
R
 
T
A
B
L
E
 
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
o
a
u
t
h
_
c
l
i
e
n
t
s
`
 
A
D
D
 
`
i
d
e
n
t
i
f
i
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
 
"
;

	
	
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
,
"
"
)
;

	
	
}


	
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
w
e
b
h
o
o
k
s
_
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
s
 
(

	
	
`
i
d
`
 
I
N
T
(
1
1
)
 
a
u
t
o
_
i
n
c
r
e
m
e
n
t
,
 

	
	
`
m
a
n
a
g
e
r
_
i
d
`
 
i
n
t
(
1
1
)
,

	
	
`
s
e
t
t
i
n
g
s
`
 
 
t
e
x
t
 
n
u
l
l
,
 

	
	
`
e
n
a
b
l
e
d
`
 
B
O
O
L
 
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
i
d
`
)

	
	
)
"
;

	
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
,
"
"
)
;


	
i
f
 
(
 
!
c
h
e
c
k
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
s
E
n
a
b
l
e
d
C
o
l
E
x
i
s
t
s
(
)
 
)
 
a
l
t
e
r
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
s
E
n
a
b
l
e
d
C
o
l
(
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
 
s
e
e
 
i
f
 
t
h
e
r
e
'
s
 
a
 
"
s
y
s
t
e
m
"
 
u
s
e
r
 
i
n
 
t
h
e
 
d
a
t
a
b
a
s
e
,
 
i
f
 
t
h
e
r
e
'
s
 
n
o
t
 
w
e
'
l
l
 
c
r
e
a
t
e
 
t
h
e
m
.
 
T
h
i
s
 
i
s
 
a
 
o
n
c
e
 
o
n
l
y
 
a
c
t
i
o
n

 
 
 
 
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
 
c
l
i
e
n
t
_
i
d
,
s
c
o
p
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
o
a
u
t
h
_
c
l
i
e
n
t
s
 
W
H
E
R
E
 
c
l
i
e
n
t
_
i
d
 
=
 
'
s
y
s
t
e
m
'
 
L
I
M
I
T
 
1
"
;

 
 
 
 
$
r
e
s
u
l
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

 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
r
e
s
u
l
t
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
 
"
I
N
S
E
R
T
 
I
N
T
O
 
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
o
a
u
t
h
_
c
l
i
e
n
t
s
 

 
 
 
 
 
 
 
 
(
`
c
l
i
e
n
t
_
i
d
`
,
`
c
l
i
e
n
t
_
s
e
c
r
e
t
`
,
`
r
e
d
i
r
e
c
t
_
u
r
i
`
,
`
g
r
a
n
t
_
t
y
p
e
s
`
,
`
s
c
o
p
e
`
,
`
u
s
e
r
_
i
d
`
)
 

 
 
 
 
 
 
 
 
V
A
L
U
E
S
 

 
 
 
 
 
 
 
 
(
'
s
y
s
t
e
m
'
,
 
'
"
.
c
r
e
a
t
e
N
e
w
A
P
I
K
e
y
(
)
.
"
'
,
 
'
'
,
 
N
U
L
L
,
 
'
*
'
,
 
'
4
2
9
4
9
6
7
2
9
5
'
)
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
C
R
E
A
T
E
D
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
C
R
E
A
T
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
 
)
 
)
 
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
U
n
a
b
l
e
 
t
o
 
u
p
d
a
t
e
 
o
a
u
t
h
 
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
,
 
m
y
s
q
l
 
d
b
 
f
a
i
l
u
r
e
'
)
;

	
	
}

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
d
o
T
a
b
l
e
U
p
d
a
t
e
s
(
)

{

 
 
 
 
/
/
 
M
i
g
h
t
 
n
o
t
 
n
e
e
d
 
t
h
i
s
,
 
c
o
m
m
e
n
t
e
d
 
o
u
t
 
f
o
r
 
n
o
w

 
 
 
 
/
/
 
D
i
s
a
b
l
e
d
 
0
3
/
0
2
/
2
0
1
7

 
 
 
 
/
*
 
i
f
 
(
c
h
e
c
k
E
x
t
r
a
S
e
r
v
i
c
e
s
T
a
b
l
e
N
e
e
d
s
R
e
n
a
m
i
n
g
(
)
)
 
{

 
 
 
 
 
 
 
 
r
e
n
a
m
e
E
x
t
r
a
S
e
r
v
i
c
e
s
T
a
b
l
e
(
)
;

 
 
 
 
}

 
*
/

 
 
 
 
u
p
d
a
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
_
f
e
a
t
u
r
e
s
_
i
m
a
g
e
s
_
p
a
t
h
s
(
)
;

 
 
 
 
u
p
d
a
t
e
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
_
i
m
a
g
e
s
_
p
a
t
h
s
(
)
;


 
 
 
 
i
f
 
(
!
c
h
e
c
k
I
n
v
o
i
c
e
s
P
r
o
p
e
r
t
y
u
i
d
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
I
n
v
o
i
c
e
s
P
r
o
p
e
r
t
y
u
i
d
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
I
n
v
o
i
c
e
s
C
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
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
I
n
v
o
i
c
e
s
C
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
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
c
r
e
a
t
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
M
e
s
s
a
g
e
s
T
a
b
l
e
(
)
;

 
 
 
 
i
f
 
(
!
c
h
e
c
k
P
r
o
p
e
r
t
y
s
T
i
m
e
s
t
a
m
p
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
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
s
T
i
m
e
s
t
a
m
p
C
o
l
(
)
;

 
 
 
 
}


 
 
 
 
i
f
 
(
!
c
h
e
c
k
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
s
T
a
b
l
e
s
E
x
i
s
t
(
)
)
 
{

 
 
 
 
 
 
 
 
c
r
e
a
t
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
s
T
a
b
l
e
s
(
)
;

 
 
 
 
}

 
 
 
 
a
l
t
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
L
a
t
L
o
n
g
T
o
C
h
a
r
1
2
(
)
;

 
 
 
 
i
f
 
(
!
c
h
e
c
k
E
x
t
r
a
s
T
a
x
r
a
t
e
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
E
x
t
r
a
s
T
a
x
r
a
t
e
C
o
l
(
)
;

 
 
 
 
}


 
 
 
 
i
f
 
(
!
c
h
e
c
k
S
u
b
s
c
r
i
b
e
r
s
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
P
a
c
k
a
g
e
I
d
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
S
u
b
s
c
r
i
b
e
r
s
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
P
a
c
k
a
g
e
I
d
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
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
E
x
p
i
r
a
t
i
o
n
D
a
t
e
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
d
o
V
9
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
U
p
d
a
t
e
s
(
)
;

 
 
 
 
}


 
 
 
 
i
f
 
(
!
c
h
e
c
k
P
f
e
a
t
u
r
e
s
P
t
y
p
e
i
d
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
P
f
e
a
t
u
r
e
s
P
t
y
p
e
i
d
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
C
o
n
t
r
a
c
t
s
I
n
v
o
i
c
e
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
C
o
n
t
r
a
c
t
s
I
n
v
o
i
c
e
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
G
u
e
s
t
s
D
i
s
c
o
u
n
t
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
G
u
e
s
t
s
D
i
s
c
o
u
n
t
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
R
e
v
i
e
w
s
T
a
b
l
e
s
E
x
i
s
t
(
)
)
 
{

 
 
 
 
 
 
 
 
c
r
e
a
t
e
R
e
v
i
e
w
s
T
a
b
l
e
s
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
R
e
v
i
e
w
D
e
t
a
i
l
T
a
b
l
e
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
c
r
e
a
t
e
R
e
v
i
e
w
D
e
t
a
i
l
T
a
b
l
e
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
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
A
r
c
h
i
v
e
T
a
b
l
e
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
c
r
e
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
d
a
t
a
A
r
c
h
i
v
e
T
a
b
l
e
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
R
o
o
m
t
y
p
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
X
r
e
f
T
a
b
l
e
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
c
r
e
a
t
e
R
o
o
m
t
y
p
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
X
r
e
f
T
a
b
l
e
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
P
a
r
t
n
e
r
T
a
b
l
e
s
E
x
i
s
t
(
)
)
 
{

 
 
 
 
 
 
 
 
c
r
e
a
t
e
P
a
r
t
n
e
r
T
a
b
l
e
s
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
M
a
n
a
g
e
r
T
i
m
e
z
o
n
e
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
M
a
n
a
g
e
r
T
i
m
e
z
o
n
e
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
M
a
n
a
g
e
r
S
u
s
p
e
n
d
e
d
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
M
a
n
a
g
e
r
S
u
s
p
e
n
d
e
d
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
I
n
v
o
i
c
e
s
I
s
C
o
m
m
i
s
i
o
n
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
I
n
v
o
i
c
e
s
I
s
C
o
m
m
i
s
i
o
n
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
G
u
e
s
t
P
r
o
f
i
l
e
T
a
b
l
e
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
c
r
e
a
t
e
G
u
e
s
t
P
r
o
f
i
l
e
T
a
b
l
e
(
)
;

 
 
 
 
}

 
 
 
 
/
/
i
f
 
(
 
!
c
h
e
c
k
E
x
t
r
a
S
e
r
v
i
c
e
s
T
a
b
l
e
E
x
i
s
t
s
(
)
 
)
 
c
r
e
a
t
e
E
x
t
r
a
S
e
r
v
i
c
e
s
T
a
b
l
e
(
)
;
 
/
/
 
D
i
s
a
b
l
e
d
 
i
n
 
J
o
m
r
e
s
 
8
.
1

 
 
 
 
i
f
 
(
!
c
h
e
c
k
E
x
t
r
a
S
e
r
v
i
c
e
s
T
a
x
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
E
x
t
r
a
S
e
r
v
i
c
e
s
T
a
x
C
o
l
(
)
;

 
 
 
 
}


 
 
 
 
i
f
 
(
!
c
h
e
c
k
C
o
u
p
o
n
s
B
o
o
k
i
n
g
V
a
l
i
d
C
o
l
s
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
C
o
u
p
o
n
s
B
o
o
k
i
n
g
V
a
l
i
d
C
o
l
s
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
L
i
n
e
i
t
e
m
s
I
n
c
l
u
s
i
v
e
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
L
i
n
e
i
t
e
m
s
I
n
c
l
u
s
i
v
e
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
E
x
t
r
a
s
A
u
t
o
s
e
l
e
c
t
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
E
x
t
r
a
s
A
u
t
o
S
e
l
e
c
t
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
P
t
y
p
e
s
O
r
d
e
r
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
P
t
y
p
e
s
O
r
d
e
r
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
A
c
c
e
s
s
C
o
n
t
r
o
l
T
a
b
l
e
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
c
r
e
a
t
e
A
c
c
e
s
s
C
o
n
t
r
o
l
T
a
b
l
e
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
I
n
v
o
i
c
e
s
G
u
e
s
t
i
d
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
I
n
v
o
i
c
e
s
G
u
e
s
t
i
d
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
E
x
t
r
a
S
e
r
v
i
c
e
s
T
a
x
t
a
x
_
c
o
d
e
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
E
x
t
r
a
S
e
r
v
i
c
e
s
T
a
x
t
a
x
_
c
o
d
e
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
C
o
u
n
t
r
i
e
s
T
a
b
l
e
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
c
r
e
a
t
e
C
o
u
n
t
r
i
e
s
T
a
b
l
e
(
)
;

 
 
 
 
}


 
 
 
 
m
i
g
r
a
t
e
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
s
(
)
;


 
 
 
 
i
f
 
(
!
c
h
e
c
k
P
r
o
p
e
r
t
y
s
A
p
p
r
o
v
e
d
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
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
s
A
p
p
r
o
v
e
d
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
P
r
o
p
e
r
t
y
s
S
u
p
e
r
i
o
r
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
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
s
S
u
p
e
r
i
o
r
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
P
r
o
p
e
r
t
y
s
M
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
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
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
s
M
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
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
G
u
e
s
t
s
V
a
t
c
o
d
e
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
G
u
e
s
t
s
V
a
t
c
o
d
e
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
T
a
x
R
u
l
e
s
T
a
b
l
e
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
c
r
e
a
t
e
T
a
x
R
u
l
e
s
T
a
b
l
e
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
I
n
v
o
i
c
e
s
V
A
T
F
l
a
g
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
I
n
v
o
i
c
e
s
V
A
T
F
l
a
g
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
C
r
a
t
e
s
T
a
x
R
a
t
e
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
C
r
a
t
e
s
T
a
x
R
a
t
e
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
P
T
y
p
e
X
r
e
f
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
P
T
y
p
e
X
r
e
f
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
C
o
n
t
r
a
c
t
s
C
h
a
n
n
e
l
M
a
n
a
g
e
r
B
o
o
k
i
n
g
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
C
o
n
t
r
a
c
t
s
C
h
a
n
n
e
l
M
a
n
a
g
e
r
B
o
o
k
i
n
g
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
M
a
n
a
g
e
r
S
i
m
p
l
e
c
o
n
f
i
g
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
M
a
n
a
g
e
r
S
i
m
p
l
e
c
o
n
f
i
g
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
T
a
r
i
f
f
t
y
p
e
s
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
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
T
a
r
i
f
f
t
y
p
e
s
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
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
C
o
n
t
r
a
c
t
s
A
p
p
r
o
v
e
d
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
C
o
n
t
r
a
c
t
s
A
p
p
r
o
v
e
d
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
C
u
s
t
o
m
e
r
t
y
p
e
s
I
s
C
h
i
l
d
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
C
u
s
t
o
m
e
r
t
y
p
e
s
I
s
C
h
i
l
d
C
o
l
(
)
;

 
 
 
 
}


 
 
 
 
c
h
e
c
k
L
i
n
e
i
t
e
m
s
I
n
i
t
q
t
y
C
o
l
F
l
o
a
t
(
)
;


 
 
 
 
i
f
 
(
!
c
h
e
c
k
C
o
n
t
r
a
c
t
s
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
a
r
c
h
i
v
e
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
C
o
n
t
r
a
c
t
s
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
a
r
c
h
i
v
e
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
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
a
r
c
h
i
v
e
C
o
n
t
r
a
c
t
i
d
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
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
a
r
c
h
i
v
e
C
o
n
t
r
a
c
t
i
d
(
)
;

 
 
 
 
}


 
 
 
 
i
f
 
(
!
c
h
e
c
k
C
o
n
t
r
a
c
t
s
L
a
n
g
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
C
o
n
t
r
a
c
t
s
L
a
n
g
(
)
;

 
 
 
 
}


 
 
 
 
i
f
 
(
!
c
h
e
c
k
P
r
o
p
e
r
t
y
s
S
i
t
e
I
d
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
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
s
S
i
t
e
I
d
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
T
a
x
r
a
t
e
s
E
U
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
T
a
x
r
a
t
e
s
E
U
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
M
a
n
a
g
e
r
L
a
s
t
a
c
t
i
v
e
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
M
a
n
a
g
e
r
L
a
s
t
a
c
t
i
v
e
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
C
o
n
t
r
a
c
t
s
L
a
s
t
c
h
a
n
g
e
d
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
C
o
n
t
r
a
c
t
s
L
a
s
t
c
h
a
n
g
e
d
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
P
r
o
p
e
r
t
y
s
L
a
s
t
c
h
a
n
g
e
d
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
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
s
L
a
s
t
c
h
a
n
g
e
d
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
L
i
n
e
i
t
e
m
s
I
s
p
a
y
m
e
n
t
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
L
i
n
e
i
t
e
m
s
I
s
p
a
y
m
e
n
t
C
o
l
(
)
;

 
 
 
 
}


 
 
 
 
d
r
o
p
_
p
o
r
t
a
l
_
b
o
o
k
i
n
g
s
_
t
a
b
l
e
(
)
;

 
 
 
 
d
r
o
p
_
p
o
r
t
a
l
_
u
s
e
r
s
_
t
a
b
l
e
(
)
;


 
 
 
 
m
o
v
e
_
l
i
c
e
n
s
e
_
k
e
y
_
t
o
_
s
i
t
e
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


 
 
 
 
s
a
v
e
_
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
_
f
i
l
e
(
)
;


 
 
 
 
i
f
 
(
!
c
h
e
c
k
I
n
v
o
i
c
e
P
a
y
m
e
n
t
X
r
e
f
T
a
b
l
e
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
c
r
e
a
t
e
I
n
v
o
i
c
e
P
a
y
m
e
n
t
X
r
e
f
T
a
b
l
e
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
E
x
t
r
a
s
V
a
l
i
d
f
r
o
m
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
E
x
t
r
a
s
V
a
l
i
d
f
r
o
m
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
E
x
t
r
a
s
I
n
c
l
u
d
e
i
n
l
i
s
t
s
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
E
x
t
r
a
s
I
n
c
l
u
d
e
i
n
l
i
s
t
s
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
R
f
e
a
t
u
r
e
s
I
m
a
g
e
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
R
f
e
a
t
u
r
e
s
I
m
a
g
e
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
P
f
e
a
t
u
r
e
s
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
T
a
b
l
e
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
c
r
e
a
t
e
P
f
e
a
t
u
r
e
s
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
T
a
b
l
e
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
P
f
e
a
t
u
r
e
s
C
a
t
e
g
o
r
y
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
P
f
e
a
t
u
r
e
s
C
a
t
e
g
o
r
y
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
c
h
e
c
k
R
o
o
m
S
m
o
k
i
n
g
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
R
o
o
m
s
S
m
o
k
i
n
g
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
c
h
e
c
k
C
o
n
t
r
a
c
t
s
S
m
o
k
i
n
g
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
C
o
n
t
r
a
c
t
s
S
m
o
k
i
n
g
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
E
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
Q
t
y
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
E
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
Q
t
y
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
P
a
r
t
n
e
r
B
o
o
k
i
n
g
s
T
a
b
l
e
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
c
r
e
a
t
e
P
a
r
t
n
e
r
B
o
o
k
i
n
g
s
T
a
b
l
e
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
G
u
e
s
t
s
P
a
r
t
n
e
r
I
d
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
G
u
e
s
t
s
P
a
r
t
n
e
r
I
d
C
o
l
(
)
;

 
 
 
 
}


 
 
 
 
i
f
 
(
!
c
h
e
c
k
E
x
t
r
a
s
L
i
m
i
t
e
d
t
o
r
o
o
m
t
y
p
e
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
E
x
t
r
a
s
L
i
m
i
t
e
d
t
o
r
o
o
m
t
y
p
e
C
o
l
(
)
;

 
 
 
 
}


 
 
 
 
i
f
 
(
!
c
h
e
c
k
C
o
n
t
r
a
c
t
s
R
e
f
e
r
r
e
r
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
C
o
n
t
r
a
c
t
s
R
e
f
e
r
r
e
r
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
P
t
y
p
e
s
M
r
p
s
r
p
F
l
a
g
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
P
t
y
p
e
s
M
r
p
s
r
p
F
l
a
g
C
o
l
(
)
;

 
 
 
 
}


 
 
 
 
i
f
 
(
c
h
e
c
k
R
t
y
p
e
s
S
r
p
O
n
l
y
F
l
a
g
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
d
r
o
p
R
t
y
p
e
s
S
r
p
O
n
l
y
F
l
a
g
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
!
c
h
e
c
k
P
r
o
p
e
r
t
y
s
P
e
r
m
i
t
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
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
s
P
e
r
m
i
t
C
o
l
(
)
;

 
 
 
 
}


 
 
 
 
i
f
 
(
c
h
e
c
k
M
a
n
a
g
e
r
s
U
s
e
r
n
a
m
e
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
d
o
U
s
e
r
R
o
l
e
s
U
p
d
a
t
e
s
(
)
;

 
 
 
 
}


 
 
 
 
i
f
 
(
!
c
h
e
c
k
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
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
R
o
o
m
s
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
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 

 
 
 
 
c
h
a
n
g
e
_
d
e
f
a
u
l
t
_
d
a
t
e
_
v
a
l
u
e
_
f
o
r
_
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
_
t
a
b
l
e
(
)
;


 
 
 
 
i
f
 
(
!
c
h
e
c
k
P
t
y
p
e
s
M
a
r
k
e
r
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
P
t
y
p
e
s
M
a
r
k
e
r
C
o
l
(
)
;

 
 
 
 
}


 
 
 
 
i
f
 
(
!
c
h
e
c
k
G
u
e
s
t
s
B
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
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
G
u
e
s
t
s
B
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
C
o
l
(
)
;

 
 
 
 
}

	

	
i
f
 
(
!
c
h
e
c
k
G
u
e
s
t
s
P
r
o
f
i
l
e
P
a
r
a
m
s
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
G
u
e
s
t
s
P
r
o
f
i
l
e
P
a
r
a
m
s
C
o
l
(
)
;

 
 
 
 
}

 
 
 
 

	
i
f
 
(
!
c
h
e
c
k
P
r
o
p
e
r
t
y
s
C
o
m
p
l
e
t
e
d
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
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
s
C
o
m
p
l
e
t
e
d
C
o
l
(
)
;

 
 
 
 
}

	

	
i
f
 
(
!
c
h
e
c
k
P
r
o
p
e
r
t
y
s
C
a
t
I
d
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
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
s
C
a
t
I
d
C
o
l
(
)
;

 
 
 
 
}

	

	
i
f
 
(
!
c
h
e
c
k
P
t
y
p
e
s
H
a
s
S
t
a
r
s
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
P
t
y
p
e
s
H
a
s
S
t
a
r
s
C
o
l
(
)
;

 
 
 
 
}

	

	
i
f
 
(
!
c
h
e
c
k
C
u
s
t
o
m
t
e
x
t
L
a
n
g
C
o
n
t
e
x
t
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
C
u
s
t
o
m
t
e
x
t
L
a
n
g
C
o
n
t
e
x
t
C
o
l
(
)
;

	
}

 

	
i
f
 
(
!
c
h
e
c
k
L
i
n
e
i
t
e
m
s
P
a
y
m
e
n
t
M
e
t
h
o
d
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
L
i
n
e
i
t
e
m
s
P
a
y
m
e
n
t
M
e
t
h
o
d
C
o
l
(
)
;

	
}

	

	
i
f
 
(
!
c
h
e
c
k
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
F
i
l
t
e
r
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
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
F
e
a
t
u
r
e
s
F
i
l
t
e
r
C
o
l
(
)
;

	
}

	

	
i
f
 
(
!
c
h
e
c
k
R
e
v
i
e
w
s
R
a
t
i
n
g
s
C
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
C
o
l
E
x
i
s
t
s
(
)
)
 
{

 
 
 
 
 
 
 
 
a
l
t
e
r
R
e
v
i
e
w
s
R
a
t
i
n
g
s
C
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
C
o
l
(
)
;

	
}

	

	
a
l
t
e
r
C
u
s
t
o
m
t
e
x
t
C
o
l
s
C
h
a
n
g
e
D
e
f
a
u
l
t
V
a
l
s
(
)
;

	
c
o
p
y
_
d
e
f
a
u
l
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
_
m
a
r
k
e
r
s
(
)
;

 
 
 
 
d
r
o
p
_
o
r
p
h
a
n
_
l
i
n
e
_
i
t
e
m
s
_
t
a
b
l
e
(
)
;

 
 
 
 
d
r
o
p
_
r
o
o
m
_
i
m
a
g
e
s
_
t
a
b
l
e
(
)
;

	
d
r
o
p
_
c
r
o
n
l
o
g
_
t
a
b
l
e
(
)
;

	
a
d
d
_
j
o
m
r
e
s
_
s
e
s
s
i
o
n
s
_
t
a
b
l
e
(
)
;

	
a
d
d
_
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
l
a
t
e
_
p
a
c
k
a
g
e
_
t
a
b
l
e
(
)
;

	
a
d
d
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
_
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
_
t
a
b
l
e
(
)
;

	
a
d
d
_
j
o
m
r
e
s
_
i
m
a
g
e
s
_
t
a
b
l
e
(
)
;
	

}


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
t
e
r
R
e
v
i
e
w
s
R
a
t
i
n
g
s
C
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
C
o
l
(
)

{

 
 
 
 
$
q
u
e
r
y
 
=
 
"
A
L
T
E
R
 
T
A
B
L
E
 
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
r
e
v
i
e
w
s
_
r
a
t
i
n
g
s
`
 
A
D
D
 
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
 
i
n
t
(
 
1
1
 
)
 
d
e
f
a
u
l
t
 
N
U
L
L
 
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
 
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
 
c
o
l
u
m
n
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
R
e
v
i
e
w
s
R
a
t
i
n
g
s
C
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
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
 
L
I
K
E
 
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
u
i
d
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}

 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
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
F
e
a
t
u
r
e
s
F
i
l
t
e
r
C
o
l
(
)

{

 
 
 
 
$
q
u
e
r
y
 
=
 
"
A
L
T
E
R
 
T
A
B
L
E
 
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
h
o
t
e
l
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
 
A
D
D
 
`
i
n
c
l
u
d
e
_
i
n
_
f
i
l
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
_
h
o
t
e
l
_
f
e
a
t
u
r
e
s
 
i
n
c
l
u
d
e
_
i
n
_
f
i
l
t
e
r
s
 
c
o
l
u
m
n
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
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
F
i
l
t
e
r
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
h
o
t
e
l
_
f
e
a
t
u
r
e
s
 
L
I
K
E
 
'
i
n
c
l
u
d
e
_
i
n
_
f
i
l
t
e
r
s
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}

 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}



f
u
n
c
t
i
o
n
 
c
h
e
c
k
L
i
n
e
i
t
e
m
s
P
a
y
m
e
n
t
M
e
t
h
o
d
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
 
 
L
I
K
E
 
'
p
a
y
m
e
n
t
_
m
e
t
h
o
d
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
L
i
n
e
i
t
e
m
s
P
a
y
m
e
n
t
M
e
t
h
o
d
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
i
s
_
p
a
y
m
e
n
t
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
`
 
A
D
D
 
`
p
a
y
m
e
n
t
_
m
e
t
h
o
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
1
0
0
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
 
"
"
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
 
i
s
_
p
a
y
m
e
n
t
'
)
;

 
 
 
 
}

 
 
 
 
$
q
u
e
r
y
 
=
 
'
A
L
T
E
R
 
T
A
B
L
E
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
 
A
D
D
 
`
t
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
 
"
"
'
;

 
 
 
 
$
r
e
s
u
l
t
 
=
 
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
;

 
 
 
 
$
q
u
e
r
y
 
=
 
'
A
L
T
E
R
 
T
A
B
L
E
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
 
A
D
D
 
`
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
_
u
r
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
1
0
0
0
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
 
"
"
'
;

 
 
 
 
$
r
e
s
u
l
t
 
=
 
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
;

}


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
t
e
r
P
t
y
p
e
s
H
a
s
S
t
a
r
s
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
t
y
p
e
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
h
a
s
_
s
t
a
r
s
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
t
y
p
e
s
`
 
A
D
D
 
`
h
a
s
_
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
 
1
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
t
y
p
e
s
 
h
a
s
_
s
t
a
r
s
 
c
o
l
u
m
n
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
P
t
y
p
e
s
H
a
s
S
t
a
r
s
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
t
y
p
e
s
 
L
I
K
E
 
'
h
a
s
_
s
t
a
r
s
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}

 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
a
d
d
_
j
o
m
r
e
s
_
i
m
a
g
e
s
_
t
a
b
l
e
(
)

{

	
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
i
m
a
g
e
s
 
(

	
	
`
i
d
`
 
I
N
T
(
1
1
)
 
N
O
T
 
N
U
L
L
 
a
u
t
o
_
i
n
c
r
e
m
e
n
t
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
(
1
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
r
e
s
o
u
r
c
e
_
t
y
p
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
0
0
)
,

	
	
`
r
e
s
o
u
r
c
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
f
i
l
e
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
v
e
r
s
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
0
)
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
i
d
`
)

 
 
 
 
 
 
 
 
)
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
,
 
'
'
)
)
 
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
 
_
_
j
o
m
r
e
s
_
i
m
a
g
e
s
 
t
a
b
l
e
'
)
;

 
 
 
 
}

}


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
t
e
r
C
u
s
t
o
m
t
e
x
t
C
o
l
s
C
h
a
n
g
e
D
e
f
a
u
l
t
V
a
l
s
(
)

{

 
 
 
 
$
q
u
e
r
y
 
=
 
"
A
L
T
E
R
 
T
A
B
L
E
 
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
u
s
t
o
m
_
t
e
x
t
`
 
C
H
A
N
G
E
 
`
c
o
n
s
t
a
n
t
`
 
`
c
o
n
s
t
a
n
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
0
0
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
0
'
,
 
C
H
A
N
G
E
 
`
l
a
n
g
u
a
g
e
`
 
`
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
 
C
H
A
N
G
E
 
`
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
`
 
`
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
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
5
0
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
0
'
 
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
,
 
'
'
)
)
 
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
 
a
l
t
e
r
 
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
u
s
t
o
m
_
t
e
x
t
 
c
o
n
s
t
a
n
t
,
l
a
n
g
u
a
g
e
 
a
n
d
 
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
 
c
o
l
u
m
n
s
'
)
;

 
 
 
 
}

	

	
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
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
u
s
t
o
m
_
t
e
x
t
 
S
E
T
 
`
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
`
 
=
 
'
0
'
 
W
H
E
R
E
 
`
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
`
 
=
 
'
'
 
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
,
 
'
'
)
)
 
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
 
u
p
d
a
t
e
 
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
u
s
t
o
m
_
t
e
x
t
 
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
 
t
o
 
0
 
w
h
e
r
e
 
l
a
n
g
u
a
g
e
 
c
o
n
t
e
x
t
 
i
s
 
b
l
a
n
k
'
)
;

 
 
 
 
}

	

	
/
/
a
d
d
 
u
n
i
q
u
e
 
i
n
d
e
x
 
t
o
 
4
 
c
o
l
u
m
n
s
 
t
o
 
p
r
e
v
e
n
t
 
f
u
t
u
r
e
 
d
u
p
l
i
c
a
t
e
s

	
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
u
s
t
o
m
_
t
e
x
t
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
'
c
o
n
s
t
_
p
u
i
d
_
l
a
n
g
_
l
a
n
g
c
o
n
t
e
x
t
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
)
 
{

	
	
/
/
d
e
l
e
t
e
 
d
u
p
l
i
c
a
t
e
 
r
e
d
o
r
d
s

	
	
$
q
u
e
r
y
 
=
 
"
D
E
L
E
T
E
 
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
u
s
t
o
m
_
t
e
x
t
 
U
S
I
N
G
 
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
u
s
t
o
m
_
t
e
x
t
 
I
N
N
E
R
 
J
O
I
N
 
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
u
s
t
o
m
_
t
e
x
t
 
b
 
W
H
E
R
E
 
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
u
s
t
o
m
_
t
e
x
t
.
c
o
n
s
t
a
n
t
 
=
 
b
.
c
o
n
s
t
a
n
t
 
A
N
D
 
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
u
s
t
o
m
_
t
e
x
t
.
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
 
b
.
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
 
A
N
D
 
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
u
s
t
o
m
_
t
e
x
t
.
l
a
n
g
u
a
g
e
 
=
 
b
.
l
a
n
g
u
a
g
e
 
A
N
D
 
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
u
s
t
o
m
_
t
e
x
t
.
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
 
=
 
b
.
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
 
A
N
D
 
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
u
s
t
o
m
_
t
e
x
t
.
u
i
d
 
<
 
b
.
u
i
d
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
,
 
'
'
)
)
 
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
 
d
e
l
e
t
e
 
d
u
p
l
i
c
a
t
e
s
 
f
r
o
m
 
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
u
s
t
o
m
_
t
e
x
t
 
t
a
b
l
e
'
)
;

	
	
}

	
	

	
	
/
/
a
d
d
 
u
n
i
q
u
e
 
i
n
d
e
x
 
t
o
 
4
 
c
o
l
u
m
n
s

	
	
$
q
u
e
r
y
 
=
 
"
A
L
T
E
R
 
T
A
B
L
E
 
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
u
s
t
o
m
_
t
e
x
t
`
 
A
D
D
 
U
N
I
Q
U
E
 
`
c
o
n
s
t
_
p
u
i
d
_
l
a
n
g
_
l
a
n
g
c
o
n
t
e
x
t
`
 
(
`
c
o
n
s
t
a
n
t
`
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
,
 
`
l
a
n
g
u
a
g
e
`
,
 
`
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
`
)
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}


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
t
e
r
C
u
s
t
o
m
t
e
x
t
L
a
n
g
C
o
n
t
e
x
t
C
o
l
(
)

{

 
 
 
 
$
q
u
e
r
y
 
=
 
"
A
L
T
E
R
 
T
A
B
L
E
 
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
u
s
t
o
m
_
t
e
x
t
`
 
A
D
D
 
`
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
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
0
0
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
0
'
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
u
s
t
o
m
_
t
e
x
t
 
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
 
c
o
l
u
m
n
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
C
u
s
t
o
m
t
e
x
t
L
a
n
g
C
o
n
t
e
x
t
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
u
s
t
o
m
_
t
e
x
t
 
L
I
K
E
 
'
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}

 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
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
s
C
a
t
I
d
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
a
d
d
i
n
g
 
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
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
`
c
a
t
_
i
d
`
 
B
O
O
L
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
 
c
a
t
_
i
d
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
P
r
o
p
e
r
t
y
s
C
a
t
I
d
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
r
o
p
e
r
t
y
s
 
L
I
K
E
 
'
c
a
t
_
i
d
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}

 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
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
s
C
o
m
p
l
e
t
e
d
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
a
d
d
i
n
g
 
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
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
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
 
B
O
O
L
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
 
c
o
m
p
l
e
t
e
d
'
)
;

 
 
 
 
}

	

	
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
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
 
S
E
T
 
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
 
=
 
1
 
W
H
E
R
E
 
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
 
=
 
1
 
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
,
 
'
'
)
)
 
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
 
s
e
t
 
c
o
m
p
l
e
t
e
d
 
f
l
a
g
 
t
o
 
p
u
b
l
i
s
h
e
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
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
P
r
o
p
e
r
t
y
s
C
o
m
p
l
e
t
e
d
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
r
o
p
e
r
t
y
s
 
L
I
K
E
 
'
c
o
m
p
l
e
t
e
d
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}

 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}



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
t
e
r
G
u
e
s
t
s
P
r
o
f
i
l
e
P
a
r
a
m
s
C
o
l
(
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
A
L
T
E
R
 
T
A
B
L
E
 
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
g
u
e
s
t
_
p
r
o
f
i
l
e
`
 
A
D
D
 
`
p
a
r
a
m
s
`
 
T
E
X
T
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
_
g
u
e
s
t
_
p
r
o
f
i
l
e
 
p
a
r
a
m
s
 
c
o
l
u
m
n
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
G
u
e
s
t
s
P
r
o
f
i
l
e
P
a
r
a
m
s
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
g
u
e
s
t
_
p
r
o
f
i
l
e
 
L
I
K
E
 
'
p
a
r
a
m
s
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}

	
	

f
u
n
c
t
i
o
n
 
a
d
d
_
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
l
a
t
e
_
p
a
c
k
a
g
e
_
t
a
b
l
e
(
)

{

	
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
t
e
m
p
l
a
t
e
_
p
a
c
k
a
g
e
_
o
v
e
r
r
i
d
e
s
 
(

	
	
`
i
d
`
 
I
N
T
(
1
1
)
 
a
u
t
o
_
i
n
c
r
e
m
e
n
t
,

 
 
 
 
 
 
 
 
`
t
e
m
p
l
a
t
e
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
1
0
0
)
 
N
O
T
 
N
U
L
L
,

	
	
`
p
a
t
h
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
0
0
0
)
 
N
O
T
 
N
U
L
L
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
i
d
`
)

 
 
 
 
 
 
 
 
)
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
,
 
'
'
)
)
 
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
 
_
_
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
l
a
t
e
_
p
a
c
k
a
g
e
_
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
b
l
e
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
a
d
d
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
_
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
_
t
a
b
l
e
(
)

{

	
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
_
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
 
(

	
	
`
i
d
`
 
I
N
T
(
1
1
)
 
N
O
T
 
N
U
L
L
 
a
u
t
o
_
i
n
c
r
e
m
e
n
t
,

 
 
 
 
 
 
 
 
`
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
2
5
5
)
,

	
	
`
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
i
d
`
)

 
 
 
 
 
 
 
 
)
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
,
 
'
'
)
)
 
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
_
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
 
t
a
b
l
e
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
a
d
d
_
j
o
m
r
e
s
_
s
e
s
s
i
o
n
s
_
t
a
b
l
e
(
)

{

	
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
s
e
s
s
i
o
n
s
 
(

 
 
 
 
 
 
 
 
`
s
e
s
s
i
o
n
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
5
0
)
 
N
O
T
 
N
U
L
L
,
 

 
 
 
 
 
 
 
 
`
d
a
t
a
`
 
T
E
X
T
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
s
e
s
s
i
o
n
_
i
d
`
)

 
 
 
 
 
 
 
 
)
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
,
 
'
'
)
)
 
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
 
_
_
j
o
m
r
e
s
_
s
e
s
s
i
o
n
s
 
t
a
b
l
e
'
)
;

 
 
 
 
}

}


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
t
e
r
G
u
e
s
t
s
B
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
C
o
l
(
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
A
L
T
E
R
 
T
A
B
L
E
 
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
g
u
e
s
t
s
`
 
A
D
D
 
`
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
`
 
t
i
n
y
i
n
t
(
 
1
 
)
 
d
e
f
a
u
l
t
 
0
 
N
O
T
 
N
U
L
L
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
_
g
u
e
s
t
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
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
G
u
e
s
t
s
B
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
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
g
u
e
s
t
s
 
L
I
K
E
 
'
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
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
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
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
 
L
I
K
E
 
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
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
R
o
o
m
s
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
C
o
l
(
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
`
t
a
g
l
i
n
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
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
 
t
a
g
l
i
n
e
 
c
o
l
u
m
n
'
)
;

 
 
 
 
}

 
 
 
 
$
q
u
e
r
y
 
=
 
'
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
`
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
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
 
c
o
l
u
m
n
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
d
r
o
p
_
c
r
o
n
l
o
g
_
t
a
b
l
e
(
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
D
R
O
P
 
T
A
B
L
E
 
I
F
 
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
c
o
m
p
_
c
r
o
n
l
o
g
`
 
'
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
,
 
'
'
)
)
 
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
 
d
r
o
p
 
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
c
r
o
n
l
o
g
 
t
a
b
l
e
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
o
p
y
_
d
e
f
a
u
l
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
_
m
a
r
k
e
r
s
(
)
 
{

	
$
p
a
s
s
e
d
 
=
 
t
r
u
e
;

	
i
f
 
(
!
i
s
_
d
i
r
(
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
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
'
m
a
r
k
e
r
s
'
.
J
R
D
S
)
)
 
{

	
	
i
f
 
(
!
@
m
k
d
i
r
(
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
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
'
m
a
r
k
e
r
s
'
.
J
R
D
S
)
)
 
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
"
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
 
m
a
k
e
 
f
o
l
d
e
r
 
"
.
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
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
"
m
a
r
k
e
r
s
"
.
J
R
D
S
.
"
 
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
 
t
h
e
r
e
f
o
r
e
 
c
a
n
n
o
t
 
c
o
p
y
 
t
h
e
 
d
e
f
a
u
l
t
 
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
 
m
a
r
k
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
 
c
r
e
a
t
e
 
t
h
e
 
f
o
l
d
e
r
 
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
d
 
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
 
i
t
'
s
 
w
r
i
t
a
b
l
e
 
b
y
 
t
h
e
 
w
e
b
 
s
e
r
v
e
r
.
"
)
;

	
	
	
$
p
a
s
s
e
d
 
=
 
f
a
l
s
e
;

	
	
}

	
}


	
i
f
 
(
$
p
a
s
s
e
d
)
 
{

	
	
i
f
 
(
!
c
o
p
y
(
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
A
B
S
P
A
T
H
.
J
R
D
S
.
'
m
a
r
k
e
r
s
'
.
J
R
D
S
.
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
b
l
u
e
.
p
n
g
'
,
 
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
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
'
m
a
r
k
e
r
s
'
.
J
R
D
S
.
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
b
l
u
e
.
p
n
g
'
)
)
 
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
"
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
o
p
y
 
m
a
r
k
e
r
 
i
m
a
g
e
"
)
;

	
	
}

	
	

	
	
i
f
 
(
!
c
o
p
y
(
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
A
B
S
P
A
T
H
.
J
R
D
S
.
'
m
a
r
k
e
r
s
'
.
J
R
D
S
.
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
b
l
u
e
-
d
a
r
k
e
r
.
p
n
g
'
,
 
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
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
'
m
a
r
k
e
r
s
'
.
J
R
D
S
.
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
b
l
u
e
-
d
a
r
k
e
r
.
p
n
g
'
)
)
 
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
"
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
o
p
y
 
m
a
r
k
e
r
 
i
m
a
g
e
"
)
;

	
	
}

	
	

	
	
i
f
 
(
!
c
o
p
y
(
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
A
B
S
P
A
T
H
.
J
R
D
S
.
'
m
a
r
k
e
r
s
'
.
J
R
D
S
.
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
d
a
r
k
.
p
n
g
'
,
 
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
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
'
m
a
r
k
e
r
s
'
.
J
R
D
S
.
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
d
a
r
k
.
p
n
g
'
)
)
 
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
"
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
o
p
y
 
m
a
r
k
e
r
 
i
m
a
g
e
"
)
;

	
	
}

	
	

	
	
i
f
 
(
!
c
o
p
y
(
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
A
B
S
P
A
T
H
.
J
R
D
S
.
'
m
a
r
k
e
r
s
'
.
J
R
D
S
.
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
g
r
e
e
n
.
p
n
g
'
,
 
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
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
'
m
a
r
k
e
r
s
'
.
J
R
D
S
.
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
g
r
e
e
n
.
p
n
g
'
)
)
 
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
"
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
o
p
y
 
m
a
r
k
e
r
 
i
m
a
g
e
"
)
;

	
	
}

	
	

	
	
i
f
 
(
!
c
o
p
y
(
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
A
B
S
P
A
T
H
.
J
R
D
S
.
'
m
a
r
k
e
r
s
'
.
J
R
D
S
.
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
g
r
e
e
n
-
d
a
r
k
e
r
.
p
n
g
'
,
 
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
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
'
m
a
r
k
e
r
s
'
.
J
R
D
S
.
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
g
r
e
e
n
-
d
a
r
k
e
r
.
p
n
g
'
)
)
 
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
"
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
o
p
y
 
m
a
r
k
e
r
 
i
m
a
g
e
"
)
;

	
	
}

	
	

	
	
i
f
 
(
!
c
o
p
y
(
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
A
B
S
P
A
T
H
.
J
R
D
S
.
'
m
a
r
k
e
r
s
'
.
J
R
D
S
.
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
o
r
a
n
g
e
.
p
n
g
'
,
 
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
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
'
m
a
r
k
e
r
s
'
.
J
R
D
S
.
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
o
r
a
n
g
e
.
p
n
g
'
)
)
 
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
"
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
o
p
y
 
m
a
r
k
e
r
 
i
m
a
g
e
"
)
;

	
	
}

	
	

	
	
i
f
 
(
!
c
o
p
y
(
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
A
B
S
P
A
T
H
.
J
R
D
S
.
'
m
a
r
k
e
r
s
'
.
J
R
D
S
.
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
p
i
n
k
.
p
n
g
'
,
 
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
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
'
m
a
r
k
e
r
s
'
.
J
R
D
S
.
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
p
i
n
k
.
p
n
g
'
)
)
 
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
"
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
o
p
y
 
m
a
r
k
e
r
 
i
m
a
g
e
"
)
;

	
	
}

	
	

	
	
i
f
 
(
!
c
o
p
y
(
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
A
B
S
P
A
T
H
.
J
R
D
S
.
'
m
a
r
k
e
r
s
'
.
J
R
D
S
.
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
r
e
d
.
p
n
g
'
,
 
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
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
'
m
a
r
k
e
r
s
'
.
J
R
D
S
.
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
r
e
d
.
p
n
g
'
)
)
 
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
"
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
o
p
y
 
m
a
r
k
e
r
 
i
m
a
g
e
"
)
;

	
	
}

	
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
M
a
n
a
g
e
r
s
U
s
e
r
n
a
m
e
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
m
a
n
a
g
e
r
s
 
L
I
K
E
 
'
u
s
e
r
n
a
m
e
'
 
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
d
o
U
s
e
r
R
o
l
e
s
U
p
d
a
t
e
s
(
)

{

 
 
 
 
/
/
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
 
"
U
p
d
a
t
i
n
g
 
u
s
e
r
 
r
o
l
e
 
f
o
r
 
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
"
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
U
P
D
A
T
E
 
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
m
a
n
a
g
e
r
s
 
S
E
T
 
`
a
c
c
e
s
s
_
l
e
v
e
l
`
 
=
 
9
0
 
W
H
E
R
E
 
`
p
u
`
 
=
 
1
 
'
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
,
 
'
'
)
)
 
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
 
u
p
d
a
t
e
 
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
'
)
;

 
 
 
 
}


 
 
 
 
/
/
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
 
"
U
p
d
a
t
i
n
g
 
u
s
e
r
 
r
o
l
e
 
f
o
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
"
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
U
P
D
A
T
E
 
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
m
a
n
a
g
e
r
s
 
S
E
T
 
`
a
c
c
e
s
s
_
l
e
v
e
l
`
 
=
 
7
0
 
W
H
E
R
E
 
`
a
c
c
e
s
s
_
l
e
v
e
l
`
 
=
 
2
 
'
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
,
 
'
'
)
)
 
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
 
u
p
d
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
 
m
a
n
a
g
e
r
 
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
'
)
;

 
 
 
 
}


 
 
 
 
/
/
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
 
"
U
p
d
a
t
i
n
g
 
u
s
e
r
 
r
o
l
e
 
f
o
r
 
r
e
c
e
p
t
i
o
n
i
s
t
"
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
U
P
D
A
T
E
 
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
m
a
n
a
g
e
r
s
 
S
E
T
 
`
a
c
c
e
s
s
_
l
e
v
e
l
`
 
=
 
5
0
 
W
H
E
R
E
 
`
a
c
c
e
s
s
_
l
e
v
e
l
`
 
=
 
1
 
'
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
,
 
'
'
)
)
 
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
 
u
p
d
a
t
e
 
r
e
c
e
p
t
i
o
n
i
s
t
 
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
'
)
;

 
 
 
 
}


 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
 
t
a
b
l
e
 
d
r
o
p
p
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
y
 
u
i
d
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
m
a
n
a
g
e
r
s
 
D
R
O
P
 
C
O
L
U
M
N
 
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
 
'
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
,
 
'
'
)
)
 
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
 
d
r
o
p
 
p
r
o
p
e
r
t
y
 
u
i
d
 
c
o
l
u
m
n
 
f
r
o
m
 
_
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
 
t
a
b
l
e
'
)
;

 
 
 
 
}


 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
 
t
a
b
l
e
 
d
r
o
p
p
i
n
g
 
u
s
e
r
n
a
m
e
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
m
a
n
a
g
e
r
s
 
D
R
O
P
 
C
O
L
U
M
N
 
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
 
'
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
,
 
'
'
)
)
 
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
 
d
r
o
p
 
u
s
e
r
n
a
m
e
 
c
o
l
u
m
n
 
f
r
o
m
 
_
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
 
t
a
b
l
e
'
)
;

 
 
 
 
}


 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
 
t
a
b
l
e
 
d
r
o
p
p
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
y
 
u
i
d
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
m
a
n
a
g
e
r
s
 
D
R
O
P
 
C
O
L
U
M
N
 
`
p
u
`
 
'
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
,
 
'
'
)
)
 
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
 
d
r
o
p
 
p
u
 
c
o
l
u
m
n
 
f
r
o
m
 
_
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
 
t
a
b
l
e
'
)
;

 
 
 
 
}

}


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
t
e
r
P
t
y
p
e
s
M
a
r
k
e
r
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
t
y
p
e
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
m
a
r
k
e
r
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
t
y
p
e
s
`
 
A
D
D
 
`
m
a
r
k
e
r
`
 
v
a
r
c
h
a
r
(
 
2
5
5
 
)
 
D
E
F
A
U
L
T
 
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
r
e
d
.
p
n
g
'
 
A
F
T
E
R
 
`
m
r
p
_
s
r
p
_
f
l
a
g
`
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
t
y
p
e
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

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
P
t
y
p
e
s
M
a
r
k
e
r
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
t
y
p
e
s
 
L
I
K
E
 
'
m
a
r
k
e
r
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
c
h
a
n
g
e
_
d
e
f
a
u
l
t
_
d
a
t
e
_
v
a
l
u
e
_
f
o
r
_
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
_
t
a
b
l
e
(
)

{

 
 
 
 
$
q
u
e
r
y
 
=
 
"
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
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
`
 
M
O
D
I
F
Y
 
C
O
L
U
M
N
 
`
r
a
i
s
e
d
_
d
a
t
e
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
 
M
O
D
I
F
Y
 
C
O
L
U
M
N
 
`
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
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
,
 
'
'
)
)
 
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
 
m
o
d
i
f
y
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
 
r
a
i
s
e
d
_
d
a
t
e
 
a
n
d
 
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
 
c
o
l
u
m
n
s
 
d
e
f
a
u
l
t
 
v
a
l
u
e
'
)
;

 
 
 
 
}

}


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
t
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
s
P
e
r
m
i
t
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
a
d
d
i
n
g
 
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
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
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
 
v
a
r
c
h
a
r
(
 
2
5
5
 
)
 
D
E
F
A
U
L
T
 
'
'
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
P
r
o
p
e
r
t
y
s
P
e
r
m
i
t
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
r
o
p
e
r
t
y
s
 
L
I
K
E
 
'
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
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
r
e
m
o
v
e
C
r
o
n
J
o
b
(
$
j
o
b
 
=
 
'
'
)

{

 
 
 
 
i
f
 
(
$
j
o
b
 
=
=
 
'
'
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
r
o
n
'
)
;

 
 
 
 
$
c
r
o
n
 
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
r
o
n
(
)
;

 
 
 
 
$
c
r
o
n
-
>
r
e
m
o
v
e
J
o
b
(
$
j
o
b
)
;

}


f
u
n
c
t
i
o
n
 
a
d
d
C
r
o
n
J
o
b
(
$
j
o
b
 
=
 
'
'
,
 
$
s
c
h
e
d
u
l
e
 
=
 
'
D
'
,
 
$
p
a
r
a
m
s
 
=
 
'
'
)

{

 
 
 
 
i
f
 
(
$
j
o
b
 
=
=
 
'
'
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
r
o
n
'
)
;

 
 
 
 
$
c
r
o
n
 
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
r
o
n
(
)
;

 
 
 
 
$
c
r
o
n
-
>
a
d
d
J
o
b
(
$
j
o
b
,
 
$
s
c
h
e
d
u
l
e
,
 
$
p
a
r
a
m
s
)
;

}


f
u
n
c
t
i
o
n
 
d
r
o
p
_
o
r
p
h
a
n
_
l
i
n
e
_
i
t
e
m
s
_
t
a
b
l
e
(
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
D
R
O
P
 
T
A
B
L
E
 
I
F
 
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
p
o
r
t
a
l
_
o
r
p
h
a
n
_
l
i
n
e
i
t
e
m
s
`
 
'
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
,
 
'
'
)
)
 
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
 
d
r
o
p
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
o
r
p
h
a
n
_
l
i
n
e
i
t
e
m
s
 
t
a
b
l
e
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
d
r
o
p
_
r
o
o
m
_
i
m
a
g
e
s
_
t
a
b
l
e
(
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
D
R
O
P
 
T
A
B
L
E
 
I
F
 
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
r
o
o
m
_
i
m
a
g
e
s
`
 
'
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
,
 
'
'
)
)
 
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
 
d
r
o
p
 
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
i
m
a
g
e
s
 
t
a
b
l
e
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
R
t
y
p
e
s
S
r
p
O
n
l
y
F
l
a
g
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
 
L
I
K
E
 
'
s
r
p
_
o
n
l
y
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
d
r
o
p
R
t
y
p
e
s
S
r
p
O
n
l
y
F
l
a
g
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
t
a
b
l
e
 
d
r
o
p
p
i
n
g
 
s
r
p
_
o
n
l
y
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
D
R
O
P
 
C
O
L
U
M
N
 
`
s
r
p
_
o
n
l
y
`
 
'
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
,
 
'
'
)
)
 
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
 
d
r
o
p
 
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
 
s
r
p
_
o
n
l
y
 
c
o
l
u
m
n
'
)
;

 
 
 
 
}

}


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
t
e
r
P
t
y
p
e
s
M
r
p
s
r
p
F
l
a
g
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
t
y
p
e
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
m
r
p
_
s
r
p
_
f
l
a
g
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
t
y
p
e
s
`
 
A
D
D
 
`
m
r
p
_
s
r
p
_
f
l
a
g
`
 
T
I
N
Y
I
N
T
 
D
E
F
A
U
L
T
 
'
2
'
 
A
F
T
E
R
 
`
o
r
d
e
r
`
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
t
y
p
e
s
 
m
r
p
_
s
r
p
_
f
l
a
g
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
P
t
y
p
e
s
M
r
p
s
r
p
F
l
a
g
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
t
y
p
e
s
 
L
I
K
E
 
'
m
r
p
_
s
r
p
_
f
l
a
g
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
C
o
n
t
r
a
c
t
s
R
e
f
e
r
r
e
r
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
a
d
d
i
n
g
 
r
e
f
e
r
r
e
r
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
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
 
v
a
r
c
h
a
r
(
 
2
5
5
 
)
 
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
 
A
F
T
E
R
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
 
r
e
f
e
r
r
e
r
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
C
o
n
t
r
a
c
t
s
R
e
f
e
r
r
e
r
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
 
L
I
K
E
 
'
r
e
f
e
r
r
e
r
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
E
x
t
r
a
s
L
i
m
i
t
e
d
t
o
r
o
o
m
t
y
p
e
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
t
a
b
l
e
 
a
d
d
i
n
g
 
l
i
m
i
t
e
d
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
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
e
x
t
r
a
s
`
 
A
D
D
 
`
l
i
m
i
t
e
d
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
`
 
I
N
T
(
1
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
 
N
O
T
 
N
U
L
L
 
A
F
T
E
R
 
`
i
n
c
l
u
d
e
_
i
n
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
l
i
s
t
s
`
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
 
l
i
m
i
t
e
d
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
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
E
x
t
r
a
s
L
i
m
i
t
e
d
t
o
r
o
o
m
t
y
p
e
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
 
L
I
K
E
 
'
l
i
m
i
t
e
d
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
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
G
u
e
s
t
s
P
a
r
t
n
e
r
I
d
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
_
g
u
e
s
t
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
p
a
r
t
n
e
r
_
i
d
 
c
o
l
u
m
n
s
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
g
u
e
s
t
s
`
 
A
D
D
 
`
p
a
r
t
n
e
r
_
i
d
`
 
I
N
T
(
1
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
 
N
O
T
 
N
U
L
L
 
A
F
T
E
R
 
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
`
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
_
g
u
e
s
t
s
 
p
a
r
t
n
e
r
_
i
d
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
G
u
e
s
t
s
P
a
r
t
n
e
r
I
d
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
g
u
e
s
t
s
 
L
I
K
E
 
'
p
a
r
t
n
e
r
_
i
d
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
c
r
e
a
t
e
P
a
r
t
n
e
r
B
o
o
k
i
n
g
s
T
a
b
l
e
(
)

{

 
 
 
 
/
/
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
 
"
C
r
e
a
t
i
n
g
 
_
j
o
m
r
e
s
_
p
a
r
t
n
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
s
 
t
a
b
l
e
"
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
a
r
t
n
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
s
`
 
(

	
	
`
i
d
`
 
I
N
T
(
1
1
)
 
a
u
t
o
_
i
n
c
r
e
m
e
n
t
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
u
i
d
`
 
I
N
T
(
1
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
p
a
r
t
n
e
r
_
i
d
`
 
I
N
T
(
1
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
i
d
`
)

	
	
)
 
'
;

 
 
 
 
$
r
e
s
u
l
t
 
=
 
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
,
 
'
'
)
;

 
 
 
 
i
f
 
(
!
$
r
e
s
u
l
t
)
 
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
E
r
r
o
r
 
c
r
e
a
t
i
n
g
 
t
a
b
l
e
 
t
a
b
l
e
 
_
j
o
m
r
e
s
_
p
a
r
t
n
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
s
 
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
P
a
r
t
n
e
r
B
o
o
k
i
n
g
s
T
a
b
l
e
E
x
i
s
t
s
(
)

{

 
 
 
 
$
t
a
b
l
e
s
F
o
u
n
d
 
=
 
f
a
l
s
e
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
H
O
W
 
T
A
B
L
E
S
'
;

 
 
 
 
$
r
e
s
u
l
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
,
 
$
m
o
d
e
 
=
 
f
a
l
s
e
)
;

 
 
 
 
$
s
t
r
i
n
g
 
=
 
'
T
a
b
l
e
s
_
i
n
_
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
d
b
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
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
r
-
>
$
s
t
r
i
n
g
,
 
'
_
j
o
m
r
e
s
_
p
a
r
t
n
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
s
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
E
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
Q
t
y
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
e
r
v
i
c
e
s
 
L
I
K
E
 
'
s
e
r
v
i
c
e
_
q
t
y
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
E
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
Q
t
y
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
e
r
v
i
c
e
s
 
t
a
b
l
e
 
a
d
d
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
s
_
q
t
y
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
e
r
v
i
c
e
s
 
A
D
D
 
`
s
e
r
v
i
c
e
_
q
t
y
`
 
F
L
O
A
T
 
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
 
A
F
T
E
R
 
`
t
a
x
_
c
o
d
e
`
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
e
r
v
i
c
e
s
 
s
e
r
v
i
c
e
_
q
t
y
 
c
o
l
u
m
n
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
R
o
o
m
S
m
o
k
i
n
g
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
 
L
I
K
E
 
'
s
m
o
k
i
n
g
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
R
o
o
m
s
S
m
o
k
i
n
g
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
t
a
b
l
e
 
d
r
o
p
p
i
n
g
 
s
m
o
k
i
n
g
,
 
r
o
o
m
_
d
i
s
a
b
l
e
d
_
a
c
c
e
s
s
 
c
o
l
u
m
n
s
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
D
R
O
P
 
C
O
L
U
M
N
 
`
s
m
o
k
i
n
g
`
,
 
D
R
O
P
 
C
O
L
U
M
N
 
`
r
o
o
m
_
d
i
s
a
b
l
e
d
_
a
c
c
e
s
s
`
 
'
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
,
 
'
'
)
)
 
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
 
d
r
o
p
 
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
 
s
m
o
k
i
n
g
,
 
r
o
o
m
_
d
i
s
a
b
l
e
d
_
a
c
c
e
s
s
 
c
o
l
u
m
n
s
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
C
o
n
t
r
a
c
t
s
S
m
o
k
i
n
g
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
 
L
I
K
E
 
'
s
m
o
k
i
n
g
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
C
o
n
t
r
a
c
t
s
S
m
o
k
i
n
g
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
d
r
o
p
p
i
n
g
 
s
m
o
k
i
n
g
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
D
R
O
P
 
C
O
L
U
M
N
 
`
s
m
o
k
i
n
g
`
 
'
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
,
 
'
'
)
)
 
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
 
d
r
o
p
 
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
 
s
m
o
k
i
n
g
 
c
o
l
u
m
n
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
P
f
e
a
t
u
r
e
s
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
T
a
b
l
e
E
x
i
s
t
s
(
)

{

 
 
 
 
$
t
a
b
l
e
s
F
o
u
n
d
 
=
 
f
a
l
s
e
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
H
O
W
 
T
A
B
L
E
S
'
;

 
 
 
 
$
r
e
s
u
l
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
,
 
$
m
o
d
e
 
=
 
f
a
l
s
e
)
;

 
 
 
 
$
s
t
r
i
n
g
 
=
 
'
T
a
b
l
e
s
_
i
n
_
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
d
b
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
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
r
-
>
$
s
t
r
i
n
g
,
 
'
_
j
o
m
r
e
s
_
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
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
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
c
r
e
a
t
e
P
f
e
a
t
u
r
e
s
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
T
a
b
l
e
(
)

{

 
 
 
 
/
/
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
 
"
C
r
e
a
t
i
n
g
 
j
o
m
r
e
s
_
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
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
 
t
a
b
l
e
"
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
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
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
`
 
(

	
	
`
i
d
`
 
i
n
t
(
1
1
)
 
a
u
t
o
_
i
n
c
r
e
m
e
n
t
,

	
	
`
t
i
t
l
e
`
 
 
v
a
r
c
h
a
r
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
i
d
`
)

	
	
)
 
'
;

 
 
 
 
$
r
e
s
u
l
t
 
=
 
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
,
 
'
'
)
;

 
 
 
 
i
f
 
(
!
$
r
e
s
u
l
t
)
 
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
E
r
r
o
r
 
c
r
e
a
t
i
n
g
 
t
a
b
l
e
 
t
a
b
l
e
 
j
o
m
r
e
s
_
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
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
 
'
)
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
i
n
s
e
r
t
_
p
f
e
a
t
u
r
e
_
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
(
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
P
f
e
a
t
u
r
e
s
C
a
t
e
g
o
r
y
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
h
o
t
e
l
_
f
e
a
t
u
r
e
s
 
L
I
K
E
 
'
c
a
t
_
i
d
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
P
f
e
a
t
u
r
e
s
C
a
t
e
g
o
r
y
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
_
h
o
t
e
l
_
f
e
a
t
u
r
e
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
c
a
t
_
i
d
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
h
o
t
e
l
_
f
e
a
t
u
r
e
s
 
A
D
D
 
`
c
a
t
_
i
d
`
 
I
N
T
(
1
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
 
A
F
T
E
R
 
`
p
t
y
p
e
_
x
r
e
f
`
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
_
h
o
t
e
l
_
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
t
_
i
d
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
R
f
e
a
t
u
r
e
s
I
m
a
g
e
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
f
e
a
t
u
r
e
s
 
L
I
K
E
 
'
i
m
a
g
e
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
R
f
e
a
t
u
r
e
s
I
m
a
g
e
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
f
e
a
t
u
r
e
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
i
m
a
g
e
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
r
o
o
m
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
 
A
D
D
 
`
i
m
a
g
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
 
N
U
L
L
 
A
F
T
E
R
 
`
p
t
y
p
e
_
x
r
e
f
`
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
f
e
a
t
u
r
e
s
 
i
m
a
g
e
 
c
o
l
u
m
n
'
)
;

 
 
 
 
}

}


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
t
e
r
E
x
t
r
a
s
I
n
c
l
u
d
e
i
n
l
i
s
t
s
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
t
a
b
l
e
 
a
d
d
i
n
g
 
i
n
c
l
u
d
e
_
i
n
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
l
i
s
t
s
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
e
x
t
r
a
s
`
 
A
D
D
 
`
i
n
c
l
u
d
e
_
i
n
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
l
i
s
t
s
`
 
B
O
O
L
 
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
'
 
A
F
T
E
R
 
`
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
`
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
 
i
n
c
l
u
d
e
_
i
n
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
l
i
s
t
s
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
E
x
t
r
a
s
I
n
c
l
u
d
e
i
n
l
i
s
t
s
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
 
L
I
K
E
 
'
i
n
c
l
u
d
e
_
i
n
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
l
i
s
t
s
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
E
x
t
r
a
s
V
a
l
i
d
f
r
o
m
C
o
l
(
)

{

 
 
 
 
/
/
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
E
d
i
t
i
n
g
 
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
 
t
a
b
l
e
 
a
d
d
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
 
c
o
l
u
m
n
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
A
L
T
E
R
 
T
A
B
L
E
 
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
e
x
t
r
a
s
`
 
A
D
D
 
`
v
a
l
i
d
f
r
o
m
`
 
D
A
T
E
T
I
M
E
 
D
E
F
A
U
L
T
 
N
U
L
L
 
A
F
T
E
R
 
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
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
 
v
a
l
i
d
f
r
o
m
'
)
;

 
 
 
 
}

 
 
 
 
$
q
u
e
r
y
 
=
 
'
A
L
T
E
R
 
T
A
B
L
E
 
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
e
x
t
r
a
s
`
 
A
D
D
 
`
v
a
l
i
d
t
o
`
 
D
A
T
E
T
I
M
E
 
D
E
F
A
U
L
T
 
N
U
L
L
 
A
F
T
E
R
 
`
v
a
l
i
d
f
r
o
m
`
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
 
v
a
l
i
d
t
o
'
)
;

 
 
 
 
}

 
 
 
 
$
q
u
e
r
y
 
=
 
'
A
L
T
E
R
 
T
A
B
L
E
 
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
e
x
t
r
a
s
`
 
A
D
D
 
`
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
`
 
I
N
T
E
G
E
R
 
A
F
T
E
R
 
`
v
a
l
i
d
t
o
`
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
E
x
t
r
a
s
V
a
l
i
d
f
r
o
m
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
 
L
I
K
E
 
'
v
a
l
i
d
f
r
o
m
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
c
r
e
a
t
e
I
n
v
o
i
c
e
P
a
y
m
e
n
t
X
r
e
f
T
a
b
l
e
(
)

{

 
 
 
 
/
/
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
 
"
C
r
e
a
t
i
n
g
 
j
o
m
r
e
s
_
i
n
v
o
i
c
e
_
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
 
t
a
b
l
e
"
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
i
n
v
o
i
c
e
_
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
 
(

	
	
`
i
d
`
 
i
n
t
(
1
1
)
 
a
u
t
o
_
i
n
c
r
e
m
e
n
t
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
i
d
`
 
 
i
n
t
(
1
1
)
,

	
	
`
g
a
t
e
w
a
y
`
 
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
'
,

	
	
`
p
a
i
d
`
 
B
O
O
L
 
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
0
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
i
d
`
)

	
	
)
 
"
;

 
 
 
 
$
r
e
s
u
l
t
 
=
 
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
,
 
'
'
)
;

 
 
 
 
i
f
 
(
!
$
r
e
s
u
l
t
)
 
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
E
r
r
o
r
 
c
r
e
a
t
i
n
g
 
t
a
b
l
e
 
t
a
b
l
e
 
_
_
j
o
m
r
e
s
_
i
n
v
o
i
c
e
_
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
 
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
I
n
v
o
i
c
e
P
a
y
m
e
n
t
X
r
e
f
T
a
b
l
e
E
x
i
s
t
s
(
)

{

 
 
 
 
$
t
a
b
l
e
s
F
o
u
n
d
 
=
 
f
a
l
s
e
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
H
O
W
 
T
A
B
L
E
S
'
;

 
 
 
 
$
r
e
s
u
l
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
,
 
$
m
o
d
e
 
=
 
f
a
l
s
e
)
;

 
 
 
 
$
s
t
r
i
n
g
 
=
 
'
T
a
b
l
e
s
_
i
n
_
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
d
b
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
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
r
-
>
$
s
t
r
i
n
g
,
 
'
_
j
o
m
r
e
s
_
i
n
v
o
i
c
e
_
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
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
m
o
v
e
_
l
i
c
e
n
s
e
_
k
e
y
_
t
o
_
s
i
t
e
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

{

 
 
 
 
i
f
 
(
!
f
i
l
e
_
e
x
i
s
t
s
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
.
J
R
D
S
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
J
R
D
S
.
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
t
i
o
n
.
p
h
p
'
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
 
"
S
E
L
E
C
T
 
v
a
l
u
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
s
e
t
t
i
n
g
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
 
A
N
D
 
a
k
e
y
 
=
 
'
j
o
m
r
e
s
_
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
 
L
I
M
I
T
 
1
"
;

 
 
 
 
 
 
 
 
$
l
i
c
e
n
s
e
_
k
e
y
 
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

 
 
 
 
 
 
 
 
i
f
 
(
t
r
i
m
(
$
l
i
c
e
n
s
e
_
k
e
y
)
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
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
 
"
M
o
v
i
n
g
 
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
 
f
r
o
m
 
s
e
t
t
i
n
g
s
 
t
a
b
l
e
 
t
o
 
s
i
t
e
 
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
i
n
s
e
r
t
_
n
e
w
_
s
e
t
t
i
n
g
(
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
,
 
$
l
i
c
e
n
s
e
_
k
e
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
n
o
w
 
t
h
i
s
 
q
u
e
r
y
 
w
i
l
l
 
r
e
m
o
v
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
 
k
e
y
 
f
r
o
m
 
j
o
m
r
e
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

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
D
E
L
E
T
E
 
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
s
e
t
t
i
n
g
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
 
A
N
D
 
a
k
e
y
 
=
 
'
j
o
m
r
e
s
_
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
"
;

 
 
 
 
 
 
 
 
 
 
 
 
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
,
 
'
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
s
a
v
e
_
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
_
f
i
l
e
(
)

{

 
 
 
 
i
f
 
(
!
f
i
l
e
_
e
x
i
s
t
s
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
.
J
R
D
S
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
J
R
D
S
.
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
t
i
o
n
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
/
/
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
 
"
S
a
v
i
n
g
 
n
e
w
 
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
p
h
p
 
f
i
l
e
 
w
h
i
c
h
 
s
t
o
r
e
s
 
t
h
e
 
s
i
t
e
 
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
c
o
n
f
i
g
_
t
o
_
s
a
v
e
 
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
c
o
n
f
i
g
_
t
o
_
s
a
v
e
[
'
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
p
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
]
 
=
 
P
R
O
D
_
D
E
V
;

	
	

	
	
/
/
w
e
 
w
o
n
`
t
 
s
t
o
r
e
 
t
h
e
 
v
e
r
s
i
o
n
 
i
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
t
i
o
n
.
p
h
p
 
(
o
r
 
B
C
 
_
s
i
t
e
_
s
e
t
t
i
n
g
s
 
t
a
b
l
e
)
,
 
s
o
 
i
t
 
w
i
l
l
 
a
l
w
a
y
s
 
b
e
 
l
o
a
d
e
d
 
f
r
o
m
 
s
i
t
e
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
n
f
i
g
_
t
o
_
s
a
v
e
[
'
v
e
r
s
i
o
n
'
]
)
)
 
{

	
	
	
u
n
s
e
t
(
$
c
o
n
f
i
g
_
t
o
_
s
a
v
e
[
'
v
e
r
s
i
o
n
'
]
)
;

	
	
}

	
	

 
 
 
 
 
 
 
 
i
f
 
(
!
f
i
l
e
_
p
u
t
_
c
o
n
t
e
n
t
s
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
.
J
R
D
S
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
J
R
D
S
.
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
t
i
o
n
.
p
h
p
'
,

'
<
?
p
h
p

#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
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
 
\
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
\
'
 
)
 
o
r
 
d
i
e
(
 
\
'
\
'
 
)
;

#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
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
j
r
C
o
n
f
i
g
 
=
 
'
 
.
v
a
r
_
e
x
p
o
r
t
(
$
c
o
n
f
i
g
_
t
o
_
s
a
v
e
,
 
t
r
u
e
)
.
'
;

'
)
)
 
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
E
R
R
O
R
:
 
'
.
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
.
J
R
D
S
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
J
R
D
S
.
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
t
i
o
n
.
p
h
p
'
.
'
 
c
a
n
`
t
 
b
e
 
s
a
v
e
d
.
 
P
l
e
a
s
e
 
s
o
l
v
e
 
t
h
e
 
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
 
p
r
o
b
l
e
m
 
a
n
d
 
t
r
y
 
a
g
a
i
n
.
'
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
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
.
J
R
D
S
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
J
R
D
S
.
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
t
i
o
n
.
p
h
p
'
)
)
 
{
 
/
/
 
T
r
i
p
l
e
 
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
e
t
t
i
n
g
s
 
f
i
l
e
 
h
a
s
 
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
 
b
e
f
o
r
e
 
w
e
 
d
r
o
p
 
t
h
i
s
 
t
a
b
l
e

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
D
R
O
P
 
T
A
B
L
E
 
I
F
 
E
X
I
S
T
S
 
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
s
i
t
e
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
,
 
'
'
)
)
 
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
E
r
r
o
r
 
d
r
o
p
p
i
n
g
 
t
h
e
 
_
j
o
m
r
e
s
_
s
i
t
e
_
s
e
t
t
i
n
g
s
 
t
a
b
l
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
d
r
o
p
_
p
o
r
t
a
l
_
b
o
o
k
i
n
g
s
_
t
a
b
l
e
(
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
D
R
O
P
 
T
A
B
L
E
 
I
F
 
E
X
I
S
T
S
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
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
;

 
 
 
 
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
,
 
'
'
)
;

}


f
u
n
c
t
i
o
n
 
d
r
o
p
_
p
o
r
t
a
l
_
u
s
e
r
s
_
t
a
b
l
e
(
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
D
R
O
P
 
T
A
B
L
E
 
I
F
 
E
X
I
S
T
S
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
u
s
e
r
s
'
;

 
 
 
 
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
,
 
'
'
)
;

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
L
i
n
e
i
t
e
m
s
I
s
p
a
y
m
e
n
t
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
 
 
L
I
K
E
 
'
i
s
_
p
a
y
m
e
n
t
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
L
i
n
e
i
t
e
m
s
I
s
p
a
y
m
e
n
t
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
i
s
_
p
a
y
m
e
n
t
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
`
 
A
D
D
 
`
i
s
_
p
a
y
m
e
n
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
 
D
E
F
A
U
L
T
 
0
 
N
O
T
 
N
U
L
L
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
 
i
s
_
p
a
y
m
e
n
t
'
)
;

 
 
 
 
}

 
 
 
 
$
q
u
e
r
y
 
=
 
'
A
L
T
E
R
 
T
A
B
L
E
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
 
M
O
D
I
F
Y
 
n
a
m
e
 
v
a
r
c
h
a
r
(
2
5
5
)
'
;

 
 
 
 
$
r
e
s
u
l
t
 
=
 
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
;

}


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
t
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
s
L
a
s
t
c
h
a
n
g
e
d
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
a
d
d
i
n
g
 
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
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
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
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
P
r
o
p
e
r
t
y
s
L
a
s
t
c
h
a
n
g
e
d
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
r
o
p
e
r
t
y
s
 
L
I
K
E
 
'
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
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
C
o
n
t
r
a
c
t
s
L
a
s
t
c
h
a
n
g
e
d
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
a
d
d
i
n
g
 
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
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
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
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
C
o
n
t
r
a
c
t
s
L
a
s
t
c
h
a
n
g
e
d
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
 
L
I
K
E
 
'
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
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
M
a
n
a
g
e
r
L
a
s
t
a
c
t
i
v
e
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
l
a
s
t
_
a
c
t
i
v
e
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
m
a
n
a
g
e
r
s
`
 
A
D
D
 
`
l
a
s
t
_
a
c
t
i
v
e
`
 
d
a
t
e
t
i
m
e
 
d
e
f
a
u
l
t
 
N
U
L
L
 
A
F
T
E
R
 
`
u
s
e
r
s
_
t
i
m
e
z
o
n
e
`
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
 
l
a
s
t
_
a
c
t
i
v
e
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
M
a
n
a
g
e
r
L
a
s
t
a
c
t
i
v
e
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
m
a
n
a
g
e
r
s
 
L
I
K
E
 
'
l
a
s
t
_
a
c
t
i
v
e
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
T
a
x
r
a
t
e
s
E
U
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
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
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
i
s
_
e
u
_
c
o
u
n
t
r
y
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
s
`
 
A
D
D
 
`
i
s
_
e
u
_
c
o
u
n
t
r
y
`
 
B
O
O
L
 
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
0
'
 
A
F
T
E
R
 
`
r
a
t
e
`
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
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
s
 
i
s
_
e
u
_
c
o
u
n
t
r
y
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
T
a
x
r
a
t
e
s
E
U
C
o
l
E
x
i
s
t
s
(
)

{

 
 
 
 
$
g
u
e
s
t
s
T
i
m
e
s
t
a
m
p
I
n
s
t
a
l
l
e
d
 
=
 
t
r
u
e
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
H
O
W
 
C
O
L
U
M
N
S
 
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
s
 
L
I
K
E
 
'
i
s
_
e
u
_
c
o
u
n
t
r
y
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
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
s
S
i
t
e
I
d
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
a
d
d
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
y
_
s
i
t
e
_
i
d
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
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
 
v
a
r
c
h
a
r
(
2
5
5
)
 
N
U
L
L
 
A
F
T
E
R
 
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
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
P
r
o
p
e
r
t
y
s
S
i
t
e
I
d
C
o
l
E
x
i
s
t
s
(
)

{

 
 
 
 
$
g
u
e
s
t
s
T
i
m
e
s
t
a
m
p
I
n
s
t
a
l
l
e
d
 
=
 
t
r
u
e
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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
r
o
p
e
r
t
y
s
 
L
I
K
E
 
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
s
i
t
e
_
i
d
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
C
o
n
t
r
a
c
t
s
L
a
n
g
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
a
d
d
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
_
l
a
n
g
u
a
g
e
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
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
 
A
F
T
E
R
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
C
o
n
t
r
a
c
t
s
L
a
n
g
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
 
L
I
K
E
 
'
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
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
C
u
s
t
o
m
e
r
t
y
p
e
s
I
s
C
h
i
l
d
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
u
s
t
o
m
e
r
t
y
p
e
s
 
L
I
K
E
 
'
i
s
_
c
h
i
l
d
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
C
u
s
t
o
m
e
r
t
y
p
e
s
I
s
C
h
i
l
d
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
u
s
t
o
m
e
r
t
y
p
e
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
i
s
_
c
h
i
l
d
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
u
s
t
o
m
e
r
t
y
p
e
s
`
 
A
D
D
 
`
i
s
_
c
h
i
l
d
`
 
B
O
O
L
 
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
0
'
 
A
F
T
E
R
 
`
o
r
d
e
r
`
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
u
s
t
o
m
e
r
t
y
p
e
s
 
i
s
_
c
h
i
l
d
'
)
;

 
 
 
 
}

}


/
/
 
I
n
 
J
o
m
r
e
s
 
8
.
1
 
w
e
'
r
e
 
o
f
f
e
r
i
n
g
 
t
h
e
 
a
b
i
l
i
t
y
 
t
o
 
u
s
e
 
a
 
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
a
t
h
 
t
o
 
t
h
e
 
J
o
m
r
e
s
 
r
o
o
t
 
d
i
r
e
c
t
o
r
y
 
d
u
e
 
t
o
 
r
e
q
u
i
r
e
m
e
n
t
s
 
o
f
 
t
h
e
 
w
o
r
d
p
r
e
s
s
 
r
e
p
o
s
i
t
o
r
y
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
 
n
e
e
d
 
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
 
p
a
t
h
s
 
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
 
f
e
a
t
u
r
e
 
a
n
d
 
r
o
o
m
 
t
y
p
e
 
i
m
a
g
e
s
.


f
u
n
c
t
i
o
n
 
u
p
d
a
t
e
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
_
i
m
a
g
e
s
_
p
a
t
h
s
(
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
 
 
`
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
`
 
,
 
`
i
m
a
g
e
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
'
;

 
 
 
 
$
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
_
t
y
p
e
s
)
 
>
 
0
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
_
t
y
p
e
s
 
a
s
 
$
r
o
o
m
_
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
n
g
 
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
/
'
,
 
$
r
o
o
m
_
t
y
p
e
-
>
i
m
a
g
e
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
b
a
n
g
)
 
>
 
1
)
 
{
 
/
/
 
h
a
s
n
'
t
 
b
e
e
n
 
u
p
d
a
t
e
d
 
y
e
t
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
a
g
e
 
=
 
e
n
d
(
$
b
a
n
g
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
U
P
D
A
T
E
 
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
 
S
E
T
 
`
i
m
a
g
e
`
=
'
"
.
$
i
m
a
g
e
.
"
'
 
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
 
"
.
$
r
o
o
m
_
t
y
p
e
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
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
u
p
d
a
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
_
f
e
a
t
u
r
e
s
_
i
m
a
g
e
s
_
p
a
t
h
s
(
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
 
 
`
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
`
 
,
 
`
i
m
a
g
e
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
r
e
s
_
h
o
t
e
l
_
f
e
a
t
u
r
e
s
'
;

 
 
 
 
$
f
e
a
t
u
r
e
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
c
o
u
n
t
(
$
f
e
a
t
u
r
e
s
)
 
>
 
0
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
f
e
a
t
u
r
e
s
 
a
s
 
$
f
e
a
t
u
r
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
n
g
 
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
/
'
,
 
$
f
e
a
t
u
r
e
-
>
i
m
a
g
e
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
b
a
n
g
)
 
>
 
1
)
 
{
 
/
/
 
h
a
s
n
'
t
 
b
e
e
n
 
u
p
d
a
t
e
d
 
y
e
t
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
a
g
e
 
=
 
e
n
d
(
$
b
a
n
g
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
U
P
D
A
T
E
 
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
h
o
t
e
l
_
f
e
a
t
u
r
e
s
 
S
E
T
 
`
i
m
a
g
e
`
=
'
"
.
$
i
m
a
g
e
.
"
'
 
W
H
E
R
E
 
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
 
=
 
"
.
$
f
e
a
t
u
r
e
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
r
e
n
a
m
e
E
x
t
r
a
S
e
r
v
i
c
e
s
T
a
b
l
e
(
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
R
E
N
A
M
E
 
T
A
B
L
E
 
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
e
x
t
r
a
S
e
r
v
i
c
e
s
`
 
T
O
 
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
t
e
m
p
`
'
;

 
 
 
 
$
r
e
s
u
l
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
q
u
e
r
y
 
=
 
'
R
E
N
A
M
E
 
T
A
B
L
E
 
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
t
e
m
p
`
 
T
O
 
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
`
'
;

 
 
 
 
$
r
e
s
u
l
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


 
 
 
 
/
/
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
 
"
R
e
n
a
m
e
d
 
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
e
x
t
r
a
S
e
r
v
i
c
e
s
 
t
o
 
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
e
r
v
i
c
e
s
"
)
;

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
E
x
t
r
a
S
e
r
v
i
c
e
s
T
a
b
l
e
N
e
e
d
s
R
e
n
a
m
i
n
g
(
)

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
H
O
W
 
V
A
R
I
A
B
L
E
S
 
L
I
K
E
 
'
l
o
w
e
r
_
c
a
s
e
_
t
a
b
l
e
_
n
a
m
e
s
'
;
"
;

 
 
 
 
$
c
a
s
e
_
s
e
n
s
i
t
i
v
i
t
y
 
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

 
 
 
 
i
f
 
(
$
c
a
s
e
_
s
e
n
s
i
t
i
v
i
t
y
 
=
=
 
0
)
 
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
W
a
r
n
i
n
g
,
 
J
o
m
r
e
s
 
a
t
t
e
m
p
t
e
d
 
t
o
 
c
h
e
c
k
 
f
o
r
 
t
h
e
 
e
x
i
s
t
a
n
c
e
 
o
f
 
t
h
e
 
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
S
e
r
v
i
c
e
s
 
t
a
b
l
e
,
 
h
o
w
e
v
e
r
 
y
o
u
r
 
l
o
w
e
r
_
c
a
s
e
_
t
a
b
l
e
_
n
a
m
e
s
 
s
e
t
t
i
n
g
 
i
n
 
m
y
S
q
l
 
i
s
 
s
e
t
 
t
o
 
0
 
(
z
e
r
o
)
 
s
o
 
w
e
 
c
a
n
n
o
t
 
t
e
s
t
 
f
o
r
 
t
h
i
s
 
t
a
b
l
e
 
n
a
m
e
 
a
s
 
m
y
S
q
l
 
w
i
l
l
 
r
e
t
u
r
n
 
t
h
e
 
t
a
b
l
e
 
n
a
m
e
 
a
s
 
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
e
r
v
i
c
e
s
,
 
e
v
e
n
 
i
f
 
i
t
\
'
s
 
s
t
o
r
e
d
 
a
s
 
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
S
e
r
v
i
c
e
s
.
<
b
r
/
>
 
P
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
 
t
a
b
l
e
 
n
a
m
e
s
 
(
u
s
i
n
g
 
a
 
t
o
o
l
 
s
u
c
h
 
a
s
 
p
h
p
M
y
A
d
m
i
n
)
 
a
n
d
 
i
f
 
t
h
e
 
t
a
b
l
e
 
i
s
 
n
a
m
e
d
 
x
x
x
x
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
S
e
r
v
i
c
e
s
 
r
e
n
a
m
e
 
i
t
 
m
a
n
u
a
l
l
y
 
t
o
 
x
x
x
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
e
r
v
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
 
d
o
n
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
 
p
a
s
t
 
y
o
u
 
c
a
n
 
i
g
n
o
r
e
 
t
h
i
s
 
w
a
r
n
i
n
g
.
'
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
H
O
W
 
T
A
B
L
E
S
'
;

 
 
 
 
$
r
e
s
u
l
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
,
 
$
m
o
d
e
 
=
 
f
a
l
s
e
)
;

 
 
 
 
$
s
t
r
i
n
g
 
=
 
'
T
a
b
l
e
s
_
i
n
_
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
d
b
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
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
r
-
>
$
s
t
r
i
n
g
,
 
'
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
S
e
r
v
i
c
e
s
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
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
a
r
c
h
i
v
e
C
o
n
t
r
a
c
t
i
d
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
t
a
b
l
e
 
a
d
d
i
n
g
 
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
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
`
 
A
D
D
 
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
 
D
E
F
A
U
L
T
 
0
 
N
O
T
 
N
U
L
L
 
A
F
T
E
R
 
`
d
a
t
e
`
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
)
;

 
 
 
 
}

 
 
 
 
$
q
u
e
r
y
 
=
 
'
A
L
T
E
R
 
T
A
B
L
E
 
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
`
 
A
D
D
 
`
t
a
g
`
 
v
a
r
c
h
a
r
(
2
5
5
)
 
N
U
L
L
 
A
F
T
E
R
 
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
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
 
t
a
g
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
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
a
r
c
h
i
v
e
C
o
n
t
r
a
c
t
i
d
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
 
L
I
K
E
 
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
u
i
d
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
C
o
n
t
r
a
c
t
s
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
a
r
c
h
i
v
e
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
a
d
d
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
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
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
 
D
E
F
A
U
L
T
 
'
0
'
 
N
O
T
 
N
U
L
L
 
A
F
T
E
R
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
'
)
;

 
 
 
 
}

 
 
 
 
$
q
u
e
r
y
 
=
 
'
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
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
 
C
H
A
R
(
1
0
0
)
 
A
F
T
E
R
 
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
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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

 
 
 
 
}

 
 
 
 
$
q
u
e
r
y
 
=
 
'
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
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
 
D
E
F
A
U
L
T
 
0
 
N
O
T
 
N
U
L
L
 
A
F
T
E
R
 
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
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
C
o
n
t
r
a
c
t
s
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
a
r
c
h
i
v
e
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
 
L
I
K
E
 
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
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
L
i
n
e
i
t
e
m
s
I
n
i
t
q
t
y
C
o
l
F
l
o
a
t
(
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
D
E
S
C
R
I
B
E
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
'
;

 
 
 
 
$
r
e
s
u
l
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
e
s
u
l
t
 
a
s
 
$
f
i
e
l
d
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
e
l
d
-
>
F
i
e
l
d
 
=
=
 
'
i
n
i
t
_
q
t
y
'
 
&
&
 
$
f
i
e
l
d
-
>
T
y
p
e
 
=
=
 
'
i
n
t
(
1
1
)
'
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
A
L
T
E
R
 
T
A
B
L
E
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
 
M
O
D
I
F
Y
 
i
n
i
t
_
q
t
y
 
F
L
O
A
T
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
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
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}


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
t
e
r
C
o
n
t
r
a
c
t
s
A
p
p
r
o
v
e
d
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
a
d
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
e
d
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
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
 
D
E
F
A
U
L
T
 
1
 
N
O
T
 
N
U
L
L
 
A
F
T
E
R
 
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
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
 
a
p
p
r
o
v
e
d
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
C
o
n
t
r
a
c
t
s
A
p
p
r
o
v
e
d
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
 
L
I
K
E
 
'
a
p
p
r
o
v
e
d
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
T
a
r
i
f
f
t
y
p
e
s
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
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
t
a
r
i
f
f
t
y
p
e
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
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
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
`
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
t
a
r
i
f
f
t
y
p
e
s
`
 
A
D
D
 
`
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
3
0
0
0
)
 
D
E
F
A
U
L
T
 
N
U
L
L
 
A
F
T
E
R
 
`
n
a
m
e
`
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
t
a
r
i
f
f
t
y
p
e
s
 
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

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
T
a
r
i
f
f
t
y
p
e
s
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
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
t
a
r
i
f
f
t
y
p
e
s
 
L
I
K
E
 
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
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
M
a
n
a
g
e
r
S
i
m
p
l
e
c
o
n
f
i
g
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
s
i
m
p
l
e
_
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
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
m
a
n
a
g
e
r
s
`
 
A
D
D
 
`
s
i
m
p
l
e
_
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
`
 
t
i
n
y
i
n
t
(
 
1
 
)
 
d
e
f
a
u
l
t
 
1
 
A
F
T
E
R
 
`
s
u
s
p
e
n
d
e
d
`
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
 
s
i
m
p
l
e
_
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
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
M
a
n
a
g
e
r
S
i
m
p
l
e
c
o
n
f
i
g
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
m
a
n
a
g
e
r
s
 
L
I
K
E
 
'
s
i
m
p
l
e
_
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
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
C
o
n
t
r
a
c
t
s
C
h
a
n
n
e
l
M
a
n
a
g
e
r
B
o
o
k
i
n
g
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
a
d
d
i
n
g
 
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
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
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
 
B
O
O
L
 
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
0
'
 
A
F
T
E
R
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
C
o
n
t
r
a
c
t
s
C
h
a
n
n
e
l
M
a
n
a
g
e
r
B
o
o
k
i
n
g
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
 
L
I
K
E
 
'
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
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
P
T
y
p
e
X
r
e
f
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
h
o
t
e
l
_
f
e
a
t
u
r
e
s
 
L
I
K
E
 
'
p
t
y
p
e
_
x
r
e
f
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
P
T
y
p
e
X
r
e
f
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
_
h
o
t
e
l
_
f
e
a
t
u
r
e
s
 
t
a
b
l
e
 
r
e
n
a
m
i
n
g
 
p
t
y
p
e
_
i
d
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
h
o
t
e
l
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
 
C
H
A
N
G
E
 
C
O
L
U
M
N
 
p
t
y
p
e
_
i
d
 
p
t
y
p
e
_
x
r
e
f
 
t
e
x
t
 
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
 
N
U
L
L
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
_
h
o
t
e
l
_
f
e
a
t
u
r
e
s
 
p
t
y
p
e
_
x
r
e
f
'
)
;

 
 
 
 
}


 
 
 
 
$
t
a
b
l
e
s
F
o
u
n
d
 
=
 
f
a
l
s
e
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
H
O
W
 
T
A
B
L
E
S
'
;

 
 
 
 
$
r
e
s
u
l
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
,
 
$
m
o
d
e
 
=
 
f
a
l
s
e
)
;

 
 
 
 
$
s
t
r
i
n
g
 
=
 
'
T
a
b
l
e
s
_
i
n
_
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
d
b
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
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
r
-
>
$
s
t
r
i
n
g
,
 
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
i
e
l
d
s
_
f
i
e
l
d
s
'
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
A
L
T
E
R
 
T
A
B
L
E
 
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
u
s
t
o
m
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
f
i
e
l
d
s
_
f
i
e
l
d
s
`
 
A
D
D
 
`
p
t
y
p
e
_
x
r
e
f
`
 
t
e
x
t
 
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
 
N
U
L
L
 
A
F
T
E
R
 
`
o
r
d
e
r
`
 
'
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
,
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
A
U
T
O
_
U
P
G
R
A
D
E
)
 
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
 
a
d
d
 
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
u
s
t
o
m
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
f
i
e
l
d
s
_
f
i
e
l
d
s
 
c
o
l
u
m
n
 
p
t
y
p
e
_
x
r
e
f
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
'
A
L
T
E
R
 
T
A
B
L
E
 
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
r
o
o
m
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
 
A
D
D
 
`
p
t
y
p
e
_
x
r
e
f
`
 
t
e
x
t
 
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
 
N
U
L
L
 
A
F
T
E
R
 
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
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
f
e
a
t
u
r
e
s
 
p
t
y
p
e
_
x
r
e
f
'
)
;

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
'
A
L
T
E
R
 
T
A
B
L
E
 
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
s
`
 
A
D
D
 
`
p
t
y
p
e
_
x
r
e
f
`
 
t
e
x
t
 
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
 
N
U
L
L
 
A
F
T
E
R
 
`
r
e
q
u
i
r
e
d
`
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
s
 
p
t
y
p
e
_
x
r
e
f
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
C
r
a
t
e
s
T
a
x
R
a
t
e
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
o
r
t
a
l
_
c
_
r
a
t
e
s
 
L
I
K
E
 
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
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
C
r
a
t
e
s
T
a
x
R
a
t
e
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
c
_
r
a
t
e
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
t
a
x
_
r
a
t
e
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
c
_
r
a
t
e
s
`
 
A
D
D
 
`
t
a
x
_
r
a
t
e
`
 
I
N
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
'
 
A
F
T
E
R
 
`
a
r
c
h
i
v
e
d
_
d
a
t
e
`
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
c
_
r
a
t
e
s
 
t
a
x
_
r
a
t
e
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
I
n
v
o
i
c
e
s
V
A
T
F
l
a
g
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 
L
I
K
E
 
'
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
I
n
v
o
i
c
e
s
V
A
T
F
l
a
g
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
`
 
A
D
D
 
`
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
`
 
B
O
O
L
 
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
'
 
A
F
T
E
R
 
`
i
s
_
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
`
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
r
e
a
t
e
T
a
x
R
u
l
e
s
T
a
b
l
e
(
)

{

 
 
 
 
/
/
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
 
"
C
r
e
a
t
i
n
g
 
j
o
m
r
e
s
_
t
a
x
_
r
u
l
e
s
 
t
a
b
l
e
"
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
t
a
x
_
r
u
l
e
s
`
 
(

	
	
`
i
d
`
 
i
n
t
(
1
1
)
 
a
u
t
o
_
i
n
c
r
e
m
e
n
t
,

	
	
`
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
`
 
 
i
n
t
(
1
1
)
,

	
	
`
c
o
u
n
t
r
y
_
i
d
`
 
i
n
t
(
1
1
)
,

	
	
`
r
e
g
i
o
n
_
i
d
`
 
i
n
t
(
1
1
)
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
i
d
`
)

	
	
)
 
'
;

 
 
 
 
$
r
e
s
u
l
t
 
=
 
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
,
 
'
'
)
;

 
 
 
 
i
f
 
(
!
$
r
e
s
u
l
t
)
 
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
E
r
r
o
r
 
c
r
e
a
t
i
n
g
 
t
a
b
l
e
 
t
a
b
l
e
 
j
o
m
r
e
s
_
t
a
x
_
r
u
l
e
s
 
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
T
a
x
R
u
l
e
s
T
a
b
l
e
E
x
i
s
t
s
(
)

{

 
 
 
 
$
t
a
b
l
e
s
F
o
u
n
d
 
=
 
f
a
l
s
e
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
H
O
W
 
T
A
B
L
E
S
'
;

 
 
 
 
$
r
e
s
u
l
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
,
 
$
m
o
d
e
 
=
 
f
a
l
s
e
)
;

 
 
 
 
$
s
t
r
i
n
g
 
=
 
'
T
a
b
l
e
s
_
i
n
_
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
d
b
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
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
r
-
>
$
s
t
r
i
n
g
,
 
'
_
j
o
m
r
e
s
_
t
a
x
_
r
u
l
e
s
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
G
u
e
s
t
s
V
a
t
c
o
d
e
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
_
g
u
e
s
t
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
v
a
t
_
n
u
m
b
e
r
/
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
c
o
l
u
m
n
s
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
g
u
e
s
t
s
`
 
A
D
D
 
`
v
a
t
_
n
u
m
b
e
r
`
 
C
H
A
R
 
(
2
5
)
 
D
E
F
A
U
L
T
 
'
'
 
N
O
T
 
N
U
L
L
 
A
F
T
E
R
 
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
 
"
;
 
/
/
 
M
o
s
t
 
I
 
c
o
u
l
d
 
f
i
n
d
 
w
a
s
 
u
p
 
t
o
 
p
o
s
s
i
b
l
y
 
1
5
 
c
h
a
r
s
.
 
A
d
d
i
n
g
 
1
0
 
t
o
 
b
e
 
o
n
 
t
h
e
 
s
a
f
e
 
s
i
d
e
.

 
 
 
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
_
g
u
e
s
t
s
 
v
a
t
_
n
u
m
b
e
r
'
)
;

 
 
 
 
}

 
 
 
 
$
q
u
e
r
y
 
=
 
"
A
L
T
E
R
 
T
A
B
L
E
 
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
g
u
e
s
t
s
`
 
A
D
D
 
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
`
 
B
O
O
L
 
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
0
'
 
A
F
T
E
R
 
`
v
a
t
_
n
u
m
b
e
r
`
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
_
g
u
e
s
t
s
 
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
'
)
;

 
 
 
 
}

 
 
 
 
$
q
u
e
r
y
 
=
 
'
A
L
T
E
R
 
T
A
B
L
E
 
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
g
u
e
s
t
s
`
 
A
D
D
 
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
`
 
T
E
X
T
 
N
U
L
L
 
A
F
T
E
R
 
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
`
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
_
g
u
e
s
t
s
 
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
'
)
;

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
A
L
T
E
R
 
T
A
B
L
E
 
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
g
u
e
s
t
_
p
r
o
f
i
l
e
`
 
A
D
D
 
`
v
a
t
_
n
u
m
b
e
r
`
 
C
H
A
R
 
(
2
5
)
 
D
E
F
A
U
L
T
 
'
'
 
N
O
T
 
N
U
L
L
 
A
F
T
E
R
 
`
e
m
a
i
l
`
 
"
;
 
/
/
 
M
o
s
t
 
I
 
c
o
u
l
d
 
f
i
n
d
 
w
a
s
 
u
p
 
t
o
 
p
o
s
s
i
b
l
y
 
1
5
 
c
h
a
r
s
.
 
A
d
d
i
n
g
 
1
0
 
t
o
 
b
e
 
o
n
 
t
h
e
 
s
a
f
e
 
s
i
d
e
.

 
 
 
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
_
g
u
e
s
t
_
p
r
o
f
i
l
e
 
v
a
t
_
n
u
m
b
e
r
'
)
;

 
 
 
 
}

 
 
 
 
$
q
u
e
r
y
 
=
 
"
A
L
T
E
R
 
T
A
B
L
E
 
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
g
u
e
s
t
_
p
r
o
f
i
l
e
`
 
A
D
D
 
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
`
 
B
O
O
L
 
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
0
'
 
A
F
T
E
R
 
`
v
a
t
_
n
u
m
b
e
r
`
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
_
g
u
e
s
t
_
p
r
o
f
i
l
e
 
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
'
)
;

 
 
 
 
}

 
 
 
 
$
q
u
e
r
y
 
=
 
'
A
L
T
E
R
 
T
A
B
L
E
 
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
g
u
e
s
t
_
p
r
o
f
i
l
e
`
 
A
D
D
 
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
`
 
T
E
X
T
 
N
U
L
L
 
A
F
T
E
R
 
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
`
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
_
g
u
e
s
t
_
p
r
o
f
i
l
e
 
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
G
u
e
s
t
s
V
a
t
c
o
d
e
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
g
u
e
s
t
s
 
L
I
K
E
 
'
v
a
t
_
n
u
m
b
e
r
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
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
s
M
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
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
a
d
d
i
n
g
 
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
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
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
 
T
E
X
T
 
N
U
L
L
 
A
F
T
E
R
 
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
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
P
r
o
p
e
r
t
y
s
M
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
C
o
l
E
x
i
s
t
s
(
)

{

 
 
 
 
$
g
u
e
s
t
s
T
i
m
e
s
t
a
m
p
I
n
s
t
a
l
l
e
d
 
=
 
t
r
u
e
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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
r
o
p
e
r
t
y
s
 
L
I
K
E
 
'
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
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
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
s
S
u
p
e
r
i
o
r
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
a
d
d
i
n
g
 
s
u
p
e
r
i
o
r
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
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
 
D
E
F
A
U
L
T
 
'
0
'
 
N
O
T
 
N
U
L
L
 
A
F
T
E
R
 
`
s
t
a
r
s
`
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
 
s
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

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
P
r
o
p
e
r
t
y
s
S
u
p
e
r
i
o
r
C
o
l
E
x
i
s
t
s
(
)

{

 
 
 
 
$
g
u
e
s
t
s
T
i
m
e
s
t
a
m
p
I
n
s
t
a
l
l
e
d
 
=
 
t
r
u
e
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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
r
o
p
e
r
t
y
s
 
L
I
K
E
 
'
s
u
p
e
r
i
o
r
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
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
s
A
p
p
r
o
v
e
d
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
a
d
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
e
d
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
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
 
 
B
O
O
L
 
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
'
 
A
F
T
E
R
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
 
a
p
p
r
o
v
e
d
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
P
r
o
p
e
r
t
y
s
A
p
p
r
o
v
e
d
C
o
l
E
x
i
s
t
s
(
)

{

 
 
 
 
$
g
u
e
s
t
s
T
i
m
e
s
t
a
m
p
I
n
s
t
a
l
l
e
d
 
=
 
t
r
u
e
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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
r
o
p
e
r
t
y
s
 
L
I
K
E
 
'
a
p
p
r
o
v
e
d
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


/
*

A
d
d
e
d
 
a
 
n
e
w
 
"
m
i
g
r
a
t
e
 
r
e
g
i
o
n
 
n
a
m
e
s
 
t
o
 
r
e
g
i
o
n
 
i
d
s
"
 
f
u
n
c
t
i
o
n
,
 
b
u
t
 
w
i
l
l
 
l
e
a
v
e
 
i
t
 
d
i
s
a
b
l
e
d
 
f
o
r
 
n
o
w
.
 
N
e
w
 
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
t
i
o
n
a
l
i
t
y
 
f
o
r
c
e
s
 
u
s
 
t
o
 
s
t
o
r
e
 
r
e
g
i
o
n
 
n
a
m
e
s
 
a
s
 
t
h
e
 
d
a
t
a
b
a
s
e
 
r
e
g
i
o
n
 
i
d
s
,
 
h
o
w
e
v
e
r
 
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
h
i
s
 
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
 
t
o
 
n
e
g
a
t
i
v
e
l
y
 
i
m
p
a
c
t
 
u
s
e
r
s
 
w
i
t
h
 
e
x
i
s
t
i
n
g
 
d
a
t
a
 
s
o
 
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
 
h
a
s
 
b
e
e
n
 
u
p
d
a
t
e
d
 
t
o
 
s
e
a
r
c
h
 
b
o
t
h
 
r
e
g
i
o
n
 
n
a
m
e
s
 
a
n
d
 
r
e
g
i
o
n
 
i
d
s
 
i
n
 
t
h
e
 
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
.
 
F
o
r
 
n
o
w
 
w
e
 
B
E
L
I
E
V
E
 
t
h
a
t
 
t
h
i
s
 
w
i
l
l
 
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
 
t
o
 
p
r
o
v
i
d
e
 
a
 
p
a
i
n
l
e
s
s
 
u
p
g
r
a
d
e
,
 
h
o
w
e
v
e
r
 
w
e
'
l
l
 
k
e
e
p
 
t
h
i
s
 
m
i
g
r
a
t
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
 
i
n
 
o
u
r
 
b
a
c
k
 
p
o
c
k
e
t
s
 
i
n
 
c
a
s
e
 
w
e
 
f
i
n
d
 
t
h
a
t
 
u
s
e
r
s
 
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
 
m
i
g
r
a
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
 
t
o
 
r
e
g
i
o
n
 
i
d
s
.

*
/

f
u
n
c
t
i
o
n
 
m
i
g
r
a
t
e
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
s
(
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
,
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
p
r
o
p
e
r
t
y
s
'
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{


 
 
 
 
 
 
 
 
/
*

 
 
 
 
 
 
 
 
U
P
D
A
T
E
 
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

 
 
 
 
 
 
 
 
 
 
 
 
S
E
T
 
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
 
=
 
C
A
S
E
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
W
H
E
N
 
1
 
T
H
E
N
 
3

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
W
H
E
N
 
2
 
T
H
E
N
 
4

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
W
H
E
N
 
3
 
T
H
E
N
 
5

 
 
 
 
 
 
 
 
 
 
 
 
E
N
D

 
 
 
 
 
 
 
 
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
s
_
u
i
d
 
I
N
 
(
1
,
2
,
3
)

 
 
 
 
 
 
 
 
*
/

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'

	
	
U
P
D
A
T
E
 
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

	
	
	
S
E
T
 
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
 
=
 
C
A
S
E
 
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

	
	
	
	
'
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
s
_
a
r
r
a
y
 
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
e
s
u
l
t
 
a
s
 
$
p
r
o
p
e
r
t
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
n
u
m
e
r
i
c
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
-
>
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
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
g
i
o
n
_
i
d
 
=
 
i
n
s
t
a
l
l
e
r
_
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
-
>
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
n
u
l
l
(
$
r
e
g
i
o
n
_
i
d
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
.
=
 
'
W
H
E
N
 
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
-
>
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
.
'
 
T
H
E
N
 
'
.
(
i
n
t
)
 
$
r
e
g
i
o
n
_
i
d
.
'

	
	
	
'
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
s
_
a
r
r
a
y
[
 
]
 
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
-
>
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
s
_
a
r
r
a
y
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
_
s
t
r
 
=
 
'
 

	
	
	
E
N
D

	
	
	
	
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
s
_
u
i
d
 
I
N
 
(
'
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
s
_
a
r
r
a
y
 
a
s
 
$
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
_
s
t
r
 
.
=
 
$
i
d
.
'
,
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
_
s
t
r
 
=
 
s
u
b
s
t
r
(
$
i
n
_
s
t
r
,
 
0
,
 
-
1
)
.
'
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
.
$
i
n
_
s
t
r
,
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
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
U
p
d
a
t
e
d
 
p
r
o
p
e
r
t
y
 
r
e
g
i
o
n
s
 
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
 
r
e
g
i
o
n
 
i
d
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
F
a
i
l
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
 
p
r
o
p
e
r
t
y
 
r
e
g
i
o
n
s
 
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
 
r
e
g
i
o
n
 
i
d
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}


/
/
 
T
h
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
p
h
p
 
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
 
h
a
s
 
r
e
c
e
n
t
l
y
 
h
a
d
 
a
 
c
a
l
l
 
t
o
 
a
 
J
o
o
m
l
a
 
f
u
n
c
t
i
o
n
 
a
d
d
e
d
.
 
T
h
i
s
 
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
b
l
e
m
 
d
u
r
i
n
g
 
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
 
R
a
t
h
e
r
 
t
h
a
n
 
m
a
k
i
n
g
 
t
h
e
 
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
i
d
 
A
L
W
A
Y
S
 
c
h
e
c
k
 
f
o
r
 
t
h
e
 
e
x
i
s
t
e
n
c
e
 
o
f
 
t
h
e
 
C
M
S
 
s
p
e
c
i
f
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
 
e
v
e
r
y
 
t
i
m
e
 
i
t
'
s
 
r
u
n
,
 
w
e
'
l
l
 
d
u
p
l
i
c
a
t
e
 
t
h
e
 
f
u
n
c
t
i
o
n
 
h
e
r
e
 
i
n
s
t
e
a
d
.
 
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
i
d
 
h
a
s
 
t
h
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
 
t
o
 
b
e
 
c
a
l
l
e
d
 
m
a
n
y
 
t
i
m
e
s
,
 
s
o
 
t
h
e
 
f
e
w
e
r
 
c
a
l
l
s
 
w
e
 
c
a
n
 
m
a
k
e
 
t
o
 
c
h
e
c
k
 
i
f
 
a
 
f
u
n
c
t
i
o
n
 
e
x
i
s
t
s
 
w
h
e
n
 
9
9
.
9
9
9
9
9
%
 
i
f
 
t
h
e
 
t
i
m
e
 
i
t
 
d
o
e
s
,
 
t
h
e
 
l
e
s
s
 
l
o
a
d
 
w
e
'
r
e
 
c
r
e
a
t
i
n
g
.


f
u
n
c
t
i
o
n
 
i
n
s
t
a
l
l
e
r
_
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
i
d
(
$
r
e
g
i
o
n
)

{

 
 
 
 
i
f
 
(
i
s
_
n
u
m
e
r
i
c
(
$
r
e
g
i
o
n
)
)
 
{
 
/
/
 
I
t
'
s
 
a
l
r
e
a
d
y
 
n
u
m
e
r
i
c

 
 
 
 
r
e
t
u
r
n
 
$
r
e
g
i
o
n
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
r
e
g
i
o
n
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
r
e
g
i
o
n
s
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
j
o
m
r
e
s
_
r
e
g
i
o
n
s
-
>
r
e
g
i
o
n
s
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
c
a
s
e
c
m
p
(
$
r
[
 
'
r
e
g
i
o
n
n
a
m
e
'
 
]
,
 
$
r
e
g
i
o
n
)
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
(
i
n
t
)
 
$
r
[
 
'
i
d
'
 
]
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
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


f
u
n
c
t
i
o
n
 
c
r
e
a
t
e
C
o
u
n
t
r
i
e
s
T
a
b
l
e
(
)

{

 
 
 
 
/
/
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
 
"
C
r
e
a
t
i
n
g
 
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
u
n
t
r
i
e
s
 
t
a
b
l
e
"
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
u
n
t
r
i
e
s
`
 
(

	
	
`
i
d
`
 
i
n
t
(
1
1
)
 
a
u
t
o
_
i
n
c
r
e
m
e
n
t
,

	
	
`
c
o
u
n
t
r
y
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
)
,

	
	
`
c
o
u
n
t
r
y
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
i
d
`
)

	
	
)
 
'
;

 
 
 
 
$
r
e
s
u
l
t
 
=
 
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
,
 
'
'
)
;

 
 
 
 
i
f
 
(
!
$
r
e
s
u
l
t
)
 
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
E
r
r
o
r
 
c
r
e
a
t
i
n
g
 
t
a
b
l
e
 
t
a
b
l
e
 
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
u
n
t
r
i
e
s
 
'
)
;

 
 
 
 
}


 
 
 
 
/
/
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
 
"
C
r
e
a
t
i
n
g
 
_
j
o
m
r
e
s
_
r
e
g
i
o
n
s
 
t
a
b
l
e
"
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
r
e
g
i
o
n
s
`
 
(

	
	
`
i
d
`
 
i
n
t
(
1
1
)
 
a
u
t
o
_
i
n
c
r
e
m
e
n
t
,

	
	
`
c
o
u
n
t
r
y
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
)
,

	
	
`
r
e
g
i
o
n
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
i
d
`
)

	
	
)
 
'
;

 
 
 
 
$
r
e
s
u
l
t
 
=
 
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
,
 
'
'
)
;

 
 
 
 
i
f
 
(
!
$
r
e
s
u
l
t
)
 
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
E
r
r
o
r
 
c
r
e
a
t
i
n
g
 
t
a
b
l
e
 
t
a
b
l
e
 
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
u
n
t
r
i
e
s
 
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
C
o
u
n
t
r
i
e
s
T
a
b
l
e
E
x
i
s
t
s
(
)

{

 
 
 
 
$
t
a
b
l
e
s
F
o
u
n
d
 
=
 
f
a
l
s
e
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
H
O
W
 
T
A
B
L
E
S
'
;

 
 
 
 
$
r
e
s
u
l
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
,
 
$
m
o
d
e
 
=
 
f
a
l
s
e
)
;

 
 
 
 
$
s
t
r
i
n
g
 
=
 
'
T
a
b
l
e
s
_
i
n
_
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
d
b
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
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
r
-
>
$
s
t
r
i
n
g
,
 
'
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
u
n
t
r
i
e
s
'
)
 
|
|
 
s
t
r
s
t
r
(
$
r
-
>
$
s
t
r
i
n
g
,
 
'
_
j
o
m
r
e
s
_
r
e
g
i
o
n
s
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
E
x
t
r
a
S
e
r
v
i
c
e
s
T
a
x
t
a
x
_
c
o
d
e
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
e
r
v
i
c
e
s
 
L
I
K
E
 
'
t
a
x
_
c
o
d
e
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
E
x
t
r
a
S
e
r
v
i
c
e
s
T
a
x
t
a
x
_
c
o
d
e
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
e
r
v
i
c
e
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
t
a
x
_
c
o
d
e
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
`
 
A
D
D
 
`
t
a
x
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
1
0
)
 
D
E
F
A
U
L
T
 
'
0
'
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
e
r
v
i
c
e
s
 
t
a
x
_
c
o
d
e
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
I
n
v
o
i
c
e
s
G
u
e
s
t
i
d
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 
L
I
K
E
 
'
g
u
e
s
t
_
i
d
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
I
n
v
o
i
c
e
s
G
u
e
s
t
i
d
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
g
u
e
s
t
_
i
d
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
`
 
A
D
D
 
`
g
u
e
s
t
_
i
d
`
 
i
n
t
(
1
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
 
'
0
'
 
A
F
T
E
R
 
`
c
m
s
_
u
s
e
r
_
i
d
`
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 
g
u
e
s
t
_
i
d
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
r
e
a
t
e
A
c
c
e
s
s
C
o
n
t
r
o
l
T
a
b
l
e
(
)

{

 
 
 
 
/
/
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
 
"
C
r
e
a
t
i
n
g
 
_
_
j
o
m
r
e
s
_
a
c
c
e
s
s
_
c
o
n
t
r
o
l
 
t
a
b
l
e
"
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
a
c
c
e
s
s
_
c
o
n
t
r
o
l
`
 
(

	
	
`
i
d
`
 
i
n
t
(
1
1
)
 
a
u
t
o
_
i
n
c
r
e
m
e
n
t
,

	
	
`
s
c
r
i
p
t
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
a
c
c
e
s
s
_
l
e
v
e
l
`
 
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
i
d
`
)

	
	
)
 
'
;

 
 
 
 
$
r
e
s
u
l
t
 
=
 
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
,
 
'
'
)
;

 
 
 
 
i
f
 
(
!
$
r
e
s
u
l
t
)
 
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
E
r
r
o
r
 
c
r
e
a
t
i
n
g
 
t
a
b
l
e
 
t
a
b
l
e
 
_
_
j
o
m
r
e
s
_
a
c
c
e
s
s
_
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

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
A
c
c
e
s
s
C
o
n
t
r
o
l
T
a
b
l
e
E
x
i
s
t
s
(
)

{

 
 
 
 
$
t
a
b
l
e
s
F
o
u
n
d
 
=
 
f
a
l
s
e
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
H
O
W
 
T
A
B
L
E
S
'
;

 
 
 
 
$
r
e
s
u
l
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
,
 
$
m
o
d
e
 
=
 
f
a
l
s
e
)
;

 
 
 
 
$
s
t
r
i
n
g
 
=
 
'
T
a
b
l
e
s
_
i
n
_
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
d
b
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
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
r
-
>
$
s
t
r
i
n
g
,
 
'
_
j
o
m
r
e
s
_
a
c
c
e
s
s
_
c
o
n
t
r
o
l
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
P
t
y
p
e
s
O
r
d
e
r
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
t
y
p
e
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
o
r
d
e
r
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
t
y
p
e
s
`
 
A
D
D
 
`
o
r
d
e
r
`
 
I
N
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
0
'
 
A
F
T
E
R
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
t
y
p
e
s
 
o
r
d
e
r
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
P
t
y
p
e
s
O
r
d
e
r
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
t
y
p
e
s
 
L
I
K
E
 
'
o
r
d
e
r
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
E
x
t
r
a
s
A
u
t
o
S
e
l
e
c
t
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
t
a
b
l
e
 
a
d
d
i
n
g
 
a
u
t
o
_
s
e
l
e
c
t
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
e
x
t
r
a
s
`
 
A
D
D
 
`
a
u
t
o
_
s
e
l
e
c
t
`
 
I
N
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
0
'
 
A
F
T
E
R
 
`
p
r
i
c
e
`
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
 
a
u
t
o
_
s
e
l
e
c
t
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
E
x
t
r
a
s
A
u
t
o
s
e
l
e
c
t
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
 
L
I
K
E
 
'
a
u
t
o
_
s
e
l
e
c
t
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
L
i
n
e
i
t
e
m
s
I
n
c
l
u
s
i
v
e
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
 
 
L
I
K
E
 
'
i
n
i
t
_
t
o
t
a
l
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
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
L
i
n
e
i
t
e
m
s
I
n
c
l
u
s
i
v
e
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
i
n
i
t
_
t
o
t
a
l
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
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
`
 
A
D
D
 
`
i
n
i
t
_
t
o
t
a
l
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
`
 
f
l
o
a
t
 
N
O
T
 
N
U
L
L
 
d
e
f
a
u
l
t
 
'
0
'
 
A
F
T
E
R
 
`
i
n
i
t
_
t
o
t
a
l
`
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
 
i
n
i
t
_
t
o
t
a
l
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
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
C
o
u
p
o
n
s
B
o
o
k
i
n
g
V
a
l
i
d
C
o
l
s
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
u
p
o
n
s
 
 
L
I
K
E
 
'
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
C
o
u
p
o
n
s
B
o
o
k
i
n
g
V
a
l
i
d
C
o
l
s
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
u
p
o
n
s
 
t
a
b
l
e
 
a
d
d
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
_
v
a
l
i
d
_
f
r
o
m
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
u
p
o
n
s
`
 
A
D
D
 
`
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
`
 
D
A
T
E
 
A
F
T
E
R
 
r
o
o
m
s
_
o
n
l
y
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
u
p
o
n
s
 
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
'
)
;

 
 
 
 
}


 
 
 
 
/
/
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
E
d
i
t
i
n
g
 
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
u
p
o
n
s
 
t
a
b
l
e
 
a
d
d
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
_
v
a
l
i
d
_
t
o
 
c
o
l
u
m
n
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
A
L
T
E
R
 
T
A
B
L
E
 
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
u
p
o
n
s
`
 
A
D
D
 
`
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
`
 
D
A
T
E
 
A
F
T
E
R
 
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
u
p
o
n
s
 
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
'
)
;

 
 
 
 
}


 
 
 
 
/
/
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
E
d
i
t
i
n
g
 
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
u
p
o
n
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
g
u
e
s
t
_
u
i
d
 
c
o
l
u
m
n
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
 
"
A
L
T
E
R
 
T
A
B
L
E
 
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
u
p
o
n
s
`
 
A
D
D
 
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
0
'
 
A
F
T
E
R
 
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
u
p
o
n
s
 
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
E
x
t
r
a
S
e
r
v
i
c
e
s
T
a
x
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
e
r
v
i
c
e
s
 
 
L
I
K
E
 
'
t
a
x
_
r
a
t
e
_
v
a
l
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
E
x
t
r
a
S
e
r
v
i
c
e
s
T
a
x
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
e
r
v
i
c
e
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
t
a
x
_
r
a
t
e
_
v
a
l
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
`
 
A
D
D
 
`
t
a
x
_
r
a
t
e
_
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
 
D
E
F
A
U
L
T
 
'
0
'
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
e
r
v
i
c
e
s
 
t
a
x
_
r
a
t
e
_
v
a
l
'
)
;

 
 
 
 
}

}


/
/
 
A
n
 
o
d
d
 
o
n
e
,
 
t
h
i
s
.
 
I
t
 
s
e
e
m
s
 
t
h
a
t
 
s
o
m
e
 
u
p
g
r
a
d
e
s
 
h
a
v
e
n
'
t
 
g
o
t
 
t
h
i
s
 
t
a
b
l
e
,
 
s
o
 
w
e
'
l
l
 
a
d
d
 
i
t
 
i
f
 
n
e
e
d
e
d

/
*
 
f
u
n
c
t
i
o
n
 
c
r
e
a
t
e
E
x
t
r
a
S
e
r
v
i
c
e
s
T
a
b
l
e
(
)

 
 
 
 
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
 
"
C
r
e
a
t
i
n
g
 
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
e
r
v
i
c
e
s
 
t
a
b
l
e
"
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
`
 
(

 
 
 
 
 
 
 
 
`
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
_
u
i
d
`
 
i
n
t
(
1
1
)
 
a
u
t
o
_
i
n
c
r
e
m
e
n
t
,

 
 
 
 
 
 
 
 
`
s
e
r
v
i
c
e
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
r
v
i
c
e
_
v
a
l
u
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
 
V
A
R
C
H
A
R
(
1
1
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
 
V
A
R
C
H
A
R
(
1
1
)
,

 
 
 
 
 
 
 
 
`
t
a
x
_
r
a
t
e
_
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
 
D
E
F
A
U
L
T
 
'
0
'
,

 
 
 
 
 
 
 
 
`
t
a
x
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
1
0
)
 
D
E
F
A
U
L
T
 
'
0
'
,

 
 
 
 
 
 
 
 
`
s
e
r
v
i
c
e
_
q
t
y
`
 
F
L
O
A
T
 
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
_
u
i
d
`
)

 
 
 
 
 
 
 
 
)
 
"
;

 
 
 
 
$
r
e
s
u
l
t
 
=
 
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
,
 
"
"
 
)
;

 
 
 
 
i
f
 
(
 
!
$
r
e
s
u
l
t
 
)

 
 
 
 
 
 
 
 
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
 
"
E
r
r
o
r
 
c
r
e
a
t
i
n
g
 
t
a
b
l
e
 
t
a
b
l
e
 
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
e
r
v
i
c
e
s
 
"
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
E
x
t
r
a
S
e
r
v
i
c
e
s
T
a
b
l
e
E
x
i
s
t
s
(
)

 
 
 
 
{


 
 
 
 
$
t
a
b
l
e
s
F
o
u
n
d
 
=
 
f
a
l
s
e
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
H
O
W
 
T
A
B
L
E
S
"
;

 
 
 
 
$
r
e
s
u
l
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
,
 
$
m
o
d
e
 
=
 
f
a
l
s
e
 
)
;

 
 
 
 
$
s
t
r
i
n
g
 
 
 
 
 
 
=
 
"
T
a
b
l
e
s
_
i
n
_
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
"
d
b
"
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
e
s
u
l
t
 
a
s
 
$
r
 
)

 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
 
s
t
r
s
t
r
(
 
$
r
-
>
$
s
t
r
i
n
g
,
 
'
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
e
r
v
i
c
e
s
'
 
)
 
)

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
}
 
*
/


f
u
n
c
t
i
o
n
 
c
r
e
a
t
e
G
u
e
s
t
P
r
o
f
i
l
e
T
a
b
l
e
(
)

{

 
 
 
 
/
/
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
 
"
C
r
e
a
t
i
n
g
 
_
j
o
m
r
e
s
_
g
u
e
s
t
_
p
r
o
f
i
l
e
 
t
a
b
l
e
"
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
g
u
e
s
t
_
p
r
o
f
i
l
e
`
 
(

	
	
`
i
d
`
 
i
n
t
(
1
1
)
 
N
O
T
 
N
U
L
L
 
a
u
t
o
_
i
n
c
r
e
m
e
n
t
,

	
	
`
c
m
s
_
u
s
e
r
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
 
N
U
L
L
,

	
	
`
f
i
r
s
t
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
 
N
U
L
L
,

	
	
`
s
u
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
 
N
U
L
L
,

	
	
`
h
o
u
s
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
 
N
U
L
L
,

	
	
`
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
 
N
U
L
L
,

	
	
`
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
 
N
U
L
L
,

	
	
`
c
o
u
n
t
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
 
N
U
L
L
,

	
	
`
c
o
u
n
t
r
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
 
N
U
L
L
,

	
	
`
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
4
5
)
 
N
U
L
L
,

	
	
`
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
U
L
L
,

	
	
`
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
U
L
L
,

	
	
`
t
e
l
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
 
N
U
L
L
,

	
	
`
p
r
e
f
e
r
e
n
c
e
s
`
 
T
E
X
T
 
N
U
L
L
,

	
	
`
c
a
r
_
r
e
g
n
o
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
)
 
N
U
L
L
,

	
	
`
c
c
a
r
d
_
n
o
`
 
B
L
O
B
,

	
	
`
c
c
a
r
d
_
i
s
s
u
e
d
`
 
B
L
O
B
,

	
	
`
c
c
a
r
d
_
e
x
p
i
r
y
`
 
B
L
O
B
,

	
	
`
c
c
a
r
d
_
i
s
s
_
n
o
`
 
B
L
O
B
,

	
	
`
c
c
a
r
d
_
n
a
m
e
`
 
B
L
O
B
,

	
	
`
c
c
v
`
 
B
L
O
B
,

	
	
`
t
y
p
e
`
 
B
L
O
B
,

	
	
`
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
1
0
0
)
 
N
U
L
L
,

	
	
`
v
a
t
_
n
u
m
b
e
r
`
 
C
H
A
R
 
(
2
5
)
 
D
E
F
A
U
L
T
 
'
'
 
N
O
T
 
N
U
L
L
,

	
	
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
`
 
B
O
O
L
 
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
0
'
,

	
	
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
`
 
T
E
X
T
 
N
U
L
L
,

	
	
`
p
a
r
a
m
s
`
 
T
E
X
T
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
i
d
)

	
	
)
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
j
o
m
r
e
s
_
g
u
e
s
t
_
p
r
o
f
i
l
e
 
t
a
b
l
e
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
G
u
e
s
t
P
r
o
f
i
l
e
T
a
b
l
e
E
x
i
s
t
s
(
)

{

 
 
 
 
$
t
a
b
l
e
s
F
o
u
n
d
 
=
 
f
a
l
s
e
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
H
O
W
 
T
A
B
L
E
S
'
;

 
 
 
 
$
r
e
s
u
l
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
,
 
$
m
o
d
e
 
=
 
f
a
l
s
e
)
;

 
 
 
 
$
s
t
r
i
n
g
 
=
 
'
T
a
b
l
e
s
_
i
n
_
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
d
b
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
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
r
-
>
$
s
t
r
i
n
g
,
 
'
_
j
o
m
r
e
s
_
g
u
e
s
t
_
p
r
o
f
i
l
e
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
I
n
v
o
i
c
e
s
I
s
C
o
m
m
i
s
i
o
n
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 
L
I
K
E
 
'
i
s
_
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
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
I
n
v
o
i
c
e
s
I
s
C
o
m
m
i
s
i
o
n
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
i
s
_
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
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
`
 
A
D
D
 
`
i
s
_
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
`
 
I
N
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
0
'
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 
i
s
_
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
'
)
;

 
 
 
 
}

}


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
t
e
r
M
a
n
a
g
e
r
S
u
s
p
e
n
d
e
d
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
s
u
s
p
e
n
d
e
d
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
m
a
n
a
g
e
r
s
`
 
A
D
D
 
`
s
u
s
p
e
n
d
e
d
`
 
t
i
n
y
i
n
t
(
 
1
 
)
 
d
e
f
a
u
l
t
 
0
 
A
F
T
E
R
 
`
a
p
i
k
e
y
`
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
 
s
u
s
p
e
n
d
e
d
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
M
a
n
a
g
e
r
S
u
s
p
e
n
d
e
d
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
m
a
n
a
g
e
r
s
 
L
I
K
E
 
'
s
u
s
p
e
n
d
e
d
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
c
r
e
a
t
e
P
a
r
t
n
e
r
T
a
b
l
e
s
(
)

{

 
 
 
 
/
/
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
 
"
C
r
e
a
t
i
n
g
 
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
a
r
t
n
e
r
s
 
t
a
b
l
e
"
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
a
r
t
n
e
r
s
`
 
(

	
	
`
i
d
`
 
i
n
t
(
1
1
)
 
N
O
T
 
N
U
L
L
 
a
u
t
o
_
i
n
c
r
e
m
e
n
t
,

	
	
`
c
m
s
_
u
s
e
r
i
d
`
 
i
n
t
(
1
1
)
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
i
d
`
)

	
	
)
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
a
r
t
n
e
r
s
 
t
a
b
l
e
'
)
;

 
 
 
 
}


 
 
 
 
/
/
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
 
"
C
r
e
a
t
i
n
g
 
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
a
r
t
n
e
r
s
_
d
i
s
c
o
u
n
t
s
 
t
a
b
l
e
"
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
a
r
t
n
e
r
s
_
d
i
s
c
o
u
n
t
s
`
 
(

	
`
i
d
`
 
i
n
t
(
 
1
1
 
)
 
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
a
r
t
n
e
r
_
i
d
`
 
i
n
t
(
1
1
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
i
d
`
 
i
n
t
(
1
1
)
,

	
`
v
a
l
i
d
_
f
r
o
m
`
 
d
a
t
e
 
d
e
f
a
u
l
t
 
N
U
L
L
 
,

	
`
v
a
l
i
d
_
t
o
`
 
d
a
t
e
 
d
e
f
a
u
l
t
 
N
U
L
L
 
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
 
F
L
O
A
T
 
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
0
.
0
0
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
i
d
`
 
)

	
)
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
a
r
t
n
e
r
s
_
d
i
s
c
o
u
n
t
s
 
t
a
b
l
e
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
P
a
r
t
n
e
r
T
a
b
l
e
s
E
x
i
s
t
(
)

{

 
 
 
 
$
t
a
b
l
e
s
F
o
u
n
d
 
=
 
f
a
l
s
e
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
H
O
W
 
T
A
B
L
E
S
'
;

 
 
 
 
$
r
e
s
u
l
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
,
 
$
m
o
d
e
 
=
 
f
a
l
s
e
)
;

 
 
 
 
$
s
t
r
i
n
g
 
=
 
'
T
a
b
l
e
s
_
i
n
_
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
d
b
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
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
r
-
>
$
s
t
r
i
n
g
,
 
'
_
j
o
m
r
e
s
_
p
a
r
t
n
e
r
s
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
M
a
n
a
g
e
r
T
i
m
e
z
o
n
e
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
u
s
e
r
s
_
t
i
m
e
z
o
n
e
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
m
a
n
a
g
e
r
s
`
 
A
D
D
 
`
u
s
e
r
s
_
t
i
m
e
z
o
n
e
`
 
C
H
A
R
(
1
0
0
)
 
D
E
F
A
U
L
T
 
'
E
u
r
o
p
e
/
B
e
r
l
i
n
'
 
A
F
T
E
R
 
`
a
p
i
k
e
y
`
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
 
u
s
e
r
s
_
t
i
m
e
z
o
n
e
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
M
a
n
a
g
e
r
T
i
m
e
z
o
n
e
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
m
a
n
a
g
e
r
s
 
L
I
K
E
 
'
u
s
e
r
s
_
t
i
m
e
z
o
n
e
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
c
r
e
a
t
e
R
o
o
m
t
y
p
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
X
r
e
f
T
a
b
l
e
(
)

{

 
 
 
 
/
/
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
 
"
C
r
e
a
t
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
/
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
 
x
r
e
f
 
t
a
b
l
e
"
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
r
o
o
m
t
y
p
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
t
y
p
e
s
_
x
r
e
f
`
 
(

	
	
`
i
d
`
 
i
n
t
(
1
1
)
 
N
O
T
 
N
U
L
L
 
a
u
t
o
_
i
n
c
r
e
m
e
n
t
,

	
	
`
r
o
o
m
t
y
p
e
_
i
d
`
 
i
n
t
(
1
1
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
t
y
p
e
_
i
d
`
 
i
n
t
(
1
1
)
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
i
d
`
)

	
	
)
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
t
y
p
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
t
y
p
e
s
_
x
r
e
f
 
t
a
b
l
e
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
R
o
o
m
t
y
p
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
X
r
e
f
T
a
b
l
e
E
x
i
s
t
s
(
)

{

 
 
 
 
$
t
a
b
l
e
s
F
o
u
n
d
 
=
 
f
a
l
s
e
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
H
O
W
 
T
A
B
L
E
S
'
;

 
 
 
 
$
r
e
s
u
l
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
,
 
$
m
o
d
e
 
=
 
f
a
l
s
e
)
;

 
 
 
 
$
s
t
r
i
n
g
 
=
 
'
T
a
b
l
e
s
_
i
n
_
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
d
b
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
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
r
-
>
$
s
t
r
i
n
g
,
 
'
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
t
y
p
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
t
y
p
e
s
_
x
r
e
f
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
c
r
e
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
d
a
t
a
A
r
c
h
i
v
e
T
a
b
l
e
(
)

{

 
 
 
 
/
/
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
 
"
C
r
e
a
t
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
 
d
a
t
a
 
a
r
c
h
i
v
e
 
t
a
b
l
e
s
"
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
`
 
(

	
`
i
d
`
 
i
n
t
(
 
1
1
 
)
 
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
d
a
t
a
`
 
t
e
x
t
,

	
`
d
a
t
e
`
 
d
a
t
e
t
i
m
e
 
d
e
f
a
u
l
t
 
N
U
L
L
 
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
u
i
d
`
 
I
N
T
 
 
D
E
F
A
U
L
T
 
0
 
N
O
T
 
N
U
L
L
 
,

	
`
t
a
g
`
 
v
a
r
c
h
a
r
(
2
5
5
)
 
N
U
L
L
 
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
i
d
`
 
)

	
)
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
 
t
a
b
l
e
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
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
A
r
c
h
i
v
e
T
a
b
l
e
E
x
i
s
t
s
(
)

{

 
 
 
 
$
t
a
b
l
e
s
F
o
u
n
d
 
=
 
f
a
l
s
e
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
H
O
W
 
T
A
B
L
E
S
'
;

 
 
 
 
$
r
e
s
u
l
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
,
 
$
m
o
d
e
 
=
 
f
a
l
s
e
)
;

 
 
 
 
$
s
t
r
i
n
g
 
=
 
'
T
a
b
l
e
s
_
i
n
_
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
d
b
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
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
r
-
>
$
s
t
r
i
n
g
,
 
'
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
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
c
r
e
a
t
e
R
e
v
i
e
w
D
e
t
a
i
l
T
a
b
l
e
(
)

{

 
 
 
 
/
/
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
 
"
C
r
e
a
t
i
n
g
 
r
e
v
i
e
w
 
d
e
t
a
i
l
 
t
a
b
l
e
s
"
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
r
e
v
i
e
w
s
_
r
a
t
i
n
g
s
_
d
e
t
a
i
l
`
 
(

	
`
d
e
t
a
i
l
_
i
d
`
 
i
n
t
(
 
1
1
 
)
 
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
i
t
e
m
_
i
d
`
 
i
n
t
(
 
1
1
 
)
 
d
e
f
a
u
l
t
 
N
U
L
L
 
,

	
`
r
a
t
i
n
g
_
i
d
`
 
i
n
t
(
 
1
1
 
)
 
d
e
f
a
u
l
t
 
N
U
L
L
 
,

	
`
d
e
t
a
i
l
_
r
a
t
i
n
g
`
 
i
n
t
(
 
1
1
 
)
 
d
e
f
a
u
l
t
 
N
U
L
L
 
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
d
e
t
a
i
l
_
i
d
`
 
)

	
)
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
j
o
m
r
e
s
_
r
e
v
i
e
w
s
_
r
a
t
i
n
g
s
_
d
e
t
a
i
l
 
t
a
b
l
e
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
R
e
v
i
e
w
D
e
t
a
i
l
T
a
b
l
e
E
x
i
s
t
s
(
)

{

 
 
 
 
$
t
a
b
l
e
s
F
o
u
n
d
 
=
 
f
a
l
s
e
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
H
O
W
 
T
A
B
L
E
S
'
;

 
 
 
 
$
r
e
s
u
l
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
,
 
$
m
o
d
e
 
=
 
f
a
l
s
e
)
;

 
 
 
 
$
s
t
r
i
n
g
 
=
 
'
T
a
b
l
e
s
_
i
n
_
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
d
b
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
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
r
-
>
$
s
t
r
i
n
g
,
 
'
_
j
o
m
r
e
s
_
r
e
v
i
e
w
s
_
r
a
t
i
n
g
s
_
d
e
t
a
i
l
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
c
r
e
a
t
e
R
e
v
i
e
w
s
T
a
b
l
e
s
(
)

{

 
 
 
 
/
/
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
 
"
C
r
e
a
t
i
n
g
 
r
e
v
i
e
w
s
 
t
a
b
l
e
s
"
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
r
e
v
i
e
w
s
_
r
a
t
i
n
g
s
`
 
(

	
`
r
a
t
i
n
g
_
i
d
`
 
i
n
t
(
 
1
1
 
)
 
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
i
t
e
m
_
i
d
`
 
i
n
t
(
 
1
1
 
)
 
d
e
f
a
u
l
t
 
N
U
L
L
 
,

	
`
u
s
e
r
_
i
d
`
 
i
n
t
(
 
1
1
 
)
 
d
e
f
a
u
l
t
 
N
U
L
L
 
,

	
`
r
e
v
i
e
w
_
t
i
t
l
e
`
 
v
a
r
c
h
a
r
(
 
2
5
5
 
)
 
d
e
f
a
u
l
t
 
N
U
L
L
 
,

	
`
r
e
v
i
e
w
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
 
t
e
x
t
,

	
`
p
r
o
s
`
 
t
e
x
t
,

	
`
c
o
n
s
`
 
t
e
x
t
,

	
`
r
a
t
i
n
g
`
 
t
i
n
y
i
n
t
(
 
4
 
)
 
d
e
f
a
u
l
t
 
N
U
L
L
 
,

	
`
r
a
t
i
n
g
_
i
p
`
 
v
a
r
c
h
a
r
(
 
2
0
 
)
 
d
e
f
a
u
l
t
 
N
U
L
L
 
,

	
`
r
a
t
i
n
g
_
d
a
t
e
`
 
d
a
t
e
t
i
m
e
 
d
e
f
a
u
l
t
 
N
U
L
L
 
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
 
B
O
O
L
 
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
0
'
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
u
i
d
`
 
i
n
t
(
 
1
1
 
)
 
d
e
f
a
u
l
t
 
N
U
L
L
 
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
r
a
t
i
n
g
_
i
d
`
 
)

	
)
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
 
t
a
b
l
e
'
)
;

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
'
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
r
e
v
i
e
w
s
_
r
a
t
i
n
g
s
_
c
o
n
f
i
r
m
`
 
(

	
`
c
o
n
f
i
r
m
_
r
a
t
i
n
g
_
i
d
`
 
i
n
t
(
 
1
1
 
)
 
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
i
t
e
m
_
i
d
`
 
i
n
t
(
 
1
1
 
)
 
d
e
f
a
u
l
t
 
N
U
L
L
 
,

	
`
r
a
t
i
n
g
_
i
d
`
 
i
n
t
(
 
1
1
 
)
 
d
e
f
a
u
l
t
 
N
U
L
L
 
,

	
`
c
o
n
f
i
r
m
_
u
s
e
r
_
i
d
`
 
i
n
t
(
 
1
1
 
)
 
d
e
f
a
u
l
t
 
N
U
L
L
 
,

	
`
c
o
n
f
i
r
m
`
 
t
i
n
y
i
n
t
(
 
1
 
)
 
d
e
f
a
u
l
t
 
N
U
L
L
 
,

	
`
c
o
n
f
i
r
m
_
i
p
`
 
v
a
r
c
h
a
r
(
 
2
0
 
)
 
d
e
f
a
u
l
t
 
N
U
L
L
 
,

	
`
c
o
n
f
i
r
m
_
d
a
t
e
`
 
d
a
t
e
t
i
m
e
 
d
e
f
a
u
l
t
 
N
U
L
L
 
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
f
i
r
m
_
r
a
t
i
n
g
_
i
d
`
 
)

	
)
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
_
c
o
n
f
i
r
m
 
t
a
b
l
e
'
)
;

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
'
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
r
e
v
i
e
w
s
_
r
e
p
o
r
t
s
`
 
(

	
`
r
e
p
o
r
t
_
i
d
`
 
i
n
t
(
 
1
1
 
)
 
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
r
a
t
i
n
g
_
i
d
`
 
i
n
t
(
 
1
1
 
)
 
d
e
f
a
u
l
t
 
N
U
L
L
 
,

	
`
u
s
e
r
_
i
d
`
 
i
n
t
(
 
1
1
 
)
 
d
e
f
a
u
l
t
 
N
U
L
L
 
,

	
`
r
e
p
o
r
t
`
 
t
e
x
t
,

	
`
r
e
p
o
r
t
_
d
a
t
e
`
 
d
a
t
e
t
i
m
e
 
d
e
f
a
u
l
t
 
N
U
L
L
 
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
r
e
p
o
r
t
_
i
d
`
 
)

	
)
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
e
v
i
e
w
s
_
r
e
p
o
r
t
s
 
t
a
b
l
e
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
R
e
v
i
e
w
s
T
a
b
l
e
s
E
x
i
s
t
(
)

{

 
 
 
 
$
t
a
b
l
e
s
F
o
u
n
d
 
=
 
f
a
l
s
e
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
H
O
W
 
T
A
B
L
E
S
'
;

 
 
 
 
$
r
e
s
u
l
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
,
 
$
m
o
d
e
 
=
 
f
a
l
s
e
)
;

 
 
 
 
$
s
t
r
i
n
g
 
=
 
'
T
a
b
l
e
s
_
i
n
_
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
d
b
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
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
r
-
>
$
s
t
r
i
n
g
,
 
'
_
j
o
m
r
e
s
_
r
e
v
i
e
w
s
_
r
a
t
i
n
g
s
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
J
o
o
m
l
a
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
T
a
b
l
e
I
n
C
a
s
e
J
o
m
r
e
s
H
a
s
B
e
e
n
U
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
(
)

{

 
 
 
 
r
e
q
u
i
r
e
_
o
n
c
e
 
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
T
E
C
T
E
D
_
C
M
S
_
S
P
E
C
I
F
I
C
_
F
I
L
E
S
.
'
c
m
s
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
p
h
p
'
;

}


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
t
e
r
G
u
e
s
t
s
D
i
s
c
o
u
n
t
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
_
g
u
e
s
t
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
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
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
g
u
e
s
t
s
`
 
A
D
D
 
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
 
I
N
T
(
 
1
1
 
)
 
D
E
F
A
U
L
T
 
'
0
'
 
N
O
T
 
N
U
L
L
 
A
F
T
E
R
 
`
e
m
a
i
l
`
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
_
g
u
e
s
t
s
 
d
i
s
c
o
u
n
t
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
G
u
e
s
t
s
D
i
s
c
o
u
n
t
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
g
u
e
s
t
s
 
L
I
K
E
 
'
d
i
s
c
o
u
n
t
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
C
o
n
t
r
a
c
t
s
I
n
v
o
i
c
e
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
a
d
d
i
n
g
 
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
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
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
(
 
1
1
 
)
 
D
E
F
A
U
L
T
 
'
0
'
 
N
O
T
 
N
U
L
L
 
A
F
T
E
R
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
C
o
n
t
r
a
c
t
s
I
n
v
o
i
c
e
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
 
L
I
K
E
 
'
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
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
P
f
e
a
t
u
r
e
s
P
t
y
p
e
i
d
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
_
h
o
t
e
l
_
f
e
a
t
u
r
e
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
p
t
y
p
e
_
i
d
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
h
o
t
e
l
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
 
A
D
D
 
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
(
 
1
1
 
)
 
D
E
F
A
U
L
T
 
'
0
'
 
N
O
T
 
N
U
L
L
 
A
F
T
E
R
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
_
h
o
t
e
l
_
f
e
a
t
u
r
e
s
 
p
t
y
p
e
_
i
d
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
P
f
e
a
t
u
r
e
s
P
t
y
p
e
i
d
C
o
l
E
x
i
s
t
s
(
)

{

 
 
 
 
/
/
 
J
o
m
r
e
s
 
7
.
3
.
3
 
c
h
a
n
g
e
d
 
t
h
e
 
p
t
y
p
e
_
i
d
 
c
o
l
u
m
n
 
t
o
 
p
t
y
p
e
_
x
r
e
f
.
 
I
f
 
w
e
 
l
e
a
v
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
s
-
i
s
,
 
t
h
e
 
p
t
y
p
e
 
I
d
 
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
 
b
e
 
a
d
d
e
d
 
o
n
 
s
u
b
s
e
q
u
e
n
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
s
 
s
o
 
w
e
'
l
l
 
n
e
e
d
 
t
o
 
d
o
u
b
l
e
 
c
h
e
c
k
 
f
o
r
 
t
h
a
t
.

 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
C
O
L
U
M
N
S
 
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
h
o
t
e
l
_
f
e
a
t
u
r
e
s
 
L
I
K
E
 
'
p
t
y
p
e
_
x
r
e
f
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;
 
/
/
 
W
e
'
l
l
 
l
i
e
 
a
b
o
u
t
 
p
t
y
p
e
_
i
d
 
e
x
i
s
t
i
n
g
 
i
f
 
i
n
s
t
e
a
d
 
p
h
t
y
p
e
_
x
r
e
f
 
i
n
s
t
e
a
d
 
e
x
i
s
t
s
.

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
C
O
L
U
M
N
S
 
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
h
o
t
e
l
_
f
e
a
t
u
r
e
s
 
L
I
K
E
 
'
p
t
y
p
e
_
i
d
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
S
u
b
s
c
r
i
b
e
r
s
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
P
a
c
k
a
g
e
I
d
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
 
t
a
b
l
e
 
a
d
d
i
n
g
 
p
a
c
k
a
g
e
_
i
d
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
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
`
 
A
D
D
 
`
p
a
c
k
a
g
e
_
i
d
`
 
I
N
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
0
'
 
A
F
T
E
R
 
`
g
a
t
e
w
a
y
_
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
_
i
d
`
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
 
p
a
c
k
a
g
e
_
i
d
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
d
o
V
9
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
U
p
d
a
t
e
s
(
)

{

 
 
 
 
/
/
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
 
"
D
r
o
p
p
i
n
g
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
s
u
b
s
c
r
i
b
e
r
s
 
t
a
b
l
e
 
"
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
D
R
O
P
 
T
A
B
L
E
 
I
F
 
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
p
o
r
t
a
l
_
s
u
b
s
c
r
i
b
e
r
s
`
 
'
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
,
 
'
'
)
)
 
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
 
d
r
o
p
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
s
u
b
s
c
r
i
b
e
r
s
 
t
a
b
l
e
'
)
;

 
 
 
 
}


 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
 
t
a
b
l
e
 
d
r
o
p
p
i
n
g
 
g
a
t
e
w
a
y
_
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
_
i
d
,
 
n
a
m
e
,
 
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
,
 
f
r
e
q
u
e
n
c
y
,
 
t
r
i
a
l
_
p
e
r
i
o
d
,
 
t
r
i
a
l
_
a
m
o
u
n
t
,
 
f
u
l
l
_
a
m
o
u
n
t
,
 
r
o
o
m
s
_
l
i
m
i
t
,
 
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
 
c
o
l
u
m
n
s
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
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
`
 
D
R
O
P
 
C
O
L
U
M
N
 
`
g
a
t
e
w
a
y
_
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
_
i
d
`
,
 
D
R
O
P
 
C
O
L
U
M
N
 
`
n
a
m
e
`
,
 
D
R
O
P
 
C
O
L
U
M
N
 
`
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
,
 
D
R
O
P
 
C
O
L
U
M
N
 
`
f
r
e
q
u
e
n
c
y
`
,
 
D
R
O
P
 
C
O
L
U
M
N
 
`
t
r
i
a
l
_
p
e
r
i
o
d
`
,
 
D
R
O
P
 
C
O
L
U
M
N
 
`
t
r
i
a
l
_
a
m
o
u
n
t
`
,
 
D
R
O
P
 
C
O
L
U
M
N
 
`
f
u
l
l
_
a
m
o
u
n
t
`
,
 
D
R
O
P
 
C
O
L
U
M
N
 
`
r
o
o
m
s
_
l
i
m
i
t
`
,
 
D
R
O
P
 
C
O
L
U
M
N
 
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
l
i
m
i
t
`
 
'
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
,
 
'
'
)
)
 
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
 
d
r
o
p
 
g
a
t
e
w
a
y
_
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
_
i
d
,
 
n
a
m
e
,
 
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
,
 
f
r
e
q
u
e
n
c
y
,
 
t
r
i
a
l
_
p
e
r
i
o
d
,
 
t
r
i
a
l
_
a
m
o
u
n
t
,
 
f
u
l
l
_
a
m
o
u
n
t
,
 
r
o
o
m
s
_
l
i
m
i
t
,
 
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
 
c
o
l
u
m
n
s
 
f
r
o
m
 
t
h
e
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
 
t
a
b
l
e
'
)
;

 
 
 
 
}


 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
 
t
a
b
l
e
 
a
d
d
i
n
g
 
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
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
`
 
A
D
D
 
`
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
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
 
A
F
T
E
R
 
`
r
a
i
s
e
d
_
d
a
t
e
`
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
 
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
 
c
o
l
u
m
n
'
)
;

 
 
 
 
}


 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
 
t
a
b
l
e
 
a
d
d
i
n
g
 
i
n
v
o
i
c
e
_
i
d
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
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
`
 
A
D
D
 
`
i
n
v
o
i
c
e
_
i
d
`
 
I
N
T
(
1
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
 
'
0
'
 
A
F
T
E
R
 
`
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
`
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
 
i
n
v
o
i
c
e
_
i
d
 
c
o
l
u
m
n
'
)
;

 
 
 
 
}


 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
_
p
a
c
k
a
g
e
s
 
t
a
b
l
e
 
d
r
o
p
p
i
n
g
 
t
r
i
a
l
_
a
m
o
u
n
t
,
 
t
r
i
a
l
_
p
e
r
i
o
d
,
 
r
o
o
m
s
_
l
i
m
i
t
,
 
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
 
c
o
l
u
m
n
s
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
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
_
p
a
c
k
a
g
e
s
`
 
D
R
O
P
 
C
O
L
U
M
N
 
`
t
r
i
a
l
_
a
m
o
u
n
t
`
,
 
D
R
O
P
 
C
O
L
U
M
N
 
`
t
r
i
a
l
_
p
e
r
i
o
d
`
,
 
D
R
O
P
 
C
O
L
U
M
N
 
`
r
o
o
m
s
_
l
i
m
i
t
`
,
 
D
R
O
P
 
C
O
L
U
M
N
 
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
l
i
m
i
t
`
 
'
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
,
 
'
'
)
)
 
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
 
d
r
o
p
 
t
r
i
a
l
_
a
m
o
u
n
t
,
 
t
r
i
a
l
_
p
e
r
i
o
d
,
 
r
o
o
m
s
_
l
i
m
i
t
,
 
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
 
c
o
l
u
m
n
s
 
f
r
o
m
 
t
h
e
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
_
p
a
c
k
a
g
e
s
 
t
a
b
l
e
'
)
;

 
 
 
 
}


 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
_
p
a
c
k
a
g
e
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
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
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
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
_
p
a
c
k
a
g
e
s
`
 
A
D
D
 
`
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
 
'
G
B
P
'
 
A
F
T
E
R
 
`
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
`
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
_
p
a
c
k
a
g
e
s
 
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
 
c
o
l
u
m
n
'
)
;

 
 
 
 
}


 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
_
p
a
c
k
a
g
e
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
r
e
n
e
w
a
l
_
p
r
i
c
e
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
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
_
p
a
c
k
a
g
e
s
`
 
A
D
D
 
`
r
e
n
e
w
a
l
_
p
r
i
c
e
`
 
F
L
O
A
T
 
A
F
T
E
R
 
`
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
`
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
_
p
a
c
k
a
g
e
s
 
r
e
n
e
w
a
l
_
p
r
i
c
e
 
c
o
l
u
m
n
'
)
;

 
 
 
 
}


 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
_
p
a
c
k
a
g
e
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
p
a
r
a
m
s
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
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
_
p
a
c
k
a
g
e
s
`
 
A
D
D
 
`
p
a
r
a
m
s
`
 
T
E
X
T
 
A
F
T
E
R
 
`
r
e
n
e
w
a
l
_
p
r
i
c
e
`
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
_
p
a
c
k
a
g
e
s
 
p
a
r
a
m
s
 
c
o
l
u
m
n
'
)
;

 
 
 
 
}


 
 
 
 
/
/
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
 
"
C
h
a
n
g
i
n
g
 
f
r
e
q
u
e
n
c
y
 
c
o
l
u
m
n
 
i
n
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
_
p
a
c
k
a
g
e
s
 
t
a
b
l
e
 
t
o
 
i
n
t
(
5
)
 
d
e
f
a
u
l
t
 
3
6
5
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
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
_
p
a
c
k
a
g
e
s
`
 
M
O
D
I
F
Y
 
`
f
r
e
q
u
e
n
c
y
`
 
I
N
T
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
3
6
5
'
 
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
,
 
'
'
)
)
 
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
h
a
n
g
e
 
f
r
e
q
u
e
n
c
y
 
c
o
l
u
m
n
 
i
n
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
_
p
a
c
k
a
g
e
s
 
t
o
 
i
n
t
(
5
)
'
)
;

 
 
 
 
}


 
 
 
 
/
/
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
 
"
C
h
a
n
g
i
n
g
 
r
a
i
s
e
d
_
d
a
t
e
 
c
o
l
u
m
n
 
i
n
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
 
t
a
b
l
e
 
t
o
 
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
 
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
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
`
 
M
O
D
I
F
Y
 
`
r
a
i
s
e
d
_
d
a
t
e
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
,
 
'
'
)
)
 
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
h
a
n
g
e
 
r
a
i
s
e
d
_
d
a
t
e
 
c
o
l
u
m
n
 
i
n
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
 
t
o
 
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
)
;

 
 
 
 
}


 
 
 
 
/
/
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
 
"
A
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
l
e
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
,
 
c
r
e
a
t
i
n
g
 
n
e
w
 
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
 
i
n
d
e
x
 
i
f
 
n
e
c
e
s
s
a
r
y
"
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
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
p
o
r
t
a
l
_
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
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
'
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
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
`
 
A
D
D
 
I
N
D
E
X
 
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
 
(
 
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
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
 
"
A
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
l
e
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
,
 
c
r
e
a
t
i
n
g
 
n
e
w
 
s
t
a
t
u
s
 
i
n
d
e
x
 
i
f
 
n
e
c
e
s
s
a
r
y
"
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
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
p
o
r
t
a
l
_
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
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
'
s
t
a
t
u
s
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
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
`
 
A
D
D
 
I
N
D
E
X
 
s
t
a
t
u
s
 
(
 
s
t
a
t
u
s
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
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
 
"
A
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
l
e
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
,
 
c
r
e
a
t
i
n
g
 
n
e
w
 
c
m
s
_
u
s
e
r
_
i
d
 
i
n
d
e
x
 
i
f
 
n
e
c
e
s
s
a
r
y
"
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
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
p
o
r
t
a
l
_
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
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
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
i
d
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
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
`
 
A
D
D
 
I
N
D
E
X
 
c
m
s
_
u
s
e
r
_
i
d
 
(
 
c
m
s
_
u
s
e
r
_
i
d
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
S
u
b
s
c
r
i
b
e
r
s
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
P
a
c
k
a
g
e
I
d
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
o
r
t
a
l
_
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
 
L
I
K
E
 
'
p
a
c
k
a
g
e
_
i
d
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
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
E
x
p
i
r
a
t
i
o
n
D
a
t
e
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
o
r
t
a
l
_
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
 
L
I
K
E
 
'
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
E
x
t
r
a
s
T
a
x
r
a
t
e
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
t
a
b
l
e
 
a
d
d
i
n
g
 
t
a
x
_
r
a
t
e
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
e
x
t
r
a
s
`
 
A
D
D
 
`
t
a
x
_
r
a
t
e
`
 
I
N
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
0
'
 
A
F
T
E
R
 
`
p
r
i
c
e
`
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
 
t
a
x
_
r
a
t
e
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
E
x
t
r
a
s
T
a
x
r
a
t
e
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
 
L
I
K
E
 
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
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
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
L
a
t
L
o
n
g
T
o
C
h
a
r
1
2
(
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
C
H
A
N
G
E
 
`
l
a
t
`
 
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
 
N
U
L
L
 
 
'
;

 
 
 
 
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
,
 
'
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
C
H
A
N
G
E
 
`
l
o
n
g
`
 
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
 
N
U
L
L
'
;

 
 
 
 
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
,
 
'
'
)
;

}


f
u
n
c
t
i
o
n
 
c
r
e
a
t
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
s
T
a
b
l
e
s
(
)

{

 
 
 
 
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
p
o
r
t
a
l
_
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
_
p
a
c
k
a
g
e
s
`
 
(

	
`
i
d
`
 
I
N
T
(
 
1
1
 
)
 
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
 
,

	
`
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
 
1
0
0
 
)
,

	
`
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
 
B
O
O
L
 
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
'
,

	
`
f
r
e
q
u
e
n
c
y
`
 
i
n
t
(
5
)
 
D
E
F
A
U
L
T
 
'
3
6
5
'
,

	
`
f
u
l
l
_
a
m
o
u
n
t
`
 
F
L
O
A
T
,

	
`
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
`
 
i
n
t
(
1
1
)
 
N
O
T
 
N
U
L
L
 
d
e
f
a
u
l
t
 
'
0
'
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
c
o
d
e
`
 
v
a
r
c
h
a
r
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
 
d
e
f
a
u
l
t
 
'
G
B
P
'
,

	
`
r
e
n
e
w
a
l
_
p
r
i
c
e
`
 
F
L
O
A
T
,

	
`
p
a
r
a
m
s
`
 
T
E
X
T

	
)
"
;

 
 
 
 
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
,
 
'
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
p
o
r
t
a
l
_
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
`
 
(

	
`
i
d
`
 
I
N
T
(
 
1
1
 
)
 
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
 
,

	
`
c
m
s
_
u
s
e
r
_
i
d
`
 
i
n
t
(
1
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
 
'
0
'
,

	
`
p
a
c
k
a
g
e
_
i
d
`
 
I
N
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
0
'
,

	
`
s
t
a
t
u
s
`
 
S
M
A
L
L
I
N
T
 
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
0
'
,

	
`
r
a
i
s
e
d
_
d
a
t
e
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
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
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
i
d
`
 
i
n
t
(
1
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
 
'
0
'

	
)
"
;

 
 
 
 
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
,
 
'
'
)
;

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
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
s
T
a
b
l
e
s
E
x
i
s
t
(
)

{

 
 
 
 
$
t
a
b
l
e
s
F
o
u
n
d
 
=
 
f
a
l
s
e
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
H
O
W
 
T
A
B
L
E
S
'
;

 
 
 
 
$
r
e
s
u
l
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
,
 
$
m
o
d
e
 
=
 
f
a
l
s
e
)
;

 
 
 
 
$
s
t
r
i
n
g
 
=
 
'
T
a
b
l
e
s
_
i
n
_
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
d
b
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
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
r
-
>
$
s
t
r
i
n
g
,
 
'
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
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
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
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
s
T
i
m
e
s
t
a
m
p
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
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
 
a
d
d
i
n
g
 
t
i
m
e
s
t
a
m
p
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
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
 
A
F
T
E
R
 
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
 
'
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
,
 
'
'
)
)
 
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
 
a
d
d
 
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
i
m
e
s
t
a
m
p
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
P
r
o
p
e
r
t
y
s
T
i
m
e
s
t
a
m
p
C
o
l
E
x
i
s
t
s
(
)

{

 
 
 
 
$
g
u
e
s
t
s
T
i
m
e
s
t
a
m
p
I
n
s
t
a
l
l
e
d
 
=
 
t
r
u
e
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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
r
o
p
e
r
t
y
s
 
L
I
K
E
 
'
t
i
m
e
s
t
a
m
p
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


f
u
n
c
t
i
o
n
 
c
r
e
a
t
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
M
e
s
s
a
g
e
s
T
a
b
l
e
(
)

{

 
 
 
 
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
p
o
r
t
a
l
_
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
m
e
s
s
a
g
e
s
`
 
(

	
 
 
i
d
 
i
n
t
(
1
0
)
 
N
O
T
 
N
U
L
L
 
a
u
t
o
_
i
n
c
r
e
m
e
n
t
,

	
 
 
u
s
e
r
n
a
m
e
 
 
v
a
r
c
h
a
r
(
2
0
)
 
N
O
T
 
N
U
L
L
 
d
e
f
a
u
l
t
 
'
'
,

	
 
 
n
u
m
b
e
r
 
v
a
r
c
h
a
r
(
2
5
)
 
N
O
T
 
N
U
L
L
 
d
e
f
a
u
l
t
 
'
'
,

	
 
 
m
e
s
s
a
g
e
 
v
a
r
c
h
a
r
(
1
6
0
)
 
N
O
T
 
N
U
L
L
 
d
e
f
a
u
l
t
 
'
'
,

	
 
 
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
 
i
n
t
(
1
0
)
 
N
O
T
 
N
U
L
L
 
d
e
f
a
u
l
t
 
'
0
'
,

	
 
 
s
e
n
d
_
t
i
m
e
 
d
a
t
e
t
i
m
e
,

	
 
 
a
c
k
 
I
N
T
(
 
3
 
)
 
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
0
'
,

	
 
 
a
p
i
M
s
g
i
d
 
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
i
d
)

	
)
"
;

 
 
 
 
$
r
e
s
u
l
t
 
=
 
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
,
 
'
'
)
;


 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
I
n
v
o
i
c
e
s
C
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
C
o
l
E
x
i
s
t
s
(
)

{

 
 
 
 
$
g
u
e
s
t
s
T
i
m
e
s
t
a
m
p
I
n
s
t
a
l
l
e
d
 
=
 
t
r
u
e
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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 
L
I
K
E
 
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
i
d
'
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
I
n
v
o
i
c
e
s
C
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
C
o
l
(
)

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
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 
t
a
b
l
e
 
a
d
d
i
n
g
 
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
 
c
o
l
u
m
n
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
 
"
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
`
 
A
D
D
 
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
i
d
`
 
I
N
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
0
'
 
A
F
T
E
R
 
`
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
_
i
d
`
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 
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
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
I
n
v
o
i
c
e
s
P
r
o
p
e
r
t
y
u
i
d
C
o
l
E
x
i
s
t
s
(
)

{

 
 
 
 
$
g
u
e
s
t
s
T
i
m
e
s
t
a
m
p
I
n
s
t
a
l
l
e
d
 
=
 
t
r
u
e
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
H
O
W
 
C
O
L
U
M
N
S
 
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
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 
L
I
K
E
 
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
"
;

 
 
 
 
$
r
e
s
u
l
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
 
0
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

}


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
t
e
r
I
n
v
o
i
c
e
s
P
r
o
p
e
r
t
y
u
i
d
C
o
l
(
)

{

 
 
 
 
/
/
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
 
"
E
d
i
t
i
n
g
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 
t
a
b
l
e
 
a
d
d
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
y
_
u
i
d
 
c
o
l
u
m
n
"
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
`
 
A
D
D
 
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
0
'
 
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
,
 
'
'
)
)
 
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
 
a
d
d
 
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 
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
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
i
n
s
t
a
l
l
C
r
o
n
j
o
b
s
(
)

{

 
 
 
 
/
/
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
 
"
I
n
s
t
a
l
l
i
n
g
 
c
r
o
n
 
j
o
b
s
<
b
r
/
>
"
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
'
j
o
m
r
e
s
_
c
r
o
n
'
)
;

 
 
 
 
$
c
r
o
n
 
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
r
o
n
(
)
;

	
$
c
r
o
n
-
>
a
d
d
J
o
b
(
'
s
e
s
s
i
o
n
_
f
i
l
e
s
_
c
l
e
a
n
u
p
'
,
 
'
D
'
,
 
'
'
)
;

 
 
 
 
$
c
r
o
n
-
>
a
d
d
J
o
b
(
'
e
r
r
o
r
_
l
o
g
s
_
c
l
e
a
n
u
p
'
,
 
'
D
'
,
 
'
'
)
;

	
$
c
r
o
n
-
>
a
d
d
J
o
b
(
'
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
_
c
l
e
a
n
u
p
'
,
 
'
D
'
,
 
'
'
)
;

	
$
c
r
o
n
-
>
a
d
d
J
o
b
(
"
a
p
i
_
t
o
k
e
n
s
_
c
l
e
a
n
u
p
"
,
"
D
"
,
"
"
)
;

	
$
c
r
o
n
-
>
a
d
d
J
o
b
(
'
v
e
r
s
i
o
n
_
c
h
e
c
k
'
,
 
'
D
'
,
 
'
'
)
;

}


f
u
n
c
t
i
o
n
 
u
p
d
a
t
e
M
r
C
o
n
f
i
g
(
)

{

 
 
 
 
i
n
c
l
u
d
e
 
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
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
.
p
h
p
'
;

 
 
 
 
$
t
e
m
p
C
o
n
f
i
g
A
r
r
 
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
 
a
r
r
a
y
(
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
 
a
k
e
y
,
v
a
l
u
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
s
e
t
t
i
n
g
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
'
;

 
 
 
 
$
s
e
t
t
i
n
g
s
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
s
e
t
t
i
n
g
s
L
i
s
t
)
 
>
 
0
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
s
e
t
t
i
n
g
s
L
i
s
t
 
a
s
 
$
s
e
t
t
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
k
e
y
 
=
 
$
s
e
t
t
i
n
g
-
>
a
k
e
y
;

 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
$
s
e
t
t
i
n
g
-
>
v
a
l
u
e
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
[
 
$
a
k
e
y
 
]
 
=
 
$
v
a
l
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
t
e
m
p
C
o
n
f
i
g
A
r
r
 
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
!
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
k
,
 
$
m
r
C
o
n
f
i
g
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
 
"
I
N
S
E
R
T
 
I
N
T
O
 
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
s
e
t
t
i
n
g
s
 
(
a
k
e
y
,
v
a
l
u
e
)
 
V
A
L
U
E
S
 
(
'
"
.
$
k
.
"
'
,
'
"
.
$
v
.
"
'
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
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
,
 
'
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
u
p
d
a
t
e
P
l
u
g
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
(
)

{

 
 
 
 
/
/
 
I
n
v
o
i
c
e
s
 
b
a
c
k
e
n
d
 
p
a
y
p
a
l
 
s
e
t
t
i
n
g
s

 
 
 
 
$
p
l
u
g
i
n
C
o
n
f
i
g
[
 
'
b
a
c
k
e
n
d
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
 
]
[
 
'
u
s
e
s
a
n
d
b
o
x
'
 
]
 
=
 
'
1
'
;

 
 
 
 
$
p
l
u
g
i
n
C
o
n
f
i
g
[
 
'
b
a
c
k
e
n
d
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
 
]
[
 
'
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
 
]
 
=
 
'
E
U
R
'
;

 
 
 
 
$
p
l
u
g
i
n
C
o
n
f
i
g
[
 
'
b
a
c
k
e
n
d
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
 
]
[
 
'
e
m
a
i
l
'
 
]
 
=
 
'
'
;

 
 
 
 
$
p
l
u
g
i
n
C
o
n
f
i
g
[
 
'
b
a
c
k
e
n
d
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
 
]
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
 
'
0
'
;


 
 
 
 
$
t
e
m
p
C
o
n
f
i
g
A
r
r
 
=
 
$
p
l
u
g
i
n
C
o
n
f
i
g
;

 
 
 
 
$
p
l
u
g
i
n
C
o
n
f
i
g
 
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
 
p
l
u
g
i
n
,
s
e
t
t
i
n
g
,
v
a
l
u
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
p
l
u
g
i
n
s
e
t
t
i
n
g
s
 
W
H
E
R
E
 
p
r
i
d
 
=
 
0
'
;

 
 
 
 
$
s
e
t
t
i
n
g
s
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
s
e
t
t
i
n
g
s
L
i
s
t
)
 
>
 
0
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
s
e
t
t
i
n
g
s
L
i
s
t
 
a
s
 
$
s
e
t
t
i
n
g
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
 
=
 
$
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
p
l
u
g
i
n
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
 
=
 
$
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
s
e
t
t
i
n
g
;

 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
$
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
v
a
l
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
C
o
n
f
i
g
[
 
$
p
l
u
g
i
n
 
]
[
 
$
s
e
t
t
i
n
g
 
]
 
=
 
$
v
a
l
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
t
e
m
p
C
o
n
f
i
g
A
r
r
 
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
!
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
k
,
 
$
p
l
u
g
i
n
C
o
n
f
i
g
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
v
 
a
s
 
$
s
e
t
t
 
=
>
 
$
s
e
t
t
V
a
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
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
l
u
g
i
n
s
e
t
t
i
n
g
s
 
(
p
r
i
d
,
p
l
u
g
i
n
,
s
e
t
t
i
n
g
,
v
a
l
u
e
)
 
V
A
L
U
E
S
 
(
0
,
'
"
.
$
k
.
"
'
,
'
"
.
$
s
e
t
t
.
"
'
,
'
"
.
$
s
e
t
t
V
a
l
.
"
'
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
c
h
e
c
k
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
s
E
n
a
b
l
e
d
C
o
l
E
x
i
s
t
s
(
)

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
H
O
W
 
C
O
L
U
M
N
S
 
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
w
e
b
h
o
o
k
s
_
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
s
 
L
I
K
E
 
'
e
n
a
b
l
e
d
'
"
;

	
$
r
e
s
u
l
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
e
s
u
l
t
 
)
)

	
	
r
e
t
u
r
n
 
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
 
f
a
l
s
e
;

}


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
t
e
r
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
s
E
n
a
b
l
e
d
C
o
l
(
)

{

	
$
q
u
e
r
y
 
=
 
"
A
L
T
E
R
 
T
A
B
L
E
 
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
w
e
b
h
o
o
k
s
_
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
s
`
 
A
D
D
 
`
e
n
a
b
l
e
d
`
 
B
O
O
L
E
A
N
 
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
 
T
R
U
E
 
A
F
T
E
R
 
`
s
e
t
t
i
n
g
s
`
 
"
;

	
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
,
 
'
'
 
)
;

}


f
u
n
c
t
i
o
n
 
c
r
e
a
t
e
E
x
t
r
a
I
n
d
e
x
s
(
)

{

 
 
 
 
/
/
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
 
"
A
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
l
e
s
,
 
c
r
e
a
t
i
n
g
 
n
e
w
 
i
n
d
e
x
e
s
 
i
f
 
n
e
c
e
s
s
a
r
y
"
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
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
g
u
e
s
t
_
p
r
o
f
i
l
e
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
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
i
d
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
)
 
{

	
	
$
q
u
e
r
y
 
=
 
"
A
L
T
E
R
 
T
A
B
L
E
 
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
g
u
e
s
t
_
p
r
o
f
i
l
e
`
 
C
H
A
N
G
E
 
`
c
m
s
_
u
s
e
r
_
i
d
`
 
`
c
m
s
_
u
s
e
r
_
i
d
`
 
I
N
T
(
1
1
)
 
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
 
N
U
L
L
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
,
 
'
'
)
)
 
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
 
a
l
t
e
r
 
_
_
j
o
m
r
e
s
_
g
u
e
s
t
_
p
r
o
f
i
l
e
 
c
m
s
_
u
s
e
r
_
i
d
 
c
o
l
u
m
n
'
)
;

	
	
}

	
	

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
A
L
T
E
R
 
T
A
B
L
E
 
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
g
u
e
s
t
_
p
r
o
f
i
l
e
`
 
A
D
D
 
I
N
D
E
X
 
c
m
s
_
u
s
e
r
_
i
d
 
(
 
c
m
s
_
u
s
e
r
_
i
d
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
u
s
t
o
m
_
t
e
x
t
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
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
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
u
s
t
o
m
_
t
e
x
t
`
 
A
D
D
 
I
N
D
E
X
 
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
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
u
s
t
o
m
_
t
e
x
t
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
'
l
a
n
g
u
a
g
e
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
)
 
{

	
	
$
q
u
e
r
y
 
=
 
"
A
L
T
E
R
 
T
A
B
L
E
 
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
u
s
t
o
m
_
t
e
x
t
`
 
C
H
A
N
G
E
 
`
l
a
n
g
u
a
g
e
`
 
`
l
a
n
g
u
a
g
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
0
)
 
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
 
N
U
L
L
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
,
 
'
'
)
)
 
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
 
a
l
t
e
r
 
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
u
s
t
o
m
_
t
e
x
t
 
l
a
n
g
u
a
g
e
 
c
o
l
u
m
n
'
)
;

	
	
}

	
	

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
A
L
T
E
R
 
T
A
B
L
E
 
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
u
s
t
o
m
_
t
e
x
t
`
 
A
D
D
 
I
N
D
E
X
 
`
l
a
n
g
u
a
g
e
`
 
(
 
`
l
a
n
g
u
a
g
e
`
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

	

	
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
u
s
t
o
m
_
t
e
x
t
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
'
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
)
 
{

	
	
$
q
u
e
r
y
 
=
 
"
A
L
T
E
R
 
T
A
B
L
E
 
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
u
s
t
o
m
_
t
e
x
t
`
 
C
H
A
N
G
E
 
`
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
`
 
`
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
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
0
0
)
 
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
 
N
U
L
L
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
,
 
'
'
)
)
 
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
 
a
l
t
e
r
 
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
u
s
t
o
m
_
t
e
x
t
 
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
 
c
o
l
u
m
n
'
)
;

	
	
}

	
	

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
A
L
T
E
R
 
T
A
B
L
E
 
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
u
s
t
o
m
_
t
e
x
t
`
 
A
D
D
 
I
N
D
E
X
 
`
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
`
 
(
 
`
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
`
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
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
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
`
 
A
D
D
 
I
N
D
E
X
 
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
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
'
i
n
v
_
i
d
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
`
 
A
D
D
 
I
N
D
E
X
 
i
n
v
_
i
d
 
(
 
i
n
v
_
i
d
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
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
u
i
d
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
`
 
A
D
D
 
I
N
D
E
X
 
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
 
(
 
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
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


	
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
'
g
u
e
s
t
_
u
i
d
'
 
"
;

	
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
I
N
D
E
X
 
g
u
e
s
t
_
u
i
d
 
(
 
g
u
e
s
t
_
u
i
d
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

	
	
}

	
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
`
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
n
o
t
e
s
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
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
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
`
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
n
o
t
e
s
`
 
A
D
D
 
I
N
D
E
X
 
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
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
`
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
n
o
t
e
s
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
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
u
i
d
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
`
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
n
o
t
e
s
`
 
A
D
D
 
I
N
D
E
X
 
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
 
(
 
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
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
l
u
g
i
n
s
e
t
t
i
n
g
s
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
'
p
r
i
d
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
l
u
g
i
n
s
e
t
t
i
n
g
s
`
 
A
D
D
 
I
N
D
E
X
 
p
r
i
d
 
(
 
p
r
i
d
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
r
e
g
i
o
n
s
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
'
c
o
u
n
t
r
y
c
o
d
e
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
r
e
g
i
o
n
s
`
 
A
D
D
 
I
N
D
E
X
 
`
c
o
u
n
t
r
y
c
o
d
e
`
 
(
 
`
c
o
u
n
t
r
y
c
o
d
e
`
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
e
x
t
r
a
s
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
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
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
e
x
t
r
a
s
`
 
A
D
D
 
I
N
D
E
X
 
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
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
g
u
e
s
t
s
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
'
m
o
s
_
u
s
e
r
i
d
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
)
 
{

	
	
$
q
u
e
r
y
 
=
 
"
A
L
T
E
R
 
T
A
B
L
E
 
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
g
u
e
s
t
s
`
 
C
H
A
N
G
E
 
`
m
o
s
_
u
s
e
r
i
d
`
 
`
m
o
s
_
u
s
e
r
i
d
`
 
I
N
T
(
1
1
)
 
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
 
N
U
L
L
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
,
 
'
'
)
)
 
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
 
a
l
t
e
r
 
_
_
j
o
m
r
e
s
_
g
u
e
s
t
s
 
m
o
s
_
u
s
e
r
i
d
 
c
o
l
u
m
n
'
)
;

	
	
}

	
	

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
A
L
T
E
R
 
T
A
B
L
E
 
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
g
u
e
s
t
s
`
 
A
D
D
 
I
N
D
E
X
 
m
o
s
_
u
s
e
r
i
d
 
(
 
m
o
s
_
u
s
e
r
i
d
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
g
u
e
s
t
s
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
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
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
g
u
e
s
t
s
`
 
A
D
D
 
I
N
D
E
X
 
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
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
c
o
u
n
t
e
r
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
'
p
_
u
i
d
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
c
o
u
n
t
e
r
`
 
A
D
D
 
I
N
D
E
X
 
p
_
u
i
d
 
(
 
p
_
u
i
d
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
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
t
o
w
n
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
)
 
{

	
	
$
q
u
e
r
y
 
=
 
"
A
L
T
E
R
 
T
A
B
L
E
 
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
 
C
H
A
N
G
E
 
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
1
0
0
)
 
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
 
N
U
L
L
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
,
 
'
'
)
)
 
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
 
a
l
t
e
r
 
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
 
c
o
l
u
m
n
'
)
;

	
	
}

	
	

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
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
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
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
r
e
g
i
o
n
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
)
 
{

	
	
$
q
u
e
r
y
 
=
 
"
A
L
T
E
R
 
T
A
B
L
E
 
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
 
C
H
A
N
G
E
 
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
1
0
0
)
 
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
 
N
U
L
L
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
,
 
'
'
)
)
 
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
 
a
l
t
e
r
 
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
 
c
o
l
u
m
n
'
)
;

	
	
}

	
	

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
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
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
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
c
o
u
n
t
r
y
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
)
 
{

	
	
$
q
u
e
r
y
 
=
 
"
A
L
T
E
R
 
T
A
B
L
E
 
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
 
C
H
A
N
G
E
 
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
 
V
A
R
C
H
A
R
(
1
0
0
)
 
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
 
N
U
L
L
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
,
 
'
'
)
)
 
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
 
a
l
t
e
r
 
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
 
c
o
l
u
m
n
'
)
;

	
	
}

	
	

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
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
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
'
p
u
b
l
i
s
h
e
d
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
I
N
D
E
X
 
p
u
b
l
i
s
h
e
d
 
(
 
p
u
b
l
i
s
h
e
d
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
'
p
t
y
p
e
_
i
d
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
 
A
D
D
 
I
N
D
E
X
 
p
t
y
p
e
_
i
d
 
(
 
p
t
y
p
e
_
i
d
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
r
a
t
e
s
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
'
r
o
o
m
c
l
a
s
s
_
u
i
d
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
r
a
t
e
s
`
 
A
D
D
 
I
N
D
E
X
 
r
o
o
m
c
l
a
s
s
_
u
i
d
 
(
 
r
o
o
m
c
l
a
s
s
_
u
i
d
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
r
a
t
e
s
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
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
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
r
a
t
e
s
`
 
A
D
D
 
I
N
D
E
X
 
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
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
r
o
o
m
s
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
'
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
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
r
o
o
m
s
`
 
A
D
D
 
I
N
D
E
X
 
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
 
(
 
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
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
r
o
o
m
s
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
'
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
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
r
o
o
m
s
`
 
A
D
D
 
I
N
D
E
X
 
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
 
(
 
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
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
s
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
'
r
o
o
m
_
u
i
d
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
s
`
 
A
D
D
 
I
N
D
E
X
 
r
o
o
m
_
u
i
d
 
(
 
r
o
o
m
_
u
i
d
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
s
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
'
d
a
t
e
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
s
`
 
A
D
D
 
I
N
D
E
X
 
`
d
a
t
e
`
 
(
 
`
d
a
t
e
`
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
s
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
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
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
s
`
 
A
D
D
 
I
N
D
E
X
 
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
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
s
e
t
t
i
n
g
s
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
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
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
s
e
t
t
i
n
g
s
`
 
A
D
D
 
I
N
D
E
X
 
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
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
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
 
"
A
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
l
e
 
_
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
,
 
c
r
e
a
t
i
n
g
 
n
e
w
 
u
s
e
r
i
d
 
i
n
d
e
x
 
i
f
 
n
e
c
e
s
s
a
r
y
"
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
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
m
a
n
a
g
e
r
s
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
'
u
s
e
r
i
d
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
m
a
n
a
g
e
r
s
`
 
A
D
D
 
I
N
D
E
X
 
u
s
e
r
i
d
 
(
 
u
s
e
r
i
d
 
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

	

	
/
/
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
 
"
A
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
l
e
 
_
_
j
o
m
r
e
s
_
i
m
a
g
e
s
,
 
c
r
e
a
t
i
n
g
 
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
_
u
i
d
 
i
n
d
e
x
 
i
f
 
n
e
c
e
s
s
a
r
y
"
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
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
i
m
a
g
e
s
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
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
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
i
m
a
g
e
s
`
 
A
D
D
 
I
N
D
E
X
 
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
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

	

	
/
/
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
 
"
A
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
l
e
 
_
_
j
o
m
r
e
s
_
i
m
a
g
e
s
,
 
c
r
e
a
t
i
n
g
 
n
e
w
 
r
e
s
o
u
r
c
e
_
t
y
p
e
 
i
n
d
e
x
 
i
f
 
n
e
c
e
s
s
a
r
y
"
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
H
O
W
 
I
N
D
E
X
 
F
R
O
M
 
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
i
m
a
g
e
s
`
 
W
H
E
R
E
 
K
e
y
_
n
a
m
e
 
=
 
'
r
e
s
o
u
r
c
e
_
t
y
p
e
'
 
"
;

 
 
 
 
$
i
n
d
e
x
E
x
i
s
t
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
c
o
u
n
t
(
$
i
n
d
e
x
E
x
i
s
t
s
)
 
<
 
1
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
A
L
T
E
R
 
T
A
B
L
E
 
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
i
m
a
g
e
s
`
 
A
D
D
 
I
N
D
E
X
 
r
e
s
o
u
r
c
e
_
t
y
p
e
 
(
r
e
s
o
u
r
c
e
_
t
y
p
e
)
 
'
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
F
a
i
l
e
d
 
t
o
 
r
u
n
 
q
u
e
r
y
:
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}

