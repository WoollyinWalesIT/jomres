
<
?
p
h
p

/
*
*

 
*
 
S
u
p
p
o
r
t
s
 
f
u
l
l
-
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
 
a
n
y
 
J
o
o
m
l
a
 
t
e
m
p
l
a
t
e

 
*

 
*
 
W
h
e
n
 
f
u
l
l
-
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
 
o
f
 
J
o
m
r
e
s
 
i
s
 
c
h
o
s
e
n
,
 
i
f
 
t
h
i
s
 
f
i
l
e
 
d
o
e
s
 
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
 
e
x
i
s
t
 
i
n
 
t
h
e
 
t
e
m
p
l
a
t
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
 
t
h
e
n
 
t
h
i
s
 
s
c
r
i
p
t
 
i
s
 
c
o
p
i
e
d
 
t
o
 
t
h
a
t
 
t
e
m
p
l
a
t
e
'
s
 
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
 
t
h
e
n
 
i
t
 
i
s
 
p
o
s
s
i
b
l
e
 
t
o
 
r
u
n
 
J
o
m
r
e
s
 
i
n
 
f
u
l
l
-
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
 
r
e
g
a
r
d
l
e
s
s
 
o
f
 
t
h
e
 
t
e
m
p
l
a
t
e
'
s
 
o
w
n
 
s
e
t
t
i
n
g
s
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
 
A
l
a
d
a
r
 
B
a
r
t
h
i
 
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
/

 

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
E
X
E
C
'
)
 
o
r
 
d
i
e
;


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
)
 
{

 
 
 
 
d
e
f
i
n
e
(
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
,
 
1
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
'
)
)
 
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
d
i
r
n
a
m
e
(
_
_
F
I
L
E
_
_
)
.
'
/
.
.
/
.
.
/
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
t
.
p
h
p
'
)
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
 
d
i
r
n
a
m
e
(
_
_
F
I
L
E
_
_
)
.
'
/
.
.
/
.
.
/
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
t
.
p
h
p
'
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
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
'
,
 
'
j
o
m
r
e
s
'
)
;

 
 
 
 
}

}


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
d
i
r
n
a
m
e
(
_
_
F
I
L
E
_
_
)
.
'
/
.
.
/
.
.
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
f
r
a
m
e
w
o
r
k
.
p
h
p
'
)
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
 
d
i
r
n
a
m
e
(
_
_
F
I
L
E
_
_
)
.
'
/
.
.
/
.
.
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
f
r
a
m
e
w
o
r
k
.
p
h
p
'
;

}
 
e
l
s
e
 
{

 
 
 
 
e
c
h
o
 
'
E
r
r
o
r
:
 
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
e
 
I
n
i
t
 
p
l
u
g
i
n
 
i
s
 
n
o
t
 
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
'
;

}

?
>

<
!
D
O
C
T
Y
P
E
 
h
t
m
l
>

<
h
t
m
l
 
x
m
l
n
s
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
w
3
.
o
r
g
/
1
9
9
9
/
x
h
t
m
l
"
 
x
m
l
:
l
a
n
g
=
"
<
?
p
h
p
 
e
c
h
o
 
$
t
h
i
s
-
>
l
a
n
g
u
a
g
e
;
 
?
>
"
 
l
a
n
g
=
"
<
?
p
h
p
 
e
c
h
o
 
$
t
h
i
s
-
>
l
a
n
g
u
a
g
e
;
 
?
>
"
>

<
h
e
a
d
>

	
<
m
e
t
a
 
h
t
t
p
-
e
q
u
i
v
=
"
c
o
n
t
e
n
t
-
t
y
p
e
"
 
c
o
n
t
e
n
t
=
"
t
e
x
t
/
h
t
m
l
;
 
c
h
a
r
s
e
t
=
u
t
f
-
8
"
 
/
>

	
<
m
e
t
a
 
n
a
m
e
=
"
v
i
e
w
p
o
r
t
"
 
c
o
n
t
e
n
t
=
"
w
i
d
t
h
=
d
e
v
i
c
e
-
w
i
d
t
h
,
 
i
n
i
t
i
a
l
-
s
c
a
l
e
=
1
.
0
"
>

	
<
?
p
h
p

 
 
 
 
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
_
s
c
r
i
p
t
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
s
t
r
p
o
s
(
$
k
,
 
'
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
'
)
 
=
=
=
 
f
a
l
s
e
 
&
&
 

	
	
	
s
t
r
p
o
s
(
$
k
,
 
'
m
a
p
s
.
g
o
o
g
l
e
a
p
i
s
'
)
 
=
=
=
 
f
a
l
s
e
 
&
&

	
	
	
s
t
r
p
o
s
(
$
k
,
 
'
t
i
n
y
m
c
e
'
)
 
=
=
=
 
f
a
l
s
e
 
&
&

	
	
	
s
t
r
p
o
s
(
$
k
,
 
'
c
o
r
e
.
j
s
'
)
 
=
=
=
 
f
a
l
s
e

	
	
	
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
t
h
i
s
-
>
_
s
c
r
i
p
t
s
[
$
k
]
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

 
 
 
 
i
f
 
(
!
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
)
 
{

 
 
 
 
 
 
 
 
$
v
i
e
w
 
=
 
'
j
q
u
e
r
y
_
u
i
'
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
t
s
t
r
a
p
_
v
e
r
s
i
o
n
(
)
 
=
=
 
'
2
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
v
i
e
w
 
=
 
'
b
o
o
t
s
t
r
a
p
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
!
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
v
i
e
w
 
=
 
'
b
o
o
t
s
t
r
a
p
3
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
v
i
e
w
 
=
 
'
b
o
o
t
s
t
r
a
p
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

 
 
 
 
?
>

	
<
s
c
r
i
p
t
 
s
r
c
=
"
<
?
p
h
p
 
e
c
h
o
 
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
R
E
L
P
A
T
H
 
?
>
j
q
u
e
r
y
/
d
i
s
t
/
j
q
u
e
r
y
.
m
i
n
.
j
s
"
>
<
/
s
c
r
i
p
t
>

	
<
s
c
r
i
p
t
 
s
r
c
=
"
<
?
p
h
p
 
e
c
h
o
 
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
R
E
L
P
A
T
H
 
?
>
j
q
u
e
r
y
-
m
i
g
r
a
t
e
/
d
i
s
t
/
j
q
u
e
r
y
-
m
i
g
r
a
t
e
.
m
i
n
.
j
s
"
>
<
/
s
c
r
i
p
t
>

	
<
s
c
r
i
p
t
 
s
r
c
=
"
<
?
p
h
p
 
e
c
h
o
 
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
R
E
L
P
A
T
H
 
?
>
j
q
u
e
r
y
-
u
i
-
d
i
s
t
/
j
q
u
e
r
y
-
u
i
.
m
i
n
.
j
s
"
>
<
/
s
c
r
i
p
t
>

	
<
?
p
h
p
 
i
f
 
(
$
v
i
e
w
 
=
=
 
'
b
o
o
t
s
t
r
a
p
'
)
 
:
 
?
>

	
<
s
c
r
i
p
t
 
s
r
c
=
"
<
?
p
h
p
 
e
c
h
o
 
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
 
?
>
/
l
i
b
r
a
r
i
e
s
/
f
u
l
l
s
c
r
e
e
n
_
v
i
e
w
/
b
o
o
t
s
t
r
a
p
/
j
s
/
b
o
o
t
s
t
r
a
p
.
m
i
n
.
j
s
"
>
<
/
s
c
r
i
p
t
>

	
<
?
p
h
p
 
e
l
s
e
i
f
 
(
$
v
i
e
w
 
=
=
 
'
b
o
o
t
s
t
r
a
p
3
'
)
 
:
 
?
>

	
<
s
c
r
i
p
t
 
s
r
c
=
"
<
?
p
h
p
 
e
c
h
o
 
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
 
?
>
/
l
i
b
r
a
r
i
e
s
/
f
u
l
l
s
c
r
e
e
n
_
v
i
e
w
/
b
o
o
t
s
t
r
a
p
3
/
j
s
/
b
o
o
t
s
t
r
a
p
.
m
i
n
.
j
s
"
>
<
/
s
c
r
i
p
t
>

	
<
?
p
h
p
 
e
n
d
i
f
;
 
?
>

	
<
s
c
r
i
p
t
 
t
y
p
e
=
"
t
e
x
t
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
"
>

	
 
 
j
Q
u
e
r
y
.
n
o
C
o
n
f
l
i
c
t
(
)
;

	
 
 
v
a
r
 
a
d
d
o
n
_
a
n
i
m
a
t
i
o
n
s
_
e
n
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

	
<
/
s
c
r
i
p
t
>

	
<
j
d
o
c
:
i
n
c
l
u
d
e
 
t
y
p
e
=
"
h
e
a
d
"
 
/
>

	
<
?
p
h
p
 
i
f
 
(
$
v
i
e
w
 
=
=
 
'
b
o
o
t
s
t
r
a
p
'
)
 
:
 
?
>

	
<
l
i
n
k
 
r
e
l
=
"
s
t
y
l
e
s
h
e
e
t
"
 
h
r
e
f
=
"
<
?
p
h
p
 
e
c
h
o
 
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
 
?
>
/
l
i
b
r
a
r
i
e
s
/
f
u
l
l
s
c
r
e
e
n
_
v
i
e
w
/
b
o
o
t
s
t
r
a
p
/
c
s
s
/
f
u
l
l
s
c
r
e
e
n
.
c
s
s
"
 
t
y
p
e
=
"
t
e
x
t
/
c
s
s
"
 
/
>

	
<
l
i
n
k
 
r
e
l
=
"
s
t
y
l
e
s
h
e
e
t
"
 
h
r
e
f
=
"
<
?
p
h
p
 
e
c
h
o
 
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
R
E
L
P
A
T
H
 
?
>
f
o
n
t
-
a
w
e
s
o
m
e
/
c
s
s
/
f
o
n
t
-
a
w
e
s
o
m
e
.
m
i
n
.
c
s
s
"
 
t
y
p
e
=
"
t
e
x
t
/
c
s
s
"
 
/
>

	
<
?
p
h
p
 
e
l
s
e
i
f
 
(
$
v
i
e
w
 
=
=
 
'
b
o
o
t
s
t
r
a
p
3
'
)
 
:
 
?
>

	
<
l
i
n
k
 
r
e
l
=
"
s
t
y
l
e
s
h
e
e
t
"
 
h
r
e
f
=
"
<
?
p
h
p
 
e
c
h
o
 
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
R
E
L
P
A
T
H
 
?
>
j
q
u
e
r
y
-
u
i
-
t
h
e
m
e
s
/
t
h
e
m
e
s
/
b
a
s
e
/
j
q
u
e
r
y
-
u
i
.
m
i
n
.
c
s
s
"
 
t
y
p
e
=
"
t
e
x
t
/
c
s
s
"
 
/
>

	
<
l
i
n
k
 
r
e
l
=
"
s
t
y
l
e
s
h
e
e
t
"
 
h
r
e
f
=
"
<
?
p
h
p
 
e
c
h
o
 
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
 
?
>
/
l
i
b
r
a
r
i
e
s
/
f
u
l
l
s
c
r
e
e
n
_
v
i
e
w
/
b
o
o
t
s
t
r
a
p
3
/
c
s
s
/
f
u
l
l
s
c
r
e
e
n
.
c
s
s
"
 
t
y
p
e
=
"
t
e
x
t
/
c
s
s
"
 
/
>

	
<
l
i
n
k
 
r
e
l
=
"
s
t
y
l
e
s
h
e
e
t
"
 
h
r
e
f
=
"
<
?
p
h
p
 
e
c
h
o
 
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
R
E
L
P
A
T
H
 
?
>
f
o
n
t
-
a
w
e
s
o
m
e
/
c
s
s
/
f
o
n
t
-
a
w
e
s
o
m
e
.
m
i
n
.
c
s
s
"
 
t
y
p
e
=
"
t
e
x
t
/
c
s
s
"
 
/
>

	
<
?
p
h
p
 
e
l
s
e
i
f
 
(
$
v
i
e
w
 
=
=
 
'
j
q
u
e
r
y
_
u
i
'
)
 
:
 
?
>

	
<
l
i
n
k
 
r
e
l
=
"
s
t
y
l
e
s
h
e
e
t
"
 
h
r
e
f
=
"
<
?
p
h
p
 
e
c
h
o
 
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
R
E
L
P
A
T
H
 
?
>
j
q
u
e
r
y
-
u
i
-
t
h
e
m
e
s
/
t
h
e
m
e
s
/
b
a
s
e
/
j
q
u
e
r
y
-
u
i
.
m
i
n
.
c
s
s
"
 
t
y
p
e
=
"
t
e
x
t
/
c
s
s
"
 
/
>

	
<
?
p
h
p
 
e
n
d
i
f
;
 
?
>

<
/
h
e
a
d
>

<
b
o
d
y
 
c
l
a
s
s
=
"
c
o
n
t
e
n
t
p
a
n
e
"
>

	
<
j
d
o
c
:
i
n
c
l
u
d
e
 
t
y
p
e
=
"
m
e
s
s
a
g
e
"
 
/
>

	
<
j
d
o
c
:
i
n
c
l
u
d
e
 
t
y
p
e
=
"
c
o
m
p
o
n
e
n
t
"
 
/
>

<
/
b
o
d
y
>

<
/
h
t
m
l
>
